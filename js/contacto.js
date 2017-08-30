(function (d, w) {
	'use strict';

	var mq64 = w.matchMedia('(min-width:64em)'),
		gmaps = d.querySelector('#gmaps'),
		validateInputs = d.querySelectorAll('.validate');

	function performanceOptimization(mq) {
		if (mq.matches) {
			gmaps.innerHTML = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.5765869748293!2d-99.28437034942249!3d19.430692086821054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d204013b76d161%3A0x88f9f48ff6925154!2sCrown+Bienes+Raices!5e0!3m2!1ses-419!2smx!4v1493142201164" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>' ;
		} else {
			gmaps.innerHTML = '<a href="https://www.google.com.mx/maps/place/Crown+Bienes+Raices/@19.4306921,-99.2843703,17z/data=!3m1!4b1!4m5!3m4!1s0x85d204013b76d161:0x88f9f48ff6925154!8m2!3d19.4306921!4d-99.2821763?hl=es-419" target="_blank">Ver Mapa</a>';
		}
	}

	w.onload = performanceOptimization(mq64);
	mq64.addListener(performanceOptimization);


})(document, window);