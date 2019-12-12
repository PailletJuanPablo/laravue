@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5 text-white bg-success">
                <div class="card-body">
                    <h2 class="card-title"> Bucles </h5>
                        <p class="card-text">
                            A través del atributo v-for podemos iterar sobre una colección para renderizar elementos
                        </p>
                </div>
            </div>
            <vuep template="#dataB"></vuep>
        </div>


        <script v-pre type="text/x-template" id="dataB">
            <!-- Dentro de <template> agregamos el html del componente -->
<template>
    <div id="envolvente">
      
        <h3 class="text-center"> Lenguajes </h3>

        <div v-for="lenguaje in lenguajes">
            <p> @{{lenguaje.nombre}}</p>
        </div>
        
    </div>
</template>
<!-- Dentro de <script> la lógica  -->
<script>
    module.exports = {
  
    data: function () {
        return { 
           lenguajes: [
               {nombre: 'Javascript'},
               {nombre: 'PHP'},
               {nombre: 'MySQL'}
           ]
        }
    }
}
</script>
        </script>
    </div>
</div>
@endsection