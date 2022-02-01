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
<li class="breadcrumb-item"><p class="text-success"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></li>

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
<form action="../../php/add_assignment.php" method="POST">
<div class="row">
<div class="col-md-12">
<h5 class="card-title">Character boxes</h5>
<div class="row">
<div class="col-md-3">
<div class="form-group">
<label>Char 1:</label>
<input type="text" name="char_1" pattern="[A-Z]" maxlength="1" class="form-control">
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label>Char 2:</label>
<input type="text" name="char_2" pattern="[A-Z]" maxlength="1" class="form-control">
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label>Char 3:</label>
<input type="text" name="char_3" pattern="[A-Z]" maxlength="1" class="form-control">
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label>Char 4:</label>
<input type="text" name="char_4" pattern="[A-Z]" maxlength="1" class="form-control">
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label>Char 5:</label>
<input type="text" name="char_5" pattern="[A-Z]" maxlength="1" class="form-control">
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label>Char 6:</label>
<input type="text" name="char_6" pattern="[A-Z]" maxlength="1" class="form-control">
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label>Char 7:</label>
<input type="text" name="char_7" pattern="[A-Z]" maxlength="1" class="form-control">
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label>Char 8:</label>
<input type="text" name="char_8" pattern="[A-Z]" maxlength="1" class="form-control">
</div>
</div>
</div>

<!-- timeing -->
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>start time:</label><span style="color:red">*</span>
<input type="datetime-local" name="start_time" required class="form-control">
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label>End time:</label><span style="color:red">*</span>
<input type="datetime-local" name="end_time" required class="form-control">
</div>
</div>
</div>
</div>
</div>
<div class="text-end">
<button type="submit" name="assignment_submit" class="btn btn-primary">Submit</button>
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