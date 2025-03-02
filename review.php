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
  </div><!-- End Page Title -->

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2></h2>
  <div><span>ADD</span> <span class="description-title">REVIEWS</span></div>
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
            <form  method="post" role="form" >
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                </div>
                <div class="form-group mt-3">
                <input type="number" class="form-control" name="contact" id="contact" placeholder="Contact" required="">
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="address" id="address" placeholder="Address" required="">
                </div>
                <div class="form-group mt-3">
                  <input type="number" class="form-control" name="rating" id="rating" placeholder="Rate from 1 to 5" required="">
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" placeholder="write your review" required=""></textarea>
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