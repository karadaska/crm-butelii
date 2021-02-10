<?php
require_once "../etc/config.php";

$size = getRequestParameter('s', 75);
$id   = getRequestParameter('id', 0);

if ($id and $size > 0) {
    $imagepath = false;
    $query     = "select id from users where id = '" . $id . "' and poza!='';";
    $result=myQuery($query);
    if ($row=$result->fetch()) {
        if ($size != 0 and file_exists($file = Utilizatori::CreateTumb($id, $size, $size))) { //thumb mic
            $imagepath = $file;
        }
        if ($imagepath) {
            $imageinfo = getimagesize($imagepath);
            if ($imageinfo[2] == 1) {
                $imagetype = "gif";
            } elseif ($imageinfo[2] == 2) {
                $imagetype = "jpeg";
            } elseif ($imageinfo[2] == 3) {
                $imagetype = "png";
            } else {
                mydebug('poza negasita 1');
                header("HTTP/1.0 404 Not Found");
                exit();
            }
            header("Content-type: image/" . $imagetype);
            @readfile($imagepath);
        }
    } else {
        $imagepath = AVATARE_UPLOAD_ROOT . 'no_avatar_32.jpg';
        header("Content-type: image/jpeg");
        @readfile($imagepath);
    }
} else {
    $imagepath = AVATARE_UPLOAD_ROOT . 'no_avatar_32.jpg';
    header("Content-type: image/jpeg");
    @readfile($imagepath);
}