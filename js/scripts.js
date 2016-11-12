$(function(){

  $('a').smoothScroll({
    speed: 200
  });


//waypoints for menu items (showing active state when scroll to particular section)

if(window.location.href === 'front-page.php') {
	var waypoint = new Waypoint({
  element: document.getElementById('about'),
  handler: function(direction) {
    $('.aboutNav').addClass('selectedMenu');
    $('.portfolioNav').removeClass('selectedMenu');
    $('.contactNav').removeClass('selectedMenu');
  },
});

	var waypoint = new Waypoint({
	 element: document.getElementById('portfolio'),
	 handler: function(direction) {
	 		console.log(direction);
	   $('.portfolioNav').addClass('selectedMenu');
	   $('.aboutNav').removeClass('selectedMenu');
	   $('.contactNav').removeClass('selectedMenu');
	 },
	 offset: '-.01%'
});

	var waypoint = new Waypoint({
  element: document.getElementById('contact'),
  handler: function(direction) {
    $('.contactNav').addClass('selectedMenu');
    $(this).parent().siblings().find('a').removeClass('selectedMenu');
    $('.aboutNav').removeClass('selectedMenu');
    $('.portfolioNav').removeClass('selectedMenu');
  },
  offset: '50%'
});
}

//menu icon hamburger 
  $('#menuIcon').on('click', function() {
    $('.menufixed').toggleClass('showMenu');
    $(this).toggleClass('fa-times fa-bars');

  })

  $('#menu-primary-menu li').on('click', function(){
    $('.menufixed').removeClass('showMenu');
    $('#menuIcon').toggleClass('fa-times fa-bars');
  })


	console.log("It's working");

});