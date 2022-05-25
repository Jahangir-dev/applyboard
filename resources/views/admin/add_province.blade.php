@extends('admin.layout')

@section('content')
    {{-- place all page content here --}}

    <div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="row">
               
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Add Province</h4>
                             

                            <form action="{{route('admin.province.add')}}" class="custom-validation" method="post">
                                @csrf
                               <input type="hidden" name="id" value="{{$id}}">
                                <div class="mb-3">
                                    <label class="form-label">Province title</label>
                                    <div>
                                        <input class="form-control" required type="text" 
                                             name="title"     />
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                            Save
                                        </button>
                                        <button type="reset" class="btn btn-secondary waves-effect">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> 
        </div>
    </div>


@endsection

@section('script')
    {{-- load extra script here if needed --}}
    <!-- apexcharts init -->
        <script src="assets/js/pages/apexcharts.init.js"></script>
@endsection
