<?php
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\FileUpload;
use App\classes\Auth;

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'file-upload')
    {
        include "pages/fileUpload.php";
    }
    elseif ($_GET['pages'] == 'students')
    {
        $fileUpload = new FileUpload();
       $students =  $fileUpload->getAllStudentsInfo();
        include "pages/viewStudents.php";
    }
    elseif ($_GET['pages']== 'login')
    {
        include "pages/login.php";
    }
    elseif ($_GET['pages']== 'logout')
    {
       $auth = new Auth();
       $auth->logout();
    }
}


elseif (isset($_POST['btn']))
{
    $fileUpload = new FileUpload($_POST, $_FILES);
   $result =  $fileUpload->index();
    include "pages/fileUpload.php";
}


elseif (isset($_POST['loginBtn']))
{
   $auth = new Auth($_POST);
  $result =  $auth->login();
  include 'pages/login.php';

}