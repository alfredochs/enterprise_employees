@extends('layouts.admin')
@section('content')
{{-- @dump($employees) --}}
<span>Lista di impiegati</span>
<div class="row">
    @foreach ($employees as $employee)
    <div class="col">

        <div class="card">
            {{-- <img src="..." class="card-img-top" alt="..."> --}}
            <div class="card-body">
                <h5 class="card-title">{{$employee->first_name}} {{$employee->last_name}}</h5>
                <p class="card-text"><small class="text-muted">{{$employee->enterprise_id}}</small></p>
                <a href="{{route('employees.show',$employee->id)}}" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
{{$employees->links()}}
@endsection
