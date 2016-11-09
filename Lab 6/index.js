$(document).ready(function(){
    
    $("#search").click(function(){
        $.ajax({
            type: "GET",
            url: "request.php",
            datatype: "html",
            data: {q: $("#lookup").val()},
            success: function(text){
                $("#result").html(text)
            }
        });
    });
	
	$("#all").click(function(){
        $.ajax({
            type: "GET",
            url: "request.php",
            datatype: "xml",
            data: {q: "&all=true"},
            success: function(text){
				$("#result").html(text)
            }
        });
    });
});