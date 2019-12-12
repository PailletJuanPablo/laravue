@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5 text-white bg-success">
                <div class="card-body">
                    <h2 class="card-title"> Eventos </h5>
                        <p class="card-text">
                          Podemos utilizar la directiva v-on para escuchar eventos del
                           DOM y ejecutar algo de JavaScript cuando son disparados.
                           Para hacer esto, agregamos v-on:'EVENTO' o @evento, seguido de un método de javascript a ejecutar
                        </p>
                </div>
            </div>
            <vuep template="#dataB"></vuep>
        </div>


        <script v-pre type="text/x-template" id="dataB">
            <!-- Dentro de <template> agregamos el html del componente -->
<template>
    <div id="envolvente">
        <h1> Hola @{{ nombre }} </h1>
        <button class="btn btn-raised btn-primary" @click="nombre = 'Jorge'" > Cambiar nombre </button>
    </div>
</template>
<!-- Dentro de <script> la lógica  -->
<script>
    module.exports = {
  
    data: function () {
        return { 
            nombre: 'Juan'
        }
    }
}
</script>
        </script>
    </div>
</div>
@endsection