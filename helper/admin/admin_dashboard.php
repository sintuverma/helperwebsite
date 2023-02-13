<?php
session_start();
if(isset($_SESSION['admin_id']))
{

}
else{
	header("location:admin_login.php");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/dashboard_style.css">
	
  </head>
  <body>
		<nav class="navbar navbar-expand-md navbar-light">
			<button class=" navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="myNavbar">
				<div class="container-fluid">
					<div class="row"></div>
					<!-- sidebar -->
						<div class=" col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
							<a href="#" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border"><?php echo $_SESSION['admin_name'];?></a>
							<div class="bottom-border pb-3">
								<img src="admin_images/admin.jpg" width="50" class="rounded-circle">
								<a href="#" class="text-white"><?php echo $_SESSION['admin_name'];?></a>
							</div>
							<ul class="navbar-nav flex-column mt-4">
								<li class="nav-item" ><a href="#"class="nav-link text-white p-3 mb-2 current"><i class="fa fa-home text-light fa-lg mr-3"></i> Welcome <?php echo $_SESSION['admin_name'];?> &nbsp; Dashboard</a></li>
								<li class="nav-item" ><a href="#"class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-user text-light fa-lg mr-3"></i>Profile</a></li>
								<li class="nav-item" ><a href="#"class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-envelope text-light fa-lg mr-3"></i>Inbox</a></li>
								<li class="nav-item" ><a href="#"class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-shopping-cart text-light fa-lg mr-3"></i>Sales</a></li>
								<li class="nav-item" ><a href="#"class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-line-chart text-light fa-lg mr-3"></i>Analytics</a></li>
								<li class="nav-item" ><a href="#"class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-bar-chart text-light fa-lg mr-3"></i>Charts</a></li>
								<li class="nav-item" ><a href="admin_logout.php"class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-sign-out text-light fa-lg mr-3"></i>Logout</a></li>
								<li class="nav-item" ><a href="#"class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-wrench text-light fa-lg mr-3"></i>Setting</a></li>
								<li class="nav-item" ><a href="#"class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-file-text text-light fa-lg mr-3"></i>Documentation</a></li>
								
							</ul>
					
						</div>
						<!-- end of sidebar -->
						
						<!-- top-nav -->
						<div class=" col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
							<div class="row align-items-center">
							<div class="col-md-4">
								<h4 class=" text-light text-uppercase mb-0">Dashboard</h4>
							</div>
							<div class="col-md-5">
								<form>
									<div class="input-group">
										<input class="form-control search-input" type="input" placeholder="Search..."/>
											
										<button type=" button" class="btn btn-white" ><i class="fa fa-search text-danger"></i></button>
									</div>
									
								</form>
							
							</div>
								<div class="col-md-3">
									<ul class="navbar-nav">
										<li class="icon-parent"><a  href="#" class="nav-link icon-bullet"><i class=" fa fa-comments text-muted fa-lg"></i></a></li>
										<li class="icon-parent"><a href="#" class="nav-link icon-bullet"><i class=" fa fa-bell text-muted fa-lg"></i></a></li>
										<li><a href="#" class="nav-link" data-toggle="modal" data-target="#sign-out"><i class=" fa fa-sign-out text-danger fa-lg  "></i></a></li>
									</ul>
								
								</div>
							</div>
						
						</div>
						<!-- end of top-nav-->
				</div>
			</div>
		</nav>
		<!-- end of navbar -->
		<!-- modal -->
			<div class="modal fade" id="sign-out">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title"> Want to leave?</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
						Press logout to leave
						</div>
						<div class="modal-footer">
						<button type="button" class="btn btn-outline-success" data-dismiss="modal">Stay Here</button>
						<a href="admin_logout.php" class="btn btn-outline-danger" data-dismiss="modal">Logout</a>
						</div>
						</div>
					</div>
				</div>
			</div>
		<!-- end of modal -->
		<!-- Cards  -->
			<section>
				<div class=" container-fluid">
					<div class="row">
						<div class=" col-lg-9 ml-auto">
							<div class="row pt-5 mt-3 mb-5">
							
							<div class="col-xl-3 col-lg-3 col-sm-6 p-2">
								<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-between">
											<i class="fa fa-shopping-cart fa-3x text-warning"></i>
											<div class="text-right text-secondary">
											<h5>Sales</h5>
											<h3>$135,000</h3>
											</div>
										</div>
									</div>
									<div class="card-footer text-secondary">
									<i class=" fa fa-refresh mr-3"></i>
									<span>Updated Now</span>
									</div>
								</div>
							</div>
						
						<div class="col-xl-3 col-lg-3 col-sm-6 p-2">
							<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-between">
											<i class="fa fa-money fa-3x text-success"></i>
											<div class="text-right text-secondary">
											<h5>Expenses</h5>
											<h3>$39,000</h3>
											</div>
										</div>
									</div>
									<div class="card-footer text-secondary">
									<i class=" fa fa-refresh mr-3"></i>
									<span>Updated Now</span>
									</div>
								</div>
						</div>
						
						<div class=" col-xl-3 col-lg-3 col-sm-6 p-2">
							<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-between">
											<i class="fa fa-users fa-3x text-primary"></i>
											<div class="text-right text-secondary">
											<h5>Users</h5>
											<h3>15000</h3>
											</div>
										</div>
									</div>
									<div class="card-footer text-secondary">
									<i class=" fa fa-refresh mr-3"></i>
									<span>Updated Now</span>
									</div>
								</div>
						</div>
						
						<div class=" col-xl-3 col-lg-3 col-sm-6 p-2">
								<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-between">
											<i class="fa fa-line-chart fa-3x text-danger"></i>
											<div class="text-right text-secondary">
											<h5>Visitors</h5>
											<h3>65000</h3>
											</div>
										</div>
									</div>
									<div class="card-footer text-secondary">
									<i class=" fa fa-refresh mr-3"></i>
									<span>Updated Now</span>
									</div>
								</div>
						</div>
						
						</div>
						</div>
						
					</div>
				</div>
			</section>
		<!-- End Cards -->
		<!-- Tables -->
			<section>
				<div class="container-fluid">
					<div class="row mb-5">
						<div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
						<div class="row align-items-center">
							<div class="col-xl-6 col-12 mb-4">
							<h3 class="text-muted text-center mb-3">Staff Salary</h3>
								<table class="table bg-light text-center  table-striped">
									  <thead class="thead-muted">
										<tr>
										  <th scope="col">#</th>
										  <th scope="col">Name</th>
										  <th scope="col">Salary</th>
										  <th scope="col">Date</th>
										  <th scope="col">Contact</th>
										</tr>
									  </thead>
									  <tbody>
										<tr>
										  <th scope="row">1</th>
										  <td>Vinod Kumar</td>
										  <td>$2500</td>
										  <td>12/01/2016</td>
										  <td><button type=" button" class="btn btn-info btn-sm">Message</button></td>
										</tr>
										<tr>
										  <th scope="row">2</th>
										  <td>Jacob</td>
										  <td>$3000</td>
										  <td>29/02/2019</td>
										  <td><button type=" button" class="btn btn-info btn-sm">Message</button></td>
										</tr>
										<tr>
										  <th scope="row">3</th>
										  <td>Ronaldo</td>
										  <td>$3500</td>
										  <td>28/12/2018</td>
										 <td><button type=" button" class="btn btn-info btn-sm">Message</button></td>
										</tr>
										<tr>
										  <th scope="row">4</th>
										  <td>Edward</td>
										  <td>$4500</td>
										  <td>28/12/2018</td>
										 <td><button type=" button" class="btn btn-info btn-sm">Message</button></td>
										</tr>
										<tr>
										  <th scope="row">5</th>
										  <td>Marry</td>
										  <td>$5000</td>
										  <td>28/12/2018</td>
										 <td><button type=" button" class="btn btn-info btn-sm">Message</button></td>
										</tr>
									  </tbody>
									</table>
									<!-- Pagination -->
										<nav>
											<ul class="pagination justify-content-center pagination-lg">
											<li class="page-item "><a class="page-link py-2 px-3" href="#">&lt;&lt;</a></li>
											<li class="page-item active"><a class="page-link py-2 px-3" href="#">1</a></li>
											<li class="page-item"><a class="page-link py-2 px-3" href="#">2</a></li>
											<li class="page-item"><a class="page-link py-2 px-3" href="#">3</a></li>
											<li class="page-item"><a class="page-link py-2 px-3" href="#">&gt;&gt;</a></li>
												
											</ul>
										</nav>
									<!-- End Pagination -->
							</div>
							<div class=" col-xl-6 col-12 mb-4">
								<h3 class="text-muted text-center mb-2">Recent Salary</h3>
								<table class="table bg-dark table-hover text-center text-light  table-striped">
									  <thead class="thead-muted mb-2">
										<tr>
										  <th scope="col">#</th>
										  <th scope="col">Name</th>
										  <th scope="col">Salary</th>
										  <th scope="col">Date</th>
										  <th scope="col">Contact</th>
										</tr>
									  </thead>
									  <tbody>
										<tr>
										  <th scope="row">1</th>
										  <td>Vinod Kumar</td>
										  <td>$2500</td>
										  <td>12/01/2016</td>
										  <td><span class="badge badge-success w-75 py-2">Approved</span></td>
										</tr>
										<tr>
										  <th scope="row">2</th>
										  <td>Ritu</td>
										  <td>$3000</td>
										  <td>29/02/2019</td>
										  <td><span class="badge badge-danger w-75 py-2">Pending</span></td>
										</tr>
										<tr>
										  <th scope="row">3</th>
										  <td>Sidharth</td>
										  <td>$3500</td>
										  <td>28/12/2018</td>
										 <td><span class="badge badge-success w-75 py-2">Approved</span></td>
										</tr>
										<tr>
										  <th scope="row">4</th>
										  <td>Hella</td>
										  <td>$4500</td>
										  <td>28/12/2018</td>
										 <td><span class="badge badge-danger w-75 py-2">Pending</span></td>
										</tr>
										<tr>
										  <th scope="row">5</th>
										  <td>Martha</td>
										  <td>$5000</td>
										  <td>28/12/2018</td>
										 <td><span class="badge badge-success w-75 py-2 ">Approved</span></td>
										</tr>
									  </tbody>
									</table>
									<!-- Pagination -->
										<nav>
											<ul class="pagination justify-content-center pagination-lg ">
											<li class="page-item "><a class="page-link py-2 px-3 bg-dark" href="#">&lt;&lt;</a></li>
											<li class="page-item active"><a class="page-link py-2 px-3 bg-dark" href="#">1</a></li>
											<li class="page-item"><a class="page-link py-2 px-3 bg-dark" href="#">2</a></li>
											<li class="page-item"><a class="page-link py-2 px-3 bg-dark" href="#">3</a></li>
											<li class="page-item"><a class="page-link py-2 px-3 bg-dark" href="#">&gt;&gt;</a></li>
												
											</ul>
										</nav>
									<!-- End Pagination -->
							</div>
						</div>
						</div>
					</div>
				</div>
			</section>
		<!-- End Tables -->
		<!-- Progress -->
			<section>
				<div class="container-fluid">
					<div class="row">
						<div class=" col-xl-10 col-lg-9 col-md-8 ml-auto">
							<div class="row mb-4 align-item-center">
								<div class=" col-xl-6 col-12 ">
									<div class=" bg-dark text-white p-4 rounded">
										<h4 class="mb-5">Coversion Rates</h4>
										<h6 class="mb-3">Google Chrome</h6>
											<div class="progress mb-4" style="height:30px;">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-success font-weight-bold" role="progressbar" style="width: 91%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">91%</div>
											</div>
											<h6 class="mb-3">Mozilla Firefox</h6>
											<div class="progress mb-4" style="height:30px;">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary font-weight-bold" role="progressbar" style="width: 81%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">81%</div>
											</div>
											<h6 class="mb-3">Safari</h6>
											<div class="progress mb-4" style="height:30px;">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning font-weight-bold" role="progressbar" style="width:67%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">67%</div>
											</div>
											<h6 class="mb-3">Internet Explorer</h6>
											<div class="progress mb-4" style="height:30px;">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger font-weight-bold" role="progressbar" style="width:37%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">37%</div>
											</div>
									</div>
								</div>
								
								<div class=" col-xl-6 col-12 ">
									<h4 class="text-muted p-3 mb-3">Tasks:</h4>
									<div class="container-fluid bg-white task-border">
										<div class="row py-3 mb-4 align-item-center">
											<div class="col-1">
												<input type="checkbox" checked/>
											</div>
											<div class="col-sm-9 col-8">
												Lorem Ipsum dolor sit amet consectetur adipisicing elit.
											</div>
												<div class="col-1">
													<a href="#"  data-toggle="tooltip" data-placement="top" title="<h6>Edit</h6>" data-html="true"><i class="fa fa-edit fa-lg text-success mr-2"></i></a>
												</div>
												<div class="col-1">
													<a href="#" data-toggle="tooltip" title="<h6>Delete</h6>" data-html="true" data-placement="top"><i class="fa fa-trash fa-lg text-danger mr-2"></i></a>
												</div>
										</div>
									</div>
									<div class="container-fluid bg-white ">
										<div class="row py-3 mb-4 task-border align-item-center">
											<div class="col-1">
												<input type="checkbox" checked/>
											</div>
											<div class="col-sm-9 col-8">
												Lorem Ipsum dolor sit amet consectetur adipisicing elit.
											</div>
												<div class="col-1">
													<a href="#"  data-toggle="tooltip" data-placement="top" title="<h6>Edit</h6>" data-html="true"><i class="fa fa-edit fa-lg text-success mr-2"></i></a>
												</div>
												<div class="col-1">
													<a href="#" data-toggle="tooltip" title="<h6>Delete</h6>" data-html="true" data-placement="top"><i class="fa fa-trash fa-lg text-danger mr-2"></i></a>
												</div>
										</div>
									</div>
									<div class="container-fluid bg-white ">
										<div class="row py-3 mb-4 task-border align-item-center">
											<div class="col-1">
												<input type="checkbox" checked/>
											</div>
											<div class="col-sm-9 col-8">
												Lorem Ipsum dolor sit amet consectetur adipisicing elit.
											</div>
												<div class="col-1">
													<a href="#"  data-toggle="tooltip" data-placement="top" title="<h6>Edit</h6>" data-html="true"><i class="fa fa-edit fa-lg text-success mr-2"></i></a>
												</div>
												<div class="col-1">
													<a href="#" data-toggle="tooltip" title="<h6>Delete</h6>" data-html="true" data-placement="top"><i class="fa fa-trash fa-lg text-danger mr-2"></i></a>
												</div>
										</div>
									</div>
									<div class="container-fluid bg-white ">
										<div class="row py-3 mb-4 task-border" align-item-center>
											<div class="col-1">
												<input type="checkbox" checked/>
											</div>
											<div class="col-sm-9 col-8">
												Lorem Ipsum dolor sit amet consectetur adipisicing elit.
											</div>
												<div class="col-1">
													<a href="#"  data-toggle="tooltip" data-placement="top" title="<h6>Edit</h6>" data-html="true"><i class="fa fa-edit fa-lg text-success mr-2"></i></a>
												</div>
												<div class="col-1">
													<a href="#" data-toggle="tooltip" title="<h6>Delete</h6>" data-html="true" data-placement="top"><i class="fa fa-trash fa-lg text-danger mr-2"></i></a>
												</div>
										</div>
									</div>
									<div class="container-fluid bg-white ">
										<div class="row py-3 mb-4 task-border align-item-center">
											<div class="col-1">
												<input type="checkbox" checked/>
											</div>
											<div class="col-sm-9 col-8">
												Lorem Ipsum dolor sit amet consectetur adipisicing elit.
											</div>
												<div class="col-1">
													<a href="#"  data-toggle="tooltip" data-placement="top" title="<h6>Edit</h6>" data-html="true"><i class="fa fa-edit fa-lg text-success mr-2"></i></a>
												</div>
												<div class="col-1">
													<a href="#" data-toggle="tooltip" title="<h6>Delete</h6>" data-html="true" data-placement="top"><i class="fa fa-trash fa-lg text-danger mr-2"></i></a>
												</div>
										</div>
									</div>
									<div class="container-fluid bg-white ">
										<div class="row py-3 mb-4 task-border align-item-center">
											<div class="col-1">
												<input type="checkbox" checked/>
											</div>
											<div class="col-sm-9 col-8">
												Lorem Ipsum dolor sit amet consectetur adipisicing elit.
											</div>
												<div class="col-1">
													<a href="#"  data-toggle="tooltip" data-placement="top" title="<h6>Edit</h6>" data-html="true"><i class="fa fa-edit fa-lg text-success mr-2"></i></a>
												</div>
												<div class="col-1">
													<a href="#" data-toggle="tooltip" title="<h6>Delete</h6>" data-html="true" data-placement="top"><i class="fa fa-trash fa-lg text-danger mr-2"></i></a>
												</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		<!-- Progress Bar -->
		<!-- Activities/ quick post-->
			<section>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
						<div class="row">
							<div class="col-xl-7">
								<h4 class="text-muted mb-4"> Recent Customer s Activities</h4>
								<div id="acordion">
									<div class="card">
										<div class="card-header">
											<button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseOne"><img src="admin_images/admin.jpg" width="50" class="mr-3 rounded"> Maria posted a new comment. </button>
										</div>
										<div class="collapse" id="collapseOne" data-parent="#acordion">
											<div class=" card-body">
											Lorem, ipsum dollor sit amet constiotij addissk elist. Reciisnf ead mosi delefctum fuglist sonsadfjtss wdfdfk husrm dsoadf, sadkss is vlls, soafn allii qiis.sadkjkl.
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseTwo"><img src="admin_images/john.jpg" width="50" class="mr-3 rounded"> John posted a new comment. </button>
										</div>
										<div class="collapse" id="collapseTwo" data-parent="#acordion">
											<div class=" card-body">
											Lorem, ipsum dollor sit amet constiotij addissk elist. Reciisnf ead mosi delefctum fuglist sonsadfjtss wdfdfk husrm dsoadf, sadkss is vlls, soafn allii qiis.sadkjkl.
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseThree"><img src="admin_images/alita.jpg" width="50" class="mr-3 rounded"> Alita posted a new comment. </button>
										</div>
										<div class="collapse" id="collapseThree" data-parent="#acordion">
											<div class=" card-body">
											Lorem, ipsum dollor sit amet constiotij addissk elist. Reciisnf ead mosi delefctum fuglist sonsadfjtss wdfdfk husrm dsoadf, sadkss is vlls, soafn allii qiis.sadkjkl.
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseFour"><img src="admin_images/vicky.jpg" width="50" class="mr-3 rounded"> Vicky posted a new comment. </button>
										</div>
										<div class="collapse" id="collapseFour" data-parent="#acordion">
											<div class=" card-body">
											Lorem, ipsum dollor sit amet constiotij addissk elist. Reciisnf ead mosi delefctum fuglist sonsadfjtss wdfdfk husrm dsoadf, sadkss is vlls, soafn allii qiis.sadkjkl.
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseFive"><img src="admin_images/dazy.jpg" width="50" class="mr-3 rounded"> Dazy posted a new comment. </button>
										</div>
										<div class="collapse" id="collapseFive" data-parent="#acordion">
											<div class=" card-body">
											Lorem, ipsum dollor sit amet constiotij addissk elist. Reciisnf ead mosi delefctum fuglist sonsadfjtss wdfdfk husrm dsoadf, sadkss is vlls, soafn allii qiis.sadkjkl.
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseSix"><img src="admin_images/sahib.jpeg" width="50" class="mr-3 rounded"> Sahib posted a new comment. </button>
										</div>
										<div class="collapse" id="collapseSix" data-parent="#acordion">
											<div class=" card-body">
											Lorem, ipsum dollor sit amet constiotij addissk elist. Reciisnf ead mosi delefctum fuglist sonsadfjtss wdfdfk husrm dsoadf, sadkss is vlls, soafn allii qiis.sadkjkl.
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-5">
								<div class=" card rounded">
									<div class="card-body">
										<h5 class="text-muted text-center mb-4">Quick Status Post</h5>
										
										<ul class="list-inline text-center py-3">
										<li class="list-inline-item mr-4"><a href="#"><i class="fa fa-pencil fa-lg text-success"></i><span class="h6 text-muted">Status</span></a></li>
										<li class="list-inline-item mr-4"><a href="#"><i class="fa fa-camera fa-lg text-dark"></i><span class="h6 text-muted">Photo</span></a></li>
										<li class="list-inline-item mr-4"><a href="#"><i class="fa fa-map-marker fa-lg text-info "></i><span class="h6 text-muted">Check-In</span></a></li>
										</ul>
										<form>
											<div class="form-group">
												<input type=" text" class="form-control py-2 mb-3" placeholder="What's Your status...?" />
												<button type="button" class="btn btn-block text-uppercase font-weight-bold text-light bg-info py-2 mb-5">submit</button>
											</div>
										</form>
										<div class="row">
											<div class="col-6">
											<div class="card bg-light"><i class="fa fa-calendar fa-8x calendar text-warning d-block m-auto py-3"></i>
												<div class="card-body">
												<p class="card-text text-center font-weight-bold text-uppercase">Tue, Feb 04</p></div>
											
											</div>
											</div>
											<div class="col-6">
												<div class="card bg-light"><i class="fa fa-clock-o fa-8x calendar text-success d-block m-auto py-3"></i>
												<div class="card-body">
												<p class="card-text text-center font-weight-bold text-uppercase">3:50 Am</p></div>
											
											</div>
											</div>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
						</div>
					</div>
				</div>
			</section>
		<!-- End Activities/ quick post-->
		<!-- Footer Section -->
			<footer>
				<div class=" container-fluid">
					<div class="row">
						<div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
						<div class="row border-top pt-3">
							<div class="col-lg-6 text center">
							<ul class="line-inline">
								<li class="list-inline-item mr-2"><a href="#" class="text-dark">CodeAndCreate</a></li>
								<li class="list-inline-item mr-2"><a href="#" class="text-dark">AboutUs</a></li>
								<li class="list-inline-item mr-2"><a href="#" class="text-dark">Support</a></li>
								<li class="list-inline-item mr-2"><a href="#" class="text-dark">Blog</a></li>
							</ul>
							</div>
							<div class="col-lg-6 text center">
							<p>&copy; <?php echo date('Y');?> Copyright. Made With <i class="fa fa-heart text-danger"></i>by<span class="text-success">Vinod Kumar Verma</span></p>
							</div>
						</div>
						</div>
					</div>
				</div>
			</footer>
		<!-- End Footer Section -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="js/script.js"></script>
  </body>
</html>