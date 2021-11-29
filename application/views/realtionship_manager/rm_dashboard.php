<!--wrapper-->
<div class="wrapper">



	<!--start page wrapper -->
	<div class="page-wrapper">
		<div class="page-content">

			<div class="row">



				<div class="col-12 col-lg-2">
					<!--sidebar wrapper -->
					<div class="sidebar-wrapper" data-simplebar="true">

						<div class="leftt">
							<div class="bre" style="font-size: 28px;"> Single <br>Finder</div>

						</div>

						<div class="bottomm">
							<div class="bre"> Current <br> Timeframe</div>
							<a class="nav-link" id="tabo" href="#">As of June 2021 </a>
						</div>

						<div class="bottomm">
							<div class="bre"> Choose <br>previous</br> signals</div>
							<a class="nav-link" id="tabo" href="#">As of XXX </a>
						</div>

						<div class="bottomm">
							<div class="bre"><i class="bx bx-log-out"></i> <span style="cursor: pointer;" onclick="location.href='<?php echo base_url('Login/logout'); ?>'">Logout</span></div>
						</div>

					</div>
					<!--end sidebar wrapper -->
				</div>


				<div class="col-12 col-lg-10">
					<div class="row">

						<div class="col-12 col-lg-12">

							<div class="card">
								<div class="breadcrumb pe-3">
									<h6 class="mb-0" id="hed"> Pick focus area </h6>
								</div>

								<div class="card-body">
									<div class="row row-cols-auto g-3">
										<ul class="nav nav-tabs nav-primary" role="tablist">
											<li class="nav-item" role="presentation">
												<a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab" aria-selected="true">
													<div class="col">
														<button type="button" class="btn bg-primary px-5"> Loan Amount </button>
													</div>
												</a>
											</li>
											<li class="nav-item" role="presentation">
												<a class="nav-link" data-bs-toggle="tab" href="#primaryprofile" role="tab" aria-selected="false">
													<div class="col">
														<button type="button" class="btn bg-primary px-5"> Interest Rate </button>
													</div>
												</a>
											</li>
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
							<div class="tab-pane fade show active" id="primaryhome" role="tabpanel">
								<div class="row">
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

								</div>


								<div class="card">
									<div class="breadcrumb pe-3">
										<h6 class="mb-0" id="hed"> Pick the signal and publish </h6>
									</div>

									<div class="card-body">
										<div class="row">
											<div class="col-12">
												<button type="button" class="btn bg-primary px-5" onclick="default_noti()" style="width:100%"> Loan Amount </button>
												<div class="card-body">
													<iframe height="520px" width="100%" src="<?php echo base_url(''); ?>assets/admin_assets/home_ownership.html"></iframe>
													<button type="button" class="btn btn-primary px-5" data-bs-toggle="modal" data-bs-target="#exampleLargeModal">Publish</button>
													<button type="button" class="btn btn-success px-5" onclick="location.href='<?php echo base_url(''); ?>assets/admin_assets/cluster.html'">Understand Causal</button>
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
							<div class="tab-pane" id="primaryprofile" role="tabpanel">
								<div class="row">
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

								</div>


								<div class="card">
									<div class="breadcrumb pe-3">
										<h6 class="mb-0" id="hed"> Pick the signal and publish </h6>
									</div>

									<div class="card-body">
										<div class="row">
											<div class="col-12">
												<button type="button" class="btn bg-primary px-5" onclick="default_noti()" style="width:100%"> Interest Rate </button>
												<div class="card-body">
													<iframe height="520px" width="100%" src="<?php echo base_url(''); ?>assets/admin_assets/fico_range_low.html"></iframe>
													<button type="button" class="btn btn-primary px-5" data-bs-toggle="modal" data-bs-target="#exampleLargeModal">Publish</button>
													<button type="button" class="btn btn-success px-5" onclick="location.href='<?php echo base_url(''); ?>assets/admin_assets/cluster.html'">Understand Causal</button>
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
														<select class="form-control" name="user_email" id="exampleFormControlSelect1">
															<option value="bank@gmail.com">bank@gmail.com</option>
															<option value="bank2@gmail.com">bank2@gmail.com</option>															
														</select>	
														<input name="user_password" value="123" type="hidden">			
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