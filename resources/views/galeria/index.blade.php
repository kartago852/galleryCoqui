@extends('layouts.base')

@section('content')


<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
    style="background-image: url(images/bg-title-page-02.jpg);">
    <h2 class="tit6 t-center">
        Gallery
    </h2>
</section>



<!-- Gallery -->
{{-- <div class="container">
    <br />
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <form class="card card-sm">
                <div class="card-body row no-gutters align-items-center">
                    <div class="col-auto">
                        <img src="https://img.icons8.com/material/24/000000/search--v1.png" />
                    </div>
                    <!--end of col-->
                    <div class="col">
                        <input class="form-control form-control-lg form-control-borderless" type="search" name="search"
                            placeholder="Ingrese el nombre del disfraz">
                    </div>
                    <!--end of col-->
                    <div class="col-auto">
                        <button class="btn btn-lg btn-success" type="submit">Buscar</button>
                    </div>
                    <!--end of col-->
                </div>
            </form>
        </div>
        <!--end of col-->
    </div>
</div> --}}

<!-- Gallery Photos -->
<div class="section-gallery p-t-60 p-b-100">
    <div
        class="wrap-label-gallery filter-tope-group size27 flex-w flex-sb-m m-l-r-auto flex-col-c-sm p-l-15 p-r-15 m-b-60">
        <button class="label-gallery txt26 trans-0-4 is-actived" data-filter="*">
            All Photo
        </button>
        @foreach ($categorias as $categoria)
        <button class="label-gallery txt26 trans-0-4" data-filter=".{{ $categoria->nombre }}">
            {{ $categoria->nombre }}
        </button>
        @endforeach
    </div>

    <div class="wrap-gallery isotope-grid flex-w p-l-25 p-r-25">
        <!-- - -->
        @foreach ($imagenes as $imagen)
        <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom {{$imagen->categoria_nombre}}">
            <img src="images/{{$imagen->imagen}}" alt="{{$imagen->imagen}}">

            <div class="overlay-item-gallery trans-0-4 flex-c-m">
                <a class="btn-show-gallery flex-c-m fa fa-search" href="images/{{$imagen->imagen}}"
                    data-lightbox="gallery"></a>
            </div>
        </div>
        @endforeach
    </div>

    <div class="pagination flex-c-m flex-w p-l-15 p-r-15 m-t-24 m-b-50">
        {{-- <a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
        <a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
        <a href="#" class="item-pagination flex-c-m trans-0-4">3</a> --}}
        {{ $imagenes->links()}}
    </div>
</div>

@endsection
