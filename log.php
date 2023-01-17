<?php
session_start();

if($_POST){
  $pattern_mylogin = strlen($_POST['mylogin']);
  $pattern_mypassword = strlen($_POST['mypassword']);
  if(file_exists('file.json')){
    $json = file_get_contents('file.json');
    $jsonArr = json_decode($json, true);
    $jsonArray = $jsonArr;
    $err = 'Такой пользователь не существует!';
    foreach($jsonArr as $key => $value){
      if($value['login'] == $_POST['mylogin']){
        
        $err = '';
        if($value['password'] == md5($_POST['mypassword'].'qazwsx')){
            $_SESSION['login'] = $value['login'];
        }else{
            $err = 'Такой пароль не существует!';    
        }
      } 
      echo $value['login'].'|'.$_POST['mylogin'];
      
    }
    header('location:/');
    if($err){
        
    }else{
        echo $err;
    }
}
}
