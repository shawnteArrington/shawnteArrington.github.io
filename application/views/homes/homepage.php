<!DOCTYPE html>
<html lang="en">
	<head>
		<?php $this->load->view('partials/setup')?>
		<title>Shawnte Arrington</title>
		<link rel="stylesheet" type="text/css" href="/assets/css/homepage.css">
	</head>
	<body>
		<?php $this->load->view('partials/navbar')?>
		<div id = "jumbotron" class = "jumbotron">
  			<div class = "container">
  				<a id="anchor-desc" class = "jumbo-elements jumbo-margin" href = "/assets/documents/ARRINGTON_BUSINESS_CARD.pdf" download="Shawnte_Arrington-Full-Stack_Web_Mobile_Developer_Business_Card.pdf" alt = "download business card">
						<video autoplay loop muted playsinline id = "jumbo-img" class = "img-responsive img-circle" data-toggle = "tooltip" title = "Download business card" alt = "Brand">
							 <source src = "/assets/videos/me_batting_eyes.webm" type="video/webm" onerror="fallback(parentNode)">
							<source src = "/assets/videos/me_batting_eyes.mp4" type="video/mp4">
							<img class = "img-responsive img-circle" src="/assets/videos/me_batting_eyes.gif" alt="batting eyes gif">
						 </video>
						 <span>Download business card</span>
				 </a>
  				<h1 id = "name" class = "jumbo-elements jumbo-margin">Shawnte L. Arrington</h1>
  				<h2 id = "title" class = "jumbo-elements jumbo-margin">Full-Stack Web & Mobile Developer</h2><br>
  				<p id = "blurb" class = "jumbo-elements jumbo-margin"><b>"Just because I rock doesn't mean I'm made of stone." - Hank Evans</b></p>
  			</div>
			<div class="bounce"><i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></div>
		</div>
		<div id = "projects-section" class = "container section">
			<div class = "row">
				<div class = "section-container">
					<a class = "section-title homepage-link" href = "#projects" data-toggle = "collapse" ><h2>Sample Projects</h2></a>
				</div>
				<div id = "projects" class = "collapse">
	        		<div class="col-lg-3">
			          	<a data-toggle = "modal" href = "#project-1"><img class="img-responsive img-circle project-preview-img" src = '/assets/images/flowers.jpg' alt="golden ration calculator image"></a>
			         	<h2 class = "project-name">Golden Ratio Calc</h2>
			          	<p>The nature of perfection and vice versa.</p>
			          	<p><a class = "btn btnfos btnfos-5" href="homes/portfolio#section1" role="button">Demo Project</a></p>
			        </div><!-- /.col-lg-3 -->
			        <div id="project-1" class="modal fade" role="dialog">
					  	<div class="modal-dialog">
					    <!-- Modal content-->
					    	<div class="modal-content">
					      		<div class="modal-header">
					        		<button type="button" class="close" data-dismiss="modal">&times;</button>
					        		<h4 class="modal-title">Golden Ratio Calculator</h4>
					      		</div>
					      		<div class="modal-body">
					        		<p>A simple app that takes the user's input and calculates either the next 5 or the previous 5 numbers in the fibonacci sequence.</p>
					      		</div>
					      		<div class="modal-footer">
					        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					      		</div>
					    	</div>
					  	</div>
					</div><!-- modal -->
	        		<div class="col-lg-3">
	          			<a data-toggle = "modal" href = "#project-2"><img class = "img-responsive img-circle project-preview-img" src = '/assets/images/sunset.jpg' alt = 'Weather icon'></a>
	          			<h2 class = "project-name">Current Conditions</h2>
	          			<p>Find your local weather.</p>
	          			<p><a class="btn btnfos btnfos-5" href="homes/portfolio#section2" role="button">Demo Project</a></p>
	        		</div><!-- /.col-lg-3 -->
	        		<div id="project-2" class="modal fade" role="dialog">
					  	<div class="modal-dialog">
					    <!-- Modal content-->
					    	<div class="modal-content">
					      		<div class="modal-header">
					        		<button type="button" class="close" data-dismiss="modal">&times;</button>
					        		<h4 class="modal-title">Current Conditions</h4>
					      		</div>
					      		<div class="modal-body">
					        		<p>This app uses OpenWeatherMap's API coupled with jQuery and AJAX to dynamically pull current weather conditions for cities worldwide.</p>
					      		</div>
					      		<div class="modal-footer">
					        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					      		</div>
					    	</div>
					  	</div>
					</div><!-- modal -->
	        		<div class="col-lg-3">
	          			<a data-toggle = "modal" href = "#project-3"><img class="img-responsive img-circle project-preview-img" src="/assets/images/black-dress-480x640.jpg" alt="black dress"></a>
	          			<h2 class = "project-name">Little Black Dress</h2>
	          			<p>Every woman needs one...or more.</p>
	          			<p><a class="btn btnfos btnfos-5" href="homes/portfolio#section3" role="button">Demo Project</a></p>
	        		</div><!-- /.col-lg-3 -->
	        		<div id="project-3" class="modal fade" role="dialog">
					  	<div class="modal-dialog">
					    <!-- Modal content-->
					    	<div class="modal-content">
					      		<div class="modal-header">
					        		<button type="button" class="close" data-dismiss="modal">&times;</button>
					        		<h4 class="modal-title">Little Black Dress <small>A dynamic collection of trending black dresses for any occasion.</small></h4>
					      		</div>
					      		<div class="modal-body">
					        		<p>This searchable marketplace employs ShopStyle Collective's API and uses jQuery and AJAX to dynamically update the page per the user's input.</p>
					      		</div>
					      		<div class="modal-footer">
					        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					      		</div>
					    	</div>
					  	</div>
					</div><!-- modal -->
	                <div class="col-lg-3">
			          	<a data-toggle = "modal" href = "#project-4"><img class="img-responsive img-circle project-preview-img" src="/assets/images/sigcolno1t_01.large.jpg" alt="L&eacute D collection no. 1 signature t-shirt."></a>
			         	<h2 class = "project-name">L&eacute D Clothing, Inc.</h2>
			          	<p>The clothing line for the fearless.</p>
			          	<p><a class="btn btnfos btnfos-5" href="homes/portfolio#section4" role="button">Learn more!</a></p>
			        </div><!-- /.col-lg-3 -->
			        <div id="project-4" class="modal fade" role="dialog">
					  	<div class="modal-dialog">
					    <!-- Modal content-->
					    	<div class="modal-content">
					      		<div class="modal-header">
					        		<button type="button" class="close" data-dismiss="modal">&times;</button>
					        		<h4 class="modal-title">L&eacute D Clothing, Inc. <small>An online clothing store promoting the LGBTQ community.</small></h4>
					      		</div>
					      		<div class="modal-body">
  										<iframe width="100%" height="315" src="https://www.youtube.com/embed/88V4MwjcppI" frameborder="0" allowfullscreen></iframe>
					      		</div>
					      		<div class="modal-footer">
					        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					      		</div>
					    	</div>
					  	</div>
					</div><!-- modal -->
      			</div><!-- /.collapse -->
      		</div><!-- .row -->
      	</div>
		<div id = "resume-section" class = "container section">
			<div class = "row">
				<div class = "section-container">
					<a id = "resume-header" class = "section-title homepage-link" href = "#resume" data-toggle = "collapse"><h2>Professional Background</h2></a>
				</div>
				<div id = "resume" class = "collapse">
					<div>
						<a id = "resume-icon" href="/assets/documents/Shawnte_Arrington-Lead Software Developer 2019.pdf" download="Shawnte_Arrington-Lead Software Developer 2019.pdf" ><img class = "img-circle" data-toggle = "tooltip" title = "Download resume" src = "/assets/icons/resume-icon-lg.png" style="display:block; margin: 0 auto 0 auto; height: 50px; width: 50px;"></a>
					</div>
					<!-- <div class = ""> -->
					<section>
						<strong>OBJECTIVE</strong>
						<ul class = "resume-list">
							<li><em>Align my strengths with an organization in which my business acumen, tech know-how, leadership, and performance-driven work ethic will ignite a companyÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬ÃƒÂ¢Ã¢â‚¬Å¾Ã‚Â¢s market share</em></li>
						</ul>
					</section><br>
					<section>
						<strong>APTITUDES</strong>
						<ul>
							<li>Ability to quickly assimilate, simplify, and convey complex information</li>
							<li>Willingness to stretch and grow into new and challenging roles</li>
							<li>Technically adept with an affinity for efficiency and design</li>
							<li>Passionate about process improvement and peopleÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬ÃƒÂ¢Ã¢â€šÂ¬Ã‚Âspecifically empowerment, knowledge-sharing and collaboration</li>
							<li>Knack for planning, management, research, diplomacy, pattern recognition, problem solving and autodidacticism</li>
						</ul>
					</section><br>
					<section>
							<strong>TECHNICAL PROFICIENCY</strong>
								<ul>
								<?php
									$tech_section = array("Frontend" => array("HTML", "CSS", "Javascript", "jQuery", "Bootstrap", "Sass"), "Backend" => array("JAVA", "Python", "PHP", "Bash Shell/Scripting", "CodeIgnitor", "React SSR"), "Version Control" => array("Git", "Github"),
																				"Package Managers" => array("npm", "Homebrew", "Yarn", "Bower"), "Dependency Mgrs" => array("Composer", "Gradle", "Cocoapods", "Maven"), "Build Tools" => array("Gulp", "Webpack"), "API" => array("RESTful and SOAP APIs"),
																				"Web" => array("Responsive design", "Cross-browser compatibility", "Forms", "Email Templates", "Sockets", "HTTP", "FTP", "SSL", "cURL", "AJAX", "DNS"),
																				"Mobile" => array("iOS (Swift) and Android", "Third party SDKs", "Universal/DeepLinks"), "IDE" => array("Xcode", "Android Studio", "Intellij IDEA", "Eclipse", "PhpStorm", "NetBeans"), "Design Patterns" => array("MVC", "OOP", "ORM", "TDD", "Structural and Behavioral Design"),
																				"Server" => array("Node.js", "macOS", "Linux", "Ubuntu", "Apache", "MAMP", "AWS (RDS, EC2)", "Heroku", "Docker", "Tomcat", "NGINX", "VirtualBox", "SSH"), "Database" => array("PostgreSQL", "MySQL", "MongoDB"),
																				"Third Party Apps" => array("Salesforce", "Marketo", "JIRA", "SendGrid", "PhoneGap", "Mixpanel", "Tableau", "Appsee", "Greenhouse", "Appsflyer", "Dropbox", "Bootcamp", "Parallels", "VMWare", "ADP", "SilkRoad", "Zendesk", "Mindbody", "Slack"),
																				"CMS" => array("WordPress", "Business Catalyst"));

									foreach ($tech_section as $area => $skills) {
											echo "<div class='row inner-row'>
														<div class = 'col-lg-2 areas'>
														<p><b>" . $area . "</b></div><div class = 'col-lg-10 skills'>";
											foreach ($skills as $skill) {
												if($skill != end($skills)){
													echo $skill . ", ";
												} else {
													echo $skill;
												}
											}
											echo "</p></div></div>";
									}
								?>
							</ul>
					</section><br>
					<section>
						<strong>EXPERIENCE</strong><br>
						<em><b>February 2017-Present: Digital Architect, <a class = "homepage-link" href="https://www.linkedin.com/company/remeapp/" target = "_blank" rel="noreferrer">REME</a>, Santa Monica, CA</b></em>
						<ul>
								<li><b>Programming</b> - Provide front and back-end support, refactoring, and maintenance for existing web and mobile applications; Quickly assimilate new programming languages, frameworks, and libraries as needed; Compose, test, and deploy new applications; Server provisioning and maintenance; Database modeling, management, and maintenance; Translate designs into web forms and email templates</li>
								<li><b>Cross-departmental Collaboration</b> - Research, analyze, and implement business solutions; Integrate third-party software/API&#x00027s for other departments; Offer technical expertise and facilitate strategic meetings for stakeholders; Construct reports to meet data-driven needs</li>
							</ul>
							<em><b>December 2016-February 2017: Freelance Web Designer, <a class = "homepage-link" href="http://modernlifets.com/" target = "_blank" rel="noreferrer">Modern Life Technical Solutions</a>, Playa Vista, CA</b></em>
							<ul>
								<li><b>Web Design</b> - Researched, analyzed, and implemented technical solutions; Acquired new technologies as needed; Revamped company websites; Served as technical counsel to founder; Accessed and provided feedback for third-party API&#x00027s; Customized Wordpress and Nationbuilder websites</li>
							</ul>
						<em><b>October 2015-December 2016: Full-Stack Web & Mobile Developer, <a class = "homepage-link" href="http://www.codingdojo.com/" target = "_blank" rel="noreferrer">Coding Dojo</a>, Burbank, CA</b></em>
							<ul>
								<li><b>Programming</b> - Acquired and applied new and evolving front and back-end web and mobile technologies; Quickly assimilated new programming languages as needed; Wrote and tested application code; Researched, analyzed, and implemented solutions; Engineered databases and integrated third-party API&#x00027s; Created simple algorithmic solutions to complex problems; Installed and configured operating systems; Provisioned servers; Launched websites</li>
								<li><b>Project Management</b> - Designed and built all stages of website, web application, and mobile app development from wireframe to production; Delegated tasks; Edited and debugged code</li>
							</ul>
						<em><b>February 2014-October 2015: Systems & Compliance Manager, <a class = "homepage-link" href="https://www.americansolardirect.com/" target = "_blank" rel="noreferrer">American Solar Direct</a>, Santa Monica, CA</b></em>
							<ul>
								<li><b>Leadership</b> - Provided direction, coaching, and support HR and Payroll staffs; Approved timecards, schedules, and operations-related requests; Assessed workloads and delegated tasks; Conducted regular 1-on-1&#x00027s with team to assist with time and project management, setting priorities, and offer constructive feedback; Oversaw employee onboarding and terminations; Streamlined HR and Payroll processes</li>
								<li><b>Systems</b> - Researched and implemented new systems to increase efficiency company-wide; Performed gap analysis, established and maintained data feeds; Coordinated demos for key stakeholders; Provided regular updates to upper management; Created and delivered systems training to staff; Stayed abreast pertinent web, mobile, and HR technologies; Migrated company from ADP WFN v2.1 to ADP WFN v8.0</li>
								<li><b>Compliance</b> - Maintained up-to-date knowledge of federal, state, and local employment law developments; Produced company policies and programs, Consulted in-house Legal counsel regarding interpretation and application of legislation; Directed HR Specialists regarding compliance practices; Orchestrated internal and external audits; Reconciled and approved invoices; Resolved discrepancies with vendors</li>
								<li><b>Culture</b> - Revamped company culture by: developing culture statement and values, promoting culture initiatives, mapping performance management, hiring, and separation practices to values, continually enhancing the employee experience, perks and benefits and leading efforts to design new and existing office spaces</li>
								<li><b>Employee Service</b> - Addressed employee/management inquiries and requests; Coached managers on compliance and employee relations; Researched matters to furnish factual, up-to-date information to staff/management</li>
								<li><b>Project Management</b> - Oversaw highly visible initiatives from conception to execution</li>
								<li><b>Recruiting</b> - Well-versed in behavioral interviewing, recruiting best practices, and creative negotiation; Overhauled the candidate and new hire experiences; Implemented applicant tracking system (OpenHire) and onboarding system (RedCarpet) and the integration of the two with HRIS (ADP Workforce Now 8.0)</li>
								<li><b>Benefits</b> - Provided high-level oversight of health and fringe benefits, including Workers Compensation and 401(k); Devised and rolled health benefits to a class of employees not previously eligible for coverage; Strategically plan companywide benefits initiatives and assess financial impact; Conduct benchmarking research and draft proposals; Stay abreast ACA developments</li>
							</ul>
						<em><b>September 2009-December 2014: Co-founder/Chief Executive Officer, <a class = "homepage-link" href="https://ledcollection.net/" target = "_blank" rel="noreferrer">L&eacute D Clothing, Inc.</a>, Los Angeles, CA</b></em>
							<ul>
								<li><b>Operations</b> - Owned and operated online apparel shop, ledcollection.net; Managed cash flow, consumer experience, and product development; Vendor management; Drafted contracts; Bookkeeping</li>
								<li><b>Sales & Marketing</b> - Strategized company targets, budgets, sales & marketing campaigns, and customer engagement initiatives; Coordinated photo/video shoots and events, Built partnerships, Recruited models; Conducted market research; Sales and inventory management; Sourcing; Design apparel artwork</li>
							</ul>
						<em><b>August 2009-April 2012: Human Resources Manager, <a class = "homepage-link" href="https://mediatemple.net/company/about-us/" target = "_blank" rel="noreferrer">Media Temple</a>, Culver City, CA</b></em>
							<ul>
								<li><b>Leadership</b> - Directed HR initiatives and grew HR team of one to include a Recruiter and HR Analyst; Developed diverse and agile team via on-going training, goal-setting, 1-on-1's, feedback, guidance, and delegation</li>
								<li><b>Benefits</b> - Transitioned company to new benefits plans, including an extensive 401k transition complete with asset-mapping and loan reconciliation for 180 employees and millions of dollars in assets</li>
								<li><b>Compliance</b> - Developed employee handbook and supported management throughout employee life cycle; Served as point person for outside counsel during litigation and assured employment law compliance</li>
								<li><b>Systems</b> - Implemented ATS (Jobvite) to streamline recruitment function; Implemented benefits software (PlanSource) allowing employees benefits self-service</li><br>
								<li><em><b>Human Resources Generalist, <a class = "homepage-link" href="https://mediatemple.net/company/about-us/" target = "_blank" rel="noreferrer">Media Temple</a> (July 2010-November 2011)</b></em></li>
									<ul>
										<li><b>HR</b> - Assisted Operations Manager with change organization, standard protocols, companywide policies, legal compliance, change organization, and document maintenance; Resolved payroll issues; Approved employee performance reviews and compensation</li>
										<li><b>Benefits</b> - Benefits expert and liaison, reconciled monthly invoices, employee advocacy, enrollments/changes; Transitioned company to new ASO saving $120k per year</li>
										<li><b>Systems</b> - Implemented ATS (iCIMS) to streamline recruitment function</li>
									</ul>
								<li><em><b>Senior Billing Representative/Team Lead, <a class = "homepage-link" href="https://mediatemple.net/company/about-us/" target = "_blank" rel="noreferrer">Media Temple</a> (August 2009-July 2010)</b></em></li>
									<ul>
										<li><b>Leadership</b> - Lead team to consistently win monthly performance-based competitions; Trained new representatives on customer service, technical topics and departmental standard operating procedures and provided ongoing coaching and support; Directly assisted upper management with organizational development</li>
										<li><b>Recordkeeping</b> - Composed knowledgebase articles for Billing department via JIRA</li>
									</ul>
							</ul>
						<em><b>April 2010-August 2009 (Seasonal): Customer Service/Administration Assistant; <a class = "homepage-link" href="http://www.kayakrentals.net/" target = "_blank" rel="noreferrer">KayakRentals.net</a>, Seal Beach, CA</b></em>
							<ul>
								<li><b>Customer Service</b> - Serviced customers by scheduling appointments, reserving equipment, managing contracts, troubleshooting client-related issues</li>
							</ul>
						<em><b>June 2010-April 2009: Pharmacy Clerk/Technician; <a class = "homepage-link" href="https://www.riteaid.com/" target = "_blank" rel = "noreferrer">Rite Aid Corporation</a>, Beverly Hills, CA</b></em>
							<ul>
								<li><b>Development</b> - Completed Pharmacy Technician Certification Training</li>
								<li><b>Recordkeeping</b> - Maintained patient and medication information database and audited medication inventory</li>
								<li><b>Customer Service</b> - Managed all stages of prescriptions from preparation to distribution; Resolved insurance issues, conducted post-visit follow-up calls</li>
							</ul>
						<em><b>December-January 2009: Research Technician; <a class = "homepage-link" href="http://keck.usc.edu/en/Education/Academic_Department_and_Divisions/Department_of_Neurology.aspx" target = "_blank" rel="noreferrer">University of Southern California, Dept. of Neurology</a>, Los Angeles, CA</b></em>
							<ul>
								<li><b>R&D</b> - Conducted laboratory operations, including: Isolation of peripheral blood mononuclear cells (PBMC) from human blood samples, FACS staining and analysis, 3H-thymidine proliferation assays, tissue culture of primary and secondary cell lines, transfection and western blot analysis of cell lysates, isolation and FACS staining of mouse splenocytes and microglia, ELISPOT assessment of cytokine secretion from PBMC and animal handling; Performed immunological monitoring for Teva Neuroscience sponsored, Phase III clinical trial assessing efficacy of Laquinimod in relapsing-remitting Multiple Sclerosis</li>
								<li><b>Recordkeeping</b> - Developed standard operating procedures for study and maintained chemical inventory</li>
								<li><b>Development</b> - Completed advanced training, including: Human subjects education, HIPAA certification, animal training, USC biological and radiation safety course, pharmaceutical research, laboratory operations, and technician methods</li>
							</ul>
						<em><strong>January-December 2007: Operations/Sales Manager; HSBC, Household Finance, Sherman Oaks, CA</strong></em>
							<ul>
								<li><b>Sales</b> - Consistently maintained highest sales performance</li>
								<li><b>Relationship Management</b> - Improved customer retention and generated new business through successful client relationship management and acted as a liaison between branch manager and customers; Built relationships with vendors, industry officials and internal departments to accomplish project objectives</li>
								<li><b>Operations</b> - Streamlined office procedures; produced and updated job folders, marketing briefs and expense reports for all office projects and fielded heavy volumes of filing, faxing, phones, and emails; conducted meetings and delivered status reports</li>
							</ul>
					</section><br>
					<section>
						<strong>CAREER DEVELOPMENT</strong>
							<p><strong>Software Engineering</strong>
							<ul>
								<li><a class = "homepage-link" href="https://www.codingdojo.com/" target ="_blank" rel="noreferrer">Coding Dojo</a>, <a class = "homepage-link" href="https://www.linkedin.com/learning" target ="_blank" rel="noreferrer">LinkedIn Learning</a>, <a class = "homepage-link" href="https://stackoverflow.com/" target = "_blank" rel = "noreferrer">Stack Overflow</a>, <a class = "homepage-link" href="https://www.udacity.com/courses/school-of-programming" target = "_blank" rel = "noreferrer">Udacity</a>, <a class = "homepage-link" href="https://lesbianswhotech.org/" target ="_blank" rel="noreferrer">Lesbians Who Tech</a>, <a class = "homepage-link" href="https://ocw.mit.edu/index.htm" target ="_blank" rel="noreferrer">MIT OpenCourseWare</a></li>
							</ul>
							<p><strong>Leadership, Business, Project and HR Management, Payroll, Employment Law </strong></p>
							<ul>
								<li><a class = "homepage-link" href = "https://www.shrm.org/" target = "_blank" rel="noreferrer">SHRM</a>, <a class = "homepage-link" href="http://www.amanet.org" target = "_blank" rel="noreferrer">American Management Association</a>, <a class = "homepage-link" href="http://www.lorman.com/training/" target = "_blank" rel="noreferrer">Lorman Education Services</a>,
									<a class = "homepage-link" href = "http://www.nationalseminarstraining.com/" target = "_blank" rel="noreferrer">National Seminars Training</a>, <a class = "homepage-link" href="http://www.pryor.com/site/default.aspx" target = "_blank" rel="noreferrer">Fred Pryor Seminars</a></li>
							</ul>
					</section><br>
					<section>
						<strong> EDUCATION </strong>
						<ul>
							<li>2015-16      Certificate of Completion - <a class = "homepage-link" href="https://www.codingdojo.com/" target ="_blank" rel="noreferrer" > Coding Dojo </a> (Software Engineering Immersion)</li>
							<li>2007-09      Pre-med - <a class = "homepage-link" href="http://www.lacitycollege.edu/" target ="_blank" rel="noreferrer">Los Angeles City College</a></li>
							<li>2005	       BA, Visual and Performing Arts - <a class = "homepage-link" href="https://www.wcupa.edu/" target = "_blank" rel="noreferrer">West Chester University of Pennsylvania</a></li>
							<li>2004-05      National Student Exchange Program - <a class = "homepage-link" href="http://www.calstatela.edu/" target ="_blank" rel="noreferrer">California State University, Los Angeles</a></li>
						</ul>
					</section><br>
					<section>
						<strong> UNIVERSITY RECOGNITION & ENGAGEMENT</strong>
						<ul>
							<li>2001-05      Chemical Engineering - Board of Governors Science and Technology Scholarship</li>
							<li>2001-05      Member - Black Student Union</li>
							<li>2003	     	 Dean's List - West Chester University of Pennsylvania</li>
							<li>2001-02      Captain - Women's Intramurals Basketball, Season Champions</li>
						</ul>
					</section>
</div> <!--row-->
				</div>
			</div>
		</div>
		<div id = "connect-section" class = "container section">
			<div class = "row">
				<div class = "section-container">
					<a class = "section-title homepage-link" href = "#connect" data-toggle = "collapse"><h2>Want more?</h2></a>
				</div>
				<div id = "connect" class = "collapse">
					<div class = "col-lg-3">
										<a class = "meet-me" data-toggle = "tooltip" title = "Message me on LinkedIn." href = "https://www.linkedin.com/in/shawntearrington?trk=nav_responsive_tab_profile" target = "_blank" rel = "noreferrer"><img class = "img-responsive meet-me-img" style = "border-radius: 50px;" alt = "LinkedIn profile" src = "/assets/images/me.jpg"></a>
					</div>
					<div class = "col-lg-3">
										<a class = "meet-me" data-toggle = "tooltip" title = "Collab with me on GitHub." href = "https://github.com/shawnteArrington" target = "_blank" rel = "noreferrer">
											<video autoplay loop muted playsinline class = "img-responsive img-circle meet-me-img" alt = "GitHub profile">
												<source src = "/assets/videos/me_stressed.webm" type="video/webm" onerror="fallback(parentNode)">
												<source src = "/assets/videos/me_stressed.mp4" type="video/mp4">
												<img  class = "img-responsive img-circle meet-me-img" src="/assets/videos/me_stressed.gif" alt="stressed out gif">
											</video>
										</a>
					</div>
					<div class = "col-lg-3">
										<a class = "meet-me" data-toggle = "tooltip" title = "DM me on Instagram." href = "https://www.instagram.com/shawnte_rocks/" target = "_blank" rel = "noreferrer"><img class = "img-responsive meet-me-img" style = "border-radius: 50px;" alt = "Instagram profile" src = "/assets/images/me_ig.jpg"></a>
					</div>
					<div class = "col-lg-3">
										<a class = "meet-me" data-toggle = "tooltip" title = "Take a closer look." href = "homes/about">
											<video autoplay loop muted playsinline class = "img-responsive img-circle meet-me-img" alt = "Link to About page">
												<source src = "/assets/videos/me_dimensions.webm" type="video/webm" onerror="fallback(parentNode)">
												<source src = "/assets/videos/me_dimensions.mp4" type="video/mp4">
												<img class = "img-responsive img-circle meet-me-img" src="/assets/videos/me_dimensions.gif" alt="multidimensional gif">
											</video>
										</a>
					</div>
				</div>
			</div>
		</div>

		<?php $this->load->view('partials/footer')?>
		<?php $this->load->view('partials/setup-scripts')?>
	</body>
</html>
