<hr>
<div class="container all-news">
<div class="row">
  <?php 
  foreach ($news as $news):
   ?>
           <div class="col-12 col-md-6 col-sm-12 col-lg-6 col-xl-4">
          <?php
            echo '<a href="';
            if($news['url']==false) {echo base_url('pages/news/').$news['id'];}
            else {echo $news['url'];} echo '">'?>
           <div class="block-news">
            <div class="news-img">
                <img src="../../assets/img/<?php echo $news['image'];?>" alt=""></a>
            </div> 
            <div class="news-info">
             <div class="news-text-title">
              <span class="float-left">
                <i class="fa fa-tag"></i> 
                <?php echo $news['name'] ?>   
              </span>
              <span class="date float-right">
                <i class="fa fa-calendar"></i> <?php echo $news['date'] ?>
              </span>
            </div>
            <div class="news-description">
              <p><i class="fa fa-indent"></i> <?php $desc = mb_substr($news['description'], 0, 110, 'UTF-8') . '...'; echo $desc; ?></p>
            </div>
          </div>
            <button class="btn ml-3 news-button" type="button">Перейти</button>   
        </div>
      </div>
<?php endforeach; ?>
</div>
    </div>
    <hr>