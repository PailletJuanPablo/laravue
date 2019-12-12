@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5 text-white bg-success">
                <div class="card-body">
                    <h2 class="card-title"> Renderización Condicional </h5>
                        <p class="card-text">
                          Podemos especificar el comportamiento de la vista de forma reactiva, basada en 
                          condicionales
                        </p>
                </div>
            </div>
            <vuep template="#condicional"></vuep>
        </div>


        <script v-pre type="text/x-template" id="condicional">
<!-- Dentro de <template> agregamos el html del componente -->
<template>
    <div id="envolvente">

        <h4> Agregamos el atributo "v-if='condicion'" para renderizar elementos en el DOM de forma condicional </h4>
        <p v-if="primerCondicion">
            Este párrafo se verá solamente si mostrarPárrafo es true
        </p>

        <p v-if="segundaCondicion">
            Este párrafo se verá solamente si segundaCondicion es true
        </p>

        <p v-if="primerCondicion || segundaCondicion">
            Este párrafo se renderizará si primerCondicion u otraCondicion es true
        </p>

        <p v-if="primerCondicion && segundaCondicion">
            Este párrafo se renderizará solo si primerCondicion y otraCondicion son true
        </p>


    </div>
</template>
<!-- Dentro de <script> la lógica  -->
<script>
    module.exports = {
  
    data: function () {
        return { 
            primerCondicion: true,
            segundaCondicion: false,
        }
    }
}
</script>
        </script>
    </div>
</div>
@endsection