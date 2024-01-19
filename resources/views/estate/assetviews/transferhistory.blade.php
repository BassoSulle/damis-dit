@extends('layouts.estate')

@section('estatecontent')
<div class="container mt-4"><br>
  <h1>Transfer History</h1>
    <table id="table" class="table table-striped table-bordered" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-refresh="true" data-key-events="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar">
        <thead class="thead-dark">
            <tr>
                <th>transfer_history_id	</th>
                <th>transferred_from</th>
                <th>transferred_to</th>
                <th>quantity</th>
                <th>date_transferred</th>
                <th>asset_id</th>
                <th>user_id</th>
                <th>condition_id</th>
                <th>room_id</th>
            </tr>
        </thead>
        <tbody>

             @foreach($transferHistory as $transfer)
                <tr>
                    <td>{{ $transfer->transfer_history_id }}</td>
                    <td>{{ $transfer->transferred_from }}</td>
                    <td>{{ $transfer->transferred_to }}</td>
                    <td>{{ $transfer->quantity }}</td>
                    <td>{{ $transfer->date_transferred }}</td>
                    <td>{{ $transfer->asset_id }}</td>
                    <td>{{ $transfer->user_id }}</td>
                    <td>{{ $transfer->condition_id }}</td>
                    <td>{{ $transfer->room_id }}</td>
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
