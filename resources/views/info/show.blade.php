@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="{{route('info.index')}}" class="btn btn-secondary mb-2 ">Back</a>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($premieres as $premiere)
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                    <img src="{{$premiere->cover}}" class="card-img-top w-100 h-auto" >
                                <h4 class="card-title">{{$premiere->title}}</h4>
                                <h6 class="card-text fw-semibold">Description: <span class="fw-normal">{{$premiere->description}}</span></h6>
                                <h6 class="card-text fw-semibold">Url: <span class="fw-normal">{{$premiere->url}}</span></h6>
                                <div class="d-flex justify-content-evenly mt-3">
                                    <a href="{{route('info.edit', $premiere->id)}}" class="btn btn-primary h-100">Edit</a>
                                    {{-- @include('info.delete')
                                     --}}
                                     {!! Form::open(['route' => ['info.destroy', $premiere->id], 'method' => 'DELETE', 'class' => 'delete-form']) !!}
                                     {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                     {!! Form::close() !!}
                                </div>
                            </div>
                            </div>
                        </div>
                        @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection


<script>
    // SweetAlert para eliminar
    document.addEventListener("submit", function (event) {
        // Verificamos que si el evento que se desencadeno tiene la clase 'delete-form'
        if (event.target.classList.contains("delete-form")) {
            event.preventDefault(); // Evita el envío del formulario por defecto
            let form = event.target;
    
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!",
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire("Deleted!", "Your file has been deleted.", "success");
                    form.submit(); // Envía el formulario después de hacer clic en "Yes, delete it!"
                } else {
                    Swal.fire("Deletion cancelled", "", "info");
                }
            });
        }
    });
    </script>