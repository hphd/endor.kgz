    <div class="container"> 
  <div class="row">
    <div class="a">
      <div class="col-lg-12 direc">
        <div class="info-block-bg"></div>
        <div class="wow bounceInLeft">
          <h1 class="main-title" style="background: none; border-bottom: 1px solid cyan;color: #0065A5">НАШИ ОСНОВНЫЕ НАУЧНО-ПРАКТИЧЕСКИЕ НАПРАВЛЕНИЯ</h1>
        </div>
   <!--      <div class="main-text-background wow bounceInRight text-bg col-sm-11 col-11" style="color:#444;border-color:none;font-weight: 600;">
          Основные направления ... Одним из  востребованных направлений хирургического лечения является оперативное ... традиционной урологии, андрологии, 
          нейроурологии, эндоурологии, рентгенэндоурологии и т.д. ... В послеоперационном периоде наши пациенты находятся в комфортных условиях
        </div> -->
        <!-- <div class="container"> -->
          <div class="row">
            <?php 
            foreach ($directions as $directions):   
             ?>
             <div class="col-10 offset-lg-0 col-md-6 col-sm-6 col-lg-4 col-xl-4">
              <div class="row">
               <?php
               echo '<a href="';
               if($directions['url']==false) {echo base_url('pages/directions/').$directions['id'];}
               else {echo $directions['url'];} echo '">'?>
               <div class="block" style="background-color: <?php echo $directions['background-color']?>;">
                <div class="block-img">
                 <img src="<?php echo $directions['image'];?>" alt="">
                 <div class="block-img-hover" style="background:rgba(<?php echo $directions['background-hover-color']?>);">
                   <?php echo $directions['hover_text']; ?>
                 </div>
               </div>
               <div style="background: none" class="container">
                <div class="block-title">
                  <p><?php echo $directions['title']; ?></p>
                </div>
               <!--  <div class="block-button">
                  <?php
                  echo '<a href="';
                  if($directions['url']==false) {echo base_url('pages/directions/').$directions['id'];}
                  else {echo $directions['url'];} echo '">'?>
                Learn More</a>
              </div> -->
            </div>
          </div>
        </a>
      </div>
            </div>
    <?php endforeach; ?>
  </div>
</div>
</div>
</div>
</div>
</div>