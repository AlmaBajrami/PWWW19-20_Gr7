<?php
    session_start();
    if (array_key_exists('username', $_POST) OR array_key_exists('email', $_POST) OR array_key_exists('password', $_POST)) {
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'CorporateClean'; 

        $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        if ($conn->connect_error) {
            die("Connection error: " . $connection->connect_error);
        }
           
        $sqlQuery = "CREATE TABLE IF NOT EXISTS Users (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            username VARCHAR(20) NOT NULL,
            email VARCHAR(20) NOT NULL,
            password VARCHAR(10000) NOT NULL)";

        if ($conn->query($sqlQuery) === TRUE) {
            echo '<p>Table created successfully!</p>';
        } else {
            echo "Error creating SQL table: " . $conn->error;
        }    


        if ($_POST['email'] == '') {
            
            echo "<p>Email address is required.</p>";
            
        } else if ($_POST['password'] == '') {
            
            echo "<p>Password is required.</p>";
        } else if ($_POST['username'] == '') {
            
            echo "<p>Username is required.</p>";
        
        } else{
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $hashPass = hash('sha512',$password);

            $sqlUs = "SELECT * 
            FROM Users 
            WHERE (username='$username');";
            $resUs = mysqli_query($conn,$sqlUs);

            $sqlEm = "SELECT * 
            FROM Users 
            WHERE (email='$email');";
            $resEm = mysqli_query($conn,$sqlEm);

            if (mysqli_num_rows($resUs) > 0) {
                echo "<p>A user with this username already exists. Please try another.</p>";
            } else if(mysqli_num_rows($resEm) > 0){
                echo "<p>A user with this email already exists. Please try another.</p>";
            } else{
                $query = "INSERT INTO Users (username, email, password) VALUES('$username','$email','$hashPass')";

                if ($conn->query($query) === TRUE) {
                    
                   $_SESSION['email'] = $_POST['email'];
                    
                    header("Location: session.php");
                  } else {
                    $error = 'Error: ' . $query . $conn->error;
                    echo '<script type="text/javascript">'; 
                    echo 'alert("'.$error.'");'; 
                    echo '</script>'; 
                }
            }
            
            
        }
        
        
    }

?>

<html>
    <head>
        <meta charset="utf-8">

        <title>User Data Login</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
        <link rel="stylesheet" href="StilizimiHP.css" />
        <style>
            .nav ul {
                display: inline-block;
                list-style: none;
                text-align: left;
                margin: 0;
                padding: 0;
            }
        </style>
        <style>
            p{ font-weight: bold;
            padding: 5px;}
            #box{
                border-radius: 5px;
                padding: 5px;
                width:100%;
                height:35px;
            }
            #signup, #edit, #login{
                display:inline-block;
                margin: 0px 20px;
            }

            #edit,#login{margin-left:20%;}
            #login{bottom:250px;}
            #submit{width:80%;}
            
        </style>
    </head>
    <body>
    <div class="Margin">
        <div id="mydiv">CorporateClean</div>
        <header>
            <span> Free PSD Website Template &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		Call Us: xxxxx xxxxxxxxxx  &emsp;&emsp;&emsp;&emsp; Email Us: contact@mydomain.com</span>
        </header>

        <div class="nav">
            <ul>

                <li> <a href="HomePage.php">Homepage</a></li>

                <li> <a href="StyleDemo.php">Our Company</a></li>

                <li> <a href="FullWidth.php">Book Now</a></li>

                <li> <a href="Gallery.php">Gallery</a></li>

                <li> <a href="#">About Us</a>
                    <ul>
                        <li><a href="AboutUs.php">&emsp;Service</li>
						<li><a href="#">Safety</li>
						<li><a href="#">Area</li>
						</ul> 
				  </li>  
				  
                  <li> <a href="signup.php">User Login</a></li>

                        <li> <a href="#">Link text</a></li>

                    </ul>
        </div>
        <div class="bodypart">
            <div id="signup">
                <h1>Sign up form</h1>
                <form method = "post">
                    <p>Write your username:</p>
                    <input name="username" type="text" placeholder="Username" id="box"><br>
                    
                    <p>Write your email address:</p>
                    <input name="email" type="text" placeholder="Email address" id="box"><br>
                    
                    <p>Write your password:</p>
                    <input name="password" type="password" placeholder="Password" id="box"><br>
                    <br>
                    <input type="submit" id="submit"  value = "Sign up">
                </form>
            </div>
            <div id="edit">
                <h1>Edit data form</h1>
                <form method = "post">
                    <p>Change your username:</p>
                    <input name="usernameC" type="text" placeholder="Username" id="box"><br>
                    
                    <p>Change your email address:</p>
                    <input name="emailC" type="text" placeholder="Email address" id="box"><br>
                    
                    <p>Change your password:</p>
                    <input name="passwordC" type="password" placeholder="Password" id="box"><br>
                    <br>
                    <input type="submit" id="submit" value = "Edit data">
                </form>
            </div>
            <div id="login">
                <h1>Log in form</h1>
                <form method = "post">
                    <p>Enter your username:</p>
                    <input name="usernameL" type="text" placeholder="Username" id="box"><br>
                    
                    <p>Change your password:</p>
                    <input name="passwordL" type="password" placeholder="Password" id="box"><br>
                    <br>
                    <input type="submit" id="submit" value = "Log in">
                </form>
            </div>
        </div>

        <div class="wrapper row3">
            <div id="footer" class="clear">
                <section class="block">
                    <h2>Contact Details</h2>
                    <nav>
                        <ul>
						<?php
						function ContactDetails($Cname)
						{
						echo "$Cname<br>";
						}
						ContactDetails("Company: Corporate Clean");
						// case-sensitive constant name
						define("A", "Address: xxxxxxxx");
						echo A;

						echo "</br>";
						ContactDetails("Street name&amp; Number");
						ContactDetails("Town: Shqip&#xEB;ri");
						echo str_replace("Town", "Postcode/Zip:", "Town");

						echo "</br>";
						ContactDetails("</br>Tel:xxxxxx");
						ContactDetails("Fax:xxxxxx");
						ContactDetails("Email:<a href=mailto:>contact@mydomail.com</a>");
						echo "</br>";
						ContactDetails("<strong>Office Hours</strong>");
						ContactDetails("Monday- Friday :08:00-17:30");
						ContactDetails("Saturday: 08-13:00");
						echo str_word_count("Saturday: 08-13:00  ");
						echo strrev("Address  ");

						?>
					</ul>
                    </nav>

                </section>


                <section class="block" id="block2">
                    <nav>
                        <h2>Stay Social</h2>
                        <ul>
                            <li><img src="images/linkedin.jpg" width="25px"><a href="https://www.linkedin.com/" target="_blank">Get linked up in Linkeldn</a></li>
                            <li><img src="images/twitter.png" width="25px"><a href="https://twitter.com/" target="_blank">Keep up with our Tweets</a></li>
                            <li><img src="images/pinterest.png" width="25px"><a href="https://www.pinterest.com/" target="_blank">Photos on Pinterest</a></li>
                            <li><img src="images/rss.jpg" width="25px"><a href="https://rss.com/"><abbr title="Really Simple Syndication">RSS Feed</abbr></a></li>
                        </ul>
                    </nav>
                </section>

                <section class="block" id="block3">
                    <h2>From The Blog</h2>
                    <nav>
                        <ul>
                            <li><strong>Blog Post Title</strong></li>
                            <li>Posted by Admin on 03.01.2020</li>
                            <li>
                                <p>Cleanliness must be observed in a learning envionment. Clean environment</p>
                                <p id="more0" style="display: none;">can motivate students.</p>
                            </li>
                            <li><a href="#" onclick="toggleText6(this, 'more0'); return false;">Read More &raquo;</a></li>
                            <li></li>
                            <li><strong>Blog Post Title</strong></li>
                            <li>Posted by Admin on 02.01.2020</li>
                            <li>
                                <p>A commercial office cleaning company will also ensure the public area</p>
                                <p id="more01" style="display: none;">is appealing and empty waste bins. </p>
                            </li>
                            <li><a href="#" onclick="toggleText7(this, 'more01'); return false;">Read More &raquo;</a></li>
                        </ul>
                    </nav>
                </section>

                <section class="block" id="block4">
                    <h2>Contact Us</h2>
                    <nav>

                        <form method="post">
                            <p><input id="nameinput" name="name" type="text" placeholder="Name"></p>
                            <p><input id="email" name="email" type="text" placeholder="Email"></p>
                            <p><textarea placeholder="Message" name="message" rows="3"></textarea></p>
                            <p><input id="submit" type="submit" name="submit"></p>
                        </form>
                        <?php
                            if(isset($_POST['submit'])){
                                $name = $_POST["name"];
                                $email = $_POST["email"];
                                $msg = $_POST["message"];
                                $myfile = "contactMessages.txt";
                                
                                $txt = $name.' tried to contact the company, with email '.$email.', and message "'.$msg.'", at '.date("H:i:s d/m/Y.");
                                $line = '=======================================================================================================================';
                                file_put_contents($myfile, $txt. "\r\n".$line."\r\n", FILE_APPEND);

                                echo '<script type="text/javascript">'; 
                                echo 'alert("Message has been successfully sent");'; 
                                echo '</script>';  
                            }
                        ?>
                    </nav>
                </section>
            </div>
        </div>
 </body>
</html>