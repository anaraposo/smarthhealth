<!DOCTYPE html>
<html lang="pt">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Smart Health</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="../../vendors/feather/feather.css">
	<link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
	<link rel="stylesheet" href="../../vendors/typicons/typicons.css">
	<link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
	<div class="container-scroller">
		<!-- partial:../../partials/_navbar.html -->
		<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
			<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
				<div class="me-3">
					<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
						<span class="icon-menu"></span>
					</button>
				</div>
				<div>
					<a class="navbar-brand brand-logo" href="../../index.html">
						<img src="../../images/logo.svg" alt="logo" />
					</a>
				</div>
			</div>
			
			<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
				<span class="mdi mdi-menu"></span>
			</button>
		</div>
	</nav>
	<!-- partial -->
	<div class="container-fluid page-body-wrapper">
		<!-- partial:../../partials/_settings-panel.html -->
		<div class="theme-setting-wrapper">
			<div id="settings-trigger"><i class="ti-settings"></i></div>
			<div id="theme-settings" class="settings-panel">
				<i class="settings-close ti-close"></i>
				<p class="settings-heading">SIDEBAR SKINS</p>
				<div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
				<div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
				<p class="settings-heading mt-2">HEADER SKINS</p>
				<div class="color-tiles mx-0 px-4">
					<div class="tiles success"></div>
					<div class="tiles warning"></div>
					<div class="tiles danger"></div>
					<div class="tiles info"></div>
					<div class="tiles dark"></div>
					<div class="tiles default"></div>
				</div>
			</div>
		</div>
		<div id="right-sidebar" class="settings-panel">
			<i class="settings-close ti-close"></i>
			<ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
				</li>
			</ul>
			<div class="tab-content" id="setting-content">
				<div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
					<div class="add-items d-flex px-3 mb-0">
						<form class="form w-100">
							<div class="form-group d-flex">
								<input type="text" class="form-control todo-list-input" placeholder="Add To-do">
								<button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
							</div>
						</form>
					</div>
					<div class="list-wrapper px-3">
						<ul class="d-flex flex-column-reverse todo-list">
							<li>
								<div class="form-check">
									<label class="form-check-label">
										<input class="checkbox" type="checkbox">
										Team review meeting at 3.00 PM
									</label>
								</div>
								<i class="remove ti-close"></i>
							</li>
							<li>
								<div class="form-check">
									<label class="form-check-label">
										<input class="checkbox" type="checkbox">
										Prepare for presentation
									</label>
								</div>
								<i class="remove ti-close"></i>
							</li>
							<li>
								<div class="form-check">
									<label class="form-check-label">
										<input class="checkbox" type="checkbox">
										Resolve all the low priority tickets due today
									</label>
								</div>
								<i class="remove ti-close"></i>
							</li>
							<li class="completed">
								<div class="form-check">
									<label class="form-check-label">
										<input class="checkbox" type="checkbox" checked>
										Schedule meeting for next week
									</label>
								</div>
								<i class="remove ti-close"></i>
							</li>
							<li class="completed">
								<div class="form-check">
									<label class="form-check-label">
										<input class="checkbox" type="checkbox" checked>
										Project review
									</label>
								</div>
								<i class="remove ti-close"></i>
							</li>
						</ul>
					</div>
					<h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
					<div class="events pt-4 px-3">
						<div class="wrapper d-flex mb-2">
							<i class="ti-control-record text-primary me-2"></i>
							<span>Feb 11 2018</span>
						</div>
						<p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
						<p class="text-gray mb-0">The total number of sessions</p>
					</div>
					<div class="events pt-4 px-3">
						<div class="wrapper d-flex mb-2">
							<i class="ti-control-record text-primary me-2"></i>
							<span>Feb 7 2018</span>
						</div>
						<p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
						<p class="text-gray mb-0 ">Call Sarah Graves</p>
					</div>
				</div>
				<!-- To do section tab ends -->
				<div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
					<div class="d-flex align-items-center justify-content-between border-bottom">
						<p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
						<small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
					</div>
					<ul class="chat-list">
						<li class="list active">
							<div class="profile"><img src="../../images/faces/face1.jpg" alt="image"><span class="online"></span></div>
							<div class="info">
								<p>Thomas Douglas</p>
								<p>Available</p>
							</div>
							<small class="text-muted my-auto">19 min</small>
						</li>
						<li class="list">
							<div class="profile"><img src="../../images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
							<div class="info">
								<div class="wrapper d-flex">
									<p>Catherine</p>
								</div>
								<p>Away</p>
							</div>
							<div class="badge badge-success badge-pill my-auto mx-2">4</div>
							<small class="text-muted my-auto">23 min</small>
						</li>
						<li class="list">
							<div class="profile"><img src="../../images/faces/face3.jpg" alt="image"><span class="online"></span></div>
							<div class="info">
								<p>Daniel Russell</p>
								<p>Available</p>
							</div>
							<small class="text-muted my-auto">14 min</small>
						</li>
						<li class="list">
							<div class="profile"><img src="../../images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
							<div class="info">
								<p>James Richardson</p>
								<p>Away</p>
							</div>
							<small class="text-muted my-auto">2 min</small>
						</li>
						<li class="list">
							<div class="profile"><img src="../../images/faces/face5.jpg" alt="image"><span class="online"></span></div>
							<div class="info">
								<p>Madeline Kennedy</p>
								<p>Available</p>
							</div>
							<small class="text-muted my-auto">5 min</small>
						</li>
						<li class="list">
							<div class="profile"><img src="../../images/faces/face6.jpg" alt="image"><span class="online"></span></div>
							<div class="info">
								<p>Sarah Graves</p>
								<p>Available</p>
							</div>
							<small class="text-muted my-auto">47 min</small>
						</li>
					</ul>
				</div>
				<!-- chat tab ends -->
			</div>
		</div>
		<!-- partial -->
		<!-- partial:../../partials/_sidebar.html -->
		<nav class="sidebar sidebar-offcanvas" id="sidebar">
			<ul class="nav">
				<li class="nav-item">
					<a class="nav-link" href="index.html">
						<i class="mdi mdi-grid-large menu-icon"></i>
						<span class="menu-title">Dashboard</span>
					</a>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
							<i class="menu-icon mdi mdi-table"></i>
							<span class="menu-title">Histórico</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="tables">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link" href="pages/tables/tabela1.php">Sensores</a></li>
							</ul>
						</div>
						<div class="collapse" id="tables">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link" href="pages/tables/tabela2.php">Ativadores</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</nav>
			<!-- partial -->
			<div class="main-panel">
				<div class="content-wrapper">
					<div class="row">
						<div class="col-lg-6 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Sensor de Temperatura</h4>
									<p class="card-description">
										Registos do sensor de temperatura, acionado de 30 em 30 min.
									</p>
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th>Profile</th>
													<th>VatNo.</th>
													<th>Created</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Jacob</td>
													<td>53275531</td>
													<td>12 May 2017</td>
													<td><label class="badge badge-danger">Pending</label></td>
												</tr>
												<tr>
													<td>Messsy</td>
													<td>53275532</td>
													<td>15 May 2017</td>
													<td><label class="badge badge-warning">In progress</label></td>
												</tr>
												<tr>
													<td>John</td>
													<td>53275533</td>
													<td>14 May 2017</td>
													<td><label class="badge badge-info">Fixed</label></td>
												</tr>
												<tr>
													<td>Peter</td>
													<td>53275534</td>
													<td>16 May 2017</td>
													<td><label class="badge badge-success">Completed</label></td>
												</tr>
												<tr>
													<td>Dave</td>
													<td>53275535</td>
													<td>20 May 2017</td>
													<td><label class="badge badge-warning">In progress</label></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Ativador de portas de emergência</h4>
									<p class="card-description">
										Registos das aberturas das portas de emergência.
									</p>
									<div class="table-responsive">
										<table class="table table-hover">
											<thead>
												<tr>
													<th>User</th>
													<th>Product</th>
													<th>Sale</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Jacob</td>
													<td>Photoshop</td>
													<td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
													<td><label class="badge badge-danger">Pending</label></td>
												</tr>
												<tr>
													<td>Messsy</td>
													<td>Flash</td>
													<td class="text-danger"> 21.06% <i class="ti-arrow-down"></i></td>
													<td><label class="badge badge-warning">In progress</label></td>
												</tr>
												<tr>
													<td>John</td>
													<td>Premier</td>
													<td class="text-danger"> 35.00% <i class="ti-arrow-down"></i></td>
													<td><label class="badge badge-info">Fixed</label></td>
												</tr>
												<tr>
													<td>Peter</td>
													<td>After effects</td>
													<td class="text-success"> 82.00% <i class="ti-arrow-up"></i></td>
													<td><label class="badge badge-success">Completed</label></td>
												</tr>
												<tr>
													<td>Dave</td>
													<td>53275535</td>
													<td class="text-success"> 98.05% <i class="ti-arrow-up"></i></td>
													<td><label class="badge badge-warning">In progress</label></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Ativador chamada de assistência</h4>
									<p class="card-description">
										Registos das vezes em que é acionada a chamada de assistência.
									</p>
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th>Profile</th>
													<th>VatNo.</th>
													<th>Created</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Jacob</td>
													<td>53275531</td>
													<td>12 May 2017</td>
													<td><label class="badge badge-danger">Pending</label></td>
												</tr>
												<tr>
													<td>Messsy</td>
													<td>53275532</td>
													<td>15 May 2017</td>
													<td><label class="badge badge-warning">In progress</label></td>
												</tr>
												<tr>
													<td>John</td>
													<td>53275533</td>
													<td>14 May 2017</td>
													<td><label class="badge badge-info">Fixed</label></td>
												</tr>
												<tr>
													<td>Peter</td>
													<td>53275534</td>
													<td>16 May 2017</td>
													<td><label class="badge badge-success">Completed</label></td>
												</tr>
												<tr>
													<td>Dave</td>
													<td>53275535</td>
													<td>20 May 2017</td>
													<td><label class="badge badge-warning">In progress</label></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Sensor de ruído</h4>
									<p class="card-description">
										Registos do sensor que regista o nível de ruído dos corredores do hospital.
									</p>
									<div class="table-responsive">
										<table class="table table-hover">
											<thead>
												<tr>
													<th>User</th>
													<th>Product</th>
													<th>Sale</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Jacob</td>
													<td>Photoshop</td>
													<td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
													<td><label class="badge badge-danger">Pending</label></td>
												</tr>
												<tr>
													<td>Messsy</td>
													<td>Flash</td>
													<td class="text-danger"> 21.06% <i class="ti-arrow-down"></i></td>
													<td><label class="badge badge-warning">In progress</label></td>
												</tr>
												<tr>
													<td>John</td>
													<td>Premier</td>
													<td class="text-danger"> 35.00% <i class="ti-arrow-down"></i></td>
													<td><label class="badge badge-info">Fixed</label></td>
												</tr>
												<tr>
													<td>Peter</td>
													<td>After effects</td>
													<td class="text-success"> 82.00% <i class="ti-arrow-up"></i></td>
													<td><label class="badge badge-success">Completed</label></td>
												</tr>
												<tr>
													<td>Dave</td>
													<td>53275535</td>
													<td class="text-success"> 98.05% <i class="ti-arrow-up"></i></td>
													<td><label class="badge badge-warning">In progress</label></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						

						<!-- content-wrapper ends -->
						<!-- partial:../../partials/_footer.html -->
						<footer class="footer">
							<div class="d-sm-flex justify-content-center justify-content-sm-between">
								<div class="copyright">
									&copy; Ana Raposo e Diogo Figueiredo
								</div>
								<div class="copyright">
									<span class="text-color">Projeto Tecnologias de Internet </span>
								</div>
							</div>
						</footer>
						<!-- partial -->
					</div>
					<!-- main-panel ends -->
				</div>
				<!-- page-body-wrapper ends -->
			</div>
			<!-- container-scroller -->
			<!-- plugins:js -->
			<script src="../../vendors/js/vendor.bundle.base.js"></script>
			<!-- endinject -->
			<!-- Plugin js for this page -->
			<script src="../../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
			<!-- End plugin js for this page -->
			<!-- inject:js -->
			<script src="../../js/off-canvas.js"></script>
			<script src="../../js/hoverable-collapse.js"></script>
			<script src="../../js/template.js"></script>
			<script src="../../js/settings.js"></script>
			<script src="../../js/todolist.js"></script>
			<!-- endinject -->
			<!-- Custom js for this page-->
			<!-- End custom js for this page-->
		</body>

		</html>
