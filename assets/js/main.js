function ajax_div(clase,ruta) {
	// body...
	$.ajax({
	    type:'POST',
	    url:clase,
	    success:function(data){
	       	$('#ajax_div').html("<br><br><br><center><img src='"+ruta+"assets/gif/load.gif'></center>");
	       	setTimeout(function(){
	        $('#ajax_div').html(data);
	        },400);
	    }
	});
}
