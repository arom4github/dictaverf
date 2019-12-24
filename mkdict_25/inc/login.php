<?php

function login_form($err){
global $locale;
global $_SESSION 
?>

<table border=0 width="50%" min-width="400px" height="150px" class="login">
<tr>
<td><center>&nbsp;<?php echo ($err != '')? $locale[$err]: ""; ?></center></td>
</tr>
<tr>
	<td><center>
	<h1><?php echo $locale['title'];?></h1>
	<p align=justify>
	<?php echo $locale['test_descr'];?>
	</center></td>
</tr>
<tr>
	<td nowrap><center>
	<form method="post">
		<input type="hidden" name="key" value="<?php echo substr(md5(rand()), 0, 6); ?>">
			&nbsp;<input type=submit value="<?php echo $locale['login']?>">
	</form>
		</center>
	</td>
</tr>
</table>
<?php
}

function check_key($key){
	global $locale;
	$res = db_check_key($key);
	if($res == 0) return '';
	if($res == 1) return 'db_error';
	if($res == 2) return 'key_invalide';
	if($res == 3) return 'test_invalide';
	return 'unknown_error';
}

?>
