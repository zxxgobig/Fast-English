<div class="topBar">
	<div class="gw">
		<div class="l linkLeft">
			<a<?php if($this->data['route'][0] == 'article' || !$this->data['route'][0])echo ' class="changed"' ?> href="<?php echo URL?>article">资料库</a>
			<a<?php if($this->data['route'][0] == 'note')echo ' class="changed"' ?> href="<?php echo URL?>note">笔记本</a>
			<?php if(0){?><a<?php if($this->data['route'][0] == '000')echo ' class="changed"' ?> href="#">统计</a><?php }?>
		</div>
		<div class="l logo">
			<img src="<?php echo URL.'static/img/logo1.png'?>">
		</div>
		<?php if($this->data['memberMsg']){?>
			<div class="r mbLks">				
				<a href="<?php echo URL.'login/logOut'?>">注销</a>
			</div>
			<div class="r addSentence">
				<!-- <a class="btnAdd1" href="#">+添加句子</a> -->
			</div>
			<img class="r imgFace" src="<?php echo URL.'static/img/headDefult1.png'?>">
		<?php }else{?>
			<div class="r loginBarIn">
				<a href="<?php echo URL.'register'?>">新用户注册</a>
				&nbsp;
				<a class="btnLogin" href="<?php echo URL.'login'?>">登录</a>
			</div>
		<?php }?>
		<div class="c"></div>
	</div>
</div>