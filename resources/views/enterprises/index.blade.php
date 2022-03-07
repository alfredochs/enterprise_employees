@extends('layouts.admin')
@section('content')
<div class="row row-cols-1 row-cols-md-2 g-4">
    {{-- @dump($enterprises) --}}
    @foreach ($enterprises as $enterprise)
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="{{$enterprise->img_logo}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$enterprise->name}}</h5>
                {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                <a href="{{route('enterprises.show',$enterprise->id)}}" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
{{$enterprises->links()}}
@endsection
