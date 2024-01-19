<div>
    <div class="breadcome-area mg-b-30 small-dn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list shadow-reset">
                        <div class="row">
                            <div class="col-lg-6">
                                <button class="btn btn-custon-rounded-three btn-success" wire:click="AssignAssetPage">Assign Asset</button>
                            </div>
                            <div class="col-lg-6">
                                <ul class="breadcome-menu">
                                    <li><a href="{{route('store.dashboard')}}">Dashboard</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Assigned Assets</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="data-table-area mg-b-15" style="margin-top: 30px">
            <div class="container-fluid">
            @if (session()->has('asset-assigned'))
                  <div class="alert alert-success alert-dismissible my-3">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session('asset-assigned') }}
                  </div>
            @endif
            @if (session()->has('edit'))
                <div class="alert alert-warning alert-dismissible my-3">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session('edit') }}
                </div>
            @endif
            @if (session()->has('delete'))
                <div class="alert alert-danger alert-dismissible my-3">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session('delete') }}
                </div>
            @endif
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sparkline13-list shadow-reset">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Assigned Assets</h1>
                                    <div class="sparkline13-outline-icon">
                                        <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                        <span><i class="fa fa-wrench"></i></span>
                                        <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div wire:ignore.self class="datatable-dashv1-list custom-datatable-overright">

                                    <table wire:ignore.self id="table" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th >#</th>
                                                <th >Asset No</th>
                                                <th >Asset Description</th>
                                                <th >Category</th>
                                                <th >Condition</th>
                                                <th>Remarks</th>
                                                <th>Assigned To</th>
                                                <th >Assigned Date</th>
                                                <th >Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            $i=1;
                                        @endphp

                                        @forelse ($assigned_assets as $assigned_asset)

                                        <tr {{ $assigned_asset->id }}>
                                            <td>{{$i++}}</td>
                                            <td>{{$assigned_asset->asset->asset_no}}</td>
                                            <td>{{$assigned_asset->asset->assettype->name}}</td>
                                            <td>{{$assigned_asset->asset->description}}</td>
                                            <td>{{$assigned_asset->asset->condition->name}}</td>
                                            <td>{{Str::limit($assigned_asset->remarks, 10)}}</td>
                                            <td>
                                                @foreach ($employees as $employee)
                                                    @if (empty($assigned_asset->headOfDepartment_id) && !empty($assigned_asset->headOfSection_id) && empty($assigned_asset->headOfOffice_id) && ($employee->id == $assigned_asset->headOfSection_id))
                                                        <strong>HOS: </strong>{{ $employee->first_name . ' ' . $employee->last_name }}

                                                    @elseif (empty($assigned_asset->headOfDepartment_id) && !empty($assigned_asset->headOfSection_id) && !empty($assigned_asset->headOfOffice_id) && ($employee->id == $assigned_asset->headOfSection_id))
                                                        <strong>HOS: </strong>{{ $employee->first_name . ' ' . $employee->last_name }}

                                                    @elseif (empty($assigned_asset->headOfDepartment_id) && empty($assigned_asset->headOfSection_id) && !empty($assigned_asset->headOfOffice_id) && ($employee->id == $assigned_asset->headOfOffice_id))
                                                    <strong>Office Bearer: </strong>{{ $employee->first_name . ' ' . $employee->last_name }}

                                                    @endif
                                                    
                                                @endforeach

                                                @if (empty($assigned_asset->headOfDepartment_id) && empty($assigned_asset->headOfSection_id) && empty($assigned_asset->headOfOffice_id))
                                                    N/A
                                                @endif
                                                
                                            </td>
                                            <td >{{$assigned_asset->created_at->format('d/m/Y')}}</td>
                                            <td>
                                                <button type="button"  class="btn btn-primary" wire:click="ViewAsset({{ $assigned_asset->id }})" data-toggle="modal" data-target="#ViewAssetModal"><i class="fa fa-eye"></i></button>
                                            </td>
                                        </tr>

                                        @empty
                                            <tr><td style='color:red; text-align:center;' colspan='8' >No Asset Found!</td></tr>
                                        @endforelse

                                        </tbody>
                                    </table>
                                    
                                    {{ $assigned_assets->links() }}

                                    @if (!empty($assigned_asset))
                                        
                                    <div id="ViewAssetModal" wire:ignore.self class="modal modal-adminpro-general fullwidth-popup-InformationproModal fade" role="dialog">
                                        <div class="modal-dialog" style="width: 800px !important; padding-top: 30px; text-align: left;">
                                            <div class="sparkline13-list shadow-reset">
                                                <div class="sparkline13-hd">
                                                    <div class="main-sparkline13-hd">
                                                        <h1>Asset Details</h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-content" style="padding-left: 20px;">
                                                <div class="form-group-inner"  style="padding-top: 20px;">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <b>Asset number: </b><span>{{ $assigned_asset->asset->asset_no }}</span>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <b>Serial number: </b><span>{{ $assigned_asset->asset->serial_no }}</span>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <b>Asset category: </b><span>{{ $assigned_asset->asset->assettype->name }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner"  style="padding-top: 30px;">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <b>Condition: </b><span>{{ $assigned_asset->asset->condition->name }}</span>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <b>Acquisation date: </b><span>{{ $assigned_asset->asset->acquisition_date }}</span>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <b>Acquisation type: </b><span>{{ $assigned_asset->asset->acquisition_type }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner"  style="padding-top: 30px;">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <b>Description: </b><span>{{ $assigned_asset->asset->description }}</span>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <b>Purchasing cost: </b><span>Tsh {{ $assigned_asset->asset->cost }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner"  style="padding-top: 33px; padding-bottom: 30px;">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <b>Recorded by: </b><span>{{ $assigned_asset->asset->employee['first_name'] . ' ' . $assigned_asset->asset->employee['last_name'] }}</span>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <b>Recorded on: </b><span>{{ $assigned_asset->asset->created_at->format('d-M-Y') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer footer-modal-admin">
                                                    <a data-dismiss="modal" wire:click="closeModal" href="#">Close</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

