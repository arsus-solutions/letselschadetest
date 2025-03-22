<script setup>
import { onMounted, ref } from "vue";

const model = defineModel({
    type: String,
    required: true,
});

const props = defineProps({
    label: {
        type: String,
        default: "",
    },
    type: {
        type: String,
        default: "text",
    },
    name: {
        type: String,
        default: "",
    },
});

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute("autofocus")) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <input
        v-if="type !== 'textarea'"
        :id="name"
        type="text"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm px-4 py-2"
        v-model="model"
        ref="input"
        :placeholder="label"
    />
    <textarea
        v-else
        :id="name"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm px-4 py-2"
        v-model="model"
        ref="input"
        :placeholder="label"
        rows="4"
    ></textarea>
</template>
