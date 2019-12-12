@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5 text-white bg-success">
                <div class="card-body">
                    <h2 class="card-title"> Componentes </h5>
                        <p class="card-text text-white">
                            En Vue trabajamos con componentes. Son partes encapsuladas de la vista que contienen su
                            propia
                            lógica y estado.

                        </p>

                </div>
            </div>
            <vuep template="#example" :options="{ readOnly: true, lineWrapping: true }"></vuep>
        </div>


        <script v-pre type="text/x-template" id="example">
            <!-- Dentro de <template> agregamos el html del componente -->
<template>
    <div id="envolvente">
        <p> El contenido del componente se agrega dentro de la etiqueta "template". Es necesario que siempre exista una
            etiqueta superior que envuelva a todas (en este caso la etiqueta con id "envolvente")
        </p>
        <ul>
            <li>La lógica del componente la agregamos dentro de la etiqueta "script". </li>
            <li>
                "data" es una funcion que retornará un objeto literal con los datos del componente. </li>
            <li>
                El componente se exporta a través de Module.exports </li>
            <li>
              Toda la documentación de Vue puede encontrarse aquí:  https://es.vuejs.org/v2/guide/index.html
            
            </li>

        </ul>
    </div>
</template>
<!-- Dentro de <script> la lógica  -->
<script>
    module.exports = {
  
    data: function () {
    return { nombre: 'Juan' }
    }
}
</script>
        </script>
    </div>
</div>
@endsection