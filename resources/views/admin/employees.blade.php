@extends('layouts.admin')

@section('admincontent')
    <livewire:admin.employees-list>
@endsection

@section('script')
    <script>
        window.addEventListener('close-modal', event => {

            $('#AddEmployeeModalalert').modal('hide');
            $('#EditEmployeeModal').modal('hide');
            $('#activateEmployeeModal').modal('hide');
        });
    </script>
@endsection
