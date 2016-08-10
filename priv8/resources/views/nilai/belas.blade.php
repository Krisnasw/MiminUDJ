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
					<h3>Data Nilai Kelas XII <small>Dashboard Untuk Melihat Data Nilai Kelas XII</small></h3>
				</div>
			</div>
			<!-- /page header -->


			<!-- Breadcrumbs line -->
			<div class="breadcrumb-line">
				<ul class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li><a href="tables_dynamic.html">Nilai</a></li>
					<li class="active">Data Nilai Kelas XII</li>
				</ul>

				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>

			</div>
			<!-- /breadcrumbs line -->

	        <!-- Page tabs -->
            <div class="tabbable page-tabs">
                <div class="tab-content">

                	<!-- First tab content -->
                	<div class="tab-pane active fade in" id="inside">

				    	<!-- Datatable inside panel body -->
			            <div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table"></i> Data Nilai Kelas XII</h6></div>
			                <div class="panel-body">
				                <a class="btn btn-primary btn-xs" href="{{ url('/mimin/export-xls/xii') }}">Export As Excel</a>
				                <div class="datatable">
					                <table class="table">
					                    <thead>
					                        <tr>
					                            <th>No</th>
					                            <th>Nama User</th>
					                            <th>Nilai</th>
												<th>Aksi</th>
					                        </tr>
					                    </thead>
					                    <tbody>
												@foreach($data as $key)
												<tr>
					                            <td>{{ ++$no }}</td>
					                            <td>{{ $key->nama }}</td>
					                            <td>{{ $key->nilai }}</td>
												<td>
												<button class="btn btn-primary" data-target="#exampleModalPrimary{{{ $key->id }}}" data-toggle="modal" type="button">
			                                    <i class="wb-eye"> Lihat</i>
		                                  		</button>
			                                  	<button class="btn btn-danger" data-target="#modHapus{{{ $key->id_user }}}" data-toggle="modal" type="button">
			                                    <i class="wb-trash"> Hapus</i>
		                                  		</button>
												</td>
					                        	</tr>

							<!-- Modal Lihat-->
                            <div class="modal fade modal-primary modal-3d-slit" id="exampleModalPrimary{{{ $key->id }}}" aria-hidden="true"
                            aria-labelledby="exampleModalPrimary" role="dialog" tabindex="-1">
                              <div class="modal-dialog modal-center">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title">Detail Nilai</h4>
                                  </div>
                                  <div class="modal-body with-padding">
                                    <p>
										Nama User : {{ $key->nama }}
									</p>
									<p>
										Nilai : {{ $key->nilai }}
									</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- End Modal -->

                            <!-- Modal Hapus-->
                            <div class="modal fade modal-3d-slit modal-danger" id="modHapus{{{ $key->id_user }}}" aria-hidden="true"
                            aria-labelledby="exampleModalPrimary" role="dialog" tabindex="-1">
                              <div class="modal-dialog modal-center">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title">Hapus Nilai</h4>
                                  </div>
                                  <div class="modal-body with-padding">
                                    <p>Apakah Anda Yakin Menghapus Data ?</p>
                                  </div>
                                  <div class="modal-footer">
                                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('nilai.destroy', $key->id_user))) !!}
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
