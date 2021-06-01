<?php include "header.php" ?>

<ul>

	<!-- NAVIGATION OPTIONS -->

	<li><a class="homeblack" href="logout.php">LOGOUT</a></li>
	<li><a class="homeblack" href="manageemployee.php">MANAGE EMPLOYEE</a></li>
	<li><a class="homeblack" href="employer_add_tab1.php">ADD EMPLOYEE</a></li>
	<li><a class="homeblack" style="background-color: green;" href="employer_portal.php">HOME</a>
	</li>

</ul>
</nav>
</header>

<!-- HEADER FINISH -->
<br>
<br>
</div>



<div>
	<!-- EDIT DETAILS  LINK -->
	<i class="fa fa-edit" style="font-size:36px;color:black"></i>
		<span style="font-size:36px; float:left"><a href='edit_details.php'>Edit details</a></span>
</div>

	<!-- EMPLOYEE IMAGE -->

	<img src="images/emp_image.jpg" style="margin:10px; overflow:hidden;"
alt="Employer Image">



	<form action="" enctype="multipart/form-data" method='post'>



		<button name='remove_img' style="font-size:15px">Remove Image </button>



		<button name='upload_img' style="font-size:10px">Upload Image

			<input type='file' name='emp_image'>


		</button>


		<br>
		<br>


	
	</form>


</div>

</div>



	<!-- PROFESSIONAL DETAILS EMPLOYER -->

	<div class="prform">

	
		<h1>Professional Details</h1>
		<br>
		<form action>

			<label>Designation</label>
			<input type='text' name="er_designation" value="Designation php" size="15" style="font-size: 18px;">

			&nbsp

			<label>Location:</label>
			<input type="text" name="er_location" value="location php" size="10" style="font-size: 18px;">

			&nbsp

			<label> Company Name: </label>
			<input type="text" name="er_comp_name" value="company php" style="font-size: 18px;" size="15" />
			<label>

				&nbsp

				<label> Division: </label>
				<input type="text" name="er_division" value="division php" style="font-size: 18px;" size="8">
				<label>

					<br>
					<br>

					<label> Date of Joining: </label>
					<input type="date" name="er_doj" value="doj php" style="font-size: 20px;" size="15" />

					&nbsp

					<label> Work Experience: </label>
					<input type="text" name="er_work_exp" style="font-size: 20px;" value="year php" size="25" />
					<i class="fa fa-briefcase" style="font-size:24px"></i>

					<br>
					<br>

					<label>Skills</label>
					<input type='textarea' style="font-size: 20px;" name="er_skills" value="skills" size='80'>


					<br>
					<br>

					<label>Bank Account Details</label>
					<input type='textarea' style="font-size: 20px;" name="er_bank_account" value="bank" size='80'>

					<br> <br>
					</div>

	</div>

	</form>

</div>


<br>
<br>		
		


<!-- PERSONAL DETAILS OF EMPLOYER -->

	<div class="peform">
		<h1>Personal Details</h1>
		<br>
		<form action>

			<label>Name</label>
			<input type='text' name="er_fname" value="NAME php" size="15" style="font-size: 18px;">

			&nbsp

			<label>Last Name</label>
			<input type="text" name="er_lname" value="last name php" size="10" style="font-size: 18px;">

			&nbsp



			<label> DOB </label>
			<input type="date" name="er_dob" value="dob php" style="font-size: 20px;" size="15" />


			<br>
			<br>
			<br>

			<label> Email </label>
			<input type="email" name="er_comp_name" value="email php" style="font-size: 18px;" size="60" />

			&nbsp

			<label> Phone Number </label>
			<input type="tel" name="phone" value="er_phone" style="font-size: 18px;" size="10" />
			<label>

				<br>
				<br>


				<label>City</label>
				<input type='text' name="er_city" value="er_city php" size="15" style="font-size: 18px;">

				&nbsp

				<label>State</label>
				<input type="text" name="er_state" value="er_state php" size="10" style="font-size: 18px;">

				&nbsp

				&nbsp


				<label> Gender </label>
				<input type="radio" id="male" name="gender" value="male">
				<label for="male">Male</label>
				<input type="radio" id="female" name="gender" value="female">
				<label for="female">Female</label>


				<br>
				<br>


				<label>Address</label>
				<input type='textarea' style="font-size: 20px;" name="er_skills" value="address" size='40'>

				&nbsp &nbsp
				<label>Education</label>
				<input type='textarea' style="font-size: 20px;" name="er_education" value="education" size='40'>
		</form>
	</div>

</div>


</body>

</html>