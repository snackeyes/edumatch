<?php
$array = "real,ecologic,national,talent,uman";
?>
<div id="content"></div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
	$( document ).ready(function() {
		var array 		= '<?php echo $array;?>';
	    
	    $.ajax({
	        url: "6.php",
	        type: "POST",
	        data:  {array: array}, 
	        success: function(response) {
	            $("#content").html(response);
	        }
	    });
	});

	$(document).on('click','.remove',function(){
		var array = $(this).data("array");
		var category = $(this).data("category");

	    $.ajax({
	        url: "6.php",
	        type: "POST",
	        data:  {array:array, category:category}, 
	        success: function(response) {
	            $("#content").html(response);
	        }
	    });
	});
</script>