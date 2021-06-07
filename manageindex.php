<!-- DATABASE -->
<<<<<<< HEAD
<HTML>
<?php include "db_ee_connection.php"; ?>
<?php include "header.php" ;?>
<?php include "managenavigation.php"; ?>

<body style="background-color:honeydew;">

<form action='' method='post'>
<input type='text' name='search'  placeholder="Search" required> 
<br>
<br>
<input type='submit' name='search_id' value="Search By ID">
<input type='submit' name='search_name' value="Search By Name">

</form>

<?php include "search_employee.php"; ?>




=======
<?php include "db_connection.php"; ?>

<?php include "includes/header.php" ;?>
<!-- NAVIGATION -->
<?php include "managenavigation.php"; ?>

 
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2

<div class="container">
 

    <div class="row">
 
<<<<<<< HEAD
         
        <div class="col-md-6">
 
          <body>
            <?php


                $limit=2;
=======

         

         

   
   

        <div class="col-md-12">
 
          
            <?php


                $limit=4;
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2

                if(isset($_GET['page']))
                {

                $page=$_GET['page'];
                }
                else
                {
                    $page=1;
                }
                $offset=($page-1)*$limit;


<<<<<<< HEAD
                $query="SELECT * FROM employee_personal_details INNER JOIN  employee_professional_details ON 
                 employee_personal_details.ee_id = employee_professional_details.ee_id  LIMIT {$offset},{$limit}";
                


                $selectquery=mysqli_query($connection2,$query);

                while($row=mysqli_fetch_assoc($selectquery))
                {
                       $ee_id=$row['ee_id'];
                       $ee_fname=$row['ee_first_name'];
                       $ee_lname=$row['ee_last_name'];
                       $ee_image=$row['ee_image'];
                       $ee_doj=$row['ee_doj'];
                       $ee_designation=$row['ee_designation'];
                       $ee_status=$row['ee_status'];
                       $ee_phone=$row['ee_phone'];
                       $ee_email=$row['ee_email'];
                ?>









                <!-- E_NAME -->
                <h1><i>
 
                <a href="individualemployee.php?ee_id=<?php echo $ee_id;?>"><?php echo 
                " $ee_fname .  $ee_lname "?></a>
                   
                 </i></h1>   


   <span>                  <!-- EMPLOYEE IMAGE -->
<img src="images/
<?php 

if(empty($ee_image))
{
    echo "blank image.png";
}
else
{
    echo $ee_image;
}



 ?>" style="margin:10px; width:500px ; height:500px; overflow:hidden;border:solid blue" alt="Employer Image">



&nbsp &nbsp 

   </span>








                 <p class="lead">
                    <!--DESIGNATION-->
                   <span ><u><?php echo"Designation : $ee_designation "; ?></u></span>
                   &nbsp &nbsp


<!-- E_ID -->
<u><a style="color:black; font:italic;" href="individualemployee.php?ee_id=<?php echo $ee_id;?>"><?php echo 
"Employee ID :  $ee_id ";?></a></u>

        
           <br>
           <br>



                <!--  DATE OF JOINING  -->
                  
                <br> <br>
                   
                   <span class="glyphicon glyphicon-time"></span> Joined on <?php echo  $ee_doj ;?>
 
 
                   &nbsp &nbsp
 
 
                   <span><i style='font-size:15px' class='far'>&#xf35a;</i>
 Status: <?php echo $ee_status; ?>
 
 <br>
 <br>
 <span>
<i style='font-size:24px' class='fas'>&#xf108;</i>
 <a style="font-size: 24px;" href="individualemployee.php?ee_id=<?php echo $ee_id;?>">View</a>
=======

            // DYNAMIC EMPLOYEE DETAILS FROM OUR DATABASE
            $query = "SELECT * FROM employee  LIMIT {$offset},{$limit}";
            $select_all_employee_query = mysqli_query($connection, $query);
            


               
 
            //LOOP STARTED HERE
            while ($row = mysqli_fetch_assoc($select_all_employee_query)) {
  
              $e_id=$row['e_id'];
              $e_name=$row['e_name'];
              $e_image=$row['e_img'];
              $e_doj=$row['e_doj'];
              $e_desig=$row['e_desig'];
              $e_status=$row['e_status'];
                {

             

            ?>

<!-- EMPLOYEES -->
                <h1><i>

                    <!-- E_NAME -->
                       
                    <a  href="individualemployee.php?e_id=<?php echo $e_id;?>"><?php echo 
                    $e_name ?></a>

                   
                </i></h1>
                <p class="lead">
                    <!--DESIGNATION-->
                   <span style="color:green" ><u><?php echo"Designation : $e_desig "; ?></u></span>


                   &nbsp &nbsp


                        <!-- E_ID -->
         <u><a style="color:green; font:italic;" href="individualemployee.php?e_id=<?php echo $e_id;?>"><?php echo 
                  "Employee ID :  $e_id ";?></a></u>

                                
                                   <br>
                                   <br>
   
                <!-- EMPLOYEE IMAGE -->
                <img src="images/<?php echo $e_image; ?>" style="margin:10px; width:300px ; height:300px; overflow:hidden;border:solid green" alt="Employer Image">

                  <!--  DATE OF JOINING  -->
                  
                  <br> <br>
                   
                  <span class="glyphicon glyphicon-time"></span> Joined on <?php echo  $e_doj ;?>


                  &nbsp &nbsp


                  <span><i style='font-size:15px' class='far'>&#xf35a;</i>
Status: <?php echo $e_status; ?>

<br>
<br>


<span>
<i style='font-size:24px' class='fas'>&#xf108;</i>
 <a style="font-size: 24px;" href="individualemployee.php?e_id=<?php echo $e_id;?>">View</a>
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2

</span>

&nbsp 
&nbsp

<span>

<i style='font-size:24px' class='fas'>&#xf044;</i>
<<<<<<< HEAD
<a href='http://localhost/ems/editindividualemployee.php?edit=1&ee_id=<?php echo "$ee_id"?>'>Edit</a></span>
=======
<a href="edit_employee.php?e_id=<?php echo $e_id;?>">Edit</a></span>
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2



</span>

&nbsp 
&nbsp
&nbsp

<span>
<span class="glyphicon">&#xe174;</span>

<<<<<<< HEAD
<a href="delete_employee.php?delete=1&ee_id=<?php echo $ee_id;?>">Delete</a></span>
=======
<a href="delete_employee.php?e_id=<?php echo $e_id;?>">Delete</a></span>
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2


</span>

<br>
<br>
<br>


<i style='font-size:24px' class='fas'>&#xf305;</i>

<<<<<<< HEAD
<a href="statusemployee.php?status=Active&ee_id=<?php echo $ee_id;?>">Change Status to Active</a></span>
=======
<a href="statusemployee?e_id=e_id<?php echo $e_id;?>">Change Status to Active</a></span>
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2
<br>


<i style='font-size:24px' class='fas'>&#xf305;</i>

<<<<<<< HEAD
<a href="statusemployee.php?status=Inactive&ee_id=<?php echo $ee_id;?>">Change Status to Inactive</a></span>


<br>
<br>

   


<h1> Contact Details </h1>
<h2 style="color: blue;">Phone no : </h2> 
<p style="color:black ; font-size:x-large; "?>
<?php  echo $ee_phone ?></p>
<h2 style="color: blue;">Email : </h2> 
<p style="color:black ; font-size:x-large; "?>

<?php  echo $ee_email ?></p>
=======
<a href="statusemployee?e_id=<?php echo $e_id;?>">Change Status to Inactive</a></span>
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2















                <hr>
        

              <br>
              <br>

             



<<<<<<< HEAD
            <?php }?>
=======
            <?php }}?>
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2
            <!-- LOOP OVER  -->

 
            </div>





        
    
  
       
        

          <ul class="pager">
   
    </li>
    
    </li>

    <br>

          </ul>

  
 
        

          <?php 
            


            
            //PAGINATION

<<<<<<< HEAD
   $query1="SELECT * FROM employee_personal_details ";
   $result1= mysqli_query($connection2,$query1); 
=======
   $query1="SELECT * FROM employee ";
   $result1= mysqli_query($connection,$query1); 
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2

   if(mysqli_num_rows($result1)>0)
   {
       $total_records=mysqli_num_rows($result1);
       $limit=2;
       $total_pages= ceil( $total_records/$limit);

      echo"<ul class='pagination'>";
   
       if($page>1)
       {
      echo"<li class='previous'>";
      $prev=$page-1;
     echo"<a href='/ems/manageindex.php?page={$prev}'>&larr; Older</a>";
       }

       for($i=1; $i<=$total_pages;$i++)
       {
           if($i==$page)
           {
               $active="active";
               $color='#228B22';
           }
           else
           {
               $active="";
               $color='#0000FF';
               
           }
     

           echo"<li><a style='color:{$color}' href='/ems/manageindex.php?page={$i}'> $i </a></li>";

       }

       if($page<$total_pages)
       {
      echo" <li class='next'> ";
      $next=$page+1;
     echo"  <a href='ems/manageindex.php?page={$next}'>Newer &rarr;</a>";
       echo" </ul></ul>

       </div>";
       }
   }
   
   
   
   
   
   ?>
<<<<<<< HEAD

 

</BODY>
</HTML>
                
=======
 
         
           
         




        
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2




<<<<<<< HEAD
=======
          
          
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2
