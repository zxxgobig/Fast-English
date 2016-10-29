<header>
	<div class="l menuLink">
		<?php if($this->data['adminMsg']){?>
			<a href="<?php echo URL.'mng' ?>">首页</a>
			&nbsp;
			<a href="<?php echo URL.'mng/dataList?table=member' ?>">用户</a>
			&nbsp;
			<a href="<?php echo URL.'mng/dataList?table=note' ?>">笔记数据</a>
			&nbsp;
			<a href="<?php echo URL.'mng/dataList?table=indexslide' ?>">首页幻灯</a>
			<a href="<?php echo URL.'mng/indexslideEdit' ?>">添加</a>
			&nbsp;
			<a href="<?php echo URL.'mng/dataList?table=daysentence' ?>">每日一句</a>
			<a href="<?php echo URL.'mng/daysentenceEdit' ?>">添加</a>
			&nbsp;
			<a href="<?php echo URL.'mng/dataList?table=article' ?>">文章</a>
			<a href="<?php echo URL.'mng/articleEdit' ?>">添加</a>
			&nbsp;
		<?php }?>
		<div class="c"></div>
	</div>
	<div class="r othMa">
		<?php if($this->data['adminMsg']){?>
			管理员：<?php echo $this->data['adminMsg']['name'];?>
			&nbsp;&nbsp;
			<a target="_blank" href="<?php echo URL . ''?>">浏览</a>
			&nbsp;&nbsp;
			<a href="<?php echo URL . 'mng/logout'?>">logout</a>
		<?php }else{?>		
			尚未登录！
		<?php }?>
			&nbsp;&nbsp;
	</div>
	<div class="c"></div>
</header>
