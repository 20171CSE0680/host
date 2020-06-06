<?php
include("connet.php");
if(isset($_POST['up']))  
{
    move_uploaded_file($_FILES['file']['tmp_name'],$_FILES['file']['name']);
}
echo("<img src=".rtrim($_FILES['file']['name'],"/")." />");
?>