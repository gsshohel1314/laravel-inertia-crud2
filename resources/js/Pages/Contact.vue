<script setup>
import { Head } from '@inertiajs/vue3';
import AppLayout from '../Layouts/App.vue';

defineOptions({layout: AppLayout})

defineProps(
    {
        user: String
    }
)
</script>

<template>
    <Head>
        <title>Contact Us</title>
        <meta head-key="description" name="description" content="This is contact us page">
    </Head>

    <section class="mx-auto max-w-screen-xl px-4 py-16 text-center">
        <h1 class="mb-4 text-3xl font-extrabold tracking-tight md:text-5xl">
            <span class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">
                This is contact us page. {{ user }}
            </span>
        </h1>
    </section>
</template>