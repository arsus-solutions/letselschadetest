<script setup>
defineProps({
    type: {
        type: String,
        default: "button",
    },
    disabled: {
        type: Boolean,
        default: false,
    },
});
</script>

<template>
    <button
        :type="type"
        :disabled="disabled"
        class="inline-flex items-center px-6 py-4 bg-gradient-to-r from-blue-500 to-blue-600 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest shadow-md hover:from-blue-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 disabled:opacity-25 transition-all duration-200 ease-in-out transform hover:scale-105 active:scale-95"
    >
        <slot />
    </button>
</template>
