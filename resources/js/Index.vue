<template>
    <div>
        <nav class="navbar bg-white border-bottom navbar-light mb-1">
        <router-link class="nav-link ml-auto" :to="{name: 'books'}">All Books</router-link>
        </nav>
        <div class="mt-2 mb-2 pr-2 pl-2"><router-view></router-view></div>
    </div>
</template>