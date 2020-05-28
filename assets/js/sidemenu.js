document.addEventListener('DOMContentLoaded', function(ev){

	var sidemenus = Array.prototype.slice.call(document.querySelectorAll('.Sidemenu'));

	if(sidemenus){
		sidemenus.forEach(
			function(sidemenu){




				var isSP = null;
				var sidemenu_y;
				var sidemenu_h;



				var is_sp = function(){
					return window.matchMedia('(max-width: 567px)').matches;
				};

				var on_resize = function(ev){
					if(isSP !== is_sp()){
						isSP = is_sp();

						//スマホはスクロールモード固定
						if(isSP){
							sidemenu.classList.add('scroll');
						}
						else{
							sidemenu.classList.remove('scroll');

							//基準位置を更新
							sidemenu_y = sidemenu.offsetTop;
							sidemenu_h = sidemenu.clientHeight;

							on_scroll();
						}
					}
				};

				var on_scroll = function(ev){

					if(!isSP){ //PCのみ

						//スクロール位置によってスクロールモードを切り替え
						var scroll_y = document.querySelector('html').scrollTop || document.body.scrollTop;
						var scrolled_over = scroll_y > sidemenu_y + sidemenu_h;

						if(scrolled_over && !sidemenu.classList.contains('scroll')){
							sidemenu.classList.add('scroll');
						}
						else if(!scrolled_over && sidemenu.classList.contains('scroll')){
							sidemenu.classList.remove('scroll');
							sidemenu.classList.remove('open');
						}

					}

				};


				on_resize();
				on_scroll();

				window.addEventListener('resize', on_resize, false);
				window.addEventListener('scroll', on_scroll, false);

			}
		);
	}

}, false);