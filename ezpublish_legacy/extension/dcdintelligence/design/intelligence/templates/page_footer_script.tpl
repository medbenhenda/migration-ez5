<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36153241-1']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_setDomainName', 'dcd-intelligence.com']);
  _gaq.push(['_setAllowHash', false]);
  _gaq.push(['_trackPageview']);

  (function() {ldelim}
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  {rdelim})();

</script>

{ezscript_load( array( ezini( 'JavaScriptSettings', 'FooterJavaScriptList', 'design.ini' ), ezini( 'JavaScriptSettings', 'FrontendJavaScriptList', 'design.ini' ) ) )}

{if $pagedesign.data_map.footer_script.has_content}
<script type="text/javascript">
    {$pagedesign.data_map.footer_script.content}
</script>
{/if}


