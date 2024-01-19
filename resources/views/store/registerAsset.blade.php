@extends('layouts.store_keeper')


@section('storecontent')
            <livewire:store.asset-register wire:poll="editAsset">
@endsection

@section('script')

    {{-- <script>
        window.addEventListener('close-modal', event => {
            $('#AddAssetTypeModalalert').modal('hide');
            $('#editAssetType').modal('hide');
            $('#DeleteAssetTypeModal').modal('hide');
        })
    </script> --}}

@endsection
