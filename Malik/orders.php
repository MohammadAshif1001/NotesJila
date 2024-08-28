<?php
include("inc/header.php");
include("inc/sidebar.php");

?>

<body>

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