<?php
require_once 'Format.php';
class Image
{
    private string $imagePath;
    private string $newWidth;
    private string $newHeight;

    private Format $newFormat;

    public function __construct(string $imagePath)
    {
        $this->setImagePath($imagePath);
    }

    public function convert(Format $format)
    {
        $this->newFormat = $format;
        return $this;
    }

    public function resize(int $newWidth, int $newHeight)
    {
        $this->newWidth = $newWidth;
        $this->newHeight = $newHeight;
        return $this;
    }

    public function save(?string $newName = null){
        [$width, $height] = getimagesize($this->getImagePath());

        $format = $this->getImageFormat($this->getImagePath());

        if($format == Format::Png->value){
            $newImage = imagecreatefrompng($this->getImagePath());
            $functionName = Format::Png->getImageFunction();
        }else{
            $newImage = imagecreatefromjpeg($this->getImagePath());
            $functionName = Format::Jpeg->getImageFunction();
        }

        $newFormat = $this->newFormat->value ?? $format;
        $newWidth = $this->newWidth ?? $width;
        $newHeight = $this->newHeight ?? $height;
        $tmp = imagecreatetruecolor($newWidth, $newHeight);

        imagecopyresampled($tmp, $newImage, 0, 0 ,0, 0, $newWidth, $newHeight, $width, $height);

        if(isset($this->newFormat)){
            $functionName = $this->newFormat->getImageFunction();
        }

        $newFileName = isset($newName) ?  __DIR__ . "/$newName.$newFormat" : __DIR__ . "/" .pathinfo($this->getImagePath(), PATHINFO_FILENAME) . $newFormat;
        $functionName($tmp, $newFileName);

        imagedestroy($newImage);

    }
    public function setImagePath(string $imagePath): void
    {
        $this->checkFormat($imagePath);
        $this->imagePath = __DIR__ . '/' . $imagePath;
    }

    public function getImagePath()
    {
        return $this->imagePath;
    }


    private function checkFormat(string $imagePath){
        $extension = $this->getImageFormat($imagePath);

        $enums = Format::cases();
        $allFormats = array_map(function ($enum){
            return $enum->value;
        }, $enums);



        if(!in_array($extension, $allFormats)){
            throw new Exception('Invalid format');
        }
    }

    /**
     * @param string $imagePath
     * @return string
     */
    private function getImageFormat(string $imagePath) : string{
        return pathinfo($imagePath, PATHINFO_EXTENSION);
    }
}