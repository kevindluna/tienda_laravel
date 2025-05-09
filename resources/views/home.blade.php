@extends('layouts.app')

@section('content')
<div class="full-screen-container">
    <!-- Piñatería -->
    <a href="{{ url('pinateria') }}" class="category-block pinateria-bg">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <div class="category-title">Piñatería</div>
            </div>
            <div class="flip-card-back">
                <img src="img/inicio/inicio_pinateria.png" alt="Piñatería" />
                <div class="category-title">Piñatería</div>
            </div>
        </div>
    </a>

    <!-- Cacharrería -->
    <a href="{{ url('cacharreria') }}" class="category-block cacharreria-bg">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <div class="category-title">Cacharrería</div>
            </div>
            <div class="flip-card-back">
                <img src="img/inicio/inicio_cacharreria.png" alt="Cacharrería" />
                <div class="category-title">Cacharrería</div>
            </div>
        </div>
    </a>

    <!-- Papelería -->
    <a href="papeleria.php" class="category-block papeleria-bg">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <div class="category-title">Papelería</div>
            </div>
            <div class="flip-card-back">
                <img src="img/inicio/inicio_papeleria.png" alt="Papelería" />
                <div class="category-title">Papelería</div>
            </div>
        </div>
    </a>
</div>
@endsection
