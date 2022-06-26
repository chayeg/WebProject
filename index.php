<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive tour and travel agency website design tutorial</title>

 
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>TOBIYA </span>HIKING</a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#packages">packages</a>
        <a href="#book">Register</a>
        <a href="#gallery">gallery</a>
        <a href="#services">Explore</a>
        <a href="#review">Testimonials</a>
        <a href="#contact">Shop</a>
    </nav>



</header>

<!-- header section ends -->

<!-- login form container  -->

<div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

    <form action="">
        <h3>login</h3>
        <input type="email" class="box" placeholder="enter your email">
        <input type="password" class="box" placeholder="enter your password">
        <input type="submit" value="login now" class="btn">
        <input type="checkbox" id="remember">
        <label for="remember">remember me</label>
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have and account? <a href="#">register now</a></p>
    </form>

</div>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3></h3> 
        <p>TOBIYA HIKING </p>
        <a href="#" class="btn">discover more</a>
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
        <span class="vid-btn" data-src="images/vid-2.mp4"></span>
        <span class="vid-btn" data-src="images/vid-3.mp4"></span>
        <span class="vid-btn" data-src="images/vid-4.mp4"></span>
        <span class="vid-btn" data-src="images/vid-5.mp4"></span>
    </div>

    <div class="video-container">
        <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
        
    </div>

</section>

<!-- home section ends -->

<!-- book section starts  -->

<section class="book" id="book">

    <h1 class="heading">
        <span>R</span>
        <span>E</span>
        <span>G</span>
        <span>I</span>
        <span>S</span>
        <span>T</span>
        <span>E</span>
        <span>R</span>

        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
    </h1>

    <form action="website.php" method="POST" id="reg">
    
        <div align= "center">
        <div  class="registration" id ="reg">
            <h2></h2>
           <h3></h3>
           <fieldset>
        
           <legend><font size=5 class="register"><b>REGISTERATION FORM</b></font></legend>
          
            <br>
            <label for="NAME">NAME: </label>
            <input type="text" class="registration" id="NAME" name="NAME" /><br><br>
            
            <label for="AGE">AGE:&nbsp;&nbsp;&nbsp;</label>
            <input type="text" class="register" id="AGE" name = AGE><br><br>
            
            <label class="register" id="Sex" name="Sex" for="Sex"><b> Sex:  </b>&nbsp; </label>
            <b>Female</b><input type="radio" class="register" id="Female" name="Female" value="Female"><br><br>
            <b>Male</b><input type="radio" class="register" id="Female" name="Female" value="Male"><br><br>
          
        </fieldset>
    <fieldset>
      

<legend><font size=5 class="register"><b>CONTACT INFORMATION</b></font></legend>


            <label for="Phone_Number"> Phone Number: </label>
            <input type="text" class="register" id="Phone_Number" name="Phone_Number"><br><br>

            <label for="Email"> Email: </label>
            <input type="text" class="register" id="Email" name="Email"><br><br>

            <label for="Address"> Address: </label>
            <input type="text" class="register" id="Address" name="Address"><br><br>
    </fieldset>
<fieldset>

<legend><font size=5 class="register"><b>LOCATION INFORMATION</b></font></legend>
                <br>
           
            Places:
            <select type= "text" id="Places" class="register" name="Places">
               <option value="Mt. Rasdashen">Mt. Rasdashen</option> 
               <option value="Chebera Churchura">Chebera Churchura</option>
               <option value="Wenchi Crater lake">Wenchi Crater lake</option>
                <option value="Yelegn Gedel(Bulga)">Yelegn Gedel(Bulga)</option>
                <option value="Ajora Falls">Ajora Falls</option>
                
                <option value="Debera Falls">Debera Falls</option>
                <option value="Abijata Shala">Abijata Shala</option>
                <option value="Mt. Aka Bora">Mt. Aka Bora</option>
                
                <option value="Bale Mountains">Bale Mountains</option>
                <option value="Debrebrehan ">Debrebrehan</option>
                <option value="Awash Doho Logde">Awash Doho Lodge</option>

              </select>
<br> <br>
</fieldset>
<fieldset>
<legend><font size=5 class="register"><b>EMERGENCY CONTACT</b></font></legend>
                
            <label for="Full_Name"> Full Name: </label>
            <input type="text" class="register" id="Full_Name" name="Full_Name"><br><br>
            
            <label for="Cell_Phone">Cell phone: </label>
            <input type="text" class="register" id="Cell_Phone" name="Cell_Phone"><br><br>

            Blood Group:
            <select id="Blood_Group" name="Blood_Group">
                <option value="A">A</option>
                <option value="AB">AB</option>
                <option value="B">B</option>
                <option value="O">O</option>
                <option value="A+">A+</option>
            </select>
            <br>
            <br>

            <label for="Medical_History">Medical History: </label>
            <input type="textarea" class="register" id="Medical_History" name="Medical_History"><br><br>

            &nbsp; &nbsp; &nbsp; &nbsp; <input type="submit" class=btn value =REGISTER>

            <button type="reset" class="btn"> RESET</button>
        
    
            </div></div>
    </div>
</fieldset>
 </table>
 <?php
$NAME=$_POST['NAME'];
$AGE=$_POST['AGE'];
$Sex=$_POST['Sex'];
$Phone_Number=$_POST['Phone_Number'];
$Email=$_POST['Email'];
$Address=$_POST['Address'];
$Places=$_POST['Places'];
$Full_Name=$_POST['Full_Name'];
$Cell_Phone=$_POST['Cell_Phone'];
$Blood_Group=$_POST['Blood_Group'];
$Medical_History=$_POST['Medical_History'];

$sql = "insert into hikingddb values ('$NAME', '$AGE','$Sex', '$Phone_Number','$Email', '$Address', '$Places', '$Full_Name', '$Cell_Phone', '$Blood_Group', '$Medical_History')";

if(mysqli_query($conn,$sql))
    echo "The Record has been Inserted successfully!";
else
    echo "The Record has not been Inserted!";

?>
    </form>
   

</section>

<!-- book section ends -->

<!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div id="menu-bar" class="fas fa-bars"></div>
        
            <a href="#" class="logo"><span>TOBIYA </span>HIKING</a>
        
            <nav class="navbar">
                <a href="#home">home</a>
                <a href="#packages">packages</a>
                <a href="#book">Register</a>
                <a href="#gallery">gallery</a>
                <a href="#services">Explore</a>
                <a href="#review">Testimonials</a>
                <a href="#contact">Shop</a>
            </nav>
        
        
        
        </header>
<!-- header section starts  -->



<!-- header section ends -->

<body>
    <div class="packages">
        <h1 class="packages">
            Packages
        </h1>
        <div class="rows">
            <div class="cols2" onclick="regular()">
                <img src="images/regular.JPG" width=50px height=200px>
                <h2>Regular</h2>
                <p>Come and Enjoy your weekend with us!</p>
                <div id="regDesc">Includes: <br>
                    <ul>
                        <li>Food</li>
                        <li>Games</li>
                        <li>Photography</li>
                    </ul>
                    <input type=submit value=Register class="btn">
                </div>
            </div>
            <div class="cols2" onclick="family()">
                <img src="images/family.jpg" width=50px height=200px>
                <h2>Family</h2>
                <p></p>
                <div id="familyDesc">Includes: <br>
                    <ul>
                        <li>Food</li>
                        <li>Games</li>
                        <li>Photography</li>
                    </ul>
                    <input type=submit value=Register class="btn">
                </div>
            </div>
            <div class="cols2" onclick="couples()">
                <img src="images/couples.JPG" width=50px height=200px>
                <h2>Couples</h2>
                <p></p>
                <div id="coupleDesc">Includes: <br>
                    <ul>
                        <li>Food</li>
                        <li>Games</li>
                        <li>Photography</li>
                    </ul>
                    <input type=submit value=Register class="btn">
                </div>
            </div>
            <div class="cols2" onclick="friends()">
                <img src="images/friends.jpg" width=50px height=200px>
                <h2>Friends/Group</h2>
                <p></p>
                <div id="friendDesc">Includes: <br>
                    <ul>
                        <li>Food</li>
                        <li>Games</li>
                        <li>Photography</li>
                    </ul>
                    <input type=submit value=Register class="btn">
                </div>
            </div>
        </div>
    </div>

</section>

<!-- packages section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading">
        <span>E</span>
        <span>x</span>
        <span>p</span>
        <span>l</span>
        <span>o</span>
        <span>r</span>
        <span>e</span>
       
    </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>affordable hotels</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>food and drinks</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>safty guide</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>around the world</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-plane"></i>
            <h3>fastest travel</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>adventures</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/g-1.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-2.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-3.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-4.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-5.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-6.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-7.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-8.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-9.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>

    </div>

</section>

<!-- gallery section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>

    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic1.png" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic2.png" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic3.png" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic4.png" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">
    
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="images/contact-img.svg" alt="">
        </div>

        <form action="">
            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="number">
                <input type="text" placeholder="subject">
            </div>
            <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" value="send message">
        </form>

    </div>
    
</section>

<!-- contact section ends -->

<!-- brand section  -->
<section class="brand-container">

    <div class="swiper-container brand-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/6.jpg" alt=""></div>
        </div>
    </div>

</section>

<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quas magni pariatur est accusantium voluptas enim nemo facilis sit debitis.</p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">india</a>
            <a href="#">USA</a>
            <a href="#">japan</a>
            <a href="#">france</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">book</a>
            <a href="#">packages</a>
            <a href="#">services</a>
            <a href="#">gallery</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">twitter</a>
            <a href="#">linkedin</a>
        </div>

    </div>

    <h1 class="credit"> created by <span> Chaye Getchew </span> | all rights reserved! </h1>

</section>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>