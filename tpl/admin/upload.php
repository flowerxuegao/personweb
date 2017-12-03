<?php
$file=$_FILES['file'];
if(is_uploaded_file($file['tmp_name'])){
    move_uploaded_file($file['tmp_name'],$file['name']);
}
?>