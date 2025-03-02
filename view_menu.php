<?php
include("header.php");
?>
<div class="page-title dark-background">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">MENU</h1>
              <p class="mb-0">
              Flavors that tell a story,every bite a new adventure!
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
  <h2>MENU</h2>
  <div><span>ITEM</span> <span class="description-title"><?php echo $id= $_GET["id"];?></span></div>
</div>
<section id="contact" class="contact section">

      <div class="container" data-aos="fade">

        <div class="row  justify-content-center gy-5 gx-lg-5">

          <div class="col-lg-8">
         
          <?php
          $id=$_GET["id"];
          include("connection.php");
          $query="SELECT * from `menu_category` where `id`='$id'";
          $res=mysqli_query($db,$query);
          $data=mysqli_fetch_assoc($res);
          ?>
          <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo $data['dish_name']?></li>
                    <li class="list-group-item"><?php echo $data['price']?></li>
                    <li class="list-group-item"><img src="menu_images/<?php echo $data["image"];?>" style="height:100px; width:100px"></li>  
                </ul>
                </div>

          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

<?php
    include("footer.php");
?>