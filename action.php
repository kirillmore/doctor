<?
include("_config.php");
include("functions.php");
$sql="
  SELECT * FROM clients
  WHERE cl_date='".$_POST['form__date']."' AND cl_time='".$_POST['form__time']."'";
$result=mysql_query($sql);
$num_results=mysql_num_rows($result);
if($num_results>=1){//fail
  echo 'fail';
}
else {//success
  $query="INSERT INTO clients (
    id, cl_fio, cl_email, cl_date, cl_time, emp_id
  ) VALUES (
    NULL,
    '".$_POST['form__fio']."',
    '".$_POST['form__email']."',
    '".$_POST['form__date']."',
    '".$_POST['form__time']."',
    '".$_POST['form__emp']."'
  )";
  //send mail to client
  $email_to = array($_POST['form__email']);
  sendMail($email_to,'Регистрация ко врачу','<p>Вы успешно зарегистрированы.</p><p>Информация...</p>',$config);
  //send mail to manager
  mysql_query($query) or die(mysql_error());
  echo 'success';
}
?>