<!DOCTYPE html>
<html>
<head>
<title>Web Design Portal for Kelly Hill it162</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" /> 
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa fa-home"></i>Web Design Portfolio Portal for Kelly Hill it162</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Kelly</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Welcome, Willkommen, ようこそ, Ceud mìle fàilte, Yin Dee Dtôn Ráp, Bienvenidos, Aloha, Benvenute, Wemukelekile, أهلاً و سهلاً, Ngiyanemukela </h2>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 <img src="/images/sunset6me.jpg" class="desktop" alt=Golden Gardens Sunset" />
 <img src="/images/pic!Blake.jpg" class="phone" alt="Boating" />
 <p> I am currently working to become a Web Designer with a focus on the User Experience. I hold a degree in Art History with a Business Minor. Prior to the world-wife shift, I was lucky enough to have had the positions of an Art Dealer, Events Manager, and a Wine Steward. My career has always been in sales and marketing, so I like to make concepts tangible. </p>

<p>My design style ambition is to marry traditions of design and visual arts with technology to create uniquely appealing designs. I am a hoarder of font families and color palette ideas. For every project I have the perfect match!</p>

 <p> My passions are travel, water, finding direction, movement, and fascinating people. I have been lucky enough to have valuable experiences that have given way to inspiration. The dream is to travel the world and take over the internet.</p>
 
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Right Column - IMg ok HEre? Or Do I need text????</h3>
<img src="/images/pic!Blake.jpg" class="desktop" alt="Boating" />
<img src="/images/shadow4me.jpg" class="phone" alt="Me and My Shadow" />
<img src="/images/sunset6me.jpg" class="tablet" alt="Golden Gardens" />
 
</aside>
<!-- END RIGHT COL -->
 
<!-- START Footer -->
<footer>
  <p><small>&copy; 2021 - <?=date('Y')?> by <a href="contactme.php" target="_blank">Contact Kelly</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 
</main>
<!-- END WRAPPER -->

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
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
