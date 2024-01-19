<div>
    <div>
        <!-- Breadcome start-->
                  <div class="breadcome-area mg-b-30 small-dn">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-lg-12">
                                  <div class="breadcome-list shadow-reset">
                                      <div class="row">
                                          <div class="col-lg-6">
                                              {{-- <button class="btn btn-custon-rounded-three btn-success" data-toggle="modal" data-target="#AddDepatmentModalalert"><i class="fa fa-plus"></i> Add Department</button> --}}
                                               <div wire:ignore.self id="AddDepatmentModalalert" class="modal modal-adminpro-general fullwidth-popup-AddDepatmentModal zoomInUp" role="dialog">
                                      <div class="modal-dialog">
                                          <div class="modal-content">

                              <form wire:submit.prevent="###">

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
                                              <h1>Add Department</h1>

                                          </div>
                                      </div>
                                      <div class="sparkline9-graph">
                                          <div class="basic-login-form-ad">
                                              <div class="row">
                                                  <div class="col-lg-12 col-md-12">
                                                      <div class="basic-login-inner">
                                                              <div class="form-group-inner">
                                                                  <div class="row">
                                                                      <div class="col-lg-4">
                                                                          <label class="login2">Name : </label>
                                                                      </div>
                                                                      <div class="col-lg-8 mb-3">
                                                                          <input type="text" class="form-control"  wire:model="name" placeholder="Department Name" />
                                                                          @error('name') <span class="error">{{ $message }}</span> @enderror
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                              <div class="form-group-inner">
                                                                  <div class="row">
                                                                      <div class="col-lg-4">
                                                                          <label class="login2">Code : </label>
                                                                      </div>
                                                                      <div class="col-lg-8">
                                                                          <input type="text" class="form-control" wire:model="###" placeholder="Department Code" />
                                                                          @error('department_code') <span class="error">{{ $message }}</span> @enderror
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
                                                  <button type="button" wire:click="closeModal" data-dismiss="modal" class="btn btn-warning">Cancel</button>
                                                  <button type="submit" class="btn btn-primary">Save</button>
                                              </div>
                                          </form>
                                          </div>
                                      </div>
                                  </div>
                                          </div>
                                          <div class="col-lg-6">
                                              <ul class="breadcome-menu">
                                                  <li><a href="{{ route('user_department.dashboard') }}">Dashboard</a> <span class="bread-slash">/</span>
                                                  </li>
                                                  <li><span class="bread-blod">Room Details</span>
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
                                              <h1>Rooms list</h1>
                                              <div class="sparkline13-outline-icon">
                                                  <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                                  <span><i class="fa fa-wrench"></i></span>
                                                  <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="sparkline13-graph">
                                          <div class="datatable-dashv1-list custom-datatable-overright">
                                                    @php
                                                    $i=1;
                                                    @endphp
                                              <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true"  data-show-refresh="true" data-key-events="true"  data-resizable="true"  data-click-to-select="true" class="table table-hover">
                                                  <thead>
                                                      <tr>
                                                        <th>S/N</th>
                                                        <th >Name</th>
                                                        <th>Building</th>
                                                        <th >Floor</th>
                                                        <th >Capaacity</th>
                                                        <th >Head of Room</th>
                                                        <th>Action</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                @forelse ($rooms as $room)
                                                <tr>
                                                    <td >{{$i++}}</td>
                                                    <td>{{$room->name}}</td>
                                                    <td >{{$room->building->name}}</td>
                                                    <td >{{$room->floor->name}}</td>
                                                    <td >{{$room->capacity}}</td>
                                                        <td>
                                                            @foreach ($employees as $employee)
                                                                @if (($employee->room_id == $room->id) && ($employee->role_id == $employee->role->id) && ($employee->role->name == 'head of office'))
                                                                    {{ $employee->first_name . ' ' . $employee->last_name }}

                                                                @endif
                                                            @endforeach
                                                          </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#EditAssetModal"><i class="fa fa-eye"></i></button>

                                                    </td>
                                                </tr>
                                                @empty
                                                    <tr><td style="color:red" colspan="7">No rooms found!</td></tr>
                                                @endforelse

                                                          {{-- @php
                                                          $i=1;
                                                          @endphp
                                                      @forelse ($departmentsWithHeadOfDepartment as $department)
                                                      <tr>
                                                          <td>{{$i++}}</td>
                                                          <td>{{$department->name}}</td>
                                                          <td>{{$department->department_code}}</td>
                                                          <td>

                                                              @forelse ($department->sections as $section)

                                                                  @foreach ($section->employees as $employee)
                                                                      @dd($employee)
                                                                      {{-- @if ($employee->role->name === 'director')
                                                                          <p>Director: {{ $employee->name }}</p>
                                                                      @endif --}}
                                                                  {{-- @endforeach
                                                              @empty
                                                              N/A
                                                              @endforelse --}}
                                                                  {{-- @forelse ($department->sections as $section)

                                                                      @foreach ($section->employees as $employee) --}}
                                                                          {{-- @if ($employee->role->name === 'director')
                                                                          <p>{{ dd($employee->first_name) }}</p>
                                                                          @endif --}}
                                                                      {{-- {{ dd($employee->role) }} --}}
                                                                      {{-- {{ $employee->role->name }} --}}
                                                                      {{-- @endforeach --}}
                                                                      {{-- @if (!empty($department->sections)) --}}

                                                                      {{-- @forelse ($section->employees as $employee)
                                                                          @if ($employee->role->name === 'director')
                                                                              <p>{{ $employee->first_name }}</p>
                                                                          @endif
                                                                      @empty --}}
                                                                      {{-- N/A --}}
                                                                      {{-- @endforelse --}}

                                                                      {{-- @else
                                                                      N/A
                                                                      @endif --}}
                                                                  {{-- @empty
                                                                  N/A
                                                                  @endforelse --}}


                                                              {{-- @foreach ($department->sections as $section)

                                                                  @foreach ($section->employees as $employee)
                                                                  @if (($section->id == $employee->section_id) && ($employee->role->name == 'director'))
                                                                  {{ $employee->first_name . ' ' . $employee->last_name }}
                                                                  @else
                                                                   N/A
                                                                  @endif --}}
                                                                          {{-- @if (()
                                                                              {{ $employee->first_name . ' ' . $employee->last_name }}
                                                                          @else
                                                                  {{-- N/A --}}

                                                                          {{-- @endif --}}
                                                                  {{-- @empty --}}
                                                                  {{-- N/A --}}
                                                                  {{-- @endforeach
                                                               @endforeach --}}
                                                          {{-- </td>
                                                          <td >{{$department->created_at->format('d/m/Y')}}</td>
                                                          <td>
                                                              <button type="button" wire:click="getDeptDetails({{ $department->id }})" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#editDepartmentModal"><i class="fa fa-edit"></i></button>
                                                              @php
                                                                  if($department->is_active){
                                                                      $btncolor = 'success';
                                                                  } else {
                                                                      $btncolor = 'danger';
                                                                  }
                                                              @endphp
                                                              <button type="button" class="btn btn-{{ $btncolor }}" data-toggle="modal" data-target="#DeleteEmployeeModal"><i class="fa fa-power-off"></i></button>
                                                          </td>
                                                      </tr>
                                                      @empty
                                                          <tr><td style='color:red; text-align:center;' colspan='5' >No Departments Found!</td></tr>
                                                      @endforelse --}}

                                                  </tbody>
                                              </table>
                                              {{-- {{ $departmentsWithHeadOfDepartment->links() }} --}}



                                  <div wire:ignore.self id="editDepartmentModal" class="modal modal-adminpro-general fullwidth-popup-InformationproModal fade" role="dialog">
                                      <div class="modal-dialog">
                                          <div class="modal-content">
                                                  <form wire:submit.prevent="##">

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
                                              <h1>Edit Department Details</h1>

                                          </div>
                                      </div>
                                      <div class="sparkline9-graph">
                                          <div class="basic-login-form-ad">
                                              <div class="row">
                                                  <div class="col-lg-12 col-md-12">
                                                      <div class="basic-login-inner">
                                                              <div class="form-group-inner">
                                                                  <div class="row">
                                                                      <div class="col-lg-4">
                                                                          <label class="login2">Name : </label>
                                                                      </div>
                                                                      <div class="col-lg-8 mb-3">
                                                                          <input type="text" class="form-control"  wire:model="name" placeholder="Department Name" />
                                                                          @error('name') <span class="error">{{ $message }}</span> @enderror
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                              <div class="form-group-inner">
                                                                  <div class="row">
                                                                      <div class="col-lg-4">
                                                                          <label class="login2">Code : </label>
                                                                      </div>
                                                                      <div class="col-lg-8">
                                                                          <input type="text" class="form-control" wire:model="department_code" placeholder="Department Code" />
                                                                          @error('department_code') <span class="error">{{ $message }}</span> @enderror
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
                                  <button type="button" wire:click="closeModal" data-dismiss="modal" class="btn btn-warning">Cancel</button>
                                  <button type="submit" class="btn btn-primary">Update</button>
                              </div>
                                          </form>
                                          </div>
                                      </div>
                                  </div>


                                  <div wire:ignore.self id="DeleteDepartmentModal" class="modal modal-adminpro-general fullwidth-popup-InformationproModal fade" role="dialog">
                                      <div class="modal-dialog">
                                          <div class="modal-content">
                                                  <form wire:submit.prevent="##">

                                                      @csrf

                                              <div class="modal-close-area modal-close-df">
                                                  <a class="close" wire:click="closeModal" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                              </div>
                                              <div class="modal-body">
                                                  <div class="row">
                                          <div class="col-lg-12">
                                  <div class="sparkline9-list shadow-reset">
                                      <div class="sparkline9-graph">
                                          <strong>Are you sure you want to Delete this Department?</strong>
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
