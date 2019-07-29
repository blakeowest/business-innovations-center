<?php /* Template Name: Planning Page */ get_header(); ?>
<div class="planning">
	<section class="innerpage-hero">
		<div class="content">
			<h1 class="white"><?php echo the_title(); ?></h1>
		</div>
	</section>
	<section class="hero-content">
		<div class="wrapper">
			<img src="/wp-content/uploads/2018/07/hr.jpg" alt="hr">
			<div class="content">
				<?php echo rwmb_meta('our_plan-content') ?>
			</div>
		</div>
	</section>
	<section class="section-1">
		<div class="content">
			<h1 class="navy"><?php echo rwmb_meta('our_plan-sec1-head') ?></h1>
			<h3 class="teal"><?php echo rwmb_meta('our_plan-sec1-subhead') ?></h3>
			<p><?php echo rwmb_meta('our_plan-sec1-content') ?></p>
		</div>
	</section>
	<section class="section-2">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-md-6 left">
					<div class="content">
						<img src="/wp-content/uploads/2018/07/associate-level.png" alt="Associate Level">
					</div>
				</div>
				<div class="col-xs-12 col-md-6 right">
					<div class="content">
						<img src="/wp-content/uploads/2018/07/virtual-level.png" alt="Virtual Level">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section-3">
		<div class="container-fluid">
			<div class="row">
				<div class="inner-container">
					<div class="col-xs-12 col-md-6 box">
						<div id="accordion" class="panel-group" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<a role="button" href="#collapseOne" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapseOne">
									<div id="headingOne" class="panel-heading" role="tab">
										<h5 class="panel-title white"><i class="fas fa-minus"></i> Discovery</h5>
									</div>
								</a>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
										<h4 class="teal">Discovery Session</h4>
										<p>The first step in transforming a great idea into a start-up business is to talk with others to gather knowledge, identify resources and to understand what the next steps are. The BIC offers one-on-one discovery sessions as part of a structured program model that will assist entrepreneurs to define viable paths to success. This session can also be a gateway to many options and resources available in the Northwest Florida area. There is no cost for this service and is open to all those who are interested. Contact the BIC to make an appointment.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<a class="collapsed" role="button" href="#collapseTwo" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapseTwo">
									<div id="headingTwo" class="panel-heading" role="tab">
										<h5 class="panel-title white"><i class="fas fa-plus"></i> Coaching</h5>
									</div>
								</a>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">
										<h4 class="teal">Business Plan and Pitch Coaching</h4>
										<p>The business plan for any company is the roadmap to success. Developing an effective business plan and teaching methods of how to stick to the project are key objectives of the BIC’s programs and services.</p>
										<p>The BIC will help clients develop the appropriate “elevator pitch” to convey why a company does what it does, how it does it, and what it does uniquely better than what is available from similar companies. Defining a unique selling proposition is to understand what a business has that the competitors do not.</p>
										<p>The BIC will help clients build their “brand identity” and the appropriate positioning of their products or services.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<a class="collapsed" role="button" href="#collapseThree" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapseThree">
									<div id="headingThree" class="panel-heading" role="tab">
										<h5 class="panel-title white"><i class="fas fa-plus"></i> Collaboration</h5>
									</div>
								</a>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										<h4 class="teal">Collaboration Opportunities</h4>
										<p>Collaboration with other entrepreneurs whether they are new or experienced will reinforce the main efforts that are needed to build a foundation for success. The network of entrepreneurs that the BIC support will allow each client to feed on the other’s creativity. Access to area professionals to establish advisory boards for each client will be coordinated through the BIC’s networks and will be integrated into the resource pool available to clients so that they can get advice from experts.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<a class="collapsed" role="button" href="#collapseFour" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapseFour">
									<div id="headingFour" class="panel-heading" role="tab">
										<h5 class="panel-title white"><i class="fas fa-plus"></i> Networking</h5>
									</div>
								</a>
								<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
									<div class="panel-body">
										<h4 class="teal">Educational and Networking Opportunities</h4>
										<p>Entrepreneurs, new or early-stage companies will benefit from the full range of educational and networking events sponsored in whole or part by the BIC. These enrichment programs will provide subject matter experts in all areas of the business. Opportunities to interact with other clients will be encouraged and offers a network of colleagues and resources to assist them as they grow.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-6 box">
						<div class="content">
							<h2 class="navy"><?php echo rwmb_meta('our_plan-sec3-head') ?></h2>
							<h3 class="teal"><?php echo rwmb_meta('our_plan-sec3-subhead') ?></h3>
							<p><?php echo rwmb_meta('our_plan-sec3-content') ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>