<script setup>
import AppHeader from '../Components/AppHeader.vue';
import AppFooter from '../Components/AppFooter.vue';
</script>

<template>
    <div class="flex min-h-screen flex-col bg-gray-50 text-gray-900">
        <AppHeader />

        <main class="flex-1">
            <article>
                <slot />
            </article>
        </main>

        <AppFooter />
    </div>
</template>