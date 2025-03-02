<?php
include("header.php");
?>
<div class="page-title dark-background">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">REVIEWS</h1>
              <p class="mb-0">
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Starter Page</li>
          </ol>
        </div>
      </nav>
</div>

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>View Reviews</h2>
  <div><span>Feedback </span> <span class="description-title"></span></div>
</div>
<section id="contact" class="contact section">

      <div class="container" data-aos="fade">

        <div class="row  justify-content-center gy-5 gx-lg-5">

          <div class="col-lg-8">
         
          <?php
          $id=$_GET["id"];
          include("connection.php");
          $query="SELECT * from `reviews` where `id`='$id'";
          $res=mysqli_query($db,$query);
          $data=mysqli_fetch_assoc($res);
          ?>
          <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo $data['name']?></li>
                    <li class="list-group-item"><?php echo $data['email']?></li>
                    <li class="list-group-item"><?php echo $data['contact']?></li>
                    <li class="list-group-item"><?php echo $data['rating']?></li>
                    <li class="list-group-item"><?php echo $data['address']?></li>
                    <li class="list-group-item"><?php echo $data['message']?></li>
                    
                </ul>
                </div>

          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

<?php
    include("footer.php");
?>