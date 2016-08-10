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
					<h3>Data Paket <small>Dashboard Untuk Melihat Data Paket</small></h3>
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
					<li><a href="tables_dynamic.html">Paket</a></li>
					<li class="active">Data Paket</li>
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

	        <!-- Page tabs -->
            <div class="tabbable page-tabs">
                <div class="tab-content">

                	<!-- First tab content -->
                	<div class="tab-pane active fade in" id="inside">

				    	<!-- Datatable inside panel body -->
			            <div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table"></i> Data Paket</h6></div>
			                <div class="panel-body">
				                <div class="datatable">
					                <table class="table">
					                    <thead>
					                        <tr>
					                            <th>No</th>
					                            <th>Nama Paket</th>
					                            <th>Tanggal Mulai</th>
					                            <th>Tanggal Selesai</th>
												<th>Creator</th>
												<th>Aksi</th>
					                        </tr>
					                    </thead>
					                    <tbody>
												@foreach($lap as $blog)
												<tr>
					                            <td>{{ ++$no }}</td>
					                            <td>{{ $blog->nama_quiz }}</td>
					                            <td>{{ $blog->tanggal_mulai }}</td>
					                            <td>{{ $blog->tanggal_selesai }}</td>
					                            <td>{{ $blog->creator }}</td>
												<td>
												<button class="btn btn-primary" data-target="#exampleModalPrimary{{{ $blog->id }}}" data-toggle="modal" type="button">
			                                    <i class="wb-eye"> Lihat</i>
		                                  		</button>
		                                  		<a href="{{ url ('paket') }}/{{ $blog->id }}/edit" class="btn btn-info">
			                                    <i class="wb-edit"> Edit</i>
			                                  	</a>
			                                  	<button class="btn btn-danger" data-target="#modHapus{{{ $blog->id }}}" data-toggle="modal" type="button">
			                                    <i class="wb-trash"> Hapus</i>
		                                  		</button>
												</td>
					                        	</tr>

							<!-- Modal Lihat-->
                            <div class="modal fade modal-primary modal-3d-slit" id="exampleModalPrimary{{{ $blog->id }}}" aria-hidden="true"
                            aria-labelledby="exampleModalPrimary" role="dialog" tabindex="-1">
                              <div class="modal-dialog modal-center">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title">Detail Paket</h4>
                                  </div>
                                  <div class="modal-body with-padding">
                                    <p>
										Nama Paket : {{ $blog->nama_quiz }}
									</p>
									<p>
										Tanggal Mulai : {{ $blog->tanggal_mulai }}
									</p>
									<p>
										Tanggal Selesai : {{ $blog->tanggal_selesai }}
									</p>
									<p>
										Creator : {{ $blog->creator }}
									</p>

									<h4 class="modal-title">Soal :</h4>
									@foreach($soal as $key)
									<p>
										{{ $key->question }}
									</p>
									<p>
										A : {{ $key->pila }}
									</p>
									<p>
										B : {{ $key->pilb }}
									</p>
									<p>
										C : {{ $key->pilc }}
									</p>
									<p>
										D : {{ $key->pild }}
									</p>
									<p>
										Jawaban : {{ $key->correct_answer }}
									</p>
									<p>
										<img src="{{ asset($key->image) }}">
									</p>

									@endforeach
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- End Modal -->

                            <!-- Modal Hapus-->
                            <div class="modal fade modal-3d-slit modal-danger" id="modHapus{{{ $blog->id }}}" aria-hidden="true"
                            aria-labelledby="exampleModalPrimary" role="dialog" tabindex="-1">
                              <div class="modal-dialog modal-center">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title">Hapus Paket</h4>
                                  </div>
                                  <div class="modal-body with-padding">
                                    <p>Apakah Anda Yakin Menghapus Data ?</p>
                                  </div>
                                  <div class="modal-footer">
                                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('paket.destroy', $blog->id))) !!}
                                      {!! Form::submit("Ya", array('class' => 'btn btn-danger btn-pure')) !!}
                                    {!! Form::close() !!}
                                    <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">Tidak</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- End Modal -->
							@endforeach
					                    </tbody>
					                </table>
				                </div>
			                </div>
				        </div>
				        <!-- /datatable inside panel body -->

                	</div>
                	<!-- /first tab content -->
            	</div>

        	</div>
        	<!-- /page tabs -->


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