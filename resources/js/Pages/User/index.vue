<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Usuarios
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                        <Link :href="route('user.create')">
                            <jet-button class="ml-4" >
                                Crear Usuario
                            </jet-button>
                        </Link>

                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="p-3">Id</th>
                                    <th class="p-3">Nombre</th>
                                    <th class="p-3">Email</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="user in users" :key="user.id">
                                    <td class="p-3 border-2">{{ user.id }}</td>
                                    <td class="p-3 border-2">
                                        {{ user.name }}
                                    </td>
                                    <td class="p-3 border-2">
                                        {{ user.email }}
                                    </td>
                                    <td class="p-3 border-2">
                                        Editar/Eliminar
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import { defineComponent } from "vue"
import AppLayout from "@/Layouts/AppLayout.vue"
import { Link } from "@inertiajs/inertia-vue3"

import JetButton from "@/Jetstream/Button.vue";

export default defineComponent({
    props: ["users"],
    components: {
        AppLayout,
        Link,
        JetButton,
    },
});
</script>
