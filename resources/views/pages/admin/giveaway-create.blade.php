@extends('layouts.admin')
@section('content')
    <form enctype="multipart/form-data"  action="{{url('admin/create-giveaway')}}" method="POST">
        @csrf
        <div class="form-group col-md-6">
            <label for="email">GiveAway title</label>
            <input type="text" class="form-control" placeholder="Enter Name"  name="title" id="title">
        </div>
        <div class="form-group col-md-6">
            <label for="pwd">Registration Date:</label>
            <input type="date" class="form-control" placeholder="Enter Registration Date" name="registration_date" id="registration_date">
        </div>
        <div class="form-group col-md-6">
            <label for="pwd">Announcement Date:</label>
            <input type="date" class="form-control" placeholder="Enter Announcement Date" name="announcement_date" id="announcement_date">
        </div>
        <div class="form-group col-md-6">
            <label for="pwd"> Category:</label>
            <select class="form-control"  name="category">
                <option selected>Please Select Any</option>
                <option value="free-fire">Free Fite</option>
                <option value="pubg">PUBG</option>
                <option value="cod">COD</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="pwd"> Description:</label>
            <textarea class="form-control" placeholder="Enter GiveAway Description" name="description" id="description"></textarea>
        </div>
        <div class="form-group col-md-6">
            <label for="pwd">GiveAway Image:</label>
            <input type="file" name="image">
        </div>
        <button type="submit" class="btn btn-primary submit_btn">Submit</button>
    </form>
@endsection
