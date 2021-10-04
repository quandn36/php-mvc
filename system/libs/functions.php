<?php

function chuyentrang($url,$data=[])
{
  foreach ($data as $key => $value)
  {
    $_SESSION['redirect_'.$key]=$value;
  }

  header('location: '.$url);
  exit;
}

function redirect_get($key)
{
  $value =  $_SESSION['redirect_'.$key]??'';

  unset($_SESSION['redirect_'.$key]);
  return $value;
}

function islogin(){
  return isset($_SESSION['status_login']) && $_SESSION['status_login'];
}

function catchuoi() {
  /**********************/
  $path ='data/users.txt';
  $file = fopen($path,'r');
  $users = [];
  while(!feof($file))
  {
    $struser = trim(fgets($file));
    $user = explode('|',$struser);   
    if(count($user)==5)    
    {
      $username = trim($user[0]);
      $users[$username] = [
        'username'  =>$username,
        'password'  =>trim($user[1]),
        'name'      =>trim($user[2]),
        'avt'       =>trim($user[3]),
        'status'    =>trim($user[4]),
      ];
    }
  }
  fclose($file);
  /**********************/

}
function msg($msg,$status ='success')
{
  return $msg?'<div class="alert alert-'.$status.' alert-dismissible fade show" role="alert">'.$msg.'</div>
  <style type="text/css" media="screen">.alert { text-align:center; float:right; z-index: 9999; position: fixed; bottom: 3px; left: 20px; } </style>
  <script> $(".alert").alert(); </script>':'';
}

function dd($mang=[]) {
  echo '<pre>',print_r($mang),'</pre>';
  exit();
}


function href($controller,$action,$params=[])
{
  $ext = '';
  foreach ($params as $key => $value) {
    $ext .="&$key=$value";
  }

  return "http://localhost/admin/index.php?controller={$controller}&action={$action}{$ext}";
}

function ck_replace($textID = '', $height = null)
{
  if (empty($height)){
    return '<script>CKEDITOR.replace("'.$textID.'");</script>';
     // CKFinder.setupCKEditor("'.$textID.'");
  } else {
    return '<script>CKEDITOR.replace( "'.$textID.'", { height:'.$height.' });</script>';
     // CKFinder.setupCKEditor("'.$textID.'");
  }
}

// ham tra ve duong dan tuyet doi cua cai hinh
function asset($link) {

  $base_link = 'public/'. $link;

  if($base_link === 'public/') {
    return $base_link = '';
  } else {
    return $base_link;
  }
} 
