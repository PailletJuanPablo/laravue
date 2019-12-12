<!-- Dentro de template agregamos la vista  -->
<template>

    <div>
        Hola @{{ nombre }}
    </div>
</template>

<!-- Dentro de script agregamos la lógica  -->
<script>
export default {
  data: () => ({
    value: `module.exports = {
  template: '<div>I\\'am {{ name }}</div>',

  data: function () {
    return { name: 'cinwell' }
  }
}`
  })
};
</script>

<!-- Dentro de style agregamos los estilos  -->
<style scoped>
.vuep {
  width: 100%;
}
</style>