<?php include FILE . 'view/mng/_header.php';?>
<form method="post" ENCTYPE="multipart/form-data">
	<table class="indexslideEdit">
		<tr>
			<td align="right" valign="top">标题</td>
			<td>	
				<input type="text" name="title">
			</td>
		</tr>
		<tr>
			<td align="right" valign="top">链接</td>
			<td>
				<input type="text" name="link">
			</td>
		</tr>
		<tr>
			<td align="right" valign="top">图片</td>
			<td>
				<input type="file" name="img">
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" value="提交"></td>
		</tr>
	</table>
</form>
<?php include FILE . 'view/mng/_footer.php';?>