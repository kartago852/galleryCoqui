<div class="section-gallery p-t-60 p-b-100">
    <div class="wrap-label-gallery filter-tope-group size27 flex-w flex-sb-m m-l-r-auto flex-col-c-sm p-l-15 p-r-15 m-b-60">
        <button class="label-gallery txt26 trans-0-4 is-actived" data-filter="*">
            All Photo
        </button>
        @foreach ($categorias as $categoria)
        <button class="label-gallery txt26 trans-0-4" data-filter=".{{ $categoria->nombre }}">
            {{ $categoria->nombre }}
        </button>
        @endforeach
    </div>
    {{-- <div id="Galeria" class="wrap-gallery isotope-grid flex-w p-l-25 p-r-25">
        @include('galeria.imagenes')
    </div> --}}
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
        <div class="flex-c-m flex-w p-l-15 p-r-15 m-t-24 m-b-50 wrap-gallery">
            {{ $imagenes->render() }}
        </div>
        {{-- <div id="app">
            <galeria-component></galeria-component>
        </div> --}}
    </div>

</div>

