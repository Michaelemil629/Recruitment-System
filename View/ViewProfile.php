<!DOCTYPE html>
<html>
    
<title> My Profile </title>
<?php 
    session_start();
    require_once("navbar.php") 
?>   
    
        <?php
  define('__ROOT__', "../");
  require_once(__ROOT__ . "Model/FacultyModel.php");
  require_once(__ROOT__ . "Model/UserTypesModel.php");
  require_once(__ROOT__ . "Model/UsersModel.php");
  require_once(__ROOT__ . "Controller/UserController.php");
  require_once(__ROOT__ . "View/ViewAllProfiles.php");

  $model = new UsersModel();
  $controller = new UserController($model);
  $view = new ViewAllProfiles($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) 
{
  $controller->{$_GET['action']}();
}

?>
    
    <?php
    
$id = $_GET['id'];
foreach ($model->users2 as $user)
{
    if ($user->getID() == $id)
    {
        $studentImage = $user->getImage();
        $studentName = $user->getUserName();
        $studentFacultyId = $user->getFacultyId();
        $studentCreatedAt = $user->getCreatedAt();
        $studentUserTypeId = $user->getUserTypeId();
        $studentID = $user->getID();
        
        $faculty=new FacultyModel($studentFacultyId);
        $faculty_name=$faculty->faculty;
        $usertype= new UserTypesModel($studentUserTypeId);
        $usertype_name=$usertype->type;
        
    }
}

?>
    
    
    
                                                <!-- Style -->
<style>
    
  #hero {
    background: url('images/all-icon/download.jpg') center center no-repeat;
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
                <a id="logo" href="#"> My Personal Profile </a>
                <nav>
                    <button id="nav-toggle" class="hamburger-menu">
                        <span class="strip"></span>
                        <span class="strip"></span>
                        <span class="strip"></span>
                    </button>
                    
                    <ul id="nav-menu"> 
                        <li><a href="Candidate.php"><img src="images/Linkedin_icon.svg.png" alt="Logo" style="width:70px;height:70px;  position:fixed; left:80px; top:7px;"></a></li>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div style = "position: fixed; right: 100px; top:30px;">
                        
                        <button style = "background-color: #0e76a8; border-radius: 8px; font-size: 17px; padding: 5px 12px;"><i class="fa fa-home" style="color:floralwhite; "></i> <a href="Candidate.php" style = "text-decoration: none; color: floralwhite;">Home</a></button>
                        
                        
                        <button style = "background-color: #0e76a8; border-radius: 8px; font-size: 17px; padding: 5px 12px;"><a href="editProfile.php?id=<?php echo $_SESSION["id"];?>" style="color: floralwhite ; text-decoration: none;"> Edit My Profile </a></button> 

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

       </div>
      </section>
  </div>
    
    
    	<div class="details-price">
               <div class="col-md-4">
                   <img src='images/Students/<?php echo $studentImage ?>' id='disp_img' height="350px" width="350px" mar>
                   
        </div>
        
		    <div class="details-price">
            
            <h1> <label > Student Name: </label> <?php echo $studentName ?> </h1>
              
            </div>    
                
            <div class="row details">
            
            <h1> <label > Created At: </label> <?php echo $studentCreatedAt ?> </h1>
            </div>
            
            
            <div class="row details">
            
                <?php 
                    $mysqli=new MySQLi('localhost','root','','recruitment_system');
                    $result= $mysqli ->query("select * from faculties");
?>
            
                <?php 
                while ($rows=$result->fetch_assoc())
                {
                    $faculty=$rows['faculty'];
                    $id=$rows['id'];
                }
            ?>
                
            <h1> <label > Faculty: </label> <?php echo $faculty_name ?> </h1>
            </div>
            
            <div class="row details">
            
                <?php 
                    $mysqli=new MySQLi('localhost','root','','recruitment_system');
                    $result= $mysqli ->query("select * from usertypes");
?>          
                <?php 
                while ($rows=$result->fetch_assoc())
                {
                    $type=$rows['type'];
                    $id=$rows['id'];
                }
            ?>
                
            <h1> <label > Type: </label> <?php echo $usertype_name ?> </h1>
            </div>
                
            
    
                                                    <!-- Footer -->
        <?php require_once("Footer.php") ?>
</body>
       
</html> 