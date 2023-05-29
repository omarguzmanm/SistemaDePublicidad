{!! Form::model($premiere, [
    'route' => [$premiere->url_redirect(), $premiere->id],
    'method' => $premiere->method(),
    'class' => 'form-control',
    'id' => 'guardarCurso',
    'enctype' => 'multipart/form-data'
]) !!}

{!! Form::label('title', 'Title:', ['class' => 'form-label']) !!}
{!! Form::text('title', null, ['class' => 'form-control mb-2']) !!}

{!! Form::label('description', 'Description:', ['class' => 'form-label']) !!}
{!! Form::textarea('description', null, ['class' => 'form-control mb-2 h-100', 'rows' => 2]) !!}


{!! Form::label('url', 'URL:', ['class' => 'form-label']) !!}
{!! Form::text('url', null, ['class' => 'form-control mb-2']) !!}

{!! Form::label('cover', 'Cover:', ['class' => 'form-label']) !!}
@if ($premiere->id)
    <img src="{{$premiere->cover}}" class="form-control w-50 mt-2 mb-2">
@endif
    {!! Form::file('cover', ['class' => 'form-control mb-2', 'accept' => 'image/*']) !!}

{{-- @error('cover')
    <small class="text-danger">{{$message}}</small>
    <br>
@enderror --}}


{!! Form::submit('Save', ['class' => 'btn btn-primary mt-2']) !!}

{!! Form::close() !!}

<script>
    document
        .getElementById("guardarCurso")
        .addEventListener("submit", function(event) {
            console.log(this);
            event.preventDefault(); // Evita el envío del formulario por defecto
            // Mostrar SweetAlert después de guardar el formulario
            Swal.fire({
                title: "Do you want to save the changes?",
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: "Save",
                denyButtonText: `Don't save`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    Swal.fire("Saved!", "", "success");
                    this.submit();
                } else if (result.isDenied) {
                    Swal.fire("Changes are not saved", "", "info");
                }
            });
        });
</script>
