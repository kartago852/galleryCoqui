@extends('layouts.base')

@section('content')
<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
    style="background-image: url(images/bg-title-page-02.jpg);">
    <h2 class="tit6 t-center">
        Prueba
    </h2>
</section>

<ul class="filters">
    <li><a href="javascript:void(0);" data-filter="*">Todos</a></li>
    <li><a href="javascript:void(0);" data-filter="city">Cidade</a></li>
    <li><a href="javascript:void(0);" data-filter="cats">Gatos</a></li>
</ul>
<div id="container" class="isotope">
    <div class="grid-item" data-filter="city"><img src="http://lorempixel.com/250/250/city/1"></div>
    <div class="grid-item" data-filter="city"><img src="http://lorempixel.com/250/250/city/2"></div>
    <div class="grid-item" data-filter="city"><img src="http://lorempixel.com/250/250/city/3"></div>
    <div class="grid-item" data-filter="city"><img src="http://lorempixel.com/450/250/city/4"></div>
    <div class="grid-item" data-filter="city"><img src="http://lorempixel.com/250/250/city/5"></div>
    <div class="grid-item" data-filter="city"><img src="http://lorempixel.com/250/250/city/6"></div>
    <div class="grid-item" data-filter="city"><img src="http://lorempixel.com/250/250/city/7"></div>
    <div class="grid-item" data-filter="city"><img src="http://lorempixel.com/250/250/city/8"></div>
    <div class="grid-item" data-filter="cats"><img src="http://lorempixel.com/250/250/cats/1"></div>
    <div class="grid-item" data-filter="cats"><img src="http://lorempixel.com/250/250/cats/2"></div>
    <div class="grid-item" data-filter="cats"><img src="http://lorempixel.com/250/250/cats/3"></div>
    <div class="grid-item" data-filter="cats"><img src="http://lorempixel.com/250/250/cats/4"></div>
    <div class="grid-item" data-filter="cats"><img src="http://lorempixel.com/250/250/cats/5"></div>
    <div class="grid-item" data-filter="cats"><img src="http://lorempixel.com/250/250/cats/6"></div>
    <div class="grid-item" data-filter="cats"><img src="http://lorempixel.com/250/250/cats/7"></div>
</div>


<section>


</section>
@endsection
