<script language="javascript">
function rotateBannerIdByCnt(position, cnt){
	var i = 0;
	var rotated = false;

	
	if(!$.cookie(position))
		$.cookie(position,0,{ expires: 7 });	
		
	
	for(i=0;i<cnt-1;i++){
		if 	    ($.cookie(position) == i+"") {
			$.cookie(position,i+1,{ expires: 7 });	
			rotated = true;
			return;
		}
	}
	if(!rotated){
		$.cookie(position,0,{ expires: 7 });
	}
}
</script>
