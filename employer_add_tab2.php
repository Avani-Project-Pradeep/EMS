<!DOCTYPE html>

<html>

<head>

    <!-- STYLESHEETS -->

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

                <!-- COMPANY LOGO -->
                <img src="images/logo.jpg" height="50" alt="Company logo">
            </a>

            <ul id="navli">


                <h1 style="padding-right:600px">EMPLOYER PORTAL</h1>

                <li><a class="homeblack" href="employer_portal.php">HOME</a></li>
                <li><a class="homeblack" href="manageemployee.php">MANAGE EMPLOYEE</a></li>
                <li><a class="homeblack" href="logout.php">LOGOUT</a></li>


            </ul>
        </nav>



        <ul id="navli">


            <h2 style="padding-top: 50px;">EMPLOYEE PORTAL</h2>






        </ul>

    </header>


 
    <!-- ADD EMPLOYEE -->


    <div class="centered">

        <h1 style=margin-top:30px;> Add Employee </h1>
        <br>
        <h1> Personal Details </h1>

        <img src="images/emp_image.jpg" style="margin:50px" alt="Employer Image">

        <!-- PERSONAL DETAILS OF ADD EMPLOYEE -->



        <form action="" enctype="multipart/form-data" method='post'>

         
        <!-- EMPLOYEE IMAGE -->
            <button name='edit_img' style="font-size:20px ;position:static">Upload Image  <input type='file' name='remove_img'>
            </button>


        </form>


    </div>










    <!-- EMOLOYEE REGISTRATION  -->


    <div class="right-section">

        <h2 style='float:top'> <a href="#"> Register Employees</a> </h2>
        <div class="tab">

            <button class="tablinks"><a href='employer_add_tab1.php'>Tab1 </a></button>

            &nbsp &nbsp &nbsp


            <button style='	background-color: lightgreen;
'><a href='Employer_add_tab2.php'>Tab2 </a></button>

        </div>



        <!-- ADD EMPLOYEE PERSONAL DETAILS -->

        <form class='peremp' action='#' method='post'>
            <br>


            <input type="text" name="firstname" placeholder="First name" size="20" class='place'> &nbsp

            <input type="text" name="lastname" placeholder="Last name" size="20" class='place'>

            <br>
            <br>

            <label class='place'>
                Gender :
            </label><br>
            <input type="radio" name="male"><b> Male</b>
            <input type="radio" name="female"><b> Female</b>

            &nbsp
            &nbsp
            &nbsp

            <label for="dob" class='place'>DOB:</label>
            <input type="date" id="dob" name="dob">

            <br>

            <br>
            <br>
            <input type="email" id="email" placeholder="Enter Email id" name="email" size=45 class='place'>
            <br>

            <br>
            <br>
            <input type="text" name="state" placeholder="State" size="20" class='place'> &nbsp;

            <input type="text" name="city" placeholder="City" size="20" class='place'>


            <br>
            <br>


            <input type="text" name="state" placeholder="Permanent Address" size="45" class='place'>

            <br>
            <br>


            <input type="text" name="city" placeholder="Educational Details" size="45" class='place'>


            <br>
            <br>
            <br>

            <button type="submit" name='update' class='addbtn'>Update</button>

            <button type="submit" name='save' class='addbtn'>Save</button>

            <button type="submit" name='back' class='addbtn'>Back</button>

        </form>





    </div>
    </section>







    </div>
    </div>






</body>

</html>