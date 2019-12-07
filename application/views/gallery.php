<div class="container">
     <div id="gallery">
         <?php 
            foreach ($gallery as $g) {
         ?>
                <figure class="photo">
                    <a href="<?php echo base_url('assets/img/'.$g['name']) ?>" data-lightbox="roadtrip" data-title="Eagle1"><img src="<?php echo base_url('assets/img/'.$g['name']) ?>" alt="Eagle" /></a>
                    <!-- <figcaption>Eagle</figcaption> -->
                </figure>
<?php 
}
 ?>
            </div>

        
</div>