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
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box d-flex align-items-center justify-content-between">
                                        <h3 class="mb-2">Your Progress</h3>
            
                                        <div class="page-title-right">
                                            <ol class="breadcrumb m-0">
                                                {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                                <li class="breadcrumb-item active">Products</li> --}}
                                            </ol>
                                        </div>
            
                                    </div>
                                </div>
                            </div>
                            <!-- start page title -->
                              
                              <div class="row  "> 
                                  <p class="text-muted">Before Applying</p>
                                 
                              <div class="col-8  justify-content-cente">
                                <button type="button" class="btn btn-primary btn-lg ml-2" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenXxl">
                                    Check Eliglibility
                                </button>
                               
                                <a href="{{route('Student.student_search')}}" class="btn btn-primary btn-lg ml-2" >
                                    Chose a Programm
                                </a>
                                 <a href="{{route('Student.student_profile')}}" class="btn btn-primary btn-lg ml-2" >
                                    Complete Prpfile
                                 </a>
                              </div>


                           </div>
                           <div class="modal fade" id="exampleModalFullscreenXxl" tabindex="-1"
                           aria-labelledby="exampleModalFullscreenXxlLabel" aria-hidden="true">
                           <div class="modal-dialog modal-fullscreen-xxl-down">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <h5 class="modal-title h4" id="exampleModalFullscreenXxlLabel">Check Eligibility</h5>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                   </div>
                                   <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title mb-4"></h4>
            
                                                    <div id="basic-example">
                                                        <!-- Seller Details -->
                                                        <h3>Background</h3>
                                                        <section>
                                                            <form>
                                                                <div class="row">
                                                                   
                                                                    <div class="col-lg-6">
                                                                        <h3>What is your nationality?</h3>
                                                                        <div class="mb-3">
                                                                            <select class="form-select">
                                                                                  <option selected>Select nationality </option>
                                                                                  <option value="AE">American Express</option>
                                                                                  <option value="VI">Visa</option>
                                                                                  <option value="MC">MasterCard</option>
                                                                                  <option value="DI">Discover</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <h3>What is your country of residence?</h3>
                                                                        <div class="mb-3">
                                                                            <select class="form-select">
                                                                                  <option selected>Select country of residence? </option>
                                                                                  <option value="AE">American Express</option>
                                                                                  <option value="VI">Visa</option>
                                                                                  <option value="MC">MasterCard</option>
                                                                                  <option value="DI">Discover</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                   
                                                                    <div class="col-lg-6">
                                                                        <h3>What is your state of residence?</h3>
                                                                        <div class="mb-3">
                                                                            <select class="form-select">
                                                                                  <option selected>Select your state of residence? </option>
                                                                                  <option value="AE">American Express</option>
                                                                                  <option value="VI">Visa</option>
                                                                                  <option value="MC">MasterCard</option>
                                                                                  <option value="DI">Discover</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <h3>Which valid study permits or visas do you have?</h3>
                                                                        <div class="mb-3">
                                                                           
                                                                               
                                                                            <div class="vstack gap-2">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" id="formCheck1" name="chk_uni" value="university">
                                                                                    <label class="form-check-label" for="formCheck1">
                                                                                        USA F1 Visa
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" id="formCheck2"  name="chk_college" value="college">
                                                                                    <label class="form-check-label" for="formCheck2">
                                                                                        Canadian Study Permit or Visitor Visa
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" id="formCheck2" name="chk_Inst" value="Institude" >
                                                                                    <label class="form-check-label" for="formCheck2">
                                                                                        UK Student Visa (Tier 4) or Short Term Study Visa
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" id="formCheck2" name="chk_school" value="school">
                                                                                    <label class="form-check-label" for="formCheck2">
                                                                                        Australian Student Visa
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" id="formCheck2" name="chk_school" value="school">
                                                                                    <label class="form-check-label" for="formCheck2">
                                                                                        I don't have this
                                                                                    </label>
                                                                                </div>
                                                                            </div> 
                                                                             
                                                                           
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                              
                                                              
                                                              
                                                            </form>
                                                        </section>
            
                                                        <!-- Company Document -->
                                                        <h3>Education </h3>
                                                        <section>
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <h3>     What is your most recent overall grade?</h3>
                                                                        <div class="mb-3">
                                                                           
                                                                        <div class="row">
                                                                            <p>Status</p>
                                                                            <div class="col-3">
                                                                                <input type="radio" id="html" name="fav_language" value="HTML">
                                                                                <label for="html">I have graduated</label><br>
                                                                            </div>
                                                                            <div class="col-3">
                                                                                <input type="radio" id="html" name="fav_language" value="HTML">
                                                                                <label for="html">I am Still Studying </label><br>
                                                                            </div>
                                                                            <div class="mt-3">
                                                                                <label for="basicpill-vatno-input">Country of Education</label>
                                                                            <select class="form-select">
                                                                                <option selected>Select Country of Education</option>
                                                                                <option value="AE">American Express</option>
                                                                                <option value="VI">Visa</option>
                                                                                <option value="MC">MasterCard</option>
                                                                                <option value="DI">Discover</option>
                                                                          </select>
                                                                            </div>
                                                                            <div class="mt-3">
                                                                                <label for="basicpill-vatno-input"> Education  Level</label>
                                                                            <select class="form-select">
                                                                                <option selected>Select Country of Education</option>
                                                                                <option value="AE">American Express</option>
                                                                                <option value="VI">Visa</option>
                                                                                <option value="MC">MasterCard</option>
                                                                                <option value="DI">Discover</option>
                                                                          </select>
                                                                            </div>
                                                                            <div class="mt-3">
                                                                                <label for="basicpill-vatno-input">Degree</label>
                                                                            <select class="form-select">
                                                                                <option selected>Select Country of Education</option>
                                                                                <option value="AE">American Express</option>
                                                                                <option value="VI">Visa</option>
                                                                                <option value="MC">MasterCard</option>
                                                                                <option value="DI">Discover</option>
                                                                          </select>
                                                                            </div>
                                                                        </div> 
                                                                               
                                                                                
                                                                        </div>
                                                                    </div><!-- end col-lg-6 -->
            
                                                                    <div class="col-lg-6">
                                                                   <h3>     What is your most recent overall grade?</h3>
                                                                   <div class="mt-3">
                                                                    <label for="basicpill-vatno-input">Grading Scheme</label>
                                                                <select class="form-select">
                                                                    <option selected>Select Grading Scheme</option>
                                                                    <option value="AE">American Express</option>
                                                                    <option value="VI">Visa</option>
                                                                    <option value="MC">MasterCard</option>
                                                                    <option value="DI">Discover</option>
                                                              </select>
                                                                </div>

                                                                <div class="mt-3">
                                                                    <label for="basicpill-vatno-input">Grading Average</label>
                                                                <select class="form-select">
                                                                    <option selected>Select Grading Average</option>
                                                                    <option value="AE">American Express</option>
                                                                    <option value="VI">Visa</option>
                                                                    <option value="MC">MasterCard</option>
                                                                    <option value="DI">Discover</option>
                                                              </select>
                                                                </div>
                                                                    </div><!-- end col-lg-6 -->
                                                                </div><!-- end row -->
                                                               <!-- end row -->
                                                               
                                                            </form>
                                                        </section>
            
                                                        <!-- Bank Details -->
                                                        <h3>Test Score</h3>
                                                        <section>
                                                            <div>
                                                                <form>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <h3>Have you taken any English proficiency tests?:</h3>
                                                                                    <input type="radio" id="html" name="fav_language" value="HTML">
                                                                                    <label for="html">IELTS</label><br>
                                                                                    <input type="radio" id="css" name="fav_language" value="CSS">
                                                                                    <label for="css">TOEFL</label><br>
                                                                                    <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                                                                                    <label for="javascript">PTE</label><br>
                                                                                    <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                                                                                    <label for="javascript">Duolingo</label><br>
                                                                                    <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                                                                                    <label for="javascript">I don't have this</label><br>
                                                                                    <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                                                                                    <label for="javascript">Not yet, but I will in the future</label><br>
                                                                                    <p>If you haven't taken a test yet, ApplyBoard can help you take it in the future.</p>
                                                                        </div><!-- end col-lg-6 -->
            
                                                                       <!-- end col-lg-6 -->
                                                                    </div><!-- end row -->
                                                                    
                                                                   <!-- end row -->
                                                                </form>
                                                            </div>
                                                        </section>
            
                                                       
            
                                                </div>
                                                <!-- end card body -->
                                            </div>
                                            <!-- end card -->
                                        </div>
                                        <!-- end col -->
                                    </div>
                                   </div>
                                  
                               </div>
                           </div>
                       </div>
                            <!-- end page title -->
                            
                          
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
       
           

@endsection
