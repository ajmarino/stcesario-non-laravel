<template>
    <section class="h-screen bg-cover bg-fixed bg-no-repeat overflow-hidden"
        ref="parallax"
        :style="{
            backgroundImage: `url(${bg})`,
            backgroundPosition: `0 -${offset}px`,
        }"
    >
        <div class="bg-black70 h-full w-full flex items-center justify-center">
            <div class="max-w-md text-center">
                <h2 class="inline-block text-3xl font-sans uppercase border-b border-b border-white leading-relaxed text-red-700 mb-2" v-text="title"></h2>
                <p class="text-white" v-text="text"></p>
            </div>
        </div>
    </section>
</template>

<script>
// https://markus.oberlehner.net/blog/building-a-parallax-scrolling-effect-component-with-vue/
export default {
    props: ['bg', 'title', 'text'],

    data() {
        return {
            height: 0,
            scrollFactor: 0,
            width: 0,
            factor: .25,
        }
    },

    computed: {
        offset() {
            return this.scrollFactor * this.height * this.factor;
        },
    },

    mounted() {
        console.info('Parallax BG mounted');

        this.calcParallax();

        const eventHandler = () => requestAnimationFrame(this.calcParallax);
        window.addEventListener('resize', eventHandler);
        window.addEventListener('scroll', eventHandler);

        this.$on(`hook:destroyed`, () => {
            window.removeEventListener('resize', eventHandler);
            window.removeEventListener('scroll', eventHandler);
        });
    },

    methods: {
        calcParallax() {
            const containerRect = this.$el.getBoundingClientRect();

            this.height = containerRect.height;
            this.width = containerRect.width;

            const viewportOffsetTop = containerRect.top;
            const viewportOffsetBottom = window.innerHeight - viewportOffsetTop;

            this.scrollFactor = viewportOffsetBottom / (window.innerHeight + this.height);
        },
    }
}
</script>
