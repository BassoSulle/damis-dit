@extends('layouts.store_keeper')
@section('storecontent')
<div class="data-table-area mg-b-15" style="margin-top: 30px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Registered Assets  <span class="table-project-n">   </span>  </h1>
                            <div class="sparkline13-outline-icon">
                                <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                <span><i class="fa fa-wrench"></i></span>
                                <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">

                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true"  data-show-refresh="true" data-key-events="true"  data-resizable="true" data-cookie="true" data-cookie-id-table="saveId"  data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th>Asset Code</th>
                                        <th >Asset description</th>
                                        <th >Condition</th>
                                        <th>Cost</th>
                                        <th>Quantity</th>
                                        <th>Registered Date</th>
                                        <th ></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>TIRDO 07889</td>
                                        <td>Table</td>
                                        <td>Elibariki Basso</td>
                                        <td >ICT Department</td>
                                        <td>Elibariki Basso</td>
                                        <td >ICT Department</td>
                                        <td><button type="button" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button> <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td>Java Advance</td>
                                        <td>Jkiller11</td>
                                        <td>*****************</td>
                                        <td >445 Mount Eden Road, Mount Eden, Auckland</td>
                                        <td>*****************</td>
                                        <td >445 Mount Eden Road, Mount Eden, Auckland</td>
                                        <td><button type="button" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button> <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                                    </tr>
                                </tbody>
                            </table>
                    <div id="edit" class="modal modal-adminpro-general fullwidth-popup-InformationproModal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                                <form action="">
                            <div class="modal-close-area modal-close-df">
                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                        <div class="col-lg-12">
                <div class="sparkline9-list shadow-reset">
                    <div class="sparkline9-hd">
                        {{-- <div class="main-sparkline9-hd">
                            <h1> <span class="basic-ds-n"></span></h1>

                        </div> --}}
                    </div>
                    <div class="sparkline9-graph">
                        <div class="basic-login-form-ad">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="basic-login-inner">
                                        <h3></h3>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="login2">Asset code : </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="login2">Asset Description : </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                        <div id="pwd-container4">
                                            <div class="form-group">
                                                <label for="password4">Condition</label>
                                                <input type="text" class="form-control example4" id="password4" placeholder="">
                                            </div>
                                            {{-- <div class="form-group">
                                                <span class="font-bold pwstrength_viewport_verdict4"></span>
                                                <span class="pwstrength_viewport_progress4"></span>
                                            </div> --}}
                                        </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="login2">Cost : </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="login2">Contact : </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="number" class="form-control" placeholder="Enter Contact Number" />
                                                    </div>
                                                </div>
                                            </div> --}}
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
