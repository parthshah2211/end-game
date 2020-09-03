@extends('layouts.admin')
@section('content')
    <div class="add_btn">
        <a href="{{url('admin/giveaway/create')}}" class="btn btn-success">Add GiveAway</a>
    </div>
    <div class="container-fluid">

        <table class="table table-bordered" id="table">
            <thead>
            <tr>
                <th class="text-nowrap">Title</th>
                <th class="text-nowrap">Registration Date</th>
                <th>Announcement Date</th>
                <th>Category</th>
                <th>Description</th>
            </tr>
            </thead>
        </table>
    </div>

@endsection
@section('section-js')
    <script type="text/javascript">
        $(function () {
            $('#table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ url('admin/get-giveaway-data') }}',
                columns: [
                    { data: 'title', name: 'title' },
                    { data: 'registration_date', name: 'registration_date' },
                    { data: 'announcement_date', name: 'announcement_date' },
                    { data: 'category', name: 'category' },
                    { data: 'description', name: 'description' }
                ]
            });
        });
    </script>
@endsection

