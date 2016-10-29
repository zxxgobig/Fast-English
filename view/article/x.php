<?php include FILE . 'view/_header.php';?>	
<div class="gw">	
	<?php include FILE .'view/article/_header.php';?>
	<div class="l articleXMain">	
		<div class="l contBar">
			<div class="titleM" title="<?php echo $this->data['cont']['entitle']?>">
				<div class="cht"><?php echo $this->data['cont']['chtitle']?></div>
				<div class="ent"><?php echo $this->data['cont']['entitle']?></div>
			</div>
			<div class="msgs">
				<?php echo $this->data['cont']['source'] ? '来源:'.$this->data['cont']['source'] : '';?>
				&nbsp;&nbsp;
				<?php echo $this->data['cont']['redact'] ? '编辑:'.$this->data['cont']['redact'] : '编辑:急速英语';?>
				&nbsp;
				<?php echo $this->data['cont']['translate'] ? '翻译:'.$this->data['cont']['translate'] : ''?>
				<?php echo date('Y-m-d H:i:s',$this->data['cont']['date_add'])?>
				&nbsp;
				阅读<?php echo $this->data['cont']['count_click']?>
				&nbsp;
				收藏<?php echo $this->data['cont']['count_collect']?>
				&nbsp;
				评论<?php echo $this->data['cont']['count_reply']?>
			</div>
		</div>
		<div class="c"></div>
		<div class="contentM">
			<?php echo $this->data['cont']['cont']?>
		</div>
	</div>
	<div class="l functionalM">
		<div class="mainFs">
			<a href="#">收藏</a>
			&nbsp;
			<a href="#">点评</a>
		</div>
		<!-- <div class="">
			最近访客
			热门推荐
		</div> -->
	</div>
	<div class="c"></div>
</div>
<?php include FILE.'view/_footer.php';?>