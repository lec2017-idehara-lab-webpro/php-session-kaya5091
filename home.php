<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href='login.php'>Login</a></br>
    <a href='list.php'>List</a></br>
    <a href='home.php'>Home</a></br><hr />

    <h1>ユーザのホーム画面</h1>

<?php
$login = [];
$login['1001'] = array(
  'name'=>'TAMA Taro',
  'pass'=>'pass01');
$login['1002'] = array('name'=>'HIJIRI Hanako', 'pass'=>'pass02');
$login['1003'] = array('name'=>'NAGAYAMA Jiro', 'pass'=>'pass03');

if(isset($_POST['id'],$_POST['pass']) && strlen($_POST['id'])>0 )
{
  $_SESSION['id'] = $_POST['id'];
  $_SESSION['pass'] = $_POST['pass'];

  $id = $_SESSION['id'];
  $pass = $_SESSION['pass'];

  if(isset($login[$id]) && $login[$id]['pass'] == $pass){
    print('<p>Welcome</p>');
  } else {
    print('<p>Wrong Password</p>');
  }
}

$name = $login[$_SESSION['id']]['name']; // ここ書き換え
$_SESSION['name'] = $name;
print('<hr />');
print("${name}さんでログイン中");

 ?>

  </body>
</html>
