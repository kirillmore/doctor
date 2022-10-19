<?
function printEmployees() {
  //select employees
  $sql="SELECT * FROM employees";
  $result=mysql_query($sql);
  while($row=mysql_fetch_array($result))
    $code.="<option value=\"".$row['id']."\">".$row['emp_fio']."</option>";
  return $code;
}

function printSlots() {
  //select slots
  $sql="SELECT * FROM slots";
  $result=mysql_query($sql);
  while($row=mysql_fetch_array($result))
    $code.="<option value=\"".$row['slot']."\">".$row['slot']."</option>";
  return $code;
}

function sendMail($email_to,$email_subject,$email_body,$config){
  //отправить e-mail
  require_once("tools/PHPMailer/class.phpmailer.php");
  require_once("tools/PHPMailer/PHPMailerAutoload.php");
  $mail=new PHPMailer();
  $mail->IsSMTP();
  $mail->SMTPAuth=true;
  $mail->SMTPSecure="ssl";
  $contact_mail=$config['mail'];
  $mail->Host=$config['host'];
  $mail->Port=$config['port'];
  $mail->Username=$config['username'];
  $mail->Password=$config['pass'];
  $mail->CharSet="utf-8";
  $mail->SetFrom($contact_mail,$config['from']);
  foreach($email_to as $value) $mail->AddCC($value);
  $mail->Subject=$email_subject;
  $email_body.='<br><br><font size="-1">Вы получили это письмо, т.к. прошли
    регистрацию на сайте '.$config['domain'].'.<br>
    <a href="'.$config['domain'].'/tools/unsubscribe.php?mail='.$email_to[0].'">
      Отписаться (unsubscribe)</a><br>
      Это письмо отправлено роботом, отвечать на него не нужно.</font><br>';
  $mail->MsgHTML($email_body);
  if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: '.$mail->ErrorInfo;
  }
}

?>