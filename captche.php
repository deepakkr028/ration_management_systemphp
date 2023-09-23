<?php
        $str =md5(microtime());

        $str=substr($str,0,6);

        session_start();

        $_SESSION['capcode'] = $str;

        $img = imagecreate(100,50);

        imagecolorallocate($img,255,255,255);

        $txtcol =imagecolorallocate($img,11,11,11);

        imagestring($img,20,5,5,$str,$txtcol);

        header('content:image/jpeg');

        imagejpeg($img);
?>