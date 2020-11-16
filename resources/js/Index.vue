<template>
    <div>
        <nav class="navbar bg-white border-bottom navbar-light mb-1">
        <router-link class="nav-link ml-auto" :to="{name: 'home'}">Home</router-link>
        <router-link class="nav-link" :to="{name: 'about'}">About</router-link>
        </nav>

        <div class="container mt-2 mb-2 pr-2 pl-2"><router-view></router-view></div>
    </div>
</template>