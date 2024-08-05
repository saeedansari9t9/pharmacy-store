<?php
include("includes/header.php");
?>

		<div class="content-page">
			<div class="content">

				<!-- Start Content-->
				<div class="container-fluid">

					<div class="row">
						<div class="col-xl-4">
							<div class="card overflow-hidden border-top-0">
								<div class="progress progress-sm rounded-0 bg-light" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar bg-primary" style="width: 90%"></div>
								</div>
								<div class="card-body">
									<div class="d-flex align-items-center justify-content-between">
										<div class="">
											<p class="text-muted fw-semibold fs-16 mb-1">Daily average orders</p>
											<p class="text-muted mb-4">
												<span class="badge bg-success-subtle text-success">
													<i class="bi bi-graph-up-arrow me-1"></i> 1.33%
												</span>
												vs last month
											</p>
										</div>
										<div class="avatar-sm mb-4">
											<div class="avatar-title bg-primary-subtle text-primary fs-24 rounded">
												<i class="bi bi-receipt"></i>
											</div>
										</div>
									</div>
									<div class="d-flex flex-wrap flex-lg-nowrap justify-content-between align-items-end">
										<h3 class="mb-0 d-flex"><i class="bi bi-currency-dollar"></i>1,226.71k </h3>
										<div class="d-flex align-items-end h-100">
											<div id="daily-orders" data-colors="#007aff"></div>
										</div>
									</div>
								</div><!-- end card-body -->
							</div><!-- end card -->
						</div><!-- end col -->

						<div class="col-xl-4">
							<div class="card overflow-hidden border-top-0">
								<div class="progress progress-sm rounded-0 bg-light" role="progressbar"
									aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar bg-dark" style="width: 40%"></div>
								</div>
								<div class="card-body">
									<div class="d-flex align-items-center justify-content-between">
										<div class="">
											<p class="text-muted fw-semibold fs-16 mb-1">Active users</p>
											<p class="text-muted mb-4"><span class="badge bg-danger-subtle text-danger"><i class="bi bi-graph-down-arrow me-1"></i> 5.27%</span> vs last
												month
											</p>
										</div>
										<div class="avatar-sm mb-4">
											<div class="avatar-title bg-dark-subtle text-dark fs-24 rounded">
												<i class="bi bi-people"></i>
											</div>
										</div>
									</div>
									<div class="d-flex flex-wrap flex-lg-nowrap justify-content-between align-items-end">
										<h3 class="mb-0 d-flex"><i class="bi bi-person"></i> 1,226.71k </h3>
										<div class="d-flex align-items-end h-100">
											<div id="new-leads-chart" data-colors="#404040"></div>
										</div>
									</div>
								</div><!-- end card-body -->
							</div><!-- end card -->
						</div><!-- end col -->

						<div class="col-xl-4">
							<div class="card overflow-hidden border-top-0">
								<div class="progress progress-sm rounded-0 bg-light" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar bg-danger" style="width: 60%"></div>
								</div>
								<div class="card-body">
									<div class="d-flex align-items-center justify-content-between">
										<div class="">
											<p class="text-muted fw-semibold fs-16 mb-1">Booked Revenue</p>
											<p class="text-muted mb-4">
												<span class="badge bg-success-subtle text-success"><i
														class="bi bi-graph-up-arrow me-1"></i> 11.8%</span>
												vs last month
											</p>
										</div>
										<div class="avatar-sm mb-4">
											<div class="avatar-title bg-danger-subtle text-danger fs-24 rounded">
												<i class="bi bi-clipboard-data"></i>
											</div>
										</div>
									</div>
									<div class="d-flex flex-wrap flex-lg-nowrap justify-content-between align-items-end">
										<h3 class="mb-0 d-flex"><i class="bi bi-currency-dollar"></i>12,029.71k </h3>
										<div class="d-flex align-items-end h-100">
											<div id="booked-revenue-chart" data-colors="#bb3939"></div>
										</div>
									</div>
								</div><!-- end card-body -->
							</div><!-- end card -->
						</div><!-- end col -->
					</div><!-- end row -->

					
					<div class="row">
							<!-- <div class="col-xxl-4 order-1 order-lg-2">
								<div class="card">
									<div class="card-header d-flex align-items-center">
										<div class="flex-grow-1">
											<h4 class="card-title">Orders Status</h4>
											<p class="text-muted fw-semibold mb-0">Your Orders</p>
										</div>
										<div class="dropdown">
											<a href="#" class="dropdown-toggle arrow-none card-drop"
												data-bs-toggle="dropdown" aria-expanded="false">
												<i class="ri-more-2-fill"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
												<a href="javascript:void(0);" class="dropdown-item">Export Report</a>
												<a href="javascript:void(0);" class="dropdown-item">Profit</a>
												<a href="javascript:void(0);" class="dropdown-item">Action</a>
											</div>
										</div>
									</div>
									<div class="card-body p-0">
										<div class="timeline-alt p-3">
											<div class="timeline-item">
												<i class="mdi mdi-upload bg-info-subtle text-info timeline-icon"></i>
												<div class="timeline-item-info">
													<a href="javascript:void(0);"
														class="text-info fw-bold mb-1 d-block">You sold an item</a>
													<small>Paul Burgess just purchased “Hyper - Admin
														Dashboard”!</small>
													<p class="mb-0 pb-2">
														<small class="text-muted">5 minutes ago</small>
													</p>
												</div>
											</div>

											<div class="timeline-item">
												<i
													class="mdi mdi-airplane bg-primary-subtle text-primary timeline-icon"></i>
												<div class="timeline-item-info">
													<a href="javascript:void(0);"
														class="text-primary fw-bold mb-1 d-block">Product on the
														Bootstrap Market</a>
													<small>Dave Gamache added
														<span class="fw-bold">Admin Dashboard</span>
													</small>
													<p class="mb-0 pb-2">
														<small class="text-muted">30 minutes ago</small>
													</p>
												</div>
											</div>

											<div class="timeline-item">
												<i
													class="mdi mdi-microphone bg-info-subtle text-info timeline-icon"></i>
												<div class="timeline-item-info">
													<a href="javascript:void(0);"
														class="text-info fw-bold mb-1 d-block">Robert Delaney</a>
													<small>Send you message
														<span class="fw-bold">"Are you there?"</span>
													</small>
													<p class="mb-0 pb-2">
														<small class="text-muted">2 hours ago</small>
													</p>
												</div>
											</div>

											<div class="timeline-item">
												<i
													class="mdi mdi-upload bg-primary-subtle text-primary timeline-icon"></i>
												<div class="timeline-item-info">
													<a href="javascript:void(0);"
														class="text-primary fw-bold mb-1 d-block">Audrey Tobey</a>
													<small>Uploaded a photo
														<span class="fw-bold">"Error.jpg"</span>
													</small>
													<p class="mb-0 pb-2">
														<small class="text-muted">14 hours ago</small>
													</p>
												</div>
											</div>

											<div class="timeline-item">
												<i class="mdi mdi-upload bg-info-subtle text-info timeline-icon"></i>
												<div class="timeline-item-info">
													<a href="javascript:void(0);"
														class="text-info fw-bold mb-1 d-block">You sold an item</a>
													<small>Paul Burgess just purchased “Hyper - Admin
														Dashboard”!</small>
													<p class="mb-0 pb-2">
														<small class="text-muted">16 hours ago</small>
													</p>
												</div>
											</div>

											<div class="timeline-item">
												<i
													class="mdi mdi-airplane bg-primary-subtle text-primary timeline-icon"></i>
												<div class="timeline-item-info">
													<a href="javascript:void(0);"
														class="text-primary fw-bold mb-1 d-block">Product on the
														Bootstrap Market</a>
													<small>Dave Gamache added
														<span class="fw-bold">Admin Dashboard</span>
													</small>
													<p class="mb-0 pb-2">
														<small class="text-muted">22 hours ago</small>
													</p>
												</div>
											</div>

											<div class="timeline-item">
												<i
													class="mdi mdi-microphone bg-info-subtle text-info timeline-icon"></i>
												<div class="timeline-item-info">
													<a href="javascript:void(0);"
														class="text-info fw-bold mb-1 d-block">Robert Delaney</a>
													<small>Send you message
														<span class="fw-bold">"Are you there?"</span>
													</small>
													<p class="mb-0">
														<small class="text-muted">2 days ago</small>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div> -->

						<div class="col-xxl-8 order-2 order-lg-1">
							<div class="card">
								<div class="card-header d-flex justify-content-between flex-wrap align-items-center">
									<div>
										<h4 class="card-title">Recent Order</h4>
										<p class="text-muted fw-semibold mb-0">Order Based on Payment</p>
									</div>

									<div class="">
										<a class="btn btn-outline-secondary me-2">
											<i class="mdi mdi-filter-outline pe-1 lh-1"></i>Filter
										</a>
										<a class="btn btn-outline-primary">
											See All
										</a>

									</div>
								</div>
								<div class="card-body p-0">
									<div class="table-responsive">
										<table class="table align-middle mb-0">
											<thead>
												<tr class="table-light text-capitalize">
													<th>Customer</th>
													<th>Price</th>
													<th>Location</th>
													<th>Requested by</th>
													<th>Order</th>
												</tr>
											</thead>
											<!-- end table heading -->

											<tbody>
												<tr>
													<td>
														<div class="d-flex align-items-center">
															<div class="avatar-sm">
																<img src="assets/images/users/avatar-9.jpg" alt=""
																	class="img-fluid rounded-circle">
															</div>
															<div class="ps-2">
																<h5 class="mb-1">Dana Graves</h5>
																<p class="text-muted fs-6 mb-0">ORD-1562792771583</p>
															</div>
														</div>
													</td>
													<td>
														<span class="fw-semibold">$98.59</span>
													</td>
													<td>
														<h5 class="mb-0 ms-1">America</h5>
													</td>
													<td>
														<h5 class="mb-0">Wade Warren</h5>
													</td>
													<td>
														<span class="badge bg-primary-subtle text-primary">Pending
															Approval</span>
													</td>

												</tr>

												<tr>
													<td>
														<div class="d-flex align-items-center">
															<div class="avatar-sm">
																<img src="assets/images/users/avatar-3.jpg" alt=""
																	class="img-fluid rounded-circle">
															</div>
															<div class="ps-2">
																<h5 class="mb-1 text-capitalize">Floyd Smith</h5>
																<p class="text-muted fs-6 mb-0">ORD-1562792772493</p>
															</div>
														</div>
													</td>
													<td>
														<span class="fw-semibold">$32.59</span>
													</td>
													<td>
														<h5 class="mb-0 ms-1">Russia</h5>
													</td>
													<td>
														<h5 class="mb-0">Esther Howard</h5>
													</td>
													<td>
														<span class="badge bg-danger-subtle text-danger">Cancelled
															Requested</span>
													</td>
												</tr>

												<tr>
													<td>
														<div class="d-flex align-items-center">
															<div class="avatar-sm">
																<img src="assets/images/users/avatar-6.jpg" alt=""
																	class="img-fluid rounded-circle">
															</div>
															<div class="ps-2">
																<h5 class="mb-1">Fernanda Azevedo</h5>
																<p class="text-muted fs-6 mb-0">ORD-1562792771583</p>
															</div>
														</div>
													</td>
													<td>
														<span class="fw-semibold">$18.24</span>
													</td>
													<td>
														<h5 class="mb-0 ms-1">Brazil</h5>
													</td>
													<td>
														<h5 class="mb-0">Brooklyn...</h5>
													</td>
													<td>
														<span
															class="badge bg-success-subtle text-success">Approved</span>
													</td>
												</tr>
											</tbody>
											<!-- end table body -->
										</table>
										<!-- end table -->
									</div>
								</div>
							</div>
						</div><!-- end col-->
					</div>
					<!-- end row -->
				</div>
				<!-- end container -->



<?php
include("includes/footer.php");
?>
<!-- <div class="card border-0 bg-black">
	<div class="card-body pb-0">
		<div class="d-flex justify-content-between">
			<div>
				<p class="text-white fs-14 text-capitalize mb-2 fw-medium">Total revenue</p>
				<h3 class="text-white mb-2 fw-semibold">$24,590.43</h3>
			</div>
			<div
				class="avatar-sm bg-white text-black d-flex align-items-center justify-content-center">
				<i class="bi bi-shop-window fs-24"></i>
			</div>
		</div>
	</div>
	<div id="revenue-spark" class="apex-charts" data-colors="#ffffff"></div>
</div> -->