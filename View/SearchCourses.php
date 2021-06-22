<!DOCTYPE html>
<html>
    
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
	</head>
<title>Search job</title>
<?php 
    session_start();
    require_once("navbar.php") ?>
                                                <!-- Style -->
<style>
    
  #hero {
    background: url('images/about/solid.jpg') center center no-repeat;
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
                                                <!-- Header -->
<header>
            <div class="flex container">
                <nav>
                    <button id="nav-toggle" class="hamburger-menu">
                        <span class="strip"></span>
                        <span class="strip"></span>
                        <span class="strip"></span>
                    </button>
                    
                    <ul id="nav-menu"> 
                        
                       <li><a href="Candidate.php"><img src="images/Linkedin_icon.svg.png" alt="Logo" style="width:80px;height:80px;  position:fixed; left:80px; top:20px;"></a></li>
                        
                        
                    <div style = "position: fixed; right: 100px; top:20px;">
                        
                        <button style = "background-color: #0e76a8; border-radius: 8px; font-size: 17px; padding: 5px 12px;"><i class="fa fa-home" style="color:floralwhite; "></i> <a href="Candidate.php" style = "text-decoration: none; color: floralwhite;">Home</a></button>
                        
                        <button style = "background-color: #0e76a8; border-radius: 8px; font-size: 17px; padding: 5px 12px;"><a href="AllCourses.php" style="color: floralwhite ; text-decoration: none;"> Jobs </a></button>
                        
                        <button style = "background-color: #0e76a8; border-radius: 8px; font-size: 17px; padding: 5px 12px;"><a href="MyCart.php?id=<?php echo $_SESSION["id"];?>" style="color: floralwhite ; text-decoration: none;" > My Jobs </a></button>
                        
                        <button style = "background-color: #0e76a8; border-radius: 8px; font-size: 17px; padding: 5px 12px;"><a href="WriteQuestion.php" style="color: floralwhite ; text-decoration: none;"> Write Question </a></button>
                        
                        <button style = "background-color: #0e76a8; border-radius: 8px; font-size: 17px; padding: 5px 12px;"><a href="AllQuestions.php" style="color: floralwhite ; text-decoration: none;"> All Questions </a></button>
                        
                        <button style = "background-color: #0e76a8; border-radius: 8px; font-size: 17px; padding: 5px 12px;"><a href="suggest.php" style="color: floralwhite ; text-decoration: none;"> Suggestion </a></button>
                        
                        <button style = "background-color: #0e76a8; border-radius: 8px; font-size: 17px; padding: 5px 12px;"><a href="MessageHistory.php?id=<?php echo $_SESSION["id"];?>" style="color: floralwhite ; text-decoration: none;" > Messages History </a></button>
                        
                        <button style = "background-color: #0e76a8; border-radius: 8px; font-size: 17px; padding: 5px 12px;"><a href="ViewProfile.php?id=<?php echo $_SESSION["id"];?>" style="color: floralwhite ; text-decoration: none;"> Profile </a></button>
                        
                        <button style = "background-color: #0e76a8; border-radius: 8px; font-size: 17px; padding: 5px 12px;"><a href="logout.php" style="color: floralwhite ; text-decoration: none;"> Logout </a></button> 
                        
                        
                        </div>

                    </ul>
                </nav>
            </div>
    </header>
                                                <!-- Body -->
<body>
    
    <div id="header-hero-container">

  <section id="hero">
      <div class="fade"></div>
      <div class="hero-text">
          
          <!-- F el noss -->
          
          <h1> Live Search Down </h1>
          
          
       </div>
      </section>
  </div>
    
    <div class="container">
			<br />
			<br />
			<br />
			<h2 align="center">Search Now about course or price </h2><br />
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text" name="search_text" id="search_text" placeholder="Search by Course Name Only" class="form-control" />
				</div>
			</div>
			<br />
			<div id="result"></div>
		</div>
		<div style="clear:both"></div>
		<br />
		
		<br />
		<br />
		<br />
    
    
                                                    <!-- Footer -->

    
    
<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"fetchCourses.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>
    
</body>
       
</html> 