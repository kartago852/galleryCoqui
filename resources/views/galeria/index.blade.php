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
{{-- <section id="Galeria">
    @include('galeria.imagenes')
</section> --}}

<section id="Galeria">
    @include('galeria.imagenes')
</section>
@endsection
