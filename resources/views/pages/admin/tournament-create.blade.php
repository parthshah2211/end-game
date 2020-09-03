@extends('layouts.admin')
@section('content')
<form enctype="multipart/form-data"  action="{{url('admin/create-tournament')}}" method="POST">
            @csrf
            <div class="form-group col-md-6">
                <label for="email">Tournament Name</label>
                <input type="text" class="form-control" placeholder="Enter Name"  name="name" id="name">
            </div>
    <div class="form-group col-md-6">
        <label for="pwd">Tournament Date:</label>
        <input type="date" class="form-control" placeholder="Enter Tournament Date" name="date" id="tournament_date">
    </div>
    <div class="form-group col-md-6">
        <label for="pwd">Tournament Category:</label>
        <select class="form-control"  name="category">
            <option selected>Please Select Any</option>
            <option value="free fite">Free Fite</option>
            <option value="pubg">PUBG</option>
            <option value="cod">COD</option>
        </select>
    </div>
    <div class="form-group col-md-6">
        <label for="pwd">Tournament Type:</label>
        <select class="form-control"  name="type">
            <option selected>Please Select Any</option>
            <option value="solo">Solo</option>
            <option value="dual">Dual</option>
            <option value="squarede">Squarede</option>
        </select>
    </div>
    <div class="form-group col-md-6">
        <label for="pwd">Tournament Price Type:</label>
        <select class="form-control"  name="price_type">
            <option selected>Please Select Any</option>
            <option value="free">Free</option>
            <option value="paid">Paid</option>
        </select>
    </div>
    <div class="form-group col-md-6">
        <label for="pwd">Tournament price poll:</label>
        <input type="text" class="form-control" placeholder="Enter Tournament Price pool" name="price_pool" id="price_pool">
    </div>
    <div class="form-group col-md-6">
        <label for="pwd">Tournament Description:</label>
       <textarea class="form-control" placeholder="Enter Tournament Description" name="description" id="description"></textarea>
    </div>
    <div class="form-group col-md-6">
        <label for="pwd">Tournament Image:</label>
      <input type="file" name="image">
    </div>
    <button type="submit" class="btn btn-primary submit_btn">Submit</button>
</form>
@endsection
