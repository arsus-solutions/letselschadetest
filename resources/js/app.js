import "./bootstrap";
import { createApp } from "vue";
import { createRouter, createWebHistory } from "vue-router";
import Form from "./components/Form.vue";

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: "/form",
            name: "form",
            component: Form,
        },
    ],
});

const app = createApp(Form);

app.use(router);
app.mount("#app");
