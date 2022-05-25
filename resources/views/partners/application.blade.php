@extends('partners.layout')

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
                                        <h3 class="mb-2"> Application Status</h3>
            
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
                              
                            
                            <div class="row">
                                <div class="col-lg-12">
                                    
                                    <div class="table-responsive mb-4">
                                        <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                                            <thead>
                                                <tr class="bg-transparent">
                                                    <th style="width: 24px;">
                                                        <div class="form-check text-center font-size-16">
                                                            <input type="checkbox" class="form-check-input" id="invoicecheck">
                                                            <label class="form-check-label" for="invoicecheck"></label>
                                                        </div>
                                                    </th>
                                                   
                                                    <th>payment Date</th>
                                                    <th>App ID</th>
                                                    <th>Student Id</th>
                                                    <th>Applay Date</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>

                                                    <th>Program</th>
                                                    <th>School</th>
                                                    <th>Start Date</th>
                                                    <th>Rucritment Partner</th>
                                                    <th>Status</th>
                                                    <th>Requirement</th>
                                                    <th>Current Stage</th>




                                                    <th style="width: 120px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
    
                                                <tr>
                                                    <td>
                                                        <div class="form-check text-center font-size-16">
                                                            <input type="checkbox" class="form-check-input" id="invoicecheck1">
                                                            <label class="form-check-label" for="invoicecheck1"></label>
                                                        </div>
                                                    </td>
                                                    
                                                    <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0131</a> </td>
                                                    <td>
                                                        10 Jul, 2020
                                                    </td>
                                                    <td>Connie Franco</td>
                                                    
                                                    <td>
                                                        $141
                                                    </td>
                                                    <td>
                                                        <div class="badge bg-soft-success font-size-12">Paid</div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <button class="btn btn-light btn-sm w-xs">Pdf <i class="uil uil-download-alt ms-2"></i></button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <button class="btn btn-light btn-sm w-xs">Pdf <i class="uil uil-download-alt ms-2"></i></button>
                                                        </div>
                                                    </td><td>
                                                        <div>
                                                            <button class="btn btn-light btn-sm w-xs">Pdf <i class="uil uil-download-alt ms-2"></i></button>
                                                        </div>
                                                    </td><td>
                                                        <div>
                                                            <button class="btn btn-light btn-sm w-xs">Pdf <i class="uil uil-download-alt ms-2"></i></button>
                                                        </div>
                                                    </td><td>
                                                        <div>
                                                            <button class="btn btn-light btn-sm w-xs">Pdf <i class="uil uil-download-alt ms-2"></i></button>
                                                        </div>
                                                    </td><td>
                                                        <div>
                                                            <button class="btn btn-light btn-sm w-xs">Pdf <i class="uil uil-download-alt ms-2"></i></button>
                                                        </div>
                                                    </td><td>
                                                        <div>
                                                            <button class="btn btn-light btn-sm w-xs">Pdf <i class="uil uil-download-alt ms-2"></i></button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <button class="btn btn-light btn-sm w-xs">Pdf <i class="uil uil-download-alt ms-2"></i></button>
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                        <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                               
                                            </tbody>
                                        </table>
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
