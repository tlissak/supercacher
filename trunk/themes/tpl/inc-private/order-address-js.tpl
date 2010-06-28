<script type="text/javascript">
<!--
	var baseDir = '{$base_dir_ssl}';
	var addresses = new Array();
	{foreach from=$addresses key=k item=address}
		addresses[{$address.id_address|intval}] = new Array('{$address.company|addslashes}', '{$address.firstname|addslashes}', '{$address.lastname|addslashes}', '{$address.address1|addslashes}', '{$address.address2|addslashes}', '{$address.postcode|addslashes}', '{$address.city|addslashes}', '{$address.country|addslashes}', '{$address.state|default:''|addslashes}');
	{/foreach}
-->
</script>