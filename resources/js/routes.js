import VueRouter from "vue-router";
import Bookables from "./components/bookables/Bookables";
import ExampleComponent2 from "./components/ExampleComponent2.vue";

const routes = [
    {
        path: "/",
        component: Bookables,
        name: "home"
    },
    {
        path: "/about",
        component: ExampleComponent2,
        name: "about"
    }
    
];

const router = new VueRouter({
    routes,
    mode: 'history',
});

export default router;
