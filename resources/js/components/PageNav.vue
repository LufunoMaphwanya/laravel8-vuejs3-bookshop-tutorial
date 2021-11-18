<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a v-html="link.label" v-for="link in links" :key="link" class="nav-link" :href="link.url"></a>
      </li>

    </ul>

  </div>
</nav>
</template>

<script>
  import { reactive, computed } from 'vue';

  export default {
    name: 'PageNav',
    components: {  },
    props: {
      links: { type: Array, required: true, default: () => [] },
    },

    setup(props, { emit }) {
      props = reactive(props);
      return {
      };
    },
  };
</script>
