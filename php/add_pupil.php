
<?php 
   session_start();
   include "../db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
       
    
    if(isset($_POST['add_pupil']))
    {
        // $pupil_id=$_POST['teacher_id'];

        $fname=$_POST['fname'];

        $lname=$_POST['lname'];

        $gender=$_POST['gender'];  

        $dob=$_POST['dob'];
        
        $class=$_POST['class'];

        $religion=$_POST['religion'];

        $password=md5($_POST['password']);

        $gurdian_name=$_POST['gurdian_name'];

        $gurdian_occupation=$_POST['gurdian_occupation'];

        $gurdian_mobile=$_POST['gurdian_mobile'];

        $address=$_POST['address'];


        // $pincode = rand(100000,999999);
        $sql= "insert into pupils(fname,lname,gender,dob,class,religion,password,gurdian_name,gurdian_occupation,gurdian_mobile,address) 
        values('$fname','$lname','$gender','$dob','$class','$religion','$password','$gurdian_name','$gurdian_occupation','$gurdian_mobile','$address')";
        if (mysqli_query($conn, $sql))
        {
            $_SESSION['msg']="Pupil Registered Successfully !!";
        }
        else
        {
            $_SESSION['msg']="Error : Pupil  not Registered retry";

        }

        header("Location: ../staff/admin/add_pupil.php");
    }
    

    }else{
	header("Location: index.php");
} ?>