const app = new Vue({
    el: document.getElementById('site'),

    data: {
        headroom: null,
        headroomOptions: {
            offset: 100
        }
    },


    beforeMount() {

    },


    mounted() {
    	console.log('App started');


        // Prevents links starting with # from moving page
		$('a[href^="#"]').click(function (e) {
			e.preventDefault();
		});


        this.headroom = new Headroom(this.$refs.header, this.headroomOptions);
        this.headroom.init();



        $(this.$refs.parallax1).parallax("50%", .5);
        $(this.$refs.parallax2).parallax("50%", .5);
        $(this.$refs.parallax3).parallax("50%", .5);
    },


    methods: {

        slideTo(e) {
            Util.slidePageTo( e.target.hash );
        }
    }
});


