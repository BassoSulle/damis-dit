@extends('layouts.office-bearer')

@section('office-bearer-content')

    <livewire:office-bearer.assigned-assets-list />

@endsection

@section('script')

    <script>
        window.addEventListener('close-modal', event => {
            $('#ViewAssetModal').modal('hide');
        });
    </script>
    
@endsection