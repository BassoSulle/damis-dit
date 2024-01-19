@extends('layouts.admin')

@section('admincontent')
    <livewire:admin.class-list>
@endsection

@section('script')
<script>
    window.addEventListener('close-modal', event => {

        $('#AddClassModalalert').modal('hide');
        $('#editClass').modal('hide');
        $('#DeleteClassModal').modal('hide');
    });
</script>
@endsection
