@extends('layouts.app')
@section('content')
<center><h1>Product</h1></center>
<form action="{{route('productcre')}}" class="form-group" method="post">
    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}

    <div class="col-md-4 form-group">
        <span>Product Name</span>
        <input type="text" name="name" value="{{old('name')}}" class="form-control">
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Product Id</span>
        <input type="text" name="id" value="{{old('id')}}"class="form-control">
        @error('id')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-4 form-group">
        <span>Quantity</span>
        <input type="text" name="quantity" value="{{old('phone')}}" class="form-control">
        @error('quantity')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <input type="submit" class="btn btn-success" value="Add" >                  
</form>
@endsection 