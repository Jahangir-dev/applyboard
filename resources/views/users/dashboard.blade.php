@extends('layouts.main')

@section('content')
    {{-- place all page content here --}}

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Dashboard</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">

                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="float-end mt-2">
                        <div><i class="fa-solid fa-chart-line fa-3x text-success"></i></div>
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1">$<span data-plugin="counterup">34,152</span></h4>
                        <p class="text-muted mb-0">Total Revenue</p>
                    </div>

                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="float-end mt-2">
                        <div> <i class="fa-solid fa-person-digging fa-3x text-primary"></i> </div>
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">5,643</span></h4>
                        <p class="text-muted mb-0">Active Jobs</p>
                    </div>

                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="float-end mt-2">
                        <div> <i class="fa-solid fa-user-check fa-3x text-info"></i> </div>
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">45,254</span></h4>
                        <p class="text-muted mb-0">Active Users</p>
                    </div>

                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">

            <div class="card">
                <div class="card-body">
                    <div class="float-end mt-2">
                        <div> <i class="fa-solid fa-chart-pie fa-3x text-danger"></i> </div>
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">12.58</span>%</h4>
                        <p class="text-muted mb-0">Lottery Sold</p>
                    </div>

                </div>
            </div>
        </div> <!-- end col-->
    </div> <!-- end row-->


    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Jobs</h4>

                    <div id="spline_area" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
            <!--end card-->
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Subscriptions</h4>

                    <div id="column_chart" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
            <!--end card-->
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <div class="dropdown">
                            <a class=" dropdown-toggle" href="#" id="dropdownMenuButton2" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted">All Members<i class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                                <a class="dropdown-item" href="#">Locations</a>
                                <a class="dropdown-item" href="#">Revenue</a>
                                <a class="dropdown-item" href="#">Join Date</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="card-title mb-4">Top Users</h4>

                    <div data-simplebar style="max-height: 336px;">
                        <div class="table-responsive">
                            <table class="table table-borderless table-centered table-nowrap">
                                <tbody>
                                    <tr>
                                        <td style="width: 20px;"><img src="assets/images/users/avatar-4.jpg"
                                                class="avatar-xs rounded-circle " alt="..."></td>
                                        <td>
                                            <h6 class="font-size-15 mb-1 fw-normal">Glenn Holden</h6>
                                            <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i>
                                                Nevada</p>
                                        </td>
                                        <td><span class="badge bg-soft-danger font-size-12">Cancel</span></td>
                                        <td class="text-muted fw-semibold text-end"><i
                                                class="icon-xs icon me-2 text-success"
                                                data-feather="trending-up"></i>$250.00</td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/users/avatar-5.jpg" class="avatar-xs rounded-circle "
                                                alt="..."></td>
                                        <td>
                                            <h6 class="font-size-15 mb-1 fw-normal">Lolita Hamill</h6>
                                            <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Texas
                                            </p>
                                        </td>
                                        <td><span class="badge bg-soft-success font-size-12">Success</span></td>
                                        <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-danger"
                                                data-feather="trending-down"></i>$110.00</td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/users/avatar-6.jpg" class="avatar-xs rounded-circle "
                                                alt="..."></td>
                                        <td>
                                            <h6 class="font-size-15 mb-1 fw-normal">Robert Mercer</h6>
                                            <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i>
                                                California</p>
                                        </td>
                                        <td><span class="badge bg-soft-info font-size-12">Active</span></td>
                                        <td class="text-muted fw-semibold text-end"><i
                                                class="icon-xs icon me-2 text-success"
                                                data-feather="trending-up"></i>$420.00</td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/users/avatar-7.jpg" class="avatar-xs rounded-circle "
                                                alt="..."></td>
                                        <td>
                                            <h6 class="font-size-15 mb-1 fw-normal">Marie Kim</h6>
                                            <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i>
                                                Montana</p>
                                        </td>
                                        <td><span class="badge bg-soft-warning font-size-12">Pending</span></td>
                                        <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-danger"
                                                data-feather="trending-down"></i>$120.00</td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/users/avatar-8.jpg" class="avatar-xs rounded-circle "
                                                alt="..."></td>
                                        <td>
                                            <h6 class="font-size-15 mb-1 fw-normal">Sonya Henshaw</h6>
                                            <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i>
                                                Colorado</p>
                                        </td>
                                        <td><span class="badge bg-soft-info font-size-12">Active</span></td>
                                        <td class="text-muted fw-semibold text-end"><i
                                                class="icon-xs icon me-2 text-success"
                                                data-feather="trending-up"></i>$112.00</td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/users/avatar-2.jpg" class="avatar-xs rounded-circle "
                                                alt="..."></td>
                                        <td>
                                            <h6 class="font-size-15 mb-1 fw-normal">Marie Kim</h6>
                                            <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i>
                                                Australia</p>
                                        </td>
                                        <td><span class="badge bg-soft-success font-size-12">Success</span></td>
                                        <td class="text-muted fw-semibold text-end"><i
                                                class="icon-xs icon me-2 text-danger"
                                                data-feather="trending-down"></i>$120.00</td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/users/avatar-1.jpg" class="avatar-xs rounded-circle "
                                                alt="..."></td>
                                        <td>
                                            <h6 class="font-size-15 mb-1 fw-normal">Sonya Henshaw</h6>
                                            <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i>
                                                India
                                            </p>
                                        </td>
                                        <td><span class="badge bg-soft-danger font-size-12">Cancel</span></td>
                                        <td class="text-muted fw-semibold text-end"><i
                                                class="icon-xs icon me-2 text-success"
                                                data-feather="trending-up"></i>$112.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- enbd table-responsive-->
                    </div> <!-- data-sidebar-->
                </div><!-- end card-body-->
            </div> <!-- end card-->
        </div><!-- end col -->

        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" id="dropdownMenuButton3" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted">Recent<i class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton3">
                                <a class="dropdown-item" href="#">Recent</a>
                                <a class="dropdown-item" href="#">By Users</a>
                            </div>
                        </div>
                    </div>

                    <h4 class="card-title mb-4">Recent Activity</h4>

                    <ol class="activity-feed mb-0 ps-2" data-simplebar style="max-height: 336px;">
                        <li class="feed-item">
                            <div class="feed-item-list">
                                <p class="text-muted mb-1 font-size-13">Today<small class="d-inline-block ms-1">12:20
                                        pm</small></p>
                                <p class="mb-0">Andrei Coman magna sed porta finibus, risus
                                    posted a new article: <span class="text-primary">Forget UX
                                        Rowland</span></p>
                            </div>
                        </li>
                        <li class="feed-item">
                            <p class="text-muted mb-1 font-size-13">22 Jul, 2020 <small class="d-inline-block ms-1">12:36
                                    pm</small></p>
                            <p class="mb-0">Andrei Coman posted a new article: <span
                                    class="text-primary">Designer Alex</span></p>
                        </li>
                        <li class="feed-item">
                            <p class="text-muted mb-1 font-size-13">18 Jul, 2020 <small class="d-inline-block ms-1">07:56
                                    am</small></p>
                            <p class="mb-0">Zack Wetass, sed porta finibus, risus Chris Wallace
                                Commented <span class="text-primary"> Developer Moreno</span></p>
                        </li>
                        <li class="feed-item">
                            <p class="text-muted mb-1 font-size-13">10 Jul, 2020 <small class="d-inline-block ms-1">08:42
                                    pm</small></p>
                            <p class="mb-0">Zack Wetass, Chris combined Commented <span
                                    class="text-primary">UX Murphy</span></p>
                        </li>

                        <li class="feed-item">
                            <p class="text-muted mb-1 font-size-13">23 Jun, 2020 <small class="d-inline-block ms-1">12:22
                                    am</small></p>
                            <p class="mb-0">Zack Wetass, sed porta finibus, risus Chris Wallace
                                Commented <span class="text-primary"> Developer Moreno</span></p>
                        </li>
                        <li class="feed-item pb-1">
                            <p class="text-muted mb-1 font-size-13">20 Jun, 2020 <small class="d-inline-block ms-1">09:48
                                    pm</small></p>
                            <p class="mb-0">Zack Wetass, Chris combined Commented <span
                                    class="text-primary">UX Murphy</span></p>
                        </li>

                    </ol>

                </div>
            </div>
        </div>


    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Latest Transaction</h4>
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th style="width: 20px;">
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                            <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                        </div>
                                    </th>
                                    <th>Order ID</th>
                                    <th>Billing Name</th>
                                    <th>Date</th>
                                    <th>Total</th>
                                    <th>Payment Status</th>
                                    <th>Payment Method</th>
                                    <th>View Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                            <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2540</a> </td>
                                    <td>Neal Matthews</td>
                                    <td>
                                        07 Oct, 2019
                                    </td>
                                    <td>
                                        $400
                                    </td>
                                    <td>
                                        <span class="badge rounded-pill bg-soft-success font-size-12">Paid</span>
                                    </td>
                                    <td>
                                        <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                    </td>
                                    <td>
                                        <button type="button"
                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                            View Details
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input" id="customCheck3">
                                            <label class="form-check-label" for="customCheck3">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2541</a> </td>
                                    <td>Jamal Burnett</td>
                                    <td>
                                        07 Oct, 2019
                                    </td>
                                    <td>
                                        $380
                                    </td>
                                    <td>
                                        <span class="badge rounded-pill bg-soft-danger font-size-12">Chargeback</span>
                                    </td>
                                    <td>
                                        <i class="fab fa-cc-visa me-1"></i> Visa
                                    </td>
                                    <td>
                                        <button type="button"
                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                            View Details
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input" id="customCheck4">
                                            <label class="form-check-label" for="customCheck4">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2542</a> </td>
                                    <td>Juan Mitchell</td>
                                    <td>
                                        06 Oct, 2019
                                    </td>
                                    <td>
                                        $384
                                    </td>
                                    <td>
                                        <span class="badge rounded-pill bg-soft-success font-size-12">Paid</span>
                                    </td>
                                    <td>
                                        <i class="fab fa-cc-paypal me-1"></i> Paypal
                                    </td>
                                    <td>
                                        <button type="button"
                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                            View Details
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input" id="customCheck5">
                                            <label class="form-check-label" for="customCheck5">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2543</a> </td>
                                    <td>Barry Dick</td>
                                    <td>
                                        05 Oct, 2019
                                    </td>
                                    <td>
                                        $412
                                    </td>
                                    <td>
                                        <span class="badge rounded-pill bg-soft-success font-size-12">Paid</span>
                                    </td>
                                    <td>
                                        <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                    </td>
                                    <td>
                                        <button type="button"
                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                            View Details
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input" id="customCheck6">
                                            <label class="form-check-label" for="customCheck6">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2544</a> </td>
                                    <td>Ronald Taylor</td>
                                    <td>
                                        04 Oct, 2019
                                    </td>
                                    <td>
                                        $404
                                    </td>
                                    <td>
                                        <span class="badge rounded-pill bg-soft-warning font-size-12">Refund</span>
                                    </td>
                                    <td>
                                        <i class="fab fa-cc-visa me-1"></i> Visa
                                    </td>
                                    <td>
                                        <button type="button"
                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                            View Details
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input" id="customCheck7">
                                            <label class="form-check-label" for="customCheck7">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2545</a> </td>
                                    <td>Jacob Hunter</td>
                                    <td>
                                        04 Oct, 2019
                                    </td>
                                    <td>
                                        $392
                                    </td>
                                    <td>
                                        <span class="badge rounded-pill bg-soft-success font-size-12">Paid</span>
                                    </td>
                                    <td>
                                        <i class="fab fa-cc-paypal me-1"></i> Paypal
                                    </td>
                                    <td>
                                        <button type="button"
                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                            View Details
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
    <!-- end row -->
@endsection

@section('script')
    {{-- load extra script here if needed --}}
    <!-- apexcharts init -->
        <script src="assets/js/pages/apexcharts.init.js"></script>
@endsection
