@extends('layouts.head-of-section')

@section('head-of-section-content')
<livewire:section.head-of-room>
            <!-- Breadcome start-->
            {{-- <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="breadcome-heading">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Employee</a> <span class="bread-slash"></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="breadcome-area des-none mg-b-30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
												<input type="text" placeholder="Search..." class="form-control">
												<a href=""><i class="fa fa-search"></i></a>
											</form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Assign Asset</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Assign Asset</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Asset Assignment to Employee  <span class="table-project-n"></span> Form Table</h1>
                                        <div class="sparkline13-outline-icon">
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">

                                        <div id="toolbar">
                                            <form action="">
                                            <select class="form-control">
                                                <option value="">Select Item</option>
                                                <option value="all">Item 1</option>
                                                <option value="selected">Item 2</option>
                                            </select>
                                            <select class="form-control" style="margin-left: 105%; margin-top: -20.5%">
                                                <option value="">Select Employee</option>
                                                <option value="all">Employee 1</option>
                                                <option value="selected">Employee 2</option>
                                            </select>
                                            <button type="submit" class="btn btn-info" style="margin-left: 210%; margin-top: -43%">Go!</button>
                                            </form>
                                        </div>

                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true"  data-show-refresh="true" data-key-events="true"  data-resizable="true" data-cookie="true" data-cookie-id-table="saveId"  data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th>Item Name</th>
                                                    <th >Employee Name</th>
                                                    <th >Branch</th>
                                                    <th >Quantity</th>
                                                    <th >Condition</th>
                                                    <th >Remarks</th>
                                                    <th >Date Assigned</th>
                                                    <th ></th>
                                                </tr>
                                            </thead>
                <tbody>
                    <tr>
                        <td>E012039</td>
                        <td>Freeman Mkhulu</td>
                        <td>Chief</td>
                        <td>04988098003</td>
                        <td>mkhuluwena@trido.ac.tz</td>
                        <td>T-Hub</td>
                        <td><button type="button" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button> <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                    </tr>
                    <tr>
                        <td>E2398402</td>
                        <td>Freshman Lasizwe</td>
                        <td>Kaim</td>
                        <td>0234398003</td>
                        <td>freshman@trido.ac.tz</td>
                        <td>Innovasie</td>
                        <td><button type="button" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button> <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                    </tr>
                </tbody>
            </table> --}}
@endsection
