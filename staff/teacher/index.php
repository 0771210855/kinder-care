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
<div class="col-sm-12">
<h3 class="page-title">Welcome Teacher!</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
</ul>
</div>
</div>
</div>


<div class="row">
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-five w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-icon">
<i class="fas fa-chalkboard"></i>
</div>
<div class="db-info">
<h3>06</h3>
<h6>Total Classes</h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-six w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-icon">
<i class="fas fa-user-graduate"></i>
</div>
<div class="db-info">
<h3>40/60</h3>
<h6>Total Pupils</h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-seven w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-icon">
<i class="fas fa-book-open"></i>
</div>
<div class="db-info">
<h3>30/50</h3>
<h6>Total Lessons</h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-eight w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-icon">
<i class="fas fa-clock"></i>
</div>
<div class="db-info">
<h3>15/20</h3>
<h6>Total Hours</h6>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="row">
<div class="col-12 col-lg-12 col-xl-9">
<div class="row">
<div class="col-12 col-lg-8 col-xl-8 d-flex">
<div class="card flex-fill">
<div class="card-header">
<div class="row align-items-center">
<div class="col-6">
<h5 class="card-title">Upcoming Lesson</h5>
</div>
<div class="col-6">
<span class="float-end view-link"><a href="#">View All Courses</a></span>
</div>
</div>
</div>
<div class="pt-3 pb-3">
<div class="table-responsive lesson">
<table class="table table-center">
<tbody>
<tr>
<td>
<div class="date">
<b>Aug 4, Tuesday</b>
<p>2.30pm - 3.30pm (60min)</p>
</div>
</td>
<td>
<div class="date">
<b>Lessons 30</b>
<p>3.1 Ipsuum dolor</p>
</div>
</td>
<td><a href="#">Confirmed</a></td>
<td><button type="submit" class="btn btn-info">Reschedule</button></td>
</tr>
<tr>
<td>
<div class="date">
<b>Aug 5, Wednesday</b>
<p>3.00pm - 4.30pm (90min)</p>
</div>
</td>
<td>
<div class="date">
<b>Lessons 31</b>
<p>3.2 Ipsuum dolor</p>
</div>
</td>
<td><a href="#">Confirmed</a></td>
<td><button type="submit" class="btn btn-info">Reschedule</button></td>
</tr>
<tr>
<td>
<div class="date">
<b>Aug 6, Thursday</b>
<p>11.00am - 12.00pm (20min)</p>
</div>
</td>
<td>
<div class="date">
<b>Lessons 32</b>
<p>3.3 Ipsuum dolor</p>
</div>
</td>
<td><a href="#">Confirmed</a></td>
<td><button type="submit" class="btn btn-info">Reschedule</button></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<div class="col-12 col-lg-4 col-xl-4 d-flex">
<div class="card flex-fill">
<div class="card-header">
<div class="row align-items-center">
<div class="col-12">
<h5 class="card-title">Lesson Progressed</h5>
</div>
</div>
</div>
<div class="dash-widget">
<div class="circle-bar circle-bar1">
<div class="circle-graph1" data-percent="80">
<b>80%</b>
</div>
</div>
<div class="dash-info">
<h6>Tearm Progress</h6>
<h4> 12.5<span>/ 14</span></h4>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-12 col-lg-6 col-xl-12 d-flex">
<div class="card flex-fill">
<div class="card-header">
<div class="row align-items-center">
<div class="col-6">
<h5 class="card-title"> Kindercare Teaching Activity</h5>
</div>
<div class="col-6">
<ul class="list-inline-group text-end mb-0 ps-0">
<li class="list-inline-item">
<div class="form-group mb-0 amount-spent-select">
<select class="form-control form-control-sm form-select">
<option>Weekly</option>
<option>Monthly</option>
<option>Yearly</option>
</select>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="card-body">
<div id="apexcharts-area"></div>
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

<script src="../../assets/plugins/simple-calendar/jquery.simple-calendar.js"></script>
<script src="../../assets/js/calander.js"></script>

<script src="../../assets/js/circle-progress.min.js"></script>

<script src="../../assets/js/script.js"></script>
</body>

</html>

<?php }else{
	header("Location: index.php");
} ?>