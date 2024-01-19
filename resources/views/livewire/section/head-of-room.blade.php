<div>
    {{-- head of room --}}

    <div>
        <!-- Breadcome start-->
                  <div class="breadcome-area mg-b-30 small-dn">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-lg-12">
                                  <div class="breadcome-list shadow-reset">
                                      <div class="row">
                                          <div class="col-lg-6">
                                              <button class="btn btn-custon-rounded-three btn-success" data-toggle="modal" data-target="#AddEmployeeModalalert"><i class="fa fa-user"></i> Add</button>
                                               <div wire:ignore.self id="AddEmployeeModalalert" class="modal modal-adminpro-general fullwidth-popup-AddEmployeeModal zoomInUp" role="dialog">
                                      <div class="modal-dialog">
                                          <div class="modal-content">
    
                              <form wire:submit.prevent="#">
    
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
                                              <h1>Register Employee</h1>
    
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
                                                                <div class="col-lg-4 mb-3">
                                                                    <input type="text" class="form-control"  wire:model="first_name" placeholder="First name" />
                                                                    @error('first_name') <span class="error">{{ $message }}</span> @enderror
                                                                </div>
                                                                <div class="col-lg-4 mb-3">
                                                                    <input type="text" class="form-control"  wire:model="last_name" placeholder="Last name" />
                                                                    @error('last_name') <span class="error">{{ $message }}</span> @enderror
                                                                </div>
                                                            </div>
                                                          </div>
                                                          <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Phone number : </label>
                                                                </div>
                                                                <div class="col-lg-8 mb-3">
                                                                    <input type="text" class="form-control"  wire:model="phone" placeholder="Phone number" />
                                                                    @error('phone') <span class="error">{{ $message }}</span> @enderror
                                                                </div>
                                                            </div>
                                                          </div>
                                                          <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Email : </label>
                                                                </div>
                                                                <div class="col-lg-8 mb-3">
                                                                    <input type="text" class="form-control"  wire:model="email" placeholder="Email" />
                                                                    @error('email') <span class="error">{{ $message }}</span> @enderror
                                                                </div>
                                                            </div>
                                                          </div><br/>
                                                          <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Department : </label>
                                                                </div>
                                                                <div class="col-lg-8 mb-3">
                                                                    <select wire:model="department_id" id="" class="form-control">
                                                                      <option value="" selected="selected">Select Department</option>
                                                                        {{-- @foreach ($departments as $department)
                                                                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                                                                        @endforeach --}}
                                                                    </select>
                                                                    @error('department_id') <span class="error">{{ $message }}</span> @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Position : </label>
                                                                </div>
                                                                {{-- <div class="col-lg mb-3">
                                                                    <select wire:model="role_id" id="" class="form-control">
                                                                      <option value="" selected="selected">Select Position</option>
                                                                        {{-- @foreach ($roles as $role)
                                                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                                        @endforeach --}}
                                                                    {{--</select>
                                                                    @error('role_id') <span class="error">{{ $message }}</span> @enderror
                                                                </div> --}}
                                                                <div class="col-lg-4 mb-3" style="display:">
                                                                    <select wire:model="section_id" id="" class="form-control">
                                                                      <option value="" selected="selected">Select Section</option>
                                                                        {{-- @foreach ($sections as $section)
                                                                                <option value="{{ $section->id }}">{{ $section->name }}</option>
                                                                        @endforeach --}}
                                                                    </select>
                                                                    @error('section_id') <span class="error">{{ $message }}</span> @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Position : </label>
                                                                </div>
                                                                <div class="col-lg-8 mb-3">
                                                                    <select wire:model="role_id" id="" class="form-control">
                                                                      <option value="" selected="selected">Select Position</option>
                                                                        @foreach ($roles as $role)
                                                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('role_id') <span class="error">{{ $message }}</span> @enderror
                                                                </div>
                                                            </div>
                                                        </div>--}}<br/>
                                                            <div class="form-group-inner">
                                                              <div class="row">
                                                                  <div class="col-lg-4">
                                                                      <label class="login2">Building : </label>
                                                                  </div>
                                                                  <div class="col-lg-8 mb-3">
                                                                      <select wire:model="building_id" id="" class="form-control">
                                                                        <option value="" selected="selected">Select Building</option>
                                                                          {{-- @foreach ($buildings as $building)
                                                                                  <option value="{{ $building->id }}">{{ $building->name }}</option>
                                                                          @endforeach --}}
                                                                      </select>
                                                                      @error('building_id') <span class="error">{{ $message }}</span> @enderror
                                                                  </div>
                                                              </div>
                                                          </div>
                                                              <div class="form-group-inner">
                                                                  <div class="row">
                                                                      <div class="col-lg-4">
                                                                          <label class="login2">Floor and Room : </label>
                                                                      </div>
                                                                      <div class="col-lg-4 mb-3">
                                                                          <select wire:model="floor_id" id="" class="form-control">
                                                                            <option value="" selected="selected">Select Floor</option>
                                                                              {{-- @foreach ($floors as $floor)
                                                                                      <option value="{{ $floor->id }}">{{ $floor->name }}</option>
                                                                              @endforeach --}}
                                                                          </select>
                                                                          @error('floor_id') <span class="error">{{ $message }}</span> @enderror
                                                                      </div>
                                                                      <div class="col-lg-4 mb-3">
                                                                        <select wire:model="room_id" id="" class="form-control">
                                                                          <option value="" selected="selected">Select Room</option>
                                                                            {{-- @foreach ($rooms as $room)
                                                                                    <option value="{{ $room->id }}">{{ $room->name }}</option>
                                                                            @endforeach --}}
                                                                        </select>
                                                                        @error('room_id') <span class="error">{{ $message }}</span> @enderror
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
                                                  <button type="button" data-dismiss="modal" class="btn btn-warning">Cancel</button>
                                                  <button type="submit" class="btn btn-primary">Save</button>
                                              </div>
                                          </form>
                                          </div>
                                      </div>
                                  </div>
    
                                          </div>
                                          <div class="col-lg-6">
                                              <ul class="breadcome-menu">
                                                  <li><a href="{{ route('admin.dashboard') }}">Dashboard</a> <span class="bread-slash">/</span>
                                                  </li>
                                                  <li><span class="bread-blod">list of head of rooms</span>
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
                            @if (session()->has('activated'))
                                <div class="alert alert-info alert-dismissible my-3">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    {{ session('activated') }}
                                </div>
                            @endif
                            @if (session()->has('deactivated'))
                                <div class="alert alert-danger alert-dismissible my-3">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    {{ session('deactivated') }}
                                </div>
                            @endif
                          <div class="row">
                              <div class="col-lg-12">
                                  <div class="sparkline13-list shadow-reset">
                                      <div class="sparkline13-hd">
                                          <div class="main-sparkline13-hd">
                                              <h1>Head of Room </h1>
                                              <div class="sparkline13-outline-icon">
                                                  <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                                  <span><i class="fa fa-wrench"></i></span>
                                                  <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="sparkline13-graph">
                                          <div class="datatable-dashv1-list custom-datatable-overright">
    
                                              <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true"  data-show-refresh="true" data-key-events="true"  data-resizable="true"  data-click-to-select="true" class="table table-hover">
                                                  <thead>
                                                      <tr>
                                                          <th>S/N</th>
                                                          <th>Full name</th>
                                                          <th>Email</th>
                                                          <th>Phone number</th>
                                                          <th>Short address</th>
                                                          <th>Room name</th>
                                                          <th>Room number</th>
                                                          <th>Action</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                        <td>01</td>
                                                        <td>samson simba</td>
                                                        <td>sam@gmail.com</td>
                                                        <td>0719042217</td>
                                                        <td>posta</td>
                                                        <td>t-hub</td>
                                                        <td>102</td>
                                                        <td>
                                                            <button class="btn btn-primary">update</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>02</td>
                                                        <td>samson simba</td>
                                                        <td>sam@gmail.com</td>
                                                        <td>0719042217</td>
                                                        <td>posta</td>
                                                        <td>t-hub</td>
                                                        <td>102</td>
                                                        <td>
                                                            <button class="btn btn-primary">update</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>03</td>
                                                        <td>samson simba</td>
                                                        <td>sam@gmail.com</td>
                                                        <td>0719042217</td>
                                                        <td>posta</td>
                                                        <td>t-hub</td>
                                                        <td>102</td>
                                                        <td>
                                                            <button class="btn btn-primary">update</button>
                                                        </td>
                                                    </tr>
                                                          {{-- @php
                                                          $i=1;
                                                          @endphp
                                                      @forelse ($employees as $employee)
                                                      <tr>
                                                          <td>{{$i++}}</td>
                                                          <td>{{$employee->first_name . ' ' . $employee->last_name}}</td>
                                                          <td>{{$employee->email}}</td>
                                                          <td>{{$employee->phone}}</td>
                                                          {{-- <td>{{$employee->section}}</td> --}}
                                                          {{-- <td>{{$employee->section->name}}</td> --}}
                                                          {{-- <td>{{$employee->room->building->name}}</td> --}}
                                                          {{-- <td>{{$employee->room->floor->name}}</td> --}}
                                                          {{-- <td>{{$employee->room->name}}</td>
                                                          <td>{{$employee->role->name}}</td>
                                                          <td >{{$employee->created_at->format('d/m/Y')}}</td>
                                                          <td>
                                                            <button type="button" wire:click="getEmployeeDetails({{ $employee->id }})" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#EditEmployeeModal"><i class="fa fa-edit"></i></button>
                                                            @php
                                                                if($employee->is_active){
                                                                    $btncolor = 'success';
                                                                } else {
                                                                    $btncolor = 'danger';
                                                                }
                                                            @endphp
    
                                                            <button type="button" class="btn btn-{{ $btncolor }}" data-toggle="modal" wire:click="ShowSoftDeleteModal({{ $employee->id }})" data-target="#activateEmployeeModal"><i class="fa fa-power-off"></i></button>
                                                        </td>
                                                      </tr>
                                                      @empty
                                                          <tr><td style='color:red; text-align:center;' colspan='7' >No Employees Found!</td></tr>
                                                      @endforelse --}} 
    
                                                  </tbody>
                                              </table>
                                              {{-- {{ $employees->links() }} --}}
    
                                              {{-- Soft Delete model --}}
                                        <div>
                                        <div id="activateEmployeeModal" wire:ignore.self class="modal modal-adminpro-general fullwidth-popup-activateEmployeeModal fade" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                            <form wire:submit.prevent="##">
    
                                                              @csrf
    
                                                        <div class="modal-close-area modal-close-df">
                                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                    <div class="col-lg-12">
                                            <div class="sparkline9-list shadow-reset">
                                                <div class="sparkline9-graph">
                                                    <strong>Are you sure you want to Perform this Action?</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        </div>
                                             <div class="modal-footer footer-modal-admin">
                                                            <button type="button" data-dismiss="modal" class="btn btn-info">Cancel</button>
                                                            <button type="submit" class="btn btn-danger">Yes, Submit</button>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                        {{-- Edit Model --}}
                                        <div>
                                            <div id="EditEmployeeModal" wire:ignore.self class="modal modal-adminpro-general fullwidth-popup-EditEmployeeModal fade" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                            <form wire:submit.prevent="##">
    
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
                                                        <h1>Edit Employee Details</h1>
    
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
                                                                          <div class="col-lg-4 mb-3">
                                                                              <input type="text" class="form-control"  wire:model="first_name" placeholder="First name" />
                                                                              @error('first_name') <span class="error">{{ $message }}</span> @enderror
                                                                          </div>
                                                                          <div class="col-lg-4 mb-3">
                                                                              <input type="text" class="form-control"  wire:model="last_name" placeholder="Last name" />
                                                                              @error('last_name') <span class="error">{{ $message }}</span> @enderror
                                                                          </div>
                                                                      </div>
                                                                    </div>
                                                                    <div class="form-group-inner">
                                                                      <div class="row">
                                                                          <div class="col-lg-4">
                                                                              <label class="login2">Phone number : </label>
                                                                          </div>
                                                                          <div class="col-lg-8 mb-3">
                                                                              <input type="text" class="form-control"  wire:model="phone" placeholder="Phone number" />
                                                                              @error('phone') <span class="error">{{ $message }}</span> @enderror
                                                                          </div>
                                                                      </div>
                                                                    </div>
                                                                    <div class="form-group-inner">
                                                                      <div class="row">
                                                                          <div class="col-lg-4">
                                                                              <label class="login2">Email : </label>
                                                                          </div>
                                                                          <div class="col-lg-8 mb-3">
                                                                              <input type="text" class="form-control"  wire:model="email" placeholder="Email" />
                                                                              @error('email') <span class="error">{{ $message }}</span> @enderror
                                                                          </div>
                                                                      </div>
                                                                    </div><br/>
                                                                    <div class="form-group-inner">
                                                                      <div class="row">
                                                                          <div class="col-lg-4">
                                                                              <label class="login2">Department : </label>
                                                                          </div>
                                                                          <div class="col-lg-8 mb-3">
                                                                              <select wire:model="department_id" id="" class="form-control">
                                                                                <option value="" selected="selected">Select Department</option>
                                                                                  {{-- @foreach ($departments as $department)
                                                                                          <option value="{{ $department->id }}">{{ $department->name }}</option>
                                                                                  @endforeach --}}
                                                                              </select>
                                                                              @error('department_id') <span class="error">{{ $message }}</span> @enderror
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="form-group-inner">
                                                                      <div class="row">
                                                                          <div class="col-lg-4">
                                                                              <label class="login2">Position : </label>
                                                                          </div>
                                                                          <div class="col-lg-5 mb-3">
                                                                              <select wire:model="role_id" id="" class="form-control">
                                                                                <option value="" selected="selected">Select Position</option>
                                                                                  {{-- @foreach ($roles as $role)
                                                                                          <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                                                  @endforeach --}}
                                                                              </select>
                                                                              @error('role_id') <span class="error">{{ $message }}</span> @enderror
                                                                          </div>
                                                                          <div class="col-lg-4 mb-3" style="">
                                                                              <select wire:model="section_id" id="" class="form-control">
                                                                                <option value="" selected="selected">Select Section</option>
                                                                                  {{-- @foreach ($sections as $section)
                                                                                          <option value="{{ $section->id }}">{{ $section->name }}</option>
                                                                                  @endforeach --}}
                                                                              </select>
                                                                              @error('section_id') <span class="error">{{ $message }}</span> @enderror
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  {{-- <div class="form-group-inner">
                                                                      <div class="row">
                                                                          <div class="col-lg-4">
                                                                              <label class="login2">Position : </label>
                                                                          </div>
                                                                          <div class="col-lg-8 mb-3">
                                                                              <select wire:model="role_id" id="" class="form-control">
                                                                                <option value="" selected="selected">Select Position</option>
                                                                                  @foreach ($roles as $role)
                                                                                          <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                                                  @endforeach
                                                                              </select>
                                                                              @error('role_id') <span class="error">{{ $message }}</span> @enderror
                                                                          </div>
                                                                      </div>
                                                                  </div>--}}<br/>
                                                                      <div class="form-group-inner">
                                                                        <div class="row">
                                                                            <div class="col-lg-4">
                                                                                <label class="login2">Building : </label>
                                                                            </div>
                                                                            <div class="col-lg-8 mb-3">
                                                                                <select wire:model="building_id" id="" class="form-control">
                                                                                  <option value="" selected="selected">Select Building</option>
                                                                                    {{-- @foreach ($buildings as $building)
                                                                                            <option value="{{ $building->id }}">{{ $building->name }}</option>
                                                                                    @endforeach --}}
                                                                                </select>
                                                                                @error('building_id') <span class="error">{{ $message }}</span> @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                        <div class="form-group-inner">
                                                                            <div class="row">
                                                                                <div class="col-lg-4">
                                                                                    <label class="login2">Floor and Room : </label>
                                                                                </div>
                                                                                <div class="col-lg-4 mb-3">
                                                                                    <select wire:model="floor_id" id="" class="form-control">
                                                                                      <option value="" selected="selected">Select Floor</option>
                                                                                        {{-- @foreach ($floors as $floor)
                                                                                                <option value="{{ $floor->id }}">{{ $floor->name }}</option>
                                                                                        @endforeach --}}
                                                                                    </select>
                                                                                    @error('floor_id') <span class="error">{{ $message }}</span> @enderror
                                                                                </div>
                                                                                <div class="col-lg-4 mb-3">
                                                                                  <select wire:model="room_id" id="" class="form-control">
                                                                                    <option value="" selected="selected">Select Room</option>
                                                                                      {{-- @foreach ($rooms as $room)
                                                                                              <option value="{{ $room->id }}">{{ $room->name }}</option>
                                                                                      @endforeach --}}
                                                                                  </select>
                                                                                  @error('room_id') <span class="error">{{ $message }}</span> @enderror
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
                                                            <button type="button" data-dismiss="modal" class="btn btn-warning">Cancel</button>
                                                            <button type="submit" class="btn btn-primary">Save</button>
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
    
    {{-- head of room end --}}
</div>
