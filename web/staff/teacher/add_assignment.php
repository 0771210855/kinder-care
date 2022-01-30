<?php 
   session_start();
   include "../../db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   

include('master.php');
?>


<?php

include('master.php');
?>

<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col">
<h3 class="page-title">Assignment</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item">Assignment can be up to 8 characters</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="card">
 <div class="card-header">
<h5 class="card-title">One character per box from A to Z</h5>
</div>
<div class="card-body">
<form action="#">
<div class="row">
<div class="col-md-12">
<h5 class="card-title">Personal details</h5>
<div class="row">
<div class="col-md-3">
<div class="form-group">
<label>First Name:</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label>Last Name:</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label>Last Name:</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label>Last Name:</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label>Last Name:</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label>Last Name:</label>
<input type="text" class="form-control">
</div>
</div>
</div>
<div class="row">
<div class="col-md-3">
<div class="form-group">
<label>Email:</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label>Phone:</label>
<input type="text" class="form-control">
</div>
</div>
</div>

<!-- timeing -->
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Address line:</label>
<input type="datetime-local" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Address line:</label>
<input type="datetime-local" class="form-control">
</div>
</div>
</div>
</div>
</div>
<div class="text-end">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
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

<script src="../../assets/plugins/simple-calendar/jquery.simple-calendar.js"></script>
<script src="../../assets/js/calander.js"></script>

<script src="../../assets/js/circle-progress.min.js"></script>

<script src="../../assets/js/script.js"></script>
</body>

</html>

<?php }else{
	header("Location: index.php");
} ?>