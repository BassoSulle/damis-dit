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
                                                {{-- <th style="display: {{ $display2 }};"><i class="fa fa-check"></i></th> --}}
                                                <th >#</th>
                                                <th >Asset No</th>
                                                <th >Description</th>
                                                <th >Category</th>
                                                <th >Condition</th>
                                                <th>Remarks</th>
                                                <th >Assigned By</th>
                                                <th>Assigned To</th>
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
                                            <td>{{$assigned_asset->asset->assettype->name}}</td>
                                            <td>{{$assigned_asset->asset->description}}</td>
                                            <td>{{$assigned_asset->asset->condition->name}}</td>
                                            <td>{{Str::limit($assigned_asset->remarks, 10)}}</td>
                                            <td>
                                                @foreach ($employees as $employee)
                                                    @if (!empty($assigned_asset->assigned_by) && empty($assigned_asset->headOfDepartment_id) && ($employee->id == $assigned_asset->assigned_by))
                                                        <strong>SK: </strong>{{ $employee->first_name . ' ' . $employee->last_name }}

                                                    @elseif (!empty($assigned_asset->assigned_by) && !empty($assigned_asset->headOfDepartment_id) && ($employee->id == $assigned_asset->headOfDepartment_id))
                                                        <strong>Dir: </strong>{{ $employee->first_name . ' ' . $employee->last_name }}

                                                    @endif
                                                @endforeach

                                                @if (empty($assigned_asset->assigned_by))
                                                        N/A
                                                @endif
                                            </td>
                                            <td>
                                                @foreach ($employees as $employee)
                                                    @if (empty($assigned_asset->headOfSection_id) && !empty($assigned_asset->headOfOffice_id) && ($employee->id == $assigned_asset->headOfOffice_id))
                                                        <strong>OB: </strong>{{ $employee->first_name . ' ' . $employee->last_name }}

                                                    @elseif (!empty($assigned_asset->headOfSection_id) && !empty($assigned_asset->headOfOffice_id) && ($employee->id == $assigned_asset->headOfOffice_id))
                                                        <strong>OB: </strong>{{ $employee->first_name . ' ' . $employee->last_name }}

                                                    @endif
                                                    
                                                @endforeach

                                                @if (!empty($assigned_asset->headOfSection_id) && empty($assigned_asset->headOfOffice_id))
                                                    N/A
                                                @endif
                                                
                                            </td>
                                            <td >{{$assigned_asset->updated_at->format('d/m/Y')}}</td>
                                            <td>
                                                <button type="button"  class="btn btn-primary" wire:click="ViewAsset({{ $assigned_asset->id }})" data-toggle="modal" data-target="#ViewAssetModal"><i class="fa fa-eye"></i></button>
                                                {{-- <button type="button" wire:click="getAssetDetails({{ $asset->id }})" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#EditAssetModal"><i class="fa fa-edit"></i></button> --}}
                                                {{-- <button type="button" wire:click="getAssetToAssign({{ $asset->id }})" class="btn btn-primary" data-toggle="modal" data-target="#AssignAssetModal"><i class="fa fa-arrow-right"></i></button> --}}
                                            </td>
                                        </tr>
                                        @empty
                                            <tr><td style='color:red; text-align:center;' colspan='5' >No Asset Found!</td></tr>
                                        @endforelse

                                        </tbody>
                                    </table>
                                    {{ $assigned_assets->links() }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
</div>

