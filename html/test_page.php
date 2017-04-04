//Arpita
<link rel="stylesheet" type="text/css" href="../css/jquery.countdown.css"> 
<script type="text/javascript" src="../js/jquery.plugin.min.js"></script> 
<script type="text/javascript" src="../js/jquery.countdown.min.js"></script>
<div id="timer" style="height:50px;"></div>
<script type="text/javascript">
	var d1 = new Date ();
	var d2 = new Date ( d1 );
	d2.setHours ( d1.getHours() + 1 );
	$('#timer').countdown({
		until: d2, 
		onExpiry : function () {
			//what to do when timer goes off
		}}); 
</script>
