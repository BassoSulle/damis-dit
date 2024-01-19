@extends('layouts.admin')

@section('admincontent')
            <livewire:admin.asset-type-list>
@endsection

@section('script')

    <script>
        window.addEventListener('close-modal', event => {
            $('#AddAssetTypeModalalert').modal('hide');
            $('#editAssetType').modal('hide');
            $('#DeleteAssetTypeModal').modal('hide');
        })
    </script>

@endsection
