<?php
include("inc/header.php");
include("inc/sidebar.php");

?>


<?php 
    $category_err =  $title_err = $f_price_err = $d_price_err = $d_count_err = $description_err = $N_img_err=  "";
    $category = $title = $description = $f_price = $d_price = $d_count =  $N_img_name = "";
    $t = 1;
    if( $_SERVER["REQUEST_METHOD"] == "POST" ){
        
        if( empty($_REQUEST["catg"])){
            $category_err =  "<p style='color:red'> * Category is Required </p>";
        }else {
          $category = $_REQUEST["catg"];
        }

        if( empty( $_REQUEST["title"] ) ){
            $title_err = "<p style='color:red'> * Post Heading is Required </p>";
        }else{
            $title = $_REQUEST["title"];
        }

        if( empty( $_REQUEST["f_price"] ) ){
            $f_price_err = "<p style='color:red'> * Offers Profit Required </p>";
        }else{
            $f_price = $_REQUEST["f_price"];
        }
        if( empty( $_REQUEST["d_price"] ) ){
            $d_price_err = "<p style='color:red'> * Offers Profit Required </p>";
        }else{
            $d_price = $_REQUEST["d_price"];
        }
        if( empty( $_REQUEST["d_count"] ) ){
            $d_count_err = "<p style='color:red'> * Offers Profit Required </p>";
        }else{
            $d_count = $_REQUEST["d_count"];
        }
        

        if( empty( $_REQUEST["description"] ) ){
            $description_err = "<p style='color:red'> * Post Description is Required </p>";
        }else{
           $description = $_REQUEST["description"];
        }

        if( empty($_FILES["N_img"]["name"])){
           $N_img_err = "<p style='color:red'> * Post N_img is Required </p>";
        }else{

            $N_img_name = $_FILES["N_img"]["name"];
           $N_img_temp_loc = $_FILES["N_img"]["tmp_name"];

           $temp_extension = explode(".",$N_img_name);
          $N_img_extension = strtolower( end($temp_extension) );
          $isallowded = array("jpg","png","jpeg" );

          if( in_array( $N_img_extension , $isallowded ) ){
            $new_file_name =  uniqid("",true).".".$N_img_extension;      
          $location = "../img/img/".$new_file_name;  
          
          }else {
            $N_img_err = "<p style='color:red'> * Only JPG , JPEG and PNG files accepted </p>";
            $N_img_name ="";
          }
        }

        if( !empty($description) && !empty($title) && !empty($f_price)  && !empty($d_price) && !empty($d_count) && !empty( $N_img_name ) ){
            move_uploaded_file($N_img_temp_loc,$location);

        $add_post_description = "INSERT INTO `notes`(`n_tittle`, `n_dic`, `price`, `o_price`, `catg`, `img`, `%`) 
        VALUES ('$title','$description','$d_price','$f_price','$category','$new_file_name','$d_count')";
        $result_add_desc = mysqli_query($conn , $add_post_description);
 
        if($result_add_desc){
            $title = $description = "";
            echo "<script>
            $(document).ready( function(){
                $('#showModal').modal('show');
                $('#linkBtn').text('Add Post Details');
                $('#addMsg').text('Post Heading Added Successfully!');
                $('#closeBtn').text('Add More');
            })
         </script>
         ";
        }

        }

    }
?>

<body>
    <!--====== Fetch Data ============-->
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">




                <table class="table border border-warning  border my-5">
                    <thead class="bg-dark text-white fs-5 font-monospace text-center">
                        <th>Id</th>
                        <th>Title</th>
                       
                        <th>Price</th>
                        <th>N_img</th>
                        <th>Delete</th>
                    </thead>

                    <tbody class="text-center">
                        <?php
           include_once("config/database.php");
            $Record = mysqli_query($conn, "SELECT * FROM `notes` ORDER BY i_d DESC");
            while ($row = mysqli_fetch_array($Record))

            echo "
            <tr>
                <td>{$row['i_d']}</td>
                <td>{$row['n_tittle']}</td>
               
                <td>{$row['o_price']}</td>
                <td><img src='../img/img/{$row['img']}' height='90px' width='200px'></td>
                <td><a href='del_notes.php?ID={$row['i_d']}' class='btn btn-danger'>Delete</a></td>
            </tr>
        ";
        

            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <!-- ckdescription js -->
    <script src="inc/ckeditor/ckeditor.js"></script>

    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="container" style="margin-top:10rem;">
                    <div id=" form" class="pt-5 form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-3 shadow">
                                <h4 class="text-center">Add Post Description </h4>
                                <form method="POST" enctype="multipart/form-data"
                                    action=" <?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                                    <div class="form-group">
                                        <label>Select Post Category: </label>
                                        <select name="catg" class="form-control">
                                            <option selected>All</option>
                                            <option value="Python">Python</option>
                                            <option value="Java">Java</option>
                                            <option value="C">C Programing</option>
                                            <option value="C++">C++</option>
                                            <option value="Js">Java Script</option>
                                            <option value="Hacking">Hacking</option>
                                            <option value="Tool">Tool</option>
                                            <option value="Darkweb">Darkweb</option>
                                            <option value="Other">Other</option>
                                            <option value="Notes">Enginearing Notes</option>
                                        </select>
                                        <?php echo $category_err; ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Post Heading:</label>
                                        <input type="text" class="form-control" value="<?php echo $title; ?>"
                                            name="title">
                                        <?php echo $title_err; ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Final Price:</label>
                                        <input type="text" class="form-control" value="<?php echo $f_price; ?>"
                                            name="f_price">
                                        <?php echo $f_price_err; ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Real Price:</label>
                                        <input type="text" class="form-control" value="<?php echo $d_price; ?>"
                                            name="d_price">
                                        <?php echo $d_price_err; ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Discount in %:</label>
                                        <input type="text" class="form-control" value="<?php echo $d_count; ?>"
                                            name="d_count">
                                        <?php echo $d_count_err; ?>
                                    </div>
                                    <div class="form-group">
                                        <label> Add Notes Description: </label>
                                        <textarea name="description"
                                            id="description"><?php echo $description; ?></textarea>
                                        <?php echo $description_err; ?>
                                    </div>
                                    <div class="form-group">
                                        <label> Add Thumbnail: </label>
                                        <input type="file" name="N_img" class="form-control">
                                        <?php echo $N_img_err; ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Add" class="btn login-form__btn submit w-10 "
                                            name="submit_expense">
                                    </div>

                                </form>
                            </div>
                            <!-- ckdescription function call -->
                            <script>
                            CKEDITOR.replace('description');
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
include("footer.php");


?>