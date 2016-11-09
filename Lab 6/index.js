$(document).ready(function(){
    
    $("#search").click(function(){
        $.ajax({
            type: "GET",
            url: "request.php",
            datatype: "html",
            data: {q: $("#lookup").val()},
            success: function(text){
                //alert(text)
                $("#result").html(text)
            }
            /*error: function(XMLHttpsRequest, textStatus, errorText){
                alert("Status" + )
            }*/
        });
    });
});