<section id="media" class="flex flex-column bg-white" ref="media">
    <div class="center tc ph4 pv5 bg-white">
        <div class="bw3 bl br bd-dark-red mw5 center ph2">
            <h2 class="bg-dark-red ff-oswald f2 ttu white pv1">Media</h2>
        </div>

		<p class="f5 measure-wide mb0">Check out some <span class="dark-red">photos</span> and <span class="dark-red">videos</span> from our feast.</p>
	</div>

	<div class="flex justify-around flex-wrap">
		<?php for ($i=0; $i < 24; $i++): ?>
			<a class="mh3 mb3 mb4-l w-100 w-40-ns mw5-m mw5-l " href="//placehold.it/800x600/ccc">
				<img class="w-100" src="//placehold.it/400x300/ccc" alt="">
			</a>
		<?php endfor; ?>
	</div>
</section>
