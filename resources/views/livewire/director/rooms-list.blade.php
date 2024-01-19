<div>
    <div>
        <div class="breadcome-area mg-b-30 small-dn">
            <div class="container-fluid">
                   <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcome-list shadow-reset">
                            <div class="row">
                                <div class="col-lg-6">
                                    {{-- <button class="btn btn-custon-rounded-three btn-success" data-toggle="modal" data-target="#AddSectionModalalert"><i class="fa fa-plus"></i> Section</button> --}}

                        {{-- add section model --}}
                        <div id="AddSectionModalalert" wire:ignore.self class="modal modal-adminpro-general fullwidth-popup-AddSectionModal zoomInUp" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                        <form wire:submit.prevent="AddSection" method="post">

                                            @csrf

                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                <div class="col-lg-12">
                        <div class="sparkline9-list shadow-reset">
                            <div class="sparkline9-hd">
                                <div class="main-sparkline9-hd">
                                    <h1>Add Department Section</h1>

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
                                                                <label class="login2">Name : </label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" wire:model="name" class="form-control" placeholder="Enter Section name" />
                                                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <label for="department">Department :</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <select wire:model="department_id" id="department" class="form-control">
                                                                    <option value="">Select Department</option>
                                                                    @foreach ($departments as $department)
                                                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
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
                        <button wire:click="closeModel" data-dismiss="modal"  class="btn btn-warning">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                                </form>
                                </div>
                            </div>
                        </div>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="breadcome-menu">
                                        <li><a href="{{route('admin.dashboard')}}">Dashboard</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod">Department Rooms</span>
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
                                    <h1>Department Rooms</h1>
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
                                                <th>S/N</th>
                                                <th >Name</th>
                                                <th >Capacity</th>
                                                <th >Section</th>
                                                <th >Office Bearer</th>
                                                <th >Contact</th>
                                                <th >Recorded On</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $i=1;
                                            @endphp
                                            @forelse ($rooms as $room)
                                                <tr>
                                                    @foreach ($employees as $employee)
                                                        @foreach ($sections as $section)
                                                            @if(($room->id == $employee->room_id) && ($employee->role->name === 'head of office') && ($employee->section_id == $section->id))
                                                                <td>{{$i++}}</td>
                                                                <td>{{$room->name}}</td>
                                                                <td>{{$room->capacity}}</td>
                                                                <td>{{$section->name}}</td>
                                                                <td>{{ $employee->first_name }} {{ $employee->last_name}}</td>
                                                                <td>{{ $employee->phone }}</td>
                                                                <td >{{$room->created_at->format('d/m/Y')}}</td>
                                                                <td>
                                                                    <button type="button" wire:click="getSectionDetails({{ $room->id }})" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#editSection"><i class="fa fa-edit"></i></button>
                                                                    {{-- <button type="button" wire:click="getSectionDeleteDetails({{ $section->id }})" class="btn btn-danger" data-toggle="modal" data-target="#DeleteSectionModal"><i class="fa fa-trash"></i></button> --}}
                                                                </td>
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                </tr>
                                            @empty
                                                <tr><td style='color:red; text-align:center;' colspan='8' >No Section Found!</td></tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    </table>
                                    {{ $rooms->links() }}

                     {{-- edit model --}}
                                    <div id="editSection" wire:ignore.self class="modal modal-adminpro-general fullwidth-popup-AddSectionModal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                    <form wire:submit.prevent="EditSection({{ $room_id }})">

                                                        @csrf

                                                <div class="modal-close-area modal-close-df">
                                                    <a class="close" wire:click="closeModal" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                            <div class="col-lg-12">
                                                <div class="sparkline9-list shadow-reset">
                                                    <div class="sparkline9-hd">
                                                        <div class="main-sparkline9-hd">
                                                            <h1>Edit Section</h1>
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
                                                                                        <label class="login2">Name : </label>
                                                                                    </div>
                                                                                    <div class="col-lg-8">
                                                                                        <input type="text" wire:model="name" class="form-control" placeholder="Enter Room Name" />
                                                                                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            {{-- <div class="form-group-inner">
                                                                                <div class="row">
                                                                                    <div class="col-lg-4">
                                                                                        <label for="department">Department :</label>
                                                                                    </div>
                                                                                    <div class="col-lg-8">
                                                                                        <select wire:model="department_id" id="department" class="form-control">
                                                                                            <option value="">Select Department</option>
                                                                                            @foreach ($departments as $department)
                                                                                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                                                                                            @endforeach
                                                                                        </select>
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
                                                    <button type="button" data-dismiss="modal" wire:click="closeModal" class="btn btn-warning">Cancel</button>
                                                    <button type="submit" class="btn btn-info">Update</button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                     </div>

                                     {{-- Delete modal --}}
                                     <div wire:ignore.self id="DeleteSectionModal" class="modal modal-adminpro-general fullwidth-popup-DeleteSectionModal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                    <form wire:submit.prevent="DeleteSection({{ $room_id }})">

                                                        @csrf

                                                <div class="modal-close-area modal-close-df">
                                                    <a class="close" wire:click="closeModal" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                            <div class="col-lg-12">
                                    <div class="sparkline9-list shadow-reset">
                                        <div class="sparkline9-graph">
                                            <strong>Are you sure you want to Delete this Room?</strong>
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
