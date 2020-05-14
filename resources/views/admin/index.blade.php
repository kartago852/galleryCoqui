@extends('layouts.base')

@section('content')

<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-02.jpg);">
    <h2 class="tit6 t-center">
        Administrador
    </h2>
</section>

<section class="section-contact bg1-pattern p-t-90 p-b-113">
    <div class="container">
        <ul class="nav justify-content-center mr-auto">
            <li class="nav-item">
                @include('admin.modal-categorias')
            </li>
            <li class="nav-item">
                @include('admin.modal-imagenes')
            </li>
        </ul>
    </div>

</section>

@endsection
