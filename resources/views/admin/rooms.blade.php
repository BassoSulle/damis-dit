@extends('layouts.admin')

@section('admincontent')

    <livewire:admin.rooms-list>

@endsection

@section('script')

    <script>
        window.addEventListener('close-modal', event => {

            $('#AddRoomModalalert').modal('hide');
            $('#editRoomModal').modal('hide');
            $('#activateRoomModal').modal('hide');
        });
    </script>

@endsection
