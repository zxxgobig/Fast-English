<?php include FILE . 'view/mng/_header.php';?>
<form method="post" ENCTYPE="multipart/form-data">
	<table class="articleEdit">
		<tr>
			<td align="right">标题</td>
			<td>
				英:<input type="text" name="entitle" value="<?php echo $this->data['cont']['entitle'] ?>">
				<br>
				中:<input type="text" name="chtitle" value="<?php echo $this->data['cont']['chtitle'] ?>">
			</td>
		</tr>
		<tr>
			<td align="right">分类</td>
			<td>	
				<select name="class">
					<option value="0">-未选择-</option>
					<?php foreach($this->data['columnList'] as $row){?>
					<option value="<?php echo $row['id']?>" <?php if($row['id'] == $this->data['cont']['articleclass_id'])echo 'selected' ?>><?php echo $row['chname']?></option>
					<?php }?>
				</select>
			</td>
		</tr>
		<tr>
			<td align="right">编辑</td>
			<td>	
				<input type="text" name="redact" value="<?php echo $this->data['cont']['redact'] ?>">
			</td>
		</tr>
		<tr>
			<td align="right">来源</td>
			<td>	
				<input type="text" name="source" value="<?php echo $this->data['cont']['source'] ?>">
			</td>
		</tr>
		<tr>
			<td align="right">翻译</td>
			<td>	
				<input type="text" name="translate" value="<?php echo $this->data['cont']['translate'] ?>">
			</td>
		</tr>
		<?php if(!$this->data['get_id']){?>
		<tr>
			<td align="right">配图</td>
			<td>
				<input type="file" name="img"> (286.67x150)
			</td>
		</tr>
		<?php }?>
		<tr>
			<td align="right" valign="top">内容</td>
			<td>
				<textarea name="cont"><?php echo lib_filt::htmlT1($this->data['cont']['cont'],true) ?></textarea>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" value="提交"></td>
		</tr>
	</table>
</form>
<?php include FILE . 'view/mng/_footer.php';?>