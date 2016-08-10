<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<title>UDJ Seamolec | Admin Dashboard</title>

@include('style')

</head>

<body>

	<!-- Navbar -->
	@include('header')
	<!-- /navbar -->


	<!-- Page container -->
 	<div class="page-container">


		<!-- Sidebar -->
        @include('sidebar')
		<!-- /sidebar -->


		<!-- Page content -->
	 	<div class="page-content">


			<!-- Page header -->
			<div class="page-header">
				<div class="page-title">
					<h3>Update User <small>Dashboard Untuk Mengupdate User</small></h3>
				</div>
				<div id="reportrange" class="range">
					<div class="visible-xs header-element-toggle">
						<a class="btn btn-primary btn-icon"><i class="icon-calendar"></i></a>
					</div>
					<div class="date-range"></div>
					<span class="label label-danger">9</span>
				</div>
			</div>
			<!-- /page header -->

			<!-- Breadcrumbs line -->
			<div class="breadcrumb-line">
				<ul class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li><a href="forms.html">User</a></li>
					<li class="active">Update User</li>
				</ul>

				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>

				<ul class="breadcrumb-buttons collapse">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search3"></i> <span>Search</span> <b class="caret"></b></a>
						<div class="popup dropdown-menu dropdown-menu-right">
							<div class="popup-header">
								<a href="#" class="pull-left"><i class="icon-paragraph-justify"></i></a>
								<span>Quick search</span>
								<a href="#" class="pull-right"><i class="icon-new-tab"></i></a>
							</div>
							<form action="#" class="breadcrumb-search">
								<input type="text" placeholder="Type and hit enter..." name="search" class="form-control autocomplete">
								<div class="row">
									<div class="col-xs-6">
										<label class="radio">
											<input type="radio" name="search-option" class="styled" checked="checked">
											Everywhere
										</label>
										<label class="radio">
											<input type="radio" name="search-option" class="styled">
											Invoices
										</label>
									</div>

									<div class="col-xs-6">
										<label class="radio">
											<input type="radio" name="search-option" class="styled">
											Users
										</label>
										<label class="radio">
											<input type="radio" name="search-option" class="styled">
											Orders
										</label>
									</div>
								</div>

								<input type="submit" class="btn btn-block btn-success" value="Search">
							</form>
						</div>
					</li>

				</ul>
			</div>
			<!-- /breadcrumbs line -->

            <!-- Form validation -->
            {!! Form::model($user, ['method' => 'PATCH','class' => 'form-horizontal validate', 'route' => ['user.update', $user->id]]) !!}
	            <div class="block">
	                <h6 class="heading-hr"><i class="icon-checkmark-circle"></i> Update User</h6>
                    
                    <div class="form-group">
						<label class="col-sm-2 control-label">Name : <span class="mandatory">*</span></label>
						<div class="col-sm-10">
							{!! Form::text('name', null,array('class' => 'required form-control'),'') !!}
						</div>
					</div>

					<div class="form-group">
                    <label class="col-sm-2 control-label">Email : <span class="mandatory">*</span></label>
						<div class="col-sm-10">
                            {!! Form::text('email', null,array('class' => 'form-control'),'') !!}
                        </div>
                    </div>

                    <div class="form-group">
                    <label class="col-sm-2 control-label">Kelas : <span class="mandatory">*</span></label>
						<div class="col-sm-10">
                            {!! Form::text('kelas', null,array('class' => 'form-control'),'') !!}
                        </div>
                    </div>

                    <div class="form-group">
                    <label class="col-sm-2 control-label">Sekolah : <span class="mandatory">*</span></label>
						<div class="col-sm-10">
                            {!! Form::text('sekolah', null,array('class' => 'form-control'),'') !!}
                        </div>
                    </div>

                    <div class="form-actions text-right">
                    	<input type="submit" value="Submit" class="btn btn-primary">
                    </div>

                </div>
            {!! Form::close() !!}
            <!-- /form validation -->


	        <!-- Footer -->
	        @include('footer')
			@include('sweet::alert')
	        <!-- /footer -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>