        <?php
        $contact1 = array('name' => 'User','email' => ' abc@gmail.com','phone' => '9045731350'); ?>

        <?php
        $contact1 = array('name' => 'User','email' => ' abc@gmail.com','phone' => '9045731350'); ?>
        
        <?php
        $contact2 = array('name' => 'Hamid Hasan','email' => ' abc@gmail.com','phone' => '9045731350'); ?>
    
        <?php
        $contact3 = array('name' => 'Afsar Ahmad','email' => ' avba@gmail.com','phone' => '904573150');
        ?>
        
        <?php
        $contact4 = array('name' => 'Shagufta Nazneen','departement' => 'Ph.D','email' => 'shagufta101.sn@gmail.com' );
        ?>
            
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Help::</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link type="text/css" rel="stylesheet" href="../css/nav.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
  section{
            background-color: whitesmoke;
            background-size:cover;
            height: 60vh;
            margin-bottom: 0;
        }
    li{
        
        list-style: none;
        list-style-type: none
    }
    body{
            background-color: whitesmoke;
         
       
            }
</style>
</head>
<body style="background-color: whitesmoke;">
  
    <?php include 'header.php'; ?>
    <section>
    <div class="navbar" style="margin-top:-18px; width:100%; position: -webkit-sticky;
   position: sticky; top: 0px;">
 <ul>
  <a href="../index.php">Home</a>

  <div class="dropdown">
    <button class="dropbtn">Registration 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="adminregistration.php">Admin</a>
      <a href="studentregistration.php">Student</a>
    </div>
    </div>
       <div class="dropdown">
    <button class="dropbtn">Login
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="adminlogin.php">Admin</a>
      <a href="studentlogin.php">Student</a>
    </div> 
    </div>
       <a href="facilities.php">Facilities</a>
          <a href="#">Help</a>        
    </ul>
  </div>
    
        <ul>
        <li><h2>Contact us</h2></li>
            <li><p>You can contact any of the following person in case of any suggestions/queries/complaints.</p></li>
        </ul>
       <ul><li><b>Mess Incharge:-</b></li>
         
             <?php foreach ($contact1 as $key=>$value) : ?>
            <li><?php echo ucfirst($key); ?>:
            <?php echo $value; ?>    
            </li>
            <?php endforeach; ?>

             </br>

            <?php foreach ($contact1 as $key=>$value) : ?>
            <li><?php echo ucfirst($key); ?>:
            <?php echo $value; ?>    
            </li>
            <?php endforeach; ?>
    </ul>
    </section>  
    
       

  
    
    
    
     <!-- footer-->
   <?php include 'footer.php'; ?> 
</body>
</html>









