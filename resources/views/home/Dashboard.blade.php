<!doctype html>
<html lang="en">

<!-- Mirrored from veepixel.com/tf/html/jodice/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jan 2022 15:14:09 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Dammah Worker$ | Online Freelancer </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" href="\assets/images/logochange.png" type="image/gif" sizes="90x90">

<!-- CSS
================================================== -->
{{-- <link href="../../../../fonts.googleapis.com/cssede8.css?family=Poppins:200,300,400,500,600,700&amp;display=swap&amp;subset=latin-ext" rel="stylesheet"> --}}
<link rel="stylesheet" href="\assets/css/all.min.css">
<link href="\assets/css/aos.css" rel="stylesheet">
{{-- <link href="../../../../fonts.googleapis.com/icone91f.css?family=Material+Icons" rel="stylesheet"> --}}
<link rel="stylesheet" href="\assets/css/bootstrap.min.css">
<link href="\assets/css/select2.min.css" rel="stylesheet" />
<link href="\assets/css/owl.carousel.min.css" rel="stylesheet" />
<link rel="stylesheet" href="\assets/css/style.css">
<link rel="stylesheet" href="\assets/css/color-1.css">
</head>
<body>

<!-- Header 01
================================================== -->
@include('home.header');


<!-- End Header 02
================================================== -->










<!-- Main 
================================================== -->
<main>
	<div class="section category-section ">
		<div class="bg-v">
			<div class="bg-v-1 bg-t-l" data-aos="zoom-in">
			</div>
			<div class="bg-v-2 bg-b-r" data-aos="zoom-in">
			</div>
			<!-- <div class="bg-v-4">
			</div>
			<div class="bg-v-5">
			</div>
			<div class="bg-v-6">
			</div>
			<div class="bg-v-7">
			</div>
			<div class="bg-v-8">
			</div>
			<div class="bg-v-9">
			</div>
			<div class="bg-v-10">
			</div>
			<div class="bg-v-11">
			</div> -->
		</div>
		<div class="container">
			<h2 data-aos="fade-up" data-aos-delay="400" class="section_h">Popular Job Categories</h2>
			<div class="row">
				<div class="col-lg-3 col-md-6" >
					<div class="category_box" >
						<div class="cb_header">
							<img alt=""  src="\assets/images/i-code.png">
							<span class="job_count">363</span>
						</div>
						<div class="cb_bottom">
							<h3>Web & Software Dev</h3>
							<p>Software Engineer, Web / Mobile Developer &amp; More</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6" >
					<div class="category_box" >
						<div class="cb_header">
							<img alt=""  src="\assets/images/i-server.png">
							<span class="job_count">572</span>
						</div>
						<div class="cb_bottom">
							<h3>Data Science & Analitycs</h3>
							<p>Data Specialist / Scientist, Data Analyst & More</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6" >
					<div class="category_box" >
						<div class="cb_header">
							<img alt=""  src="\assets/images/i-calculator.png">
							<span class="job_count">252</span>
						</div>
						<div class="cb_bottom">
							<h3>Accounting & Consulting</h3>
							<p>Auditor, Accountant, Fnancial Analyst & More</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6" >
					<div class="category_box" >
						<div class="cb_header">
							<img alt=""  src="\assets/images/i-pan.png">
							<span class="job_count">523</span>
						</div>
						<div class="cb_bottom">
							<h3>Writing & Translations</h3>
							<p>Copywriter, Creative Writer, Translator & More</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6" >
					<div class="category_box" >
						<div class="cb_header">
							<img alt=""  src="\assets/images/i-chart.png">
							<span class="job_count">98</span>
						</div>
						<div class="cb_bottom">
							<h3>Sales & Marketing</h3>
							<p>Brand Manager, Marketing Coordinator & More</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6" >
					<div class="category_box" >
						<div class="cb_header">
							<img alt=""  src="\assets/images/i-graphic.png">
							<span class="job_count">53</span>
						</div>
						<div class="cb_bottom">
							<h3>Graphics & Design</h3>
							<p>Creative Director, Web Designer & More</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6" >
					<div class="category_box" >
						<div class="cb_header">
							<img alt=""  src="\assets/images/i-digital.png">
							<span class="job_count">75</span>
						</div>
						<div class="cb_bottom">
							<h3>Digital Marketing</h3>
							<p>Darketing Analyst, Social Profile Admin & More</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6" >
					<div class="category_box" >
						<div class="cb_header">
							<img alt=""  src="\assets/images/i-education.png">
							<span class="job_count">366</span>
						</div>
						<div class="cb_bottom">
							<h3>Education & Training</h3>
							<p>Advisor, Coach, Education Coordinator & More</p>
						</div>
					</div>
				</div>
			</div>   
		</div>
	</div>

	<div class="section dark-section featured_section">
		<div class="bg-v">
			<div class="bg-v-3 bg-t-r">
			</div>
			<div class="bg-v-3 bg-b-l">
			</div>
		</div>
	
		<div class="container">
			<h2 data-aos="fade-up" data-aos-delay="400" class="section_h">Lottery</h2>
		
		<div class="row two_col featured_box_outer">
			
		
			@foreach ($lottery as $item)
			<div class="col-sm-6" >
				<form   action="{{route('lottery.book', ['id' => $item->id])}}" method="post">
					@csrf
				<div class="featured_box ">
					
					<div class="fb_image" >
						<a href="compnay-profile-single.html">
							<img   alt="brand logo" src="\assets/images/lottery.jpg">
						</a>
					</div>
					<div class='fb_content' >
						<h4>
							<a href="job-single.html">{{$item->title}}</a>
						</h4>
						<ul>
							<li><i class="fas fa-check"></i> Lottery Price  {{$item->sale_price}}</li><br>
							<li><i class="fas fa-check"></i> Bumper Price {{$item->bumper_price}} </li><br>
							<li><i class="fas fa-check"></i> Starting Sale   </li><br>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width:{{$item->starting_sale_percentage}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{$item->starting_sale_percentage}}</div>
							  </div>
							
							
							<br>
							<li>
								<a href="#">
									<i class="far fa-clock"></i>
									2 days ago
								</a>
							</li>
						</ul>
					</div>
					<div class="fb_action" >
						{{-- <a title="add to favourite" href="#"><i class="far fa-heart"></i></a> --}}
						<input type="submit" class="btn btn-third"  value="Shop Now"> 
				</div>
				
			
			</div>
			
			
			
			
		</form>
		</div>
		@endforeach
		<div class="col-md-12 text-right" > 
			<a data-aos="fade-down" data-aos-delay="400" class="btn btn-primary" href="browse-jobs.html">Browse All Jobs <i class="fas fa-long-arrow-alt-right"></i></a>
		</div>
	</div>
		
			
	</div>
	
	<div class="section  paln_section">
		<div class="bg-v">
			<div class="bg-v-1 bg-t-l">
			</div>
			<div class="bg-v-2 bg-b-l">
			</div>
		</div>

{{-- packages --}}



		<div class="container">
			<h2 data-aos="fade-up" data-aos-delay="400" class="section_h">Membership Plans</h2>
			<div class="planduration" data-aos="fade-in" data-aos-delay="400">
				<div class="custom-control custom-switch text-center">
				  <label class="before-custom-control-label" for="customSwitch1"> <span>Billed Monthly</span></label>
				  <input type="checkbox" class="custom-control-input" id="customSwitch1">
				  <label class="custom-control-label" for="customSwitch1"> <span>Billed Yearly</span> </label>
				 <div class="small-alert alert-success"> Save 21%  </div>
				</div>
			</div>
			<div class="row">
			
				@foreach ($packages as $package)
			
					<div class="col-md-4" data-aos="fade-left" data-aos-delay="600">
					<div class="plan_box">
						{{-- <form action="/registeration" method="get">
							@csrf
							<input type="hidden" value="{{$package->id}}" name="id">   --}}
						<h3>{{$package->title}}</h3>
						<p>One time fee for one listing or task highlighted in search results.</p>
						<div class="plan_price pl-monthly">
							<h4><strong>{{$package->price}}</strong>/ monthly</h4>
						</div>
						<div class="plan_price pl-yearly hide">
							<h4><strong>$200</strong>/ yearly</h4>
						</div>
						<h5>Features of Basic Plan</h5>
						<ul>
							<li><i class="fas fa-check"></i> Number of jobs  {{$package->no_of_job}}</li>
							<li><i class="fas fa-check"></i> Expiry Date {{$package->expriy}} </li>
							<li><i class="fas fa-check"></i> Highlighted in Search Results</li>
							<li><i class="fas fa-check"></i>Fraud protection 100%</li>
          					<li><i class="fas fa-check"></i>Featured Listing</li>
						</ul>
							<a type="submit"  class="btn btn-third"  href="/registeration/{{$package->slug}}">book Now</a>
					
					{{-- </form> --}}
					</div>
				</div>
			
				
				@endforeach
		
				
				<div class="col-md-4" data-aos="fade-right" data-aos-delay="600">
					<div class="plan_box">

						<h3>Extended Plan</h3>
						<p>One time fee for one listing or task highlighted in search results.</p>
						<div class="plan_price">
							<h4><strong>$79</strong>/ monthly</h4>
						</div>
						<div class="plan_price pl-yearly hide">
							<h4><strong>$850</strong>/ yearly</h4>
						</div>
						<h5>Features of Extended Plan</h5>
						<ul>
							<li><i class="fas fa-check"></i> Unlimited Listings Listing</li>
							<li><i class="fas fa-check"></i> 100 Days Visibility</li>
							<li><i class="fas fa-check"></i> Highlighted in Search Results</li>
							<li><i class="fas fa-check"></i>Fraud protection</li>
          					<li><i class="fas fa-check"></i>Featured Listing</li>
						</ul>
						<a class="btn btn-third" href="#">Buy Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>














	<div class="section post_section">
		<div class="bg-v">
			<div class="bg-v-2 bg-t-l">
			</div>
			<div class="bg-v-2 bg-b-r">
			</div>
		</div>
		<div class="container">
			<h2 data-aos="fade-up" data-aos-delay="400" class="section_h">Featured Posts</h2>
			<div class="row">
				<div class="col-md-4" >
					<div class="post_box">
						<img  alt="" src="\assets/images/blog1.jpg" class="img-responsive">
						<div class="post_content">
							<h6>
								<a href="blog-single.html">4 Secrets To Be Strategic About Your Job Search</a>
							</h6>
							<p>Queequeg removed himself to just beyond the head of the … </p>
							<a class="btn btn-secondary btn-rounded" href="blog-single.html">Continue reading</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="post_box">
						<img   alt="" src="\assets/images/blog2.jpg" class="img-responsive">
						<div class="post_content">
							<h6>
								<a href="blog-single.html">Why Long-Term Unemployment Isn’t As Bad As You Think</a>
							</h6>
							<p>Queequeg removed himself to just beyond the head of the … </p>
							<a class="btn btn-secondary btn-rounded" href="blog-single.html">Continue reading</a>
						</div>
					</div>
				</div>
				<div class="col-md-4" >
					<div class="post_box">
						<img  alt="" src="assets/images/blog3.jpg" class="img-responsive">
						<div class="post_content">	
							<h6>
								<a href="blog-single.html">6 Ways Your Job is Losing You Future Earnings</a>
							</h6>
							<p>Queequeg removed himself to just beyond the head of the … </p>
							<a class="btn btn-secondary btn-rounded" href="blog-single.html">Continue reading</a>
						</div>
					</div>
				</div>
			</div>
		</div> 
	</div>
	<div class="section status_section">
		<div class="bg-v">
			<div class="bg-v-1 bg-t-r">
			</div>
			<div class="bg-v-2 bg-b-l">
			</div>
		</div>
		<div class="container">
			<h2 data-aos="fade-up" data-aos-delay="400" class="section_h">JoDice Status</h2>
			
			<div class="row justify-content-center">
				<div class="col-auto">
					<div class="status_box" data-aos="fade-in" data-aos-delay="600">
						<img alt=""  data-aos="fade-up" data-aos-delay="1000" src="\assets/images/i-paper-plane.png">

						<h3>83</h3>
						<p>Job Posted.</p>
					</div>
				</div>
				<div class="col-auto">
					<div class="status_box" data-aos="fade-in" data-aos-delay="800">
						<img alt=""  data-aos="fade-up" data-aos-delay="1200" src="\assets/images/i-doctor.png">
						
						<h3>16</h3>
						<p>Job Filled.</p>
					</div>
				</div>
				<div class="col-auto">
					<div class="status_box" data-aos="fade-in" data-aos-delay="1000">
						<img alt=""  data-aos="fade-up" data-aos-delay="1400" src="\assets/images/i-company.png">
						<h3>36</h3>
						<p>Companies</p>
					</div>
				</div>
				<div class="col-auto">
					<div class="status_box" data-aos="fade-in" data-aos-delay="1200">
						<img alt=""  data-aos="fade-up" data-aos-delay="1600" src="\assets/images/i-mamber.png">
						<h3>175</h3>
						<p>Members</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section gray  partner_section">
		<div class="bg-v">
			<div class="bg-v-1 bg-t-l">
			</div>
			<div class="bg-v-3 bg-b-r">
			</div>
		</div>
		<div class="container">
			<h2 data-aos="fade-up" data-aos-delay="400" class="section_h">Our Partners</h2>
			<ul class="partner_carousel owl-carousel owl-theme">
				<li>
					<a href="#"><img  alt="brand logo" src="\assets/images/company-logo-1.svg"></a>
				</li>
				<li>
					<a href="#"><img   alt="brand logo" src="\assets/images/company-logo-2.svg"></a>
				</li>
				<li>
					<a href="#"><img   alt="brand logo" src="\assets/images/company-logo-3.svg"></a>
				</li>
				<li>
					<a href="#"><img  alt="brand logo" src="\assets/images/company-logo-4.png"></a>
				</li>
				<li>
					<a href="#"><img   alt="brand logo" src="\assets/images/company-logo-5.png"></a>
				</li>	
				<li>
					<a href="#"><img   alt="brand logo" src="\assets/images/company-logo-1.svg"></a>
				</li>
				<li>
					<a href="#"><img  alt="brand logo" src="\assets/images/company-logo-2.svg"></a>
				</li>
				<li>
					<a href="#"><img  alt="brand logo" src="\assets/images/company-logo-3.svg"></a>
				</li>
				<li>
					<a href="#"><img   alt="brand logo" src="\assets/images/company-logo-4.png"></a>
				</li>
				<li>
					<a href="#"><img  alt="brand logo" src="\assets/images/company-logo-5.png"></a>
				</li>	
			</ul>
		</div>
	</div>
</main>
















<!-- Footer Container
================================================== -->

@include('home.footer');



<!-- End Footer Container
================================================== -->

<!-- Scripts
================================================== -->
<script src="\assets/js/jquery-3.4.1.min.js"></script>
<script src="\assets/js/select2.min.js"></script>
<script src="\assets/js/bootstrap.min.js"></script>
<script src="\assets/js/owl.carousel.min.js"></script>
<script src="\assets/js/aos.js"></script>
<script src="\assets/js/custom.js"></script>
</body>

<!-- Mirrored from veepixel.com/tf/html/jodice/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jan 2022 15:15:47 GMT -->
</html>
