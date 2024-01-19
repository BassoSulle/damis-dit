@extends('layouts.admin')

@section('admincontent')

    <livewire:admin.building-list>

@endsection

@section('script')

    <script>
        window.addEventListener('close-modal', event => {

            $('#AddBuildingModalalert').modal('hide');
            $('#editBuildingModal').modal('hide');
            $('#DeleteBuildingModal').modal('hide');
        });
    </script>
    
@endsection
