function panduan(){
    $("denid").onfocus = function(){
            denid.value = null;
        }
        $("denid").onblur = function(){
            if(denid.value==null){
                denid.value = "请输入手机号";
            }
        }
        $("denpass").onfocus = function(){
            denpass.value = null;
        }
        $("denpass").onblur = function(){
            if(denpass.value==null){
                denpass.value = "请输入密码";   
            }

        }
}