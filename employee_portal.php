<?php include "header1.php" ?>

<ul>

	<!-- NAVIGATION OPTIONS -->
	<li><a class="homeblack" style="background-color: green;" href="employee_portal.php">HOME</a>
	<li><a class="homeblack" href="employee_add_tab1.php">ADD DETAILS</a></li>
	<li><a class="homeblack" href="logout.php">LOGOUT</a></li>
	
	
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

	<img src="images/empimg.png" width="300" height="300" style="margin:10px; overflow:hidden;"
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

			<label>Employee Id</label>
			<input type='text' name="ee_id" value="employee Id" size="15" style="font-size: 18px;">

			&nbsp

			<label>Joining Date</label>
			<input type="date" name="ee_joining" value="joining php" size="10" style="font-size: 18px;">

			&nbsp

			<label> Status</label>
			<input type="text" name="ee_status" value="status php" style="font-size: 18px;" size="15" />
			<label>

				&nbsp

				<label>Designation </label>
				<input type="text" name="ee_designation" value="designation php" style="font-size: 18px;" size="8">
				<label>

					<br>
					<br>

					<label> Department </label>
					<input type="text" name="ee_department" value="department php" style="font-size: 20px;" size="15" />

					&nbsp

					<label> Reporting Manager </label>
					<input type="text" name="ee_reporting" style="font-size: 20px;" value="reporting_manager php" size="25" />

					<br>
					<br>

					<label>Company Name</label>
					<input type='textarea' style="font-size: 20px;" name="ee_company_name" value="company_name php" size='80'>


					<br>
					<br>

					<label>Division</label>
					<input type='textarea' style="font-size: 20px;" name="ee_division" value="division php" size='80'>

					<br> <br>

					<label>Shift</label>
				<input type='textarea' style="font-size: 20px;" name="ee_shift" value="shift php" size='40'>

				&nbsp &nbsp
				<label>Employee Type</label>
				<input type='textarea' style="font-size: 20px;" name="ee_emptype" value="employee_type php" size='40'>
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

			<label>Employee First Name</label>
			<input type='text' name="ee_fname" value=" first_name php" size="15" style="font-size: 18px;">

			&nbsp

			<label>Employee Last Name</label>
			<input type="text" name="ee_lname" value="last_name php" size="10" style="font-size: 18px;">

			&nbsp

			   <label> Gender </label>
				<input type="radio" id="male" name="gender" value="male">
				<label for="male">Male</label>
				<input type="radio" id="female" name="gender" value="female">
				<label for="female">Female</label>


			<br>
			<br>

			<label> Email Id </label>
			<input type="email" name="ee_email" value="email php" style="font-size: 18px;" size="60" />

			&nbsp

			<label> PAN </label>
			<input type="text" name="ee_pan" value="ee_pan php" style="font-size: 18px;" size="10" />
			<label>


				<label>Aadhar Number</label>
				<input type='text' name="ee_aadhar" value="ee_aadhar php" size="15" style="font-size: 18px;">
    

				<br>
				<br>
				&nbsp

				<label>Contact Number</label>
				<input type="tel" name="ee_contact" value="ee_contact php" size="10" style="font-size: 18px;">

				&nbsp

				&nbsp
            
				<label>Emergency Contact Number</label>
				<input type="tel" name="ee_emercontact" value="ee_emergency_contact php" size="10" style="font-size: 18px;">



				<label>State</label>
				<input type='textarea' style="font-size: 20px;" name="ee_state" value="state php" size='40'>

				&nbsp &nbsp
                <br>
				<br>
				<label>City</label>
				<input type='textarea' style="font-size: 20px;" name="ee_city" value="city php" size='40'>
			    <br>
				<br>
				&nbsp &nbsp
				
				<label>Permanent Address</label>
				<input type='textarea' style="font-size: 20px;" name="ee_permanent" value="permanent_address php" size='40'>

                &nbsp &nbsp
				<br>
				<br>
				<label>Current Address</label>
				<input type='textarea' style="font-size: 20px;" name="ee_current" value="current_address php" size='40'>
                <br>
				<br>
				&nbsp &nbsp
				<label>DOB</label>
				<input type='date' style="font-size: 20px;" name="ee_dob" value="dob php" size='40'>


				<label>Blood Type</label>
				<input type='text' style="font-size: 20px;" name="ee_bloodtype" value="blood type php" size='40'>

				&nbsp &nbsp

				<label>Hobbies</label>
				<input type='textarea' style="font-size: 20px;" name="ee_hobbies" value="hobbies php" size='40'>

				&nbsp &nbsp
                 <br>
				 <br>
				<label>Skills</label>
				<input type='textarea' style="font-size: 20px;" name="ee_skills" value="skills php" size='40'>

				&nbsp &nbsp
				&nbsp &nbsp
		</form>
	</div>

</div>


</body>

</html>
