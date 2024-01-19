@extends('layouts.store_keeper')
@section('storecontent')

  <livewire:store.asset-assignment-list>

@endsection

@section('script')

    <script>
        window.addEventListener('close-modal', event => {
            $('#AssignAssetModal').modal('hide');
        });
    </script>
    
@endsection
