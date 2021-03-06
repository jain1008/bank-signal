<?php 
	$this->db->select("*");
    $this->db->from("users");
    $this->db->where("user_type", 1);
    $query = $this->db->get();
    $users = $query->result_array();
	$tab_name = 'primaryhome';
	if(isset($tab)){
		if($tab==1){
			$tab_name = 'primaryhome';
		}else if($tab==2)
		{
			$tab_name = 'primaryprofile';
		}else{
			$tab_name = '';
		}	
	}
?>
<!--start header -->
<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<div class="search-bar flex-grow-1">
						<div class="position-relative search-bar-box">
							<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
						</div>
					</div>
				 
					<div class="user-box dropdown">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">						
							<div class="user-info ps-3">
							    <p class="designattion1 mb-0">Web </p>
								<p class="user-name mb-0"><?php echo $this->session->userdata("user_email")?></p>
								
							</div>
							
							<svg class="user-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" id="footer-sample-full" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512" class="iconify iconify--cil"><path fill="currentColor" d="M247.759 14.358L16 125.946V184h480v-58.362zM464 152H48v-5.946l200.241-96.412L464 146.362z"></path><path fill="currentColor" d="M48 408h416v32H48z"></path><path fill="currentColor" d="M16 464h480v32H16z"></path><path fill="currentColor" d="M56 216h32v160H56z"></path><path fill="currentColor" d="M424 216h32v160h-32z"></path><path fill="currentColor" d="M328 216h32v160h-32z"></path><path fill="currentColor" d="M152 216h32v160h-32z"></path><path fill="currentColor" d="M240 216h32v160h-32z"></path></svg>				 
						</a>
 
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
<!--wrapper-->
<div class="wrapper">



	<!--start page wrapper -->
	<div class="page-wrapper">
		<div class="page-content">

			<div class="row">



			<div class="col-12 col-lg-3">
	 <!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
	 
			<!--navigation-->
			<ul class="metismenu" id="menu">
			
             <div class="parent-icon" id="note"> Notifications <span class="note"> <i class="bx bx-message-square-edit"></i> </span>
				 </div>
						
				 		
				<li>
					<a href="<?php echo base_url('Access/1'); ?>">
						<div class="parent-icon"> <i class="bx bx-info-circle"></i>
						</div>						 
						<div class="menu-title"><span> </span> <br> <span class="heada">  2007 Loan amount anomaly in June and July : More loans were issued in the FICO score segment 640 to 680 during the anomaly months compared to non-anomaly months [High] </span>  </div>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url('Access/1'); ?>">
						<div class="parent-icon"> <i class='bx bx-bookmark-heart'></i>
						</div>						 
						<div class="menu-title"><span> </span> <br> <span class="heada"> 2007 Loan amount anomaly in June and July : More loans were issued in the category A,B, C during the anomaly months compared to non-anomaly months [Medium]  </span></div>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url('Access/1'); ?>">
						<div class="parent-icon"> <i class="bx bx-info-circle"></i>
						</div>						 
						<div class="menu-title"><span> </span> <br> <span class="heada"> 2008 Loan amount anomaly from May to Sep : No loans were issued for small business during this time period [Medium] </span></div>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url('Access/2'); ?>" class="has-arrow">
						<div class="parent-icon">  <i class="bx bxs-check-circle"></i>
						</div>						 
						<div class="menu-title"><span> </span> <br> <span class="heada"> 2013 Interest rate anomaly : More loans were issued for lower FICO score segments 660 to 680 compared to other non-anomaly years [Low] </span> </div>
					</a>
				</li>				
				<li>
					<a href="<?php echo base_url('Login/logout'); ?>">
						<div class="parent-icon"> <i class="bx bx-log-out"></i>
						</div>						 
						<div class="menu-title"><span class="heada"> Log-Out</span> </div>
					</a>
				</li>				
			 
			 
 
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
				 </div>


				<div class="col-12 col-lg-9">
					<div class="row">

						<div class="col-12 col-lg-12">

							<div class="card">
								<div class="breadcrumb pe-3">
									<h6 class="mb-0" id="hed"> Pick focus area </h6>
								</div>

								<div class="card-body">
									<div class="row row-cols-auto g-3">
										<ul class="nav nav-tabs nav-primary" role="tablist">
											<?php 
												if ($this->session->userdata("user_type")==1) {
													$user_id = $this->session->userdata("user_id");
													$this->db->select("*");
											        $this->db->from("user_access");
											        $this->db->where("user_id", $user_id);
											        $query = $this->db->get();
											        $user_access = $query->result_array();
											        $i=1;
											        foreach ($user_access as $value) {?>
											        	<li class="nav-item" role="presentation">
														<a class="nav-link <?php if($tab_name==$value['access_tab']){echo "active";$i++;} ?>" data-bs-toggle="tab" href="#<?php echo $value['access_tab']; ?>" role="tab" aria-selected="true">
															<div class="col">
																<button type="button" class="btn bg-primary px-5"> <?php echo $value['tab_name']; ?> </button>
															</div>
														</a>
													</li>
											    <?php     }
												}else{?>
													<li class="nav-item" role="presentation">
														<a class="nav-link <?php if($tab_name=='primaryhome'){echo "active";} ?>" data-bs-toggle="tab" href="#primaryhome" role="tab" aria-selected="true">
															<div class="col">
																<button type="button" class="btn bg-primary px-5"> Loan Amount </button>
															</div>
														</a>
													</li>
													<li class="nav-item" role="presentation">
														<a class="nav-link <?php if($tab_name=='primaryprofile'){echo "active";} ?>" data-bs-toggle="tab" href="#primaryprofile" role="tab" aria-selected="false">
															<div class="col">
																<button type="button" class="btn bg-primary px-5"> Interest Rate </button>
															</div>
														</a>
													</li>
												<?php }?>
											<li class="nav-item" role="presentation">
												<a class="nav-link" role="tab" aria-selected="false">
													<div class="col">
														<button type="button" class="btn bg-disabled px-5"> Principal Paid </button>
													</div>
												</a>
											</li>
											<li class="nav-item" role="presentation">
												<a class="nav-link" role="tab" aria-selected="false">
													<div class="col">
														<button type="button" class="btn bg-disabled px-5"> Annual Income </button>
													</div>
												</a>
											</li>

									</div>
									<!--end row-->
								</div>
							</div>
						</div>

						<div class="tab-content py-3">

							<?php 
								if ($this->session->userdata("user_type")==1) {
									$user_id = $this->session->userdata("user_id");
									$this->db->select("*");
							        $this->db->from("user_access");
							        $this->db->where("user_id", $user_id);
							        $query = $this->db->get();
							        $user_access = $query->result_array();
							        $i=1;
							        foreach ($user_access as $value) {?>

										<div class="tab-pane fade show <?php if($tab_name == $value['access_tab']) echo "active"; ?>" id="<?php echo $value['access_tab']; ?>" role="tabpanel">
											<!-- <div class="row">
												<div class="col-md-6 col-12 col-lg-7">

													<div class="row">

														<div class="col-md-4">
															<div class="bca" style="padding-top: 30px;">
																<h2> Signals >> </h2>
															</div>
														</div>


														<div class="col-md-8">
															<div class="card radius-10 bg-danger bg-gradient">
																<div class="card-body" style="padding:0px;">
																	<div class="d-flex align-items-center">

																		<div class="text-white font-35">
																			<div class="widgets-icons rounded-circle mx-auto bg-light-danger text-danger mb-3" id="danc">
																			</div>
																		</div>

																		<div class="abcd">
																			<p>Total Income</p>
																			<h3> Virgil Abloh’s Off-White is a streetwear-inspired collection </h3>
																			<p>4.5.2020</p>
																		</div>

																	</div>
																</div>
															</div>

														</div>

													</div>
												</div>



												<div class="col-md-6 col-12 col-lg-5">
													<div class="card radius-10">
														<div class="card-body">
															<div class="d-flex align-items-center p-2">
																<div class="font-22 text-primary"> <i class="fadeIn animated bx bx-grid-small"></i>
																</div>
																<div class="ms-2"><b>Utilites Spend </b>is trending downward in: FL state</div>
															</div>
														</div>

													</div>
												</div>

											</div> -->


											<div class="card">
												<div class="breadcrumb pe-3">
													<h6 class="mb-0" id="hed"> View Signals </h6>
												</div>

												<div class="card-body">
													<div class="row">
														<div class="col-12">
															<button type="button" class="btn bg-primary px-5" onclick="default_noti()" style="width:100%"> <?php echo $value['tab_name']; ?> </button>
															<div class="card-body">
																<iframe height="520px" width="100%" src="<?php echo base_url(''); ?>assets/admin_assets/<?php if($value['tab_name']=='Loan Amount'){$page_no=1;echo "timeseries_dashboard";}else{$page_no=2;echo "int_rate_anomalies";} ?>.html"></iframe>
																<button type="button" class="btn btn-success px-5" onclick="location.href='<?php echo base_url('realtionship_manager/RManager_Dashboard/causal/'.$page_no); ?>'">Understand Causal</button>
															</div>
														</div>
													</div>
													<!--end row-->

													<div class="row">
														<div class="col-md-6">


														</div>
													</div>
												</div>
											</div>
										</div>



							    <?php     }
								}else{?>
									<div class="tab-pane fade show <?php if($tab_name=='primaryhome'){echo "active";} ?>" id="primaryhome" role="tabpanel">
										<!-- <div class="row">
											<div class="col-md-6 col-12 col-lg-7">

												<div class="row">

													<div class="col-md-4">
														<div class="bca" style="padding-top: 30px;">
															<h2> Signals >> </h2>
														</div>
													</div>


													<div class="col-md-8">
														<div class="card radius-10 bg-danger bg-gradient">
															<div class="card-body" style="padding:0px;">
																<div class="d-flex align-items-center">

																	<div class="text-white font-35">
																		<div class="widgets-icons rounded-circle mx-auto bg-light-danger text-danger mb-3" id="danc">
																		</div>
																	</div>

																	<div class="abcd">
																		<p>Total Income</p>
																		<h3> Virgil Abloh’s Off-White is a streetwear-inspired collection </h3>
																		<p>4.5.2020</p>
																	</div>

																</div>
															</div>
														</div>

													</div>

												</div>
											</div>



											<div class="col-md-6 col-12 col-lg-5">
												<div class="card radius-10">
													<div class="card-body">
														<div class="d-flex align-items-center p-2">
															<div class="font-22 text-primary"> <i class="fadeIn animated bx bx-grid-small"></i>
															</div>
															<div class="ms-2"><b>Utilites Spend </b>is trending downward in: FL state</div>
														</div>
													</div>

												</div>
											</div>

										</div> -->


										<div class="card">
											<div class="breadcrumb pe-3">
												<h6 class="mb-0" id="hed"> View Signals </h6>
											</div>

											<div class="card-body">
												<div class="row">
													<div class="col-12">
														<button type="button" class="btn bg-primary px-5" onclick="default_noti()" style="width:100%"> Loan Amount </button>
														<div class="card-body">
															<iframe height="520px" width="100%" src="<?php echo base_url(''); ?>assets/admin_assets/timeseries_dashboard.html"></iframe>
															<button type="button" class="btn btn-primary px-5" data-bs-toggle="modal" data-bs-target="#exampleLargeModal">Publish</button>
															<button type="button" class="btn btn-primary px-5" data-bs-toggle="modal" data-bs-target="#exampleLargeModal3">Un-Publish</button>
															<button type="button" class="btn btn-success px-5" onclick="location.href='<?php echo base_url('realtionship_manager/RManager_Dashboard/causal/1'); ?>'">Understand Causal</button>
														</div>
													</div>
												</div>
												<!--end row-->

												<div class="row">
													<div class="col-md-6">


													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane <?php if($tab_name=='primaryprofile'){echo "active";} ?>" id="primaryprofile" role="tabpanel">
										<!-- <div class="row">
											<div class="col-md-6 col-12 col-lg-7">

												<div class="row">

													<div class="col-md-4">
														<div class="bca" style="padding-top: 30px;">
															<h2> Signals >> </h2>
														</div>
													</div>


													<div class="col-md-8">
														<div class="card radius-10 bg-danger bg-gradient">
															<div class="card-body" style="padding:0px;">
																<div class="d-flex align-items-center">

																	<div class="text-white font-35">
																		<div class="widgets-icons rounded-circle mx-auto bg-light-danger text-danger mb-3" id="danc">
																		</div>
																	</div>

																	<div class="abcd">
																		<p>Total Income</p>
																		<h3> Virgil Abloh’s Off-White is a streetwear-inspired collection </h3>
																		<p>4.5.2020</p>
																	</div>

																</div>
															</div>
														</div>

													</div>

												</div>
											</div>



											<div class="col-md-6 col-12 col-lg-5">
												<div class="card radius-10">
													<div class="card-body">
														<div class="d-flex align-items-center p-2">
															<div class="font-22 text-primary"> <i class="fadeIn animated bx bx-grid-small"></i>
															</div>
															<div class="ms-2"><b>Utilites Spend </b>is trending downward in: FL state</div>
														</div>
													</div>

												</div>
											</div>

										</div> -->


										<div class="card">
											<div class="breadcrumb pe-3">
												<h6 class="mb-0" id="hed"> View Signals </h6>
											</div>

											<div class="card-body">
												<div class="row">
													<div class="col-12">
														<button type="button" class="btn bg-primary px-5" onclick="default_noti()" style="width:100%"> Interest Rate </button>
														<div class="card-body">
															<iframe height="520px" width="100%" src="<?php echo base_url(''); ?>assets/admin_assets/int_rate_anomalies.html"></iframe>
															<button type="button" class="btn btn-primary px-5" data-bs-toggle="modal" data-bs-target="#exampleLargeModal2">Publish</button>
															<button type="button" class="btn btn-primary px-5" data-bs-toggle="modal" data-bs-target="#exampleLargeModal4">Un-Publish</button>
															<button type="button" class="btn btn-success px-5" onclick="location.href='<?php echo base_url('realtionship_manager/RManager_Dashboard/causal/2'); ?>'">Understand Causal</button>
														</div>
													</div>
												</div>
												<!--end row-->

												<div class="row">
													<div class="col-md-6">


													</div>
												</div>
											</div>
										</div>
									</div>
								<?php }?>


							
						</div>
					</div>

				</div>
				<!--end row-->

				<div class="col">
					<!-- Button trigger modal -->
					<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleLargeModal">Large Modal</button> -->
					<!-- Modal -->
					<div class="modal fade" id="exampleLargeModal" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Add User</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<form action="<?php echo base_url('realtionship_manager/RManager_Dashboard/insert'); ?>" method="post" class="noform">

										<div class="tab-content">
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group row">
														<label class="modal_label col-sm-3 col-form-label">Email *</label>
														<div class="col-sm-7">
														<select class="form-control" name="user_id" id="exampleFormControlSelect1">
															<?php foreach ($users as $value) {?>
															<option value="<?php echo $value['user_id']; ?>"><?php echo $value['user_email']; ?></option>
															<?php }?>															
														</select>	
														<input name="user_password" value="123" type="hidden">	
														<input name="access_tab" value="primaryhome" type="hidden">	
														<input name="tab_name" value="Loan Amount" type="hidden">			
														</div>										
													</div>
												</div>												
											</div>
											<div class="login-buttonblock mt-4">
												<button class="btn btn-info px-5" type="submit">Save</button>
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>

									</form>

								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col">
					<!-- Button trigger modal -->
					<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleLargeModal">Large Modal</button> -->
					<!-- Modal -->
					<div class="modal fade" id="exampleLargeModal2" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Add User</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<form action="<?php echo base_url('realtionship_manager/RManager_Dashboard/insert'); ?>" method="post" class="noform">

										<div class="tab-content">
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group row">
														<label class="modal_label col-sm-3 col-form-label">Email *</label>
														<div class="col-sm-7">
														<select class="form-control" name="user_id" id="exampleFormControlSelect1">
															<?php foreach ($users as $value) {?>
															<option value="<?php echo $value['user_id']; ?>"><?php echo $value['user_email']; ?></option>
															<?php }?>										
														</select>	
														<input name="user_password" value="123" type="hidden">		
														<input name="access_tab" value="primaryprofile" type="hidden">		
														<input name="tab_name" value="Interest Rate" type="hidden">	
														</div>										
													</div>
												</div>												
											</div>
											<div class="login-buttonblock mt-4">
												<button class="btn btn-info px-5" type="submit">Save</button>
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>

									</form>

								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col">
					<!-- Modal -->
					<div class="modal fade" id="exampleLargeModal3" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">UnPublish</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<form action="<?php echo base_url('realtionship_manager/RManager_Dashboard/delete'); ?>" method="post" class="noform">

										<div class="tab-content">
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group row">
														<label class="modal_label col-sm-3 col-form-label">Email *</label>
														<div class="col-sm-7">
															<select class="form-control" name="user_id" id="exampleFormControlSelect1">
																<?php foreach ($users as $value) {?>
																	<option value="<?php echo $value['user_id']; ?>"><?php echo $value['user_email']; ?></option>
																<?php }?>
															</select>
															<input name="user_password" value="123" type="hidden">
															<input name="access_tab" value="primaryhome" type="hidden">
															<input name="tab_name" value="Loan Amount" type="hidden">
														</div>
													</div>
												</div>
											</div>
											<div class="login-buttonblock mt-4">
												<button class="btn btn-info px-5" type="submit">Save</button>
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>

									</form>

								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col">
					<!-- Modal -->
					<div class="modal fade" id="exampleLargeModal4" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">UnPublish</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<form action="<?php echo base_url('realtionship_manager/RManager_Dashboard/delete'); ?>" method="post" class="noform">

										<div class="tab-content">
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group row">
														<label class="modal_label col-sm-3 col-form-label">Email *</label>
														<div class="col-sm-7">
															<select class="form-control" name="user_id" id="exampleFormControlSelect1">
																<?php foreach ($users as $value) {?>
																	<option value="<?php echo $value['user_id']; ?>"><?php echo $value['user_email']; ?></option>
																<?php }?>
															</select>
															<input name="user_password" value="123" type="hidden">
															<input name="access_tab" value="primaryprofile" type="hidden">
															<input name="tab_name" value="Interest Rate" type="hidden">
														</div>
													</div>
												</div>
											</div>
											<div class="login-buttonblock mt-4">
												<button class="btn btn-info px-5" type="submit">Save</button>
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>

									</form>

								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!--end page wrapper -->

		<script>
			function addadd() {

				lockModal('addaddress')

				showModal('addaddress')
			}
		</script>