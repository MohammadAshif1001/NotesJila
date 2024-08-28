<?php
include("inc/header.php");
include("inc/sidebar.php");

?>

<body>
<div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">


                <form action="slider/insert.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <H1 class="text-center fw-bold fs-3 text-warning">Slider Control</H1>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Link</label>
                        <input type="text" name="Slink" class="form-control" placeholder="Enter Product Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add Image</label>
                        <input type="file" name="Simage" class="form-control">
                    </div>
                    <button name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Upload</button>

                </form>
            </div>
        </div>
    </div>

    <!--====== Fetch Data ============-->
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">

            


    <table class="table border border-warning  border my-5">
        <thead class="bg-dark text-white fs-5 font-monospace text-center">
            <th>Id</th>
            <th>Link</th>
            <th>Image</th>
            <th>Delete</th>
        </thead>

        <tbody class="text-center">
            <?php
            
            $Record = mysqli_query($conn, "SELECT * FROM `tbslider`");
            while ($row = mysqli_fetch_array($Record))

         echo "
           
            <tr>
                <td>$row[Id]</td>
                <td>$row[SLink]</td>
                <td><img src='slider/Uploadimage/$row[SImage]' height='90px' width='200px'></td>
                <td><a href='slider/delete.php? ID= $row[Id]' $ class = 'btn btn-danger' >Delete</a></td>
                
            </tr>
           
           ";

            ?>
        </tbody>
    </table>
    </div>
    </div>
    </div>

        <?php
include("footer.php");


?>