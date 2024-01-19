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
                                        <button class="btn btn-custon-rounded-three btn-success" data-toggle="modal" data-target="#InformationproModalalert"><i class="fa fa-plus"></i> Asset</button>
                                         <div id="InformationproModalalert" class="modal modal-adminpro-general fullwidth-popup-InformationproModal zoomInUp" role="dialog">
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
                                    <div class="main-sparkline9-hd">
                                        <h1>Asset Information Encoding <span class="basic-ds-n">Form</span></h1>
                                        
                                    </div>
                                </div>
                                <div class="sparkline9-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="basic-login-inner">
                                                    <h3>Fill In : </h3>
                                                    
                                                    
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Item Barcode : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="text" class="form-control" placeholder="Search Barcode" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Name&Amount : </label>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <input type="text" class="form-control" placeholder="Item Name" style="width: 140%" />
                                                                    
                                                                        <input type="number" class="form-control" placeholder="Amt" style="margin-left: 150%; margin-top: -28%; width: 75%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Description : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                 <textarea name="text" cols="35" rows="3" placeholder="Write Description.."></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Date Purchase : </label>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <input type="date" class="form-control" placeholder="Date" style="width: 140%" />
                                                                    
                                                                        <input type="number" class="form-control" placeholder="Qty" style="margin-left: 150%; margin-top: -28%; width: 75%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Branch : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                <select class="form-control">
                                                <option value="">Select Location</option>
                                                <option value="all">Branch 1</option>
                                                <option value="selected">Branch 2</option>
                                                                </select>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Asset : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                <select class="form-control">
                                                <option value="">Select Category</option>
                                                <option value="all">Asset 1</option>
                                                <option value="selected">Asset 2</option>
                                                                </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                               <label class="login2" style="margin-top: 2%">Image : </label>
                                                                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12" style="margin-left: 29%; margin-top: -5%">
                                                                    <div class="file-upload-inner ts-forms">
                                                                        <div class="input prepend-big-btn">
                                                                            <label class="icon-right" for="prepend-big-btn">
                                                                                <i class="fa fa-download"></i>
                                                                            </label>
                                                                            <div class="file-button">
                                                                                Browse
                                                                                <input type="file" onchange="document.getElementById('prepend-big-btn').value = this.value;">
                                                                            </div>
                                                                            <input type="text" id="prepend-big-btn" placeholder="no file selected">
                                                                     </div>
                                                             </div>
                                                      </div>                                                           
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
                                            <li><a href="{{ route('stock_checker.dashboard') }}">Dashboard</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Asset Information</span>
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
                                    <div class="main-sparkline13-hd">
                                        <h1>Asset Disposal </h1>
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
                                                <option value="">Select Branch</option>
                                                <option value="all">Branch 1</option>
                                                <option value="selected">Branch 2</option>
                                            </select>
                                            <select class="form-control" style="margin-left: 105%; margin-top: -24.5%">
                                                <option value="">Select Asset</option>
                                                <option value="all">Data 1</option>
                                                <option value="selected">Data 2</option>
                                            </select>
                                            <button type="submit" class="btn btn-info" style="margin-left: 210%; margin-top: -51%">Go!</button>
                                            </form>
                                        </div>
                                    
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true"  data-show-refresh="true" data-key-events="true"  data-resizable="true" data-cookie="true" data-cookie-id-table="saveId"  data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                   
                                                    <th>SN</th>
                                                    <th >Description</th>
                                                    <th >Transferred from</th>
                                                    <th >Transferred to</th>
                                                    <th >Asset_Type ID</th>
                                                    <th >Condition ID</th>
                                                    
                                                    <th ></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    
                                                    <td></td>
                                                    <td>ICT Set</td>
                                                    <td >2</td>
                                                    <td>9</td>
                                                    <td>3</td>
                                                    <td>2</td>
                                                   
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
                                    <div class="main-sparkline9-hd">
                                        <h1>Asset Disposal Encoding <span class="basic-ds-n">Form</span></h1>
                                        
                                    </div>
                                </div>
                                <div class="sparkline9-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="basic-login-inner">
                                                    <h3>Update : </h3>
                                                    
                                                    
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Item Barcode : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="text" class="form-control" placeholder="Search Barcode" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Name&Amount : </label>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <input type="text" class="form-control" placeholder="Item Name" style="width: 140%" />
                                                                    
                                                                        <input type="number" class="form-control" placeholder="Amt" style="margin-left: 150%; margin-top: -28%; width: 75%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Description : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                 <textarea name="text" cols="35" rows="3" placeholder="Write Description.."></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Date Purchase : </label>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <input type="date" class="form-control" placeholder="Date" style="width: 140%" />
                                                                    
                                                                        <input type="number" class="form-control" placeholder="Qty" style="margin-left: 150%; margin-top: -28%; width: 75%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Branch : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                <select class="form-control">
                                                <option value="">Select Location</option>
                                                <option value="all">Branch 1</option>
                                                <option value="selected">Branch 2</option>
                                                                </select>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Asset : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                <select class="form-control">
                                                <option value="">Select Category</option>
                                                <option value="all">Asset 1</option>
                                                <option value="selected">Asset 2</option>
                                                                </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                               <label class="login2" style="margin-top: 2%">Image : </label>
                                                                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12" style="margin-left: 29%; margin-top: -5%">
                                                                    <div class="file-upload-inner ts-forms">
                                                                        <div class="input prepend-big-btn">
                                                                            <label class="icon-right" for="prepend-big-btn">
                                                                                <i class="fa fa-download"></i>
                                                                            </label>
                                                                            <div class="file-button">
                                                                                Browse
                                                                                <input type="file" onchange="document.getElementById('prepend-big-btn').value = this.value;">
                                                                            </div>
                                                                            <input type="text" id="prepend-big-btn" placeholder="no file selected">
                                                                     </div>
                                                             </div>
                                                      </div>                                                           
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
            </div>
            <!-- Static Table End -->

 @endsection