<?php

include 'homelogindata.php';
include 'logout.php';
include 'checklog.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style> .modal-body p {
    color: white;
  }
  </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Vista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="homelogin.css">
  </head>
<body>
    
    <nav class="navbar navbar-expand-sm custom-navbar" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="homelogin.php">
            <img src="./pic-logo/LOGO.png" alt="Car Rental"> Auto Vista
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ">
            <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="homelogin.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="carscatlogin.php">Cars</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="homelogin.php#aboutus">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="homelogin.php#contactus">Contact Us</a>
              </li>
              
          </div>
          
          <a class="navbar-brand" href="#" data-bs-toggle="modal" data-bs-target="#myModal">
  <img src="./pic-logo/images.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill"> 
</a>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Driver Info</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    
  <div class="row">
    <div class="col-md-6">
      <div class="info-container">
        <p class="info-item">Username: <?php echo $_SESSION['username']; ?></p>
        <p class="info-item">First Name: <?php echo $_SESSION['first_name']; ?></p>
        <p class="info-item">Age: <?php echo $_SESSION['Age']; ?></p>
        <p class="info-item">Address: <?php echo $_SESSION['address']; ?></p>
        <p class="info-item">License ID: <?php echo $_SESSION['license_id']; ?></p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="info-container">
      <p class="info-item">User ID: <?php echo $_SESSION['user_id']; ?></p>
        <p class="info-item">Gender: <?php echo $_SESSION['Gender']; ?></p>
        <p class="info-item">Last Name: <?php echo $_SESSION['last_name']; ?></p>
        <p class="info-item">Phone Number: <?php echo $_SESSION['Contact']; ?></p>
        <p class="info-item">Email: <?php echo $_SESSION['email']; ?></p>
      </div>
    </div>
  </div>
</div>
      <div class="modal-footer">
      <a href="editprof.php" class="btn btn-outline-light btn-lg px-3 editprofbut">Edit Profile</a>
      <a href="rentedcars.php" class="btn btn-outline-light btn-lg px-3 rentedcarsbut">Rented Cars</a>
      <form action="logout.php" method="post">
      
      <input type="submit" name="logout" value="Logout" class="btn btn-outline-light btn-lgpx-3 logoutbut">
</form>
      
      </div>
    </div>
  </div>
</div>

            
        </div>
      </nav>
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-inner">
          <div id="carousel-item-1" class="carousel-item active">
            <img src="./pic-carousel/C1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption" id="caption1">
            <h4>Be the King of the Road</h4>
            <p>Our collection of high-performance vehicles will take your driving experience to the next level</p>
            <a id="learn1-button" class="btn btn-sm btn-outline-none position-relative top-1 bottom-1" href="carscatlogin.php#luxury">Learn More</a>
          </div>
          </div>
          <div class="carousel-inner">
          <div id="carousel-item-2" class="carousel-item active">
            <img src="./pic-carousel/C2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
            <h4>Jaguar XJ</h4>
            <p>Experience a luxurious and stylish journey with our fleet of high-end vehicles designed for the ultimate driving experience.</p>
            <a id="learn1-button" class="btn btn-sm btn-outline-none position-relative top-1 bottom-1" href="carscatlogin.php#Sports">Learn More</a>
          </div>
          </div>
          <div class="carousel-item">
            <img src="./pic-carousel/C3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption" id="caption3">
            <h4>Toyota Fortuner</h4>
            <p>Experience the power and comfort of the Fortuner with its advanced safety features and spacious interior</p>
            <a id="learn1-button" class="btn btn-sm btn-outline-none position-relative top-1 bottom-1" href="carscat.php#Suv">Learn More</a>
          </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div id="contact-info">
      <p>If you have any issues or questions regarding your Rental Car, our Customer Relationship Center is available to help. You can contact us by calling +632 8866 9408 or by sending an email to avcarrentals@gmail.com</p>
      </div>
   
      <br>
      <section id="cars">
      <div id="card-title">
      <h4>We offer a wide range of rental cars to suit every lifestyle</h4>
      </div>
      </section>

<div id="cards_landscape_wrap-2">
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
<a href="carscatlogin.php#eco">
<div class="card-flyer">
<div class="text-box">
<div class="image-box">
<img src="./pic-cards/card1.jpg" alt="" />
</div>
<div class="text-container">
<h6>Economy</h6>
<p>The Economy category is ideal for budget-conscious renters who prioritize fuel efficiency and affordability.</p>
</div>
</div>
</div>
</a>
</div>

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
<a href="carscatlogin.php#compact">
<div class="card-flyer">
<div class="text-box">
<div class="image-box">
<img src="./pic-cards/card2.webp" alt="" />
</div>
<div class="text-container">                                    
<h6>Compact</h6>
<p>The Compact category offers affordable and practical vehicles with comfortable interiors, excellent fuel economy.</p>
</div>
</div>
</div>
</a>
</div>

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
<a href="carscatlogin.php#fullsize">
<div class="card-flyer">
<div class="text-box">
<div class="image-box">
<img src="./pic-cards/card3.jpg" alt="" />
</div>
<div class="text-container">
<h6>Full-Size</h6>
<p>Full-size cars are popular for business travelers and longer trips, offering luxurious features and comfortable interiors.</p>
</div>
</div>
</div>
</a>
</div>

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
<a href="carscatlogin.php#luxury">
<div class="card-flyer">
<div class="text-box">
<div class="image-box">
<img src="./pic-cards/card4.jpg" alt="" />
</div>
<div class="text-container">
<h6>Luxury</h6>
<p>Luxury vehicles offer unparalleled luxury and performance, ideal for executives, VIPs, and anyone who wants to travel in style.</p>
</div>
</div>
</div>
</a>
</div>

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
<a href="carscatlogin.php#Suv">
<div class="card-flyer">
<div class="text-box">
<div class="image-box">
<img src="./pic-cards/card5.jpg" alt="" />
</div>
<div class="text-container">
<h6>SUV</h6>
<p>SUVs offer versatility and practicality, making them ideal for families, outdoor enthusiasts, and anyone looking for a reliable and comfortable ride.</p>
</div>
</div>
</div>
</a>
</div>

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
<a href="carscatlogin.php#van">
<div class="card-flyer">
<div class="text-box">
<div class="image-box">
<img src="./pic-cards/card6.jpg" alt="" />
</div>
<div class="text-container">                                    
<h6>Van</h6>
<p>Van category is ideal for larger groups and families with flexible seating configurations and ample storage space.</p>
</div>
</div>
</div>
</a>
</div>

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
<a href="carscatlogin.php#Sports">
<div class="card-flyer">
<div class="text-box">
<div class="image-box">
<img src="./pic-cards/card7.jpg" alt="" />
</div>
<div class="text-container">
<h6>Sports</h6>
<p>Sports cars offer thrilling and exhilarating driving experiences for car enthusiasts, adrenaline junkies, and anyone looking for a fun and exciting driving experience.</p>
</div>
</div>
</div>
</a>
</div>

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
<a href="carscatlogin.php#Truck">
<div class="card-flyer">
<div class="text-box">
<div class="image-box">
<img src="./pic-cards/card8.jpg" alt="" />
</div>
<div class="text-container">
<h6>Truck</h6>
<p>The Truck category offers a range of vehicles with larger cargo capacity and hauling abilities for business or personal purposes.</p>
</div>
</div>
</div>
</a>
</div>
</div>
</div>

<section id="aboutus">
<div id="card-title">
<h4>About AutoVista</h4>
</div>
</section>
<br>
<br>
<br>

<div class="container p-4 cstmcontainer">
      <div class="row">
        <div class="col-lg-6 col-md-12 mb-4">
          <h5 class="mb-3 text-dark">Mission</h5>
          <p>
          At Auto Vista, we are committed to providing our customers with 
          affordable and dependable rental cars. Our mission is to deliver a 
          hassle-free car rental experience that prioritizes customer satisfaction 
          and safety. We go above and beyond to exceed customer expectations by offering 
          top-quality rental vehicles, exceptional customer service, and competitive pricing.
           Our aim is to make the process of renting a car easy and enjoyable for everyone.
          </p>
        </div>

        <div class="col-lg-6 col-md-12 mb-4">
          <h5 class="mb-3 text-dark">Vision</h5>
          <p>
          Our vision is to empower people to explore the world on their terms by providing 
          accessible and reliable transportation at affordable prices. We strive to be the 
          go-to destination for anyone seeking a stress-free and enjoyable car rental experience, 
          offering a wide range of vehicles to suit any need or budget. Our commitment to excellence 
          in customer service and safety will set us apart as a trusted and respected leader in the 
          industry, making travel more accessible and enjoyable for everyone.
        </div>

        <div class="col-lg-6 col-md-12 mb-4">
          <h5 class="mb-3 text-dark">Our Story</h5>
          <p>
          Our story is one of passion and dedication to providing exceptional 
          car rental services to our customers. From humble beginnings, we have 
          grown to become a leading car rental company in the Davao City, Philippines. We started
          with a simple idea  to provide affordable and reliable rental cars  and have 
          since expanded our fleet and services to meet the diverse needs of our customers. 
          Our commitment to customer satisfaction, safety, and excellence is at the heart of
           everything we do. We are proud of our journey so far and look forward to continuing
            to serve our customers with the same level of dedication and passion that got us started.
          </p>
        </div>

        <div class="col-lg-6 col-md-12 mb-4">
          <h5 class="mb-3 text-dark">Why Choose Us</h5>
          <p>
          We understand that choosing a car rental company can be a
           daunting task. That's why we strive to make the decision easy 
           for our customers by offering reliable, affordable, and hassle-free 
           car rental services. We prioritize customer satisfaction and safety, 
           and our experienced team is dedicated to providing top-quality rental 
           vehicles and excellent customer service. Additionally, we offer competitive 
           pricing and a wide selection of vehicles to meet the needs and preferences of 
           every customer. Choosing Auto Vista means choosing a worry-free and enjoyable car 
           rental experience.
          </p>
        </div>
        </div>
        </div>
        <br>
        <br>
        <br>

<br>
<br>
<br>
<br>
<footer style="background-color: #e89c31;">
    <div class="container p-4" id="contactus">
    <div class="row">
        <div class="col-lg-6 col-md-12 mb-4">
          <h5 class="mb-3 text-dark">We are Happy to Serve You</h5>
          <p>
          Auto Vista is a leading car rental company that aims 
          to provide affordable and reliable rental cars to customers. 
          Our mission is to offer a hassle-free car rental experience 
          with a focus on customer satisfaction and safety. We strive to 
          exceed customer expectations by providing top-quality rental vehicles, 
          excellent customer service, and competitive pricing. Our goal is to make 
          renting a car an easy and enjoyable experience for everyone.
          </p>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
        <h5 class="mb-3 text-dark">Contact Us</h5>
          <p><b>Email:</b> avcarrentals@gmail.com</br>
          <b>Contact Number:</b> 12345678910 </br>
          <b>Facebook:</b> Auto Vista Rents </br>
<b>Twitter:</b> @AVRENTS</br>
<b>Instagram:</b> @AVRENTSOFFICIAL</br>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <h5 class="mb-1 text-dark">Opening Hours</h5>
          <table class="table" style="border-color: #666;">
            <tbody>
              <tr>
                <td>Mon - Fri:</td>
                <td>8am - 9pm</td>
              </tr>
              <tr>
                <td>Sat - Sun:</td>
                <td>8am - 1am</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="text-center p-3" style="background-color: black;">
      ©2023 Copyright:
      <a class="text-white" href="homelogin.php">autovista.infinityfreeapp.com</a>
    </div>
  </footer>



      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>