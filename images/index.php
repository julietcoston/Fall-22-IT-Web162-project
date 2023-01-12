<!DOCTYPE html>
<html lang="en">
<head>
<title>Juliet Coston's IT162 portal Website</title>
<meta nane="robots" content="noindex,nofollow" />
<meta name="viewport" content="width=device-width" />
<mata charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
</head>
<body>
  <header>
<h1>Juliet Coston's IT162 Portal</h1>
<nav>
    <ul class="topnav" id="myTopnav">
      <a href="index.php" class="selected">Welcome</a>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Sara</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<div class="wrapper">
<-- header ends here-->
<img class="desktop" src="imges/ desktop.jpg" alt="photo of me in Seattle"/>

<img class="tablet" src="images/ tablet.jpg" alt="photo of me in seattle" />

<img class="phone" src="images/phone .jpg" alt="photo of me in seattle" />

<h2 class="subheader">A little more about me!</h2>

 <p>Hi my name is Juliet Coston.</p>
 <p> I am a student at Seattle central colleges.<p>
 <p>My goal is in education is IT computer programmer/digital software.</p>
 <p>I'm working on my associate degree as current</p>


<aside>
<h2 class="pageID">Welcome</h2>
 <img src="images/desktop.jpg" class="desktop" alt="me in Seattle " />
 <p>Lorem Ipsum place holder text goes here for now</p>
 <p>Lorem Ipsum place holder text goes here for now</p>
</aside>
 
<aside>
 <img src="images/phone.jpg" class="phone" alt="in Seattle " />
 <p>Lorem Ipsum place holder text goes here for now</p>
 <p>Lorem Ipsum place holder text goes here for now</p>
</aside>

<aside>
 <h3>Right Column</h3>
 <img src="images/tablet.jpg" class="tablet" alt=" />
 <p>Lor <p>Lorem Ipsum place holder text goes here for now</p>
 <p>Lorem Ipsum place holder text goes here for now</p>
</aside>em Ipsum place holder text goes here for now</p>
 <p>Lorem Ipsum place holder text goes here for now</p>
</aside>

</div>>
<!--footer ends here-->
<footer>
<p><small>&copy; 2019 by <a href="contact.php">Juliet Coston</a>,All Rights
 Reserved ~ <a href="http://validator.w3.org/chech/refere" targer="_blank">Validator/chech?uri=referer" target="_blank">valid css</a>
</small></p>
<?php include 'include/footer.php';?>

          <a href="contact.php">Juliet Coston</a>, All Rights Reserved ~ 
          <a id="html-checker" href="#">Check HTML</a> ~ 
          <a id="css-checker" href="#">Check CSS</a></small>
     </p>
    </footer>
<!-- END Footer --> 

<!-- Toggle between adding and removing the "responsive" class to a topnav when the user clicks on the icon-->

<script>
	//https://tinyurl.com/dynamic-html-checker
	document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
            document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href); 

	//manages mobile nav - from W3Schools
	function myFunction() {
    	    var x = document.getElementById("myTopnav");
    	    if (x.className === "topnav") {
        	         x.className += " responsive";
    	    } else {
        	         x.className = "topnav";
    	   }
	}   
 </script>
</body>
</html>


    
   

      

 


  


  