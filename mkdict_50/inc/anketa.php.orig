<?php


function anketa_form($err){
	global $_POST;
	global $locale;
	global $native_lang;

?>
<form method="post">
<table border=0 width=400px class="anketa">
<tr><td colspan=2><center><?php echo $locale['anketa_title']; ?></center>
	</td>
</tr>
<tr><td colspan=2><center><?php echo $err; ?></center>
	</td>
</tr>
<tr><td align=right><?php echo $locale['age']; ?>:&nbsp;</td>
	<td><input type=text name="age"></td>
<tr><td align=right><?php echo $locale['sex']; ?>:&nbsp;</td>
	<td>
		<?php echo $locale['sex_m']; ?><input type=radio name="sex" value="M">
				
		<?php echo $locale['sex_f']; ?><input type=radio name="sex" value="F">
	</td>
<tr><td align=right><?php echo $locale['edu']; ?>:&nbsp;</td>
	<td>
		<select name="edu">
			<?php
				for($i=1; $i<6; $i++)
					echo "<option value=\"{$i}\">".$locale['edu_'.$i]."</option>";
			?>
		</select>	</td>
</tr>
<tr><td align=right><?php echo $locale['spec']; ?>:&nbsp;</td>
<!--	<td><input type=text name="spec" value="<?php echo $_POST['spec']?>"></td> -->
	<td><select name="spec">
	    <?php
		$sp=1;
		while(isset($locale["sp".$sp])){
		    echo "<option value=\"sp{$sp}\" ";
		    echo ">{$locale["sp".$sp]}</option>";
		    $sp++;
		}
	    ?>
	    </select>
	</td>
<tr><td align=right valign=top><?php echo $locale['lang']; ?>:&nbsp;</td>
	<td>
		<select name="lang_n">
			<?php
				for($i=0; $i<count($native_lang); $i++){
					echo "<option value=\"{$native_lang[$i]}\" ";
					echo ">{$locale[$native_lang[$i]]}</option>";
				}
			?>
		</select><br>
		Other <input type=text name="other">
	</td>
</tr>
<tr><td align=right><?php echo $locale['city']; ?>:&nbsp;</td>
        <td><input type=text name="city"></td>
<tr><td align=right><?php echo $locale['region']; ?>:&nbsp;</td>
        <td>
	<select name="region">
			<?php
			$i = 1;
			while(isset($locale["reg".$i])){                                                                                                        
					echo "<option value=\"".($i+1)."\" ";
					echo ">{$locale["reg".$i]}</option>";
			    $i++;
			}
			?>
	</select>
	</td>
<tr><td colspan=2 align=right>
	<input type="submit" name="submit" value="<?php echo $locale['Submit']; ?>">
</td></tr>
</table>
</form>
<?php
}

?>
