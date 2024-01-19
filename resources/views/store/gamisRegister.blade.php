@extends('layouts.store_keeper')
@section('storecontent')




<form class="container">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">GAMIS REGISTER FORM</h2>


             <!-- Asset Cost, Accumulated Depreciation, Acquisition Date, and Acquisition Type -->
             <div class="row form-group">
                <div class="col-md-6 col-lg-3">
                    <label for="cost">Asset Code</label>
                    <input class="form-control" name="cost" id="cost" required>
                </div>
                <div class="col-md-6 col-lg-3">
                    <label for="accdeprc">Asset Description </label>
                    <input class="form-control" name="accdeprc" id="accdeprc" required>
                </div>
                <div class="col-md-6 col-lg-3">
                    <label for="acqdate">GFS Code</label>
                    <input class="form-control" name="regdate" id="regdate" required>

                </div>
                <div class="col-md-6 col-lg-3">
                    <label for="acqtype">GFS Description</label>
                    <input class="form-control" name="acqtype" id="acqtype" required>
                </div>
            </div>


            <!-- Asset Type, Registered Date, Class Code, and Condition -->
            <div class="row form-group">
                <div class="col-md-6 col-lg-3">
                    <label for="asstype">Asset Type</label>
                    <select class="form-control" name="asstype" id="asstype" required>
                        <option value="" selected disabled>Select an Asset Type</option>
                        <option value="type1">BIOLOGICAL</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <div class="col-md-6 col-lg-3">
                    <label for="regdate">Registered Date</label>
                    <input class="form-control" name="acqdate" id="acqdate" type="date" required>
                </div>
                <div class="col-md-6 col-lg-3">
                    <label for="classcode">Class Code</label>
                    <input class="form-control" name="classcode" id="classcode" required>
                </div>
                <div class="col-md-6 col-lg-3">
                    <label for="condition">Condition</label>
                    <input class="form-control" name="condition" id="condition" required>
                </div>
            </div>

            <!-- Asset Cost, Accumulated Depreciation, Acquisition Date, and Acquisition Type -->
            <div class="row form-group">
                <div class="col-md-6 col-lg-3">
                    <label for="cost">Asset Cost</label>
                    <input class="form-control" name="cost" id="cost" required>
                </div>
                <div class="col-md-6 col-lg-3">
                    <label for="accdeprc">Accumulated Depreciation</label>
                    <input class="form-control" name="accdeprc" id="accdeprc" required>
                </div>
                <div class="col-md-6 col-lg-3">
                    <label for="acqdate">Acquisition Date</label>
                    <input class="form-control" name="acqdate" id="acqdate" type="date" required>
                </div>
                <div class="col-md-6 col-lg-3">
                    <label for="acqtype">Acquisition Type</label>
                    <input class="form-control" name="acqtype" id="acqtype" required>
                </div>
            </div>


            <!-- Remarks -->
            <div class="row form-group">
                <div class="col-md-12">
                    <label for="remarks">Remarks</label>
                    <input class="form-control" name="remarks" id="remarks" required>
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            <input class="btn btn-primary" type="submit" value="Submit">
        </div>
    </div>
</form>
@endsection

