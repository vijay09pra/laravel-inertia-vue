<script setup>
import { useForm } from "@inertiajs/vue3";
import Textinput from "../Components/Textinput.vue";
// import { preview } from "vite";

const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
    avatar: null,
    preview: null,
});
const change = (e) => {
    form.avatar = e.target.files[0];
    form.preview = URL.createObjectURL(e.target.files[0]);
};
const submit = () => {
    form.post(route("register"), {
        onError: () => form.reset("password", "password_confirmation"),
    });
};
</script>

<template>
    <Head title=" | Register" />
    <div class="text-center m-auto w-2/5 bg-slate-200 p-3">
        <h1 class="text-center">Register an new account</h1>
        <div>
            <form @submit.prevent="submit">
                <div class="grid place-items-center">
                    <div
                        class="relative w-28 h-28 rounded-full overflow-hidden border border-slate-300"
                    >
                        <label
                            for="avatar"
                            class="absolute inset-0 grid content-end cursor-pointer"
                        >
                            <span class="bg-white/70 pb-2 text-center"
                                >Avatar</span
                            ></label
                        >
                        <input type="file" id="avatar" @input="change" hidden />
                        <img
                            class="object-cover w-28 h-28"
                            :src="form.preview ?? 'storage/avatars/default.jpg'"
                        />
                    </div>
                    <p class="error mt-2">{{ form.errors.avatar }}</p>
                </div>
                <Textinput
                    name="name"
                    v-model="form.name"
                    :message="form.errors.name"
                />
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
                <Textinput
                    name="password confirmation"
                    type="password"
                    v-model="form.password_confirmation"
                />
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
                <div>
                    <p class="text-slate-600 nb-2">
                        Already a user?<a
                            class="text-link text-fuchsia-600"
                            :href="route('login')"
                            >Login</a
                        >
                    </p>
                </div>
                <div>
                    <button
                        class="bg-blue-400 p-3 rounded"
                        :disabled="form.processing"
                    >
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>
