$(document).ready(function(){
    let url=window.location.search;
    const verifyToken=()=>{
        if(localStorage.getItem("gtoken") !== null)
        {
            //Verify Token
            $.ajax({
                url:`http://${window.location.hostname}/feedweb/api/auth.php?verifyToken=true`,
                type:'POST',
                context:this,
                headers:{
                    "Authorization":"Bearer "+localStorage.getItem("gtoken")
                },
                success:function(result,status,xhr){
                    if(result.status == 0)
                    {
                        localStorage.removeItem("gtoken");
                        window.location.href=`http://${window.location.hostname}/feedweb/index.php`;
                    }
                    else if(result.status == 1)
                    {
                        $(".categories").css("display","block");
                        $(".categories-index").css("display","flex");
                        $(".logout").css("display","block");
                        $("#logout").css("display","block");
                        $(".log,.reg").css("display","none");
                    }
                }
            });
        }
        else if(url.indexOf("modules") !== -1)
        {
            window.location.href=`http://${window.location.hostname}/feedweb/index.php`;
        }
    };
    verifyToken();
    setInterval(verifyToken,1000);
    
    $("#logout").click(function(){
        localStorage.removeItem("gtoken");
        window.location.href=`http://${window.location.hostname}/feedweb/index.php`;
    });
});