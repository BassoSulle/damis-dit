@extends('layouts.admin')

@section('admincontent')
            <livewire:admin.condition-list>
@endsection

@section('script')

    <script>
        window.addEventListener('close-modal', event => {
            $('#AddConditionModalalert').modal('hide');
            $('#editCondition').modal('hide');
            $('#DeleteConditionModal').modal('hide');
        })
    </script>

@endsection
