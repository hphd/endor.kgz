 <div class="container-fluid">
 <div class="row footer">
   <div class="col-xl-12 col-md-12 col-12 col-sm-12 col-12">
     <div class="row footer-menu-items">
       <div class="col-xl-3 col-md-12 col-sm-12 col-12">
         <div class="first-menu-item">
            <?php 
                  foreach ($main_menu as $menu):
                 ?>
           <div class="footer-item"><a href="<?php echo $menu['url'];?>"><?php echo $menu['title']; ?></a></div>
         <?php endforeach; ?>
         </div>
       </div>

       <div class="col-xl-3 col-md-12 col-sm-12 col-12">
         <div class="second-menu-item">
          <div class="footer-item"><a href="">Записаться на прием</a></div>
          <div class="footer-item"><a href="">Вакансии</a></div>
          <div class="footer-item"><a href="">Фотогалерея</a></div>
         </div>
       </div>

       <div class="col-xl-3 col-md-12 col-sm-12 col-12">
         <div class="third-menu-item">
           <div class="soc">
                <ul class="social-icons">
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-codepen"></i></a></li>
                </ul>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-12 col-sm-12 col-12">
       <div class="fourth-menu-item about-block">
        <table>
<!--          <tr>
           <div class="about-title">Режим работы <i class="fa fa-clock-o"></i></div>
         </tr> -->
         <tr>
           <th>Понедельник</th>
           <td>08:00 - 18:00</td>
         </tr>
         <tr>
           <th>Вторник</th>
           <td>08:00 - 18:00</td>
         </tr>
         <tr>
           <th>Среда</th>
           <td>08:00 - 18:00</td>
         </tr>
         <tr>
           <th>Четверг</th>
           <td>08:00 - 18:00</td>
         </tr>
         <tr>
           <th>Пятница</th>
           <td>08:00 - 18:00</td>
         </tr>
         <tr>
           <th>Суббота</th>
           <td>08:00 - 15:00</td>
         </tr>
         <tr>
           <th>Воскресенье</th>
           <td>Выходной</td>
         </tr>
       </table>
     </div>
   </div>

 </div>
</div>
</div>
</div>

  <div class="container-fluid">
<div class="row under-foot">
 <div class="col-xl-12 col-12">
  <div class="under-foot">
   2019г. Все права защищены / <span style="color: #ccc; font-size: 10px">endourology.kg <i class="fa fa-copyright"></i> </span>
 </div>
</div>
</div>



</div>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="../../assets/glide-3.3.0/dist/glide.min.js"></script>
<script>
  (function($) { "use strict";

    $(function() {
      var header = $(".start-style");
      $(window).scroll(function() {    
        var scroll = $(window).scrollTop();

        if (scroll >= 10) {
          header.removeClass('start-style').addClass("scroll-on");
        } else {
          header.removeClass("scroll-on").addClass('start-style');
        }
      });
    });   
    
  //Animation
  
  $(document).ready(function() {
    $('body.hero-anime').removeClass('hero-anime');
  });

  //Menu On Hover

  $('body').on('mouseenter mouseleave','.nav-item',function(e){
    if ($(window).width() > 750) {
      var _d=$(e.target).closest('.nav-item');_d.addClass('show');
      setTimeout(function(){
        _d[_d.is(':hover')?'addClass':'removeClass']('show');
      },1);
    }
  }); 
  
  //Switch light/dark
  
  $("#switch").on('click', function () {
    if ($("body").hasClass("dark")) {
      $("body").removeClass("dark");
      $("#switch").removeClass("switched");
    }
    else {
      $("body").addClass("dark");
      $("#switch").addClass("switched");
    }
  });  
  
})(jQuery); 
</script>
<script src="../../assets/js/wow.min.js"></script>
<script src="../../assets/lightbox/js/lightbox-plus-jquery.min.js"></script>
<script>
  new WOW().init();
</script>
<script>
  //Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 220) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>
<script>
    var accItem = document.getElementsByClassName('accordionItem');
    var accHD = document.getElementsByClassName('accordionItemHeading');
    for (i = 0; i < accHD.length; i++) {
        accHD[i].addEventListener('click', toggleItem, false);
    }
    function toggleItem() {
        var itemClass = this.parentNode.className;
        for (i = 0; i < accItem.length; i++) {
            accItem[i].className = 'accordionItem close';
        }
        if (itemClass == 'accordionItem close') {
            this.parentNode.className = 'accordionItem open';
        }
    }
</script>
</body>
</html>
