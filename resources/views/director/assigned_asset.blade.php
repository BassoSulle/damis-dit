@extends('layouts.director')

@section('directorcontent')

     <livewire:director.assigned-asset-list>

@endsection

@section('script')

      <script>
          window.addEventListener('close-modal', event => {
              $('#ViewAssetModal').modal('hide');
          })
      </script>

@endsection


