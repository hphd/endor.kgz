<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="../../../assets/images/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../../../assets/css/summernote.css ">
  <link rel="stylesheet" href="../../../assets/css/animated-icons.css">
  <link rel="stylesheet" href="../../../assets/css/font-awesome.css">
  <link rel="stylesheet" href="../../../assets/css/animate.css">
  <link rel="stylesheet" href="../../../assets/css/style.css">
  <title>Еndourology.kg</title> 
</head>
<body>
  <div class="er_body_nav">
    <div class="container er_bg all-news">
    <div class="mb-3"><a href="<?php echo base_url('pages/adminka'); ?>" class="er_back">Назад</a></div>
    <select name="format" class="form-control er_sel_2" onchange="ajax();">   
      <option value="1">Новость</option>        
      <option value="2">Фото в галерею</option>       
      <option value="3">Коллектив</option>     
      <option value="4">Видео</option>     
    </select>
    <div class="er_big_box">
      <table class="er_ul">
  <?php 
  $i = 0;
  foreach ($news as $news) {
    $i++;
   ?>
        <tr>
          <td width="2%"><?php echo $i; ?>.</td>
          <td width="75%"><?php echo $news['name']; ?></td>
          <td width="10%">
            <button class="btn ml-3 news-button news-button-l" type="button" onclick="ajax(<?php echo $news['id'] ?>)">Удалить</button>
          </td>
          <td width="10%">
            <a href="<?php echo base_url('pages/edit_record/'.$news['id']); ?>"><button class="btn ml-3 news-button news-button-r" type="button">Изменить</button></a>
          </td>
        </tr>
    <?php 
  }
    ?>
      </table>
      </div>
    </div>
  </div>
</div>












  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- <script src="../../../assets/js/jquery.min.js"></script> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="../../../assets/js/summernote.min.js"></script>
  <script src="../../../assets/js/er_js.js"></script>
</body>
</html>