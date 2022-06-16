
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Clothing World</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="#home" class="logo">Clothing<span>World</span></a>

         <nav class="nav">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#process">reviews</a>
            <a href="{{url('/contact')}}">contact</a>
            <a href="login">Login</a>
         
         </nav>

         <a href="register" class="link-btn">Register For Donation</a>

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="container">

      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h3>welcome to online clothing platform</h3>
            <p>You can gain the knowledge about fashion and donate unused clothes.</p>
            <a href="{{url('/gallery')}}" class="link-btn">Gallery</a>
         </div>
      </div>

   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <img src="images/d1.jpg" class="w-100 mb-5 mb-md-0" alt="">
         </div>

         <div class="col-md-6 content">
            <span>about us</span>
            <h3>Welcome to our website</h3>
            <p>Clothes Box Foundation help the victims lacking, with a significant focus on clean clothing.
               With time we realized that millions of people residing in the underdeveloped areas of our country lack access to clean clothing. 
               So, we decided to change that by using the power of social media and connect the haves and have nots.
            </p>
            <p> What started as a conscious thought became a significant turning point for us.
               As we grew, we received thousands of clothes in donations that were unfit to be used,
               which led us to establish our in-house recycling facility.
            </p>
            <p>
               Today, we have worked with multiple brands on distribution and donation projects,
                reusing tons of material and impacting the lives of millions.
            </p>
         </div>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading">Donated Clothes</h1>
        
   <div class="box-container container">
@foreach ($donner as $item)
    
        <div class="box">
    <img class="" src="{{asset('storage/'.$item->image)}}" alt="img">
    
    <div class="name"><label>Donner_Name:-</label>{{$item->name}}</div>
    <div class="name"><label>Clothes_Size:-</label>{{$item->c_size}}</div>
    <div class="name"><label>Clothes_Name:-</label>{{$item->c_name}}</div>
    <p>{{$item->message}}</p>
        <a href="{{ route('receiver.add') }}" class="nile-bottom md">Clothes Receives <i class="fa fa-arrow-right"></i> </a>
    </div>
    @endforeach

      {{-- <div class="box">
         <img src="images/rase.png" alt="">
         <h3>VOLUNTEER WITH US</h3>
         <p>Volunteer with us as our community outreach partner by organizing a cloth distribution drive in your city. </p>
      </div> --}}

      {{-- <div class="box">
         <img src="images/hand.png" alt="">
         <h3>Why Donate</h3>
         <p>There are many people in need of usable clothing. 
            There are underprivileged individuals, families and children in need of clothing,and your donations can help.
            You can declutter your home and at the same time help those in need. 
            It is better for the environment, and you will feel great!</p>
      </div> --}}
   </div>

</section>

<!-- services section ends -->

<!-- process section starts  -->

<section class="process" id="process">

   <h1 class="heading">Steps to Donate</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/step1.jpeg" alt="">
         <h3>STEP ONE:</h3>
         <p>Schedule a donation pickup online</p>
      </div>

      <div class="box">
         <img src="images/step2.jpeg" alt="" height="10px" weidth="10px"> 
         <h3>STEP TWO:</h3>
         <p>Leave clearly labeled bags or boxes of your donated items outside your house on the designated day</p>
      </div>

      <div class="box">
         <img src="images/step3.jpeg" alt="">
         <h3>STEP THREE:</h3>
         <p>Our driver will pick up your donation and leave a tax deduction receipt for you. We pick up RAIN OR SHINE!!!</p>
      </div>

   </div>

</section>

<!-- process section ends -->

<!-- reviews section starts  -->

<!-- <section class="reviews" id="reviews">

   <h1 class="heading"> satisfied clients </h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
         <span>satisfied client</span>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
         <span>satisfied client</span>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
         <span>satisfied client</span>
      </div>

   </div>

</section> -->

<!-- reviews section ends -->

<!-- contact section starts  -->

<!-- <section class="contact" id="form">

   <h1 class="heading">Registration form</h1>

   <form action="{{url('/')}}/index" method="post">
    @csrf
      <span>your name :</span>
      <input type="text" name="name" placeholder="Enter your  fullname" class="box"> 
      <span class="text-danger">
              @error('name')
              {{$message}}
              @enderror
             </span><br>
          
      <span>your email :</span>
      <input type="email" name="email" placeholder="Enter your email" class="box">
      <span class="text-danger">
              @error('email')
              {{$message}}
              @enderror
             </span><br>
      <span>your number :</span>
      <input type="number" name="number" placeholder="Enter your number" class="box">
      <span class="text-danger">
              @error('number')
              {{$message}}
              @enderror
             </span><br>
      <span>Password :</span>
      <input type="password" name="password" placeholder="Enter password" class="box">
      <span class="text-danger">
              @error('password')
              {{$message}}
              @enderror
             </span><br>
      <input type="submit"  class="link-btn">
   </form>  

</section> -->

<!-- contact section ends -->

<!-- footer section starts  -->

<!-- location of map -->
<section class="process" id="process">
<h1 class="heading">Location Views</h1>
<div class="map-layout">
        <div class="map-embed">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14130.710295346305!2d85.30010298610841!3d27.696358539731104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1653663936854!5m2!1sen!2snp" width="100%" height="390" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8"></div>
                <div class="col-lg-4">
                    <div class="padding-tb-50px padding-lr-30px background-main-color pull-top-309px">
                        <div class="contact-info-map">
                            <div class="margin-bottom-30px">
                                <h2 class="title">Location</h2>
                                <div class="contact-info opacity-9">
                                    <div class="icon margin-top-5px"><span class="icon_pin_alt"></span></div>
                                    <div class="text">
                                        <span class="title-in">Location :</span> <br>
                                        <span class="font-weight-500 text-uppercase">Lalitpur</span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="call_center margin-top-30px">
                                <h2 class="title">Call Center</h2>
                                <div class="contact-info opacity-9">
                                    <div class="icon  margin-top-5px"><span class="icon_phone"></span></div>
                                    <div class="text">
                                        <span class="title-in">Call Us :</span><br>
                                        <span class="font-weight-500 text-uppercase">01-1554988</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of map features -->
<section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p>9826540704</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>our address</h3>
         <p>Lalitpur, Nepal - 9826540707</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>07:00am to 10:00pm</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <p>sudarshan.magar.bca076@kathford.edu.np</p>
         <p>Henbahadur.tamang.bca076@kathford.edu.np</p>
      </div>

   </div>

   <!-- <div class="credit"> &copy; copyright  by <span>kathcity</span>  </div> -->

</section>

<!-- footer section ends -->










<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>