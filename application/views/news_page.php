  <?php 
  foreach ($in_news as $in_news):
   ?>
    <hr>
      <div class="container directions">
    <div class="row inner-block">
      <div class="col-xl-12">
         <div class="inner-block-img" style="background-image: url('../../assets/images/backgrounds/36dbe9ef8b277f773545349777e66399.jpg');"></div>
      </div>
   <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12" style="">
      <!-- <div class="row"> -->
        <div class="inner-block">
         <!-- <div class="inner-block-img" style="background-image: url('../../assets/images/backgrounds/36dbe9ef8b277f773545349777e66399.jpg')"></div> -->
         <div class="inner-block-title">
          <div class="col-xl-12">
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                <div class="row">
                  <div class="inner-title">
              <i class="fa fa-tag"></i> <?php echo $in_news['name']; ?>
                  </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="text-align: right;">
              <div class="inner-date">
              <i class="fa fa-calendar-o"></i> <?php echo $in_news['date'] ?>
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
        <i class="fa fa-indent"></i> <?php echo $in_news['description']; ?>
      </div>
    </div>
    <hr>
  </div>
 
    <div class="col-xl-3 col-lg-3 col-md-3"><br>
      <div class="row">
             <div class="accordionWrapper">
        <div class="accordionItem open">
          <div class="accordionItemHeading">Дополнительная информация</div>
          <div class="accordionItemContent">
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet nam quam quas porro quia sequi perspiciatis ex saepe perferendis repellendus, ea tenetur, nisi neque. Facilis, optio amet eum. Autem libero, culpa illo nemo, itaque at placeat blanditiis obcaecati totam ad hic unde tempora necessitatibus corrupti, voluptas beatae alias! Labore consectetur nesciunt recusandae placeat quam culpa molestiae eligendi ipsam temporibus nam!
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
      </div>
 
    </div>
</div>
</div>

<?php endforeach; ?>
