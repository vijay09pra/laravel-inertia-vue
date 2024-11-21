<template>
    <Head :title="' | Home'" />
    <div class="w-3/4 mx-auto p-2">
        <h1>Home page</h1>
    </div>
    <div class="w-full m-4">
        <div class="flex justify-end mb-4">
            <div class="w-full max-w-md">
                <!-- Adjust width and max-width for better control -->
                <input
                    type="search"
                    placeholder="Search"
                    v-model="search"
                    class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                />
            </div>
        </div>
        <table class="w-3/4 mx-auto p-2">
            <thead>
                <tr class="bg-slate-300">
                    <th class="text-left p-2">Avatar</th>
                    <th class="text-left p-2">Name</th>
                    <th class="text-left p-2">Email</th>
                    <th class="text-left p-2">Registration Date</th>
                    <th v-if="can.delete_user" class="text-left p-2">Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users.data" :key="user.id">
                    <td>
                        <img
                            :src="
                                user.avatar
                                    ? 'storage/' + user.avatar
                                    : 'storage/avatars/default.jpg'
                            "
                            class="avatar w-11 h-11 rounded-full"
                            alt=""
                        />
                    </td>
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ getDate(user.created_at) }}</td>
                    <td v-if="can.delete_user">
                        <button
                            class="bg-red-500 w-6 h-6 rounded-full"
                        ></button>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- pagination -->
        <div class="w-3/4 mx-auto p-2">
            <Link
                v-for="link in users.links"
                :key="link.label"
                v-html="link.label"
                :href="link.url"
                class="p-1 m-1"
                :class="{
                    'text-slate-300': !link.url,
                    'text-blue-500 font-medium': link.active,
                }"
            >
            </Link>
            <p class="text-slate-600 text-sm">
                Showing {{ users.from }} to {{ users.to }} of {{ users.total }}
            </p>
        </div>
    </div>
</template>

<script setup>
import { ref, watch } from "vue";
import { router } from "@inertiajs/vue3";
import { debounce } from "lodash";
// import Demo from '../Layouts/Demo.vue';
//     defineOptions({ layout: Demo });
const props = defineProps({
    users: Object,
    searchTerm: String,
    can: Object,
});

const search = ref(props.searchTerm);
watch(
    search,
    debounce(
        (q) => router.get("/", { search: q }, { perserveState: true }),
        500
    )
);
//format date
const getDate = (date) =>
    new Date(date).toLocaleDateString("en-us", {
        year: "numeric",
        month: "long",
        day: "numeric",
    });
</script>
