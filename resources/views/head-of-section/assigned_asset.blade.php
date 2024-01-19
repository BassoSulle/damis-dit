@extends('layouts.head-of-section')

@section('head-of-section-content')
    <livewire:head-of-section.asset-assigned />
@endsection

@section('script')

    <script>
        window.addEventListener('close-modal', event => {
            $('#AssignAssetModal').modal('hide');

        })
    </script>

@endsection
