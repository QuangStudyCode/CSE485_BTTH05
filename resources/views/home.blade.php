@extends('layouts.base');

<!-- title -->
@section('title','Home Page')

@section('main')
<div class="row">


    @foreach($articles as $article)
    <div class="col-md-3 mb-2">
        <div class="card" style="width: 18rem;">
            <img src="{{$article->hinhanh}}" class="card-img-top" alt="...">
            <div class="card-body">
                <!-- <h4 class="card-title">{{SELECT * FROM baiviet WHERE ma_bviet = '1'}}</h4> -->
                <h5 class="card-title">{{$article->tieude}}</h5>
                <p class="card-title">{{$article->tomtat}}</p>
                
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    @endforeach

</div>
@endsection