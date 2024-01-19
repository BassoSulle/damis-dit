@extends('layouts.estate')

@section('estatecontent')
<div class="container mt-4"><br>
  <h1>Estate Requests</h1>
    <table id="table" class="table table-striped table-bordered" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-refresh="true" data-key-events="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar">
        <thead class="thead-dark">
            <tr>
                <th>REQUEST ID</th>
                <th>DESCRIPTION</th>
                <th>DEPARTMENT ID</th>
                <th>ASSET ID</th>
                <th>ASSET TYPE</th>
                <th>STATUS</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
           
            @foreach($requestData as $request)
              <tr>
                <td>{{ $request->request_id }}</td>
                <td>{{ $request->request_description }}</td>
                <td>{{ $request->department_id }}</td>
                <td>{{ $request->asset_id }}</td>
                <td>
                    @foreach($assetTypes as $assetType)
                        @if($assetType->assettype_id === $request->assettype_id)
                            {{ $assetType->assettype_name }}
                        @endif
                    @endforeach
                </td>
                <td>{{ $request->status }}</td>


                <td>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit">Approve</button>
                    <button type="button" class="btn btn-danger btn-sm deny-button" 
                       >
                        Deny
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="col-lg-9">
        <div class="row" style="justify-content:right;">
            <div class="col-lg-3 col-sm-6 col-12 mt-lg-0 mt-2">
                <button class="btn p-2 bg-primary w-100 mb-0 toast-btn" type="button"
                    data-target="warningToast"><b style="font-size: 1.5rem">PRINT</b></button>
            </div>
        </div>
    </div>
</div>



@endsection
