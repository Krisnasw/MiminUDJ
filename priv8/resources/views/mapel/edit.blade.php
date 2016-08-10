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
					<h3>Update Mapel <small>Dashboard Untuk Menambahkan Mapel</small></h3>
				</div>
				<div id="reportrange" class="range">
					<div class="visible-xs header-element-toggle">
						<a class="btn btn-primary btn-icon"><i class="icon-calendar"></i></a>
					</div>
					<div class="date-range"></div>
				</div>
			</div>
			<!-- /page header -->

			<!-- Breadcrumbs line -->
			<div class="breadcrumb-line">
				<ul class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li><a href="forms.html">Mapel</a></li>
					<li class="active">Update Mapel</li>
				</ul>

				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>

			</div>
			<!-- /breadcrumbs line -->

            <!-- Form validation -->
            {!! Form::model($mapel, ['method' => 'PATCH','class' => 'form-horizontal validate', 'route' => ['mapel.update', $mapel->id]]) !!}
	            <div class="block">
	                <h6 class="heading-hr"><i class="icon-checkmark-circle"></i> Update Mapel</h6>
                    
                    <div class="form-group">
						<label class="col-sm-2 control-label">Nama Mata Pelajaran : <span class="mandatory">*</span></label>
						<div class="col-sm-10">
							{!! Form::text('napel', null,array('class' => 'required form-control'),'') !!}
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