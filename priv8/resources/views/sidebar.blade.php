<div class="sidebar">
			<div class="sidebar-content">

				<!-- User dropdown -->
				<div class="user-menu dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						{!! Html::image('images/user.jpg') !!}
						@if (Auth::check())
						<div class="user-info">
							{{ Auth::user()->name }}
						</div>
						@endif
					</a>
					<div class="popup dropdown-menu dropdown-menu-right">
					    <div class="thumbnail">
					    	<div class="thumb">
								{!! Html::image('images/user.jpg') !!}
								<div class="thumb-options">
									<span>
										<a href="#" class="btn btn-icon btn-success"><i class="icon-pencil"></i></a>
										<a href="#" class="btn btn-icon btn-success"><i class="icon-remove"></i></a>
									</span>
								</div>
						    </div>

					    	<div class="caption text-center">
					    		<h6>{!! Auth::user()->name !!} </h6>
					    	</div>
				    	</div>

					</div>
				</div>
				<!-- /user dropdown -->


				<!-- Main navigation -->
				<ul class="navigation">
					<li><a href="{{ url('/mimin') }}"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
					<li>
						<a href="#"><span>Soal</span> <i class="icon-paragraph-justify2"></i></a>
						<ul>
							<li><a href="{{ url('/mimin/addsoal') }}">Input Soal</a></li>
						</ul>
						<ul>
							<li><a href="{{ url('/mimin/soal') }}">Data Soal</a></li>
						</ul>
					</li>
					<li>
						<a href="#"><span>Paket Soal</span> <i class="icon-github"></i></a>
						<ul>
							<li><a href="{{ url('/mimin/addpaket') }}">Input Paket Soal</a></li>
						</ul>
						<ul>
							<li><a href="{{ url('/mimin/paket') }}">Data Paket Soal</a></li>
						</ul>
					</li>
					<li>
						<a href="#"><span>Mata Pelajaran</span> <i class="icon-book"></i></a>
						<ul>
							<li><a href="{{ url('/mimin/addmapel') }}">Input Mata Pelajaran</a></li>
						</ul>
						<ul>
							<li><a href="{{ url('/mimin/mapel') }}">Data Mata Pelajaran</a></li>
						</ul>
					</li>
					<li>
						<a href="{{ url('/mimin/user') }}"><span>Data User</span> <i class="icon-user"></i></a>
					</li>
					<li>
						<a href="#"><span>Data Nilai</span> <i class="icon-pencil"></i></a>
						<ul>
							<li><a href="{{ url('/mimin/nilai') }}">Nilai Kelas X</a></li>
						</ul>
						<ul>
							<li><a href="{{ url('/mimin/nilai/xi') }}">Nilai Kelas XI</a></li>
						</ul>
						<ul>
							<li><a href="{{ url('/mimin/nilai/xii') }}">Nilai Kelas XII</a></li>
						</ul>
					</li>
				</ul>
				<!-- /main navigation -->

			</div>
		</div>
