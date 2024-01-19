@extends('layouts.director')

@section('directorcontent')
            <!-- Breadcome start-->
<livewire:director.asset-info>
            <!-- Static Table End -->

@endsection
           
@section('script')

     <script>
        window.addEventListener('close-modal', event => {
            $('#ViewAssetModal').modal('hide');
        })
    </script>

@endsection
