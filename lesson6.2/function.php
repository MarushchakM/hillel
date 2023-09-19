<?php
/**
 * @param string $content
 * @return array
 * Gets the content and returns the first word of each sentence
 */
    function breakdownStr(string $content) : array{

        $getSentences = explode(".", $content);

        foreach ($getSentences as $value){
            $nevArr[] = trim($value, " ");
        }

        foreach ($nevArr as $value){
            $getWords = explode(" ", $value);
            $arrWords[] = $getWords[0];
        }

        return $arrWords;
    }
?>