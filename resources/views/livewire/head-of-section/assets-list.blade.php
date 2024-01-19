<div>
    <div class="breadcome-area mg-b-30 small-dn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list shadow-reset">
                        <div class="row">
                            <div class="col-lg-6">
                                {{-- <button class="btn btn-custon-rounded-three btn-success" wire:click="registerAssetPage()"><i class="fa fa-plus"></i> Register Asset</button> --}}
                            </div>
                            <div class="col-lg-6">
                                <ul class="breadcome-menu">
                                    <li><a href="{{route('store.dashboard')}}">Dashboard</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Section Assets</span>
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
            {{-- @if (session()->has('add'))
                  <div class="alert alert-success alert-dismissible my-3">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session('add') }}
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
            @endif --}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sparkline13-list shadow-reset">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Assets</h1>
                                    <div class="sparkline13-outline-icon">
                                        <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                        <span><i class="fa fa-wrench"></i></span>
                                        <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">

                                    <table id="table" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th >#</th>
                                                <th >Asset No</th>
                                                <th >Asset Description</th>
                                                <th >Asset Category</th>
                                                <th >Condition</th>
                                                <th >Remarks</th>
                                                <th >Assigned By</th>
                                                <th >Assigned Date</th>
                                                <th >Actions</th>
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
                                            <td>{{$assigned_asset->asset->description}}</td>
                                            <td>{{$assigned_asset->asset->assettype->name}}</td>
                                            <td>{{$assigned_asset->asset->condition->name}}</td>
                                            <td>{{Str::limit($assigned_asset->remarks, 10)}}</td>
                                            <td>
                                                @foreach ($employees as $employee)
                                                    @if (!empty($assigned_asset->assigned_by) && !empty($assigned_asset->headOfDepartment_id) && !empty($assigned_asset->headOfSection_id) && ($employee->id == $assigned_asset->headOfDepartment_id))
                                                        <strong>Director: </strong>{{ $employee->first_name . ' ' . $employee->last_name }}

                                                    @elseif (!empty($assigned_asset->assigned_by) && empty($assigned_asset->headOfDepartment_id) && !empty($assigned_asset->headOfSection_id) && ($employee->id == $assigned_asset->assigned_by))
                                                    <strong>Store Keeper: </strong>{{ $employee->first_name . ' ' . $employee->last_name }}

                                                    @endif
                                                
                                                @endforeach
                                            
                                                @if (empty($assigned_asset->assigned_by) && empty($assigned_asset->headOfDepartment_id) && empty($assigned_asset->headOfSection_id))
                                                    N/A
                                                @endif
                                            </td>
                                            {{-- <td>{{$assigned_asset->asset->acquisition_type}}</td> --}}
                                            <td>{{$assigned_asset->created_at->format('d/m/Y')}}</td>
                                            <td>
                                                <button type="button"  class="btn btn-primary btn-circle" data-toggle="modal" ><i class="fa fa-eye"></i></button>
                                                {{-- <button type="button"  class="btn btn-danger" data-toggle="modal" data-target="#DeleteAssetModal"><i class="fa fa-trash"></i></button> --}}
                                            </td>
                                        </tr>
                                        @empty
                                            <tr><td style='color:red; text-align:center;' colspan='5' >No Asset Found!</td></tr>
                                        @endforelse

                                        </tbody>
                                    </table>
                                    {{ $assigned_assets->links() }}

                            <div id="EditAssetModal" wire:ignore.self class="modal modal-adminpro-general fullwidth-popup-InformationproModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <form wire:submit.prevent="EditAsset({{ $asset_id }})">

                                    @csrf
                                    <div class="modal-close-area modal-close-df">Type
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                <div class="col-lg-12">
                        <div class="sparkline9-list shadow-reset">
                            <div class="sparkline9-hd">
                                <div class="main-sparkline9-hd">
                                    <h1>User Information Encoding <span class="basic-ds-n">Form</span></h1>

                                </div>
                            </div>
                            <div class="sparkline9-graph">
                                <div class="basic-login-form-ad">
                                    <div class="form-group-inner">
                                        <div class="row" style="margin-bottom: 35px;">
                                            <div class="col-md-4">
                                                <div class="row" style="align-content: left; margin-right: 20px;">
                                                    <div class="col-12">
                                                        <label for="assetno">Asset Number</label>
                                                    </div>
                                                    <div class="col-12" style="margin-top: 8px;">
                                                        <input wire:model="asset_no" class="form-control" type="text" name="asset_no"
                                                            id="asset_no" placeholder="Enter Asset No" >
                                                        @error('asset_no')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row" style="align-content: left; margin-right: 20px;">
                                                    <div class="col-12">
                                                        <label for="classcode">Serial Number</label>
                                                    </div>
                                                    <div class="col-12" style="margin-top: 8px;">
                                                        <input wire:model="serial_no" class="form-control" name="serial_no"
                                                            id="serial_no" placeholder="Enter Serial No">
                                                        @error('serial_no')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row" style="align-content: left;">
                                                    <div class="col-12">
                                                        <label for="classcode">Asset Category</label>
                                                    </div>
                                                    <div class="col-12" style="margin-top: 8px;">
                                                        <select wire:model="assettype_id"class="form-control" name="assettype_id" id="assettype_id">
                                                            <option value="" selected style="font-weight: bold;">Select Asset Category</option>
                                                            @foreach ($asset_types as $asset_type)
                                                                <option value="{{ $asset_type->id }}">{{ $asset_type->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('assettype_id')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group-inner">
                                        <div class="row" style="margin-bottom: 35px;">
                                            <div class="col-md-4">
                                                <div class="row" style="align-content: left; margin-right: 20px;">
                                                    <div class="col-12">
                                                        <label for="condition">Condition</label>
                                                    </div>
                                                    <div class="col-12" style="margin-top: 8px;">
                                                        <select wire:model="condition_id"class="form-control" id="condtion_id">
                                                            <option value="" selected style="font-weight: bold;">Select Asset Condition</option>
                                                            @foreach ($conditions as $condition)
                                                                <option value="{{ $condition->id }}">{{ $condition->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('condition_id')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row" style="align-content: left; margin-right: 20px;">
                                                    <div class="col-12">
                                                        <label for="acqdate">Acquisition Date</label>
                                                    </div>
                                                    <div class="col-12" style="margin-top: 8px;">
                                                        <input wire:model="acquisition_date" class="form-control"
                                                            name="acquisition_date" id="acquisition_date" type="date" >
                                                        @error('acquisition_date')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row" style="align-content: left;">
                                                    <div class="col-12">
                                                        <label for="acqtype">Acquisition Type</label>
                                                    </div>
                                                    <div class="col-12" style="margin-top: 8px;">
                                                        <select wire:model="acquisition_type" class="form-control" name="assettype_id" id="assettype_id">
                                                            <option value="" selected style="font-weight: bold;">Select Asset Acquisition Type</option>
                                                            <option value="Monetary" selected>Monetary</option>
                                                            <option value="Non-Monetary" selected>Non-Monetary</option>
                                                            {{-- @foreach ($asset_types as $asset_type)
                                                                <option value="{{ $asset_type->id }}">{{ $asset_type->name }}</option>
                                                            @endforeach --}}
                                                        </select>
                                                        {{-- <input wire:model="acquisition_type" class="form-control"
                                                            name="acquisition_type" id="acquisition_type" placeholder="Enter acquisition type"required> --}}
                                                        @error('acquisition_type')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group-inner">
                                        <div class="row" style="margin-bottom: 0px;">
                                            <div class="col-md-7">
                                                <div class="row" style="align-content: left; margin-right: 20px;">
                                                    <div class="col-12">
                                                        <label for="assetnodesc">Asset Description</label>
                                                    </div>
                                                    <div class="col-12" style="margin-top: 8px;">
                                                        <input wire:model="description" class="form-control" id="asset_description" placeholder="Enter Asset Description" >
                                                        @error('description')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="row" style="align-content: left;">
                                                    <div class="col-12">
                                                        <label for="cost">Cost</label>
                                                    </div>
                                                    <div class="col-12" style="margin-top: 8px;">
                                                        <input wire:model="cost" class="form-control" name="cost" id="cost"
                                                            placeholder="Enter cost">
                                                        @error('cost')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
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
