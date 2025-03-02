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
  <div><span>DISHES </span> <span class="description-title"></span></div>
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
          <table class="table table-bordered table-hover">
                    <tr>
                        <th>Sno</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>image</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                   
                    include("connection.php");
                    
                    $query="SELECT * from `menu_category`";
                    $res=mysqli_query($db,$query);
                    $sno=1;
                    while($data=mysqli_fetch_assoc($res)){
                    ?>
                    <tr>
                        <td><?php echo $sno;?></td>
                        <td><?php echo $data["dish_name"];?></td>
                        <td><?php echo $data["price"];?></td>
                        <td><img src="menu_images/<?php echo $data["image"];?>" style="height:100px; width:100px"></td>
                        <td>
                            <a class="btn btn-outline-success" href="edit_menu.php?id=<?php echo $data['id']?>">
                                <i class="bi bi-pencil-square"></i>
                            </a>

                            <a href="view_menu.php?id=<?php echo $data['id']?>" class="btn btn-outline-info">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a class="btn btn-danger" href="delete_menu.php?id=<?php echo $data['id']?>">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php   
                    $sno++;
                    }
                    ?>
                </table>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

<?php
    include("footer.php");
    // if(isset($_REQUEST["submit_btn"])){
    //     $name=$_REQUEST["name"];
    //     $email=$_REQUEST["email"];
    //     $contact=$_REQUEST["contact"];
    //     $rating=$_REQUEST["rating"];
    //     $message=$_REQUEST["message"];
    //     $address=$_REQUEST["address"];
    //       // echo $name, $email,$rating;  

    //     $db=mysqli_connect("localhost","root","","project");
    //     $query="INSERT into `reviews`(`name`,`contact`,`address`,`rating`,`email`,`message`)VALUES('$name','$contact','$address','$rating','$email','$message')";
       

    //     $res=mysqli_query($db,$query);

    //     if($res>0){
    //       echo "<script>window.location.assign('review.php?msg=Thanks for your review')</script>";
    //     }
    //     else{
    //         echo "<script>window.location.assign('review.php?msg=Cant reach you')</script>";
    //     }
    // }
?>