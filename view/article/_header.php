
	<div class="navigationBar">
		<a href="<?php echo URL.'article'?>">首页</a>
		<?php foreach($this->data['columnList'] as $row){?>
		<a<?php if($this->data['get_class'] == $row['enname'])echo ' style="text-decoration:underline"'?> href="<?php echo URL.'article/l?c='.$row['enname']?>"><?php echo $row['chname']?></a>
		<?php }?>
	</div>
	