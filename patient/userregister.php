
<!DOCTYPE html>
<html>

	<head>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="css/index.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<title>Online Doctor's Appointment site</title>
		

	</head>

	<body> 

		
		<div id="wrapper">	
			<section id="showcase" >
				<div id="header">
					<h1>Registration</h1>
				</div>
				<div class="container">
					<div class="mySlides fade">
				   
						<img src="css/bh-advisor-dribbble.gif" style="width:1194.5px;height:325px;">
					
					</div>

					<div class="mySlides fade">
				  
						
						<img src="css/c_hipertensao.gif" style="width:1194.5px;height:325px;">
				   
					</div>

					<div class="mySlides fade">
				   
						<img src="css/docfistbump_dribbble.gif" style="width:1194.5px;height:325px;">
					
					</div>



				  <!-- Next and previous buttons -->
				  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				  <a class="next" onclick="plusSlides(1)">&#10095;</a></div>



				<!-------------Javascript---------->
						<script>
							var slideIndex = 1;
							showSlides(slideIndex);

							function plusSlides(n) {
							  showSlides(slideIndex += n);
							}

							function currentSlide(n) {
							  showSlides(slideIndex = n);
							}

							function showSlides(n) {
							  var i;
							  var slides = document.getElementsByClassName("mySlides");
							  var dots = document.getElementsByClassName("dot");
							  if (n > slides.length) {slideIndex = 1}    
							  if (n < 1) {slideIndex = slides.length}
							  for (i = 0; i < slides.length; i++) {
								  slides[i].style.display = "none";  
							  }
							  for (i = 0; i < dots.length; i++) {
								  dots[i].className = dots[i].className.replace(" active", "");
							  }
							  slides[slideIndex-1].style.display = "block";  
							  dots[slideIndex-1].className += " active";
							}
						</script>
   
			</section>
		</div>  
									<!---------------Menu----------------->
									
		<div id="menubar">
			<div id="menu">
				<ul>
					<li><a href="index.php"><i class="fa fa-home" style="font-size:18px;color:blue"></i>  Home</a></li>
										<li><a href="#"><i class="fa fa-plus" style="font-size:18px;color:blue"></i>  Hospital  <i class="fa fa-sort-down" style="font-size:18px;color:blue"></i></a>
						<ul>
							<li><a href="#"> Shaheed Ziaur Rahman Medical College Hospital (SZMCH)</a>
								<ul>
									<li><a href="szmchent.php">ENT Specialist</a></li>
									<li><a href="szmcheye.php">Eye Specialist</a></li>
									<li><a href="szmchchild.php">Child Specialist</a></li>
									<li><a href="szmchheart.php">Heart Specialist</a></li>
								</ul>
							</li>
							
							
							
							<li><a href="#">IBN SINA Diagnostic & Consultation Center</a>
							<ul>
									<li><a href="ibnent.php">ENT Specialist</a></li>
									<li><a href="ibneye.php">Eye Specialist</a></li>
									<li><a href="ibnchild.php">Child Specialist</a></li>
									<li><a href="ibnheart.php">Heart Specialist</a></li>
								</ul>
							</li>
						
							<li><a href="#">Popular Diagnostic Centre</a>
							<ul>
									<li><a href="popuent.php">ENT Specialist</a></li>
									<li><a href="popueye.php">Eye Specialist</a></li>
									<li><a href="popuchild.php">Child Specialist</a></li>
									<li><a href="popuheart.php">Heart Specialist</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="#">Department <i class="fa fa-sort-down" style="font-size:18px;color:blue"></i></a>
						<ul>
							<li><a href="#">ENT Specialist</a>
								<ul>
									<li><a href="szmchent.php">Shaheed Ziaur Rahman Medical College Hospital (SZMCH)</a></li>
									<li><a href="ibnent.php">IBN SINA Diagnostic & Consultation Center</a></li>
									<li><a href="popuent.php">Popular Diagnostic Centre</a></li>
									
								</ul>
							</li>
							<li><a href="#">Eye Specialist</a>
							<ul>
									<li><a href="szmcheye.php">Shaheed Ziaur Rahman Medical College Hospital (SZMCH)</a></li>
									<li><a href="ibneye.php">IBN SINA Diagnostic & Consultation Center</a></li>
									<li><a href="popueye.php">Popular Diagnostic Centre</a></li>
								</ul>
							</li>
							<li><a href="#">Child Specialist</a>
							<ul>
									<li><a href="szmchchild.php">Shaheed Ziaur Rahman Medical College Hospital (SZMCH)</a></li>
									<li><a href="ibnchild.php">IBN SINA Diagnostic & Consultation Center</a></li>
									<li><a href="popuchild.php">Popular Diagnostic Centre</a></li>
								</ul>
							</li>
							<li><a href="#">Heart Specialist</a>
							<ul>
									<li><a href="szmchheart.php">Shaheed Ziaur Rahman Medical College Hospital (SZMCH)</a></li>
									<li><a href="ibnheart.php">IBN SINA Diagnostic & Consultation Center</a></li>
									<li><a href="popuheart.php">Popular Diagnostic Centre</a></li>
								</ul>
							</li>
							
							
						</ul>
					</li>
					<li><a href="userregister.php"><i class="fa fa-user" style="font-size:18px;color:blue"></i>  Sign Up </a>
						
					</li>
						<li><a href="contact.php"><i class="fa fa-envelope-square" style="font-size:18px;color:blue"></i>  Contact us</a></li>
						<li><a href="#"><i class="fa fa-info-circle" style="font-size:18px;color:blue"></i> Help</a></li>				 
				</ul>
			</div>	   
		</div>

			
			
							<!---------------------------Left Side--------------------->
			
			
			
		<div id="content">	
			<div id="left-panel">
				<aside id="news">
					<div class="dark">
						<h3>Find a Doctor</h3>
							<form method="post" action="search.php">
								
								<div class="input-group">
									<input type="text" name="search" >
								</div>
								
								<div class="input-group">
									<button type="submit" class="btn" name="searchbutton">Search</button>
								</div>
								
							</form>
									  		  
					</div>
				</aside>

					<div id="navbar">
						
						<br><br>
						<div class="date">
          <center><p><u><h1>Today</u></h1></p><br>
		  <h2>
            <?php
							
								echo "  " . date("d-m-Y") . "<br><br>";
								
								echo "  " . date("l");
							?>
          </h2>
		  </center>
				<div class="notice">
							<p>
							<marquee  behavior="scroll" direction="down" width="100%" height="400">Notice Board</marquee>
							</p>
						
						</div>	
						<img src="css/doctor-appointment.jpg" width="100%" height="290" ></img>

						
				</div>			
					</div>
			</div>
							<!-------------Right------------>
							
			<div id="right-panel">        
				<div id="login">         
					<div id="logmenu">
						<ul>
							<li><a href="userlogin.php"> Sign In</a></li>          
						</ul>
					</div>
				</div>
			
				<div id="subpanel">
					<p>Already have an account?<br> If your answer is 'NO'</p>
					<div id="logmenu2">
						<ul>
							<li><a href="userregister.php">Create an account</a></li>
						</ul>
					</div>
				</div>

				<div id="addbar">
        <img src="css/ambulance-scene-low_orig.gif" width="100%" height="250" ></img>
        <div class="ambulence"><center><h3><br>Call Ambulence Service</h3></center>
				<p><center><h3>............</h3></center></p>
              <p><strong>LABAID Diagnostic Bogura</strong><br>
              <strong>01766-662777</strong>
              <p><center><h4>............</h4></center></p>
			  <p><strong>Alamin Ambulence Service</strong><br>
              <strong>01720-448666</strong><br>
			  <p><center><h4>............</h4></center></p>
			  <p><center><a href="index.php">See All</a></center></p>
          </div>

        </div>
			</div>
							<!-------------------------Midle-------------->

    <div id="right-sec">

 
  
    <h1> <center>Sign Up<center></h1>
  




  <form action="usersubmit.php" method="post">

    

    <div class="row">
      <div class="col-25">
        <label for="name">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="name" required>
      </div>
    </div>

    

    

    <div class="row">
      <div class="col-25">
        <label for="blood_group">Blood Group</label>
      </div>
      <div class="col-75">
        <select id="blood_group" name="blood_group" required>
				<option value="select">Select</option>
                  <option value="A+">A+</option>
                    <option value="A-">A-</option>
                     <option value="B+">B+</option>
                      <option value="B-">B-</option>
                      <option value="O+">O+</option>
                       <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                         <option value="AB-">AB-</option>
        </select>
      </div>
    </div>

     <div class="row">
      <div class="col-25">
        <label for="gender">Gender</label>
      </div>
      <div class="col-75">
       <input type="radio" name="gender" value="male" required checked> Male
       <input type="radio" name="gender" value="female" required> Female
      </div>
    </div>

    

   

    <div class="row">
      <div class="col-25">
        <label for="age">Age</label>
      </div>
      <div class="col-75">
        <select id="age" name="age" required>
				<option value="select">Select</option>
                  <option value="15">15</option>
                    <option value="16">16</option>
                     <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                       <option value="20">20</option>
                        <option value="21">21</option>
                         <option value="22">22</option>
                         <option value="23">23</option>
                         <option value="24">24</option>
                         <option value="25">25</option>
                         <option value="26">26</option>
                         <option value="27">27</option>
                         <option value="28">28</option>
                         <option value="29">29</option>
                         <option value="30">30</option>
                         <option value="31">31</option>
                         <option value="32">32</option>
                         <option value="33">33</option>
                         <option value="34">34</option>
                         <option value="35">35</option>
                         <option value="36">36</option>
                         <option value="37">37</option>
                         <option value="38">38</option>
                         <option value="39">39</option>
                         <option value="40">40</option>
                         <option value="41">41</option>
                         <option value="42">42</option>
                         <option value="43">43</option>
                         <option value="44">44</option>
                         <option value="45">45</option>
                         <option value="46">46</option>
                         <option value="47">47</option>
                         <option value="48">48</option>
                         <option value="49">49</option>
                         <option value="50">50</option>
        </select>
      </div>
    </div>

    

    <div class="row">
      <div class="col-25">
        <label for="address">Address</label>
      </div>
      <div class="col-75">
        <input type="text" id="address" name="address" required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="contact_number">Contact Number</label>
      </div>
      <div class="col-75">
        <input type="text" id="contact_number" name="contact_number" required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="email">E-mail</label>
      </div>
      <div class="col-75">
        <input type="email" id="email" name="email" required >
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="password">Password</label>
      </div>
      <div class="col-75">
       <input type="password" class="text" value="" id="myInput" name="password" required>
      
      </div>
    </div>

	
	<div class="row">
      <div class="col-50">
       <input type="checkbox" name="accept" value="ggg" required>I accept terms and condition !
      </div>
    </div>
	<br>
	
    
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>

</div>
</div>
 

						<!-------------------Footer------------->

		<div id="footer">
			<div id="footerpart">
				<div id="footermenu">
					<h1><i class="fa fa-apoint" style="font-size:30px;color:#ff0000"></i> Online Doctor's Appointment</h1>
				</div>
				
				<div id="menubody">
					<h2 margin-top="10px">Online Doctor's Appointment is an website.It's moto to help patient to get appointment.</h2>
				</div>
			</div>
			<div id="leftpart">
				<div id="one">
					<h2>CONTACT US</h2>
					<div id="box1">
						<h3>  <i class="fa fa-envelope" style="font-size:18px;color:blue"></i>    mithunchandra40@gmail.com</h3>
						<h3>  <i class="fa fa-phone" style="font-size:20px;color:blue"></i>  (+880)1739 909 819</h3>
					</div>
				</div>
			</div>

			<div id="midpart">
				<div id="two">
					<h2>  SUPPORT LINKS</h2>
					<div id="box2">
						<h3><a href="index.php">Online Doctor's Appointment site</a></h3>
					</div>
				</div>
			</div>

			<div id="rightpart">
				<div id="three">
					<h2>KEEP CONNECTED</h2>
					<div id="box3">
						<h3><i class="fa fa-facebook-official" style="font-size:18px;color:blue"></i>  Like us on Facebook</h3>
						<h3><i class="fa fa-twitter" style="font-size:18px;color:blue"></i>  Follow us on Twitter</h3>
						<h3><i class="fa fa-instagram" style="font-size:18px;color:blue"></i>  Follow us on Instagram</h3>
					</div>
				</div>
			</div>

			<div id="subfooter">
				<h3><i class="fa fa-copyright" style="font-size:18px;color:blue"></i> copyright  2019-2020 : Online Doctor's Appointment System.  All Rights Reserved</h3>
			</div>
		</div>
		
	</body>
</html>