<script setup>
import { useForm } from "@inertiajs/vue3";
import Textinput from "../Components/Textinput.vue";

const form = useForm({
    email: null,
    password: null,
    remember: null,
});
const submit = () => {
    form.post(route("login"), {
        onError: () => form.reset("password", "remember"),
    });
};
</script>

<template>
    <Head title="Login" />
    <div class="text-center m-auto w-2/5 bg-slate-200 p-3">
        <h1 class="text-center">Login to your account</h1>
        <div>
            <form @submit.prevent="submit">
                <Textinput
                    name="email"
                    type="email"
                    v-model="form.email"
                    :message="form.errors.email"
                />
                <Textinput
                    name="password"
                    type="password"
                    v-model="form.password"
                    :message="form.errors.password"
                />
                <div class="flex items-center justify-between mb-2">
                    <div class="flex items-center gap-2">
                        <label for="remember">Remember Me</label>
                        <input
                            type="checkbox"
                            v-model="form.remember"
                            id="remember"
                        />
                    </div>
                    <p class="text-slate-600">
                        Need an account?<a
                            class="text-link text-fuchsia-600"
                            :href="route('register')"
                            >Register</a
                        >
                    </p>
                </div>
                <div>
                    <button
                        class="bg-blue-400 p-3 rounded"
                        :disabled="form.processing"
                    >
                        Login
                    </button>
                </div>
                <!-- Old method to create from -->
                <!-- <div class="mb-6">
                    <label>Name</label>
                    <input type="text" v-model="form.name"/>
                    <small> {{  form.errors.name }}</small>
                </div>
                <div class="mb-6">
                    <label>Email</label
                    ><input type="text" v-model="form.email"/>
                    <small> {{  form.errors.email }}</small>
                </div>
                <div class="mb-6">
                    <label>Password</label
                    ><input type="password" v-model="form.password"/>
                    <small> {{  form.errors.password }}</small>
                </div>
                <div class="mb-6">
                    <label>Confirm Password</label>
                    <input type="password" v-model="form.password_confirmation" />

                </div> -->
                <div></div>
            </form>
        </div>
    </div>
</template>
