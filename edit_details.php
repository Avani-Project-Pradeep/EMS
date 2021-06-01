<!-- CREATING EMPLOYER PORTAL -->

<html>

<head>
    <title>Employer portal</title>

    <link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="emp_css/employer_portalcss.css">

</head>

<body>
    <header>


        <!-- NAVIGATION BAR -->

        <nav>

            <a href="#" class="navbar-brand">
                <img src="images/logo.jpg" height="50" alt="Company logo">
            </a>

            <ul id="navli">

                <h1 style="padding-right:600px">EMPLOYER PORTAL</h1>

                <li><a class="homered" href="employer_portal.php">HOME</a></li>
                <li><a class="homeblack" href="employer_add_tab1.php">ADD EMPLOYEE</a></li>
                <li><a class="homeblack" href="manageemployee.php">MANAGE EMPLOYEE</a></li>
                <li><a class="homeblack" href="logout.php">LOGOUT</a></li>


            </ul>
        </nav>
    </header>




    <!-- EMPLOYEE IMAGE -->


    <br>
    <br>
    <br>

    <!-- EDIT DETAILS  LINK -->



    <div class="centered">



        <img src="images/emp_image.jpg" style="margin:50px" alt="Employer Image">



        <form action="" enctype="multipart/form-data" method='post'>



            <button name='remove_img' style="font-size:20px">Remove Image </button>



            <button name='upload_img' style="font-size:20px">Upload Image

                <input type='file' name='emp_image'>


            </button>


            <br>
            <br>



        </form>


    </div>



    <!-- PROFESSIONAL DETAILS EMPLOYER -->
    <div class="prform">
        <h1>Professional Details</h1>
        <br>
        <form action>

            <label>Designation</label>
            <input type='text' name="er_designation" size="15" style="font-size: 18px;">

            &nbsp

            <label>Location:</label>
            <input type="text" name="er_location" size="10" style="font-size: 18px;">

            &nbsp

            <label> Company Name: </label>
            <input type="text" name="er_comp_name" style="font-size: 18px;" size="15" />
            <label>

                &nbsp

                <label> Division: </label>
                <input type="text" name="er_division" style="font-size: 18px;" size="10" />
                <label>

                    <br>
                    <br>

                    <label> Date of Joining: </label>
                    <input type="date" name="er_doj" style="font-size: 20px;" size="15" />

                    &nbsp

                    <label> Work Experience: </label>
                    <input type="text" name="er_work_exp" style="font-size: 20px;" size="25" />
                    <i class="fa fa-briefcase" style="font-size:24px"></i>

                    <br>
                    <br>

                    <label>Skills</label>
                    <input type='textarea' style="font-size: 20px;" name="er_skills" size='80'>


                    <br>
                    <br>

                    <label>Bank Account Details</label>
                    <input type='textarea' style="font-size: 20px;" name="er_bank_account" size='80'>

                    <br>
                    <br>
                    <br>

        </form>
    </div>

    <!-- PERSONAL DETAILS OF EMPLOYER -->

    <div class="peform">
        <h1>Personal Details</h1>
        <br>
        <form action>

            <label>Name</label>
            <input type='text' name="er_fname" size="15" style="font-size: 18px;">

            &nbsp

            <label>Last Name</label>
            <input type="text" name="er_lname" size="10" style="font-size: 18px;">

            &nbsp



            <label> DOB </label>
            <input type="date" name="er_dob" style="font-size: 20px;" size="15" />


            <br>
            <br>
            <br>

            <label> Email </label>
            <input type="email" name="er_comp_name" style="font-size: 18px;" size="60" />

            &nbsp

            <label> Phone Number </label>
            <input type="tel" name="phone" style="font-size: 18px;" size="10" />
            <label>

                <br>
                <br>


                <label>City</label>
                <input type='text' name="er_city" size="15" style="font-size: 18px;">

                &nbsp

                <label>State</label>
                <input type="text" name="er_state" size="10" style="font-size: 18px;">

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
                <input type='textarea' style="font-size: 20px;" name="er_skills" size='40'>

                &nbsp &nbsp
                <label>Education</label>
                <input type='textarea' style="font-size: 20px;" name="er_education" size='40'>
               
                </div>
                <button type="submit" name='save' class='addbtn'>Save</button>

               
        </form>
   


</body>

</html>


<?php

//EDIT FORM PHP CODE TO WRITE

?>