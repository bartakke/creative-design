<<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
<style>
	
	body {
    padding-top: 40px;
}

header {
    background: #f5b335;
    height: 40px;
    position: fixed;
    top: 0;
    transition: top 0.2s ease-in-out;
    width: 100%;
}

.nav-up {
    top: -40px;
}

main {
   background:url(
data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAPklEQVQYV2O8dOnSfwYg0NPTYwTRuAAj0QqxmYBNM1briFaIzRbi3UiRZ75uNgUHGbfvabgfsHqGaIXYPAMAD8wgC/DOrZ4AAAAASUVORK5CYII=
   ) repeat;
    height: 2000px;
}

footer { background: #ddd;}
* { color: transparent}
</style>

<header class="nav-down">
    This is your menu.
</header>
<main>
    This is your body.
</main>
<footer>
    This is your footer.
</footer>
<script >
	// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('header').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('header').removeClass('nav-up').addClass('nav-down');
        }
    }
    
    lastScrollTop = st;
}
</script>
</body>
</html>