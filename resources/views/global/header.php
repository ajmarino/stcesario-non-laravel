<header class="fixed w-100 bg-white" ref="header">
	<div class="mw8 center flex flex-column flex-row-l items-center justify-between pa3">
		<a href="#top" class="logo ff-oswald f2 lh-title mb3 mb1-l tc no-underline ttu js-slide" @click.prevent="slideTo($event)">St. Cesario Society</a>

		<nav class="flex flex-wrap tc">
			<a href="#about-us" class="w-50 w-auto-l link no-underline gray hover-mid-gray mh3-l" @click.prevent="slideTo($event)">About Us</a>
			<a href="#our-history" class="w-50 w-auto-l link no-underline gray hover-mid-gray mh3-l" @click.prevent="slideTo($event)">Our History</a>
			<a href="#media" class="w-50 w-auto-l link no-underline gray hover-mid-gray mh3-l" @click.prevent="slideTo($event)">Media</a>
			<a href="#contact-us" class="w-50 w-auto-l link no-underline gray hover-mid-gray mh3-l" @click.prevent="slideTo($event)">Contact Us</a>
		</nav>
	</div>
</header>
