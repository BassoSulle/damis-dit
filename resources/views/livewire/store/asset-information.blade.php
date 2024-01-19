<div>

    <div class="breadcome-area mg-b-30 small-dn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list shadow-reset">
                        <div class="row">
                            <div class="col-lg-6">
                                <button class="btn btn-custon-rounded-three btn-success" wire:click="registerAssetPage()"><i class="fa fa-plus"></i> Register Asset</button>
                            </div>
                            <div class="col-lg-6">
                                <ul class="breadcome-menu">
                                    <li><a href="{{route('store.dashboard')}}">Dashboard</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Registered Assets</span>
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
            <div class="row" style="margin-bottom: 30px; display: {{ $formDisplay }};">
                <div class="col-lg-12">
                    <div class="sparkline13-list shadow-reset">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Update Asset Details</h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="basic-login-form-ad" style="margin: 20px 30px;">
                                <div class="row" style="text-align: left;">
                                    <div class="col-lg-12">
                                        <form wire:submit.prevent="UpdateAsset">
    
                                            @csrf
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
                                                        <div class="row" style="align-content: left; margin-right: 20px;">
                                                            <div class="col-12">
                                                                <label for="classcode">Category</label>
                                                            </div>
                                                            <div class="col-12" style="margin-top: 8px;">
                                                                <select wire:model="assettype_id"class="form-control" name="assettype_id" id="assettype_id">
                                                                    <option value="" selected style="font-weight: bold;">Select Category</option>
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
                                                        <div class="row" style="align-content: left; margin-right: 20px;">
                                                            <div class="col-12">
                                                                <label for="acqtype">Acquisition Type</label>
                                                            </div>
                                                            <div class="col-12" style="margin-top: 8px;">
                                                                <select wire:model="acquisition_type" class="form-control" name="assettype_id" id="assettype_id">
                                                                    <option value="" selected style="font-weight: bold;">Select Asset Acquisition Type</option>
                                                                    <option value="Monetary">Monetary</option>
                                                                    <option value="Non-Monetary">Non-Monetary</option>
                                                                </select>
                                                                @error('acquisition_type')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    
                                            <div class="form-group-inner">
                                                <div class="row" style="margin-bottom: 40px;">
                                                    <div class="col-md-7">
                                                        <div class="row" style="align-content: left; margin-right: 20px;">
                                                            <div class="col-12">
                                                                <label>Asset Description</label>
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
                                                        <div class="row" style="align-content: left; margin-right: 20px;">
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
    
                                                    {{-- <div class="row form-group"> --}}
    
                                                        {{-- <div class="col-lg-1"><label for="accdeprc">Accumulated depreciation</label></div>
                                                        <div class="col-lg-4"><input wire:model="accumulated_depreciation" class="form-control"
                                                                name="accumulated_depreciation" id="accumulated_depriciation" required>
                                                            @error('accumulated_depreciation')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div> --}}
                                                    {{-- </div> --}}
                                                    
                                                    {{-- <div class="row form-group">
                                                        <div class="col-lg-1"><label for="gfscode">GFS Code</label></div>
                                                        <div class="col-lg-4"><input wire:model="gfs_code" class="form-control" name="gfs_code"
                                                                id="gfs_code" required>
                                                            @error('gfs_code')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-1"><label for="gfsdesc">GFS Description</label></div>
                                                        <div class="col-lg-4"><input wire:model="gfs_description" class="form-control"
                                                                name="gfs_description" id="gfs_description" required>
                                                            @error('gfs_description')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
    
                                                    <div class="row form-group">
                                                        <div class="col-lg-1"><label for="remarks">Remarks</label></div>
                                                        <div class="col-lg-4"><input wire:model="remarks" class="form-control" name="remarks"
                                                                id="remarks" required>
                                                            @error('remarks')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div> --}}
    
                                                    <!-- /.card-body -->
    
                                            <div class="form-group-inner">
                                                <div class="row" style="margin: 0px 20px 0px 10px; ">
                                                    <div align="right">
                                                        <button class="btn btn-warning" type="button" style="width: 100px; margin-right: 30px;" wire:click="closeForm">Cancel</button>
                                                        <button class="btn btn-success" type="submit" style="width: 100px;">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if (session()->has('added'))
                <div class="alert alert-success alert-dismissible my-3">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session('added') }}
                </div>
            @endif
            @if (session()->has('edited'))
                <div class="alert alert-warning alert-dismissible my-3">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session('edited') }}
                </div>
            @endif
            @if (session()->has('deleted'))
                <div class="alert alert-danger alert-dismissible my-3">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session('deleted') }}
                </div>
            @endif
            <div class="row"  style="display: {{ $tableDisplay }};">
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
                                            <th >Category</th>
                                            <th >Condition</th>
                                            <th >Acquisition Date</th>
                                            <th >Registered Date</th>
                                            <th >Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php
                                        $i=1;
                                        @endphp
                                    @forelse ($assets as $asset)
                                    <tr {{ $asset->id }}>
                                        <td>{{$i++}}</td>
                                        <td>{{$asset->asset_no}}</td>
                                        <td>{{$asset->description}}</td>
                                        <td>{{$asset->assettype->name}}</td>
                                        <td>{{$asset->condition->name}}</td>
                                        <td>{{$asset->acquisition_date}}</td>
                                        <td >{{$asset->created_at->format('d/m/Y')}}</td>
                                        <td>
                                            <button type="button"  class="btn btn-primary" wire:click="ViewAsset({{ $asset->id }})" data-toggle="modal" data-target="#ViewAssetModal"><i class="fa fa-eye"></i></button>
                                            <button type="button"  class="btn btn-warning" wire:click="EditAsset({{ $asset->id }})" ><i class="fa fa-edit"></i></button>
                                            <button type="button"  class="btn btn-danger" data-toggle="modal" wire:click="prepareDeleteAssetData({{ $asset->id }})" data-target="#DeleteAssetModal"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    @empty
                                        <tr><td style='color:red; text-align:center;' colspan='8' >No Asset Found!</td></tr>
                                    @endforelse

                                    </tbody>
                                </table>
                                {{ $assets->links() }}

                            @if (!empty($asset))

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
                                                    <b>Asset number: </b><span>{{ $asset->asset_no }}</span>
                                                </div>
                                                <div class="col-md-4">
                                                    <b>Serial number: </b><span>{{ $asset->serial_no }}</span>
                                                </div>
                                                <div class="col-md-4">
                                                    <b>Asset category: </b><span>{{ $asset->assettype->name }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner"  style="padding-top: 30px;">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <b>Condition: </b><span>{{ $asset->condition->name }}</span>
                                                </div>
                                                <div class="col-md-4">
                                                    <b>Acquisation date: </b><span>{{ $asset->acquisition_date }}</span>
                                                </div>
                                                <div class="col-md-4">
                                                    <b>Acquisation type: </b><span>{{ $asset->acquisition_type }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner"  style="padding-top: 30px;">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <b>Description: </b><span>{{ $asset->description }}</span>
                                                </div>
                                                <div class="col-md-4">
                                                    <b>Purchasing cost: </b><span>Tsh {{ $asset->cost }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner"  style="padding-top: 33px; padding-bottom: 30px;">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <b>Recorded by: </b><span>{{ $asset->employee['first_name'] . ' ' . $asset->employee['last_name'] }}</span>
                                                </div>
                                                <div class="col-md-4">
                                                    <b>Recorded on: </b><span>{{ $asset->created_at->format('d-M-Y') }}</span>
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

                            {{-- Delete modal --}}
                    <div wire:ignore.self id="DeleteAssetModal" class="modal modal-adminpro-general fullwidth-popup-InformationproModal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                    <form wire:submit.prevent="DeleteAsset">

                                        @csrf

                                <div class="modal-close-area modal-close-df">
                                    <a class="close" wire:click="closeModal" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                            <div class="col-lg-12">
                    <div class="sparkline9-list shadow-reset">
                        <div class="sparkline9-graph">
                            <strong>Are you sure you want to Delete this Asset?</strong>
                        </div>
                    </div>
                </div>
            </div>
                </div>
                <div class="modal-footer footer-modal-admin">
                    <button type="button" wire:click="closeModal" data-dismiss="modal" class="btn btn-warning">Cancel</button>
                    <button type="submit" class="btn btn-danger">Yes, Delete</button>
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

</div>
