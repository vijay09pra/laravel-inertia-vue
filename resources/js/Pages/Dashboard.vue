<template>
    <div>
        <p class="p-4 bg-green-400">{{ $page.props.flash.message }}</p>
        <h1 class="title">Welcome back {{ $page.props.auth.user.name }}</h1>
    </div>
</template>
<!-- <template>

  </template> -->

  <!-- <script setup>
    import Demo from '../Layouts/Demo.vue';
    defineOptions({ layout: Demo})

    // export default {
    //     name: "Dashboard",
    //     methods: {
    //     toggleSidebar() {
    //         document.body.classList.toggle("sidebar-collapse");
    //     },
    //     },
    // };
  </script> -->
