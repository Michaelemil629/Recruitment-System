<!DOCTYPE html>
<html>
    <title> Linkdn RS </title>
<?php require_once("navbar.php") ?>

<style>
#hero 
{
  background: url('images/about/what-is-a-company-scaled.jpg') center center no-repeat;
  background-size: cover;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  height: 100%;
  width: 100%;
}
    
#nav li 
    {
    display:block;
    position:relative;
    float:left;
    background: #006633; /* menu's background color */
    }

#nav li a 
    {
    display:block;
    padding:0;
    text-decoration:none;
    width:200px; /* this is the width of the menu items */
    line-height:35px; /* this is the hieght of the menu items */
    color:#ffffff; /* list item font color */
    }
        
#nav li li a {font-size:80%;} /* smaller font size for sub menu items */
    
#nav li:hover {background:#003f20;} /* highlights current hovered list item and the parent list items when hovering over sub menues */

/*--- Sublist Styles ---*/
#nav ul 
    {
    position:absolute;
    padding:0;
    left:0;
    display:none; /* hides sublists */
    }

#nav li:hover ul ul {display:none;} /* hides sub-sublists */

#nav li:hover ul {display:block;} /* shows sublist on hover */

#nav li li:hover ul 
    {
    display:block; /* shows sub-sublist on hover */
    margin-left:200px; /* this should be the same width as the parent list item */
    margin-top:-35px; /* aligns top of sub menu with top of list item */
    }	
	
.sidepanel 
{
  height: 1000px; /* Specify a height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0;
  right: 0;
  background-color: #FFF; /* white*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidepanel */
}

/* The sidepanel links */
.sidepanel a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #111;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidepanel a:hover {
  color:#0000FF;
}

/* Position and style the close button (top right corner) */
.sidepanel .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* Style the button that is used to open the sidepanel */
.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: darkorange;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: blue;
}	

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
 right: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #111;
  display: block;
  border: none;
  background: none;
  width:100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: blue;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: blue;
  color: black;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #FFF;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
    
.column {
  float: left;
  width: 15%;
  margin-bottom: 10px;
  padding:  8px;
}

/* Display the columns below each other instead of side by side on small screens */
@media screen and (width: 65 px) {
  .column {
    width: 50%;
    display: ;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: gray;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
    .container {
  padding: 16px;
}

/* Clear floats */
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}
    
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

.btn:hover {
  background-color: RoyalBlue;
}
    
body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #0e76a8;
  color: white;
  transform: rotateY(180deg);
}
    
/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}
</style>

<body>
    <div id="header-hero-container">
<!-- Header -->
<header>
            <div class="flex container">
                <a id="logo" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Welcome to Linkdn RS </a>
                <nav>
                    
                    
                   <ul id="nav-menu"> 
                        <li style="text-align: right"><a href="indexx.php"><img src="images/Linkedin_icon.svg.png" alt="Logo" style="width:100px;height:100px;  position:fixed; left:150px; top:10px;"></a></li>
                        <div style = "position: fixed; right: 250px; top:40px;">
                      
                        <button style = "background-color: #0e76a8; border-radius: 8px; font-size: 17px; padding: 5px 12px;" ><a href="aboutus.php" style="color: floralwhite ; text-decoration: none;" >About Us</a></button>
                        <button style = "background-color:#0e76a8; border-radius: 8px; padding: 5px 12px;"><a href="Signup.php" style="color: floralwhite ; text-decoration: none; font-size: 17px;">Sign Up</a></button>
                        <button style = "background-color:#0e76a8; border-radius: 8px; padding: 5px 12px;"><a href="login.php"style="color: floralwhite ; text-decoration: none; font-size: 17px; ">Sign In</a></button> 
                            
                        
                        
                          </div>
                    </ul>
                </nav>
            </div>
    </header>
        
<!-- section el sora -->
        
        <section id="hero">
            <div class="fade"></div>
            <div class="hero-text">
                <h1> </h1>
<p> </p>
<p> </p>
            </div>
        </section>
        
    </div>
    
<!-- Home Section -->
    <section id="Greetings">
        <div class="flex container">
            <div>
                <h2 style = "color: #0e76a8;">Linkdn RS is designed for companies  </h2>
                <ul>
                    <li> easy mangment system </li>
                    <li> better use</li>
                    <img src ="images/about/1575462320422.jpg" style = "width: 95%;">
                </ul>
            </div>
        </div>
    </section>
    
    <br><br><br><br><br><br>
    
    <section id="Greetings">
        <div class="flex container">
            <div>
                <h2 style = "color: #0e76a8;"> Profile Cards </h2>
                
            </div>
        </div>
    
    
<!-- Profile Section -->
    <div class="row">
        <div class="column">
    <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/Students/micheal.jpeg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>Michael emil</h1> 
      <p>Software Engineer</p> 
      <p>Team Leader</p>
    </div>
  </div>
</div>
</div>
        
        
   <div class="column">     
 <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/Students/WhatsApp Image 2021-06-19 at 6.52.30 AM.jpeg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>Seif nafaa</h1> 
      <p>Architect & Engineer</p> 
      <p>recruiter</p>
    </div>
  </div>
</div>       
</div>
        
 <div class="column">     
 <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/Students/t-3.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>Silvia hanna</h1> 
      <p>ARtificial intelligence</p> 
      <p>Vteam</p>
    </div>
  </div>
</div>       
</div>         
       

</div>
        
</section>
<Br><br><br><Br>      
<!-- Footer -->
        
    
</body>
    
</html>