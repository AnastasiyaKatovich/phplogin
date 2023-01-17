<?php

if($_POST){
  //   print_r($_POST); проверка подключен ли пост
  $pattern_login = strlen($_POST['login']);
  $pattern_password = strlen($_POST['password']);
  $pattern_confPassword = strlen($_POST['confPassword']);
  $pattern_name = strlen($_POST['name']);
  $err = [];
  if(file_exists('file.json')){
    $json = file_get_contents('file.json');
    $jsonArr = json_decode($json, true);
    $jsonArray = $jsonArr;
    //print_r($jsonArray); проверка
    foreach($jsonArr as $key => $value){
      if($value['email'] == $_POST['email']){
        $err[] = 'Такой email уже существует';
      }else{
        //echo "Спасибо за регистрацию!";
      }
    }
  }
  //echo $pattern_login; проверка
  if($pattern_login < 6 ){
  $err[] = 'В поле логин ввели менее 6 символов';
  } 
  if($pattern_password < 6){
    $err[] = 'В поле пароль ввели менее 6 символов';
  }
  if($_POST['confPassword'] != $_POST['password'] ){
    $err[] = 'Пароли не совпадают!';
  }  
  if($pattern_name < 2 ){
    $err[] = 'В поле имя ввели менее 2 символов';
  } 
  // вся валидация
  if(isset($err[0])){
    foreach($err as $one){
          $flag = 1;
      echo "<div class='text-danger'>";
      echo $one;
      echo "</div>";
    }
  }else{
    //вставка данных в файл.
    //print_r($_POST); проверка
    echo "Поздравляем, вы зарегистрированы!";
    $jsonArray[] = [
      'login' => $_POST['login'],
      'password' => md5($_POST['password'].'qazwsx'),
      'email' => $_POST['email'],
      'name' => $_POST['name'],
    ];
    file_put_contents('file.json', json_encode($jsonArray, JSON_FORCE_OBJECT));
  }
}
?>