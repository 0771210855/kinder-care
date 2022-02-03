<?php 
   session_start();
   include "../../db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {  

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM results WHERE id=$id");

			$n = mysqli_fetch_array($record);
			$assignment_id = $n['assignment_id'];
			$pupil_id = $n['pupil_id'];
            $result_mark = $n['result_mark'];
			$comment = $n['teacher_comment'];

			
			$rec = mysqli_query($conn, "SELECT * FROM pupils WHERE id=$pupil_id");
			
			

			$p = mysqli_fetch_assoc($rec);

			$user_code = $p['user_code'];
			$fname = $p['fname'];
		
	}

	
include('master.php');
?>



<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col">
<h3 class="page-title">Comments and results</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"></li>

</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="card">
 <div class="card-header">
<h5 class="card-title">Add or edit the pupils comment in the comment field</h5>
</div>
<div class="card-body">
<form action="../../php/add_comment.php" method="POST">
<div class="row">
<div class="col-md-12">
<h5 class="card-title" style="font-size:16px">user code: <span style="color:blue"><?php echo $user_code; ?></span>       First Name: <span style="color:blue"><?php echo $fname; ?></span></h5>
<div class="row">
<div class="col-md-4">
<div class="form-group">
<label>Assignmet Number:</label>
<h4><?php echo $assignment_id; ?></h4>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Pupil ID:</label>
<h4><?php echo $pupil_id; ?></h4>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Marks:</label>
<h4><?php echo $result_mark; ?></h4>
</div>
</div>
<!-- comment -->
<div class="row">
<div class="col-md-8">
<div class="form-group">
<label>Comment</label>
<input type="text" name="comment" value="<?php echo $comment; ?>" class="form-control" placeholder = "Add comment">
</div>
</div>
</div>
</div>
</div>
<div class="text-end">
<button type="submit" name="update" class="btn btn-primary">Submit</button>
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