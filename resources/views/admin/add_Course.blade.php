@extends('admin.layout')

@section('content')
    {{-- place all page content here --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form layouts</h4>

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="mt-4">
                               
                                <form method="POST" action="{{route('admin.create_course')}}">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="formrow-Fullname-input">Couese Title</label>
                                        <input type="text" class="form-control" id="formrow-Fullname-input" placeholder="Enter Course full Name" name="Ctitle">
                                    </div>

                                    <div class="row">                                                            
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="formrow-password-input">University Name</label>
                                                <input type="text" class="form-control" id="formrow-password-input" placeholder="Enter University Name " name="Uname">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="formrow-password-input">Program Name</label>
                                                <input type="text" class="form-control" id="formrow-password-input" placeholder="Enter Program Name" name="Pname">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">                                                            
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="formrow-password-input">Country Name</label>
                                                <select class="form-select"  name="country" >
                                                    <option selected >Select Country</option>
                                                    @foreach ($country as $country )
                                                    <option   value="{{$country->id}}"  id="show-country">{{$country->name}}</option>
                                                    @endforeach
                                                </select>
                                             
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="formrow-password-input">Province Name</label>
                                                <select class="form-select" name="province" >
                                                    <option selected>Select Country Province</option>
                                                     {{-- @foreach ($Province as $Province )
                                                    <option value="{{$Province->title}}">{{$Province->title}}</option>
                                                    @endforeach 
                                                    --}}
                                                    <option id='category_profit'>  </option> 
                                                </select>
                                             
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">                                                            
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="formrow-password-input">Education Name</label>
                                                <select class="form-select"  name="edu">
                                                    <option selected>Select Education</option>
                                                    @foreach ($Education as $Education )
                                                    <option value="{{$Education->name}}">{{$Education->name}}</option>
                                                    @endforeach
                                                    
                                                </select>
                                             
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="formrow-password-input">Education Level</label>
                                                <select class="form-select" name="Elevel" >
                                                    <option selected>Select Education Level</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                             
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">                                                            
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="formrow-password-input">Tution Fee</label>
                                                <input type="text" class="form-control" id="formrow-password-input" placeholder="Tution Fee " name="Tfee">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="formrow-password-input">Application Fee</label>
                                                <input type="text" class="form-control" id="formrow-password-input" placeholder="Application Fee" name="Afee">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="formrow-password-input">Campus</label>
                                                <input type="text" class="form-control" id="formrow-password-input" placeholder="Campus City" name="campus">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="formrow-password-input">Institude</label>
                                                <input type="text" class="form-control" id="formrow-password-input" placeholder="Campus City" name="campus">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="formrow-customCheck">
                                        <label class="form-check-label" for="formrow-customCheck">Check me out</label>
                                    </div>
                                    
                                    <div class="d-flex flex-wrap gap-3 mt-3">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light w-md">Submit</button>
                                        <button type="reset" class="btn btn-outline-danger waves-effect waves-light w-md" id="show-country">Reset</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                      
                    </div>

                  

                    
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')
    {{-- load extra script here if needed --}}
    <!-- apexcharts init -->
        <script src="assets/js/pages/apexcharts.init.js"></script>
        <script>
            $(document).ready(function () {
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
          
        
            
             /* When click show user */
              $('body').on('click', '#show-country', function (e) {
                  e.preventDefault();
                  var id  = $(this).val();
                console.log(id);
                $.ajax({
                    url: "/admin/get_province/"+id,
               // url: BaseURI + '/fcontroller',
              //  data: car,
                type: "GET",
                success:function(result)
                {
                 //   console.log(result.province[1].title);
                    $.each(result, function (i, value) {
                $('#category_profit').append('<option id=' + JSON.stringify(value.id) + '>' + JSON.stringify(value.province.) + '</option>');
            });
                },
                error:function(result)
                {
                    console.log("error");
                }
                });
             });
          
            });
          
          </script> 
@endsection
