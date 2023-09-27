<?php
require_once 'Priority.php';
require_once 'Status.php';
class Todo
{
    private string $filePath;


    public function __construct(string $listName)
    {
        $this->filePath = __DIR__ . '/' . $listName . '.txt';
    }

    /**
     * convert the content an array
     * @return array
     */
    public function strInArr() : array
    {
        $fGetContent = file_get_contents($this->filePath);
        $fGetContent = trim($fGetContent);
        $strInArr = explode(PHP_EOL, $fGetContent);
        return $strInArr;
    }

    /**
     * get one value from all tasks in one array
     * @param int $id
     * @return int|bool
     */
    private function searchKayTask(int $id) : int|bool
    {
        $allTasks = [];

        foreach ($this->strInArr() as $value){
            $onePointer = explode('|', $value);
            $allTasks[] = $onePointer[0];
        }

        $kay = array_search($id, $allTasks);
        return $kay;
    }

    /**
     * @param string $addContent
     * @param Priority $priority
     * @return void
     * @throws Exception
     */
    public function addTask(string $addContent, Priority $priority) : void
    {
        $fopen = fopen($this->filePath, 'a+');
        $allTasks = [];

        if(filesize($this->filePath) == 0){
            $id = 1;
            $flag = false;
        }else{
            $arr = $this->strInArr();

            foreach ($this->strInArr() as $value){
                $onePointer = explode('|', $value);
                $allTasks[] = $onePointer[1];
            }

            $flag = in_array($addContent, $allTasks);
            $id = count($arr) + 1;
        }
        if(!$flag){
            $content = $id . '|' . $addContent . '|' . $priority->value . '|' . Status::NotComplit->value .  PHP_EOL;

            fwrite($fopen, $content);
            fclose($fopen);
        }else{
            throw new Exception("Завдання '$addContent' вже існує");
        }
    }

    /**
     * @param int $id
     * @return void
     * @throws Exception
     */
    public function deleteTask(int $id) : void
    {
        $arr = $this->strInArr();

        if(filesize($this->filePath) !== 0){
            $kay = $this->searchKayTask($id);

            if($kay !== false){
                unset($arr[$kay]);
                $newAllContent = implode(PHP_EOL, $arr);
                file_put_contents($this->filePath, $newAllContent . PHP_EOL);
            }else{
                throw new Exception("Завдання '$id' не існує");
            }

        }else{
            throw new Exception("Ваш список завдань пустий");
        }
    }

    /**
     * @param int $id
     * @return void
     * @throws Exception
     */
    public function completeTask(int $id) : void
    {

        $arr = $this->strInArr();

        if(filesize($this->filePath) !== 0){
            $kay = $this->searchKayTask($id);

            if($kay !== false){
                $myTask = explode('|', $arr[$kay]);

                if($myTask[3] !== Status::Complit->value){
                    $myTask[3] = Status::Complit->value;

                }else{
                    throw new Exception("Завдання '$id' вже було виконане");
                }
                $myTaskInStr = implode('|', $myTask);
                $arr[$kay] = $myTaskInStr;
                $newAllContent = implode(PHP_EOL, $arr);

                file_put_contents($this->filePath, $newAllContent . PHP_EOL);
            }else{
                throw new Exception("Завдання '$id' не існує");
            }

        }else{
            throw new Exception("Ваш список завдань пустий");
        }
    }

    /**
     * @return void
     * @throws Exception
     */
    public function getTasks()
    {
        if(filesize($this->filePath) !== 0 ){
            $arrayRevers = array_reverse($this->strInArr());
            $areInStr = implode(PHP_EOL, $arrayRevers);
            echo $areInStr;
        } else {
            throw new Exception("Завдань ще не має");
        }
    }

}