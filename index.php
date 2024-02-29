<!DOCTYPE html>
<html lang="en">
    
                                        <!-- HEAD SECTION  -->
<head>
    <title>Home::</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="css/nav.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      .mySlider{
                width: 87%;
                height: 600px;
                margin-left: 90px;
                margin-top: 0px;
                margin-right: 90px;
                }
        #button-display-left{
                position:absolute;
                top: 500px; margin-top: -19px; 
                left: 150px;
                width: 30px;
                height: 30px;
                } 
        #button-display-right{
                position:absolute;
                top: 500px;
                margin-top: -19px; 
                right: 150px;
                width: 30px;
                height: 30px;
                } 
        #content{
                width: 55%;
                height: 300px;
                border: 2px black;
                margin-top: 50px;
                margin-left: 90px;    
                }    
        #content1{
                width: auto;
                height: auto;
                float: right;
                margin-top: -300px;
                margin-right: 200px;
                }  
        h3{
           color: black;
           margin-top: 100px; 
           margin: 10px; 
           }
        p{
            text-align: justify;
            margin: 10px;
            font-size: 17px;
            font-family: serif;
            }
        .navbar{
            margin-top:-18px;
            width:100%;
            position: -webkit-sticky;
            position: sticky;
            top: 0px;
            box-shadow:2px 2px 2px lightgray;
        }
     </style>    
</head>
                                        <!--  BODY SECTION START -->
<body>
                                        <!-- Header Start -->   
    <div id="header" style="background-color: whitesmoke;margin-top: -4px;">    
        <img src="img/swarajya.png"  width="195px" height="183px" style="z-index:1000; position: fixed;top: 0px;box-shadow: 0 0 20px grey; margin-left: 98px;position:fixed">            
        <img src="img/food1.jpg" alt="" class="logo_def" style="margin-left: 310px; height:150px; width:77%;   box-shadow: 1px 2px 1px grey;">
    </div>                              <!--Header Ends-->
    
                                        <!-- Navigation Bar Start -->
    
    <div class="navbar" style="">
        <ul>
            <a href="#">Home</a>
            
            <!-- Dropdown Menu for Registration  -->
            <div class="dropdown">
                <button class="dropbtn">Registration 
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="html/adminregistration.php">Admin</a>
                    <a href="html/studentregistration.php">Student</a>
                </div>
            </div>
                  
                 <!-- Dropdown Menu for Login  -->
            <div class="dropdown">
                <button class="dropbtn">Login
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="html/adminlogin.php">Admin</a>
                    <a href="html/studentlogin.php">Student</a>
                </div> 
            </div>
                      
            <a href="html/facilities.php">Facilities</a>
            <a href="html/help.php">Help</a>
                      
        </ul>
     </div>              <!-- Navigation Bar Ends-->                  

                        <!-- Image Slider--> 
    
     <img class="mySlider" src="img/thali.jpg">
     <img class="mySlider" src="img/salad.jpeg">
     <img class="mySlider" src="img/food.jpg">

                        <!--button on slider-->
     <button id="button-display-left" onclick="plusDivs(-1)">&#10094;</button>
     <button id="button-display-right" onclick="plusDivs(+1)">&#10095;</button>
    
                     <!-- Manual Image Slider Script-->     
     <script>
         var slideIndex = 1;
         showDivs(slideIndex);
         
         function plusDivs(n) {
             showDivs(slideIndex += n);
             }
         
         function showDivs(n) {
             var i;
             var x = document.getElementsByClassName("mySlider");
             if (n > x.length) { slideIndex = 1 }    
             if (n < 1) {slideIndex = x.length}
             for (i = 0; i < x.length; i++)
                {
                 x[i].style.display = "none"; 
                }
             x[slideIndex-1].style.display = "block";  
            }
     </script>
    
                        <!-- Automatic Image Slider Script-->    
     <script>
         var myIndex = 0;
         carousel();
         function carousel() 
         {
             var i;
             var x = document.getElementsByClassName("mySlider");
             for (i = 0; i < x.length; i++) 
             {
                 x[i].style.display = "none";  
             }
             myIndex++;
             if (myIndex > x.length) {myIndex = 1}    
             x[myIndex-1].style.display = "block";  
             setTimeout(carousel, 5000); // Change image every 5 seconds
         }                                 
     </script>              <!-- Automatic Image Slider Script Ends-->
    
                            <!--  Main Content  -->
     <div id="content">
        <h3> <b> About Hostel Mess</b> </h3>
        <p>Welcome to Hostel, our vibrant hostel mess where culinary delights meet a sense of community. Nestled in the heart of the campus, Swarajya is more than just a place to eat; it's a hub of connection and camaraderie. As you step inside, the aroma of freshly prepared dishes dances in the air, enticing you to explore the diverse array of flavors that await. From hearty traditional meals that evoke memories of home to innovative fusion creations that tantalize the taste buds, our menu caters to every palate and preference. But Swarajya is more than just about food; it's a space where friendships are forged over shared meals, where laughter echoes off the walls, and where students come together to unwind after a long day of classes. With its welcoming ambiance and delicious offerings, Swarajya isn't just a mess; it's a home away from home for every student who walks through its doors.</p>
     </div> 
    
     <div id="content1" >
         <img src="img/user.png" width="200px" height="250px" style="border: 5px black;">
         <p style="text-align: center;"> <b> Manager: </b> Prof. XYZ<br />
                                         <b> Telephone: </b> 6969696969 <br/>
                                         <b> E-mail: </b> @gmail.com 
         </p>   
     </div>
                        
                                <!-- Footer-->   
   <div id="footer" style="width:100%;margin-left:-1px; padding-bottom:20px;"><br>
        <center><p style="color: white; font-family: cursive; margin-top: 10px; font-size: 15px; margin-left:40%">SWARAJYA MESS<br> Shivbasav Nagar, Belgaum , 590010</p></center>
        <center><p style="margin-top: 10px; font-size: 15px; margin-left:40%; color: white;">Copyright &copy; 2024 -All Rights Reserved</p></center>
    </div> 
</body>
</html>