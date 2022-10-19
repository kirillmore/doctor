<?
$config['title']='Запись на приём';

//mail box
  $config['mail']='sendrequest@kirillmore.ru';
  $config['host']='smtp.spaceweb.ru';
  $config['port']=465;
  $config['username']='sendrequest@kirillmore.ru';
  $config['pass']='***';
  $config['from']='Заявка с сайта';
//domain
  $config['domain']='nodomain.ru';

//Адреса менеджеров
  $emailmanagersarr=array("support@site.ru");

function dbconnect(){
  if($_SERVER['HTTP_HOST']=='localhost' OR $_SERVER['HTTP_HOST']=='127.0.0.1'){
    //localhost
    $host='localhost';
    $login='root';
    $pass='root';
    $dbname='kirillmore_doctor';
    $port=3306;
  }
  else{
    //remote
    $host="localhost";
    $login="***";
    $pass="***";
    $dbname=$login;
  }
  $con=mysql_connect($host,$login,$pass) or die(mysql_error());
  mysql_query('SET character_set_database = utf8');
  mysql_query('SET NAMES utf8');
  mysql_select_db($dbname,$con);
}

dbconnect();
?>