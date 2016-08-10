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
@include('header')

	<!-- Page container -->
 	<div class="page-container">

		<!-- Sidebar -->
		@include('sidebar')
		<!-- /sidebar -->

		<!-- Page content -->
	 	<div class="page-content">


			<!-- Page header -->
			<div class="page-header">
				@if(Auth::check())
				<div class="page-title">
					<h3>Dashboard <small>Selamat Datang di UDJ Seamolec , <b> {{ Auth::user()->name }}</b></small></h3>
				</div>
				@endif
			</div>
			<!-- /page header -->

			<!-- Breadcrumbs line -->
			<div class="breadcrumb-line">
				<ul class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">Dashboard</li>
				</ul>

				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>
			</div>
			<!-- /breadcrumbs line -->

			<!-- Alert -->
			<div class="alert alert-info fade in block">
          <button type="button" class="close" data-dismiss="alert">×</button>
            <i class="icon-info"></i> Selamat Datang di Admin Panel UDJ Seamolec disini Anda Dapat Mengatur : 1. Soal, 2. Paket, 3. Mata Pelajaran, 4. Data User, 5. Data Nilai
      </div>
            <!-- /alert -->

            <!-- Questions and contact -->
            <div class="row">
            	<div class="col-md-12">

                	<!-- Questions -->
                	<h6><i class="icon-question5"></i> Pertanyaan Yang Sering Diajukan</h6>
			        <div class="panel-group block">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h6 class="panel-title panel-trigger">
									<a data-toggle="collapse" href="#question1">1. Bagaimana Membuat Mata Pelajaran Baru?</a>
								</h6>
							</div>
							<div id="question1" class="panel-collapse collapse">
								<div class="panel-body">
						            <hr>
									<p>
                    <strong> User Cukup Klik Mata Pelajaran -> Lalu Input Mata Pelajaran
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h6 class="panel-title panel-trigger">
									<a data-toggle="collapse" href="#question2">2. Bagaimana Membuat Paket Soal?</a>
								</h6>
							</div>
							<div id="question2" class="panel-collapse collapse">
								<div class="panel-body">
						            <hr>
									<p><strong> Untuk Membuat Paket Soal, User Cukup Klik Paket Soal -> Input Paket Soal
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h6 class="panel-title panel-trigger">
									<a data-toggle="collapse" href="#question3">3. Bagaimana Melihat Daftar Murid?</a>
								</h6>
							</div>
							<div id="question3" class="panel-collapse collapse">
								<div class="panel-body">
						            <hr>
									<p><strong> Untuk Melihat Daftar Murid, User Cukup Klik Daftar User , Lalu Disitu Akan Bermunculan Data User yang Daftar
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h6 class="panel-title panel-trigger">
									<a data-toggle="collapse" href="#question4">4. Bagaimana Cara Melihat Nilai Beserta Download Nilai?</a>
								</h6>
							</div>
							<div id="question4" class="panel-collapse collapse">
								<div class="panel-body">
						            <hr>
									<p><strong> Untuk Melihat Data Nilai, User Klik Daftar Nilai Berdasarkan Kelas. Lalu Untuk Download Nilai Silahkan Klik Export Excel
								</div>
							</div>
						</div>

					</div>
					<!-- Questions -->

      <!-- Newest team members -->
      <h6><i class="icon-people"></i>Daftar User Baru</h6>
			<div class="row">
			@foreach ($siswa as $jancok)
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="block">
						<div class="thumbnail">
							<a href="#" class="thumb-zoom lightbox" title="gblkloanjeng">
								{!! Html::image('images/user.jpg') !!}
							</a>

					    	<div class="caption text-center">
					    		<h6>{{ $jancok->name }} <small>{{ $jancok->kelas }}</small></h6>
				    			<div class="icons-group">
			                    	<a href="#" title="Google Drive" class="tip"><i class="icon-google-drive"></i></a>
			                    	<a href="#" title="Twitter" class="tip"><i class="icon-twitter"></i></a>
			                    	<a href="#" title="Github" class="tip"><i class="icon-github3"></i></a>
		                    	</div>
					    	</div>
				    	</div>
					</div>
				</div>
			@endforeach
			</div>
            <!-- /newest team members -->

	@include('footer')
	@include('sweet::alert')
	@if (Session::has('sweet_alert.alert'))
		<script>
			swal({!! Session::get('sweet_alert.alert') !!});
		</script>
	@endif

		</div>
		<!-- /page content -->


	</div>
	<!-- /page container -->

</body>
</html>
