<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="./style.css">
</head>

<body style="margin:0; padding:0;">
<div class="container-absolute" style="width:100%; background-color: tomato; min-height:100vh;">
   <?php include "navbar.html"; ?>
                        <section class="carosal">

                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block" src="./images/pasta.jpg" style="width:100%;"alt="First slide">
                        </div>
    
                    </section>

                    <section class="about" id="about">
                    <label id="about_heading"><h1>About Us</h1></label>
                    <p id="about_text">There’s nothing cut out about ‘Foodie’ . Not our pizzas. Not our kin and our sandwiches. Also, unquestionably not the manner in which we live. Around here, we don’t make do with anything short of food we’re glad to serve. Furthermore, we don’t simply check-in.Not when we can likewise turn into our best, make companions, and have some good times while we’re grinding away. We’re the fast-food organization that lives unpacked.We have in excess of 16,000 eateries and 350,000 colleagues in excess of 100 nations. Regardless of whether it’s the first Stuffed Crust or just baking a cookie with your coffee in space, we drive constantly ourselves to convey hot food, fast every time – anyplace you need to appreciate it.</p>
                    </section>
                    <?php include 'menu.html'; ?>
          

                    <section class="contact" id="contact">
                        <label id="contact_heading"><h1>Contact Us</h1></label>
                     <div class="row" style="max-width:101%; display:flex; padding:20px;">
                        <div class="col-6" style="padding:25px;">
                        <div class="card" style="width:90%;">
                        <img src="./images/map.jpg"/>
                        </div>
                        </div>
                        <div class="col-6" style="height:450px; color:blue;">
                        <div class="card" id="contact_card">
                        <form >
                        <!-- <label id="name" style="display:block;"><i class="fas fa-home"></i>Name</label> -->
                        <input class="form_field" type="text" name="name" placeholder="Enter you name.."></input>
                        <!-- <label id="Email" style="display:block;">Email</label> -->
                        <input class="form_field" type="email" name="email" placeholder="Enter you email.."></input>
                        <!-- <label id="City" style="display:block;">City</label> -->
                        <input class="form_field city" type="text" name="city" placeholder="City Name.."></input>
                        <!-- <label id="State" style="display:block;">State : Bihar</label> -->
                        <input class="form_field state" type="text" name="state" placeholder="State.."></input>
                        <!-- <label id="adress" style="display:block;">Address</label> -->
                        <textarea class="form_field" name="name" placeholder="Enter you name.."></textarea>

                        <!-- <label id="pincode" style="display:block;">Pincode: 801503</label> -->
                        </form>
                        </div>
                        </div>
                     </div>
                    </section>


                    <?php include "./footer.html"; ?>   
</div>
<script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
   
