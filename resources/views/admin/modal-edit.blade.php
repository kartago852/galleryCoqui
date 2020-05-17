    <button type="button" class="float-left btn btn-primary" data-toggle="modal" data-target="#editImage{{ $imagen->id }}">Editar</button>

{{--  <a href="{{ route('admin.edit', $imagen->id) }}"><button type="button" class="btn btn-primary">Editar</button></a> --}}


 {!! Form::model($imagen, ['route' => ['admin.update', $imagen->id, 'method' => 'PUT', 'files' => true]]) !!}
{{ Form::token() }}
<div class="modal fade" id="editImage{{ $imagen->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Imagen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form>
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nombre de Imagen:</label>
                        <input name="nombre" type="text" class="form-control"  value="{{ $imagen->nombre }}">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Ingrese Imagen:</label>
                        <input name="imagen" type="file" file="true" value="{{ $imagen->imagen }}">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Seleccione Categoria:</label>
                        <select name="categoria" class="form-control" name="categoria">
                            <option selected disabled> Elige una categoria para la imagen...</option>
                            @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->nombre }}">{{ $categoria->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar Imagen</button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
