@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-lg-4">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="{{$project -> thumb}}" class="img-fluid rounded-start" alt="Card title">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">{{$project -> title}}</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection