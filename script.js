document.querySelector('.burger').addEventListener('click', () => {
document.querySelector('.nav-ul-list').classList.toggle('nav-active');
	});

//Video Carousel
$('.single-item').slick({
	speed: 500,
	fade: true,
  cssEase: 'linear',
	autoplay: true,
  autoplaySpeed: 5000,
});