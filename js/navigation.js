(function (d, w) {
	'use strict';

	var panel = d.querySelector('.CR-Panel'),
		panelBtn = d.querySelector('.CR-Panel-button'),
		hamburger = d.querySelector('.hamburger'),
		mq = w.matchMedia('(min-width: 64em)');

	function closePanel(mq) {
		if (mq.matches) {
			panel.classList.remove('is-active')
			hamburger.classList.remove('is-active');
		}
	}

	panelBtn.onclick = function (e) {
		e.preventDefault();
		panel.classList.toggle('is-active');
		hamburger.classList.toggle('is-active');
	};


	closePanel(mq);
	mq.addListener(closePanel);

	
})(document, window);