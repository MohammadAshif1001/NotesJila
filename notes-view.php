<?php
include_once("header.php");
include_once("css.php");
include_once("root/config.php");
?>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mainImage = document.querySelector('.img-main');
        const thumbnailButtons = document.querySelectorAll('.img-btn');
        const btnLeft = document.querySelector('.img-main__btnlft');
        const btnRight = document.querySelector('.img-main__btnrgt');
        let currentImageIndex = 0;
        const imageUrls = <?php echo json_encode($imgUrls); ?>;

        thumbnailButtons.forEach(function(thumbnailButton, index) {
            thumbnailButton.addEventListener('click', function() {
                mainImage.src = imageUrls[index];
                currentImageIndex = index;
            });
        });

        btnLeft.addEventListener('click', function() {
            currentImageIndex = (currentImageIndex === 0) ? imageUrls.length - 1 : currentImageIndex - 1;
            mainImage.src = imageUrls[currentImageIndex];
        });

        btnRight.addEventListener('click', function() {
            currentImageIndex = (currentImageIndex === imageUrls.length - 1) ? 0 : currentImageIndex + 1;
            mainImage.src = imageUrls[currentImageIndex];
        });
    });
</script>


<div class="new" style="height:1rem;">

</div> <!-- Main item container -->
<main class=" item">
<section class="img">
        <?php
        include_once("root/config.php"); 
        $id = $_GET["id"];
        $p_detail1 = "SELECT * FROM `notes` WHERE i_d = '$id'";
        $r_result1 = mysqli_query($conn, $p_detail1);
        if($r_result1) {
            while($rows1 = mysqli_fetch_assoc($r_result1)) {
                $img1 = $rows1["img"];
                $imgUrls = array(
                    "img/img/$img1"
                );
        ?>
        <!-- <button class="img-main__btnlft img-main__btn">
            <img src="images/icon-next.svg" alt="previous image button" class="img-main__btnlft-img img-main__btn-img" />
        </button>
        <button class="img-main__btnrgt img-main__btn">
            <img src="images/icon-next.svg" alt="next image button" class="img-main__btnrgt-img img-main__btn-img" />
        </button> -->
        <img src="<?php echo $imgUrls[0]; ?>" alt="" class="img-main" />
        <div class="img-btns">
            <?php
            foreach($imgUrls as $index => $imgUrl) {
            ?>
            <button class="img-btn">
                <img src="<?php echo $imgUrl; ?>" alt="shoe product image" class="img-btn__img" />
            </button>
            <?php
            }
            ?>
        </div>
        <?php
            }
        } else {
            echo "<h2>No Record Founds.</h2>";
        }
        ?>
    </section>

    <section class="price">

        <?php
                  include_once("root/config.php"); 
                    $id = $_GET["id"];
                    $p_detail = "SELECT * FROM `notes`
                    WHERE i_d = '$id' ";
                    $r_result = mysqli_query($conn , $p_detail);
                    if($p_detail){
                        while( $rows = mysqli_fetch_assoc($r_result) ){
                        $title =  $rows["n_tittle"];
                        $description =  $rows["n_dic"];
                        $price =  $rows["price"];
                        $f_price =  $rows["o_price"];
                        // $time = $rows["p_time"];
                        $catg = $rows["catg"];
                        $dis = $rows["%"];
                        $img = $rows["img"];
                    ?>
        <h2 class="price-sub__heading">Notes Jila</h2>
        <h1 class="price-main__heading">
            <?php echo"$title";?>
            </h1>
            <div class="price-txt">
                <?php echo"$description";?>
            </div>
            <div class="price-box">
                <div class="price-box__main">
                    <span class="price-box__main-new">₹<?php echo"$f_price";?></span>
                    <span class="price-box__main-discount"> <?php echo"$dis";?>%</span>
                </div>
                <span class="price-box__old">₹<?php echo"$price";?></span>
            </div>

            <div class="price-btnbox my-4">
                <button id='new-buy-btn' class='updated-btn-style'><a style='font-size: 15px; font-weight: 800;'
                        href=''>Buy
                        Now</a></button>


            </div>
            <?php
                        }
                    } else {
                        echo "<h2>No Record Founds.</h2>";
                    }
                    ?>

    </section>
</main>


<div class="heading">
    <h1 style="animation: myanimation 2s linear infinite;">
        <bold>&#160;</bold>
    </h1>
</div>

<div class="gallery">
<?php
    include_once("root/config.php");
    $limit = 3;


                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                    } else {
                        $page = 1;
                    }
                    $offset = ($page - 1) * $limit;
    $Record = mysqli_query($conn, "SELECT * FROM `notes` ORDER BY i_d DESC LIMIT {$offset},{$limit}");
    while ($row = mysqli_fetch_assoc($Record)) {
        ?>
        
        <!-- Content -->
<div class='content'>
    <img src='img/img/<?php echo $row['img'];?>' alt=''>
    <h3><?php echo $row['n_tittle'];?></h3>
    <div class='p_dec' style='font-size: 10px; font-weight: normal; line-height: 1;'>
        <p id='my-paragraph'>"<?php echo substr($row['n_dic'], 0, 100);?>"<span>....</span><a href='notes-view.php?id=<?php echo $row['i_d'];?>' id='more' class='btn' class='btn'
                style='border: none; font-size: inherit; color: red;'><span>Read More</span></a></p>
    </div>
    <div class='p_price'>
        <h5>₹<?php echo $row['o_price'];?></h5>
        <h6>₹<?php echo $row['price'];?></h6>
        <p><?php echo $row['%'];?>% off</p>
    </div>
    <button id='buy-btn' class='glow-on-hover-btn'><a href='notes-view.php?id=<?php echo $row['i_d'];?>'>Buy Now</a></button>
</div>
<?php
                      
                    }
                    $query1 = "SELECT * FROM notes";
                    $result1 = mysqli_query($conn, $query1) or die("Connection Failed.");

                    if (mysqli_num_rows($result1) > 0) {
                        $total_records = mysqli_num_rows($result1);

                        $total_page =  ceil($total_records / $limit);

                        echo "<ul class='pagination admin-pagination'>";
                        if ($page > 1) {
                            echo '<li><a href="index?page=' . ($page - 1) . '">Prev</a></li>';
                        }

                        for ($i = 1; $i <=  $total_page; $i++) {
                            if ($i == $page) {
                                $active = "active";
                            } else {
                                $active = "";
                            }
                            echo '<li class ="' . $active . '"><a href="index?page=' . $i . '">' . $i . '</a></li>';
                        }
                        if ($total_page > $page) {
                            echo '<li><a href="index?page=' . ($page + 1) . '">Next</a></li>';
                        }
                        echo '</ul>';

                    }

?>


</div>


<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <img src="img/security-seals.png" class="img-fluid" alt="Image">
        </div>
    </div>
</div>

<?php 
include_once("footer.php");
?>