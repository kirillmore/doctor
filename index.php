<?
include("_config.php");
include("functions.php");
?>
<!DOCTYPE html>
<html>
<head> 
  <title><?=$config['title'];?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#fff">
  <!--jquery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!--bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!--less-->
  <link rel="stylesheet" type="text/css" href="css/style.css?v=<?=file_get_contents('version.txt',true);?>" />
  <!--fontawesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-12 my-3">
      <h4>Запись на приём</h4>
    </div>
    <div class="col-12">
      <form name="regform" class="needs-validation">
        <!-- ФИО: -->
        <div class="mb-3">
          <label for="form__fio" class="form-label">ФИО клиента:</label>
          <input type="text" class="form-control" id="form__fio" name="form__fio" required>          
        </div>
        <!-- e-mail -->
        <div class="mb-3">
          <label for="form__email" class="form-label">E-mail:</label>
          <input type="email" class="form-control" id="form__email" name="form__email" required>          
        </div>
        <!-- ВРАЧ -->
        <div class="mb-3">
          <label for="form__emp" class="form-label">Врач:</label>
          <select class="form-select" id="form__emp" name="form__emp" required>
            <option selected value="">Выберите врача</option>
            <?=printEmployees();?>
          </select>
        </div>
        <!-- дата -->
        <div class="mb-3">
          <label for="form__date" class="form-label">Дата:</label>
          <input type="date" class="form-control" id="form__date" name="form__date" required>          
        </div>
        <!-- время -->
        <div class="mb-3">
          <label for="form__time" class="form-label">Время:</label>
          <select class="form-select" id="form__time" name="form__time" required>
            <option selected value="">Выберите время</option>
            <?=printSlots();?>
          </select>
          <div class="invalid-feedback">Это время занято. Выберите другое время.</div>
        </div>
        <input type="submit" name="regform-submit" value="Записаться" class="btn btn-primary">
      </form>
    </div>
    <div class="col-12 message__success">
      <p class="text-center"><i class="fas fa-check fa-3x" style="color: green;"></i></p>
      <p class="text-center">Вы успешно записаны.<br>Информация отправлена на ваш e-mail.</p>
      <p><a href="../doctor/">Назад</a>
    </div>
  </div>
</div>

<script type="text/javascript" src="script.js?v=<?=file_get_contents('version.txt',true);?>"></script>
</body>
</html>