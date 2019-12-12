module.exports = {
    template: `
<template>
  <div>
    <features :features="features"></features>
  </div>
</template>

<script>
  export default {
    components: {
      Features // This variable is available through scope and can be used to register component
    },
    data () {
      return {
        features: [
          'Single File Component',
          'Babel for ES6/JSX/UMD/CommonJS',
          'Scoped style',
          'Customizable JavaScript scope'
        ]
      }
    }
  }<\/script>`
          
}