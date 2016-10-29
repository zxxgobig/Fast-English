<?php include FILE . 'view/_header.php';?>	
<div class="gw">		
	<?php include FILE .'view/article/_header.php';?>
	<ul class="articleListM">
		<?php foreach($this->data['list'] as $row){?>
		<a href="<?php echo URL.'article/x/'.$row['id'] ?>">
			<li>
				<div class="titleM">
					<span class="chtitle"><?php echo $row['chtitle']?></span>
					<br>
					<span class="entitle"><?php echo $row['entitle']?></span>
				</div>
				<div class="l imgM">
					<img src="<?php echo URL . 'data/img/article/' . $row['img']  ?>">
				</div>
				<div class="l contM">	
					<?php echo str_replace('<br>', '', lib_oth::substr($row['cont'], 0 ,245))?>
					<br>
					<span class="msgs">
						<?php echo date('Y-m-d H:i:s',$row['date_add'])?>
						&nbsp;
						阅读<?php echo $row['count_click']?>
						&nbsp;
						评论<?php echo $row['count_reply']?>
						&nbsp;
						收藏<?php echo $row['count_collect']?>
					</span>
				</div>
				<div class="c"></div>
			</li>
		</a>
		<?php }?>
	</ul>
</div>
<?php include FILE.'view/_footer.php';?>