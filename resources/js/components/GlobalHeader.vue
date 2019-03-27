<template>
    <header class="text-center pt-8 md:pt-12 lg:pt-16 border-b border-grey-light shadow-bot-px">
        <div class="mb-12 uppercase">
            <h1 class="font-montserrat text-2xl mb-2">Anthony Marino</h1>
            <h2 class="font-lato font-light text-sm text-grey">Front End Developer</h2>
        </div>


        <nav class="mb-1 md:mb-4 flex flex-wrap justify-center">
            <router-link v-for="link in links"
                :to="{name: link.name}"
                class="font-montserrat font-bold uppercase text-grey link w-1/2 sm:w-auto sm:mx-6 mb-3 md:mb-0 hover:text-orange"
                active-class="text-orange"
                :key="link.name"
                exact
            >
                {{ link.name }}
            </router-link>
        </nav>
    </header>
</template>

<script>
    export default {
        props: ['links'],

        mounted() {
            console.info('Global Header mounted.')
        },

        methods: {
        }
    }
</script>
