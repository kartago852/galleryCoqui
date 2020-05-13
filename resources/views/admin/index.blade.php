@extends('layouts.base')

@section('content')

<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-02.jpg);">
    <h2 class="tit6 t-center">
        Admin
    </h2>
</section>

<section class="section-contact bg1-pattern p-t-90 p-b-113">
    <div class="container">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                @include('admin.modal-categorias')
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><button type="button" class="btn btn-primary">Primary</button></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><button type="button" class="btn btn-primary">Primary</button></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
    </div>

</section>

@endsection
