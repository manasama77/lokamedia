<section class="projects-section bg-dark" id="why">
	<div class="container">
		<!-- Featured Project Row-->
		<div class="row align-items-center no-gutters mb-3">
			<div class="col-xl-4 col-lg-4">
				<img class="img-fluid mb-3 mb-lg-0" src="assets/img/think.png" alt="" />
			</div>
			<div class="col-xl-8 col-lg-8">
				<div class="featured-text text-center text-lg-left text-white">
					<h4 class="text-white"><?= $why_us->row()->title; ?></h4>
					<p class="text-white mb-0">
						<?= $why_us->row()->content; ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
