<?php
include 'storecss.php';
?>


<div class="heading">
    <h1 style="animation: myanimation 2s linear infinite;">
        <bold>&#160;</bold>
    </h1>
</div>

<section id="Combo">



    <div class="gallery">
        <?php
    include_once("root/config.php");
    $limit = 10;


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