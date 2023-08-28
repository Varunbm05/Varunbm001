<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
  
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
		
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
        
    <?php endif ?>
</div>


        
<html>
    <head>
        
        <title></title>
    </head>
    <body>
        
        
        
<html>
<head>

	<title>Navigation Bar</title>
	<style type="text/css">
		*{
			text-decoration: none;
		}
                
                body{
                    background-color: grey;
                    
                    margin: 0;
                    padding: 0;
                }
               
                body{
                    
                    background-image: url('above-adventure-aerial-air.jpg');
                    background-repeat: no-repeat;
                    background-size: cover;
                }
                
                
                
		.navbar{
			background: teal; font-family: calibri; padding-right: 15px;padding-left: 15px; position: fixed; top: 0%; width: 98%
		}
		.navdiv{
			display: flex; align-items: center; justify-content: space-between;
		}
		.logo a{
			font-size: 35px; font-weight: 600; color: white;
		}
		li{
			list-style: none; display: inline-block;
		}
		li a{
			color: white; font-size: 18px; font-weight: bold; margin-right: 25px;
		}
		button{
			background-color: white; margin-left: 10px; border-radius: 10px; padding: 10px; width: 90px;
		}
		button a{
			color: white; font-weight: bold; font-size: 15px;
		}
                .image{
                    
                    margin: auto;
                    padding: 30px;
                    width: 80%;
                    
                }
                
                  .heading{
                    
                  text-align: center;
                  color: white;
                  padding: 30px;
                  margin: auto;
                  
                }
                .let1{
                     border: 2px solid black;
                    padding: 30px;
                    margin: auto;
                    
                    
                }
                .let2{
                    border: 2px solid black;
                    
                    padding: 30px;
                    margin: auto;
                    
                }
                .let3{
                     border: 2px solid black;
                    padding: 30px;
                    margin: auto;
                    
                }
                .let4{
                     border: 2px solid black;
                    padding: 30px;
                    margin: auto;
                    
                }
                
                  .let5{
                     border: 2px solid black;
                    padding: 30px;
                    margin: auto;
                    
                }
                .let6{
                     border: 2px solid black;
                    padding: 30px;
                    margin: auto;
                    
                }
                .text1{
                    
                    color: white;
                    position: absolute; left: 184px; bottom: 40px;
                    font-size: 23px;
                    margin: auto;
                    
                }
                 .text2{
                    
                    color: white;
                    position: absolute; left: 550px; bottom: 40px;
                    font-size: 27px;
                    margin: auto;
                    
                }
                 .text3{
                    
                    color: white;
                    position: absolute; left: 920px; bottom: 40px;
                    font-size: 27px;
                    margin: auto;
                    
                }
                    .text4{
                    
                    color: white;
                    position: absolute; left: 184px; bottom: -327px;
                    font-size: 27px;
                    margin: auto;
                    
                }
                .text5{
                    
                    color: white;
                    position: absolute; left: 550px; bottom: -327px;
                    font-size: 27px;
                    margin: auto;
                    
                }
                  .text6{
                    
                    color: white;
                    position: absolute; left: 920px; bottom: -327px;
                    font-size: 27px;
                    margin: auto;
                    
                }
                .optio{
                    
                    
                    background-color: white;
                    border-color: teal;
                    text-align: left;
                    height: 25px;
                    width: 300px;
                    
                }
                .option{
                    
                    
                    text-align: center;
                    
                    
                }
                .option1{
                    
                    font-size: 18px;
                }
                .option2{
                    
                    font-size: 18px;
                }
                
                .option3{
                    
                    font-size: 18px;
                }
                
                .option4{
                    
                    font-size: 18px;
                }
                
                .option5{
                    
                    font-size: 18px;
                }
                
                
                .uufu{
                    
                    font-size: 30px;
                }
              
              
                
                
	</style>

</head>

<body>

    <nav class="navbar">
		<div class="navdiv">
			<div class="logo"><a href="#">Know solution</a> </div>
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
                                <li><a href="http://localhost/scheduler/">See a doctor</a></li>
                                
				
			</ul>
                        
		</div>
        </nav>
    <div class="heading">
        
        
        
        
        
    <h1>SELECT FROM THE OPTION </h1> 
    
    <h2 class="text1"><select name="links" id="" size="1" onchange="window.location.href=this.value" class="optio">Mouth
        
            <option class="option" name="mouth" >Oral</option>
            <option class="option1" value="candsoral.php">Common problems and solutions</option></a>
            <option class="option2" value="homeremidesoral.html">Home remidies</option>
            
            <option class="option4" value="oralproducts.html">Products</option>
            <option class="option5" value="dosandontoral.html">Do's and Dont's</option>
        
        
        </select>
                      
    
    
    </h2>
    <h2 class="text2">
    
    
    <select name="links" id="" size="1" onchange="window.location.href=this.value" class="optio">Mouth
        
            <option class="option" name="mouth">eyes</option>
            <option class="option1" value="eyecands.html">Common problems and solutions</option></a>
    <option class="option2" value="homeremidieseye.html">Home remidies</option>
            <option class="option4" value="eyeproducts.html">Products</option>
            <option class="option5" value="dosandonteye.html">Do's and Dont's</option>
        
        
        </select>
                   
    
    
    
    </h2>
    
    <h2 class="text3">
        
        
        
        
        
            <select name="links" id="" size="1" onchange="window.location.href=this.value" class="optio">Mouth
        
            <option class="option" name="mouth">Nose</option>
            <option class="option1" value="nosecands.html">Common problems and solutions</option></a>
            <option class="option2" value="homeremidiesnoes.html">Home remidies</option>
            
            <option class="option4" value="productsnose.html">Products</option>
            <option class="option5" value="dosanddontnose.html">Do's and Dont's</option>
        
        
        </select>
                   
    </h2>
    <h2 class="text4">
        
             
            <select name="links" id="" size="1" onchange="window.location.href=this.value" class="optio">Mouth
        
            <option class="option" name="mouth">joints</option>
            <option class="option1" value="jointscands.html">Common problems and solutions</option></a>
            <option class="option2" value="homeremides joints.html">Home remidies</option>
            
            <option class="option4" value="poructsjoints.html">Products</option>
            <option class="option5" value="dosanddontjoints.html">Do's and Dont's</option>
        
        
        </select>
                   
       
        
    </h2>
    <h2 class="text5">
        
        
               <select name="links" id="" size="1" onchange="window.location.href=this.value" class="optio">Mouth
        
            <option class="option" name="mouth">Skin</option>
            <option class="option1" value="candsskin.html">Common problems and solutions</option></a>
            <option class="option2" value="homeremidiesskin.html">Home remidies</option>
            
            <option class="option4" value="productsskin.html">Products</option>
            <option class="option5" value="dosanddontskin.html">Do's and Dont's</option>
        
        
        </select>
                   
        
        
        
    </h2>
    <h2 class="text6">
        
        
               <select name="links" id="" size="1" onchange="window.location.href=this.value" class="optio">Mouth
        
            <option class="option" name="mouth">Scalpe</option>
            <option class="option1" value="candshair.html">Common problems and solutions</option></a>
            <option class="option2" value="homeremedieshair.html">Home remidies</option>
            
            <option class="option4" value="producthairs.html">Products</option>
            <option class="option5" value="dosanddonthair.html">Do's and Dont's</option>
        
        
        </select>
                   
        
        
        
        
    </h2>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </div>
    <div class="image">
        <a href="#">  <img class="let1" src="072418_ti_mouth_feat_free.jpg" height="300" width="300" alt="not showing" onerror="Screenshot (53).png"/></a>
       
         <a href="#">  <img class="let2"   src="eye-eyelashes-face-woman-63320.jpeg" height="300" width="300" alt="not showing" onerror="Screenshot (53).png"/></a>
        
         
         
         <a href="#"> <img class="let3"  src="human-nose-realistic-background-isolated-260nw-466427093.jpg" height="300" width="300" alt="not showing" onerror="Screenshot (53).png"/></a>
        <a href="#">  <img class="let4"  src="Joint-Pain_2000x1976.jpg" height="300" width="300" alt="not showing" onerror="Screenshot (53).png"/></a>
        <a href="#">  <img class="let5"  src="overdoing-skincare-today-main-190509.jpg" height="300" width="300" alt="not showing" onerror="Screenshot (53).png"/></a>
        <a href="#">  <img class="let6"  src="Man-with-dandruff.jpg" height="300" width="300" alt="not showing" onerror="Screenshot (53).png"/></a>
    </div>
</body>

</html>
        <?php
        // put your code here
        ?>
    </body>
</html>

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
</body>
</html>







