<script setup>
const model = defineModel({
    type: null,
    required: true,
});

defineProps({
    name: {
        type: String,
        Required: true,
    },
    type: {
        type: String,
        default: "text",
    },
    message: String,
});
</script>
<template>
    <div class="mb-6 w-full">
        <label class="block text-left">{{ name }}</label>
        <input
            :type="type"
            v-model="model"
            :class="{ '!ring-red-500': message }"
            class="border-solid border-2 rounded w-full"
        />
        <small class="error" v-if="message"> {{ message }}</small>
    </div>
</template>
