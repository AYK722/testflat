(function(){

	var news_list = news.querySelectorAll('#news .news-item');
	var current_index = 0;
	var interval = 4000;

	setInterval(function(){
		current_index = (current_index + 1) % news_list.length;
		Array.prototype.forEach.call(
			news_list,
			function(item, index){
				if(index == current_index){
					item.classList.add('active');
				}
				else{
					item.classList.remove('active');
				}
			}
		);
	}, interval);

})();