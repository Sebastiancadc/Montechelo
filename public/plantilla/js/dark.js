const btnSwitch = document.querySelector('#switch');

//const imagen=document.querySelector('#imagenmenuleft');

btnSwitch.addEventListener('click', () => {
    document.body.classList.toggle('dark');
	btnSwitch.classList.toggle('active');

	// Guardamos el modo en localstorage.
	if(document.body.classList.contains('dark')){
		localStorage.setItem('dark-mode', 'true');
		// imagen.setAttribute("src", "plantilla/img/theme/Montechelo_Negativo.png");
	} else {
		localStorage.setItem('dark-mode', 'false');
		// imagen.setAttribute("src", "plantilla/img/theme/Logo1.png");
	}
	
});

// Obtenemos el modo actual.
if(localStorage.getItem('dark-mode') === 'true'){
	document.body.classList.add('dark');
	btnSwitch.classList.add('active');

} else {
	document.body.classList.remove('dark');
	btnSwitch.classList.remove('active');
}