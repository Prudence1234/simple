<?php
session_start();
?>
<?php

if(isset($_SESSION['email'])){
    
}else{
    header("location:home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
     <title>Document</title>
</head>
<body>
<div class='header'><a href='logout.php'>LOGOUT</a>

<a href='registration.php'>TENANT FORM </a></div>
<?php
    if(isset($_GET['success'])){
        echo "<h3 style='color:green; text-align:center'> SUCCESSFULLY  REGISTERED </h3>";
    }
    ?>
<form class='form' action="register.php" method="post">
    
<div class="heade">
    <div class="imagecontainer">
    <img class="img" src="pic2.jpg" alt="">
    </div>
    <div class="words">
        <h1>
      TENANT REGISTRATION FORM
        </h1>
   </div>

</div>
<hr class="hr">
<div class="inputs">
    <div class="names">
    <h4 >NAME</h4>
    </div>
    <div class="input">
    <input name="1stname" type="text" required>

    <input name="lastname" type="text" required>
    <br>
    <label for="1stname">firstname</label>
    <label for="lastname">last name</label>

   </div>
</div>

<div class="inputs">
    <div class="names">
    <h4 >EMAIL</h4>
    </div>
    <div class="input">
    <input required style="width: 70%;"  name="email" type="email" placeholder="ex: myname@example.com">
   </div>
</div>

<div class="inputs">
    <div class="names">
    <h4 >WORK PHONE</h4>
    </div>
    <div class="input">
    <input  name="areacode" type="text" required>
    <input name="phone" type="text" required><br>
    <label for="areacode">Area code</label>
    <label for="phone">Phone number</label>
   </div>
</div>
<div class="inputs">
    <div class="names">
    <h4 >NATIONALITY</h4>
    </div>
    <div class="input">
    <select name="nationality" >
    <option value="please select">PLEASE SELECT</option>
    <option value="KENYAN">KENYAN</option>
    <option value="UGANDAN">UGANDAN</option>
    <option value="TANZANIAN">TANZANIAN</option>
    </select> <br>
    <label for="nationality">nationality</label><br>
    
   </div>
</div>

<div class="inputs">
    <div class="names">
    <h4 >ID NO.</h4>
    </div>
    <div class="input">
    <input  name="id" type="text" required><br>
    <label for="id">id_no</label>
   </div>
</div>


<div class="inputs">
    <div class="names">
    <h4 >OCCUPATION</h4>
    </div>
    <div class="input">
    <input name="occupation" type="text" required><br>
    <label for="streetAddress">ocupation</label><br>

    <input type="text" name="location" required><br>
    <label for="streetAddress2">location</label><br>

    </div>
</div>
    

<div class="inputs">
    <div class="names">
    <h4 >HOUSE DETAILS</h4>
    </div>
    <div class="input">
    <input name="block" type="text" required>
    <input  name="house" type="text" required><br>
    <label for="city">BLOCK NO</label>
    <label for="state">HOUSE NO</label><br>
  
    
   </div>
</div>



<button class='button2' type="submit" name="submit">SUBMIT</button>

    </form>
    
</body>
</html>