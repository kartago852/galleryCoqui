@extends('layouts.base')

@section('content')

<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-02.jpg);">
    <h2 class="tit6 t-center">
        Administrador
    </h2>
</section>

<section class="section-contact bg1-pattern p-t-90 p-b-113">
    <div class="container table-responsive-sm">
        <ul class="nav justify-content-center mr-auto">
            <li class="nav-item">
                @include('admin.modal-categorias')
            </li>
            <li class="nav-item">
                @include('admin.modal-imagenes')
            </li>
        </ul>
    </div>
    <div class="container">
        <table class="table table-bordered table-dark">
            <thead>
                <tr class="table-primary">
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($imagenes as $imagen)
                    <tr>
                        <th scope="row">{{$imagen->id}}</th>
                        <td>{{$imagen->nombre}}</td>
                        <td>{{$imagen->categoria_nombre}}</td>
                        <td>
                            <div class="float-left">
                                <a href="images/{{$imagen->imagen}}" data-lightbox="gallery">
                                    <button type="button" class="btn btn-success float-right">Ver Imagen</button>
                                </a>
                            </div>
                        </td>
                        <td>
                            <li>
                                {{-- <a href="{{ route('admin.edit', $imagen->id) }}"><button type="button" class="btn btn-primary">Editar</button></a> --}}
                                @include('admin.modal-edit')
                            </li>

                            <form action="{{ route('admin.destroy', $imagen->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="mx-auto">
                {{ $imagenes->links()}}
            </div>
        </div>
    </div>

</section>

@endsection
