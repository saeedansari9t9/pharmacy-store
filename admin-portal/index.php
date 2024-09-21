<?php
include("includes/header.php");

if(!isset($_SESSION["AdminEmail"])) {
    echo "<script>alert('Please Login First.....');
	location.assign('login.php') </script>";
}

try {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch counts from the database
    $totalUsersQuery = "SELECT COUNT(*) as total FROM users";
    $totalOrdersQuery = "SELECT COUNT(*) as total FROM orders";
    $totalProductsQuery = "SELECT COUNT(*) as total FROM product";
    $totalCategoriesQuery = "SELECT COUNT(*) as total FROM category";
    $totalCompaniesQuery = "SELECT COUNT(*) as total FROM company";

    $Users = $pdo->query($totalUsersQuery);
    $Orders = $pdo->query($totalOrdersQuery);
    $Products = $pdo->query($totalProductsQuery);
    $Categories = $pdo->query($totalCategoriesQuery);
    $Companies = $pdo->query($totalCompaniesQuery);

    $totalUsersQuery = $Users->fetchColumn();
    $totalOrdersQuery = $Orders->fetchColumn();
    $totalProductsQuery = $Products->fetchColumn();
    $totalCategoriesQuery = $Categories->fetchColumn();
    $totalCompaniesQuery = $Companies->fetchColumn();
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>

		<div class="content-page">
			<div class="content">

				<!-- Start Content-->
				<div class="container-fluid">

					<div class="row">
						<div class="col-xl-4">
							<div class="card overflow-hidden border-top-0">
								<div class="progress progress-sm rounded-0 bg-light" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar bg-primary" style="width: 100%"></div>
								</div>
								<div class="card-body">
									<div class="d-flex align-items-center justify-content-between">
										<div class="">
											<h3 class="mb-1 text-primary">Total Users ( <?php echo htmlspecialchars("$totalUsersQuery") ?> )</h3>
										</div>
										<div class="avatar-sm mb-4 mt-4">
											<div class="avatar-title bg-primary-subtle text-primary fs-24 rounded">
												<!-- <i class="bi bi-receipt"></i> -->
												<i class="bi bi-people"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4">
							<div class="card overflow-hidden border-top-0">
								<div class="progress progress-sm rounded-0 bg-light" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar bg-danger" style="width: 100%"></div>
								</div>
								<div class="card-body">
									<div class="d-flex align-items-center justify-content-between">
										<div class="">
											<h3 class="mb-1 text-danger">Total Products ( <?php echo htmlspecialchars("$totalProductsQuery") ?> )</h3>
										</div>
										<div class="avatar-sm mb-4 mt-4">
											<div class="avatar-title bg-danger-subtle text-danger fs-24 rounded">
												<!-- <i class="bi bi-receipt"></i> -->
												<i class="bi bi-people"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4">
							<div class="card overflow-hidden border-top-0">
								<div class="progress progress-sm rounded-0 bg-light" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar bg-dark" style="width: 100%"></div>
								</div>
								<div class="card-body">
									<div class="d-flex align-items-center justify-content-between">
										<div class="">
											<h3 class="mb-1 text-dark">Total Categories ( <?php echo htmlspecialchars("$totalCategoriesQuery") ?> )</h3>
										</div>
										<div class="avatar-sm mb-4 mt-4">
											<div class="avatar-title bg-dark-subtle text-dark fs-24 rounded">
												<!-- <i class="bi bi-receipt"></i> -->
												<i class="bi bi-people"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4">
							<div class="card overflow-hidden border-top-0">
								<div class="progress progress-sm rounded-0 bg-light" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar bg-secondary" style="width: 100%"></div>
								</div>
								<div class="card-body">
									<div class="d-flex align-items-center justify-content-between">
										<div class="">
											<h3 class="mb-1 text-secondary">Total Companies ( <?php echo htmlspecialchars("$totalCompaniesQuery") ?> )</h3>
										</div>
										<div class="avatar-sm mb-4 mt-4">
											<div class="avatar-title bg-secondary-subtle text-secondary fs-24 rounded">
												<!-- <i class="bi bi-receipt"></i> -->
												<i class="bi bi-people"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4">
							<div class="card overflow-hidden border-top-0">
								<div class="progress progress-sm rounded-0 bg-light" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar bg-success" style="width: 100%"></div>
								</div>
								<div class="card-body">
									<div class="d-flex align-items-center justify-content-between">
										<div class="">
											<h3 class="mb-1 text-success">Total Orders ( <?php echo htmlspecialchars("$totalOrdersQuery") ?> )</h3>
										</div>
										<div class="avatar-sm mb-4 mt-4">
											<div class="avatar-title bg-success-subtle text-success fs-24 rounded">
												<!-- <i class="bi bi-receipt"></i> -->
												<i class="bi bi-people"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					
					<!-- <div class="row">
						<div class="col-xxl-12 order-2 order-lg-1">
							<div class="card">
								<div class="card-header d-flex justify-content-between flex-wrap align-items-center">
									<div>
										<h4 class="card-title">Recent Order</h4>
										<p class="text-muted fw-semibold mb-0">Order Based on Payment</p>
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
										</table>
									</div>
								</div>
							</div>
						</div>
					</div> -->
				</div>
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