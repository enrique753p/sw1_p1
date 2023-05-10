@extends('layouts.cliente')

@section('content')
@if (session('success'))
<div class="alert alert-success">
    <strong>{{session('success')}}</strong>
</div>
@endif
<style>
    body{
        
        background: url(https://img.freepik.com/fotos-premium/camaras-sobre-fondo-negro_23-2147852501.jpg);
        background-size: contain;
        
    }
</style>
<div class="container" style="font-weight: bold;">
    <h2 style="text-align: center;margin: 0 auto 80px; position: relative; line-height: 60px;color: #ffffff;">Eventos Disponibles</h2>
    <div class="row" style="display: flex;align-items: center;flex-wrap: wrap;justify-content: space-around;">
        @foreach ($eventos as $evento)
        <div class="col-4" style="font-size: 14px;">
            {{-- <a href="{{route('tickets.addEvento1', $evento->id)}}"><img src="{{$evento->imagenes[0]->path}}" alt="" style="width: 80%;"></a> --}}
            <a href="{{route('eventos.show', $evento->id)}}"><img src="{{$evento->files[0]->url}}" alt="" style="width: 80%;"></a>
            {{-- <h1>$evento</h1> --}}
            <h4 style="color: #ffffff; font-weight: normal">{{$evento->titulo}}</h4>
            <div style="color: #ff523b">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <h4 style="color: #ffffff; font-weight: normal">Descripcion: {{$evento->descripcion}}</h4>
            
            <div class="container">                  
                <img src="{{ asset('img/codeQr.png') }}" class="img-rounded" alt="Cinque Terre" width="304" height="236"> 
            </div>
            {{-- @if ($evento->precio!=0)
                <p style="color: #555"></p>
            @endif --}}
        </div>
        @endforeach
    </div>
    
</div>

@endsection

