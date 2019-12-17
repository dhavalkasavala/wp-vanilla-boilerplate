const menu       = document.querySelector( '#menu-mainmenu' );
const menuToggle = document.querySelector( '.menuToggle' );

menuToggle.addEventListener(
	'click',
	(e) => {
		e.preventDefault();
    if (window.getComputedStyle( menu ).display === 'block') {
        menu.style.display = 'none';
    } else {
			menu.style.display = 'block';
    }
	}
);
