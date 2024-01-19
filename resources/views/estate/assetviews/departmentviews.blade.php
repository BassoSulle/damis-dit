@extends('layouts.estate')

@section('estatecontent')
<div class="container"><br>
    <h2>Assets form {{ $departmentName }} </h2>
<br>

    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true"  data-show-refresh="true" data-key-events="true"  data-resizable="true" data-cookie="true" data-cookie-id-table="saveId"  data-click-to-select="true" data-toolbar="#toolbar">
        <thead>
            <tr>
                <th>AssetNo</th>
                <th>Asset Description</th>
                <th>Asset type</th>
                <th>Registered Date</th>
                <th>Cost</th>
                <th>Condition</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            @php
            $biologicalAssets = [
                [
                    'AssetNo' => '001',
                    'AssetDescription' => 'Asset Description 1',
                    'Asset type' => 'Asset type 1',
                    'RegisteredDate' => '2023-09-07',
                    'Cost' => 1000,
                    'Condition' => 'Good',
                    'Quantity' => 5,
                ],
                [
                    'AssetNo' => '002',
                    'AssetDescription' => 'Asset Description 2',
                    'Asset type' => 'Asset type 2',
                    'RegisteredDate' => '2023-09-08',
                    'Cost' => 1500,
                    'Condition' => 'Excellent',
                    'Quantity' => 10,
                ],
                // Add more data as needed
            ];
            @endphp

            @foreach ($biologicalAssets as $asset)
            <tr>
                <td>{{ $asset['AssetNo'] }}</td>
                <td>{{ $asset['AssetDescription'] }}</td>
                <td>{{ $asset['Asset type'] }}</td>
                <td>{{ $asset['RegisteredDate'] }}</td>
                <td>{{ $asset['Cost'] }}</td>
                <td>{{ $asset['Condition'] }}</td>
                <td>{{ $asset['Quantity'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="col-lg-9">
        <div class="row" style="justify-content:right;">
            <div class="col-lg-3 col-sm-6 col-12 mt-lg-0 mt-2">
                <button class="btn p-2 bg-primary w-100 mb-0 toast-btn" type="button" data-target="warningToast"><b
                        style="font-size: 1.5rem">PRINT</b></button>
            </div>
        </div>
    </div>
</div>

<!-- ... The rest of your code ... -->
@endsection
