
<?php
    include_once 'function.php';

    ob_start();

    include_once 'page.php';

    $arrWords = breakdownStr($pageContent);
    $pageContent = ob_get_clean();

    foreach ($arrWords as $kay => $value){
        $arrBoldWords[] = "<b>$value</b>";
    }

    $pageContent = str_replace($arrWords, $arrBoldWords, $pageContent );

    echo $pageContent;
