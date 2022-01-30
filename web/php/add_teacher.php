
<?php 
   session_start();
   include "../db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
       
    
    if(isset($_POST['add_teacher']))
    {
        // $teacher_id=$_POST['teacher_id'];

        $teachername=$_POST['teachername'];

        $gender=$_POST['gender'];  

        $dob=$_POST['dob'];

        $mobile=$_POST['mobile'];

        $join_date=$_POST['join_date'];

        $qualification=$_POST['qualification'];

        $experience=$_POST['experience'];

        $username=$_POST['username'];

        $email=$_POST['email'];

        $password=md5($_POST['password']);

        $district=$_POST['district'];

        $country=$_POST['country'];

        $role = 'teacher';


        // $pincode = rand(100000,999999);
        $sql= "insert into staff(name,role,gender,dob,mobile,join_date,qualification,experience,username,email,password,district,country) 
        values('$teachername','$role','$gender','$dob','$mobile','$join_date','$qualification','$experience','$username','$email','$password','$district','$country')";
        if (mysqli_query($conn, $sql))
        {
            $_SESSION['msg']="Teache Registered Successfully !!";
        }
        else
        {
            $_SESSION['msg']="Error : teacher not Registered";

        }

        header("Location: ../staff/admin/add_teacher.php");
    }
    

    }else{
	header("Location: index.php");
} ?>