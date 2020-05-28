document.addEventListener('DOMContentLoaded', function(ev){

	var check_finish = function(){
		var max_y = document.body.clientHeight - window.innerHeight;
		var scroll_y = document.querySelector('html').scrollTop || document.body.scrollTop;

		//端数を切り上げ
		scroll_y = Math.ceil(scroll_y);

		if(scroll_y >= max_y){
			document.body.classList.add('finish');
		}
		else{
			document.body.classList.remove('finish');
		}
	};

	check_finish();

	window.addEventListener('scroll', check_finish, false);
	window.addEventListener('resize', check_finish, false);

}, false);