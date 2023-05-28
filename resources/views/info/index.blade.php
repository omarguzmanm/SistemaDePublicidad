@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                {{-- <img src="..." class="card-img-top" alt="..."> --}}
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Nuevo lanzamiento</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{route('info.create')}}" class="btn btn-primary">Crear</a>                        
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
