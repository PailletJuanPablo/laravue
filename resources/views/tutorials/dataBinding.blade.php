@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5 text-white bg-success">
                <div class="card-body">
                    <h2 class="card-title"> Renderización Declarativa </h5>
                        <p class="card-text">
                          En el núcleo de Vue.js se encuentra un sistema que nos 
                          permite procesar datos de forma declarativa al DOM mediante una
                            sintaxis de plantilla sencilla
                        </p>
                </div>
            </div>
            <vuep template="#dataB" ></vuep>
        </div>


        <script v-pre type="text/x-template" id="dataB">
            <!-- Dentro de <template> agregamos el html del componente -->
<template>
    <div id="envolvente">
        <h1> Hola @{{ nombre }} </h1>
        <p> Al modificar la variable "nombre" dentro de data, el DOM se actualizará automáticamente </p>
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