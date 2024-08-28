
<div class="owl-carousel owl-theme" id="slider">
      <?php
        include 'root/config.php';
        $Record = mysqli_query($conn, "SELECT * FROM `tbslider`");
        while ($Row = mysqli_fetch_array($Record)) {
          echo "<div class='item'>
                  <img src='Malik/slider/Uploadimage/{$Row['SImage']}' alt='{$Row['SImage']}' class='d-block w-100'>
                </div>";
        }
      ?>
</div>
<script>
            $(' #slider.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                autoplay: true,
                autoplayTimeout: 3000,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            })
        </script>
<!-- Carousel End -->