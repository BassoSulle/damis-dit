@extends('layouts.store_keeper')

@section('storecontent')

     <livewire:store.asset-information>

     <script>
          window.addEventListener('close-modal', event => {
              $('#ViewAssetModal').modal('hide');
              $('#DeleteAssetModal').modal('hide');
          })
      </script>

@endsection


