<?php
/**
 * @param string $content
 * @return array
 * Gets the content and returns the first word of each sentence
 */
    function breakdownStr(string $content) : array{
        $getSentences = explode(".", $content);

        foreach ($getSentences as $kay => $value){
            $getWords = explode(" ", $value);
            if($kay == 0){
                $arrWords[] = $getWords[0];
            }else{
                $arrWords[] = $getWords[1];
            }

        }
        array_pop($arrWords);
        return $arrWords;
    }
