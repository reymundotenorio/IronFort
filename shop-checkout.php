<!DOCTYPE html>
<html>

<!-- Mirrored from wegodesign.net/wego-theme-themeforest-html-template/shop-checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Oct 2016 05:14:13 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<title>iRONfort - Nicaragua</title>

		<!-- metas -->
		<meta charset="utf-8">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
		<!--/ metas -->

		<!-- favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
		<!--/ favicon -->

		<!-- styles -->
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/jquery.fancybox.css">
		<link rel="stylesheet" href="css/jquery.owl.carousel.css">
		<link rel="stylesheet" href="js/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="css/main.css">
		<!--/ styles -->
	</head>

	<body>

		<?php include_once "header.html"; ?>

			<!-- page intro -->
			<div class="page-intro">
				<div class="pic" style="background-image: url(pic/intro/catalog.jpg)"></div>

				<div class="grid-row clearfix">
					<div class="page-title">Shop</div>
					<div class="page-subtitle">Welcome to Wego theme. Lets start your design here</div>
					<div class="bread-crumbs"><a href="#">Home</a> - Shop - Cart</div>
				</div>
			</div>
			<!--/ page intro -->

			<!-- page content -->
			<div class="page-content">
				<div class="page-content-section">
					<div class="grid-row">
						<div class="grid-col grid-col-6">
							<!-- checkout login -->
							<div class="block block-checkout-login">
								<div class="block-head">Login</div>
								<form action="#" class="clearfix">
									<p>If you have shopped with us before, please enter your details in the boxes below. If you are a new  customer please proceed to the Billing & Shipping section.</p>

									<div class="input"><input type="text" placeholder="Email"></div><!--
									--><div class="input"><input type="text" placeholder="Password"></div>

									<button type="submit" class="button">Login</button>
								</form>
							</div>
							<!-- checkout login -->
						</div>

						<div class="grid-col grid-col-6">
							<!-- checkout coupon -->
							<div class="block block-checkout-coupon">
								<div class="block-head">Coupon Code</div>
								<form action="#" class="clearfix">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam felis quis sapien lobortis, sit amet luctus diam adipiscing. Suspendisse non mauris fringilla, rutrum.</p>

									<input type="text" placeholder="Enter your code">
									<button type="submit" class="button">Apply Coupon</button>
								</form>
							</div>
							<!-- checkout coupon -->
						</div>
					</div>

					<div class="grid-row">
						<div class="grid-col grid-col-6">
							<!-- checkout address -->
							<div class="block block-checkout-address">
								<div class="block-head">Billing Address</div>
								<label class="checkbox"><input type="checkbox"><i class="fa fa-check"></i>Create an Account</label>
								<div class="block-cont">
									<div class="select">
										<select>
											<option value="0" disabled selected>Select a Country</option>
											<option value="1">Australia</option>
											<option value="2">Belgium</option>
											<option value="3">Canada</option>
											<option value="4">Denmark</option>
											<option value="5">Egypt</option>
											<option value="6">France</option>
											<option value="7">Germany</option>
											<option value="8">Hungary</option>
										</select>
									</div>

									<div class="input-small"><input type="text" placeholder="First Name"></div><!--
									--><div class="input-small"><input type="text" placeholder="Last Name"></div>

									<div class="input"><input type="text" placeholder="Company Name"></div>
									<div class="input"><input type="text" placeholder="Address"></div>
									<div class="input"><input type="text" placeholder="Town / City"></div>
									<div class="input"><input type="text" placeholder="State / Country"></div>

									<div class="input-small"><input type="text" placeholder="Postcode / ZIP"></div><!--
									--><div class="input-small"><input type="text" placeholder="Phone"></div>
								</div>
							</div>
							<!-- checkout address -->
						</div>

						<div class="grid-col grid-col-6">
							<!-- checkout address -->
							<div class="block block-checkout-address">
								<div class="block-head">Shipping Address</div>
								<label class="checkbox"><input type="checkbox"><i class="fa fa-check"></i>Ship to Billing Address</label>
								<div class="block-cont">
									<div class="textarea">
										<textarea cols="30" rows="19" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
									</div>
								</div>
							</div>
							<!-- checkout address -->
						</div>
					</div>

					<div class="grid-row">
						<div class="grid-col grid-col-6">
							<!-- checkout order -->
							<div class="block block-checkout-order">
								<div class="block-head">Your Order</div>
								<div class="block-cont">
									<table>
										<tr>
											<td>Your item title here x 1</td>
											<td>$399</td>
										</tr>
										<tr>
											<td>Cart Subtotal</td>
											<td>$399</td>
										</tr>
										<tr>
											<td>Shipping</td>
											<td>Free Shipping</td>
										</tr>
										<tr>
											<td>Order Total Price</td>
											<td class="price">$399</td>
										</tr>
									</table>
								</div>
							</div>
							<!-- checkout order -->
						</div>
					</div>

					<div class="grid-row">
						<!-- checkout payment -->
						<div class="block block-checkout-payment">
							<div class="block-cont clearfix">
								<ul>
									<li>
										<label class="radio"><input type="radio" name="checkout-payment" checked><i></i>Direct Bank Transfer</label>
										<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order wont be shipped until the funds have cleared in our account.</p>
									</li>
									<li>
										<label class="radio"><input type="radio" name="checkout-payment"><i></i>Cheque Payment</label>
									</li>
									<li>
										<label class="radio"><input type="radio" name="checkout-payment"><i></i><img src="img/payments.png" alt="payments" width="218" height="23">Paypal</label>
									</li>
								</ul>
								<a href="#" class="button">Place Oder</a>
							</div>
						</div>
						<!-- checkout payment -->
					</div>
				</div>
			</div>
			<!--/ page content -->

				<?php include_once "footer.html" ?>
				
	</body>

<!-- Mirrored from wegodesign.net/wego-theme-themeforest-html-template/shop-checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Oct 2016 05:14:14 GMT -->
</html>
