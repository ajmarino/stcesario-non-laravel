<template>
    <footer class="mt-auto border-t border-white shadow-top-px py-4 md:py-8 text-center">
        <p class="text-xs text-grey-dark tracking-loose">Copyright &copy; {{ year }} AJ Marino. All rights reserved.</p>
    </footer>
</template>

<script>
export default {
    props: ['year'],

    mounted() {
        console.info('Global Footer mounted');
    }
}
</script>
