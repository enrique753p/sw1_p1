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

        <div class="warning advice">
            <i class="fa fa-user-circle"></i>
            <p><b>Apto para Todo Publico en General</b></p>
            <button class="advice">Cerrar</button>
        </div>

        <div class="warning success">
            <i class="fa fa-thumbs-up"></i>
            <p><b>Ambientes Agradables</b></p>
            <button class="success">Warning</button>
        </div>

        <div class="warning be-careful">
            <i class="fa fa-warning"></i>
            <p><b>Cuide sus Pertencias</b></p>
            <button class="be-careful">Cerrar</button>
        </div>

        <div class="warning danger">
            <i class="fa fa-ambulance"></i>
            <p><b>Atenciones de Emergencias</b></p>
            <button class="danger">Cerrar</button>
        </div>

    </div>

</div>

@endsection 


