@extends('layouts.admin')
@section('content')
  <div class="add_btn">
      <a href="{{url('admin/tournament/create')}}" class="btn btn-success">Add Tournament</a>
  </div>
    <div class="container-fluid">

        <table class="table table-bordered" id="table">
            <thead>
            <tr>
                <th class="text-nowrap">Tournament Name</th>
                <th class="text-nowrap">Tournament Date</th>
                <th>Category</th>
                <th>Type</th>
                <th class="text-nowrap">Price Type</th>
                <th class="text-nowrap">Price Pool</th>
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
            ajax: '{{ url('admin/get-tournament-data') }}',
            columns: [
                { data: 'name', name: 'name' },
                { data: 'date', name: 'date' },
                { data: 'category', name: 'category' },
                { data: 'type', name: 'type' },
                { data: 'price_type', name: 'price_type' },
                {data:'price_pool',name:'price_pool'},
                { data: 'description', name: 'description' }
            ]
        });
    });
</script>
    @endsection

