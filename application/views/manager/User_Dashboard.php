
	<!--wrapper-->
	<div class="wrapper">
	
	 
		
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
				   
				   <div class="col-12 col-lg-8">
                      <div class="card radius-10">
						  <div class="card-body">
							<div class="d-flex align-items-center">
								<div class="breadcrumb pe-3">
									<h6 class="mb-0"> Risk </h6>
									<p> SPEND BY INDUSTRY BENCHMARK <br> UPDATED DEC. 2019 </p>
								</div>

                         <ul class="nav nav-pills mb-3" role="tablist">
                              <li class="nav-item" role="presentation">
										<a class="nav-link"  id="tabb" href="#">
											<div class="d-flex align-items-center">												 
												<div class="tab-title"> coBrand Air </div>
											</div>
										</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" id="tabb" href="#">
											<div class="d-flex align-items-center">												 
												<div class="tab-title"> 400-550 </div>
											</div>
										</a>
									</li>
									
									<a  class="nav-item" href="javascript:;" class=""><i class="bx bxs-edit"></i></a>
									
								</ul>
								
							</div>
						  
							<div class="card-body">
								<div class="demodemo" id="chart222">
									<iframe height="500px" width="100%" src="<?php echo base_url('');?>assets/admin_assets/demo_chart.html"></iframe> 
								</div>
							</div>
						 
						  </div>
					  </div>
					  </div>
					  
				   <div class="col-12 col-lg-4">
                       <div class="card radius-10">
						   <div class="card-body">
							<div class="d-flex align-items-center">
								<div class="breadcrumb pe-3">
									<h6 class="mb-0"> Wallet Share </h6>
									<p> % of total customer spend on <br> on us cards for 800+ risk segment </p>
								</div>
							</div>
						 
							<div class="card-body">
								<div id="chart12"></div>
							</div>
					 
						 </div>
						   <ul class="list-group list-group-flush">
							<li class="center1"> 4% last list Q2 81% 
							</li>
							</li>
						</ul>
					   </div>
				   </div>					  
					  

			   <div class="col-12 col-lg-6">				 	
                     <div class="card">
					 <div class="row">								
					  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3" style="padding:5px 24px">
					    <div class="breadcrumb pe-3">Signals </div>
					    <div class="ps-3">
						 </div>
					       <div class="ms-auto">
						      <a href="javascript:;" class=""><i class="bx bxs-edit"></i></a>
					          </div>
				              </div>
				  
								 
                          <div class="row">								
                           
								 <div class="col-md-2">
								  <div class="text-white ms-auto" style="padding-top: 30px;">
								   <div class="widgets-icons rounded-circle mx-auto bg-light-danger text-danger mb-3"> 
									  </div>
									  </div>
								  </div>
								  <div class="col-md-7">
									<div class="card-body">
									   <p class="para"> 2007 Loan amount anomaly in June and July : More loans were issued in the FICO score segment 640 to 680 during the anomaly months compared to non-anomaly months [ Score : 0.96] </p>
									  <p class="para"> <?php echo date("d.m.Y") ?></p>
									 
									</div>
								  </div>

								 <div class="col-md-3">
								 <div class="bca" style="padding-top: 50px;">
								  <a href="#" class="cardlink"> Learn More </a>
								  </div>
                                    </div>								  
								  
								</div>

                          <div class="row">								
                           
								 <div class="col-md-2">
								  <div class="text-white ms-auto" style="padding-top: 30px;">
								   <div id="ble" class="widgets-icons rounded-circle mx-auto bg-light-danger text-danger mb-3"> 
									  </div>
									  </div>
								  </div>
								  <div class="col-md-7">
									<div class="card-body">
									   <p class="para">2007 Loan amount anomaly in June and July : More loans were issued in the category A,B, C during the anomaly months compared to non-anomaly months [ Score : 0.84]  </p>
									  <p class="para"> <?php echo date("d.m.Y",strtotime(' -1 day')); ?> </p>
									 
									</div>
								  </div>

								 <div class="col-md-3">
								 <div class="bca" style="padding-top: 50px;">
								  <a href="#" class="cardlink"> Learn More </a>
								  </div>
                                    </div>								  
								  
								</div>


								  
								</div>
							  </div>
  			                 </div>
							 
							 


			   <div class="col-12 col-lg-6">				 	
                     <div class="card">
					 <div class="row">								
					  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3" style="padding:5px 24px">
					    <div class="breadcrumb pe-3"> Credit Line </div>
					    <div class="ps-3">
						 </div>
					       <div class="ms-auto">
						      <a href="javascript:;" class=""><i class="bx bxs-edit"></i></a>
					          </div>
				              </div>
				  
								 
                             <div class="row" style="padding-bottom: 20px;">								
                           
								 <div class="col-md-5">
								  <div class="text-white ms-auto" style="padding-top: 30px;">
								    <h6> COBRAND  AIR </h6>
									
									<br>
									 <h6 style="margin-top: 22px;"> COBRAND  RETAIL </h6>
									  </div>
								  </div>
								  

								 <div class="col-md-7">
								 
								 <div class="bca" style="padding-top: 20px;">						 
  <div class="progress" style="height:20px">
    <div class="progress-bar" style="width:90%;height:20px;background: #000">11K</div>
  </div>
 
  <div class="progress" style="height:30px">
    <div class="progress-bar" style="width:100%;height:30px">20K</div>
  </div>
  
  <br>
  
   <div class="progress" style="height:20px">
    <div class="progress-bar" style="width:90%;height:20px;background: #000">11K</div>
  </div>
 
  <div class="progress" style="height:30px">
    <div class="progress-bar" style="width:100%;height:30px">20K</div>
  </div> 
  
  
		   </div>
			   
                                   </div>								  
								  
								</div>

                      


                      							
								  
								</div>
							  </div>
  			                 </div>
							 
							 
							 
							 
				  
 
				</div><!--end row-->

 
 
 

			</div>
		</div>
		<!--end page wrapper -->