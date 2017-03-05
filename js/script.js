function displayNav(){
	var icon = document.getElementById('navIcon');
	var targetNav = document.getElementById('mobileNav');

	if(targetNav.className === 'display-none'){
		targetNav.className = 'show-nav';
        icon.className = 'mobile__navicon animateIcon';
        document.getElementById('main-page').style.opacity = '0.5';
	}
	else{
		targetNav.className = 'display-none';
        navIcon.className = 'mobile__navicon animateBack';
        document.getElementById('main-page').style.opacity = '1';
	}
}
