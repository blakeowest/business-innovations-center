<?php /* Template Name: Community Page */ get_header(); ?>
<div class="community">
	<section class="innerpage-hero">
		<div class="content">
			<h1 class="white"><?php echo the_title(); ?></h1>
		</div>
	</section>
	<section class="hero-content">
		<div class="wrapper">
			<img src="/wp-content/uploads/2018/07/hr.jpg" alt="hr">
			<div class="content">
				<?php echo rwmb_meta('our_community-content') ?>
			</div>
		</div>
	</section>
	<section class="section-1">
		<div class="content">
			<h1 class="navy"><?php echo rwmb_meta('our_community-sec1-head') ?></h1>
			<h3 class="teal"><?php echo rwmb_meta('our_community-sec1-subhead') ?></h3>
			<?php echo rwmb_meta('our_community-sec1-content') ?>
		</div>
	</section>
	<section class="section-2">
		<div class="container-fluid">
			<div class="row">
				<div class="inner-container">
					<div class="col-xs-12 col-md-6 box">
						<div class="content">
							<h2 class="navy">NORTHWEST FLORIDA</h2>
							<h3 class="teal">Regional Resources</h3>
							<div class="row">
								<div class="col-xs-4">
									<a href="http://www.bayeda.com/" target="blank"><img src="/wp-content/uploads/2018/07/Bay-eda.jpg" alt="Bay EDA"></a>
								</div>
								<div class="col-xs-4">
									<a href="https://www.careersourcegc.com/" target="blank"><img src="/wp-content/uploads/2018/07/Cs-gc.jpg" alt="Career Source Gulf Coast"></a>
								</div>
								<div class="col-xs-4">
									<a href="http://www.gulfcountyedc.com/" target="blank"><img src="/wp-content/uploads/2018/07/gc-econ.jpg" alt="Gulf County EDC"></a>
								</div>
								<div class="col-xs-4">
									<a href="https://www.gulfpower.com/business/savings-and-energy/grow-your-business" target="blank"><img src="/wp-content/uploads/2018/07/gulf-power.jpg" alt="Gulf Power"></a>
								</div>
								<div class="col-xs-4">
									<a href="http://www.opportunityflorida.com/" target="blank"><img src="/wp-content/uploads/2018/07/op-fl.jpg" alt="Opportunity Florida"></a>
								</div>
								<div class="col-xs-4">
									<a href="http://www.northwestfloridaforward.com/" target="blank"><img src="/wp-content/uploads/2018/07/nwfl-forward.png" alt="Northwest Florida Forward"></a>
								</div>
								<div class="col-xs-4">
									<a href="https://techfarms.com/" target="blank"><img src="/wp-content/uploads/2018/07/tech-farms.png" alt="Tech Farms"></a>
								</div>
								<div class="col-xs-4">
									<a href="http://www.floridasgreatnorthwest.com/" target="blank"><img src="/wp-content/uploads/2018/07/fl-great-fl.png" alt="Florida's Great Northwest"></a>
								</div>
								<!-- <div class="col-xs-4">
									<a href="https://uwf.edu/centers/center-for-entrepreneurship/northwest-florida-entrepreneurial-ecosystem-assets/" target="blank"><img src="/wp-content/uploads/2018/07/UWF-Logo1.png" alt="UWF"></a>
								</div> -->
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-6 box">
						<div id="accordion" class="panel-group" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<a role="button" href="#collapseOne" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapseOne">
									<div id="headingOne" class="panel-heading" role="tab">
										<h5 class="panel-title white"><i class="fas fa-minus"></i> Bay EDA</h5>
									</div>
								</a>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
										<p>The Bay Economic Development Alliance (EDA) supports economic growth for business expansion and business development in Panama City and the surrounding area. The Bay EDA is staffed to assist you with business strategy, tax incentives, workforce training, and help finding sites and buildings for your business relocation. Our EDA provides economic development services for Callaway, Lynn Haven, Mexico Beach, Panama City, Panama City Beach, Parker, Springfield.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<a class="collapsed" role="button" href="#collapseTwo" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapseTwo">
									<div id="headingTwo" class="panel-heading" role="tab">
										<h5 class="panel-title white"><i class="fas fa-plus"></i> Career Source Gulf Coast</h5>
									</div>
								</a>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">
										<p>CareerSource Gulf Coast offers job search and an employment career center for Florida jobs. Our workforce services include career counseling & job search.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<a class="collapsed" role="button" href="#collapseThree" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapseThree">
									<div id="headingThree" class="panel-heading" role="tab">
										<h5 class="panel-title white"><i class="fas fa-plus"></i> Gulf County Economic Development Coalition</h5>
									</div>
								</a>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										<p>The vision of the Gulf County Economic Development Coalition is, in collaboration with its stakeholders, to create diverse, stable, and consistent employment opportunities that build wealth and provide better economic conditions for Gulf County.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<a class="collapsed" role="button" href="#collapseFour" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapseFour">
									<div id="headingFour" class="panel-heading" role="tab">
										<h5 class="panel-title white"><i class="fas fa-plus"></i> Gulf Power</h5>
									</div>
								</a>
								<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
									<div class="panel-body">
										<p>Gulf Power recognizes that small businesses make up the backbone of our community. They dream big, take risks and create value for their customers and their employees. As part of our effort to support business, Gulf Power Small Business Connect contains a database of free resources and organizations located here in Northwest Florida that can help you succeed.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<a class="collapsed" role="button" href="#collapseFive" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapseFive">
									<div id="headingFive" class="panel-heading" role="tab">
										<h5 class="panel-title white"><i class="fas fa-plus"></i> Opportunity Florida</h5>
									</div>
								</a>
								<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
									<div class="panel-body">
										<p>We are an economic development organization made up of nine rural counties in the heart of Northwest Florida. The nine counties are Calhoun, Franklin, Gadsden, Gulf, Holmes, Jackson, Liberty, Wakulla and Washington. We work with the counties, cities therein and the various local economic development organizations to market the many resources offered by this region.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<a class="collapsed" role="button" href="#collapseNine" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapseNine">
									<div id="headingNine" class="panel-heading" role="tab">
										<h5 class="panel-title white"><i class="fas fa-plus"></i> Florida Great Northwest</h5>
									</div>
								</a>
								<div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
									<div class="panel-body">
										<p>Northwest Florida is home to six major military installations, all with aviation/aerospace-related missions, which have a huge impact on the industries, R&D and talent pool in the region. Defense contractors, manufacturers, and high-tech businesses located in the region benefit from the skills of the 6,000 service members that separate each year.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<a class="collapsed" role="button" href="#collapseFourteen" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapseFourteen">
									<div id="headingFourteen" class="panel-heading" role="tab">
										<h5 class="panel-title white"><i class="fas fa-plus"></i> Northwest Florida Forward</h5>
									</div>
								</a>
								<div id="collapseFourteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFourteen">
									<div class="panel-body">
										<p>A Regional Strategy for Economic Transformation offers a candid evaluation of the region’s economic development challenges and opportunities, informed by quantitative analysis, reviews of national best practices, and qualitative input from across the 13-county region.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<a class="collapsed" role="button" href="#collapseFifteen" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapseFifteen">
									<div id="headingFifteen" class="panel-heading" role="tab">
										<h5 class="panel-title white"><i class="fas fa-plus"></i> TechFarms</h5>
									</div>
								</a>
								<div id="collapseFifteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFifteen">
									<div class="panel-body">
										<p>TechFarms is a technology incubator located in Panama City Beach, Florida. We provide innovators and entrepreneurs with office space, coworking space, equipment, prototyping facilities, business & technical mentoring, and much more. TechFarms is closely affiliated with TechFarms Capital, an angel investment fund targeting technology startups in the Southeast.</p>
									</div>
								</div>
							</div>
							<!-- <div class="panel panel-default">
								<a class="collapsed" role="button" href="#collapseSeventeen" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapseSeventeen">
									<div id="headingSeventeen" class="panel-heading" role="tab">
										<h5 class="panel-title white"><i class="fas fa-plus"></i> Northwest Florida Entrepreneurial Ecosystem</h5>
									</div>
								</a>
								<div id="collapseSeventeen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeventeen">
									<div class="panel-body">
										<p>The Northwest Florida Entrepreneurial Support Coalition is designed to build a more cohesive, intentional and resourceful entrepreneurial ecosystem in Northwest Florida. Entrepreneurial Support Organizations can leverage resources, coordinate events and determine shared objectives to enhance support and navigation of the ecosystem within our communities. The Center for Entrepreneurship would like to recognize two key partners in this project: Gulf Power and FloridaWest EDA.</p>
									</div>
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section-3">
		<div class="container-fluid">
			<div class="row">
				<div class="inner-container">
					<div class="col-xs-12 col-md-6 col-md-push-6 box">
						<div class="content">
							<h2 class="navy">FLORIDA</h2>
							<h3 class="teal">Statewide Resources</h3>
							<div class="row">
								<div class="col-xs-4">
									<a href="https://careersourceflorida.com/" target="blank"><img src="/wp-content/uploads/2018/07/cs-fl.jpg" alt="Career Source Florida"></a>
								</div>
								<div class="col-xs-4">
									<a href="http://www.floridajobs.org/" target="blank"><img src="/wp-content/uploads/2018/07/deo.jpg" alt="Florida DEO"></a>
								</div>
								<div class="col-xs-4">
									<a href="https://www.enterpriseflorida.com/" target="blank"><img src="/wp-content/uploads/2018/07/ent-fl.jpg" alt="Enterprise Florida"></a>
								</div>
								<!-- <div class="col-xs-4">
									<a href="http://www.opportunityflorida.com/" target="blank"><img src="/wp-content/uploads/2018/07/op-fl.jpg" alt="Opportunity Florida"></a>
								</div> -->
								<div class="col-xs-4">
									<a href="http://floridasbdc.org/" target="blank"><img src="/wp-content/uploads/2018/07/sbdc.png" alt="Florida SBDC"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-6 col-md-pull-6 box">
						<div id="accordion2" class="panel-group" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<a role="button" href="#collapseSix" data-toggle="collapse" data-parent="#accordion2" aria-expanded="true" aria-controls="collapseSix">
									<div id="headingSix" class="panel-heading" role="tab">
										<h5 class="panel-title white"><i class="fas fa-minus"></i> Career Source Florida</h5>
									</div>
								</a>
								<div id="collapseSix" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingSix">
									<div class="panel-body">
										<p>CareerSource Florida is the statewide workforce policy and investment board of business and government leaders charged with guiding workforce development for the state of Florida. CareerSource Florida provides oversight and policy direction for talent development programs administered by the Department of Economic Opportunity, Florida’s 24 local workforce development boards and their 100 career centers. Together, the CareerSource Florida network connects employers with qualified, skilled talent and Floridians with employment and career development opportunities to achieve economic prosperity.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<a class="collapsed" role="button" href="#collapseSeven" data-toggle="collapse" data-parent="#accordion2" aria-expanded="false" aria-controls="collapseSeven">
									<div id="headingSeven" class="panel-heading" role="tab">
										<h5 class="panel-title white"><i class="fas fa-plus"></i> Florida Department of Economic Opportunity</h5>
									</div>
								</a>
								<div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
									<div class="panel-body">
										<p>Welcome to the Florida Department of Economic Opportunity. Our agency works across the state to support Florida’s strong economy, robust and talented workforce and local communities. We support Governor Rick Scott’s business-friendly priorities to ensure our state stays competitive and attracts new businesses to provide more opportunities for Florida families. We want Florida to be the best state in the nation to get a job, start a company, expand your business and live the American dream.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<a class="collapsed" role="button" href="#collapseEight" data-toggle="collapse" data-parent="#accordion2" aria-expanded="false" aria-controls="collapseEight">
									<div id="headingEight" class="panel-heading" role="tab">
										<h5 class="panel-title white"><i class="fas fa-plus"></i> Enterprise Florida</h5>
									</div>
								</a>
								<div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
									<div class="panel-body">
										<p>Enterprise Florida, Inc. (EFI) is a public-private partnership between Florida’s business and government leaders and is the principal economic development organization for Florida. EFI’s mission is to expand and diversify the state’s economy through job creation. In pursuit of its mission, EFI works closely with a statewide network of economic development partners and is funded both by the State of Florida and by private-sector businesses.</p>
									</div>
								</div>
							</div>
							<!-- <div class="panel panel-default">
								<a class="collapsed" role="button" href="#collapseTen" data-toggle="collapse" data-parent="#accordion2" aria-expanded="false" aria-controls="collapseTen">
									<div id="headingTen" class="panel-heading" role="tab">
										<h5 class="panel-title white"><i class="fas fa-plus"></i> Opportunity Florida</h5>
									</div>
								</a>
								<div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
									<div class="panel-body">
										<p>We are an economic development organization made up of nine rural counties in the heart of Northwest Florida. The nine counties are Calhoun, Franklin, Gadsden, Gulf, Holmes, Jackson, Liberty, Wakulla and Washington. We work with the counties, cities therein and the various local economic development organizations to market the many resources offered by this region.</p>
									</div>
								</div>
							</div> -->
							<div class="panel panel-default">
								<a class="collapsed" role="button" href="#collapseEleven" data-toggle="collapse" data-parent="#accordion2" aria-expanded="false" aria-controls="collapseEleven">
									<div id="headingEleven" class="panel-heading" role="tab">
										<h5 class="panel-title white"><i class="fas fa-plus"></i> Florida SBDC</h5>
									</div>
								</a>
								<div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
									<div class="panel-body">
										<p>The Florida SBDC Network has access to robust databases, business research resources, and knowledgeable experts who can help you successfully navigate the obstacles that come with the stages of the business life cycle.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section-4">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-md-6 left box">
						<div class="content">
							<img src="/wp-content/uploads/2018/07/us-census.jpg" alt="U.S. Census">
						</div>
					</div>
					<div class="col-xs-12 col-md-6 right box">
						<div class="content">
							<a class="white" href="http://www.census.gov/quickfacts/table/PST045215/12005" target="blank">U.S. CENSUS BUREAU QUICK FACTS</a>
							<p class="white">Bay County, FL</p>
							<a class="white" href="http://www.census.gov/quickfacts/table/PST045215/12045" target="blank">U.S. CENSUS BUREAU QUICK FACTS</a>
							<p class="white">Gulf County, FL</p>
							<a class="white" href="http://www.census.gov/quickfacts/table/PST045215/12037" target="blank">U.S. CENSUS BUREAU QUICK FACTS</a>
							<p class="white">Franklin County, FL</p>
							<a class="white" href="http://www.census.gov/quickfacts/table/PST045215/12059" target="blank">U.S. CENSUS BUREAU QUICK FACTS</a>
							<p class="white">Holmes County, FL</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section-5">
			<div class="content">
				<h1 class="navy"><?php echo rwmb_meta('our_community-sec5-head') ?>.</h1>
				<?php echo rwmb_meta('our_community-sec5-content') ?>
			</div>
		</section>
		<section class="section-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-md-6 left box">
						<div class="content">
							<div class="wrapper">
								<img src="/wp-content/uploads/2018/07/biz-growth.png" alt="Business Growth">
							</div>
							<div class="wrapper">
								<img src="/wp-content/uploads/2018/07/biz-planning.png" alt="Business Planning">
							</div>
							<div class="wrapper">
								<img src="/wp-content/uploads/2018/07/legal-counsel.png" alt="Legal Counsel">
							</div>
							<div class="wrapper">
								<img src="/wp-content/uploads/2018/07/account-resources.png" alt="Account Resources">
							</div>
							<div class="wrapper">
								<img src="/wp-content/uploads/2018/07/human-resources.png" alt="Human Resources">
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-6 right box">
						<div class="content">
							<div class="wrapper">
								<img src="/wp-content/uploads/2018/07/gvmnt-contract.png" alt="Government Contacts">
							</div>
							<div class="wrapper">
								<img src="/wp-content/uploads/2018/07/marketing-pr.png" alt="Marketing PR">
							</div>
							<div class="wrapper">
								<img src="/wp-content/uploads/2018/07/financing.png" alt="Financing">
							</div>
							<div class="wrapper">
								<img src="/wp-content/uploads/2018/07/grant-prep.png" alt="Grant Preparation">
							</div>
							<div class="wrapper">
								<img src="/wp-content/uploads/2018/07/risk-mgmt.png" alt="Risk Management">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section-7">
			<div class="container-fluid">
				<div class="row">
					<div class="inner-container">
						<div class="col-xs-12 col-md-6 col-md-push-6 box">
							<div class="content">
								<h2 class="navy"><?php echo rwmb_meta('our_community-sec7-head') ?></h2>
								<h3 class="teal"><?php echo rwmb_meta('our_community-sec7-subhead') ?></h3>
								<p><?php echo rwmb_meta('our_community-sec7-content') ?></p>
							</div>
						</div>
						<div class="col-xs-12 col-md-6 col-md-pull-6 box">
							<div id="accordion3" class="panel-group" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<a role="button" href="#collapseEleven" data-toggle="collapse" data-parent="#accordion3" aria-expanded="true" aria-controls="collapseEleven">
										<div id="headingEleven" class="panel-heading" role="tab">
											<h5 class="panel-title white"><i class="fas fa-minus"></i> Become an Intern</h5>
										</div>
									</a>
									<div id="collapseEleven" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingEleven">
										<div class="panel-body">
											<p>Internships are defined as arrangements in which students lend their talents to organizations/companies for an opportunity to develop business acumen and gain valuable experience needed to succeed in the workplace. The BIC welcomes interns and may also provide networks to companies requiring interns. Students who are looking for expertise in areas such as business plan development, marketing, communications, and event planning may be a perfect fit for a BIC internship.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<a class="collapsed" role="button" href="#collapseTwelve" data-toggle="collapse" data-parent="#accordion3" aria-expanded="false" aria-controls="collapseTwelve">
										<div id="headingTwelve" class="panel-heading" role="tab">
											<h5 class="panel-title white"><i class="fas fa-plus"></i> Be an Entrepreneur</h5>
										</div>
									</a>
									<div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
										<div class="panel-body">
											<p>Students who are ready to work on their Big Idea and establish a plan for their start-up can make an appointment for a Discovery Session. This session is a no-cost service.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<a class="collapsed" role="button" href="#collapseSixteen" data-toggle="collapse" data-parent="#accordion3" aria-expanded="false" aria-controls="collapseSixteen">
										<div id="headingSixteen" class="panel-heading" role="tab">
											<h5 class="panel-title white"><i class="fas fa-plus"></i> Attend Networking & Educational Events</h5>
										</div>
									</a>
									<div id="collapseSixteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSixteen">
										<div class="panel-body">
											<p>The BIC is a part of Gulf Coast State College and welcomes all GCSC students to participate in the activities held on campus. In most cases, the events are free for students or will have a student rate available. Attending these events give opportunities to meet the dynamic innovators and business leaders that are shaping the economic future in Northwest Florida.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<?php get_footer(); ?>