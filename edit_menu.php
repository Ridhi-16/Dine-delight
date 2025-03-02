<?php
$id=$_GET["id"]; 
//db connect 
include("connection.php");
//query 
$query="SELECT * from `menu_category` where `id`='$id'";
//res
$res=mysqli_query($db,$query); 
// print_r($res);
$data=mysqli_fetch_assoc($res);
?>
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
                Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo
                odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum
                debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat
                ipsum dolorem.
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
  <div><span> Flavors that tell a story,</span> <span class="description-title"> every bite a new adventure!"</span></div>
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
                  <input type="text" name="dish_name" class="form-control" id="name" placeholder="Dish Name" required="" value="<?php echo $data['dish_name']?>">
                </div>
                <div class="col-md-3 form-group ">
                <input type="number" class="form-control" name="price" id="contact" placeholder="Price" required="" value="<?php echo $data['price']?>">
                </div>
                <div class="col-md-5 form-group ">
                    <input type="file" class="form-control" name="image" id="rating" placeholder="">
                    <input type="hidden" name="previous_image" value="<?php echo $data['image']?>">
                    <br>
                    <img src="menu_images/<?php echo $data['image']?>" style="width:100px height:100px;">
                </div>
                
              </div>
              <div class="my-3">
              <div class="text-center"><button type="submit"  name="submit_btn">submit</button></div>
              </div>
            </form>
            <!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

<?php
    if(isset($_REQUEST["submit_btn"])){
        $dish_name=$_REQUEST["dish_name"];
        $price=$_REQUEST["price"];
        if($_FILES["image"]["name"]){
          $image=$_FILES["image"];
          $img_name=$image["name"];
          $temp_path=$image["tmp_name"];
          $new_name=rand().$img_name;
          move_uploaded_file($temp_path,"menu_images/".$new_name);
        }
        else{
          $new_name=$_REQUEST["previous_image"];
        }
        include("connection.php");
        $query="UPDATE `menu_category` set `dish_name`='$dish_name' ,`image`='$new_name' where `id`='$id' ";
        
        $res=mysqli_query($db,$query);
        if($res>0){
            echo "<script>window.location.assign('manage_menu.php?msg=Edited successfully')</script>";
        }else{
            echo "<script>window.location.assign('manage_menu.php?msg=Error while editing')</script>";
        }
    }
    include("footer.php");
?>
