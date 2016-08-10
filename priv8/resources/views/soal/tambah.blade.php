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
					<h3>Input Soal <small>Dashboard Untuk Menambahkan Soal</small></h3>
				</div>
			</div>
			<!-- /page header -->

			<!-- Breadcrumbs line -->
			<div class="breadcrumb-line">
				<ul class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li><a href="forms.html">Soal</a></li>
					<li class="active">Input Soal</li>
				</ul>

				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>
			</div>
			<!-- /breadcrumbs line -->

            <!-- Form validation -->
            {!! Form::open(array('action' => 'SoalController@store', 'method' => 'post', 'class' => 'form-horizontal validate', 'files' => true)) !!}
	            <div class="block">
	                <h6 class="heading-hr"><i class="icon-checkmark-circle"></i> Input Soal</h6>

          <div class="form-group">
						<label class="col-sm-2 control-label">Pertanyaan : <span class="mandatory">*</span></label>
						<div class="col-sm-10">
							<input type="text" class="required form-control" name="tanya" id="firstname" placeholder="Isikan Pertanyaan Disini">
						</div>
					</div>

					<div class="form-group">
									<label class="col-sm-2 control-label">Pilih Paket : </label>
									<div class="col-sm-10">
		                                <select data-placeholder="-- Pilih Paket --" class="select-full" name="ids" tabindex="2">
		                                @foreach($paket as $key)
		                                    <option value="{!! $key->id !!}">{!! $key->nama_quiz !!}</option>
		                                @endforeach
		                                </select>
									</div>
								</div>

					<div class="form-group">
                    <label class="col-sm-2 control-label">Pilihan A : <span class="mandatory">*</span></label>
						<div class="col-sm-10">
                            <input type="text" class="form-control" name="pila" placeholder="Option A">
                        </div>
                    </div>

                    <div class="form-group">
                    <label class="col-sm-2 control-label">Pilihan B : <span class="mandatory">*</span></label>
						<div class="col-sm-10">
                            <input type="text" class="form-control" name="pilb" placeholder="Option B">
                        </div>
                    </div>

                    <div class="form-group">
                    <label class="col-sm-2 control-label">Pilihan C : <span class="mandatory">*</span></label>
						<div class="col-sm-10">
                            <input type="text" class="form-control" name="pilc" placeholder="Option C">
                        </div>
                    </div>

                    <div class="form-group">
                    <label class="col-sm-2 control-label">Pilihan D : <span class="mandatory">*</span></label>
						<div class="col-sm-10">
                            <input type="text" class="form-control" name="pild" placeholder="Option D">
                        </div>
                    </div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Jawaban : <span class="mandatory">*</span></label>
						<div class="col-sm-10">
							<input type="text" class="required form-control" name="jawab" placeholder="Isi Dengan 1,2,3,4" id="firstname">
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Image : <span class="mandatory">*</span></label>
						<div class="col-sm-10">
							<input class="styled form-control" type="file" name="image">
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
