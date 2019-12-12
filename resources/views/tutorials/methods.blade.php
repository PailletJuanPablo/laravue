@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5 text-white bg-success">
                <div class="card-body">
                    <h2 class="card-title"> Métodos del componente </h5>
                        <p class="card-text">
                            Dentro del objeto correspondiente a la lógica del componente, podemos agregar los métodos
                            propios
                            del mismo, en el objeto methods.
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
        <button class="btn btn-raised btn-primary" @click="cambiarNombre()" > Cambiar nombre </button>
    </div>
</template>
<!-- Dentro de <script> la lógica  -->
<script>
    module.exports = {
    data: function () {
        return { 
            nombre: 'Juan'
        }
    },
    methods: {
        cambiarNombre: function() {
            this.nombre == 'Juan' ? this.nombre = 'Jorge' : this.nombre = 'Juan';
        }
    }
}
</script>
        </script>
    </div>
</div>
@endsection