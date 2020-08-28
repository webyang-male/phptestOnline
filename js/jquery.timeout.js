//倒计时功能
(function($){
	$.fn.timeout = function(options){
		options = $.extend({
			"maxTime":60,       //时限（秒数）
			"onTimeOver":function(){} //到时间时执行的函数
		}, options);
		var $thisObj = this;
		var maxTime = options.maxTime; //倒计时（秒数）
		var timer = setInterval(update,1000); //1秒钟更新一次
		update(); //自动更新第一次
		//自动更新
		function update(){
			if(maxTime>=0){
				var minutes = Math.floor(maxTime/60); //计算分钟数
				var seconds = Math.floor(maxTime%60); //计算秒数
				$thisObj.text(fill(minutes)+":"+fill(seconds));
				--maxTime;
			}else{
				clearInterval(timer);
				options.onTimeOver(); //调用函数
			}
		}
		//不足10位自动补0
		function fill(s) {
			return s < 10 ? '0' + s: s;
		}
	};
})(jQuery);