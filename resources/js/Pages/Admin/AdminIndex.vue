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
            <!-- here is the user auth name -->
            <h1> Hello {{ $page.props.auth.user.name }} </h1>
            
        </div>
    </AdminLayout>
</template>
