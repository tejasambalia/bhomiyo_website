$(document).ready(function() {
//like buton for image
    $(".like_button").removeAttr("disabled");
    $(".unlike_button").removeAttr("disabled");
    $('.like_button').click(function(e)
    {   
        var val = $(".like_button").val();
        $.get("http://localhost:8081/Login/public/handleLike", {id : val},function()
        { 
            //$("#status").html("Liked Sucessfully!!");
            //val = val+1;
            //$(".like_button").val(val);
            $(".like_button").attr("disabled", "disabled");
            //$("#like_button").css("background-image","url(likebw.png)");
        })
    });
    $('.unlike_button').click(function(e)
    {  
        var val = parseInt($(".unlike_button").val(), 10);
        $.get("http://localhost:8081/Login/public/handleLike",function()
        {   
            //val = val+1;
            //$(".unlike_button").val(val);
            $(".unlike_button").attr("disabled", "disabled");
            //$("#unlike_button").css("background-image","url(likebw.png)");
            //$("#status").html("Un-liked Sucessfully!!");
        })
    });           
});