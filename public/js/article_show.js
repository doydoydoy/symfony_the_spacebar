$(document).ready(() => {
	$('.js-like-article').on('click', (e) => {
		e.preventDefault();
		
		var	$link = $(e.currentTarget);
		$link.toggleClass('fa-heart-o').toggleClass('fa-heart');

		$('.js-like-article-count').html('TEST');
	});
});