@extends('layouts.estate')

@section('estatecontent')
<div class="breadcome-area mg-b-30 small-dn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
               
<div><br><h2> Asset Category</h2></div>
            </div>
        </div>
    </div>
</div>

<div class="breadcome-area des-none mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="breadcome-heading">
                                <form role="search" class="">
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <ul class="breadcome-menu">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="income-order-visit-user-area">
    <div class="container-fluid">
        <div class="row">
            @php
            $assetNames = [
                'Biological',
                'Books',
                'Furniture',
                'infrastrure',
                'Intangible',
                'Land',
                'building',
                'MPM',
                'Electronics',
            ];
            @endphp
            @foreach ($assetNames as $assetName)
                <div class="col-lg-3">
                        <a href="{{ route('now', ['assetName' => $assetName]) }}">

                        <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                            <div class="income-title">
                                <div class="main-income-head">
                                    <h2>{{ $assetName }}</h2>
                                </div>
                            </div>
                            <div class="income-dashone-pro">
                                <div class="income-rate-total">
                                    <div class="price-adminpro-rate">
                                        <h3><span class="counter">1,310</span></h3>
                                    </div>                                </div>
                                <div class="income-range">
                                    <p>Total {{ $assetName }}</p>
                                   
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </a>
                    
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- ... The rest of your code ... -->
@endsection








