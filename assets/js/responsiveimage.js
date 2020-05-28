(function(){

	var exp = /(_sp.|_pc.)/;
	var isSP = null;
	var check_sp = function(){
		return window.matchMedia('(max-width: 567px)').matches;
	};
	var images = Array.prototype.slice.call(document.querySelectorAll('img'));

	window.addEventListener('resize', (function on_resize(ev){

		var is_sp = check_sp();
		if(isSP !== is_sp){
			isSP = is_sp;
			var replace = (isSP) ? '_sp.': '_pc.';

			images.forEach(
				function(img){
					img.src = img.src.replace(exp, replace);
				}
			);
		}

		return on_resize;

	})(), false);

})();