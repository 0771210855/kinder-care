

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
<h3 class="page-title">Add a Pupil</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="Pupils.html">Pupils</a></li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<form>
<div class="row">
<div class="col-12">
<h5 class="form-title"><span>Pupil Information</span></h5>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>First Name</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Last Name</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Pupil Id</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Gender</label>
<select class="form-control select">
<option>Select Gender</option>
<option>Female</option>
<option>Male</option>
<option>Others</option>
</select>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Date of Birth</label>
<div>
<input type="date" class="form-control">
</div>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Class</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Religion</label>
<input type="text" class="form-control">
</div>
</div>

</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Pupil Image</label>
<input type="file" class="form-control">
</div>
</div>
<div class="col-12">
<h5 class="form-title"><span>Parent Information</span></h5>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Father's Name</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Father's Occupation</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Father's Mobile</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Mother's Name</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Mother's Occupation</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Mother's Mobile</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Present Address</label>
<textarea class="form-control"></textarea>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Permanent Address</label>
<textarea class="form-control"></textarea>
</div>
</div>
<div class="col-12">
<button type="submit" class="btn btn-primary">Submit</button>
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