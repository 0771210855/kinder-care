

<?php 
   session_start();
   include "../../db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   

include('master.php');
?>


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Add  a Teacher</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><p class="text-success"></p></li>

</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<form method="POST" action="../../php/add_teacher.php">
<div class="row">
<div class="col-12">
<h5 class="form-title"><span>Basic Details</span></h5>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Name</label>
<input type="text" name="teachername" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Gender</label>
<select name="gender" class="form-control select">
<option value="male">Male</option>
<option value="female">Female</option>
</select>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Date of Birth</label>
<input type="date" name="dob" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Mobile</label>
<input type="text" name="mobile" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Joining Date</label>
<input type="date" name="join_date" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Qualification</label>
<input class="form-control" name="qualification" type="text">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Experience</label>
<input class="form-control" name="experience" type="text">
</div>
</div>
<div class="col-12">
<h5 class="form-title"><span>Login Details</span></h5>
</div>
<div class="col-12 col-sm-6">
 <div class="form-group">
<label>Username</label>
<input type="text" name="username" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Email ID</label>
<input type="email" name="email" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Password</label>
<input type="text" name = "password" class="form-control">
</div>
</div>

<div class="col-12">
<h5 class="form-title"><span>Address</span></h5>
</div>

<div class="col-12 col-sm-6">
<div class="form-group">
<label> Home District</label>
<input type="text" name="district" class="form-control">
</div>
</div>

<div class="col-12 col-sm-6">
<div class="form-group">
<label>Country</label>
<input type="text" name ="country" class="form-control">
</div>
</div>
<div class="col-12">
    <input type="submit" value="submit" name="add_teacher" class="btn btn-secondary">
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

</div>

<footer>
<p>Copyright © Kinder care by group 28</p>
</footer>

</div>

</div>


<script src="../../assets/js/jquery-3.6.0.min.js"></script>

<script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="../../assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="../../assets/plugins/apexchart/chart-data.js"></script>

<script src="../../assets/js/script.js"></script>
</body>

</html>

<?php }else{
	header("Location: index.php");
} ?>