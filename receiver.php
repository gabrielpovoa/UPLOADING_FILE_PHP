<?php 

echo "<pre>";
print_r($_FILES);

$ALLOWEDEXTENSIONS = array('image/jpeg', 'image/jpg', 'image/png');

if(in_array($_FILES['archive']['type'], $allowedExtension)) {
    $name = md5(time().rand(0,1000)).'jpg';
    move_uploaded_file($_FILES['archive']['tmp_name'], 'assets/'.$name);
    echo "File saved - no errors";
    } else {
    echo "Not allowed that kind of file";
}