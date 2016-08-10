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
					<h3>Input Paket <small>Dashboard Untuk Menambahkan Paket</small></h3>
				</div>
			</div>
			<!-- /page header -->

			<!-- Breadcrumbs line -->
			<div class="breadcrumb-line">
				<ul class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li><a href="forms.html">Paket</a></li>
					<li class="active">Input Paket</li>
				</ul>

				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>

			</div>
			<!-- /breadcrumbs line -->

            <!-- Form validation -->
            {!! Form::open(array('action' => 'PaketController@store', 'method' => 'POST', 'class' => 'form-horizontal validate')) !!}
	            <div class="block">
	                <h6 class="heading-hr"><i class="icon-checkmark-circle"></i> Input Paket</h6>

                    <div class="form-group">
						<label class="col-sm-2 control-label">Nama Paket : <span class="mandatory">*</span></label>
						<div class="col-sm-10">
							<input type="text" class="required form-control" name="tanya" id="firstname" placeholder="Isikan Nama Paket">
						</div>
					</div>

					<div class="form-group">
									<label class="col-sm-2 control-label">Pilih Mapel : </label>
									<div class="col-sm-10">
		                                <select data-placeholder="-- Pilih Mata Pelajaran --" class="select-full" name="ids" tabindex="2">
		                                @foreach($exe as $key)
		                                    <option value="{!! $key->id !!}">{!! $key->napel !!}</option>
		                                @endforeach
		                                </select>
									</div>
								</div>

					<div class="form-group input-daterange">
                    <label class="col-sm-2 control-label">Tanggal Mulai : <span class="mandatory">*</span></label>
                    	<div class="col-sm-10">
						    <input type="text" class="form-control" placeholder="yyyy-mm-dd" name="mulai" data-datepicker = "datepicker">
						</div>
                    </div>

                    <div class="form-group input-daterange">
                    <label class="col-sm-2 control-label">Tanggal Selesai : <span class="mandatory">*</span></label>
						<div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="yyyy-mm-dd" name="selesai" data-datepicker = "datepicker">
                        </div>
                    </div>

                    <div class="form-group">
                    <label class="col-sm-2 control-label">Creator : <span class="mandatory">*</span></label>
						<div class="col-sm-10">
						@if (Auth::check())
                            <input type="text" class="form-control" name="user" value="{!! Auth::user()->name !!}" readonly>
                        @endif
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

	<script type="text/javascript">
	$('.input-daterange input').datepicker({
		format: "dd/mm/yyyy",
        autoclose: true,
        changeMonth: true,
      	changeYear: true
    });
	</script>
</body>
</html>
