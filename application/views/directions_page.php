  <?php 
  foreach ($in_direction as $direction):
   ?>
   <hr>
   <div style="border-top: 38px solid <?php echo $direction['background-color']?>" class="container directions">
     <div class="row inner-block">
      <div class="col-xl-12">
       <div class="inner-block-img" style="background-image: url('<?php echo base_url().$direction['image']?>');"></div>
     </div>
     <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12" style="">
      <br>
      <div class="inner-block">

       <div class="inner-block-title">
         <div class="col-xl-12">
          <div class="row">
           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="row">
              <div class="inner-title">
                <i class="fa fa-tag"></i> <?php echo $direction['title']; ?>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="text-align: right;">
            <div class="inner-date">
              <i class="fa fa-calendar-o"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="social-media-icons col-xs-12">
      <ul class="col-xs-12">
        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
        <a href="#"><i class="fa fa-youtube-square fa-2x"></i></a>
        <a href="#"><i class="fa fa-rss-square fa-2x"></i></a>               
      </ul>
    </div>
    <div class="inner-block-description">
      <i class="fa fa-indent"></i> <?php echo $direction['detail']; ?>
    </div>
  </div>
  <hr>
</div>

<div class="col-xl-3 col-lg-3 col-md-3"><br>
  <div class="row">
   <div class="accordionWrapper">
    <div class="accordionItem open">
      <div class="accordionItemHeading">Обратный вызов</div>
      <div class="accordionItemContent">
        <div class="title">Оставьте свою заявку</div>
        <div><input type="text" placeholder="Введите ваш номер"></div>
      </div>
    </div>

    <div class="accordionItem close">
      <div class="accordionItemHeading">Accordion items</div>
      <div class="accordionItemContent">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias incidunt, dolorem rem ad corporis sed, sequi ipsum et labore dolores recusandae. Aut aspernatur eveniet quod atque voluptate odio! Assumenda, cum.
     </div>
   </div>

   <div class="accordionItem close">
    <div class="accordionItemHeading">How to use a JavaScript accordion</div>
    <div class="accordionItemContent">
     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, cupiditate.
   </div>
 </div>
</div>


<div class="video-blocks">
  <div class="container text-center">
    Рекомендованные видео
  </div>
  <br>
    <?php 
  foreach ($video as $video):
   ?>
  <div class="col-xl-12">
    <div class="video-block">
      <iframe width="100%" height="100%" src="<?php echo $video['src'];?>" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
<?php endforeach; ?>
</div>



</div>

</div>
</div>
</div>


<?php endforeach; ?>
