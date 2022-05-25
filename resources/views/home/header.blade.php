<!doctype html>
<html lang="en">

<!-- Mirrored from veepixel.com/tf/html/jodice/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jan 2022 15:17:53 GMT -->
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <title>Dammah | Online Freelancer </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="icon" href="\assets/images/logochange.png" type="image/gif" sizes="90x90">
  
  <!-- CSS
  ================================================== -->
  <link href="../../../../fonts.googleapis.com/cssede8.css?family=Poppins:200,300,400,500,600,700&amp;display=swap&amp;subset=latin-ext" rel="stylesheet">
  <link rel="stylesheet" href="\assets/css/all.min.css">
  <link href="\assets/css/aos.css" rel="stylesheet">
  <link href="../../../../fonts.googleapis.com/icone91f.css?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="\assets/css/bootstrap.min.css">
  <link href="\assets/css/select2.min.css" rel="stylesheet" />
  <link href="\assets/css/owl.carousel.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="\assets/css/style.css">
  <link rel="stylesheet" href="\assets/css/color-1.css">
  </head>
  <body>
  
  <!-- Header 01
  ================================================== -->
  <header class="header_01 " style="margin-bottom: 10%" >
    <div class="header_main">
      <div class="header_menu fixed-top">
        <div class="container">
          <div class="header_top">
            <div class="logo">
              <a href="/">
                <img  alt="JoDice" class="img-fluid" src="\assets/images/logochange.png", style="width: 120px; height:200px;">
              </a>
            </div>
            <div class="navigation">
              <nav>
                <div class="hamburger hamburger--spring js-hamburger ">
                      <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                      </div>
                    </div>
                <ul>
                  <li class=" current_page">
                    <a href="index.html" >Student</a>
                    <!-- <ul class="sub-menu">
                      <li class="current_page">
                        <a href="index.html">Homepage 1</a>
                      </li>
                      <li>
                        <a href="home-page-2.html">Homepage 2</a>
                      </li>
                      <li>
                        <a href="home-page-3.html">Homepage 3</a>
                      </li>
                      <li>
                        <a href="home-page-4.html">Homepage 4</a>
                      </li>
                    </ul> -->
                  </li>
                  <li class="">
                    <a href="index.html">Recruitment Partner</a>
                    <!-- <ul class="sub-menu">
                      <li>
                        <a href="job-seeker-dashboard.html">Job dashboard</a>
                      </li>
                      <li>
                        <a href="browse-jobs.html">Browse jobs</a>
                      </li>
                      
                      <li>
                        <a href="job-single.html">Job single</a>
                      </li>
                      
                      <li>
                        <a href="my-stared-jobs.html">My stared jobs</a>
                      </li>
                      <li>
                        <a href="staff-profile-single.html">Job seeker profile</a>
                      </li>
                      <li>
                        <a href="edit-profile.html">Update my profile</a>
                      </li>
                      
                      <li>
                        <a href="edit-password.html">Change password</a>
                      </li>
                      <li>
                        <a href="registration.html">Registration</a>
                      </li>
                      <li>
                        <a href="browse-companies.html">Browse companies</a>
                      </li>
                    </ul> -->
                  </li>
  
  
                  <li class="\">
                    <a href="#">School</a>
                    <!-- <ul class="sub-menu">
                      <li>
                        <a href="job-dashboard.html">Job dashboard</a>
                      </li>
                      <li>
                        <a href="post-a-job.html">Post a job</a>
                      </li>
                      <li>
                        <a href="my-job-listing.html">My Jobs listing</a>
                      </li>
                      <li>
                        <a href="find-staff.html">Find staff</a>
                      </li>
                      <li>
                        <a href="compnay-profile-single.html">Company profile</a>
                      </li>
                      
                      <li>
                        <a href="emp-edit-profile.html">Update profile</a>
                      </li>
                      <li>
                        <a href="emp-edit-password.html">Change password</a>
                      </li>
                      <li>
                        <a href="emp-registration.html">Employer registration</a>
                      </li>
                    </ul> -->
                  </li>
  
                  <!-- <li class="has-sub-menu">
                    <a href="#">Pages</a>
                    <ul class="sub-menu">
  
                      <li>
                        <a href="blog.html">blog</a>
                      </li>
                      <li>
                        <a href="blog-single.html">Blog single</a>
                      </li>
                      <li>
                        <a href="contact-us.html">Contact us</a>
                      </li>
                      <li>
                        <a href="plan-page.html">Membership Plans</a>
                      </li>
                      <li>
                        <a href="login.html">Login</a>
                      </li>
                      <li>
                        <a href="lost-password.html">Lost password</a>
                      </li>
                      <li>
                        <a href="user-interface-elements.html">User interface elements</a>
                      </li>
                      <li>
                        <a href="404.html">404</a>
                      </li>	
                    </ul>
                  </li> -->
                </ul>
              </nav>
              <div class="ac_nav">
                <!--Not logedin-->
                @if (Session::has('user'))
<li class="dropdown">
    <a href="#" aria-expanded="false">{{ Session::get('user')['name'] }} </a>
    <li><a href="{{route('Student.student_logout')}}">LogOut</a></li>
</li>
@else
  <div class="login_pop">
    <a class="btn btn-primary" href="">Login / Sign up <i class="fas fa-caret-down"></i></a>
     <div class="login_pop_box">
      <span class="twobtn_cont">
        <a class=" signjs_btn" href="{{route('Student.register')}}">         
        <span>Student</span> Sign up
        <i class="far fa-user"></i>
        </a>
      <a class=" signrs_btn" href="emp-registration.html"> <span>Patner</span> Sign up
        <i class="fas fa-landmark"></i>
      </a>
      </span>
      <div>
        <span class="member_btn">Already a member?</span>
        <a class="lgin_btn btn btn-primary" href="{{route('Student.login')}}"> 
            Login
        </a>
      </div>
    </div> 
  </div>
@endif 
                  {{-- <div class="login_pop">
                    <a class="btn btn-primary" href="/login">Login / Sign up <i class="fas fa-caret-down"></i></a>
                    {{-- <div class="login_pop_box">
                      <span class="twobtn_cont">
                        <a class=" signjs_btn" href="registration.html">				 
                        <span>Job seekers</span> Sign up
                        <i class="far fa-user"></i>
                        </a>
                      <a class=" signrs_btn" href="emp-registration.html">	<span>EMPLOYERS</span> Sign up
                        <i class="fas fa-landmark"></i>
                      </a>
                      </span>
                      <div>
                        <span class="member_btn">Already a member?</span>
                        <a class="lgin_btn btn btn-primary" href="login.html"> 
                             Login
                        </a>
                      </div>
                    </div> -
                  </div> --}}
                <!--end logedin-->
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- <div class="header_btm"> 
        <!-- <div class="bg-v" >
          <div class="bg-v-2 bg-b-r">
          </div>
        </div> -->
        {{-- <div class="container">
          <div class="banner_slider ">
            <div class="">	
              <div class="row align-items-center">
                <div class="col-lg-4" data-aos="fade-down" data-aos-delay="200">
                  <h1>Small Gigs. Big Results.</h1>
                  <!-- <p>Most complete 2020 template for Job board sites.</p> -->
                  <a class="btn btn-primary" href="browse-jobs.html">Learn more
                    <!-- <i class="material-icons">arrow_right_alt</i> -->
                  </a>
                </div>
                <!--  <div class="col-lg-8" > 
                  <div class="banner_form_cont" >
                    <form action="http://veepixel.com/tf/html/jodice/browse-jobs.html">
                      <!-- <div class="banerSearch" data-aos="fade-up" data-aos-delay="200">
                        <div class="fild-wrap fw-job-title">
                          <i class="fas fa-briefcase"></i>
                          <select class="js-example-basic-multiple" name="state">
                            <option value="AL"> JOB TITLE, SKILL, INDUSTRY</option>
                            <option value="1">Concierge</option>
                            <option value="2">Event Planner</option>
                            <option value="3">Executive Chef</option>
                             <option value="4">General Manager</option>
  
                          </select>
                        </div>
                        <div class="fild-wrap fw-job-location">
                          <i class="fas fa-map-marker-alt"></i>
                          <select class="js-example-basic-single" name="state">
                            <option value="AL">ALABAMA</option>
                            <option value="WY">WYOMING</option>
                          </select>
                        </div>
                        <div class="fild-wrap fw-submit">
                          <button type="submit" class="btn btn-primary" value="">
                             <i class="material-icons">search</i> SEARCH JOBS
                          </button>
                        </div>
                      </div> -->
                    </form>
                    {{-- <div class="user_type">
                      <div class="row">
                        <div class="col-md-6" >
                          <div class="user_type_inner  user_type_seeker" >
                            <a href="browse-jobs.html">
                              <div class="usertype_img">
                                <img alt="" src="\assets/images/usertype-2.png">
                                <img alt="" class="usertype-addon" src="\assets/images/usertype-2-addon.png">
                              </div>
                              <div>
                                <h3>I'm looking for a job</h3>
                                <p>Post CV and apply job you love</p>
                                <i class="fas fa-long-arrow-alt-right"></i>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="user_type_inner user_type_post" >
                            <a href="post-a-job.html">
                              <div class="usertype_img">
                                <img alt=""  src="\assets/images/usertype-1.png">
                                <img alt=""  class="usertype-addon" src="\assets/images/usertype-1-addon.png">
                              </div>
                              <div>
                                <h3>I want to post job</h3>
                                <p>Post jobs & hire porfessionls</p>
                                <i class="fas fa-long-arrow-alt-right"></i>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div> 
                  </div>
                </div>
              </div>
            </div>
            
            
          </div>
            
        </div>	
      </div> --}}
    </div> 
  </header>
  
  
  <!-- End Header 02
  ================================================== -->
  
</body>

<!-- Mirrored from veepixel.com/tf/html/jodice/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jan 2022 15:17:53 GMT -->

</html>


 