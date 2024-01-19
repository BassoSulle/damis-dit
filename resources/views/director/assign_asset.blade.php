@extends('layouts.director')

@section('directorcontent')
            <!-- Breadcome start-->
<livewire:director.asset-assign-list>
            <!-- Static Table End -->
@endsection

@section('script')

    <script>
        window.addEventListener('close-modal', event => {
            $('#AssignAssetModal').modal('hide');

        })
    </script>

@endsection
