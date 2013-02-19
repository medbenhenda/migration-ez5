{literal}
    <script type="text/javascript">
$(document).ready(function(){

	$('span#country2').click(function() {
		var submenu = $('div#countries');
		if (submenu.is(":visible")) {
			submenu.fadeOut();
		} else {
			submenu.fadeIn();
		}
	});
	var submenu_active = false;
	 
	$('div#countries').mouseenter(function() {
		submenu_active = true;
	});
	 
	$('div#countries').mouseleave(function() {
		submenu_active = false;
		setTimeout(function() { if (submenu_active === false) $('div#countries').fadeOut(); }, 400);
	});
	
	
	$('#region').mouseover(function() {
		$('#regionlist').show();
		
	});
	$('#region').mouseout(function() {
		$('#regionlist').hide();
		
	});
	
	jQuery('#mycarousel').jcarousel({
    	wrap: 'circular'
    });
	
	jQuery('#mycarouse2').jcarousel({
    	scroll: 1,
		auto: 0,
		wrap: 'circular'
    });
});
</script>
{/literal}
{if $pagedesign.data_map.footer_script.has_content}
<script type="text/javascript">
    {$pagedesign.data_map.footer_script.content}
</script>
{/if}
{* Override this template and place javascript based statestics here (like Google Analytics) *}