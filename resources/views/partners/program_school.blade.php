@extends('partners.layout')

@section('content')
    {{-- place all page content here --}}
    <style>
                   
        /* Style the tab */
        .tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
        </style>

    
    <!-- end row -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Products</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active">Products</li> --}}
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-4 col-lg-5  ">
                        <div class="card">
                           

                            <div class="custom-accordion">
                                <div class="p-4 border-top">
                                    <div>
                                        <h5 class="font-size-14 mb-0"><a href="#filterproduct-discount-collapse" class="collapsed text-dark d-block" data-bs-toggle="collapse">Eligibility <i class="mdi mdi-chevron-up float-end accor-down-icon"></i></a></h5>

                                        <div class="collapse" id="filterproduct-discount-collapse">
                                            <div class="mt-4">
                                                <div class="mb-0">
                                                    <label class="form-label">Do you have a valid Study Permit / Visa?</label>
                                                   
    
                                                        <select class=" form-control "  data-placeholder="Choose ..."  name="country">
                                                        
                                                            <option selected>Select Country </option>
                                                            
                                                                {{-- @foreach ($country as $country)
                                                                <option value="{{$country->name}}">{{$country->name}}</option>
                                                                @endforeach --}}
                                                            
                                                        </select>
                                                </div>
  
                                            </div>
                                            <div class="mt-4">
                                                <div class="mb-0">
                                                    <label class="form-label">Education Country</label>
                                                   
    
                                                        <select class=" form-control "  data-placeholder="Choose ..." name="campus">
                                                             <option selected value="">Selecte Campus</option>
                                                                <option value="Ryk">Ryk</option>
                                                                <option value="sadiqabad">Sdk</option>
                                                            
                                                        </select>
                                                </div>
  
                                            </div>
                                            <div class="mt-4">
                                                <div class="mb-0">
                                                    <label class="form-label">Education Level</label>
                                                   
    
                                                        <select class=" form-control "  data-placeholder="Choose ..." name="campus">
                                                             <option selected value="">Selecte Campus</option>
                                                                <option value="Ryk">Ryk</option>
                                                                <option value="sadiqabad">Sdk</option>
                                                            
                                                        </select>
                                                </div>
  
                                            </div>
                                            <div class="mt-4">
                                                <div class="mb-0">
                                                    <label class="form-label">Grading Scheme</label>
                                                   
    
                                                        <select class=" form-control "  data-placeholder="Choose ..." name="campus">
                                                             <option selected value="">Selecte Campus</option>
                                                                <option value="Ryk">Ryk</option>
                                                                <option value="sadiqabad">Sdk</option>
                                                            
                                                        </select>
                                                </div>
  
                                            </div>
                                            <div class="mt-4">
                                                <div class="mb-0">
                                                    <label class="form-label">English Exam Type</label>
                                                   
    
                                                        <select class=" form-control "  data-placeholder="Choose ..." name="campus">
                                                             <option selected value="">Selecte Campus</option>
                                                                <option value="Ryk">Ryk</option>
                                                                <option value="sadiqabad">Sdk</option>
                                                            
                                                        </select>
                                                </div>
  
                                            </div>





                                            <div class="mt-4">
                                                <div class="form-check mt-2">
                                                    <input type="radio" id="productdiscountRadio1" name="productdiscountRadio" class="form-check-input">
                                                    <label class="form-check-label" for="productdiscountRadio1">50% or more</label>
                                                </div>
                                                <div class="form-check mt-2">
                                                    <input type="radio" id="productdiscountRadio2" name="productdiscountRadio" class="form-check-input">
                                                    <label class="form-check-label" for="productdiscountRadio2">40% or more</label>
                                                </div>
                                                <div class="form-check mt-2">
                                                    <input type="radio" id="productdiscountRadio3" name="productdiscountRadio" class="form-check-input">
                                                    <label class="form-check-label" for="productdiscountRadio3">30% or more</label>
                                                </div>
                                                <div class="form-check mt-2">
                                                    <input type="radio" id="productdiscountRadio4" name="productdiscountRadio" class="form-check-input">
                                                    <label class="form-check-label" for="productdiscountRadio4">20% or more</label>
                                                </div>
                                                <div class="form-check mt-2">
                                                    <input type="radio" id="productdiscountRadio5" name="productdiscountRadio" class="form-check-input">
                                                    <label class="form-check-label" for="productdiscountRadio5">10% or more</label>
                                                </div>
                                                <div class="form-check mt-2">
                                                    <input type="radio" id="productdiscountRadio6" name="productdiscountRadio" class="form-check-input">
                                                    <label class="form-check-label" for="productdiscountRadio6">Less than 10%</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                              




                                    <form method="POST" action="{{route('admin.search_course')}}">
                                        @csrf
                                <div class="p-4 border-top">
                                    <div>
                                        <h5 class="font-size-14 mb-0"><a href="#filterprodductcolor-collapse" class="text-dark d-block" data-bs-toggle="collapse">School Filter <i class="mdi mdi-chevron-up float-end accor-down-icon"></i></a></h5>

                                        <div class="collapse show" id="filterprodductcolor-collapse">
                                            <div class="mt-4">
                                                <div class="mb-0">
                                                    <label class="form-label">Country</label>
                                                   
    
                                                        <select class=" form-control "  data-placeholder="Choose ..."  name="country">
                                                        
                                                            <option selected>Select Country </option>
                                                            
                                                                {{-- @foreach ($country as $country)
                                                                <option value="{{$country->name}}">{{$country->name}}</option>
                                                                @endforeach --}}
                                                            
                                                        </select>
                                                </div>
  
                                            </div>
                                            <div class="mt-4">
                                                <div class="mb-0">
                                                    <label class="form-label">Province/state</label>
                                                   
    
                                                        <select class=" form-control "  data-placeholder="Choose ..." name="province">
                                                            <option selected value=""> Select  Province</option>
                                                            {{-- @foreach ($province as $province)
                                                            <option value={{$province->title}}>{{$province->title}}</option>
                                                            @endforeach --}}
                                                             
                                                                
                                                        </select>
                                                </div>
  
                                            </div>
                                            <div class="mt-4">
                                                <div class="mb-0">
                                                    <label class="form-label">Campus</label>
                                                   
    
                                                        <select class=" form-control "  data-placeholder="Choose ..." name="campus">
                                                             <option selected value="">Selecte Campus</option>
                                                                <option value="Ryk">Ryk</option>
                                                                <option value="sadiqabad">Sdk</option>
                                                            
                                                        </select>
                                                </div>
  
                                            </div>
                                            <div class="mt-4">
                                                <label class="form-label">School Type</label>
                                            <div class="vstack gap-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="formCheck1" name="chk_uni" value="university">
                                                    <label class="form-check-label" for="formCheck1">
                                                        University
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="formCheck2"  name="chk_college" value="college">
                                                    <label class="form-check-label" for="formCheck2">
                                                       Collage
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="formCheck2" name="chk_Inst" value="Institude" >
                                                    <label class="form-check-label" for="formCheck2">
                                                       English Institude
                                                    </label>
                                                </div><div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="formCheck2" name="chk_school" value="school">
                                                    <label class="form-check-label" for="formCheck2">
                                                       High School
                                                    </label>
                                                </div>
                                            </div> 
                                            </div>    
                                                  
                                            <div class="mt-4">
                                                <div class="mb-0">
                                                    <label class="form-label">School</label>
                                                   
    
                                                        <select class=" form-control "  data-placeholder="Choose ..." name="university">
                                                        
                                                                <option value="VA">Virginia</option>
                                                                <option value="WV">West Virginia</option>
                                                            
                                                        </select>
                                                </div>
  
                                            </div>
                                        </div>

                                    </div>
                                </div>



                                <div class="p-4 border-top">
                                    <div>
                                        <h5 class="font-size-14 mb-0"><a href="#filterproduct-color-collapse" class="text-dark d-block" data-bs-toggle="collapse">Program Filter <i class="mdi mdi-chevron-up float-end accor-down-icon"></i></a></h5>

                                        <div class="collapse show" id="filterproduct-color-collapse">
                                            <div class="mt-4">
                                                <div class="mb-0">
                                                    <label class="form-label">Program Levels</label>
                                                   
    
                                                        <select class=" form-control "  data-placeholder="Choose ..."  name="country">
                                                        
                                                            <option selected>Select Country </option>
                                                            
                                                                {{-- @foreach ($country as $country)
                                                                <option value="{{$country->name}}">{{$country->name}}</option>
                                                                @endforeach --}}
                                                            
                                                        </select>
                                                </div>
  
                                            </div>
                                            <div class="mt-4">
                                                <div class="mb-0">
                                                    <label class="form-label">Intakes</label>
                                                   
    
                                                        <select class=" form-control "  data-placeholder="Choose ..." name="campus">
                                                             <option selected value="">Selecte Campus</option>
                                                                <option value="Ryk">Ryk</option>
                                                                <option value="sadiqabad">Sdk</option>
                                                            
                                                        </select>
                                                </div>
  
                                            </div>
                                            <div class="mt-4">
                                                <div class="mb-0">
                                                    <label class="form-label">Post-Secondary Disciplinel</label>
                                                   
    
                                                        <select class=" form-control "  data-placeholder="Choose ..." name="campus">
                                                             <option selected value="">Selecte Campus</option>
                                                                <option value="Ryk">Ryk</option>
                                                                <option value="sadiqabad">Sdk</option>
                                                            
                                                        </select>
                                                </div>
  
                                            </div>
                                            <div class="mt-4">
                                                <div class="mb-0">
                                                    <label class="form-label">Post-Secondary Sub-Categories</label>
                                                   
    
                                                        <select class=" form-control "  data-placeholder="Choose ..." name="campus">
                                                             <option selected value="">Selecte Campus</option>
                                                                <option value="Ryk">Ryk</option>
                                                                <option value="sadiqabad">Sdk</option>
                                                            
                                                        </select>
                                                </div>
  
                                            </div>
                                            {{-- <div class="mt-4">
                                                <div class="form-check mt-2">
                                                    <input type="radio" id="productratingRadio1" name="productratingRadio1" class="form-check-input">
                                                    <label class="form-check-label" for="productratingRadio1">4 <i class="mdi mdi-star text-warning"></i>  & Above</label>
                                                </div>
                                                <div class="form-check mt-2">
                                                    <input type="radio" id="productratingRadio2" name="productratingRadio1" class="form-check-input">
                                                    <label class="form-check-label" for="productratingRadio2">3 <i class="mdi mdi-star text-warning"></i>  & Above</label>
                                                </div>
                                                <div class="form-check mt-2">
                                                    <input type="radio" id="productratingRadio3" name="productratingRadio1" class="form-check-input">
                                                    <label class="form-check-label" for="productratingRadio3">2 <i class="mdi mdi-star text-warning"></i>  & Above</label>
                                                </div>
                                                <div class="form-check mt-2">
                                                    <input type="radio" id="productratingRadio4" name="productratingRadio1" class="form-check-input">
                                                    <label class="form-check-label" for="productratingRadio4">1 <i class="mdi mdi-star text-warning"></i></label>
                                                </div>
                                            </div> --}}
                                        </div>
                                    
                                        {{-- <div class="p-4 border-top">
                                            <div>
                                                <h5 class="font-size-14 mb-4">Price</h5>
    
                                                <input type="text" id="pricerange">
                                            </div>
                                        </div> --}}
                                    </div>
                                    <br>
                                    <input type="submit" value="Applay Filter" class="btn btn-primary" style="float: Right">
                                    <br>
                                </div>
                                    </form>
                               
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-7">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                {{-- <h5>Showing result for "Shoes"</h5> --}}
                                                <ol class="breadcrumb p-0 bg-transparent mb-2">
                                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Footwear</a></li>
                                                    {{-- <li class="breadcrumb-item active">Shoes</li> --}}
                                                </ol>
                                            </div>
                                        </div>
    
                                        <div class="col-md-6">
                                            <div class="form-inline float-md-end">
                                                <div class="search-box ms-2">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control bg-light border-light rounded" placeholder="Search...">
                                                        <i class="mdi mdi-magnify search-icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                   
                                
                                    <div class="tab">
                                        <button class="tablinks" onclick="openCity(event, 'Program')" id='defaultOpen'>Program</button>
                                        <button class="tablinks" onclick="openCity(event, 'Paris')">School</button>
                                       
                                      </div>
                                      
                                      <div id="Program" class="tabcontent">
                                       
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                       
                                                        <div class="table-responsive">
                                                            <table class="table table-centered table-nowrap mb-0">
                                                                <thead class="table-light">
                                                                    <tr>
                                                                        
                                                                        <th>University Name</th>
                                                                        <th>Country</th>
                                                                        <th>State</th>
                                                                        <th>Course</th>
                                                                        <th>Tution Fee</th>
                                                                        <th>Applicat Fee</th>
                                                                        <th>Applay</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                       
                                                                        <td>Punjab University </td>
                                                                        <td>Pakistan</td>
                                                                        <td>
                                                                            Punjab
                                                                        </td>
                                                                        <td>
                                                                            Msc
                                                                        </td>
                                                                        <td>
                                                                            $500
                                                                            {{-- <span class="badge rounded-pill bg-soft-success font-size-12">Paid</span> --}}
                                                                        </td>
                                                                        <td>
                                                                            Free
                                                                            {{-- <i class="fab fa-cc-mastercard me-1"></i> Mastercard --}}
                                                                        </td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                                             Applay
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                       
                                                                        <td>Karachi University </td>
                                                                        <td>Pakistan</td>
                                                                        <td>
                                                                            Karachi
                                                                        </td>
                                                                        <td>
                                                                            Msc
                                                                        </td>
                                                                        <td>
                                                                            $500
                                                                            {{-- <span class="badge rounded-pill bg-soft-success font-size-12">Paid</span> --}}
                                                                        </td>
                                                                        <td>
                                                                            Free
                                                                            {{-- <i class="fab fa-cc-mastercard me-1"></i> Mastercard --}}
                                                                        </td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                                             Applay
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                       
                                                                        <td><a href="javascript: void(0);" class="text-body fw-bold">Islamia</a> </td>
                                                                        <td>Pakistan</td>
                                                                        <td>
                                                                            Punjab
                                                                        </td>
                                                                        <td>
                                                                            Msc
                                                                        </td>
                                                                        <td>
                                                                            $500
                                                                            {{-- <span class="badge rounded-pill bg-soft-success font-size-12">Paid</span> --}}
                                                                        </td>
                                                                        <td>
                                                                            Free
                                                                            {{-- <i class="fab fa-cc-mastercard me-1"></i> Mastercard --}}
                                                                        </td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                                             Applay
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                 
                
                                                                  
                                                                   
                                                                  
                                                                 
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- end table-responsive -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                      
                                      <div id="Paris" class="tabcontent">
                                       

                                        <div class="row">
                                            <div class="col-xl-6 col-sm-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-shrink-0 me-4">
                                                                <div class="avatar-sm">
                                                                    <span class="avatar-title bg-soft-primary text-primary font-size-16 rounded-circle">
                                                                        C
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 align-self-center">
                                                                <div class="border-bottom pb-1">
                                                                    <h5 class="text-truncate font-size-16 mb-1"><a href="#" class="text-dark">Morrie Mages</a></h5>
                                                                    <p class="text-muted">
                                                                        <i class="mdi mdi-account me-1"></i> Clifton Taylor
                                                                    </p>
                                                                </div>
                                                               
                                                            </div>
                                                        </div>
                
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-sm-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-shrink-0 me-4">
                                                                <div class="avatar-sm">
                                                                    <span class="avatar-title bg-soft-primary text-primary font-size-16 rounded-circle">
                                                                        D
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 align-self-center">
                                                                <div class="border-bottom pb-1">
                                                                    <h5 class="text-truncate font-size-16 mb-1"><a href="#" class="text-dark">Morrie Mages</a></h5>
                                                                    <p class="text-muted">
                                                                        <i class="mdi mdi-account me-1"></i> Clifton Taylor
                                                                    </p>
                                                                </div>
                                                               
                                                            </div>
                                                        </div>
                
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6 col-sm-6">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-start">
                                                                <div class="flex-shrink-0 me-4">
                                                                    <div class="avatar-sm">
                                                                        <span class="avatar-title bg-soft-primary text-primary font-size-16 rounded-circle">
                                                                            M
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 align-self-center">
                                                                    <div class="border-bottom pb-1">
                                                                        <h5 class="text-truncate font-size-16 mb-1"><a href="#" class="text-dark">Morrie Mages</a></h5>
                                                                        <p class="text-muted">
                                                                            <i class="mdi mdi-account me-1"></i> Clifton Taylor
                                                                        </p>
                                                                    </div>
                                                                   
                                                                </div>
                                                            </div>
                    
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-sm-6">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-start">
                                                                <div class="flex-shrink-0 me-4">
                                                                    <div class="avatar-sm">
                                                                        <span class="avatar-title bg-soft-primary text-primary font-size-16 rounded-circle">
                                                                            H
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 align-self-center">
                                                                    <div class="border-bottom pb-1">
                                                                        <h5 class="text-truncate font-size-16 mb-1"><a href="#" class="text-dark">Morrie Mages</a></h5>
                                                                        <p class="text-muted">
                                                                            <i class="mdi mdi-account me-1"></i> Clifton Taylor
                                                                        </p>
                                                                    </div>
                                                                   
                                                                </div>
                                                            </div>
                    
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                      </div>
                                      
                                     

                                   

                                  
                                    <!-- end row -->

                                    <div class="row mt-4">
                                        <div class="col-sm-6">
                                            <div>
                                                <p class="mb-sm-0">Page 2 of 84</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="float-sm-end">
                                                <ul class="pagination pagination-rounded mb-sm-0">
                                                    <li class="page-item disabled">
                                                        <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">1</a>
                                                    </li>
                                                    <li class="page-item active">
                                                        <a href="#" class="page-link">2</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">3</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">4</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">5</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->
               
                    </head>
                    <body>
                    
                  
                   
                    
                   
                       
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        
       
    </div>

   
    <!-- end row -->
@endsection

@section('script')
    {{-- load extra script here if needed --}}
    <!-- apexcharts init -->
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
