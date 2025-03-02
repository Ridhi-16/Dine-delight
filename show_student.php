<?php
include("header.php");
?>
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
    <div class="heading">
        <div class="container">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
            <h1>Student</h1>
            </div>
        </div>
        </div>
    </div>
    <nav class="breadcrumbs">
        <div class="container">
        <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Student</li>
        </ol>
        </div>
    </nav>
    </div><!-- End Page Title -->
    <!-- Contact Section -->
    <section id="contact" class="contact section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <h1>Show Student</h1>
        <div class="row justify-content-center gy-4">
            <?php
            //database connect
            include("connection.php");
            //query 
            $query="SELECT * from `students`";
            //SELECT * from `tablename`
            //SELECT `name`,`email` from `tablename`
            //SELECT * from `tablename` where `city`='jalandhar'
            //SELECT `name`,`email` from `tablename` where `city`='jalandhar'
            //result store 
            $res=mysqli_query($db,$query);
            // print_r($res);
            while($data=mysqli_fetch_assoc($res)){
                // print_r($data)
                ?>
            <div class="col-md-3">
                <div class="card" >
                <div class="card-body">
                    <h5 class="card-title"><?php echo $data["name"]?></h5>
                    <p class="card-text"><?php echo $data['email']?></p>
                    <a href="#" class="btn btn-primary"><?php echo $data["rno"]?></a>
                </div>
                </div>
            </div>
            <?php
            }
            ?>

        </div>

        </div>
    </section><!-- /Contact Section -->

</main>
<?php
include("footer.php");
?>

