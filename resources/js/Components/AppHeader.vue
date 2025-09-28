<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <header class="sticky top-0 z-30 border-b bg-white/80 backdrop-blur supports-[backdrop-filter]:bg-white/60">
        <nav class="mx-auto flex max-w-screen-xl items-center justify-between px-4 py-3">
            <Link :href="route('home')" class="flex items-center gap-2">
                <span
                    class="inline-flex h-8 w-8 items-center justify-center rounded-lg bg-gradient-to-br from-blue-600 to-indigo-600 font-bold text-white">M</span>
                <span class="text-lg font-semibold tracking-tight">MyPractice</span>
            </Link>

            <ul class="hidden items-center gap-8 text-sm md:flex">
                <li><Link :href="route('home')" class="text-gray-700 transition-colors hover:text-blue-600">Home</Link></li>
                <li><Link :href="route('about')" class="text-gray-700 transition-colors hover:text-blue-600">About</Link></li>
                <li><Link :href="route('contact')" class="text-gray-700 transition-colors hover:text-blue-600">Contact Us</Link></li>
            </ul>

            <div class="hidden items-center gap-3 md:flex">
                <a href="#" class="rounded-md px-3 py-2 text-sm ring-1 ring-gray-300 hover:bg-gray-100">Docs</a>
                <a href="#" class="rounded-md bg-blue-600 px-3 py-2 text-sm text-white hover:bg-blue-700">Get Started</a>
            </div>
        </nav>
    </header>
</template>