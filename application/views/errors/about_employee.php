 <?php 
  foreach ($employee as $employee):
 ?>
<div class="employee-block">
  <div class="container">
   <div class="block-name">
  <?php echo $employee['name']; ?>  <span class="doctor-icon"><img src="../../assets/images/doctor.png" alt=""></span> 
  </div>
  <div class="row">
    <div class="col-xl-2">
     <div class="block-img">
      <img src="<?php echo base_url().'assets/'.$employee['img_small']?>" alt="">
    </div>
  </div>
  <div class="col-xl-3">
    <div>
      <div class="block-title">Должность:</div>
      <div class="post"><?php echo $employee['post'] ?></div>
      <div class="block-title">Образование:</div>
      <div>MD, Ph.D., Professor</div>
    </div>
  </div>

  <div class="col-xl-3">
    <div class="block-title">Отдел:</div>
    <div class="dep"><?php echo $employee['department']; ?></div>
    <div class="block-title">Языки:</div>
      <div>English</div>
      <div>Mandarin</div>
      <div>Japanese</div>
  </div>

  <div class="col-xl-12">
    <div class="block-title bb">Биография:</div>
    <div class="biography"><?php echo $employee['about']; ?></div>
  </div>
</div>
</div>
</div>
<?php endforeach; ?>