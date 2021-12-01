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
					<a href="<?php echo base_url('Access'); ?>">
						<div class="parent-icon"> <i class="bx bx-info-circle"></i>
						</div>						 
						<div class="menu-title"><span> </span> <br> <span class="heada"> Anomaly timeframe identified for Average loan amount : June 2007, July 2007, May 2008 - Aug 2008, Aug - Oct 2012 and in 2016 </span>  </div>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url('Access'); ?>">
						<div class="parent-icon"> <i class='bx bx-bookmark-heart'></i>
						</div>						 
						<div class="menu-title"><span> </span> <br> <span class="heada"> 70% of loans issued in A, B and C category in June 2007 and July 2007, vs Aug to Dec 2007, where more loans were issued in D - G category </span></div>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url('Access'); ?>">
						<div class="parent-icon"> <i class="bx bx-info-circle"></i>
						</div>						 
						<div class="menu-title"><span> </span> <br> <span class="heada"> Loan issued distribution is more between 640 - 680 during non-outlier month (Aug to Dec 2007) vs outlier months were the distribution is more in the range of 660 - 710 </span></div>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url('Access'); ?>" class="has-arrow">
						<div class="parent-icon">  <i class="bx bxs-check-circle"></i>
						</div>						 
						<div class="menu-title"><span> </span> <br> <span class="heada"> During outlier months in 2007, about 53% of loans were issued in credit card, other', education and home improvement categories, compared to non-outlier months </span> </div>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url('Access'); ?>" class="has-arrow">
						<div class="parent-icon"> <i class="bx bx-info-circle"></i>
						</div>						 
						<div class="menu-title"><span> </span> <br> <span class="heada"> In 2007, outlier months had more loans from NY, FL and MA compared to non-outlier period that is driven by NY and FL </span></div>
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
				
				
                 <div class="col-12 col-lg-10">
				   <div class="row">
				   
				    <div class="col-12 col-lg-12">
							
				   <div class="card">
				   <div class="breadcrumb pe-3">
					 	<h6 class="mb-0" id="hed"> Pick focus area </h6>
						 </div>
						 
					<div class="card-body">
						<div class="row row-cols-auto g-3">
							<div class="col">
								<button type="button" class="btn bg-primary px-5" onclick="default_noti()"> Loan Amount </button>
							</div>

							<div class="col">
								<button type="button" class="btn bg-primary px-5" onclick="default_noti()"> Interest Rate </button>
							</div>
							
							<div class="col">
								<button type="button" class="btn btn-info px-5" onclick="warning_noti()">  Principal Paid </button>
							</div>
							<div class="col">
								<button type="button" class="btn btn-info px-5" onclick="error_noti()">  Annual Income </button>
							</div>
							 
						</div>
						<!--end row-->
					</div>
				</div>
				</div>
				

 
				      <div class="col-12 col-lg-7">
				   
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
										<h3> Virgil Abloh�s Off-White is a streetwear-inspired collection </h3>
										<p>4.5.2020</p>
									</div>

								  </div>
							     </div>
					         	</div>
						 
								  </div>
							 								  
								</div>
					          </div>
					  
					   
					  
				   <div class="col-12 col-lg-5">
                       <div class="card radius-10">
						   <div class="card-body">
							<div class="d-flex align-items-center p-2">
							<div class="font-22 text-primary">	<i class="fadeIn animated bx bx-grid-small"></i>
							</div>
							<div class="ms-2"><b>Utilites Spend </b>is trending downward in: FL state</div>
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
							<div class="col-6">
								<button type="button" class="btn bg-primary px-5" onclick="default_noti()" style="width:50%"> Revenue </button>
							<div class="card-body">
							  <div id="chart4"></div>
							</div>
							</div>

							<div class="col-6">
								<button type="button" class="btn bg-primary px-5" onclick="default_noti()" style="width:50%"> Spend  </button>
							 <div class="card-body">
							  <div id="chart2"></div>
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
 
				</div><!--end row-->

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
					                            <div class="form-group">
					                             <label class="modal_label">Full name *</label>
					                               <input class="form-control" name="user_name" placeholder="Full Name" type="text" required>
					                            </div>
					                        </div>
					                       <div class="col-sm-6">
					                            <div class="form-group">
					                             <label class="modal_label">Email *</label>
					                               <input class="form-control" name="user_email" placeholder="Email" type="text" required>
					                            </div>
					                        </div>
					                       <div class="col-sm-6">
					                            <div class="form-group">
					                             <label class="modal_label">Phone Number *</label>
					                               <input class="form-control" name="user_phone" placeholder="Phone Number" type="text" required>
					                            </div>
					                        </div>
					                       <div class="col-sm-6">
					                            <div class="form-group">
					                             <label class="modal_label">Password *</label>
					                               <input class="form-control" name="user_password" value="123" type="text" readonly="">
					                            </div>
					                        </div>
					                        
					                    </div>
					                         <div class="login-buttonblock mt-4 text-center">
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
        function addadd(){

   lockModal('addaddress')
   
   showModal('addaddress')
        }        
    </script>