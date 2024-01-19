@extends('layouts.stock_checker')

@section('stock-checker-content')
            <!-- Header top area end-->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list shadow-reset">
                                <div class="row">
                                    {{-- <div class="col-lg-6">
                                        <a href="transferasset.php"><button class="btn btn-custon-rounded-three btn-success"><i class="fa fa-plus"></i> Transfer Asset</button></a>
                                        
                                    </div> --}}
                                    <div class="col-lg-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="{{ route('stock_checker.dashboard') }}">Dashboard</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Asset Transfer History</span>
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
                                        <h1>Asset Transfer History  </h1>
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
                                                    
                                                    <th >SN</th>
                                                    <th>Transferred From</th>
                                                    <th >Transferred To</th> 
                                                    <th >Quantity</th>
                                                    <th >Tansfer date</th>
                                                    <th >User ID</th>
                                                    <th >Condition ID</th>
                                                    <th >Room ID</th>
                                                    
                                                    <th ></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Sultan Bashiri</td>
                                                    <td>Peculiar James</td>  
                                                    <td >1</td>
                                                    <td>September 18, 2023</td>
                                                    <td>1</td>
                                                    <td>2</td>
                                                    <td>23</td>
                                                    
                                                    <td><button type="button" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button> <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Static Table End -->
@endsection