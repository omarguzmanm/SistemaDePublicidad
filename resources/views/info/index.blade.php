@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">


                    <div class="card-group">
                        <div class="card">
                          {{-- <img src="..." class="card-img-top" alt="..."> --}}
                          <div class="card-body">
                            <h5 class="card-title">New premiere</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href="{{ route('info.create') }}" class="btn btn-primary">Create</a>
                          </div>
                        </div>
                        <div class="card">
                          {{-- <img src="..." class="card-img-top" alt="..."> --}}
                          <div class="card-body">
                            <h5 class="card-title">My premieres</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href="{{ route('premieres') }}" class="btn btn-primary">Show</a>
                          </div>
                        </div>
                        <div class="card">
                          {{-- <img src="..." class="card-img-top" alt="..."> --}}
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href="{{ route('info.create') }}" class="btn btn-primary">Crear</a>
                          </div>
                        </div>
                      </div>

            </div>
        </div>
    </div>
@endsection
