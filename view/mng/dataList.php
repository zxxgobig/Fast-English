<?php include FILE . 'view/mng/_header.php';?>
<table class="dataList">
	<tr class="tt">
		<td>ID</td>
		<?php 
			foreach ($this->data['list_key'] as $value) {
				echo '<td>' . $value . '</td>';
			}
		?>
		<td>操作</td>
	</tr>
	<?php foreach($this->data['list'] as $row){?>
	<tr class="cont">
		<td><?php echo $row['id']?></td>
		<?php 
			foreach ($this->data['list_key'] as $key=>$v) {
				if($key == $this->data['list_fun']['link'][0][0]){
					echo '<td><a target="_blank" href="' . $this->data['list_fun']['link'][0][1] . $row[$this->data['list_fun']['link'][0][2]] . '">' . $row[$key] . '</a></td>';
				}elseif($key == $this->data['list_fun']['time'][0]){
					echo '<td>' . date('Y-m-d H:i:s',$row[$key]) . '</td>';
				}else{
					echo '<td>' . $row[$key] . '</td>';
				}
			}
		?>
		<td>

			<?php 
				switch ($this->data['table']) {
					case 'member':
						echo '<a href="#">封禁</a>';
						break;

					case 'daysentence':
						echo '<a href="' . URL.'mng/deleteData?table=daysentence&id='.$row['id'] . '">删除</a>';
						break;

					case 'indexslide':
						echo '<a href="' . URL.'mng/deleteData?table=indexslide&id='.$row['id'] . '">删除</a>';
						break;

					case 'article':
						if($row['recommend'] == 0){
							echo 		'<a href="' . URL.'mng/changeData?table=article&change=recommend&to=1&id='.$row['id'] . '">推荐</a>';
						}else{
							echo 		'<a href="' . URL.'mng/changeData?table=article&change=recommend&to=0&id='.$row['id'] . '">取消推荐</a>';
						}
						echo '&nbsp; <a href="' . URL.'mng/articleEdit?id='.$row['id'] . '">修改</a>';
						echo '&nbsp; <a href="' . URL.'mng/deleteData?table=article&id='.$row['id'] . '">删除</a>';
						break;
				}
			?>

		</td>
	</tr>
	<?php }?>
</table>
<?php include FILE . 'view/mng/_footer.php';?>