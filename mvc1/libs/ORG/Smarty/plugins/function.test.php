<?php
    function smarty_function_test($params){
       $width= $params['width'];
       $height=$params['height'];
       return $area=$width*$height;
    }
?>