@extends('layouts.app')

@section('title', 'Bienvenido a Pet Shop')

@section('content')
<section class="hero-large">
    <div class="hero-content">
        <h2>Tus mascotas son tus verdaderos amigos, cuídalos!</h2>
        <p>Bienvenido a Pet Shop. Ofrecemos excelentes productos y servicios para su bienestar.</p>
        <a href="{{ route('productos.index') }}" class="btn btn-primary">Ver Productos</a>
    </div>
</section>

<section class="featured-products">
    <h2>Preferidos por nuestros usuarios</h2>
    <div class="product-grid">
        <!-- Aquí podrías cargar productos destacados desde la base de datos -->
        <div class="product">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxtZ1hKGnSQDvHJ91zAr_IFYnTfdD0ALeIxg&s" alt="Productos1">
            <h3>Top de alimentos</h3>
            <p>Alimentos preferidos</p>
        </div>
        <div class="product">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwm0cwFPaqVoC9Rv3-_aPrUXc5bbiIEskwEg&s" alt="Imagen no disponible">
            <h3>Preferidos por tu mascota</h3>
            <p>Preferidos por tu perro</p>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAOMTeiBM5k3RGD7QcgmdoR2hhE_TeYDNcXw&s" alt="">
        </div>
        <!-- Agregar más productos según sea necesario -->
    </div>
</section>

@endsection

