@extends('layouts.app')
@section('content')
<table class="table table-border">
    <tr>
        <th>Product Name</th>
        <th>Product ID</th>
        <th>Quantity</th>
    </tr>
    <tr>
        <td>{{$name}}</td>
        <td>{{$id}}</td>
        <td>{{$quantity}}</td>
    </tr>

</table>
@endsection