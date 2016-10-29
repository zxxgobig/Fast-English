<?php include FILE . 'view/mng/_header.php';?>
<form method="post" ENCTYPE="">
	<table class="daysentenceEdit">
		<tr>
			<td align="right" valign="top">英文句</td>
			<td>	
				<textarea name="en"></textarea>
			</td>
		</tr>
		<tr>
			<td align="right" valign="top">中文句</td>
			<td>
				<textarea name="ch"></textarea>
			</td>
		</tr>
		<tr>
			<td align="right" valign="top">显示时刻</td>
			<td>
				<input type="text" name="setprinttime">
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" value="提交"></td>
		</tr>
	</table>
</form>
<?php include FILE . 'view/mng/_footer.php';?>