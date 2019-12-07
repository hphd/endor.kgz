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
  <div class="er_body">
    <form class="er_form" action="<?php echo base_url('pages/save_record/')?>" method="POST"  enctype="multipart/form-data">
      <div class="er_title">Добавить
      <a href="<?php echo base_url('pages/del_or_red')?>">
        <div class="del_or_red">
          Назад
        </div>
      </div>
      </a>
      <div>
        <select name="format" class="form-control er_sel_1" id="er_sel_id" onchange="er_select()">   
          <?php 
            if($_SESSION['category']=='news'){
              echo '<option selected value="1">Новость</option>';
            } else{
              echo '<option value="1">Новость</option>';
            }
            if($_SESSION['category']=='gallery'){
              echo '<option selected value="2">Фото в галерею</option>   ';
            } else{
              echo '<option value="2">Фото в галерею</option>   ';
            }
            if($_SESSION['category']=='collective'){
              echo '<option selected value="3">Коллектив</option>    ';
            } else{
              echo '<option value="3">Коллектив</option>    ';
            }
            if($_SESSION['category']=='video'){
              echo '<option selected value="4">Видео</option>    ';
            } else{
              echo '<option value="4">Видео</option>    ';
            }
          ?>
        </select>
      </div> 
    <?php 
      foreach ($edit_record as $edit) {
    ?>
      <div class="er_url">
        <div class="er_title" title="Ссылка из YouTube">Iframe ссылка на видео</div>
        <div><input class="form-control" title="Ссылка из YouTube" type="text" name="er_url" style="width: 600px;" placeholder="<iframe src='hhttps://www.youtube.com/embed/sWBImSgijBs'></iframe>"></div>
      </div>
      <div class="er_final_div">
        <div class="er_title er_title_js">Заголовок</div>
        <div>
          <input class="form-control" type="text" value="<?php if($edit['name']!='')echo $edit['name']; ?>" name="title" style="width: 500px;">
        </div>
        <div class="er_collective_show">
          <div class="er_title">Post</div>
          <div><input value="<?php if(isset($edit['post'])!='') echo $edit['post']; ?>"  class="form-control" type="text" name="post" style="width: 500px;"></div>
          <div class="er_title">Департамент</div>
          <div><input value="<?php if(isset($edit['department'])!='') echo $edit['department']; ?>"  class="form-control" type="text" name="department" style="width: 500px;"></div>
          <div class="er_title">Позиция</div>
          <div><input value="<?php if(isset($edit['position'])!='') echo $edit['position']; ?>"  class="form-control" type="text" name="position" style="width: 500px;"></div>
        </div>
        <div class="er_title er_text_js">Текст</div>
        <div>
          <textarea value="" name="text" id="er_textarea_edit" cols="150" rows="10">
            <?php if(isset($edit['department'])!='') echo $edit['description']; ?>
          </textarea>
        </div>
        <div class="er_title">Изменить фото</div>
        <div>
          <input type="file" name="userfile">
        </div>
        <input type="hidden" name="edit_page">
        <input type="hidden" name="id_record" value="<?php echo $edit['id']; ?>">
      </div>
      <input type="submit" name="download" value="Сохранить" class="er_save">
      <?php 
      }  
      ?>
    </form>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- <script src="../../../assets/js/jquery.min.js"></script> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="../../../assets/js/summernote.min.js"></script>
  <script src="../../../assets/js/er_js.js"></script>
  <script type="text/javascript">er_select();</script>
</body>
</html>