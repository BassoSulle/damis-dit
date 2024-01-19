@extends('layouts.estate')

@section('estatecontent')
<div class="breadcome-area mg-b-30 small-dn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
             
<div><br><h2> Department Category</h2></div>   
            </div>
        </div>
    </div>
</div>


<div class="income-order-visit-user-area">
    <div class="container-fluid">
        <div class="row">
            @php
            $deparmentNames = [
                'ICT DEPARTMENT',
                'HR DEPARTMENT',
                'IR DEPARTMENT',
                'FINANCE DEPARTMENT',
                'ENGINEERING',
                
                
                
            ];
            @endphp
            @foreach ($deparmentNames as $departmentName)
                <div class="col-lg-3">
                        <a href="{{ route('viewdepart', ['departmentName' => $departmentName]) }}">

                        <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                            <div class="income-title">
                                <div class="main-income-head">
                                    <h2>{{ $departmentName }}</h2>
                                </div>
                            </div>
                            <div class="income-dashone-pro">
                                <div class="income-rate-total">
                                    <div class="price-adminpro-rate">
                                        <h3><span class="counter">1,310</span></h3>
                                    </div>
                                </div>
                                <div class="income-range">
                                    <p>TOTAL ASSETS</p>
                                   
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
