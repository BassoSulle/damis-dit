@extends('layouts.admin')

@section('admincontent')

    <livewire:admin.floor-list>

@endsection

@section('script')

    <script>
        window.addEventListener('close-modal', event => {

            $('#AddFloorModalalert').modal('hide');
            $('#editFloorModal').modal('hide');
            $('#ActivateFloorModal').modal('hide');
        });
    </script>
    
@endsection
