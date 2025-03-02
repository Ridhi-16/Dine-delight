<?php
include("header.php");
include("banner.php");
?>


<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>INFORMATION</h2>
  <div><span>Feedback </span> <span class="description-title"></span></div>
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
                        <th>email</th>
                        <th>contact</th>
                        <th>Rating</th>
                        <th>Address</th>
                        <th>Message</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                   
                    include("connection.php");
                    
                    $query="SELECT * from `reviews`";
                    $res=mysqli_query($db,$query);
                    $sno=1;
                    while($data=mysqli_fetch_assoc($res)){
                    ?>
                    <tr>
                        <td><?php echo $sno;?></td>
                        <td><?php echo $data["name"];?></td>
                        <td><?php echo $data["email"];?></td>
                        <td><?php echo $data["contact"];?></td>
                        <td><?php echo $data["rating"];?></td>
                        <td><?php echo $data["address"];?></td>
                        <td><?php echo $data["message"];?></td>
                        <td>
                            <a href="view_reviews.php?id=<?php echo $data['id']?>" class="btn btn-outline-info">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a class="btn btn-danger" href="delete_reviews.php?id=<?php echo $data['id']?>">
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
    if(isset($_REQUEST["submit_btn"])){
        $name=$_REQUEST["name"];
        $email=$_REQUEST["email"];
        $contact=$_REQUEST["contact"];
        $rating=$_REQUEST["rating"];
        $message=$_REQUEST["message"];
        $address=$_REQUEST["address"];
          // echo $name, $email,$rating;  

        $db=mysqli_connect("localhost","root","","project");
        $query="INSERT into `reviews`(`name`,`contact`,`address`,`rating`,`email`,`message`)VALUES('$name','$contact','$address','$rating','$email','$message')";
       

        $res=mysqli_query($db,$query);

        if($res>0){
          echo "<script>window.location.assign('review.php?msg=Thanks for your review')</script>";
        }
        else{
            echo "<script>window.location.assign('review.php?msg=Cant reach you')</script>";
        }
    }
?>