<div>
    <div class="breadcome-area mg-b-30 small-dn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list shadow-reset">
                        <div class="row">
                            <div class="col-lg-6">
                                <button class="btn btn-custon-rounded-three btn-success" data-toggle="modal" data-target="#makeRequestModal">Request Asset</button>
                                <a href="{{ route('headOfSection.myAssetRequests') }}" class="btn btn-custon-rounded-three btn-primary" style="margin-left: 20px;">My request</a>
                            </div>
                            <div class="col-lg-6">
                                <ul class="breadcome-menu">
                                    <li><a href="{{route('store.dashboard')}}">Dashboard</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Requested Assets</span>
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
        @if (session()->has('request-sent'))
                <div class="alert alert-success alert-dismissible my-3">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session('request-sent') }}
                </div>
        @endif
        @if (session()->has('request-not-sent'))
            <div class="alert alert-warning alert-dismissible my-3">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session('request-not-sent') }}
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
                            <h1>Requests</h1>
                            <div class="sparkline13-outline-icon">
                                <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                <span><i class="fa fa-wrench"></i></span>
                                <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">

                            <table wire:ignore.self id="table" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Asset description</th>
                                        <th>Category</th>
                                        <th>Quantity</th>
                                        <th>Remarks</th>
                                        <th>Received by</th>
                                        <th>Status</th>
                                        <th>Requested On</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @php
                                    $i = 1;
                                @endphp
                                <tbody>
                                    @forelse ($requests as $request)
                                        <tr {{ $request->id }}>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $request->asset->description }}</td>
                                            <td>{{ $request->asset->assettype->name }}</td>
                                            <td>{{ $request->quantity }}</td>
                                            <td>{{ $request->remarks }}</td>
                                            <td>{{ $request->receiver->first_name . '' . $request->receiver->last_name }}</td>
                                            <td>{{ $request->request_status }}</td>
                                            <td>{{ $request->created_at }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#viewRequestModal"><i class="fa fa-eye"></i></button>
                                                {{-- <button type="button" class="btn btn-warning btn-circle" data-toggle="modal" data-target="#editRequestModal"><i class="fa fa-edit"></i></button> --}}
                                                {{-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteRequestModal"><i class="fa fa-trash"></i></button></td> --}}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="9" align="center">No Request found!</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $requests->links() }}

                    {{-- Make Reqeust --}}
                    <div wire:ignore.self id="makeRequestModal" class="modal modal-adminpro-general fullwidth-popup-InformationproModal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form wire:submit.prevent="requestAsset">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" wire:click="closeModal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="sparkline9-list shadow-reset">
                                                <div class="sparkline9-hd">
                                                    <div class="main-sparkline9-hd">
                                                        <h1> Request Assets</h1>
                                                    </div>
                                                </div>
                                                <div class="sparkline9-graph">
                                                    <div class="basic-login-form-ad">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="basic-login-inner" style="margin-left: 10px; margin-right: 10px;">
                                                                    <div class="form-group-inner">
                                                                            <div class="row" style="margin-bottom: 20px;">
                                                                                <div class="col-md-6">
                                                                                    <div class="row" style="align-content: left; margin-right: 20px;">
                                                                                        <div class="col-12">
                                                                                            <label for="condition">Asset category:</label>
                                                                                        </div>
                                                                                        <div class="col-12" style="margin-top: 8px;">
                                                                                            <select wire:model="assettype_id"class="form-control" id="assettype_id">
                                                                                                <option value="" selected style="font-weight: bold;">Select assect category</option>
                                                                                                @foreach ($assetTypes as $assetType)
                                                                                                        <option value="{{ $assetType->id }}">{{ $assetType->name }}</option>
                                                                                                        
                                                                                                @endforeach
                                                                                            </select>
                                                                                            @error('assettype_id')
                                                                                                <span class="text-danger">{{ $message }}</span>
                                                                                            @enderror
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="row" style="align-content: left;">
                                                                                        <div class="col-12">
                                                                                            <label>Asset:</label>
                                                                                        </div>
                                                                                        <div class="col-12" style="margin-top: 8px;">
                                                                                            <select wire:model="asset_id"class="form-control" id="asset_id">
                                                                                                <option value="" selected style="font-weight: bold;">Select asset</option>
                                                                                                @foreach ($assets as $asset)
                                                                                                    <option value="{{ $asset->id }}">{{ $asset->description }}</option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                            @error('asset_id')
                                                                                                <span class="text-danger">{{ $message }}</span>
                                                                                            @enderror
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div> 
                                                                        <div class="form-group-inner">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="row" style="align-content: left;">
                                                                                        <div class="col-12">
                                                                                            <label for="condition">Remarks:</label>
                                                                                        </div>
                                                                                        <div class="col-12" style="margin-top: 8px;">
                                                                                            <textarea wire:model="remarks" class="form-control" cols="30" rows="2"></textarea>
                                                                                            @error('remarks')
                                                                                                <span class="text-danger">{{ $message }}</span>
                                                                                            @enderror
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>                 
                                                                        <div class="form-group-inner">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="row" style="align-content: left; margin-right: 20px;">
                                                                                        <div class="col-12">
                                                                                            <label for="condition">Quantity:</label>
                                                                                        </div>
                                                                                        <div class="col-12" style="margin-top: 8px; margin-right: 20px;">
                                                                                            <input type="number" wire:model="quantity" class="form-control" />
                                                                                            @error('quantity')
                                                                                                <span class="text-danger">{{ $message }}</span>
                                                                                            @enderror
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="row" style="align-content: left; margin-right: 20px;">
                                                                                        <div class="col-12">
                                                                                            <label>Send to HOS:</label>
                                                                                        </div>
                                                                                        <div class="col-12" style="margin-top: 8px; margin-left: 20px;">
                                                                                            <p>{{ $headOfSection }}</p>
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
                                    </div>
                                </div>
                                <div class="modal-footer footer-modal-admin">
                                    <button type="button" data-dismiss="modal" wire:click="closeModal" class="btn btn-warning">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Send request</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    {{-- View Reqeust --}}
                    <div id="viewRequestModal" class="modal modal-adminpro-general fullwidth-popup-InformationproModal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" wire:click="closeModal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="sparkline9-list shadow-reset">
                                                <div class="sparkline9-hd">
                                                    <div class="main-sparkline9-hd">
                                                        <h1> <span class="basic-ds-n"></span></h1>

                                                    </div>
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

                    {{-- Edit Request --}}
                    <div id="editRequestModal" class="modal modal-adminpro-general fullwidth-popup-InformationproModal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" wire:click="closeModal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="sparkline9-list shadow-reset">
                                                <div class="sparkline9-hd">
                                                    <div class="main-sparkline9-hd">
                                                        <h1> <span class="basic-ds-n"></span></h1>

                                                    </div>
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

                    {{-- Delete Request --}}
                    <div id="deleteRequestModal" class="modal modal-adminpro-general fullwidth-popup-InformationproModal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" wire:click="closeModal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="sparkline9-list shadow-reset">
                                                <div class="sparkline9-hd">
                                                    <div class="main-sparkline9-hd">
                                                        <h1> <span class="basic-ds-n"></span></h1>

                                                    </div>
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

</div>
