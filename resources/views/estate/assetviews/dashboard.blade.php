@extends('layouts.estate')

@section('estatecontent')
<br>

<div class="income-order-visit-user-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <a href="{{ route('estate/category') }}">
                    <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>TOTAL ASSET</h2>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3><span class="counter">1,310</span></h3>
                                </div>
                            </div>
                            <div class="income-range">
                                <br>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3">
                <a href="{{ route('estate/department') }}">
                    <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>TOTAL DEPARTMENT</h2>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3><span class="counter">1,310</span></h3>
                                </div>
                            </div>
                            <div class="income-range">
                                <br>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3">
                <a href="{{ route('requests') }}">
                    <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>TOTAL REQUEST</h2>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3><span class="counter">1,310</span></h3>
                                </div>
                            </div>
                            <div class="income-range">
                                <br>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </a>
            </div>


            



            <div class="container">
    
    
                <div class="row">
        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header">Asset Type</h5>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-sm">
                            <thead class="bg-light">
                                <tr>
                                    <th>ASSET TYPE</th>
                                    <th>TOTAL NUMBER</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $assetTypes = [
                                    'Biological',
                                    'Books',
                                    'Furniture',
                                    'Infrastructure',
                                    'Intangible',
                                    'Land',
                                    'Building',
                                    'MPM',
                                    'Electronics',
                                ];

                                // Simulate total numbers (you can replace these with actual data)
                                $totalNumbers = [10, 25, 30, 15, 5, 20, 10, 8, 40];
                                @endphp

                                @foreach($assetTypes as $key => $assetType)
                                    <tr>
                                        <td>{{ $assetType }}</td>
                                        <td>{{ isset($totalNumbers[$key]) ? $totalNumbers[$key] : 0 }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header">Department</h5>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-sm">
                            <thead class="bg-light">
                                <tr>
                                    <th>DEPARTMENT CATEGORY</th>
                                    <th>TOTAL NUMBER</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $departmentCategories = [
                                    'ICT',
                                    'INDUSTRIAL',
                                    'HUMAN RESOURCE',
                                    'FINANCE',
                                    'STORE',
                                ];

                                // Simulate total numbers (you can replace these with actual data)
                                $departmentTotalNumbers = [10, 25, 30, 15, 5];
                                @endphp

                                @foreach($departmentCategories as $key => $category)
                                    <tr>
                                        <td>{{ $category }}</td>
                                        <td>{{ isset($departmentTotalNumbers[$key]) ? $departmentTotalNumbers[$key] : 0 }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header">Changing Asset</h5>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-sm">
                            <thead class="bg-light">
                                <tr>
                                    <th>ASSET ID</th>
                                    <th>CONDITION</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $assetData = [
                                    ['id' => 1, 'asset_id' => 'Campaign#1', 'condition' => 2],
                                    ['id' => 2, 'asset_id' => 'Campaign#2', 'condition' => 3],
                                    ['id' => 3, 'asset_id' => 'Campaign#3', 'condition' => 2],
                                    ['id' => 4, 'asset_id' => 'Campaign#4', 'condition' => 3],
                                    ['id' => 5, 'asset_id' => 'Campaign#5', 'condition' => 3],
                                    // Add more data items here as needed
                                ];
                                @endphp

                                @foreach($assetData as $asset)
                                    <tr>
                                        <td>{{ $asset['asset_id'] }}</td>
                                        <td>{{ number_format($asset['condition']) }}</td>
                                        <td>
                                            <button class="btn btn-info">DISPOSE</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<td>
    <button class="btn btn-info">GENERATE ASSET</button>
</td>

@endsection
