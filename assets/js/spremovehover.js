document.addEventListener('touchstart', function delete_hover(ev){

	//タッチデバイスの場合はhoverスタイルを削除
	Array.prototype.forEach.call(
		document.styleSheets,
		function delete_hover(ss){
			if(ss.cssRules){

				var deleteIndexes = [];

				Array.prototype.forEach.call(
					ss.cssRules,
					function(rule, index){
						if(rule.cssRules){
							//メディアクエリ内部を調査するための再起処理
							delete_hover(rule);
						}
						else{
							if(rule.cssText.match(/:hover/)){
								deleteIndexes.unshift(index);
							}
						}
					}
				);

				deleteIndexes.forEach(
					function(index){
						//console.log(ss.cssRules[index]);
						ss.deleteRule(index);
					}
				);
			}
		}
	);

	document.removeEventListener('touchstart', delete_hover);

}, true);
