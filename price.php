 <!--
Name : Habibuddin
SID : 111236644
Email : habibuddin.ahmadi@stonybrook.edu

Name : Rahel Zewde
SID : 111250334
Email : rahel.zewde@stonybrook.edu
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel ="stylesheet" href ="index.css">  
        
        <link rel="stylesheet" href="styles/mystyle.css">
		<link rel = "icon" type = "image/png" href = "favicon.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="index.js"></script>
        <title>
            Tak Shopper   
        </title>
    
    </head>
    <body>
        <!-- Header -->
        
        <div class = "allcontain">
            <div class = "header">
                <ul class = "socialicon">
                    <li><a href = "#"><i class = "fa fa-facebook"></i></a></li>
                    <li><a href = "#"><i class = "fa fa-twitter"></i></a></li>
                    <li><a href = "#"><i class = "fa fa-google-plus"></i></a></li>
                    <li><a href = "#"><i class = "fa fa-pinterest"></i></a></li>
                </ul>
                <ul class = "logreg">
                    <li><a href = "#">Login</a></li>
                    <li><a href = "#"><span class = "register">Register</span></a></li>
                </ul>
            </div>
            
        <!-- Navigation Bar -->
            <nav class="topnav" id = "myTopnav">
                <a href="index.html"><div><span class="big">CSE305</span><span class="small">Shop</span></div></a>
                
                <ul >
                    <li><a href = "index.html" class ="home">Home</a></li>
                    <li><div class="dropdown">
                            <button class="dropbtn" onclick="myFunction1()">
                                Categories<i class="fa fa-caret-down"></i>
                            </button>
                        <div class = "dropdown-content" id="myDropdown">
                            <a href="#">Desktops</a>
                            <a href="#">Laptops</a>
                            <a href="#">Printers</a>
                        </div>
                        </div>
                    </li>
                    <li><div class="dropdown">
                            <button class="dropbtn2" onclick="myFunction2()">
                                Search By<i class="fa fa-caret-down"></i>
                            </button>
                        <div class ="dropdown-content" id="myDropdown2">
                            <a href="price.html">Price</a>
                            <a href="mini.html">Minimum Requirments you need</a>
                            <a href = "manufacturer.html">Search by Manufacturer</a>
                            <a href="budget.html">What is your Budget?</a>
							<a href="allinfo.html">Full Specification Search</a>
                        </div>
                        </div>
                    </li>
                    <li><a href = "#" class="contact">Contact</a></li>
                    <li><a class="active" href = "pie.html">I am Lucky!</a></li>
                    
                </ul>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
            </nav>           
        </div>
<!-- ******************** Photo Viewer **************** -->
        <div class = "slidshow-container">
            <div class="mySlide fade">
                <img class = "mySlides" src="images/laptop1.jpg" style="width: 100%">
                <div class="text">The Laptop you want!</div>
            </div>
            <div class="mySlide fade">
                <img class = "mySlides" src="images/laptop2.jpg" style="width: 100%">
                <div class="text">The Laptop you want!</div>
            </div>
            <div class="mySlide fade">
                <img class = "mySlides" src="images/laptop3.jpg" style="width: 100%">
                <div class="text">The Laptop you want!</div>
            </div>
            <div class="mySlide fade">
                <img class = "mySlides" src="images/laptop4.jpg" style="width: 100%">
                <div class="text">The Laptop you want!</div>
            </div>
            <div class="mySlide fade">
                <img class = "mySlides" src="images/laptop5.jpg" style="width: 100%">
                <div class="text">The Laptop you want!</div>
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        <div style="text-align: center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)">
            </span>
            <span class="dot" onclick="currentSlide(3)">
            </span>
            <span class="dot" onclick="currentSlide(4)">
            </span>
            <span class="dot" onclick="currentSlide(5)">
            </span>
        </div>
        
        <!----------------------------------- Form for Query --------------------------------->
        
        
        <div class="search">   
        
    <form method="post" action="price.php" class="search_form">
    
    <label class="moveit">Lowest price:</label>
            <input type="number" class="lowest" step= "0.1" name ="lowestPrice" min="0" placeholder="Lowest price...">
	 <label>Highest price:</label>
            <input type="number" class="highest" step= "0.1" name="highestPrice" min="0" placeholder="Highest price...">
    <button type="submit" id="sub"><i class="fa fa-search" id ="icon"></i></button>
        </form>
        </div>
        
        
        
        <!----------------------------------- PHP Stuff ------------------------------------------->
        
        
        
        <?php
// Database name
$dbname = "hkaps5";
// Name of the file
$filename = 'C:/xampp/htdocs/hkaps5.sql';
// MySQL host
$mysql_host = 'localhost:3306';
// MySQL username
$mysql_username = 'root';
// MySQL password
$mysql_password = '';
// Database name
$mysql_database = 'hkaps5';
//Reading the sql file
$conn = mysqli_connect($mysql_host, $mysql_username,$mysql_password,$mysql_database);

if(!$conn){
	die("Connection failed: " .mysql_error());
}
//echo "Connected successfully";
//MariaDB_connect($mysql_host, $mysql_username, $mysql_password) or die('Error connecting to MySQL server: ' . mysql_error());
// Select database
//mysql_select_db($mysql_database) or die('Error selecting MySQL database: ' . mysql_error());

// Temporary variable, used to store current query
$templine = '';
// Read in entire file
$lines = file($filename);
// Loop through each line
foreach ($lines as $line)
{
// Skip it if it's a comment
if (substr($line, 0, 2) == '--' || $line == '')
    continue;

// Add this line to the current segment
$templine .= $line;
// If it has a semicolon at the end, it's the end of the query
if (substr(trim($line), -1, 1) == ';')
{
    // Perform the query
    //mysql_query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
    // Reset temp variable to empty
    $templine = '';
}
}
// (a)
$low = $_POST['lowestPrice'];
$high = $_POST['highestPrice'];
        
$sql= "SELECT products.maker, p.model, speed,p.price from pcs p inner join products on p.model = products.model where p.price <= " . $high . " and p.price >= " . $low. ";";


$result = mysqli_query($conn, $sql);

$row_number = $result->num_rows;

echo "<div style=\"result_rapper\">";
if ($row_number > 0 ) {
	
	while($row = $result->fetch_assoc() ) {
       echo
		
        "<div class = \"result\"><img class = \"result_image\" src=\"images/dell-3243-220.jpg\"
		alt=\"computer photo\" height = 180px; width=200px;>
		<p>Maker: {$row['maker']}</p>
		<p>Model: {$row['model']}</p> "."<p>Speed: {$row['speed']}</p> <p>Price: {$row['price']} "."</div>";
		 
   }
 
} else {
    echo "0 results";
}
echo"</div>";
//add the back and forth check for multiple entries

$conn->close();

 
?>
        
        
        
        
        
<!-- _______________________________News Letter ____________________-->
        <div class="allcontain">
        
	<div class="newslettercontent">
		<div class="leftside">
			<img src="images/border.png" alt="border">
			<h1>NEWSLETTER</h1>
			<p>Subscribe to the COLLECTIONCARS mailing list to <br>
				receive updates on new arrivals, special offers <br>
				and other discount information.</p>
		</div>
		<div class="rightside">
			<img class="newsimage" src="images/laptopsamll.jpg" alt="newsletter">
			<input type="text" class="form-control" id="subemail" placeholder="EMAIL">
			<button>SUBSCRIBE</button>
		</div>
	</div>
	<!-- ______________________________________________________Bottom Menu ______________________________-->
	<div class="bottommenu">
		<!--<div class="bottomlog" style="text-align: center;">
		<span class="big" style="margin:auto; display:table; border:1px solid red;">CSE305</span><span class="small">Shop</span>
            
		</div> -->
		<ul class="bottom-nav">
			<li role="presentation" ><a href="#/" role="button">ABOUT US</a></li>
			<li role="presentation"><a href="#/">CATEGORIES</a></li>
			<li role="presentation"><a href="#/">PREORDERS</a></li>
			<li role="presentation"><a href="#/">CONTACT US</a></li>
			<li role="presentation"><a href="#/">RECEIVE OUR NEWSLETTER</a></li>
		</ul>
		<p>For more information please contact us through our <br>
			new social media platforms.</p>
		 <img src="images/line.png" alt="line"> <br>
		 <div class="bottomsocial">
		 	<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-google-plus"></i></a>
			<a href="#"><i class="fa fa-pinterest"></i></a>
		</div>
			<div class="footer">
				<div class="copyright">
				  &copy; Copy right 2018 | <a href="#">Privacy </a>| <a href="#">Policy</a>
				</div>
				<div class="atisda">
					 Designed by <a href="mailto:habibuddin.ahmadi@stonybrook.edu">Habibuddin Ahmadi </a> 
				</div>
			</div>
	</div>
        </div>
     
    </body>
</html>