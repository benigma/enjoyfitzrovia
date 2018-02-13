$('#Container').mixItUp({
	load: {
		sort: 'random'
	},
	animation: {
			duration: 400,
			effects: 'fade translateZ(-360px) stagger(34ms) rotateZ(20deg)',
			easing: 'cubic-bezier(0.47, 0, 0.745, 0.715)',
			animateResizeTargets: true
	}
});