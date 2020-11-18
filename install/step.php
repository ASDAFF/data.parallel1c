<?if(!check_bitrix_sessid()) return;?>
<?
global $exchange_parallel1c_global_errors;
$exchange_parallel1c_global_errors = is_array($exchange_parallel1c_global_errors) ? $exchange_parallel1c_global_errors : array();

if(is_array($exchange_parallel1c_global_errors) && count($exchange_parallel1c_global_errors)>0)
{
	foreach($exchange_parallel1c_global_errors as $val)
	{
		$alErrors .= $val."<br>";
	}
	echo CAdminMessage::ShowMessage(Array("TYPE"=>"ERROR", "MESSAGE" => GetMessage("MOD_INST_ERR"), "DETAILS"=>$alErrors, "HTML"=>true));
}
else
{
	echo CAdminMessage::ShowNote(GetMessage("MOD_INST_OK"));
	
	?>
	<p><a href="settings.php?lang=<?=LANG?>&amp;mid=exchange.parallel1c&amp;mid_menu=2"><?=GetMessage("EXCHANGE_PARALLEL1C1_SETTINGS_PAGE" )?></a></p>
	<?	
}
?>

<form action="<?echo $APPLICATION->GetCurPage()?>">
	<input type="hidden" name="lang" value="<?echo LANG?>">
	<input type="submit" name="" value="<?echo GetMessage("MOD_BACK")?>">
</form>
