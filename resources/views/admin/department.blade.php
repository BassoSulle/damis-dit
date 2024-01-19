@extends('layouts.admin')

@section('admincontent')

    <livewire:admin.department-list>

@endsection

@section('script')

    <script>
        window.addEventListener('close-modal', event => {

            $('#AddDepatmentModalalert').modal('hide');
            $('#editDepartmentModal').modal('hide');
            $('#DeleteDepartmentModal').modal('hide');
        });
    </script>
    
@endsection
