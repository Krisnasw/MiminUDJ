
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<title>Intive Studio | Admin Dashboard </title>

@include('style')

</head>

<body class="sidebar-narrow">

	<!-- Navbar -->
	@include('header')
	<!-- /navbar -->


	<!-- Page container -->
 	<div class="page-container">


		<!-- Sidebar -->
		@include('sidebar')
		<!-- /sidebar -->


		<!-- Content -->
	 	<div class="page-content">


			<!-- Page header -->
			<div class="page-header">
				<div class="page-title">
					<h3>Profile page <small>User profile page layout</small></h3>
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
					<li><a href="profile.html">User</a></li>
					<li class="active">Profile</li>
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


			<!-- Profile grid -->
			<div class="row">
				<div class="col-lg-2">

					<!-- Profile links -->
				    <div class="block">

			    		<div class="block">
						    <div class="thumbnail">
						    	<div class="thumb">
						            {!! Html::image(Auth::user()->foto) !!}
									<div class="thumb-options">
										<span>
											<a href="#" class="btn btn-icon btn-success"><i class="icon-pencil"></i></a>
											<a href="#" class="btn btn-icon btn-success"><i class="icon-remove"></i></a>
										</span>
									</div>
							    </div>
						    
						    	<div class="caption text-center">
                                    @if (Auth::check())
						    		<h6>{{ Auth::user()->nama }} <small>{{ Auth::user()->kota }}</small></h6>
                                    @endif
						    	</div>
					    	</div>
					    </div>

					    <ul class="nav nav-list">
							<li class="nav-header">My Profile <i class="icon-accessibility"></i></li>
							<li><a href="#">General Info</a></li>
							<li><a href="#">Messages <span class="label label-danger">0</span></a></li>
						</ul>

						<ul class="nav nav-list">
							<li class="nav-header">My Settings <i class="icon-cogs"></i></li>
							<li><a href="#">Personal Settings</a></li>
						</ul>
                        
					</div>
					<!-- /profile links -->

				</div>

				<div class="col-lg-10">

			        <!-- Page tabs -->
		            <div class="tabbable page-tabs">
		                <ul class="nav nav-pills nav-justified">
		                    <li class="active"><a href="#activity" data-toggle="tab"><i class="icon-paragraph-justify2"></i> Activity</a></li>
                            <li><a href="#profile-messages" data-toggle="tab"><i class="icon-bubbles3"></i> Messages <span class="label label-danger">12</span></a></li>
		                    <li><a href="#settings" data-toggle="tab"><i class="icon-cogs"></i> Settings</a></li>
		                </ul>
		                <div class="tab-content">

		                	<!-- First tab -->
		                    <div class="tab-pane active fade in" id="activity">

								<!-- Statistics -->
								<div class="block">
						    		<ul class="statistics list-justified">
						    			<li>
						    				<div class="statistics-info">
							    				<a href="#" title="" class="bg-success"><i class="icon-user-plus"></i></a>
							    				<strong>12,476</strong>
							    			</div>
											<div class="progress progress-micro">
												<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
													<span class="sr-only">60% Complete</span>
												</div>
											</div>
											<span>User registrations</span>
						    			</li>
						    			<li>
						    				<div class="statistics-info">
							    				<a href="#" title="" class="bg-warning"><i class="icon-point-up"></i></a>
							    				<strong>621,873</strong>
							    			</div>
											<div class="progress progress-micro">
												<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
													<span class="sr-only">20% Complete</span>
												</div>
											</div>
											<span>Total clicks</span>
						    			</li>
						    			<li>
						    				<div class="statistics-info">
							    				<a href="#" title="" class="bg-info"><i class="icon-cart-plus"></i></a>
							    				<strong>562</strong>
							    			</div>
											<div class="progress progress-micro">
												<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
													<span class="sr-only">90% Complete</span>
												</div>
											</div>
											<span>New orders</span>
						    			</li>
						    			<li>
						    				<div class="statistics-info">
							    				<a href="#" title="" class="bg-danger"><i class="icon-coin"></i></a>
							    				<strong>$45,360</strong>
							    			</div>
											<div class="progress progress-micro">
												<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
													<span class="sr-only">70% Complete</span>
												</div>
											</div>
											<span>General balance</span>
						    			</li>
						    			<li>
						    				<div class="statistics-info">
							    				<a href="#" title="" class="bg-primary"><i class="icon-people"></i></a>
							    				<strong>562K+</strong>
							    			</div>
											<div class="progress progress-micro">
												<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
													<span class="sr-only">50% Complete</span>
												</div>
											</div>
											<span>Total users</span>
						    			</li>
						    			<li>
						    				<div class="statistics-info">
							    				<a href="#" title="" class="bg-info"><i class="icon-facebook"></i></a>
							    				<strong>36,290</strong>
							    			</div>
											<div class="progress progress-micro">
												<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style="width: 93%;">
													<span class="sr-only">93% Complete</span>
												</div>
											</div>
											<span>Facebook fans</span>
						    			</li>
						    		</ul>
					    		</div>
					    		<!-- /statistics -->


								<!-- Search line -->
								<form action="#" class="search-line block" role="form">
									<span class="subtitle"><i class="icon-pencil3"></i> Search Activity:</span>
									<div class="input-group">
										<div class="search-control">
											<input type="text" class="form-control autocomplete" placeholder="What are you looking for?">
					                        <select multiple="multiple" class="multi-select-search" tabindex="2">
					                            <option value="Everywhere" selected="selected">Everywhere</option> 
					                            <option value="Users">Users</option> 
					                            <option value="Profiles">Profiles</option> 
					                            <option value="Images">Images</option> 
					                            <option value="Connections">Connections</option> 
					                            <option value="Gallery">Gallery</option> 
					                            <option value="Posts">Posts</option> 
					                        </select>
										</div>
										<span class="input-group-btn">
											<button class="btn btn-primary" type="button">Search</button>
										</span>
									</div>
								</form>	
								<!-- /search line -->


					            <!-- Contacts (list) -->
						    	<div class="block">
						    		<h6><i class="icon-paragraph-justify2"></i> Online contacts</h6>
						        	<ul class="message-list">

						        		<li class="message-list-header">Buddies</li>

						        		<li>
						                	<div class="clearfix">
						                		<div class="chat-member">
													<a href="#"><img src="http://placehold.it/300" alt=""></a> 
													<h6>Eugene Kopyov <span class="status status-success"></span> <small>&nbsp; /&nbsp; Wed developer</small></h6>
												</div>
												<div class="chat-actions">
													<a class="btn btn-link btn-icon btn-xs" data-toggle="collapse" href="#eugene_kopyov"><i class="icon-bubble3"></i></a>
													<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a>
													<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a>
												</div>
						                	</div>

						                    <div class="panel-collapse collapse" id="eugene_kopyov">
						                    	<div class="chat">
						                        	<div class="message">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
															<span class="typing"></span>
						                                </div>
						                            </div>

						                        	<div class="message reversed">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Nunc volutpat commodo ullamcorper. Vivamus consequat sapien ac ante pharetra pellentesque. Sed molestie leo vitae erat sagittis, ac posuere nibh faucibus. In nec massa suscipit, sagittis ligula non, accumsan velit.
						                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames.
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                            <div class="moment">10 Nov, 2013</div>

						                        	<div class="message">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Aenean dictum vitae tortor vitae placerat. Donec tristique urna tellus, porttitor commodo quam facilisis sit amet. Pellentesque ullamcorper metus sed libero imperdiet, id consequat libero malesuada. Aenean mattis, nisl nec sodales adipiscing, nunc mauris volutpat nulla, quis dictum sapien nibh vitae metus. Fusce vehicula aliquam enim, sed viverra ipsum elementum at
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                        	<div class="message reversed">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Nulla venenatis enim et mi egestas blandit. Praesent in consequat eros, et sagittis metus
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                        	<div class="message">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Mauris at tellus viverra, lobortis elit non, luctus dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla in ornare ligula. Sed in pellentesque justo, vitae tristique urna. Vestibulum congue ligula ac posuere pharetra
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                            <div class="moment">12 Nov, 2013</div>

						                        	<div class="message reversed">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Pellentesque ut sollicitudin quam, et suscipit lectus. Duis accumsan, purus ac feugiat condimentum, sem risus eleifend mi, vitae sagittis nisi sem nec libero. Nunc mauris tellus, cursus vel faucibus non, accumsan quis risus
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                        	<div class="message">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Morbi lacus nulla, tristique eu hendrerit non, auctor ut arcu. Morbi id ligula mi. Vivamus ultricies lobortis erat sed placerat. Etiam molestie urna pulvinar porta fringilla. Aenean vitae lacinia felis, id laoreet diam
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                        	<div class="message reversed">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Nunc laoreet aliquam enim adipiscing placerat. Donec ac ultricies nisi. Nunc vel varius ante, et luctus elit. In eros urna, dignissim vitae quam eu, facilisis lacinia leo
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>
						                        </div>

						                        <textarea name="enter-message" class="form-control" rows="3" cols="1" placeholder="Enter your message..."></textarea>
						                        <div class="message-controls">
						                            <span class="pull-left"><i class="icon-checkmark-circle"></i> Some basic <a href="#" title="">HTML</a> is OK</span>
						                            <div class="pull-right">
						                            	<div class="upload-options">
							                            	<a href="#" title="" class="tip" data-original-title="Smileys"><i class="icon-smiley"></i></a>
							                                <a href="#" title="" class="tip" data-original-title="Upload photo"><i class="icon-camera3"></i></a>
							                                <a href="#" title="" class="tip" data-original-title="Attach file"><i class="icon-attachment"></i></a>
						                                </div>
						                                <button type="button" class="btn btn-danger btn-loading" data-loading-text="<i class='icon-spinner7 spin'></i> Processing">Submit</button>
						                            </div>
						                        </div>
						                    </div>
						        		</li>

						        		<li>
						                	<div class="clearfix">
						                		<div class="chat-member">
													<a href="#"><img src="http://placehold.it/300" alt=""></a> 
													<h6>Duncan McMart <span class="status status-default"></span> <small>&nbsp; /&nbsp; Wed designer</small></h6>
												</div>
												<div class="chat-actions">
													<a class="btn btn-link btn-icon btn-xs" data-toggle="collapse" href="#duncan_mcmart"><i class="icon-bubble3"></i></a>
													<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a>
													<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a>
												</div>
						                	</div>

						                    <div class="panel-collapse collapse" id="duncan_mcmart">
						                    	<div class="chat">
						                        	<div class="message">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
															<span class="typing"></span>
						                                </div>
						                            </div>

						                        	<div class="message reversed">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Nunc volutpat commodo ullamcorper. Vivamus consequat sapien ac ante pharetra pellentesque. Sed molestie leo vitae erat sagittis, ac posuere nibh faucibus. In nec massa suscipit, sagittis ligula non, accumsan velit.
						                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames.
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                            <div class="moment">10 Nov, 2013</div>

						                        	<div class="message">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Aenean dictum vitae tortor vitae placerat. Donec tristique urna tellus, porttitor commodo quam facilisis sit amet. Pellentesque ullamcorper metus sed libero imperdiet, id consequat libero malesuada. Aenean mattis, nisl nec sodales adipiscing, nunc mauris volutpat nulla, quis dictum sapien nibh vitae metus. Fusce vehicula aliquam enim, sed viverra ipsum elementum at
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                        	<div class="message reversed">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Nulla venenatis enim et mi egestas blandit. Praesent in consequat eros, et sagittis metus
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                        	<div class="message">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Mauris at tellus viverra, lobortis elit non, luctus dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla in ornare ligula. Sed in pellentesque justo, vitae tristique urna. Vestibulum congue ligula ac posuere pharetra
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                            <div class="moment">12 Nov, 2013</div>

						                        	<div class="message reversed">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Pellentesque ut sollicitudin quam, et suscipit lectus. Duis accumsan, purus ac feugiat condimentum, sem risus eleifend mi, vitae sagittis nisi sem nec libero. Nunc mauris tellus, cursus vel faucibus non, accumsan quis risus
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                        	<div class="message">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Morbi lacus nulla, tristique eu hendrerit non, auctor ut arcu. Morbi id ligula mi. Vivamus ultricies lobortis erat sed placerat. Etiam molestie urna pulvinar porta fringilla. Aenean vitae lacinia felis, id laoreet diam
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                        	<div class="message reversed">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Nunc laoreet aliquam enim adipiscing placerat. Donec ac ultricies nisi. Nunc vel varius ante, et luctus elit. In eros urna, dignissim vitae quam eu, facilisis lacinia leo
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>
						                        </div>

						                        <textarea name="enter-message" class="form-control" rows="3" cols="1" placeholder="Enter your message..."></textarea>
						                        <div class="message-controls">
						                            <span class="pull-left"><i class="icon-checkmark-circle"></i> Some basic <a href="#" title="">HTML</a> is OK</span>
						                            <div class="pull-right">
						                            	<div class="upload-options">
							                            	<a href="#" title="" class="tip" data-original-title="Smileys"><i class="icon-smiley"></i></a>
							                                <a href="#" title="" class="tip" data-original-title="Upload photo"><i class="icon-camera3"></i></a>
							                                <a href="#" title="" class="tip" data-original-title="Attach file"><i class="icon-attachment"></i></a>
						                                </div>
						                                <button type="button" class="btn btn-danger btn-loading" data-loading-text="<i class='icon-spinner7 spin'></i> Processing">Submit</button>
						                            </div>
						                        </div>
						                    </div>
						        		</li>

						        		<li>
						                	<div class="clearfix">
						                		<div class="chat-member">
													<a href="#"><img src="http://placehold.it/300" alt=""></a> 
													<h6>Lucy Smith <span class="status status-warning"></span> <small>&nbsp; /&nbsp; UI expert</small></h6>
												</div>
												<div class="chat-actions">
													<a class="btn btn-link btn-icon btn-xs" data-toggle="collapse" href="#lucy_smith"><i class="icon-bubble3"></i></a>
													<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a>
													<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a>
												</div>
						                	</div>

						                    <div class="panel-collapse collapse" id="lucy_smith">
						                    	<div class="chat">
						                        	<div class="message">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
															<span class="typing"></span>
						                                </div>
						                            </div>

						                        	<div class="message reversed">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Nunc volutpat commodo ullamcorper. Vivamus consequat sapien ac ante pharetra pellentesque. Sed molestie leo vitae erat sagittis, ac posuere nibh faucibus. In nec massa suscipit, sagittis ligula non, accumsan velit.
						                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames.
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                            <div class="moment">10 Nov, 2013</div>

						                        	<div class="message">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Aenean dictum vitae tortor vitae placerat. Donec tristique urna tellus, porttitor commodo quam facilisis sit amet. Pellentesque ullamcorper metus sed libero imperdiet, id consequat libero malesuada. Aenean mattis, nisl nec sodales adipiscing, nunc mauris volutpat nulla, quis dictum sapien nibh vitae metus. Fusce vehicula aliquam enim, sed viverra ipsum elementum at
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                        	<div class="message reversed">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Nulla venenatis enim et mi egestas blandit. Praesent in consequat eros, et sagittis metus
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                        	<div class="message">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Mauris at tellus viverra, lobortis elit non, luctus dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla in ornare ligula. Sed in pellentesque justo, vitae tristique urna. Vestibulum congue ligula ac posuere pharetra
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                            <div class="moment">12 Nov, 2013</div>

						                        	<div class="message reversed">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Pellentesque ut sollicitudin quam, et suscipit lectus. Duis accumsan, purus ac feugiat condimentum, sem risus eleifend mi, vitae sagittis nisi sem nec libero. Nunc mauris tellus, cursus vel faucibus non, accumsan quis risus
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                        	<div class="message">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Morbi lacus nulla, tristique eu hendrerit non, auctor ut arcu. Morbi id ligula mi. Vivamus ultricies lobortis erat sed placerat. Etiam molestie urna pulvinar porta fringilla. Aenean vitae lacinia felis, id laoreet diam
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                        	<div class="message reversed">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Nunc laoreet aliquam enim adipiscing placerat. Donec ac ultricies nisi. Nunc vel varius ante, et luctus elit. In eros urna, dignissim vitae quam eu, facilisis lacinia leo
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>
						                        </div>

						                        <textarea name="enter-message" class="form-control" rows="3" cols="1" placeholder="Enter your message..."></textarea>
						                        <div class="message-controls">
						                            <span class="pull-left"><i class="icon-checkmark-circle"></i> Some basic <a href="#" title="">HTML</a> is OK</span>
						                            <div class="pull-right">
						                            	<div class="upload-options">
							                            	<a href="#" title="" class="tip" data-original-title="Smileys"><i class="icon-smiley"></i></a>
							                                <a href="#" title="" class="tip" data-original-title="Upload photo"><i class="icon-camera3"></i></a>
							                                <a href="#" title="" class="tip" data-original-title="Attach file"><i class="icon-attachment"></i></a>
						                                </div>
						                                <button type="button" class="btn btn-danger btn-loading" data-loading-text="<i class='icon-spinner7 spin'></i> Processing">Submit</button>
						                            </div>
						                        </div>
						                    </div>
						        		</li>

						        		<li class="message-list-header">Colleagues</li>

						        		<li>
						                	<div class="clearfix">
						                		<div class="chat-member">
													<a href="#"><img src="http://placehold.it/300" alt=""></a> 
													<h6>Angel Nowak <span class="status status-default"></span> <small>&nbsp; /&nbsp; Usability expert</small></h6>
												</div>
												<div class="chat-actions">
													<a class="btn btn-link btn-icon btn-xs" data-toggle="collapse" href="#angel_nowak"><i class="icon-bubble3"></i></a>
													<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a>
													<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a>
												</div>
						                	</div>

						                    <div class="panel-collapse collapse" id="angel_nowak">
						                    	<div class="chat">
						                        	<div class="message">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
															<span class="typing"></span>
						                                </div>
						                            </div>

						                        	<div class="message reversed">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Nunc volutpat commodo ullamcorper. Vivamus consequat sapien ac ante pharetra pellentesque. Sed molestie leo vitae erat sagittis, ac posuere nibh faucibus. In nec massa suscipit, sagittis ligula non, accumsan velit.
						                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames.
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                            <div class="moment">10 Nov, 2013</div>

						                        	<div class="message">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Aenean dictum vitae tortor vitae placerat. Donec tristique urna tellus, porttitor commodo quam facilisis sit amet. Pellentesque ullamcorper metus sed libero imperdiet, id consequat libero malesuada. Aenean mattis, nisl nec sodales adipiscing, nunc mauris volutpat nulla, quis dictum sapien nibh vitae metus. Fusce vehicula aliquam enim, sed viverra ipsum elementum at
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                        	<div class="message reversed">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Nulla venenatis enim et mi egestas blandit. Praesent in consequat eros, et sagittis metus
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                        	<div class="message">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Mauris at tellus viverra, lobortis elit non, luctus dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla in ornare ligula. Sed in pellentesque justo, vitae tristique urna. Vestibulum congue ligula ac posuere pharetra
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                            <div class="moment">12 Nov, 2013</div>

						                        	<div class="message reversed">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Pellentesque ut sollicitudin quam, et suscipit lectus. Duis accumsan, purus ac feugiat condimentum, sem risus eleifend mi, vitae sagittis nisi sem nec libero. Nunc mauris tellus, cursus vel faucibus non, accumsan quis risus
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                        	<div class="message">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Morbi lacus nulla, tristique eu hendrerit non, auctor ut arcu. Morbi id ligula mi. Vivamus ultricies lobortis erat sed placerat. Etiam molestie urna pulvinar porta fringilla. Aenean vitae lacinia felis, id laoreet diam
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                        	<div class="message reversed">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Nunc laoreet aliquam enim adipiscing placerat. Donec ac ultricies nisi. Nunc vel varius ante, et luctus elit. In eros urna, dignissim vitae quam eu, facilisis lacinia leo
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>
						                        </div>

						                        <textarea name="enter-message" class="form-control" rows="3" cols="1" placeholder="Enter your message..."></textarea>
						                        <div class="message-controls">
						                            <span class="pull-left"><i class="icon-checkmark-circle"></i> Some basic <a href="#" title="">HTML</a> is OK</span>
						                            <div class="pull-right">
						                            	<div class="upload-options">
							                            	<a href="#" title="" class="tip" data-original-title="Smileys"><i class="icon-smiley"></i></a>
							                                <a href="#" title="" class="tip" data-original-title="Upload photo"><i class="icon-camera3"></i></a>
							                                <a href="#" title="" class="tip" data-original-title="Attach file"><i class="icon-attachment"></i></a>
						                                </div>
						                                <button type="button" class="btn btn-danger btn-loading" data-loading-text="<i class='icon-spinner7 spin'></i> Processing">Submit</button>
						                            </div>
						                        </div>
						                    </div>
						        		</li>

						        		<li>
						                	<div class="clearfix">
						                		<div class="chat-member">
													<a href="#"><img src="http://placehold.it/300" alt=""></a> 
													<h6>Vin Dins <span class="status status-danger"></span> <small>&nbsp; /&nbsp; Wed developer</small></h6>
												</div>
												<div class="chat-actions">
													<a class="btn btn-link btn-icon btn-xs" data-toggle="collapse" href="#vin_dins"><i class="icon-bubble3"></i></a>
													<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a>
													<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a>
												</div>
						                	</div>

						                    <div class="panel-collapse collapse" id="vin_dins">
						                    	<div class="chat">
						                        	<div class="message">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
															<span class="typing"></span>
						                                </div>
						                            </div>

						                        	<div class="message reversed">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Nunc volutpat commodo ullamcorper. Vivamus consequat sapien ac ante pharetra pellentesque. Sed molestie leo vitae erat sagittis, ac posuere nibh faucibus. In nec massa suscipit, sagittis ligula non, accumsan velit.
						                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames.
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                            <div class="moment">10 Nov, 2013</div>

						                        	<div class="message">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Aenean dictum vitae tortor vitae placerat. Donec tristique urna tellus, porttitor commodo quam facilisis sit amet. Pellentesque ullamcorper metus sed libero imperdiet, id consequat libero malesuada. Aenean mattis, nisl nec sodales adipiscing, nunc mauris volutpat nulla, quis dictum sapien nibh vitae metus. Fusce vehicula aliquam enim, sed viverra ipsum elementum at
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                        	<div class="message reversed">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Nulla venenatis enim et mi egestas blandit. Praesent in consequat eros, et sagittis metus
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                        	<div class="message">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Mauris at tellus viverra, lobortis elit non, luctus dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla in ornare ligula. Sed in pellentesque justo, vitae tristique urna. Vestibulum congue ligula ac posuere pharetra
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                            <div class="moment">12 Nov, 2013</div>

						                        	<div class="message reversed">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Pellentesque ut sollicitudin quam, et suscipit lectus. Duis accumsan, purus ac feugiat condimentum, sem risus eleifend mi, vitae sagittis nisi sem nec libero. Nunc mauris tellus, cursus vel faucibus non, accumsan quis risus
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                        	<div class="message">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Morbi lacus nulla, tristique eu hendrerit non, auctor ut arcu. Morbi id ligula mi. Vivamus ultricies lobortis erat sed placerat. Etiam molestie urna pulvinar porta fringilla. Aenean vitae lacinia felis, id laoreet diam
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                        	<div class="message reversed">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Nunc laoreet aliquam enim adipiscing placerat. Donec ac ultricies nisi. Nunc vel varius ante, et luctus elit. In eros urna, dignissim vitae quam eu, facilisis lacinia leo
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>
						                        </div>

						                        <textarea name="enter-message" class="form-control" rows="3" cols="1" placeholder="Enter your message..."></textarea>
						                        <div class="message-controls">
						                            <span class="pull-left"><i class="icon-checkmark-circle"></i> Some basic <a href="#" title="">HTML</a> is OK</span>
						                            <div class="pull-right">
						                            	<div class="upload-options">
							                            	<a href="#" title="" class="tip" data-original-title="Smileys"><i class="icon-smiley"></i></a>
							                                <a href="#" title="" class="tip" data-original-title="Upload photo"><i class="icon-camera3"></i></a>
							                                <a href="#" title="" class="tip" data-original-title="Attach file"><i class="icon-attachment"></i></a>
						                                </div>
						                                <button type="button" class="btn btn-danger btn-loading" data-loading-text="<i class='icon-spinner7 spin'></i> Processing">Submit</button>
						                            </div>
						                        </div>
						                    </div>
						        		</li>

						        		<li class="message-list-header">Remote team members</li>

						        		<li>
						                	<div class="clearfix">
						                		<div class="chat-member">
													<a href="#"><img src="http://placehold.it/300" alt=""></a> 
													<h6>Robert Razinsky <span class="status status-default"></span> <small>&nbsp; /&nbsp; Usability expert</small></h6>
												</div>
												<div class="chat-actions">
													<a class="btn btn-link btn-icon btn-xs" data-toggle="collapse" href="#robert_razinsky"><i class="icon-bubble3"></i></a>
													<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a>
													<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a>
												</div>
						                	</div>

						                    <div class="panel-collapse collapse" id="robert_razinsky">
						                    	<div class="chat">
						                        	<div class="message">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
															<span class="typing"></span>
						                                </div>
						                            </div>

						                        	<div class="message reversed">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Nunc volutpat commodo ullamcorper. Vivamus consequat sapien ac ante pharetra pellentesque. Sed molestie leo vitae erat sagittis, ac posuere nibh faucibus. In nec massa suscipit, sagittis ligula non, accumsan velit.
						                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames.
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                            <div class="moment">10 Nov, 2013</div>

						                        	<div class="message">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Aenean dictum vitae tortor vitae placerat. Donec tristique urna tellus, porttitor commodo quam facilisis sit amet. Pellentesque ullamcorper metus sed libero imperdiet, id consequat libero malesuada. Aenean mattis, nisl nec sodales adipiscing, nunc mauris volutpat nulla, quis dictum sapien nibh vitae metus. Fusce vehicula aliquam enim, sed viverra ipsum elementum at
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                        	<div class="message reversed">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Nulla venenatis enim et mi egestas blandit. Praesent in consequat eros, et sagittis metus
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                        	<div class="message">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Mauris at tellus viverra, lobortis elit non, luctus dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla in ornare ligula. Sed in pellentesque justo, vitae tristique urna. Vestibulum congue ligula ac posuere pharetra
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                            <div class="moment">12 Nov, 2013</div>

						                        	<div class="message reversed">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Pellentesque ut sollicitudin quam, et suscipit lectus. Duis accumsan, purus ac feugiat condimentum, sem risus eleifend mi, vitae sagittis nisi sem nec libero. Nunc mauris tellus, cursus vel faucibus non, accumsan quis risus
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                        	<div class="message">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Morbi lacus nulla, tristique eu hendrerit non, auctor ut arcu. Morbi id ligula mi. Vivamus ultricies lobortis erat sed placerat. Etiam molestie urna pulvinar porta fringilla. Aenean vitae lacinia felis, id laoreet diam
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                        	<div class="message reversed">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Nunc laoreet aliquam enim adipiscing placerat. Donec ac ultricies nisi. Nunc vel varius ante, et luctus elit. In eros urna, dignissim vitae quam eu, facilisis lacinia leo
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>
						                        </div>

						                        <textarea name="enter-message" class="form-control" rows="3" cols="1" placeholder="Enter your message..."></textarea>
						                        <div class="message-controls">
						                            <span class="pull-left"><i class="icon-checkmark-circle"></i> Some basic <a href="#" title="">HTML</a> is OK</span>
						                            <div class="pull-right">
						                            	<div class="upload-options">
							                            	<a href="#" title="" class="tip" data-original-title="Smileys"><i class="icon-smiley"></i></a>
							                                <a href="#" title="" class="tip" data-original-title="Upload photo"><i class="icon-camera3"></i></a>
							                                <a href="#" title="" class="tip" data-original-title="Attach file"><i class="icon-attachment"></i></a>
						                                </div>
						                                <button type="button" class="btn btn-danger btn-loading" data-loading-text="<i class='icon-spinner7 spin'></i> Processing">Submit</button>
						                            </div>
						                        </div>
						                    </div>
						        		</li>

						        		<li>
						                	<div class="clearfix">
						                		<div class="chat-member">
													<a href="#"><img src="http://placehold.it/300" alt=""></a> 
													<h6>Mary Robinson <span class="status status-danger"></span> <small>&nbsp; /&nbsp; Wed developer</small></h6>
												</div>
												<div class="chat-actions">
													<a class="btn btn-link btn-icon btn-xs" data-toggle="collapse" href="#mary_robinson"><i class="icon-bubble3"></i></a>
													<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a>
													<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a>
												</div>
						                	</div>

						                    <div class="panel-collapse collapse" id="mary_robinson">
						                    	<div class="chat">
						                        	<div class="message">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
															<span class="typing"></span>
						                                </div>
						                            </div>

						                        	<div class="message reversed">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Nunc volutpat commodo ullamcorper. Vivamus consequat sapien ac ante pharetra pellentesque. Sed molestie leo vitae erat sagittis, ac posuere nibh faucibus. In nec massa suscipit, sagittis ligula non, accumsan velit.
						                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames.
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                            <div class="moment">10 Nov, 2013</div>

						                        	<div class="message">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Aenean dictum vitae tortor vitae placerat. Donec tristique urna tellus, porttitor commodo quam facilisis sit amet. Pellentesque ullamcorper metus sed libero imperdiet, id consequat libero malesuada. Aenean mattis, nisl nec sodales adipiscing, nunc mauris volutpat nulla, quis dictum sapien nibh vitae metus. Fusce vehicula aliquam enim, sed viverra ipsum elementum at
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                        	<div class="message reversed">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Nulla venenatis enim et mi egestas blandit. Praesent in consequat eros, et sagittis metus
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                        	<div class="message">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Mauris at tellus viverra, lobortis elit non, luctus dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla in ornare ligula. Sed in pellentesque justo, vitae tristique urna. Vestibulum congue ligula ac posuere pharetra
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                            <div class="moment">12 Nov, 2013</div>

						                        	<div class="message reversed">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Pellentesque ut sollicitudin quam, et suscipit lectus. Duis accumsan, purus ac feugiat condimentum, sem risus eleifend mi, vitae sagittis nisi sem nec libero. Nunc mauris tellus, cursus vel faucibus non, accumsan quis risus
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                        	<div class="message">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Morbi lacus nulla, tristique eu hendrerit non, auctor ut arcu. Morbi id ligula mi. Vivamus ultricies lobortis erat sed placerat. Etiam molestie urna pulvinar porta fringilla. Aenean vitae lacinia felis, id laoreet diam
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>

						                        	<div class="message reversed">
						                                <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
						                                <div class="message-body">
						                                    Nunc laoreet aliquam enim adipiscing placerat. Donec ac ultricies nisi. Nunc vel varius ante, et luctus elit. In eros urna, dignissim vitae quam eu, facilisis lacinia leo
						                                    <span class="attribution">14:23pm, 4th Dec 2010</span>
						                                </div>
						                            </div>
						                        </div>

						                        <textarea name="enter-message" class="form-control" rows="3" cols="1" placeholder="Enter your message..."></textarea>
						                        <div class="message-controls">
						                            <span class="pull-left"><i class="icon-checkmark-circle"></i> Some basic <a href="#" title="">HTML</a> is OK</span>
						                            <div class="pull-right">
						                            	<div class="upload-options">
							                            	<a href="#" title="" class="tip" data-original-title="Smileys"><i class="icon-smiley"></i></a>
							                                <a href="#" title="" class="tip" data-original-title="Upload photo"><i class="icon-camera3"></i></a>
							                                <a href="#" title="" class="tip" data-original-title="Attach file"><i class="icon-attachment"></i></a>
						                                </div>
						                                <button type="button" class="btn btn-danger btn-loading" data-loading-text="<i class='icon-spinner7 spin'></i> Processing">Submit</button>
						                            </div>
						                        </div>
						                    </div>
						        		</li>

						        	</ul>
						    	</div>
						    	<!-- contacts (list) -->


						        <!-- WYSIWYG editor -->
						        <h6><i class="icon-bubble6"></i> Share your thoughts</h6>
								<form class="block well" action="#" role="form">
									<div class="block-inner">
										<textarea class="editor" placeholder="Create new entry..."></textarea>
									</div>
					                <div class="form-actions text-right">
						                <button type="submit" class="btn btn-danger">Cancel</button>
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
								</form>
								<!-- /WYSIWYG editor -->

		                    </div>
		                    <!-- /first tab -->

		                    <!-- Third tab -->
		                    <div class="tab-pane fade" id="profile-messages">
		                    	<div class="chat-member-heading clearfix">
									<h6 class="pull-left"><i class="icon-bubbles"></i> Messages</small></h6>
									<div class="pull-right">
										<a href="#" class="btn btn-primary btn-icon btn-xs"><i class="icon-plus-circle"></i></a>
									</div>
	                        	</div>
		                    	<div class="block">
			                    	<ul class="message-list">
			                    		<li>
				                        	<div class="clearfix">
				                        		<div class="chat-member">
													<a href="#"><img src="http://placehold.it/300" alt=""></a> 
													<h6>Eugene Kopyov <span class="user-online"></span> <small>/ &nbsp; Wed developer</small></h6>
												</div>
												<div class="chat-actions">
													<a class="btn btn-link btn-icon btn-xs" data-toggle="collapse" href="#eugene"><i class="icon-bubble3"></i></a>
													<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a>
													<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a>
												</div>
				                        	</div>

				                            <div class="panel-collapse collapse" id="eugene">
				                            	<div class="chat">
					                            	<div class="message">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
															<span class="typing"></span>
					                                    </div>
					                                </div>

					                            	<div class="message reversed">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Nunc volutpat commodo ullamcorper. Vivamus consequat sapien ac ante pharetra pellentesque. Sed molestie leo vitae erat sagittis, ac posuere nibh faucibus. In nec massa suscipit, sagittis ligula non, accumsan velit.
					                                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames.
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                                <div class="moment">10 Nov, 2013</div>

					                            	<div class="message">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Aenean dictum vitae tortor vitae placerat. Donec tristique urna tellus, porttitor commodo quam facilisis sit amet. Pellentesque ullamcorper metus sed libero imperdiet, id consequat libero malesuada. Aenean mattis, nisl nec sodales adipiscing, nunc mauris volutpat nulla, quis dictum sapien nibh vitae metus. Fusce vehicula aliquam enim, sed viverra ipsum elementum at
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                            	<div class="message reversed">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Nulla venenatis enim et mi egestas blandit. Praesent in consequat eros, et sagittis metus
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                            	<div class="message">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Mauris at tellus viverra, lobortis elit non, luctus dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla in ornare ligula. Sed in pellentesque justo, vitae tristique urna. Vestibulum congue ligula ac posuere pharetra
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                                <div class="moment">12 Nov, 2013</div>

					                            	<div class="message reversed">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Pellentesque ut sollicitudin quam, et suscipit lectus. Duis accumsan, purus ac feugiat condimentum, sem risus eleifend mi, vitae sagittis nisi sem nec libero. Nunc mauris tellus, cursus vel faucibus non, accumsan quis risus
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                            	<div class="message">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Morbi lacus nulla, tristique eu hendrerit non, auctor ut arcu. Morbi id ligula mi. Vivamus ultricies lobortis erat sed placerat. Etiam molestie urna pulvinar porta fringilla. Aenean vitae lacinia felis, id laoreet diam
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                            	<div class="message reversed">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Nunc laoreet aliquam enim adipiscing placerat. Donec ac ultricies nisi. Nunc vel varius ante, et luctus elit. In eros urna, dignissim vitae quam eu, facilisis lacinia leo
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>
				                                </div>

					                            <textarea name="enter-message" class="form-control" rows="3" cols="1" placeholder="Enter your message..."></textarea>
					                            <div class="message-controls">
						                            <span class="pull-left"><i class="icon-checkmark-circle"></i> Some basic <a href="#" title="">HTML</a> is OK</span>
						                            <div class="pull-right">
						                            	<div class="upload-options">
							                            	<a href="#" title="" class="tip" data-original-title="Smileys"><i class="icon-smiley"></i></a>
							                                <a href="#" title="" class="tip" data-original-title="Upload photo"><i class="icon-camera3"></i></a>
							                                <a href="#" title="" class="tip" data-original-title="Attach file"><i class="icon-attachment"></i></a>
						                                </div>
						                                <button type="button" class="btn btn-danger btn-loading" data-loading-text="<i class='icon-spinner7 spin'></i> Processing">Submit</button>
						                            </div>
						                        </div>
				                            </div>
			                    		</li>

			                    		<li>
				                        	<div class="clearfix">
				                        		<div class="chat-member">
													<a href="#"><img src="http://placehold.it/300" alt=""></a> 
													<h6>Duncan McMart <span class="user-offline"></span> <small>/ &nbsp; Wed designer</small></h6>
												</div>
												<div class="chat-actions">
													<a class="btn btn-link btn-icon btn-xs" data-toggle="collapse" href="#duncan"><i class="icon-bubble3"></i></a>
													<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a>
													<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a>
												</div>
				                        	</div>

				                            <div class="panel-collapse collapse" id="duncan">
				                            	<div class="chat">
					                            	<div class="message">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
															<span class="typing"></span>
					                                    </div>
					                                </div>

					                            	<div class="message reversed">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Nunc volutpat commodo ullamcorper. Vivamus consequat sapien ac ante pharetra pellentesque. Sed molestie leo vitae erat sagittis, ac posuere nibh faucibus. In nec massa suscipit, sagittis ligula non, accumsan velit.
					                                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames.
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                                <div class="moment">10 Nov, 2013</div>

					                            	<div class="message">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Aenean dictum vitae tortor vitae placerat. Donec tristique urna tellus, porttitor commodo quam facilisis sit amet. Pellentesque ullamcorper metus sed libero imperdiet, id consequat libero malesuada. Aenean mattis, nisl nec sodales adipiscing, nunc mauris volutpat nulla, quis dictum sapien nibh vitae metus. Fusce vehicula aliquam enim, sed viverra ipsum elementum at
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                            	<div class="message reversed">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Nulla venenatis enim et mi egestas blandit. Praesent in consequat eros, et sagittis metus
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                            	<div class="message">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Mauris at tellus viverra, lobortis elit non, luctus dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla in ornare ligula. Sed in pellentesque justo, vitae tristique urna. Vestibulum congue ligula ac posuere pharetra
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                                <div class="moment">12 Nov, 2013</div>

					                            	<div class="message reversed">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Pellentesque ut sollicitudin quam, et suscipit lectus. Duis accumsan, purus ac feugiat condimentum, sem risus eleifend mi, vitae sagittis nisi sem nec libero. Nunc mauris tellus, cursus vel faucibus non, accumsan quis risus
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                            	<div class="message">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Morbi lacus nulla, tristique eu hendrerit non, auctor ut arcu. Morbi id ligula mi. Vivamus ultricies lobortis erat sed placerat. Etiam molestie urna pulvinar porta fringilla. Aenean vitae lacinia felis, id laoreet diam
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                            	<div class="message reversed">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Nunc laoreet aliquam enim adipiscing placerat. Donec ac ultricies nisi. Nunc vel varius ante, et luctus elit. In eros urna, dignissim vitae quam eu, facilisis lacinia leo
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>
				                                </div>

					                            <textarea name="enter-message" class="form-control" rows="3" cols="1" placeholder="Enter your message..."></textarea>
					                            <div class="message-controls">
						                            <span class="pull-left"><i class="icon-checkmark-circle"></i> Some basic <a href="#" title="">HTML</a> is OK</span>
						                            <div class="pull-right">
						                            	<div class="upload-options">
							                            	<a href="#" title="" class="tip" data-original-title="Smileys"><i class="icon-smiley"></i></a>
							                                <a href="#" title="" class="tip" data-original-title="Upload photo"><i class="icon-camera3"></i></a>
							                                <a href="#" title="" class="tip" data-original-title="Attach file"><i class="icon-attachment"></i></a>
						                                </div>
						                                <button type="button" class="btn btn-danger btn-loading" data-loading-text="<i class='icon-spinner7 spin'></i> Processing">Submit</button>
						                            </div>
						                        </div>
				                            </div>
			                    		</li>

			                    		<li>
				                        	<div class="clearfix">
				                        		<div class="chat-member">
													<a href="#"><img src="http://placehold.it/300" alt=""></a> 
													<h6>Lucy Smith <span class="user-away"></span> <small>/ &nbsp; UI expert</small></h6>
												</div>
												<div class="chat-actions">
													<a class="btn btn-link btn-icon btn-xs" data-toggle="collapse" href="#lucy"><i class="icon-bubble3"></i></a>
													<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a>
													<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a>
												</div>
				                        	</div>

				                            <div class="panel-collapse collapse in" id="lucy">
				                            	<div class="chat">
					                            	<div class="message">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
															<span class="typing"></span>
					                                    </div>
					                                </div>

					                            	<div class="message reversed">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Nunc volutpat commodo ullamcorper. Vivamus consequat sapien ac ante pharetra pellentesque. Sed molestie leo vitae erat sagittis, ac posuere nibh faucibus. In nec massa suscipit, sagittis ligula non, accumsan velit.
					                                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames.
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                                <div class="moment">10 Nov, 2013</div>

					                            	<div class="message">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Aenean dictum vitae tortor vitae placerat. Donec tristique urna tellus, porttitor commodo quam facilisis sit amet. Pellentesque ullamcorper metus sed libero imperdiet, id consequat libero malesuada. Aenean mattis, nisl nec sodales adipiscing, nunc mauris volutpat nulla, quis dictum sapien nibh vitae metus. Fusce vehicula aliquam enim, sed viverra ipsum elementum at
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                            	<div class="message reversed">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Nulla venenatis enim et mi egestas blandit. Praesent in consequat eros, et sagittis metus
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                            	<div class="message">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Mauris at tellus viverra, lobortis elit non, luctus dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla in ornare ligula. Sed in pellentesque justo, vitae tristique urna. Vestibulum congue ligula ac posuere pharetra
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                                <div class="moment">12 Nov, 2013</div>

					                            	<div class="message reversed">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Pellentesque ut sollicitudin quam, et suscipit lectus. Duis accumsan, purus ac feugiat condimentum, sem risus eleifend mi, vitae sagittis nisi sem nec libero. Nunc mauris tellus, cursus vel faucibus non, accumsan quis risus
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                            	<div class="message">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Morbi lacus nulla, tristique eu hendrerit non, auctor ut arcu. Morbi id ligula mi. Vivamus ultricies lobortis erat sed placerat. Etiam molestie urna pulvinar porta fringilla. Aenean vitae lacinia felis, id laoreet diam
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                            	<div class="message reversed">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Nunc laoreet aliquam enim adipiscing placerat. Donec ac ultricies nisi. Nunc vel varius ante, et luctus elit. In eros urna, dignissim vitae quam eu, facilisis lacinia leo
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>
				                                </div>

					                            <textarea name="enter-message" class="form-control" rows="3" cols="1" placeholder="Enter your message..."></textarea>
					                            <div class="message-controls">
						                            <span class="pull-left"><i class="icon-checkmark-circle"></i> Some basic <a href="#" title="">HTML</a> is OK</span>
						                            <div class="pull-right">
						                            	<div class="upload-options">
							                            	<a href="#" title="" class="tip" data-original-title="Smileys"><i class="icon-smiley"></i></a>
							                                <a href="#" title="" class="tip" data-original-title="Upload photo"><i class="icon-camera3"></i></a>
							                                <a href="#" title="" class="tip" data-original-title="Attach file"><i class="icon-attachment"></i></a>
						                                </div>
						                                <button type="button" class="btn btn-danger btn-loading" data-loading-text="<i class='icon-spinner7 spin'></i> Processing">Submit</button>
						                            </div>
						                        </div>
				                            </div>
			                    		</li>

			                    		<li>
				                        	<div class="clearfix">
				                        		<div class="chat-member">
													<a href="#"><img src="http://placehold.it/300" alt=""></a> 
													<h6>James Jameson <span class="user-away"></span> <small>/ &nbsp; Engineer</small></h6>
												</div>
												<div class="chat-actions">
													<a class="btn btn-link btn-icon btn-xs" data-toggle="collapse" href="#james"><i class="icon-bubble3"></i></a>
													<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a>
													<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a>
												</div>
				                        	</div>

				                            <div class="panel-collapse collapse" id="james">
				                            	<div class="chat">
					                            	<div class="message">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
															<span class="typing"></span>
					                                    </div>
					                                </div>

					                            	<div class="message reversed">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Nunc volutpat commodo ullamcorper. Vivamus consequat sapien ac ante pharetra pellentesque. Sed molestie leo vitae erat sagittis, ac posuere nibh faucibus. In nec massa suscipit, sagittis ligula non, accumsan velit.
					                                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames.
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                                <div class="moment">10 Nov, 2013</div>

					                            	<div class="message">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Aenean dictum vitae tortor vitae placerat. Donec tristique urna tellus, porttitor commodo quam facilisis sit amet. Pellentesque ullamcorper metus sed libero imperdiet, id consequat libero malesuada. Aenean mattis, nisl nec sodales adipiscing, nunc mauris volutpat nulla, quis dictum sapien nibh vitae metus. Fusce vehicula aliquam enim, sed viverra ipsum elementum at
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                            	<div class="message reversed">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Nulla venenatis enim et mi egestas blandit. Praesent in consequat eros, et sagittis metus
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                            	<div class="message">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Mauris at tellus viverra, lobortis elit non, luctus dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla in ornare ligula. Sed in pellentesque justo, vitae tristique urna. Vestibulum congue ligula ac posuere pharetra
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                                <div class="moment">12 Nov, 2013</div>

					                            	<div class="message reversed">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Pellentesque ut sollicitudin quam, et suscipit lectus. Duis accumsan, purus ac feugiat condimentum, sem risus eleifend mi, vitae sagittis nisi sem nec libero. Nunc mauris tellus, cursus vel faucibus non, accumsan quis risus
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                            	<div class="message">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Morbi lacus nulla, tristique eu hendrerit non, auctor ut arcu. Morbi id ligula mi. Vivamus ultricies lobortis erat sed placerat. Etiam molestie urna pulvinar porta fringilla. Aenean vitae lacinia felis, id laoreet diam
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                            	<div class="message reversed">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Nunc laoreet aliquam enim adipiscing placerat. Donec ac ultricies nisi. Nunc vel varius ante, et luctus elit. In eros urna, dignissim vitae quam eu, facilisis lacinia leo
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>
				                                </div>

					                            <textarea name="enter-message" class="form-control" rows="3" cols="1" placeholder="Enter your message..."></textarea>
					                            <div class="message-controls">
						                            <span class="pull-left"><i class="icon-checkmark-circle"></i> Some basic <a href="#" title="">HTML</a> is OK</span>
						                            <div class="pull-right">
						                            	<div class="upload-options">
							                            	<a href="#" title="" class="tip" data-original-title="Smileys"><i class="icon-smiley"></i></a>
							                                <a href="#" title="" class="tip" data-original-title="Upload photo"><i class="icon-camera3"></i></a>
							                                <a href="#" title="" class="tip" data-original-title="Attach file"><i class="icon-attachment"></i></a>
						                                </div>
						                                <button type="button" class="btn btn-danger btn-loading" data-loading-text="<i class='icon-spinner7 spin'></i> Processing">Submit</button>
						                            </div>
						                        </div>
				                            </div>
			                    		</li>

			                    		<li>
				                        	<div class="clearfix">
				                        		<div class="chat-member">
													<a href="#"><img src="http://placehold.it/300" alt=""></a> 
													<h6>Angel Nowak <span class="user-offline"></span> <small>/ &nbsp; Usability expert</small></h6>
												</div>
												<div class="chat-actions">
													<a class="btn btn-link btn-icon btn-xs" data-toggle="collapse" href="#angel"><i class="icon-bubble3"></i></a>
													<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a>
													<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a>
												</div>
				                        	</div>

				                            <div class="panel-collapse collapse" id="angel">
				                            	<div class="chat">
					                            	<div class="message">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
															<span class="typing"></span>
					                                    </div>
					                                </div>

					                            	<div class="message reversed">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Nunc volutpat commodo ullamcorper. Vivamus consequat sapien ac ante pharetra pellentesque. Sed molestie leo vitae erat sagittis, ac posuere nibh faucibus. In nec massa suscipit, sagittis ligula non, accumsan velit.
					                                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames.
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                                <div class="moment">10 Nov, 2013</div>

					                            	<div class="message">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Aenean dictum vitae tortor vitae placerat. Donec tristique urna tellus, porttitor commodo quam facilisis sit amet. Pellentesque ullamcorper metus sed libero imperdiet, id consequat libero malesuada. Aenean mattis, nisl nec sodales adipiscing, nunc mauris volutpat nulla, quis dictum sapien nibh vitae metus. Fusce vehicula aliquam enim, sed viverra ipsum elementum at
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                            	<div class="message reversed">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Nulla venenatis enim et mi egestas blandit. Praesent in consequat eros, et sagittis metus
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                            	<div class="message">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Mauris at tellus viverra, lobortis elit non, luctus dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla in ornare ligula. Sed in pellentesque justo, vitae tristique urna. Vestibulum congue ligula ac posuere pharetra
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                                <div class="moment">12 Nov, 2013</div>

					                            	<div class="message reversed">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Pellentesque ut sollicitudin quam, et suscipit lectus. Duis accumsan, purus ac feugiat condimentum, sem risus eleifend mi, vitae sagittis nisi sem nec libero. Nunc mauris tellus, cursus vel faucibus non, accumsan quis risus
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                            	<div class="message">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Morbi lacus nulla, tristique eu hendrerit non, auctor ut arcu. Morbi id ligula mi. Vivamus ultricies lobortis erat sed placerat. Etiam molestie urna pulvinar porta fringilla. Aenean vitae lacinia felis, id laoreet diam
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                            	<div class="message reversed">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Nunc laoreet aliquam enim adipiscing placerat. Donec ac ultricies nisi. Nunc vel varius ante, et luctus elit. In eros urna, dignissim vitae quam eu, facilisis lacinia leo
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>
				                                </div>

					                            <textarea name="enter-message" class="form-control" rows="3" cols="1" placeholder="Enter your message..."></textarea>
					                            <div class="message-controls">
						                            <span class="pull-left"><i class="icon-checkmark-circle"></i> Some basic <a href="#" title="">HTML</a> is OK</span>
						                            <div class="pull-right">
						                            	<div class="upload-options">
							                            	<a href="#" title="" class="tip" data-original-title="Smileys"><i class="icon-smiley"></i></a>
							                                <a href="#" title="" class="tip" data-original-title="Upload photo"><i class="icon-camera3"></i></a>
							                                <a href="#" title="" class="tip" data-original-title="Attach file"><i class="icon-attachment"></i></a>
						                                </div>
						                                <button type="button" class="btn btn-danger btn-loading" data-loading-text="<i class='icon-spinner7 spin'></i> Processing">Submit</button>
						                            </div>
						                        </div>
				                            </div>
			                    		</li>

			                    		<li>
				                        	<div class="clearfix">
				                        		<div class="chat-member">
													<a href="#"><img src="http://placehold.it/300" alt=""></a> 
													<h6>Vin Dins <span class="user-busy"></span> <small>/ &nbsp; Wed developer</small></h6>
												</div>
												<div class="chat-actions">
													<a class="btn btn-link btn-icon btn-xs" data-toggle="collapse" href="#vin"><i class="icon-bubble3"></i></a>
													<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a>
													<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a>
												</div>
				                        	</div>

				                            <div class="panel-collapse collapse" id="vin">
				                            	<div class="chat">
					                            	<div class="message">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
															<span class="typing"></span>
					                                    </div>
					                                </div>

					                            	<div class="message reversed">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Nunc volutpat commodo ullamcorper. Vivamus consequat sapien ac ante pharetra pellentesque. Sed molestie leo vitae erat sagittis, ac posuere nibh faucibus. In nec massa suscipit, sagittis ligula non, accumsan velit.
					                                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames.
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                                <div class="moment">10 Nov, 2013</div>

					                            	<div class="message">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Aenean dictum vitae tortor vitae placerat. Donec tristique urna tellus, porttitor commodo quam facilisis sit amet. Pellentesque ullamcorper metus sed libero imperdiet, id consequat libero malesuada. Aenean mattis, nisl nec sodales adipiscing, nunc mauris volutpat nulla, quis dictum sapien nibh vitae metus. Fusce vehicula aliquam enim, sed viverra ipsum elementum at
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                            	<div class="message reversed">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Nulla venenatis enim et mi egestas blandit. Praesent in consequat eros, et sagittis metus
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                            	<div class="message">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Mauris at tellus viverra, lobortis elit non, luctus dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla in ornare ligula. Sed in pellentesque justo, vitae tristique urna. Vestibulum congue ligula ac posuere pharetra
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                                <div class="moment">12 Nov, 2013</div>

					                            	<div class="message reversed">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Pellentesque ut sollicitudin quam, et suscipit lectus. Duis accumsan, purus ac feugiat condimentum, sem risus eleifend mi, vitae sagittis nisi sem nec libero. Nunc mauris tellus, cursus vel faucibus non, accumsan quis risus
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                            	<div class="message">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Morbi lacus nulla, tristique eu hendrerit non, auctor ut arcu. Morbi id ligula mi. Vivamus ultricies lobortis erat sed placerat. Etiam molestie urna pulvinar porta fringilla. Aenean vitae lacinia felis, id laoreet diam
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                            	<div class="message reversed">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Nunc laoreet aliquam enim adipiscing placerat. Donec ac ultricies nisi. Nunc vel varius ante, et luctus elit. In eros urna, dignissim vitae quam eu, facilisis lacinia leo
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>
				                                </div>

					                            <textarea name="enter-message" class="form-control" rows="3" cols="1" placeholder="Enter your message..."></textarea>
					                            <div class="message-controls">
						                            <span class="pull-left"><i class="icon-checkmark-circle"></i> Some basic <a href="#" title="">HTML</a> is OK</span>
						                            <div class="pull-right">
						                            	<div class="upload-options">
							                            	<a href="#" title="" class="tip" data-original-title="Smileys"><i class="icon-smiley"></i></a>
							                                <a href="#" title="" class="tip" data-original-title="Upload photo"><i class="icon-camera3"></i></a>
							                                <a href="#" title="" class="tip" data-original-title="Attach file"><i class="icon-attachment"></i></a>
						                                </div>
						                                <button type="button" class="btn btn-danger btn-loading" data-loading-text="<i class='icon-spinner7 spin'></i> Processing">Submit</button>
						                            </div>
						                        </div>
				                            </div>
			                    		</li>

			                    		<li>
				                        	<div class="clearfix">
				                        		<div class="chat-member">
													<a href="#"><img src="http://placehold.it/300" alt=""></a> 
													<h6>John Doe <span class="user-online"></span> <small>/ &nbsp; Wed developer</small></h6>
												</div>
												<div class="chat-actions">
													<a class="btn btn-link btn-icon btn-xs" data-toggle="collapse" href="#john"><i class="icon-bubble3"></i></a>
													<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a>
													<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a>
												</div>
				                        	</div>

				                            <div class="panel-collapse collapse" id="john">
				                            	<div class="chat">
					                            	<div class="message">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
															<span class="typing"></span>
					                                    </div>
					                                </div>

					                            	<div class="message reversed">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Nunc volutpat commodo ullamcorper. Vivamus consequat sapien ac ante pharetra pellentesque. Sed molestie leo vitae erat sagittis, ac posuere nibh faucibus. In nec massa suscipit, sagittis ligula non, accumsan velit.
					                                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames.
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                                <div class="moment">10 Nov, 2013</div>

					                            	<div class="message">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Aenean dictum vitae tortor vitae placerat. Donec tristique urna tellus, porttitor commodo quam facilisis sit amet. Pellentesque ullamcorper metus sed libero imperdiet, id consequat libero malesuada. Aenean mattis, nisl nec sodales adipiscing, nunc mauris volutpat nulla, quis dictum sapien nibh vitae metus. Fusce vehicula aliquam enim, sed viverra ipsum elementum at
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                            	<div class="message reversed">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Nulla venenatis enim et mi egestas blandit. Praesent in consequat eros, et sagittis metus
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                            	<div class="message">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Mauris at tellus viverra, lobortis elit non, luctus dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla in ornare ligula. Sed in pellentesque justo, vitae tristique urna. Vestibulum congue ligula ac posuere pharetra
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                                <div class="moment">12 Nov, 2013</div>

					                            	<div class="message reversed">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Pellentesque ut sollicitudin quam, et suscipit lectus. Duis accumsan, purus ac feugiat condimentum, sem risus eleifend mi, vitae sagittis nisi sem nec libero. Nunc mauris tellus, cursus vel faucibus non, accumsan quis risus
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                            	<div class="message">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Morbi lacus nulla, tristique eu hendrerit non, auctor ut arcu. Morbi id ligula mi. Vivamus ultricies lobortis erat sed placerat. Etiam molestie urna pulvinar porta fringilla. Aenean vitae lacinia felis, id laoreet diam
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>

					                            	<div class="message reversed">
					                                    <a class="message-img" href="#"><img src="http://placehold.it/300" alt=""></a>
					                                    <div class="message-body">
					                                        Nunc laoreet aliquam enim adipiscing placerat. Donec ac ultricies nisi. Nunc vel varius ante, et luctus elit. In eros urna, dignissim vitae quam eu, facilisis lacinia leo
					                                        <span class="attribution">14:23pm, 4th Dec 2010</span>
					                                    </div>
					                                </div>
				                                </div>

					                            <textarea name="enter-message" class="form-control" rows="3" cols="1" placeholder="Enter your message..."></textarea>
					                            <div class="message-controls">
						                            <span class="pull-left"><i class="icon-checkmark-circle"></i> Some basic <a href="#" title="">HTML</a> is OK</span>
						                            <div class="pull-right">
						                            	<div class="upload-options">
							                            	<a href="#" title="" class="tip" data-original-title="Smileys"><i class="icon-smiley"></i></a>
							                                <a href="#" title="" class="tip" data-original-title="Upload photo"><i class="icon-camera3"></i></a>
							                                <a href="#" title="" class="tip" data-original-title="Attach file"><i class="icon-attachment"></i></a>
						                                </div>
						                                <button type="button" class="btn btn-danger btn-loading" data-loading-text="<i class='icon-spinner7 spin'></i> Processing">Submit</button>
						                            </div>
						                        </div>
				                            </div>
			                    		</li>
			                    	</ul>
		                    	</div>
		                    </div>
		                    <!-- /third tab -->

		                    <!-- Fifth tab -->
		                    <div class="tab-pane fade" id="settings">

								<!-- Profile information -->
								<form action="#" class="block" role="form">
									<h6 class="heading-hr"><i class="icon-user"></i> Profile information :</h6>

									<div class="block-inner">
										<div class="form-group">
											<div class="row">
												@if (Auth::check())
												<div class="col-md-6">
													<label>Nama Lengkap</label>
													<input type="text" value="{{ Auth::user()->nama }}" class="form-control">
												</div>
												<div class="col-md-6">
													<label>Username</label>
													<input type="text" value="{{ Auth::user()->username }}" class="form-control" readonly>
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<label>Alamat</label>
													<input type="text" value="{{ Auth::user()->alamat }}" class="form-control">
												</div>
												<div class="col-md-6">
													<label>Password</label>
													<input type="text" value="{{ Auth::user()->password }}" class="form-control">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="row">
												<div class="col-md-4">
													<label>Kota</label>
													<input type="text" value="{{ Auth::user()->kota }}" class="form-control">
												</div>
												<div class="col-md-4">
													<label>Provinsi</label>
													<input type="text" value="{{ Auth::user()->provinsi }}" class="form-control">
												</div>
												<div class="col-md-4">
													<label>Kode Pos</label>
													<input type="text" value="{{ Auth::user()->pos }}" class="form-control">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<label>Email</label>
													<input type="text" readonly="readonly" value="{{ Auth::user()->email }}" class="form-control">
												</div>
												
                                                <div class="col-md-6">
													<label>No. Handphone</label>
													<input type="text" value="{{ Auth::user()->nohp }}" data-mask="+99-99-9999-9999" class="form-control">
				                        		</div>
                                                
											</div>
										</div>

				                        <div class="form-group">
				                        	<div class="row">

												<div class="col-md-6">
													<label>Upload profile image:</label>
				                                    <input type="file" class="styled form-control" id="report-screenshot">
				                                    <span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
												</div>
                                                
				                        	</div>
				                        </div>
                                                
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                        
			                        </div>
									@endif

								</form>
								<!-- /profile information -->

		                    </div>
		                    <!-- /fifth tab -->

	                    </div>
	                </div>
	                <!-- /page tabs -->

				</div>
			</div>
			<!-- /profile grid -->


	        <!-- Footer -->
            @include('footer')
	        <!-- /footer -->


		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>