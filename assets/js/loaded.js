window.addEventListener('load', (function(ev){

	var on_load = function(){
		if(!document.body.classList.contains('loaded')){
			document.body.classList.add('loaded');
		}
	};

	setTimeout(on_load, 3000);

	return on_load;
})(), false);
