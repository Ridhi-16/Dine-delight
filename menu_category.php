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
</div><!-- End Page Title -->


<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  
  <?php
  if(isset($_GET["msg"])){
    echo "<div class='alert bg-info'>$_GET[msg]</div>";
  } 
  ?>
</div><!-- End Section Title -->


<section id="contact" class="contact section">

      <div class="container" data-aos="fade">

        <div class="row  justify-content-center gy-5 gx-lg-5">

          <div class="col-lg-8">
            <form enctype="multipart/form-data" method="post" role="form" >
              <div class="row">
                <div class="col-md-3 form-group ">
                  <input type="text" name="dish_name" class="form-control" id="name" placeholder="Dish Name" required="">
                </div>
                <div class="col-md-3 form-group ">
                <input type="number" class="form-control" name="price" id="contact" placeholder="Price" required="">
                </div>
                <div class="col-md-5 form-group ">
                    <input type="file" class="form-control" name="image" id="rating" placeholder="" required="">
                </div>
                
              </div>
              
              
              <div class="my-3">
                
              <div class="text-center"><button type="submit"  name="submit_btn">submit</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

<?php
    if(isset($_REQUEST["submit_btn"])){
        $dish_name=$_REQUEST["dish_name"];
        $price=$_REQUEST["price"];
        $image=$_FILES["image"];
        $img_name=$image["name"];
        $temp_path=$image["tmp_name"];
        $new_name=rand().$img_name;
        move_uploaded_file($temp_path,"menu_images/".$new_name);
        include("connection.php");
        $query="INSERT  INTO `menu_category`(`dish_name`,`price`,`image`) VALUES('$dish_name','$price','$new_name')";
        $res=mysqli_query($db,$query);
        if($res>0){
            echo "<script>window.location.assign('menu_category.php?msg=Dish Added successfully')</script>";
        }else{
            echo "<script>window.location.assign('menu_category.php?msg=Error while adding')</script>";
        }
    }
    include("footer.php");
?>