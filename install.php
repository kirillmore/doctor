<?
include_once("_config.php");
//table clients
mysql_query('DROP TABLE IF EXISTS clients') or die(mysql_error());
mysql_query("CREATE TABLE clients (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  cl_fio VARCHAR(255) NOT NULL,
  cl_email VARCHAR(255) NOT NULL,
  cl_date VARCHAR(255) NOT NULL,
  cl_time VARCHAR(255) NOT NULL,
  emp_id VARCHAR(255) NOT NULL
)") or die(mysql_error());
//table employees
mysql_query('DROP TABLE IF EXISTS employees') or die(mysql_error());
mysql_query("CREATE TABLE employees (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  emp_fio VARCHAR(255) NOT NULL
)") or die(mysql_error());
//add emp
mysql_query('INSERT INTO employees (id, emp_fio) VALUES 
  (NULL,"Иванов А.А."),
  (NULL,"Петров Б.Б."),
  (NULL,"Сидоров В.В.")
') or die(mysql_error());
//table slots
mysql_query('DROP TABLE IF EXISTS slots') or die(mysql_error());
mysql_query("CREATE TABLE slots (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  slot VARCHAR(255) NOT NULL
)") or die(mysql_error());
//add slots
mysql_query('INSERT INTO slots (id, slot) VALUES 
  (NULL,"10:00"),
  (NULL,"11:00"),
  (NULL,"12:00"),
  (NULL,"14:00"),
  (NULL,"15:00"),
  (NULL,"16:00")
') or die(mysql_error());
echo 'Таблицы настроены.';
?>