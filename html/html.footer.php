
</div>
</div>
</div>
<!-- container -->
<footer> <?php if(in_array('index.php', $serverHome)): ?>
<div class="footer-specials">
	<div class="container">
		<div class="row-fluid">
			<div class="span12">
			<?php for($x=1; $x<=3; $x++): ?>
				<div class="pull-left" style="padding: 10px;">
					<a><img width="280px" class="img-polaroid"
						src="<?php html::p(MCHN_DIR_ASSETS."img/bbt-sample.jpg"); ?>"
						alt=""> </a>
				</div>
				<?php endfor; ?>
			</div>
		</div>
	</div>
</div>
<div class="footer-logo-gallery">
	<div class="container">
		<div class="row-fluid">
			<div class="span12">
			<?php for($x=1; $x<=30; $x++): ?>
				<div class="pull-left" style="">
					<a><img width="155px"
						src="<?php html::p(MCHN_DIR_ASSETS."img/logo-samp.png"); ?>"
						alt=""> </a>
				</div>
				<?php endfor; ?>
			</div>
		</div>
	</div>
</div>
				<?php endif; ?>

<div class="footer-main">
	<div class="footer-bar">
		<div class="container">
			<div class="row-fluid">
				<div class="span12">
					<div class="text-headings pull-left">CONNECT WITH
						US&nbsp;&nbsp;&nbsp;</div>

					<div class="pull-left"
						style="margin-top: -5px; margin-right: 5px; width: 800px;">
						<a href="" style="margin-right: -2px;"><img width="35px"
							src="<?php html::p(MCHN_DIR_ASSETS."img/footer/social/email.jpg"); ?>"
							alt=""> </a> <a href="" style="margin-right: -2px;"><img
							width="35px"
							src="<?php html::p(MCHN_DIR_ASSETS."img/footer/social/facebook.jpg"); ?>"
							alt=""> </a> <a href="" style="margin-right: -2px;"><img
							width="35px"
							src="<?php html::p(MCHN_DIR_ASSETS."img/footer/social/twitter.jpg"); ?>"
							alt=""> </a> <a href="" style="margin-right: -2px;"><img
							width="35px"
							src="<?php html::p(MCHN_DIR_ASSETS."img/footer/social/googleplus.jpg"); ?>"
							alt=""> </a> <a href="" style="margin-right: -2px;"><img
							width="35px"
							src="<?php html::p(MCHN_DIR_ASSETS."img/footer/social/pinterest.jpg"); ?>"
							alt=""> </a> <a href="" style="margin-right: -2px;"><img
							width="35px"
							src="<?php html::p(MCHN_DIR_ASSETS."img/footer/social/skype.jpg"); ?>"
							alt=""> </a> <a href="" style="margin-right: -2px;"><img
							width="35px"
							src="<?php html::p(MCHN_DIR_ASSETS."img/footer/social/youtube.jpg"); ?>"
							alt=""> </a> <a href="" style="margin-right: -2px;"><img
							width="35px"
							src="<?php html::p(MCHN_DIR_ASSETS."img/footer/social/linkedin.jpg"); ?>"
							alt=""> </a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	$categoryArr = category::getAllCategory();
	?>
	<div class="footer-container">
		<div class="container">

			<div class="row-fluid">
				<div class="span3">
					<div class="text-headings">Categories</div>
					<ul class="nav nav-sidebar">
					<?php foreach ($categoryArr as $row): ?>
						<li><a href=""> <?php html::p(ucwords($row['name_short'])); ?> </a>
						</li>
						<?php endforeach ?>
					</ul>
				</div>
				<div class="span3">
					<div class="text-headings">Information</div>
					<ul class="nav nav-sidebar">
						<li><a href=""> Info Links Here </a> <a href="a-nursery-safe">A
								Safe Nursery</a> <a href="choose-safe-stroller">Stroller &
								Carriage</a> <a href="cars-travelling">Cars & Traveling</a> <a
							href="games-toys">Games & Toys</a> <a href="bath-time">Bath Time</a>
							<a href="high-chair">High Chair</a> <a href="playpen-safety">Playpen
								& Playard</a> <a href="around-home">Around the Home</a> <a
							href="right-car-seat">Choosing a Car Seat</a> <a
							href="customer-service">Customer Service</a> <a href="login">Order
								Tracking</a> <a href="login">Access Account</a> <a
							href="newsletter-subscription">Coupons & Newsletter</a> <a
							href="about-magento-demo-store">Store Locator</a> <a
							href="complete-check-list">Expecting Mother Checklist</a>
						</li>
					</ul>
				</div>
				<div class="span3">
					<div class="text-headings">Contact Us</div>
					<p>
						<b>Baby Bedding Town</b><br> Ore ipsum dolor sit amet, ctetuer
						adiping elit, sed diam nonummya
					</p>
					<p>
						<b>Store Hours</b><br> Tincidunt ut laoreet dolore magna
					</p>
				</div>
				<div class="span3">
					<div class="text-headings">Subscribe to Our Newsletter</div>

					<div class="input-append" style="margin-top: 15px;">
						<input class="span10" id="appendedInputButtons" type="text">
						<button class="btn" type="button">
							<i class="icon-envelope"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-bar">
		<div class="container">
			<div class="row-fluid">
				<div class="span12">
					<small>
						<p class="pull-right">
							<a href="#">Back to top</a>
						</p>
						<p>
							© 2012 BBT, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a>
						</p> </small>
				</div>
			</div>
		</div>
	</div>
</div>
<script>if (window.Stripe) $("#checkout-cc-form").show()</script>
<noscript>
	<p>JavaScript is required for the registration form.</p>
</noscript>
<script type="text/javascript">
$(document).ready(function() {
   $(".date").datepicker({ dateFormat: 'yy-mm-dd' });
});
</script> <script type="text/javascript">
      $(document).ready(function() {
        $('.sidebar-parent').click(function() {
            parentId = $(this).attr('id');
            $('ul#nav-child-'+parentId+'').toggle('fast');
        });
      });
    </script> <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new 
Date();a=s.createElement(o),
  
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42866724-1', 'babybeddingtown.com');
  ga('send', 'pageview');

</script> </footer>
</body>
</html>
