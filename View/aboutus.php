<!DOCTYPE html>
<html>
    
<title> About Us </title>
<?php require_once("navbar.php") ?>
    
<style>
    
  #hero {
    background: url('images/all-icon/aboutus.jpg') center center no-repeat;
    background-size: cover;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    height: 100%;
    width: 100%;
}

.sidepanel {
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
  color: #FFA500;
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
  background-color: #808080;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #FFA500;
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
  color: #FFA500;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: orange;
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
    
</style>
    
<body>
    
    <div id="header-hero-container">
      <header>
            <div class="flex container">
                <a id="logo" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; About Us</a>
                    <button id="nav-toggle" class="hamburger-menu">
                        <span class="strip"></span>
                        <span class="strip"></span>
                        <span class="strip"></span>
                    </button>
                    <nav>
                        
                    <ul id="nav-menu"> 
                        <li style="text-align: right"><a href="indexx.php"><img src="images/Linkedin_icon.svg.png" alt="Logo" style="width:70px;height:70px;  position:fixed; left:180px; top:7px;"></a></li>
                        <div style = "position: fixed; right: 250px; top:30px;">
                            
                        <button style = "background-color: #0e76a8; border-radius: 8px; font-size: 17px; padding: 5px 12px"><i class="fa fa-home" style="color:floralwhite; "></i> <a href="indexx.php" style = "text-decoration: none; color: floralwhite;">Home</a></button>
                        
                        <button style = "background-color:#0e76a8; border-radius: 8px; padding: 5px 12px;"><a href="Signup.php" style="color: floralwhite ; text-decoration: none; font-size: 17px;">Sign Up</a></button>
                            
                        <button style = "background-color:#0e76a8; border-radius: 8px; padding: 5px 12px"><a href="login.php"style="color: floralwhite ; text-decoration: none; font-size: 17px;">Sign In</a></button> 
                            
                        
                        
                          </div> 
                        

                    </ul>
                </nav>
            </div>
    </header>
  <section id="hero">
      <div class="fade"></div>
      <div class="hero-text">
          <div class="about-items pt-60">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <h4><font color="#0e76a8">01. About LinkedIn</font></h4>
                            <p><font color="white">Welcome to LinkedIn, the world's largest professional network with 756 million members in more than 200 countries and territories worldwide.</font></p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <h4><font color="#0e76a8">02. Vision</font></h4>
                            <p><font color="white">Create economic opportunity for every member of the global workforce.</font></p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <h4><font color="#0e76a8">03. Mission</font></h4>
                            <p><font color="white">The mission of LinkedIn is simple: connect the world’s professionals to make them more productive and successful.</font></p>
                        </div> <!-- about singel -->
                    </div>
                </div> <!-- row -->
            </div>
       </div>
      </section>
  </div>
    
<!-- Footer -->
       
</body>
       
</html> 