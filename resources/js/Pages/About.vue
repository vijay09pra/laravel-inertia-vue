<template>
    <Head :title="' | About'" />
    <div>
        <h1>About Page {{ user }}</h1>
    </div>
</template>

<script setup>
defineProps({
    user: String,
});
</script>
