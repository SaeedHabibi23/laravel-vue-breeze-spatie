<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AdminLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Admin Index</h2>
        </template>

        <div class="py-4">
            <h1> Hello Admin User Roles </h1>
            
        </div>
    </AdminLayout>
</template>
