<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <footer class="mt-auto border-t bg-white">
        <div class="mx-auto max-w-screen-xl px-4 py-8">
            <div class="flex flex-col items-center justify-between gap-6 md:flex-row md:items-start">
                <div>
                    <Link href="/" class="mb-2 flex items-center gap-2">
                        <span class="inline-flex h-8 w-8 items-center justify-center rounded-lg bg-gradient-to-br from-blue-600 to-indigo-600 font-bold text-white">M</span>
                        <span class="text-lg font-semibold tracking-tight">MyPractice</span>
                    </Link>
                    <p class="text-sm text-gray-600">A tiny playground for great UIs.</p>
                </div>
                <div class="flex items-center gap-4 text-sm text-gray-600">
                    <a href="#" class="hover:text-gray-900">Privacy</a>
                    <a href="#" class="hover:text-gray-900">Terms</a>
                    <Link href="/contact-us" class="hover:text-gray-900">Contact</Link>
                </div>
            </div>
            <div class="mt-6 border-t pt-4 text-xs text-gray-500">© 2025 Your Name. All rights reserved.</div>
        </div>
    </footer>
</template>