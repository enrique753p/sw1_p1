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
    <h2 style="text-align: center;margin: 0 auto 80px; position: relative; line-height: 60px;color: #ffffff;">Informacion General</h2>

    

    <div class="centro">

        <div class="warning be-careful">
            <i class="fa fa-warning"></i>
            <p><b>NO PERMITIDO</b></p>
            <button class="be-careful">Cerrar</button>
        </div>
        <div class="warning be-careful">
            <i class="fa fa-warning"></i>
            <p><b>NO PERMITIDO</b></p>
            <button class="be-careful">Cerrar</button>
        </div>
        <div class="warning be-careful">
            <i class="fa fa-warning"></i>
            <p><b>NO PERMITIDO</b></p>
            <button class="be-careful">Cerrar</button>
        </div>        <div class="warning be-careful">
            <i class="fa fa-warning"></i>
            <p><b>NO PERMITIDO</b></p>
            <button class="be-careful">Cerrar</button>
        </div>

    </div>

</div>

@endsection 


