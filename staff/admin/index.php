
<?php 
   session_start();
   include "../../db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   

include('master.php');
?>

<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Welcome Admin!</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Dashboard</li>
</ul>
</div>
</div>
</div>


<div class="row">
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-one w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-icon">
<i class="fas fa-user-graduate"></i>
</div>
<div class="db-info">
<h3>50055</h3>
<h6>Pupils</h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-two w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-icon">
<i class="fas fa-crown"></i>
</div>
<div class="db-info">
<h3>50+</h3>
<h6>Awards</h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-three w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-icon">
<i class="fas fa-building"></i>
</div>
<div class="db-info">
<h3>30+</h3>
<h6>Department</h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-four w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-icon">
<i class="fas fa-file-invoice-dollar"></i>
</div>
<div class="db-info">
<h3>$505</h3>
<h6>Revenue</h6>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12 col-lg-6">

<div class="card card-chart">
<div class="card-header">
<div class="row align-items-center">
<div class="col-6">
<h5 class="card-title">Revenue</h5>
</div>
<div class="col-6">
<ul class="list-inline-group text-end mb-0 pl-0">
<li class="list-inline-item">
<div class="form-group mb-0 amount-spent-select">
<select class="form-control form-control-sm form-select">
<option>Today</option>
<option>Last Week</option>
<option>Last Month</option>
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
<div class="col-md-12 col-lg-6">

<div class="card card-chart">
<div class="card-header">
<div class="row align-items-center">
<div class="col-6">
<h5 class="card-title">Number of Pupils</h5>
</div>
<div class="col-6">
<ul class="list-inline-group text-end mb-0 pl-0">
<li class="list-inline-item">
<div class="form-group mb-0 amount-spent-select">
<select class="form-control form-control-sm form-select">
<option>Today</option>
<option>Last Week</option>
<option>Last Month</option>
</select>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="card-body">
<div id="bar"></div>
</div>
</div>

</div>
</div>
<div class="row">
<div class="col-md-10 mx-auto d-flex">

<div class="card flex-fill">
<div class="card-header">
<h5 class="card-title">Best pupil</h5>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center">
<thead class="thead-light">
<tr>
<th>ID</th>
<th>Name</th>
<th class="text-center">Marks</th>
<th class="text-center">Percentage</th>
<th class="text-end">Year</th>
</tr>
</thead>
<tbody>
<tr>
<td class="text-nowrap">
<div>PRE2209</div>
</td>
<td class="text-nowrap">John Smith</td>
<td class="text-center">1185</td>
<td class="text-center">98%</td>
<td class="text-end">
<div>2019</div>
</td>
</tr>
<tr>
<td class="text-nowrap">
<div>PRE1245</div>
</td>
<td class="text-nowrap">Jolie Hoskins</td>
<td class="text-center">1195</td>
<td class="text-center">99.5%</td>
<td class="text-end">
<div>2018</div>
</td>
</tr>
<tr>
<td class="text-nowrap">
<div>PRE1625</div>
</td>
<td class="text-nowrap">Pennington Joy</td>
<td class="text-center">1196</td>
<td class="text-center">99.6%</td>
<td class="text-end">
<div>2017</div>
</td>
</tr>
<tr>
<td class="text-nowrap">
<div>PRE2516</div>
</td>
<td class="text-nowrap">Millie Marsden</td>
<td class="text-center">1187</td>
<td class="text-center">98.2%</td>
<td class="text-end">
<div>2016</div>
</td>
</tr>
<tr>
<td class="text-nowrap">
<div>PRE2209</div>
</td>
<td class="text-nowrap">John Smith</td>
<td class="text-center">1185</td>
 <td class="text-center">98%</td>
<td class="text-end">
<div>2015</div>
</td>
</tr>
</tbody>
</table>
</div>
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