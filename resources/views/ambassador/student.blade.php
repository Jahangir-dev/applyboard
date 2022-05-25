@extends('ambassador.layout')
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
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="card-title">Student Details</h4>
                                          
            
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Email</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Nationalty</th>
                                                    <th>Recruitment Partner</th>
                                                    <th>Recruitment type</th>
                                                    <th>Education</th>
                                                    <th>Application</th>
                                                    <th>Referral</th>
                                                    <th>Last Date</th>

                                                </tr>
                                                </thead>
            
            
                                                <tbody>
                                                <tr>
                                                    <td> 1</td>
                                                    <td>SystemArchitect@gmail.com</td>
                                                    <td>Archi</td>
                                                    <td>sys</td>
                                                    <td>Nigira</td>
                                                    <td>5</td>
                                                    <td>subPatner</td>
                                                    <td>MSc</td>
                                                    <td>Applied</td>
                                                    <td>No</td>
                                                    <td>2022/08/06</td>




                                                </tr>
                                                <tr>
                                                    <td> 1</td>
                                                    <td>SystemArchitect@gmail.com</td>
                                                    <td>Archi</td>
                                                    <td>sys</td>
                                                    <td>Nigira</td>
                                                    <td>5</td>
                                                    <td>subPatner</td>
                                                    
                                                    <td>MSc</td>
                                                    <td>Applied</td>
                                                    <td>No</td>
                                                    <td>2022/08/06</td>




                                                </tr>
                                    
                                                </tbody>
                                            </table>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->
    
                            
                            <!-- end row -->
      
                    <!-- container-fluid -->
                    
                    <!-- End Page-content -->
    
                    
                        </div>
                    </div>
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
