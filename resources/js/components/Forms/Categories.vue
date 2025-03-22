<template>
    <div class="grid grid-cols-1 gap-8 sm:grid-cols-2">
        <div
            v-for="category in categories"
            :key="category.id"
            class="relative group"
        >
            <div
                class="relative h-80 w-full overflow-hidden rounded-lg bg-gray-800 sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64"
            >
                <img
                    :src="'/images/' + category.image"
                    :alt="category.title"
                    class="h-full w-full object-cover object-center"
                />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-gray-900/80 to-transparent"
                ></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <h3 class="text-xl font-semibold text-white">
                        {{ category.title }}
                    </h3>
                    <p class="mt-2 text-sm text-gray-300">
                        {{ category.description }}
                    </p>
                    <button
                        @click="selectCategory(category.id)"
                        class="mt-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 focus:ring-offset-gray-900"
                    >
                        Meld uw {{ category.title.toLowerCase() }}
                        <svg
                            class="ml-2 -mr-1 h-4 w-4"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Categories",
    data() {
        return {
            categories: [
                {
                    id: "verkeersongeval",
                    title: "Verkeersongeval",
                    description:
                        "Heeft u letsel opgelopen bij een verkeersongeval?",
                    image: "categories/verkeersongeval.jpg",
                },
                {
                    id: "bedrijfsongeval",
                    title: "Bedrijfsongeval",
                    description: "Bent u gewond geraakt tijdens uw werk?",
                    image: "categories/bedrijfsongeval.jpg",
                },
                {
                    id: "dieren",
                    title: "Ongeval door dieren",
                    description: "Heeft u letsel opgelopen door een dier?",
                    image: "categories/dieren.jpg",
                },
                {
                    id: "wegdek",
                    title: "Ongeval door wegdek",
                    description: "Bent u gevallen door een slecht wegdek?",
                    image: "categories/wegdek.jpg",
                },
            ],
        };
    },
    methods: {
        selectCategory(categoryId) {
            //this.$emit("update:selectedValue", categoryId, "category");
            window.location.href = `/form?category=${categoryId}`;
        },
    },
};
</script>
