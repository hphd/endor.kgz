
<div class="news">
  <div class="container-fluid">
      <!-- <div class="news-bg blur"></div> -->
  <div class="row">
    <!-- <div class="container-fluid"> -->

      <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 col-xl-12">
        <div class="news-text">
          <div><span>Новости</span></div>
        </div>
      </div>
    </div>
  </div>

      <div class="container">
    <div class="row">
        <!-- <div class="row newss"> -->
      <!-- <div class="col-xl-1"></div> -->
          <?php 
          foreach ($m_news as $news):
           ?>
           <div class="col-12 col-md-6 col-sm-12 col-lg-6 col-xl-4">
            <div class="row">
            <?php
            echo '<a href="';
            if($news['url']==false) {echo base_url('pages/news/').$news['id'];}
            else {echo $news['url'];} echo '">'?>
            <div class="block-news">
              <div class="news-img">
                <img src="../../assets/images/backgrounds/healthcare-1.jpg" alt=""></a>
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
                <p><i class="fa fa-indent"></i> <?php $desc = mb_substr($news['description'], 0, 140, 'UTF-8') . '...'; echo $desc; ?></p>
              </div>
            </div>
          </div>
      </a>
        </div>
        </div>
    <?php endforeach ?>
  </div>
</div>

<div class="col-xl-12 col-12 col-sm-12 col-md-12 col-lg-12">
  <div class="container"><br>
    <span>
      <?php
      echo '<a href="';
      echo base_url('pages/news_page'); echo '" class="btn btn-primary mr-auto news-btn">'?>Все актуальные новости</a>
    </span>
  </div>
 <br><br><hr></div>

</div>
</div>