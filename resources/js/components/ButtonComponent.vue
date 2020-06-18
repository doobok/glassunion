<template>

  <a href="#modal-full" uk-toggle
  class="uk-button uk-button-danger uk-button-large"
  :class="clases"
  @click="getForm()"
  >{{title}}</a>

</template>

<script>
export default{
  props:['title', 'clases'],
  methods: {
    getForm() {
      this.$store.dispatch('PUSH_SLUG', this.title);
    }
  }
}
</script>
