<hr>
<div class="collective">
    <div class="container">
  <div class="row">
  <?php 
  foreach ($collective as $collective):
   ?>
   <div class="col-xl-4 col-12">
     <?php
            echo '<a href="';
            if($collective['url']==false) {echo base_url('pages/employee/').$collective['id'];}
            else {echo $collective['url'];} echo '">'?>
      <div class="col_block">
        <div style="background-image: url('<?php echo base_url().'assets/'.$collective['image']?>')" class="col_img"></div>
        <div class="col_name">
          <?php echo $collective['name']; ?>
        </div>
        <div class="col_pos">
          <?php echo $collective['position']; ?>
        </div>
      </div>
    </div>
  </a>
<?php endforeach; ?>
</div> 
</div>
</div>