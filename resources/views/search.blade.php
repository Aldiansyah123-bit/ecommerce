@extends('master')
@section('content')
<div class="custom-product">
   <div class="col-sm-4">
       <a href="">Filter</a>
   </div>
   <div class="col-sm-4">
    <div class="trending-wrapper">
        <h2>Result for Products</h2>
        @foreach ($products as $item)
        <center>
            <div class="searched-item">
                <a href="detail/{{$item['id']}}">
                    <img class="trending-image" src="{{$item['galery']}}">
                        <div class="">
                            <h2>{{$item['name']}}</h2>
                            <h5>{{$item['description']}}</h5>
                        </div>
                </a>
            </div>
        </center>
        @endforeach
    </div>   
   </div>
</div>
@endsection