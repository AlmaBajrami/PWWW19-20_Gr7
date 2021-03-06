<!DOCTYPE html>
<html lang="en">
<html lang="en" manifest="manifest.appcache">

<head>
    <meta charset="utf-8">

    <title>Projekti ne WWW </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="StilizimiSD.css" />

</head>

<body>

    <div class="Margin">
        <div id="mydiv">CorporateClean</div>
        <header>
            <span> Free PSD Website Template &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		Call Us: xxxxx xxxxxxxxxx  &emsp;&emsp;&emsp;&emsp; Email Us: contact@mydomain.com</span>
        </header>

        <div class="list">

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

        <div id="clockDisplay" class="container"></div>
        <div class="all_wrp">
            <div class="content1_wrapper">
                <div class="wpb_wrapper">
                    <h2>Our Approach to Window Washing</h2>
                    <p>Every building’s window cleaning needs are unique. From office high rises to stadiums to shopping centers, Corporate Cleaning Services addresses even the most difficult-to-clean properties. Client satisfaction is assured through a
                        step-by-step approach that is unmatched in the industry:</p>
                </div>
                <div class="wpb_list">
                    <ul>
                        <li><em>Individual property assessments are made in preparing a proposal</em></li>
                        <li><em>A customized work plan is created so window cleaning teams perform jobs thoroughly, efficiently and safely</em></li>
                        <li><em>Jobs are auto-scheduled and confirmed via email</em></li>
                        <li><em>Supervisors assigned to each building personally monitor all visits</em></li>
                        <li><em>Each window washer carries a cell phone, and supervisors utilize iPhones and Androids to respond immediately to any concerns or requests</em></li>
                        <li><em>Rapid response is provided for emergencies, special needs and inclement weather rescheduling</em></li>
                        <li><em>Supervisors are available 24/7</em></li>
                    </ul>
                </div>
                <div class="wpb_wrapper">
                    <p>Considerable lengths are taken to document the level of service provided to each client. Follow-up surveys are sent after each job to provide an additional opportunity for feedback. At job completion, the company’s president emails
                        the Property Manager to ensure his or her satisfaction.</p>
                </div>

                <div class="wpb_wrapper" id="wip">
                    <h2>Work Implementation Process</h2>
                    <p>Corporate Cleaning Services, upon receiving the contract for window washing, will conduct a review of the window washing tasks and suggest a tentative washing schedule for the building, based on the original specifications of the bid
                        submitted. Once a schedule has been confirmed, Corporate Cleaning Services will then alert the building management and engineers via email in advance of the washings. A suggested window washing date is sent to the property manager
                        the month prior to reconfirm the scheduled date, and a final reminder is then sent the business day before the scheduled cleaning.</p>
               <?php
						echo $_SERVER['PHP_SELF'];
						echo "<br>";
						echo $_SERVER['HTTP_USER_AGENT'];
						?>
		    </div>
            </div>

            <div class="table_wrapper">
            <p id="date">Date: 
                <span id="datetime"></span><br>
                <span id="time"></span>
                <?php
                    $time = (int)date("h");
                    $str = "Good evening visitors!!!";
                    if($time >=5 && $time < 12){
                        $str = str_replace("evening", "morning", $str);            
                    }
                    else if($time >=12 && $time < 18){
                        $str = str_replace("evening", "afternoon", $str);
                    }
                    echo '<script>document.getElementById("time").innerHTML="'.$str.'";</script>';
                ?>
            </p>
                <script>
                    /*date*/
                    var dt = new Date();
                    document.getElementById("datetime").innerHTML = (("0" + (dt.getMonth() + 1)).slice(-2)) + "/" + (("0" + dt.getDate()).slice(-2)) + "/" + (dt.getFullYear());
                </script>
                <table class="table_1">
                    <tr>
                        <td class="table_rows"><img src="images/t1.png" width="40px" id="table_img">Schedule confirmations are sent out the month before, followed by a reminder the day before.</td>
                    </tr>
                    <tr>
                        <td class="table_rows"><img src="images/t2.png" width="40px" id="table_img">Daily e-mail notifications of work status.</td>
                    </tr>
                    <tr>
                        <td class="table_rows"><img src="images/t3.png" width="40px" id="table_img">We can be contacted and respond on a 24/7 basis.</td>
                    </tr>
                    <tr>
                        <td class="table_rows"><img src="images/t4.png" width="40px" id="table_img">We do not charge extra for overtime or weekend work.</td>
                    </tr>
                    <tr>
                        <td class="table_rows"><img src="images/t5.png" width="40px" id="table_img">Fully licensed by the State of Illinois to provide Spiderkill applications.</td>
                    </tr>
                    <tr>
                        <td class="table_rows"><img src="images/t6.png" width="40px" id="table_img">Three full time Project Managers, who are dedicated to supervision only.</td>
                    </tr>
                    <tr>
                        <td class="table_rows"><img src="images/t7.png" width="40px" id="table_img">Every employee has received 4 hour fall protection training. </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="video">

            <video width="600" height="400" controls>
			<source src="videos/video1.mp4" type="video/mp4"></video>


        </div>

        <div class="video2">
            <figure id="audio">
                <figcaption id="audiofig"><em>Room Tone Kitchen Sound Effect</em></figcaption>

                <audio controls>
			<source src="audio/kitchen.mp3" type="audio/mpeg">
			
			</audio>
            </figure>
        </div>
        <div class="video3">
            <figure id="audio1">

                <figcaption id="audiofig"><em>Hand wash basin fill to let third run full...</em></figcaption>
                <audio controls>
			
			<source src="audio/handwash.mp3" type="audio/mpeg">
			</audio>
            </figure>
        </div>
        <div class="newest_services">
            <h1>Our new services</h1>

            <div class="row">
                <div class="column" id="awning_cleaning">
                    <h2>Awning Cleaning⁧
                    </h2>
                    <p>First impressions matter. That’s why Corporate Cleaning Services can perform awning pressure washing…</p>
                    <button class="butoni" type="button" onclick="clickCounter()">Read More</button>
                    <p id="result"></p>
                </div>
                <div class="column" id="high_dusting">
                    <h2>High Dusting</h2>
                    <p>There are areas that are simply hard to reach. Corporate Cleaning Services is able to offer an access solution…</p>
                    <button class="butoni" onclick="test_text()">Read More</button>
                </div>
                <div class="column" id="holiday">
                    <h2>Holiday Decoration Installation and Removal</h2>
                    <p id="holidayt">To better serve our client needs, you can call us for the installation and removal of your holiday decorations…</p>
                    <button class="butoni" onclick="exec_text()">Read More</button>
                    <p id="exec_tex"></p>
                </div>
            </div>
        </div>


        <div class="principles">

            <div class="six">
                <h1>We believe in six principles</h1>
            </div>

            <div class="kolona1">
                <h2><img src="images/half.png" width="60px" height="50px" id="half">Trust and Safety</h2>
                <p>Each cleaner must undergo an extensive background check, DOJ SMART screen, interviews, and address verification for your safety.</p>

            </div>
            <div class="kolona1">
                <h2><img src="images/moon.png" width="60px" height="50px" id="moon">Peace of Mind</h2>
                <p>Backed by an industry-leading $1,000,000 General Liability Insurance, rest assured! We got your home covered.</p>


            </div>
            <div class="kolona1">
                <h2><img src="images/clock.png" width="60px" height="50px" id="clock">Quick, Simple and Convenient</h2>
                <p>Don't waste hours on calls and quotes. Our easy to use platform lets you get an appointment and get on with your day - woohoo!</p>



            </div>
        </div>

        <div class="principles">



            <div class="kolona1">
                <h2><img src="images/star.png" width="60px" height="50px" id="star">Highest Standard of Quality</h2>
                <p>Our stringent selection process ensures you will receive an unparalleled cleaning experience with top-notch professionals.</p>

            </div>
            <div class="kolona1">
                <h2><img src="images/leaf.png" width="60px" height="50px" id="leaf">Sustainability</h2>
                <p>
                    We promote environmentally friendly cleaning products that are wholesome for you, your family, and the community you live in.</p>


            </div>
            <div class="kolona1">
                <h2><img src="images/heart.png" width="60px" height="50px" id="heart">Satisfaction Guaranteed</h2>
                <p>Our 100% Satisfaction Guarantee coupled with friendly customer support will help you with any questions or issues you may have.</p>




            </div>


        </div>
        <div>
            <button onclick="search_text()" id="search_button">Search the position of a letter in highest standard.</button>

        </div>

        <svg width="1415" height="40">
  <rect width="1150" height="40" style="fill:rgb(24, 66, 158);stroke-width:3;stroke:rgb(196, 111, 6)" />

</svg>
        <div class="multiple_images">




        </div>

        <div class="wrapper row3">
            <div id="footer" class="clear">

                <section class="block">
                    <h2>Contact Details</h2>
                    <nav>
                        <ul>
                            <li>Company: Corporate Clean</li>
                            <li>Street name&amp; Number</li>
                            <li>Town: Shqip&#xEB;ri</li>
                            <li>Postcode/Zip</li>
                            <li><br> </li>
                            <li>Tel:xxxxxx</li>
                            <li>Fax:xxxxxx</li>
                            <li>Email:<a href=mailto:>contact@mydomail.com</a> </li>
                            <br>
                            <li><strong>Office Hours</strong></li>
                            <li>Monday- Friday :08:00-17:30</li>
                            <li>Saturday: 08-13:00</li>
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
                            <li><img src="images/rss.jpg" width="25px"><a href="https://rss.com/" target="_blank">RSS Feed</a></li>
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
        <script type="text/javascript">
            //pjesa e footer-->
            function toggleText6(btn, id) {
                var e = document.getElementById(id);
                if (e.style.display == 'block') {
                    e.style.display = 'none';
                    btn.innerHTML = "Read more &raquo;";
                } else {
                    e.style.display = 'block';
                    btn.innerHTML = "Read less &raquo;";
                }
            }

            function toggleText7(btn, id) {
                var e = document.getElementById(id);
                if (e.style.display == 'block') {
                    e.style.display = 'none';
                    btn.innerHTML = "Read more &raquo;";
                } else {
                    e.style.display = 'block';
                    btn.innerHTML = "Read less &raquo;";
                }
            }

            function clickCounter() {
                if (typeof(Storage) !== "undefined") {
                    if (sessionStorage.clickcount) {
                        sessionStorage.clickcount = Number(sessionStorage.clickcount) + 1;
                    } else {
                        sessionStorage.clickcount = 1;
                    }
                    document.getElementById("result").innerHTML = "You have clicked the button " + sessionStorage.clickcount + " time(s) in this session.";
                } else {
                    document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
                }
            }
            if (typeof(Storage) !== "undefined") {
                // Store
                localStorage.setItem("secondparagraphtext", "Work Implementation Process");
                // Retrieve
                document.getElementById("secondparagraph").innerHTML = localStorage.getItem("secondparagraphtext");
            } else {
                document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
            }

            //position of letter
            function exec_text() {
                var hol = "";
                hol += document.getElementById("holidayt").innerHTML;
                var obj = /h/.exec(hol);
                document.getElementById("exec_tex").innerHTML =
                    "Found " + obj[0] + " in position " + obj.index + " in the text";

            }
            //find a letter in a text
            function test_text() {
                var ac = "";
                ac += document.getElementById("awning_cleaning").innerHTML;
                alert("Is letter e in this text? " + /e/.test(ac));

            }
            //search button
            function search_text() {
                var str = "";
                str += document.getElementById("search_button").innerHTML;
                var n = str.search(/e/i);
                alert(n);
            }
        </script>

</body>

</html>
