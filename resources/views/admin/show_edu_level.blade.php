@extends('admin.layout')

@section('content')
  
                <div class="container-fluid">
    
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Education level List</h4>
    
                                {{-- <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li> 
                                        <li class="breadcrumb-item active">User List</li>
                                    </ol>
                                </div> --}}
    
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                {{-- <a href="javascript:void(0);" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-plus me-2"></i> Add New</a> --}}
                                            </div>
                                        </div>
            
                                        <div class="col-md-6">
                                            <div class="form-inline float-md-end mb-3">
                                                <div class="search-box ms-2">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control rounded bg-light border-0" placeholder="Search...">
                                                        <i class="mdi mdi-magnify search-icon"></i>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
            
            
                                    </div>
                                    <!-- end row -->
                                    <div class="table-responsive mb-4">
                                        <table class="table table-centered table-nowrap mb-0">
                                            <thead>
                                              <tr>
                                                <th scope="col" style="width: 50px;">
                                                    <div class="form-check font-size-16">
                                                        <input type="checkbox" class="form-check-input" id="contacusercheck">
                                                        <label class="form-check-label" for="contacusercheck"></label>
                                                    </div>
                                                </th>
                                                <th scope="col">Grade Level</th>
                                                <th scope="col">Edit Level</th>
                                                <th scope="col">Delete Level</th>
                                                <th scope="col" style="width: 200px;">Action</th>
                                              </tr>
                                            </thead>
                                            @foreach ($level as $item)
                                            <tbody>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input" id="contacusercheck1">
                                                            <label class="form-check-label" for="contacusercheck1"></label>
                                                        </div>
                                                    </th>
                                                    <td>
                                                        {{-- <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle me-2"> --}}
                                                        <a href="#" class="text-body">{{$item->title}}</a>
                                                    </td>
                                                    <td> 
                                                   
                                                        <a href="" class="px-2    btn btn-primary">Edit Level</a>
                                                        {{-- {{ route('admin.jobs.edit', ['id' => $item->id]) }} --}}
                                                   </td>
                                                    <td><a href="" class="px-2    btn btn-danger">Delete Level</a></td>
                                                    <td>
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                {{-- <a href="{{ route('admin.lottery.update', ['id' => $item->id]) }}" class="px-2 text-primary"><i class="uil uil-pen font-size-18"></i></a> --}}
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="" class="px-2 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                                            </li>
                                                            <li class="list-inline-item dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="uil uil-ellipsis-v"></i>
                                                                </a>
                                                            
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                              
                                               
                                                  
                                            </tbody> 
                                            @endforeach
                                           
                                        </table>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-sm-6">
                                            <div>
                                                <p class="mb-sm-0">Showing 0 t of 10 entries</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="float-sm-end">
                                                <ul class="pagination mb-sm-0">
                                                    <li class="page-item disabled">
                                                        <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                                    </li>
                                                    <li class="page-item">
                                                       {{-- {{$province->onEachSide(1)->links()}} --}}
                                                    </li>
                                                   
                                                 
                                                   
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    
                </div> <!-- container-fluid -->
       
   

@endsection

@section('script')
    {{-- load extra script here if needed --}}
    <!-- apexcharts init -->
        <script src="assets/js/pages/apexcharts.init.js"></script>
@endsection
