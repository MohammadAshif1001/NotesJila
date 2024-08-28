

<div class="owl-carousel owl-theme" id="homeslider">
        <?php 
           $Record2 = mysqli_query($conn, "SELECT * FROM `tbslider`");
            
            while ($Row2 = mysqli_fetch_array($Record2)){
                echo"
            <div class='item'>
            <a href='$Row2[SLink]'>
                <img class='owl-lazy' data-src='Malik/slider/Uploadimage/$Row2[SImage]' >
                </a>
            </div>
            ";
            }
            ?>
        </div> 
        <!-- =====================Js Script =============================-->
<script>
         $('#homeslider.owl-carousel').owlCarousel({
    lazyLoad: true,
    loop: true,
    margin: 5,
    dots: true,
    nav: false,
    autoplay: true,
    autoplayTimeout: 3000,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:false
        }
    }
});

        </script>

        
<!-- Carousel End -->