/**
main.js
*/

/**
首页跳转
**/
$("#body").delegate("ul li","click",function(e){
	var url = $(this).attr("url");
	window.location=url;
})