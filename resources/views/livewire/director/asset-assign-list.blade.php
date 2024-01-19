<div>
    <div class="breadcome-area mg-b-30 small-dn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list shadow-reset">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row" style="display: {{ $display1 }};">
                                    <div class="col-md-4">
                                        <button class="btn btn-custon-rounded-three btn-success" wire:click="assignedAssetsPage" style="display: {{ $display1 }};"><i class="fa fa-check-circle-o"></i> Assigned Assets</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn btn-custon-rounded-three btn-primary" wire:click="BulkAssetAssignment()" style="display: {{ $display1 }};"><i class="fa fa-tasks"></i> Assign Many Assets</button>
                                    </div>
                                </div>
                                <div class="row" style="display: {{ $display2 }};">
                                    <div class="col-md-2">
                                        <button class="btn btn-custon-rounded-three btn-warning" wire:click="CancelBulkAssign()">Cancel</button>
                                    </div>
                                    <div class="col-md-2">
                                        <button class="btn btn-custon-rounded-three btn-success" wire:click="getAssetsToAssign()" data-toggle="modal" data-target="#AssignAssetModal">Done</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ul class="breadcome-menu">
                                    <li><a href="{{route('store.dashboard')}}">Dashboard</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Assign Assets</span>
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
                @if (session()->has('assets-assigned'))
                    <div class="alert alert-success alert-dismissible my-3">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ session('assets-assigned') }}
                    </div>
                @endif
                @if (session()->has('select-asset'))
                    <div class="alert alert-warning alert-dismissible my-3">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ session('select-asset') }}
                    </div>
                @endif
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
                                <div wire:ignore.self class="datatable-dashv1-list custom-datatable-overright">

                                    <table wire:ignore.self id="table" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th style="display: {{ $display2 }};"><i class="fa fa-check-square"></i></th>
                                                <th >#</th>
                                                <th >Asset No</th>
                                                <th >Asset Description</th>
                                                <th >Category</th>
                                                <th >Condition</th>
                                                <th >Remarks</th>
                                                <th>Assigned By</th>
                                                <th >Registered Date</th>
                                                <th >Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @php
                                            $i=1;
                                            @endphp
                                        @forelse ($assigned_assets as $assigned_asset)

                                        <tr {{ $assigned_asset->id }}>
                                            <td style="display: {{ $display2 }};">
                                                <input wire:ignore.self type="checkbox" wire:model="selectedAsset_id" value="0" style="display: {{ $display2 }};">
                                                <input wire:ignore.self type="checkbox" wire:model="selectedAsset_id" value="{{ $assigned_asset->id }}">
                                            </td>
                                            <td>{{$i++}}</td>
                                            <td>{{$assigned_asset->asset->asset_no}}</td>
                                            <td>{{$assigned_asset->asset->description}}</td>
                                            <td>{{$assigned_asset->asset->assettype->name}}</td>
                                            <td>{{$assigned_asset->asset->condition->name}}</td>
                                            <td>{{Str::limit($assigned_asset->remarks, 10)}}</td>
                                            <td>
                                                @foreach ($employees as $employee)
                                                    @if (!empty($assigned_asset->assigned_by) && ($employee->id == $assigned_asset->assigned_by))
                                                        {{ $employee->first_name . ' ' . $employee->last_name }}

                                                    @endif
                                            
                                                @endforeach
                                                @if (empty($assigned_asset->assigned_by))
                                                    N/A
                                                @endif
                                            </td>
                                            <td >{{$assigned_asset->created_at->format('d/m/Y')}}</td>
                                            <td>
                                                {{-- <button type="button" wire:click="getAssetDetails({{ $asset->id }})" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#EditAssetModal"><i class="fa fa-edit"></i></button> --}}
                                                <button type="button" wire:click="getAssetToAssign({{ $assigned_asset->id }})" class="btn btn-primary" data-toggle="modal" data-target="#AssignAssetModal"><i class="fa fa-arrow-right"></i></button>
                                            </td>
                                        </tr>

                                        @empty
                                            <tr><td style='color:red; text-align:center;' colspan='9' >No Asset Found!</td></tr>
                                        @endforelse

                                        </tbody>
                                    </table>
                                    {{ $assigned_assets->links() }}

                            <div id="AssignAssetModal" wire:ignore.self class="modal modal-adminpro-general fullwidth-popup-InformationproModal fade" role="dialog">
                            <div class="modal-dialog" style="width: 800px !important;">
                                <div class="modal-content">

                                    <form wire:submit.prevent="AssignAssets">
    
                                        @csrf
                                        <div class="modal-close-area modal-close-df">Type
                                            <a class="close" data-dismiss="modal" wire:click="closeModal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                    <div class="col-lg-12">
                            <div class="sparkline9-list shadow-reset">
                                <div class="sparkline9-hd">
                                    <div class="main-sparkline9-hd">
                                        <h1>Assets Assignment</h1>
        
                                    </div>
                                </div>
                                <div class="sparkline9-graph">
                                    <div class="basic-login-form-ad" style="margin-left: 20px; margin-right: 20px;">                                    
                                        <div class="form-group-inner">
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col-md-6">
                                                    <div class="row" style="align-content: left; margin-right: 20px;">
                                                        <div class="col-12">
                                                            <span for="condition">You are assigning <b>
                                                                @if (!empty($singleAsset))
                                                                    {{ count($singleAsset) }}</b> asset</span>
                                                                @endif
    
                                                                @if (!empty($bulkAssets))
                                                                    {{ $bulkAssets }} </b> assets</span>
                                                                @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                        {{-- <div class="form-group-inner" style="display: {{ $remarksDisplay }};">
                                            <div class="row" style="margin-bottom: 23px;">
                                                <div class="col-md-12">
                                                    <div class="row" style="align-content: left;">
                                                        <div class="col-12">
                                                            <label for="condition">Remarks</label>
                                                        </div>
                                                        <div class="col-12" style="margin-top: 8px;">
                                                            <textarea wire:model="remarks" class="form-control" cols="30" rows="2" disabled="disabled"></textarea>
                                                            @error('remarks')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
        
                                        <div class="form-group-inner">
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col-md-{{ $col }}">
                                                    <div class="row" style="align-content: left; margin-right: {{ $margin }};">
                                                        <div class="col-12">
                                                            <label for="condition">To</label>
                                                        </div>
                                                        <div class="col-12" style="margin-top: 8px;">
                                                            <select wire:model="role_id"class="form-control" id="condtion_id">
                                                                <option value="" selected style="font-weight: bold;">Select Position</option>
                                                                @foreach ($roles as $role)
                                                                    @if (($role->name != 'director') && ($role->name != 'estate') && ($role->name != 'store keeper') && ($role->name != 'stock checker'))
                                                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                                        
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                            @error('role_id')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6" style="display: {{ $sectionDisplay }}">
                                                    <div class="row" style="align-content: left;">
                                                        <div class="col-12">
                                                            <label>Section</label>
                                                        </div>
                                                        <div class="col-12" style="margin-top: 8px;">
                                                            <select wire:model="section_id"class="form-control" id="condtion_id">
                                                                <option value="" selected style="font-weight: bold;">Select section</option>
                                                                @foreach ($sections as $section)
                                                                    <option value="{{ $section->id }}">{{ $section->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('section_id')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner" style="display: {{ $buildingAndFloorDisplay }}">
                                            <div class="row" style="margin-bottom: 20px;">
                                                {{-- <div class="col-md-{{ $col }}" style="display: {{ $sectionDisplay }}">
                                                    <div class="row" style="align-content: left; margin-right: {{ $margin }};">
                                                        <div class="col-12">
                                                            <label>Section</label>
                                                        </div>
                                                        <div class="col-12" style="margin-top: 8px;">
                                                            <select wire:model="section_id"class="form-control" id="condtion_id">
                                                                <option value="" selected style="font-weight: bold;">Select section</option>
                                                                @foreach ($sections as $section)
                                                                    <option value="{{ $section->id }}">{{ $section->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('section_id')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                <div class="col-md-6">
                                                    <div class="row" style="align-content: left; margin-right: 20px;">
                                                        <div class="col-12">
                                                            <label>Building</label>
                                                        </div>
                                                        <div class="col-12" style="margin-top: 8px;">
                                                            <select wire:model="building_id" id="" class="form-control">
                                                              <option value="" selected="selected">Select Building</option>
                                                                @foreach ($buildings as $building)
                                                                        <option value="{{ $building->id }}">{{ $building->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('building_id') <span class="error">{{ $message }}</span> @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row" style="align-content: left; margin-right: 20px;">
                                                        <div class="col-12">
                                                            <label>Floor</label>
                                                        </div>
                                                        <div class="col-12" style="margin-top: 8px;">
                                                            <select wire:model="floor_id"class="form-control">
                                                                <option value="" selected style="font-weight: bold;">Select Floor</option>
                                                                @foreach ($floors as $floor)
                                                                    <option value="{{ $floor->id }}">{{ $floor->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('floor_id')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="form-group-inner" style="display: {{ $roomDisplay }}">
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col-md-12">
                                                    <div class="row" style="align-content: left;">
                                                        <div class="col-12">
                                                            <label>Room</label>
                                                        </div>
                                                        <div class="col-12" style="margin-top: 8px;">
                                                            <select wire:model="room_id" class="form-control">
                                                                <option value="" selected style="font-weight: bold;">Select Room</option>
                                                                @foreach ($rooms as $room)
                                                                    <option value="{{ $room->id }}">{{ $room->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('room_id')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col-md-6">
                                                    <div class="row" style="align-content: left; margin-right: 20px;">
                                                        <div class="col-12">
                                                            <label for="condition">Assigned By:</label>
                                                        </div>
                                                        <div class="col-12" style="margin-top: 8px;">
                                                            <p>{{ $director->first_name . ' ' . $director->last_name }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row" style="align-content: left;">
                                                        <div class="col-12">
                                                            <label>To:</label>
                                                        </div>
                                                        <div class="col-12" style="margin-top: 8px;">
                                                            @foreach ($employeeToAssign as $employee)
                                                                @if (!empty($role_id) && ($role_id == $employee->role_id)  && ($employee->role->name == 'head of section') && !empty($director->department_id) && ($director->department_id == $employee->department_id) && !empty($section_id) && ($section_id == $employee->section_id))
                                                                    <p>{{ $headOfSection }}</p>
                                                                
                                                                @elseif (!empty($role_id) && ($role_id == $employee->role_id)  && ($employee->role->name == 'head of office') && !empty($director->department_id) && ($director->department_id == $employee->department_id) && !empty($section_id) && ($section_id == $employee->section_id) && !empty($room_id) && ($room_id == $employee->room_id))
                                                                    <p>{{ $headOfOffice }}</p>
                                                                
                                                                @endif
                                                            @endforeach
    
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
                                            <button type="button" data-dismiss="modal" wire:click="closeModal" class="btn btn-warning">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Assign <i class="fa fa-arrow-right"></i></button>
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
