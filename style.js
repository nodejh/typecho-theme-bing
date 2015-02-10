$(document).ready(function(){
	//加载进度条开始
	$.AMUI.progress.start();
	//代码高亮
	hljs.initHighlightingOnLoad();

	var bingUrl = $('#bing-url').attr('bing-url');
	//console.log(bingUrl);
	document.body.style.backgroundImage='url(' + bingUrl + ')';

});
$(window).load(function (){
	//加载进度条完成
	$.AMUI.progress.done();
}); 
