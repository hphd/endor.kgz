<div class="container mt-5 mb-5">
    <div class="row">
    <?php 
        foreach ($video as $v) {
    ?>
        <div class="col-md-6">
         <?php echo $v['name']; ?>
        </div>               
    <?php 
        }
    ?>
    </div>
</div>





<!-- <div id="video-gallery">
  <a href="https://www.youtube.com/watch?v=ACSwxJINrdA" >
      <img src="img/thumb1.jpg" />
  </a>
  <a href="https://vimeo.com/1084537" >
      <img src="img/thumb2.jpg" />
  </a>
  ...
</div>
<script>
  $('#video-gallery').lightGallery(); 
  $('#video-player-param').lightGallery({
    youtubePlayerParams: {
        modestbranding: 1,
        showinfo: 0,
        rel: 0,
        controls: 0
    },
    vimeoPlayerParams: {
        byline : 0,
        portrait : 0,
        color : 'A90707'     
    }
}); 
</script> -->