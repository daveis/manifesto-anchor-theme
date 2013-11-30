$(document).ready(function() {
	
	// jPanelMenu Initialize
	var jPM = $.jPanelMenu({
		menu: '.jpanel-menu',
		trigger: '.site-header__menu-trigger',
		direction: 'right',
		animated: false,
		keyboardShortcuts: false
	});
	jPM.on();
});