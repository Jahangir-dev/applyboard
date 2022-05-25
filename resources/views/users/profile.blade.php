@extends('layouts.main')

@section('content')
    {{-- place all page content here --}}
   
   
    
    <!-- end row -->
   

                <!-- start page title -->
               
                <!-- end page title -->

              
                <!-- end row -->
               
                <div class="main-content">

                    <div class="page-content">
                        <div class="container-fluid">
    
                            <!-- start page title -->
                           
                            <!-- end page title -->
                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4"></h4>
    
                                            <div id="basic-example">
                                                <!-- Seller Details -->
                                                <h3>General Information</h3>
                                                <section>
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-firstname-input">First Name</label>
                                                                    <input type="text" class="form-control" id="basicpill-firstname-input" placeholder="Enter your First name">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-lastname-input">Middle Name</label>
                                                                    <input type="text" class="form-control" id="basicpill-lastname-input" placeholder="Enter your Last Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-lastname-input">Last Name</label>
                                                                    <input type="text" class="form-control" id="basicpill-lastname-input" placeholder="Enter your Last Name">
                                                                </div>
                                                            </div>
                                                        </div>
    
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-phoneno-input">Date</label>
                                                                    <input type="date" class="form-control" id="basicpill-phoneno-input" placeholder="Enter your Phone Number">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-email-input">First Language</label>
                                                                    <input type="email" class="form-control" id="basicpill-email-input" placeholder="Enter your email address">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-email-input">Country of Citizenship</label>
                                                                    <select class=" form-control "  data-placeholder="Choose ..." name="campus">
                                                                        <option selected value="">Selecte Campus</option>
                                                                           <option value="Ryk">Ryk</option>
                                                                           <option value="sadiqabad">Sdk</option>
                                                                       
                                                                   </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 mb-6">
                                                                <label for="basicpill-email-input">Password Number</label>
                                                                <input type="email" class="form-control" id="basicpill-email-input" placeholder="Enter your Password Number">
                                                            </div>
                                                            <div class="col-lg-6 mb-6">
                                                                <label for="basicpill-email-input">Passport Expiry</label>
                                                                <input type="email" class="form-control" id="basicpill-email-input" placeholder="Enter your Password Number">
                                                            </div>
                                                            {{-- <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-address-input">Passport Expiry</label>
                                                                    <textarea id="basicpill-address-input" class="form-control" rows="2" placeholder="Enter your Address"></textarea>
                                                                </div>
                                                            </div> --}}
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-6 mb-6 mt-2">
                                                                <label for="basicpill-email-input">Gender</label><br>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="optradio" checked>Male
                                                                  </label>
                                                                  <label class="radio-inline">
                                                                    <input type="radio" name="optradio">Female
                                                                  </label>
                                                                
                                                                  
                                                            </div>
                                                            <div class="col-lg-6 mb-6 mt-2">
                                                                <label for="basicpill-email-input">Material Status</label><br>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="optradio" checked>Single
                                                                  </label>
                                                                  <label class="radio-inline">
                                                                    <input type="radio" name="optradio">Married
                                                                  </label>
                                                            </div>
                                                            {{-- <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-address-input">Passport Expiry</label>
                                                                    <textarea id="basicpill-address-input" class="form-control" rows="2" placeholder="Enter your Address"></textarea>
                                                                </div>
                                                            </div> --}}
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-12 mt-5">
                                                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                                                    <h3 class="mb-2">Address Deatail</h3>
                                        
                                                                    <div class="page-title-right">
                                                                        <ol class="breadcrumb m-0">
                                                                            {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                                                            <li class="breadcrumb-item active">Products</li> --}}
                                                                        </ol>
                                                                    </div>
                                        
                                                                </div>
                                                            </div>
                                                           
                                                           
                                                            {{-- <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-address-input">Passport Expiry</label>
                                                                    <textarea id="basicpill-address-input" class="form-control" rows="2" placeholder="Enter your Address"></textarea>
                                                                </div>
                                                            </div> --}}
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-8 mb-6">
                                                                <label for="basicpill-email-input">Address</label>
                                                                <input type="email" class="form-control" id="basicpill-email-input" placeholder="Enter your Address">
                                                            </div>
                                                            <div class="col-lg-4 mb-6">
                                                                <label for="basicpill-email-input">City Town</label>
                                                                <input type="email" class="form-control" id="basicpill-email-input" placeholder="Enter your City Town">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-4 mb-6">
                                                                <label for="basicpill-email-input">Country</label>
                                                                <input type="email" class="form-control" id="basicpill-email-input" placeholder="Country">
                                                            </div>
                                                            <div class="col-lg-4 mb-6">
                                                                <label for="basicpill-email-input">Province</label>
                                                                <input type="email" class="form-control" id="basicpill-email-input" placeholder="Province">
                                                            </div>
                                                            <div class="col-lg-4 mb-6">
                                                                <label for="basicpill-email-input">Postal/Zip Code</label>
                                                                <input type="email" class="form-control" id="basicpill-email-input" placeholder="Postal/Zip">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4 mb-6">
                                                                <label for="basicpill-email-input">Email</label>
                                                                <input type="email" class="form-control" id="basicpill-email-input" placeholder="Enter Email">
                                                            </div>
                                                            <div class="col-lg-4 mb-6">
                                                                <label for="basicpill-email-input">Phone</label>
                                                                <input type="email" class="form-control" id="basicpill-email-input" placeholder="Enter Phone">
                                                            </div>
                                                           
                                                        </div>
                                                    </form>
                                                </section>
    
                                                <!-- Company Document -->
                                                <h3>Education History</h3>
                                                <section>
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <label for="basicpill-email-input">Country of  Education</label>
                                                                <select class=" form-control "  data-placeholder="Choose ..." name="campus">
                                                                    <option selected value="">Selecte Campus</option>
                                                                       <option value="Ryk">Ryk</option>
                                                                       <option value="sadiqabad">Sdk</option>
                                                                   
                                                               </select>
                                                            </div>
                                                            <!-- end col-lg-6 -->
                                                            <div class="col-lg-4">
                                                                <label for="basicpill-email-input">highest of  Education</label>
                                                                <select class=" form-control "  data-placeholder="Choose ..." name="campus">
                                                                    <option selected value="">Selecte Campus</option>
                                                                       <option value="Ryk">Ryk</option>
                                                                       <option value="sadiqabad">Sdk</option>
                                                                   
                                                               </select>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label for="basicpill-email-input">Grading Schema</label>
                                                                <select class=" form-control "  data-placeholder="Choose ..." name="campus">
                                                                    <option selected value="">Selecte Campus</option>
                                                                       <option value="Ryk">Ryk</option>
                                                                       <option value="sadiqabad">Sdk</option>
                                                                   
                                                               </select>
                                                            </div>
    
                                                            
                                                        </div><!-- end row -->
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-cstno-input">Grade Average</label>
                                                                    <input type="text" class="form-control" id="basicpill-cstno-input" placeholder="Enter your CST number">
                                                                </div>
                                                            </div><!-- end col-lg-6 -->
    
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-servicetax-input">Grade of Most Recent School</label>
                                                                    <input type="text" class="form-control" id="basicpill-servicetax-input" placeholder="Enter your Service Tax number">
                                                                </div>
                                                            </div><!-- end col-lg-6 -->
                                                        </div><!-- end row -->
                                                        <div class="row">
                                                            
                                                            <div class="col-12 mt-5">
                                                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                                                    <h3 class="mb-2">School Attend</h3>
                                        
                                                                    <div class="page-title-right">
                                                                        <ol class="breadcrumb m-0">
                                                                            {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                                                            <li class="breadcrumb-item active">Products</li> --}}
                                                                        </ol>
                                                                    </div>
                                        
                                                                </div>
                                                            </div>
                                                         
                                                        </div><!-- end row -->
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <h5 class="text-danger">Enter the school attended for Grade 2</h5>
                                                                </div>
                                                            </div><!-- end col-lg-6 -->
    
                                                            <div class="col-lg-3">
                                                                <div class="mb-3">
                                                                  
                                                                    <button  class="btn btn-primary" id="basicpill-Declaration-input" >Add Now + </button>
                                                                </div>
                                                            </div><!-- end col-lg-6 -->
                                                        </div>
                                                        <!-- end row -->
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <h5 class="text-danger">Enter the school attended for Grade 1</h5>
                                                                </div>
                                                            </div><!-- end col-lg-6 -->
    
                                                            <div class="col-lg-3">
                                                                <div class="mb-3">
                                                                  
                                                                    <button  class="btn btn-primary" id="basicpill-Declaration-input" >Add Now + </button>
                                                                </div>
                                                            </div><!-- end col-lg-6 -->
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                  <button class="btn btn-primary btn-lg">Add Attend School</button>
                                                                </div>
                                                            </div><!-- end col-lg-6 -->
    
                                                            
                                                        </div><!-- end row -->
                                                    </form>
                                                </section>
    
                                                <!-- Bank Details -->
                                                <h3>Test Score</h3>
                                                <section>
                                                    <div>
                                                        <form>
                                                            <div class="row">
                                                        
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label>English Test Type</label>
                                                                        <select class="form-select">
                                                                              <option selected>I don't have any test </option>
                                                                              <option value="AE">American Express</option>
                                                                              <option value="VI">Visa</option>
                                                                              <option value="MC">MasterCard</option>
                                                                              <option value="DI">Discover</option>
                                                                        </select>
                                                                    </div>
                                                                </div><!-- end col-lg-6 -->
                                                            </div><!-- end row -->
                                                            <div class="row">
                                                                <div class="col-12 mt-5">
                                                                    <div class="page-title-box d-flex align-items-center justify-content-between">
                                                                        <h3 class="mb-2">Additional Qualification</h3>
                                            
                                                                        <div class="page-title-right">
                                                                            <ol class="breadcrumb m-0">
                                                                                {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                                                                <li class="breadcrumb-item active">Products</li> --}}
                                                                            </ol>
                                                                        </div>
                                            
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <div class="form-check form-switch">
                                                                            <label class="form-check-label" for="flexSwitchCheckDefault">I have GRE exam scores</label>
                                                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                                                         
                                                                          </div>
                                                                          
                                                                       
                                                                      
                                                                    </div>
                                                                </div><!-- end col-lg-6 -->
    
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <div class="form-check form-switch">
                                                                            <label class="form-check-label" for="flexSwitchCheckDefault">I have GMAT exam scores</label>
                                                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                                                         
                                                                          </div>
                                                                          
                                                                       
                                                                      
                                                                    </div>
                                                                </div><!-- end col-lg-6 -->
    
                                                            </div>
                                                            <!-- end row -->
                                                        </form>
                                                    </div>
                                                </section>
    
                                                <!-- Confirm Details -->
                                                <h3>Basi Information</h3>
                                                <section>
                                                    <div class="row ">
                                                        <div class="col-lg-12">
                                                            <div class="col-lg-10 mb-6 mt-2">
                                                                <label for="basicpill-email-input">Have you been refused a visa from Canada, the USA, the United Kingdom, New Zealand, Australia or Ireland?</label><br>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="optradio" checked>Single
                                                                  </label>
                                                                  <label class="radio-inline">
                                                                    <input type="radio" name="optradio">Married
                                                                  </label>
                                                            </div>
                                                        </div><!-- end col-lg-6 -->
                                                    </div><!-- end row -->
                                                    <div class="row mt-5">
                                                        <div class="col-lg-12">
                                                            <label for="basicpill-email-input">Do you have a valid Study Permit / Visa?</label>
                                                            <select class=" form-control "  data-placeholder="Choose ..." name="campus">
                                                                <option selected value="">Selecte Campus</option>
                                                                   <option value="Ryk">Ryk</option>
                                                                   <option value="sadiqabad">Sdk</option>
                                                               
                                                           </select>
                                                        </div><!-- end col-lg-6 -->
                                                    </div><!-- end row -->

                                                    <div class="row mt-5 mb-5">
                                                        <div class="col-lg-12">
                                                            <label for="basicpill-email-input">If you answered "Yes" to any of the questions above, please provide more details below:</label>
                                                            <label for="basicpill-address-input">Passport Expiry</label>
                                                                    <textarea id="basicpill-address-input" class="form-control" rows="2" placeholder="Enter your Address"></textarea>
                                                        </div><!-- end col-lg-6 -->
                                                    </div><!-- end row -->
                                                </section>

                                                <h3>Upload Document</h3>
                                                <section>
                                                    <div class="row ">

                                                        <div class="col-12 mt-5">
                                                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                                                <h3 class="mb-2">Passport Required (Automated)</h3>
                                    
                                                                <div class="page-title-right">
                                                                    <ol class="breadcrumb m-0">
                                                                        {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                                                        <li class="breadcrumb-item active">Products</li> --}}
                                                                    </ol>
                                                                </div>
                                    
                                                            </div>
                                                        </div>
                                                       <!-- end col-lg-6 -->
                                                    </div><!-- end row -->
                                                    <div class="row ">

                                                        <div class="col-12">
                                                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                                                <h6 class="mb-2">Please provide a clear and legible photocopy of the applicant's passport which meets the following requirements: </h6>
                                    
                                                                <div class="page-title-right">
                                                                    <ol class="breadcrumb m-0">
                                                                        {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                                                        <li class="breadcrumb-item active">Products</li> --}}
                                                                    </ol>
                                                                </div>
                                    
                                                            </div>
                                                        </div>
                                                       <!-- end col-lg-6 -->
                                                    </div><!-- end row -->
                                                    <div class="row ">

                                                        <div class="col-10">
                                                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                                              
                                                                <ul>
                                                                    <li>The acceptable formats of the photocopy are .PDF, .JPEG or .PNG</li>
                                                                    <li>The photocopy needs to be entire with no cut-off at the edges</li>
                                                                    <li>    The photocopy should include all pages in the passport which clearly present the applicant's signature, biographical info including name, photo, date and place of birth, passport/travel document number, issue date and expiration date and etc


                                                                    </li>
                                                                  </ul>
                                    
                                                            </div>
                                                        </div>
                                                        <div class="col-2">
                                                            <input type="file" >
                                                        </div>
                                                       <!-- end col-lg-6 -->
                                                    </div><!-- end row -->
                                                    <div class="row">
                                                        <div class="col-6">
                                                        <p>Please be advised that the file size limit of the photocopy is 20MB.</p>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
    
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
    
                            
                            <!-- end row -->
    
                        </div> <!-- container-fluid -->
                    </div>
                    <!-- End Page-content -->
    
                    
                  
                </div>
                    
                  
                   
                    
                   
                       
          

   
    <!-- end row -->
@endsection

@section('script')
    {{-- load extra script here if needed --}}
    <!-- apexcharts init -->
    <script src="assets/js/pages/form-wizard.init.js"></script>
    
    <script src="assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
        <script src="assets/js/pages/apexcharts.init.js"></script>
        <script src="assets/js/pages/form-advanced.init.js"></script>
        <script src="assets/libs/select2/js/select2.min.js"></script>
        <script>
            function openCity(evt, cityName) {
              var i, tabcontent, tablinks;
              tabcontent = document.getElementsByClassName("tabcontent");
              for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
              }
              tablinks = document.getElementsByClassName("tablinks");
              for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
              }
              document.getElementById(cityName).style.display = "block";
              evt.currentTarget.className += " active";
            }
            
            // Get the element with id="defaultOpen" and click on it
            document.getElementById("defaultOpen").click();
            </script>

@endsection
