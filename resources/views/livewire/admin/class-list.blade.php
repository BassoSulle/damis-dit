<div>
    <!-- Breadcome End-->
    <div class="breadcome-area mg-b-30 small-dn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list shadow-reset">
                        <div class="row">
                            <div class="col-lg-6">
                                <button class="btn btn-custon-rounded-three btn-success" data-toggle="modal"
                                    data-target="#AddClassModalalert"><i class="fa fa-plus"></i> Add Class</button>

                                {{-- Add Class Modal --}}
                                <div id="AddClassModalalert" wire:ignore.self
                                    class="modal modal-adminpro-general fullwidth-popup-AddClassModal zoomInUp"
                                    role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form wire:submit.prevent="AddClass" method="post">

                                                @csrf

                                                <div class="modal-close-area modal-close-df">
                                                    <a class="close" data-dismiss="modal" href="#"><i
                                                            class="fa fa-close"></i></a>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="sparkline9-list shadow-reset">
                                                                <div class="sparkline9-hd">
                                                                    <div class="main-sparkline9-hd">
                                                                        <h1>Add Asset Category Class</h1>
                                                                    </div>
                                                                </div>
                                                                <div class="sparkline9-graph">
                                                                    <div class="basic-login-form-ad">
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <div class="basic-login-inner">
                                                                                    <div class="form-group-inner">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-4">
                                                                                                <label
                                                                                                    class="login2">Name
                                                                                                    : </label>
                                                                                            </div>
                                                                                            <div class="col-lg-8">
                                                                                                <input type="text"
                                                                                                    wire:model="name"
                                                                                                    class="form-control"
                                                                                                    placeholder="Enter class name" />
                                                                                                @error('name')
                                                                                                    <span
                                                                                                        class="text-danger">{{ $message }}</span>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group-inner">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-4">
                                                                                                <label
                                                                                                    for="asset_type">Asset Category
                                                                                                    :</label>
                                                                                            </div>
                                                                                            <div class="col-lg-8">
                                                                                                <select
                                                                                                    wire:model="asset_type_id"
                                                                                                    id="asset_type"
                                                                                                    class="form-control">
                                                                                                    <option
                                                                                                        value="">
                                                                                                        Select
                                                                                                        Asset Category
                                                                                                    </option>
                                                                                                    @foreach ($assetTypes as $assetType)
                                                                                                        <option
                                                                                                            value="{{ $assetType->id }}">
                                                                                                            {{ $assetType->name }}
                                                                                                        </option>
                                                                                                    @endforeach
                                                                                                </select>
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
                                                    <button wire:click="closeModel" data-dismiss="modal"
                                                        class="btn btn-warning">Cancel</button>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ul class="breadcome-menu">
                                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a> <span
                                            class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Asset Category Class</span>
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
            @if (session()->has('add'))
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
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline13-list shadow-reset">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Asset Category Classes</h1>
                                <div class="sparkline13-outline-icon">
                                    <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                    <span><i class="fa fa-wrench"></i></span>
                                    <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">

                                <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                    data-show-columns="true" data-show-refresh="true" data-key-events="true"
                                    data-resizable="true" data-click-to-select="true" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Class Name</th>
                                            <th>Asset Category</th>
                                            <th>Recorded On</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @forelse ($classes as $class)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $class->name }}</td>
                                            <td>{{ $class->asset_type_id }}</td>
                                            <td>{{ $class->created_at->format('d/m/Y') }}</td>
                                                <td>
                                                    <button type="button"
                                                        wire:click="getClassDetails({{ $class->id }})"
                                                        class="btn btn-primary btn-circle" data-toggle="modal"
                                                        data-target="#editClass"><i class="fa fa-edit"></i></button>
                                                    <button type="button"
                                                        wire:click="getClassDeleteDetails({{ $class->id }})"
                                                        class="btn btn-danger" data-toggle="modal"
                                                        data-target="#DeleteClassModal"><i
                                                            class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td style='color:red; text-align:center;' colspan='5'>No Class
                                                    Found!</td>
                                            </tr>
                                        @endforelse

                                    </tbody>
                                </table>
                                </table>
                                {{ $classes->links() }}

                                {{-- edit model --}}
                                <div id="editClass" wire:ignore.self
                                    class="modal modal-adminpro-general fullwidth-popup-AddClassModal fade"
                                    role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <form wire:submit.prevent="EditClass({{ $class_id }})">

                                                @csrf

                                                <div class="modal-close-area modal-close-df">
                                                    <a class="close" wire:click="closeModal" data-dismiss="modal"
                                                        href="#"><i class="fa fa-close"></i></a>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="sparkline9-list shadow-reset">
                                                                <div class="sparkline9-hd">
                                                                    <div class="main-sparkline9-hd">
                                                                        <h1>Edit Class</h1>
                                                                    </div>
                                                                </div>
                                                                <div class="sparkline9-graph">
                                                                    <div class="basic-login-form-ad">
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <div class="basic-login-inner">
                                                                                    <div class="form-group-inner">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-4">
                                                                                                <label
                                                                                                    class="login2">Name
                                                                                                    : </label>
                                                                                            </div>
                                                                                            <div class="col-lg-8">
                                                                                                <input type="text"
                                                                                                    wire:model="name"
                                                                                                    class="form-control"
                                                                                                    placeholder="Enter Class Name" />
                                                                                                @error('name')
                                                                                                    <span
                                                                                                        class="text-danger">{{ $message }}</span>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group-inner">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-4">
                                                                                                <label
                                                                                                    for="asset_type">Asset Category
                                                                                                    :</label>
                                                                                            </div>
                                                                                            <div class="col-lg-8">
                                                                                                <select
                                                                                                    wire:model="asset_type_id"
                                                                                                    id="asset_type"
                                                                                                    class="form-control">
                                                                                                    <option
                                                                                                        value="">
                                                                                                        Select
                                                                                                        Asset Category
                                                                                                    </option>
                                                                                                    @foreach ($assetTypes as $assetType)
                                                                                                        <option
                                                                                                            value="{{ $assetType->id }}">
                                                                                                            {{ $assetType->name }}
                                                                                                        </option>
                                                                                                    @endforeach
                                                                                                </select>
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
                                                    <button type="button" data-dismiss="modal"
                                                        wire:click="closeModal"
                                                        class="btn btn-warning">Cancel</button>
                                                    <button type="submit" class="btn btn-info">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                {{-- Delete modal --}}
                                <div wire:ignore.self id="DeleteClassModal"
                                    class="modal modal-adminpro-general fullwidth-popup-DeleteClassModal fade"
                                    role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form wire:submit.prevent="DeleteClass({{ $class_id }})">

                                                @csrf

                                                <div class="modal-close-area modal-close-df">
                                                    <a class="close" wire:click="closeModal" data-dismiss="modal"
                                                        href="#"><i class="fa fa-close"></i></a>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="sparkline9-list shadow-reset">
                                                                <div class="sparkline9-graph">
                                                                    <strong>Are you sure you want to delete this
                                                                        class?</strong>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer footer-modal-admin">
                                                    <button type="button" wire:click="closeModal"
                                                        data-dismiss="modal" class="btn btn-warning">Cancel</button>
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
