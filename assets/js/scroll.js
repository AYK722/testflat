Scroll = Object.create(
	null,
	{
		to:
			{
				value:
					function(target){

						var current_y = window.scrollY || document.body.scrollTop;
						var target_y;
						var duration = 400;

						if(typeof(target) === 'number'){
							target_y = target;
						}
						else{
							element = document.querySelector(target);
							if(!element){
								throw new Error('Scroll.to Error: 不明なターゲット');
							}

							target_y = this._getGlobalOffset(element).top;
						}

						var obj = {y: current_y};
						var tw = new Tween(obj, {y: target_y}, duration);
						tw.addEventListener('step', function(ev){
							window.scrollTo(0, ev.now);
						}, false);
						tw.start();
					}
			},
		_getGlobalOffset:
			{
				value:
					function(element){
						var offset = {top: 0, left: 0};

						while(true){
							offset.top += element.offsetTop;
							offset.left += element.offsetLeft;
							if(element.offsetParent){
								element = element.offsetParent;
								continue;
							}
							break;
						}
						return offset;
					}
			}
	}
);

function EventDispatcher(){

	var doc_flg = document.createDocumentFragment();

	this.addEventListener = doc_flg.addEventListener.bind(doc_flg);
	this.removeEventListener = doc_flg.removeEventListener.bind(doc_flg);

	this.dispatchEvent = function(ev, data){
		//evが文字列で指定された場合は新たに作成する
		if(typeof(ev) === 'string'){
			var new_ev = EventDispatcher.createEvent(ev, data);
			doc_flg.dispatchEvent.call(doc_flg, new_ev);
		}
		else{
			doc_flg.dispatchEvent.call(doc_flg, ev);
		}
	};
}

Object.defineProperties(
	EventDispatcher,
	{
		toString:
			{
				value:
					function(){
						return '[EventDispatcher]';
					}
			},
		createEvent:
			{
				value:
					function(ev_type, data){
						var ev;
						try{
							//ev = new CustomEvent(ev_type, {detail: data});
							ev = new CustomEvent(ev_type);
						}
						catch(e){
							ev = document.createEvent('Event');
							ev.initEvent(ev_type, false, false);
							//ev.detail = data;
						}
						for(var i in data){
							ev[i] = data[i];
						}
						return ev;
					}
			}
	}
);

function Tween(target, properties, duration){

	EventDispatcher.call(this);

	this._target = target;
	this._targetProperties = properties;
	this._duration = duration || 600;
}

Tween.prototype = Object.create(
	EventDispatcher.prototype,
	{
		toString:
			{
				value:
					function(){
						return '[Tween]';
					}
			},
		start:
			{
				value:
					function(){

						this.stop();

						//初期値を保存する
						var default_props = {};
						for(var i in this._targetProperties){
							default_props[i] = this._target[i];
						}

						//変異取得用のエレメントを作成（spanのopacityを0から1にする）
						this._transObj = (function(){
							var span = document.createElement('span');
							with(span.style){
								visibility = 'hidden';
								position = 'fixed';
								left = 0;
								top = 0;
								opacity = 0;
								transition = 'opacity {d}ms ease'.replace(/{d}/, this._duration);
							}
							return span;
						}).call(this);

						document.body.appendChild(this._transObj);

						this._tweenTimer = setTimeout(function(){

							//変異開始
							this._transObj.style.opacity = 1;
							this.dispatchEvent('start');

							this._tweenTimer = setTimeout(function on_tween(){

								var t = window.getComputedStyle(this._transObj).opacity;

								for(var i in this._targetProperties){
									var value = default_props[i] + (this._targetProperties[i] - default_props[i]) * t;
									this._target[i] = value;
									this.dispatchEvent('step',　{'property': i,　'now': value});
								}

								//繰り返し
								if(t < 1){
									setTimeout(on_tween.bind(this));
								}
								else{
									this.stop();
									this.dispatchEvent('complete');
								}

							}.bind(this));

						}.bind(this));
					}
			},
		stop:
			{
				value:
					function(){
						try{
							clearTimeout(this._tweenTimer);
							document.body.removeChild(this._transObj);
						}
						catch(e){
						}
					}
			},
		_target: {value: null, writable: true},
		_targetProperties: {value: null, writable: true},
		_duration: {value: null, writable: true},
		_transObj: {value: null, writable: true},
		_tweenTimer: {value: null, writable: true}
	}
);
