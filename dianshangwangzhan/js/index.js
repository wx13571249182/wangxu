


function $(str){
	if(str.charAt(0)=="#"){
		return document.getElementById(str.substring(1));
	}else if(str.charAt(0)=="."){
		return document.getElementsByClassName(str.substring(1));
	}else{
		return document.getElementsByTagName(str);
	}
}

	let left = 50;
	let left = 50;

function go(){
	var myTimer = setInterval(function(){
		left+=35;
		if(left>=125){
			left=125;
			window.clearInterval(myTimer);
		}
		//3、改变外观
		$("#zuo_1").style.left = left+"px";
	},1000);


	var myTimer = setInterval(function(){
		left1+=35;
		if(left1>=125){
			left1=125;
			window.clearInterval(myTimer);
		}
		//3、改变外观
		$("#you_1").style.left = left1+"px";
	},1000);
}
