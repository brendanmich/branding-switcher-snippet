<div class="header animate">
	<div class="primary-header-footer screen-overall-padding">

		<!-- Logo Holder -->
		<div class="header-logo-holder">
			<a href="/">
				<?php if ((int) date("n") == 2) { // Black History Month (February) ?>
					<img src="/img/logos/logo-black-history.png" alt="My Website - Black History Month" title="My Website - Black History Month">
				<?php } else if ((int) date("n") == 6) { // Pride Month (June) ?>
					<img src="/img/logos/logo-pride.png" alt="My Website - Happy Pride Month!" title="My Website - Happy Pride Month!">
				<?php } else { ?>
					<img src="/img/logos/logo.png" alt="My Website" title="My Website">
				<?php } ?>
			</a>
		</div>

		<!-- Navigation Container -->
		<div class="nav-container">

			<!-- About Us -->
			<a href="/about" class="navigation-link animate">About</a>

			<!-- Contact Us -->
			<a href="/contact" class="navigation-link animate">Contact Us</a>
		</div>
	</div>
</div>
