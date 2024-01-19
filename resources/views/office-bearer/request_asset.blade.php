@extends('layouts.office-bearer')

@section('office-bearer-content')

    <livewire:office-bearer.request-asset />

@endsection

@section('script')

    <script>
        window.addEventListener('close-modal', event => {
            $('#makeRequestModal').modal('hide');
        });
    </script>
    
@endsection