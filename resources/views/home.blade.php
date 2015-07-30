@extends('master')
@section('title', 'Home')

@section('content')

@include('orbitSlider')

<!-- Content Start -->
<h1>Bienvenido a la Pequeña Librería</h1>
<h2>Donde la experiencia de comprar es agradable.</h2>
<hr/>
<!-- Colocar Información random -->
<div class="row">
<div class="large-4 medium-4 columns round-border">
  <p>
  	"Un libro no es solo un producto, es una experiencia que permite al lector viajar a nuevos mundos alimentados por la imaginación, donde puede ser y hacer a placer."
  </p>	
</div>
<div class="large-4 medium-4 columns round-border">
<a href={{url('book/buy/list')}}>
  <img src={{url('img/libro_regalo.png')}}/>
</a>
 	<br>
  <p>
  "Regala un libro, regala vida."
  </p>
</div>
<div class="large-4 medium-4 columns round-border">
	<h4>Mapa del Sitio</h4>
    <ul>
      <li><a href="{{url('/')}}">Inicio</a></li>
      <li><a href="{{url('book/buy/list')}}">Libros en Existencia</a></li>
      <li><a href="{{url('book/new')}}">Nuevos Libros</a></li>
      <li><a href="{{url('book/add')}}">Añadir libros</a></li>
      <li><a href="{{url('cart')}}">Carrito de Compras</a></li>
      <li><a href="{{url('about')}}">Acerca de Nosotros</a></li>
      <li><a href="{{url('contact')}}">Contáctenos</a></li>
    </ul>

  </div>
</div>
</div>
<!-- Content End -->
@endsection