$(document).ready(function() {
	$("#navchoose a").removeClass("active");
    $("#index").addClass("active");
    $("#releasebtn").click(function(){
    	 event.preventDefault();
    	 $(location).attr('href', 'releaseannounce.php');
    });
});
