@extends('layouts.admin')

@section('admincontent')
            <!-- Breadcome start-->
    <livewire:admin.section-list>
            <!-- Static Table End -->
@endsection

@section('script')
<script>
    window.addEventListener('close-modal', event => {

        $('#AddSectionModalalert').modal('hide');
        $('#editSection').modal('hide');
        $('#activateSectionModal').modal('hide');
    });
</script>
@endsection
