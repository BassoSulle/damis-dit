@extends('layouts.stock_checker')

@section('stock-checker-content')
    <!-- Breadcome start-->
    <div class="breadcome-area mg-b-30 small-dn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list shadow-reset">
                        <div class="row">
                            <div class="col-lg-6">
                                <button class="btn btn-custon-rounded-three btn-success" data-toggle="modal"
                                    data-target="#InformationproModalalert"><i class="fa fa-plus"></i>Update profile</button>
                                <div id="InformationproModalalert"
                                    class="modal modal-adminpro-general fullwidth-popup-InformationproModal zoomInUp"
                                    role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form method="post" action="">
                                                @csrf

                                                <div class="modal-close-area modal-close-df">
                                                    <a class="close" data-dismiss="modal" href="#"><i
                                                            class="fa fa-close"></i></a>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="sparkline9-list shadow-reset">
                                                                <div class="sparkline9-hd">
                                                                    <div class="main-sparkline9-hd">
                                                                        <h1>Update Profile</h1>
                                                                    </div>
                                                                </div>
                                                                <div class="sparkline9-graph">
                                                                    <div class="basic-login-form-ad">
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <div class="basic-login-inner">
                                                                                    {{-- form fields --}}

                                                                                        <div class="form-group-inner">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-4">
                                                                                                    <label class="login2">Full
                                                                                                        Name : </label>
                                                                                                </div>
                                                                                                <div class="col-lg-8">
                                                                                                    <input type="text" name="profile-name"
                                                                                                        class="form-control"
                                                                                                        placeholder="Enter Employee Full Name" />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group-inner">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-4">
                                                                                                    <label
                                                                                                        class="login2">Username
                                                                                                        : </label>
                                                                                                </div>
                                                                                                <div class="col-lg-8">
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        placeholder="Enter Username" />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        {{-- <div class="form-group-inner">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-4">
                                                                                                    <label class="login2">Photo: </label>
                                                                                                </div>
                                                                                                <div class="col-lg-8">
                                                                                                    <input type="file" name="profile-img"
                                                                                                        class="form-control"
                                                                                                        placeholder="Enter Employee Full Name" />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div> --}}
                                                                                        {{-- <div class="form-group-inner">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-4">
                                                                                                    <label class="login2">New password: </label>
                                                                                                </div>
                                                                                                <div class="col-lg-8">
                                                                                                    <input type="password"
                                                                                                        class="form-control"
                                                                                                        placeholder="Enter New password" />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div> --}}
                                                                                        {{-- <div class="form-group-inner">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-4">
                                                                                                    <label
                                                                                                        class="login2">Address :
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div class="col-lg-8">
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        placeholder="Enter Address" />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div> --}}
                                                                                        <div class="form-group-inner">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-4">
                                                                                                    <label
                                                                                                        class="login2">Phone number:
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div class="col-lg-8">
                                                                                                    <input type="number"
                                                                                                        class="form-control"
                                                                                                        placeholder="Enter Contact Number" />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    {{-- form fields end --}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer footer-modal-admin">
                                                    <a data-dismiss="modal" href="#">Cancel</a>
                                                    <a href="#">Save</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ul class="breadcome-menu">
                                    <li><a href="{{ route('stock_checker.dashboard') }}">Dashboard</a> <span
                                            class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Profile Information</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcome End-->
    <!-- Static Table Start -->
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline13-list shadow-reset">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd pt-3 pb-5">
                                <h1 class="mt-3 mb-5">Profile Info</h1>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body justify-content-center">
                                                <img src="{{ asset('asset/img/profile/1.jpg') }}" alt="user-image" width="400px" height="auto">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body mt-5 mb-5 mx-4">
                                                <div class="row">
                                                    <div class="col-md-4 fw-bold">Name:</div>
                                                    <div class="col-md-5">Ally Juma Hassani</div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-md-4 fw-bold">Username:</div>
                                                    <div class="col-md-5">Ally</div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-md-4 fw-bold">Phone number:</div>
                                                    <div class="col-md-5">+255 789 678 234</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        {{-- profile infomation space  --}}
                        <div class="d-flex justify-content-around">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Static Table End -->
    @endsection
