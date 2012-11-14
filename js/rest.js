var riidt = (function(ver)
{
	//var host = "http://localhost/riidt/";
	var host = "http://www.riidt.com/";
	var debug = function(id, key, name)
	{
		param = {};
		param["rest_id"] = id;
		param["rest_key"] = key;
		param["rest_name"] = name;
		$.post(host + "rest/api.php?ac=read", param, function(data){
			trace(data);
		},"json");
	}
	
	var createApp = function(name)
	{
		$.post(host + "rest/api.php", {name:name}, function(data){
			trace(data);
		});
	}
	
	var trace = function(response)
	{
		$("#out").html("code:" + response.status + "<br>msg:" + response.msg + "<br>");
	}
	
	var getApp = function(id)
	{
		$.post(host + "rest/api.php?ac=getApp", {id:id}, function(data){
			trace(data);
		},"json");
	}
	return {debug:debug,createApp:createApp,getApp:getApp};
})("1.0");