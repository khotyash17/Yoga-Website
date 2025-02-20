<?php 
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'dbconnect.php';
    $username = $_POST["username"];
    $email = $_POST["email"];
	$number = $_POST["number"];
	$message = $_POST["message"];
    
     
    // $sql = "Select * from users where username='$username' AND password='$password'";
    
    $sql = "INSERT INTO `contact` (`username`,`email`,`number`,`message`) VALUES ('$username','$email','$number','$message')";
    $result = mysqli_query($conn, $sql);

if ($result) {
	// Data inserted successfully
	echo "Data inserted successfully.";
} else {
	// Error in inserting data
	echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>FITNESS TEMPLE YOGA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css./style.css">
	
	<style>
		.wow:first-child {
			visibility: hidden;
		}
		/* gallary*/
		h2{
			text-align: center;
			color: #cc1515;
		}
div.scroll-container {
  background-color: white;
  overflow: auto;
  white-space: nowrap;
  padding: 10px;
}

div.scroll-container img {
  padding: 10px;
}
/*end of gallary*/
	</style>

</head>

<body>

	<!-- Start Header -->
	<header>
		<div class="container">
			<div class="logo">
				<a href=""> YOGA <span>FITNESS TEMPLE</span>CLUB</a>
			</div>
			<a href="javascript:void(0)" class="ham-burger">
				<span></span>
				<span></span>
			</a>
			<div class="nav">
				<ul>
					<li><a href="#home">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#service">Services</a></li>
					<li><a href="gallary.php">Pictures</a></li>
					<li><a href="#classes">Classes</a></li>
					<li><a href="#schedule">Schedule</a></li>
					<li><a href="#contact">Contact</a></li>
					<li><a href="contact us.php">Register Now</a></li>
				</ul>
			</div>
		</div>
	</header>
	<!-- End Header  -->

	<!-- Start Home -->
	<section class="home wow flash" id="home">
		<div class="container">
			<h1 class="wow slideInLeft" data-wow-delay="1s">GOING TO THE <span>FITNESS IS GREAT</span> FOR YOUR BODY BUT</h1>
			<h1 class="wow slideInRight" data-wow-delay="1s"> IT'S ALSO GREAT FOR <span>YOUR MIND</span></h1>
		</div>
		<!-- go down -->
		<a href="#about" class="go-down">
			<i class="fa fa-angle-down" aria-hidden="true"></i>
		</a>
		<!-- go down -->

	</section>
	<!-- End Home -->


	<!-- Start About -->
	<section class="about" id="about">
		<div class="container">
			<div class="content">
				<div class="box wow bounceInUp">
					<div class="inner">
						<div class="img">
							<img src="images/download (1).jpeg" alt="about" />
						</div>
						<div class="text">
							<h4>PADMASAN</h4>
								<p>
									<ul class="ab">
										<li>An hour session with a trainer </li>
										<li>Improve mental health</li>
										<li>Chat about your health & fitness goals and past workout history </li>
										<li> A brief warm-up </li>
										<li>Boosts respiration</li>
										<li>A light workout</li>
										<li>A fitness plan for your first 30 days</li>
									</ul>
								<a href="contact us.php">Register Now</a>

								</p>
						</div>
					</div>
				</div>
				<div class="box wow bounceInUp" data-wow-delay="0.2s">
					<div class="inner">
						<div class="img">
							<img src="images/download (2).jpeg" alt="about" />
						</div>
						<div class="text">
							<h4>DANURASAN</h4>
							<p>
								<ul class="ab">
									<li>Best in city trainers.</li>
									<li>New and advanced equipments</li>
									<li>Strength Training</li>
									<li>Improve the strength in your ankles</li>
									<li>Trainers with excellent people skills to enable you to work with a range of individuals with different backgrounds and motivations.</li>
									<li>Helps open of your chest region and facilitates better breathing</li>
								</ul>
								<a href="contact us.php">Register Now</a>

							</p>
						</div>
					</div>
				</div>
				<div class="box wow bounceInUp" data-wow-delay="0.4s">
					<div class="inner">
						<div class="img">
							<img src="images/images (2).jpeg" alt="about" />
						</div>
						<div class="text">
							<h4>VRIKSHASANA</h4>
							<p>
								<ul class="ab">
									
									<li>Growth of height</li>
									<li>Get in shape</li>
									<li>Improve health</li>
									<li>Tones leg muscles</li>
									<li>Adjust your calories</li>
									<li>Be consistent</li>
									<li>Be patient</li>
								
								</ul>
								<a href="contact us.php">Register Now</a>

							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End About -->


	<!-- Start Service -->
	<section class="service" id="service">
		<div class="container">
			<div class="content">
				<div class="text box wow slideInLeft">
					<h2>Services</h2>
					<p>
						Join the Fitnees Temple Club Family and enjoy exclusive and state of the physical training amenities along with exclusive membership privileges at the best yoga in PUNE. Train with our personal trainers and build your dream physique in less than a few months with a dedicated support staff and top notch fitness equipments. No other club in Pune offers you in-house Asans, so come join us at Fitness Temple Club for the aforementioned facilities and much more.
					</p>
					<p>
						At Fitness Temple yoga club, our vision is to help everyday people like you to step out of their comfort zone and push their limits towards a stronger and healthier lifestyle. Workout with equipments & dedication and build your dream physique at the best club in pune, Fitness Temple Yoga Club.
					</p>
				
				</div>
				<div class="accordian box wow slideInRight">
					<div class="accordian-container active">
						<div class="head">
							<h4>Yoga Equipment</h4>
							<span class="fa fa-angle-down"></span>
						</div>
						<div class="body">
							<p> All the yoga Equipment are all time available at our club, which includes many advanced equipments such as -</p>
							<p>
								Yoga Mat<br>
								Yoga mat bag<br>
								Comfortable exercise clothes<br>
								Water bottel<br>
								Yoga block<br>
								Yoga Strap<br>
							</p>
						</div>
					</div>
					<div class="accordian-container">
						<div class="head">
							<h4>Strength Training </h4>
							<span class="fa fa-angle-up"></span>
						</div>
						<div class="body">
							<p>Build your strength and get those extra few pounds in before the swimsuit season. Come train under expert personal trainers only at Yoga Fitnees Temple Club.</p>
							<p>
								Shape your body and burn fat with strength training. With the right equipment such as machines and advice from our experts,
								 you can improve your overall health while increasing muscle and bone strength.
							</p>
						</div>
					</div>
					<div class="accordian-container">
						<div class="head">
							<h4>Group Fitness Class</h4>
							<span class="fa fa-angle-up"></span>
						</div>
						<div class="body">
							<p>Coach-inspired group workout designed to produce results from the inside out. The hardest part of our workouts is showing up - we make it simple for you to push yourself,
								 be your personal best and give you more. MORE results.
								 MORE confidence. Because you should live to exercise. You should exercise to live.</p>
						</div>
					</div>
					<div class="accordian-container">
						<div class="head">
							<h4>Other Services</h4>
							<span class="fa fa-angle-up"></span>
						</div>
						<div class="body">
							<p>
								 Laughing Club<br>
								 Mental Growth Increase<br>
								 Power yoga<br>
								 Hatha yoga <br>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Service -->

	<!-- Start Classes -->
	<section class="classes" id="classes">
		<div class="container">
			<div class="content">
				<div class="box img wow slideInLeft">
					<img src="images/full-length-portrait-young-man-practicing-yoga-isolated-white-background-young-man-practicing-yoga-170022894.webp" alt="classes" />
				</div>
				<div class="box text wow slideInRight">
					<h2>Packages</h2>
					<p>
						<ul class="bc">
							<li>Our Club Provides Online Advanced Personal Training</li>
							<li>Our Club Provides offline line Advanced Personal Training</li>
							<li> Advanced Personal Training + Skill India Government Certification</li>
						</ul>
					</p>
					<div class="class-items">
						<div class="item wow bounceInUp">
							<div class="item-img">
								<img src="images/Flexibility.jpg" alt="classes" />
								<div class="price">
									Single
								</div>
							</div>
							<div class="item-text">
								<h4>PRICING</h4>
								<p>3 MONTHS FOR 3000<br>
                                   6 MONTHS FOR 5000<br>
								   1 YEAR FOR 8000<br>
							</p>
								<a href="contact us.php">Register Now</a>
							</div>
						</div>
						<div class="item wow bounceInUp">
							<div class="item-text">
								<h4>PRICING</h4>
								<p>
								3 MONTHS FOR 5000<br>
								6 MONTHS FOR 9000<br>
								1 YEAR FOR 14000<br>


								</p>
								<a href="contact us.php">Register Now</a>
							</div>
							<div class="item-img">
								<img src="images/bridge-pose.jpg" alt="classes" />
								<div class="price">
									Couple
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Classes -->

	<!-- Start Schedule -->
	<section class="schedule" id="schedule">
		<div class="container">
			<div class="content">
				<div class="box text wow slideInLeft">
					<h2>Classes Schedule</h2>
					<img src="images/young-fit-woman-doing-ardha-dhanhrasana-yoga-pose-against-white-brick-background-fit-woman-doing-ardha-dhanhrasana-yoga-pose-114480297.webp" alt="schedule" />
				</div>
				<div class="box timing wow slideInRight">
					<table class="table">
						<tbody>
							<tr>
								<td class="day">Monday</td>
								<td><strong>6:00 AM</strong></td>
								<td>Surya namaskar/hatha yoga<br /> 6:00 AM to 8:00 PM</td>
								<td>Room No:01</td>
							</tr>
							<tr>
								<td class="day">Tuesday</td>
								<td><strong>6:00 AM</strong></td>
								<td>Surya namaskar/padmasan<br /> 6:00 AM to 8:00 PM</td>
								<td>Room No:02</td>
							</tr>
							<tr>
								<td class="day">Wednesday</td>
								<td><strong>6:00 AM</strong></td>
								<td>Surya namaskar/hand balancing<br /> 6:00 AM to 8:00 PM</td>
								<td>Room No:03</td>
							</tr>
							<tr>
								<td class="day">Thursday</td>
								<td><strong>6:00 AM</strong></td>
								<td>Surya namaskar/twisting<br /> 6:00 AM to 8:00 PM</td>
								<td>Room No:04</td>
							</tr>
							<tr>
								<td class="day">Friday</td>
								<td><strong>6:00 AM</strong></td>
								<td>Surya namaskar/back banding<br /> 6:00 AM to 8:00 PM</td>
								<td>Room No:05</td>
							</tr>
							<tr>
								<td class="day">Saturday</td>
								<td><strong>6:00 AM</strong></td>
								<td>Surya namaskar/front banding<br /> 6:00 AM to 8:00 PM</td>
								<td>Room No:06</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!-- End Schedule -->

	<!-- Start Today -->
	<section class="start-today">
		<div class="container">
			<div class="content">
				<div class="box text wow slideInLeft">
					<h2>Start Your Yoga Training Today</h2>
					<p>Yoga fitnes temple feature progressive programs with world class fitness equipment, trainers and nutrition counselors to help you your fitness further. We have the widest range of group fitness classes such Yoga & much more.
					</p>
					<a href="">Register Now</a>
					
				</div>
				<div class="box img wow slideInRight">
					<img src="images/images.jpeg" alt="start today" />
				</div>

			</div>
		</div>
	</section>
	<!-- End Start Today -->
<!--gallary section-->


<div class="scroll-container">
  <img src="images/Untitled design (28).jpg" alt="Cinque Terre" width="600" height="400">
  <img src="images/R.jpeg" alt="Forest" width="600" height="400">
  <img src="images/OIP.jpeg" alt="Northern Lights" width="600" height="400">
  <img src="images/Yoga-Studio-Zoom-Background.webp" alt="Mountains" width="600" height="400">
  <img src="images/img.webp" alt="Mountains" width="600" height="400">
</div>

<!--end of  galary-->
	<!-- Start Price -->
	
	<!-- End Price -->
	<section class="contact" id="contact">
		<div class="container">
			<div class="content">
				<div class="box form wow slideInLeft">
					<form action="" method="post">
						<input type="text" placeholder="Enter Name" name="username">
						<input type="email" placeholder="Enter Email" name="email">
						<input type="number" placeholder="Enter Mobile" name="number">
						<textarea placeholder="Enter Message" name="message"></textarea>
						<a href="index.php"><button type="submit">Send Message</button></a>
					</form>
				</div>
				<div class="box text wow slideInRight">
					<h2>Contact us for inqury</h2>
					<p class="title-p">We are here to train you , to make you fit & fine and to give you a push for start doing workout. <br>
					For any querry, we are here, go through the details below to contact us.</p>
					<div class="info">
						<ul>
							<li><span class="fa fa-map-marker"></span>1st floor D wing Lakshmi Plaza Office No. 3, Marutirao Gaikwad Nagar, Aundh, Pune, Maharastra 411007</li>
							<li><span class="fa fa-phone"></span> +91 7888207893/9881755751</li>
							<li><span class="fa fa-envelope"></span> yogafitnesstemple@gmail.com</li>
						</ul>
					</div>
					<div class="social">
						<a href="https://www.facebook.com/checkpoint/flow?checkpoint_data=%7B%22u%22%3A100089887035188%2C%22t%22%3A1696483342%2C%22step%22%3A0%2C%22n%22%3A%22StFaOUiH%2Bno%3D%22%2C%22inst%22%3A262299580109608%2C%22f%22%3A1456805897898609%2C%22st%22%3A%22p%22%2C%22aid%22%3Anull%2C%22ca%22%3Anull%2C%22la%22%3A%22%22%2C%22ta%22%3Anull%2C%22tfvaid%22%3Anull%2C%22tfvasec%22%3Anull%2C%22sat%22%3Anull%2C%22idg%22%3Afalse%2C%22cidue%22%3A%22%22%2C%22tfuln%22%3Anull%2C%22tfvri%22%3Anull%2C%22ed%22%3A%7B%22challenge_chooser_class%22%3Anull%7D%2C%22s%22%3A%22AWVcxYSY67orKCSJxFk%22%2C%22cs%22%3A[]%7D"><span class="fa fa-facebook"></span></a>
						<a href="whatsapp.php"><span class="fa fa-whatsapp"></span></a>
						<a href="https://www.instagram.com/thefitnesstemple_pune/"><span class="fa fa-instagram"></span></a>
						<a href="https://www.youtube.com/@yogawithadriene"><span class="fa fa-youtube-play"></span></a>
					</div>

	<!-- jquery -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
		$(document).ready(function () {

			$(".ham-burger, .nav ul li a").click(function () {

				$(".nav").toggleClass("open")

				$(".ham-burger").toggleClass("active");
			})
			$(".accordian-container").click(function () {
				$(".accordian-container").children(".body").slideUp();
				$(".accordian-container").removeClass("active")
				$(".accordian-container").children(".head").children("span").removeClass("fa-angle-down").addClass("fa-angle-up")
				$(this).children(".body").slideDown();
				$(this).addClass("active")
				$(this).children(".head").children("span").removeClass("fa-angle-up").addClass("fa-angle-down")
			})

			$(".nav ul li a, .go-down").click(function (event) {
				if (this.hash !== "") {

					event.preventDefault();

					var hash = this.hash;

					$('html,body').animate({
						scrollTop: $(hash).offset().top
					}, 800, function () {
						window.location.hash = hash;
					});

					// add active class in navigation
					$(".nav ul li a").removeClass("active")
					$(this).addClass("active")
				}
			})
		})

	</script>
	<script src="js/wow.min.js"></script>
	<script>
		wow = new WOW(
			{
				animateClass: 'animated',
				offset: 0,
			}
		);
		wow.init();
	</script>
	<div class="map" >
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.3547714795354!2d73.8014570751925!3d18.558037682542864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf44ab15f17f%3A0x4d2474376cc6889f!2sThe%20Fitness%20Temple%20-%20Best%20Gym%20in%20Aundh%20Baner%20-%20CrossFit%2C%20Functional%20Studio%2C%20Parkour%2C%20Yoga%20Studio!5e0!3m2!1sen!2sin!4v1696571119892!5m2!1sen!2sin" width="1450" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
</body>

</html>