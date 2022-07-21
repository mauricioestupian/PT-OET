@extends('Page.cuerpo')
@extends('Page.header')
@section('titulo', 'Autos')
@section('contenido')
    <section class="row justify-content-start">
        <div>
            @livewire('autos-comp-lw')
        </div>

    @endsection
