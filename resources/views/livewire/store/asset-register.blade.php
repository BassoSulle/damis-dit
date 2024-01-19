<div>
    <div class="breadcome-area mg-b-30 small-dn">
        <div class="container-fluid">
               <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list shadow-reset">
                        <div class="row">
                            <div class="col-lg-6">
                                <h3>Register New Asset</h3>
                            </div>
                            <div class="col-lg-6">
                                <ul class="breadcome-menu">
                                    <li><a href="{{route('store.dashboard')}}">Dashboard</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Register Asset</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-graph">
                        <div class="basic-login-form-ad" style="margin: 20px 30px;">
                            <div class="row" style="text-align: left;">
                                <div class="col-lg-12">
                                    <form wire:submit.prevent="AddAsset">

                                        @csrf
                                        <div class="form-group-inner">
                                            <div class="row" style="margin-bottom: 35px;">
                                                <div class="col-md-4">
                                                    <div class="row" style="align-content: left; margin-right: 20px;">
                                                        <div class="col-12">
                                                            <label for="assetno">Asset Number</label>
                                                        </div>
                                                        <div class="col-12" style="margin-top: 8px;">
                                                            <input wire:model="asset_no" class="form-control" type="text" name="asset_no"
                                                                id="asset_no" placeholder="Enter Asset No" >
                                                            @error('asset_no')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="row" style="align-content: left; margin-right: 20px;">
                                                        <div class="col-12">
                                                            <label for="classcode">Serial Number</label>
                                                        </div>
                                                        <div class="col-12" style="margin-top: 8px;">
                                                            <input wire:model="serial_no" class="form-control" name="serial_no"
                                                                id="serial_no" placeholder="Enter Serial No">
                                                            @error('serial_no')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="row" style="align-content: left; margin-right: 20px;">
                                                        <div class="col-12">
                                                            <label for="classcode">Category</label>
                                                        </div>
                                                        <div class="col-12" style="margin-top: 8px;">
                                                            <select wire:model="assettype_id"class="form-control" name="assettype_id" id="assettype_id">
                                                                <option value="" selected style="font-weight: bold;">Select Category</option>
                                                                @foreach ($asset_types as $asset_type)
                                                                    <option value="{{ $asset_type->id }}">{{ $asset_type->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('assettype_id')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group-inner">
                                            <div class="row" style="margin-bottom: 35px;">
                                                <div class="col-md-4">
                                                    <div class="row" style="align-content: left; margin-right: 20px;">
                                                        <div class="col-12">
                                                            <label for="condition">Condition</label>
                                                        </div>
                                                        <div class="col-12" style="margin-top: 8px;">
                                                            <select wire:model="condition_id"class="form-control" id="condtion_id">
                                                                <option value="" selected style="font-weight: bold;">Select Asset Condition</option>
                                                                @foreach ($conditions as $condition)
                                                                    <option value="{{ $condition->id }}">{{ $condition->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('condition_id')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="row" style="align-content: left; margin-right: 20px;">
                                                        <div class="col-12">
                                                            <label for="acqdate">Acquisition Date</label>
                                                        </div>
                                                        <div class="col-12" style="margin-top: 8px;">
                                                            <input wire:model="acquisition_date" class="form-control"
                                                                name="acquisition_date" id="acquisition_date" type="date" >
                                                            @error('acquisition_date')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="row" style="align-content: left; margin-right: 20px;">
                                                        <div class="col-12">
                                                            <label for="acqtype">Acquisition Type</label>
                                                        </div>
                                                        <div class="col-12" style="margin-top: 8px;">
                                                            <select wire:model="acquisition_type" class="form-control" name="assettype_id" id="assettype_id">
                                                                <option value="" selected style="font-weight: bold;">Select Asset Acquisition Type</option>
                                                                <option value="Monetary">Monetary</option>
                                                                <option value="Non-Monetary">Non-Monetary</option>
                                                            </select>
                                                            @error('acquisition_type')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group-inner">
                                            <div class="row" style="margin-bottom: 40px;">
                                                <div class="col-md-7">
                                                    <div class="row" style="align-content: left; margin-right: 20px;">
                                                        <div class="col-12">
                                                            <label>Asset Description</label>
                                                        </div>
                                                        <div class="col-12" style="margin-top: 8px;">
                                                            <input wire:model="description" class="form-control" id="asset_description" placeholder="Enter Asset Description" >
                                                            @error('description')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="row" style="align-content: left; margin-right: 20px;">
                                                        <div class="col-12">
                                                            <label for="cost">Cost</label>
                                                        </div>
                                                        <div class="col-12" style="margin-top: 8px;">
                                                            <input wire:model="cost" type="currency" class="form-control" name="cost" id="cost"
                                                                placeholder="Enter cost">
                                                            @error('cost')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                                {{-- <div class="row form-group"> --}}

                                                    {{-- <div class="col-lg-1"><label for="accdeprc">Accumulated depreciation</label></div>
                                                    <div class="col-lg-4"><input wire:model="accumulated_depreciation" class="form-control"
                                                            name="accumulated_depreciation" id="accumulated_depriciation" required>
                                                        @error('accumulated_depreciation')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div> --}}
                                                {{-- </div> --}}
                                                
                                                {{-- <div class="row form-group">
                                                    <div class="col-lg-1"><label for="gfscode">GFS Code</label></div>
                                                    <div class="col-lg-4"><input wire:model="gfs_code" class="form-control" name="gfs_code"
                                                            id="gfs_code" required>
                                                        @error('gfs_code')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-lg-1"><label for="gfsdesc">GFS Description</label></div>
                                                    <div class="col-lg-4"><input wire:model="gfs_description" class="form-control"
                                                            name="gfs_description" id="gfs_description" required>
                                                        @error('gfs_description')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col-lg-1"><label for="remarks">Remarks</label></div>
                                                    <div class="col-lg-4"><input wire:model="remarks" class="form-control" name="remarks"
                                                            id="remarks" required>
                                                        @error('remarks')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div> --}}

                                                <!-- /.card-body -->

                                        <div class="form-group-inner">
                                            <div class="row" style="margin: 0px 20px 0px 10px; ">
                                                <div align="right">
                                                    <button class="btn btn-primary" type="submit" style="width: 200px;">Save</button>
                                                </div>
                                            </div>
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

<script>
    var currencyInput = document.querySelector('input[type="currency"]')
var currency = 'TZS' // https://www.currency-iso.org/dam/downloads/lists/list_one.xml

 // format inital value
onBlur({target:currencyInput})

// bind event listeners
currencyInput.addEventListener('focus', onFocus)
currencyInput.addEventListener('blur', onBlur)


function localStringToNumber( s ){
  return Number(String(s).replace(/[^0-9.,-]+/g,""))
}

function onFocus(e){
  var value = e.target.value;
  e.target.value = value ? localStringToNumber(value) : ''
}

function onBlur(e){
  var value = e.target.value

  var options = {
      maximumFractionDigits : 2,
      currency              : currency,
      style                 : "currency",
      currencyDisplay       : "symbol"
  }
  
  e.target.value = (value || value === 0) 
    ? localStringToNumber(value).toLocaleString(undefined, options)
    : ''
}

</script>
