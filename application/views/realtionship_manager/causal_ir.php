<!--start header -->
<header>
	<div class="topbar d-flex align-items-center">
		<nav class="navbar navbar-expand">
			<div class="mobile-toggle-menu" onclick="location.href='<?php echo base_url();?>'"><i class='bx bx-arrow-back'></i>
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

					<svg class="user-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" id="footer-sample-full" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512" class="iconify iconify--cil">
						<path fill="currentColor" d="M247.759 14.358L16 125.946V184h480v-58.362zM464 152H48v-5.946l200.241-96.412L464 146.362z"></path>
						<path fill="currentColor" d="M48 408h416v32H48z"></path>
						<path fill="currentColor" d="M16 464h480v32H16z"></path>
						<path fill="currentColor" d="M56 216h32v160H56z"></path>
						<path fill="currentColor" d="M424 216h32v160h-32z"></path>
						<path fill="currentColor" d="M328 216h32v160h-32z"></path>
						<path fill="currentColor" d="M152 216h32v160h-32z"></path>
						<path fill="currentColor" d="M240 216h32v160h-32z"></path>
					</svg>
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


<!--				<div class="col-12 col-lg-3">-->
<!--					sidebar wrapper -->
<!--					<div class="sidebar-wrapper" data-simplebar="true">-->
<!---->
<!---->
<!--						<h3 style="text-align: center;padding-top: 5px;;">--><?php //echo $type; ?><!--</h3>-->
<!--						<iframe height="520px" width="100%" src="--><?php //echo base_url(''); ?><!--assets/admin_assets/cluster.html"></iframe>-->
<!---->
<!--					</div>-->
<!--					end sidebar wrapper -->
<!--				</div>-->


				<div class="col-12 col-lg-12">
					<div class="row">

						<div class="col-12 col-lg-6">
							<div class="card radius-10" id="card1">
								<div class="card-body" style="margin: 10px;background: #fff;">
									<h3 style="text-align: center;padding-top: 2px;;">Key Influencers<?php //echo $type; ?></h3>
									<iframe height="750px" width="100%" src="<?php echo base_url(''); ?>assets/admin_assets/fico_range_low_12_13_14.html"></iframe>
									
								</div>
							</div>


						</div>

						<div class="col-12 col-lg-6">
							<div class="card radius-10" id="card1">
								<div class="card-body" style="margin: 10px;background: #fff;">
									<h3 style="text-align: center;padding-top: 2px;;">Explainability<?php //echo $type; ?></h3>

							    	<iframe height="750px" width="100%" src="<?php echo base_url(''); ?>assets/admin_assets/int_rate_anomalies.html"></iframe>

								</div>

							</div>
						</div>




					</div>
					<!--end row-->



				</div>
			</div>
			<!--end page wrapper -->

			<style>
				div#card1 {
					height: 600px;
					overflow: scroll;
				}
			</style>

			<!--start overlay-->
			<div class="overlay toggle-icon"></div>
			<!--end overlay-->
			<!--Start Back To Top Button-->
			<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
			<!--End Back To Top Button-->
			<footer class="page-footer">
				<p class="mb-0">Copyright © 2021. All right reserved.</p>
			</footer>
		</div>
		<!--end wrapper-->
