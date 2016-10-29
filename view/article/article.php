<?php include FILE . 'view/_header.php';?>	
<div class="gw">		
	<?php include FILE .'view/article/_header.php';?>
	<div class="everydaySectenceBox">		
		<div class="ttM">
			每日一句：
		</div>
		<div class="contM">
			<?php echo $this->data['daysentence']['chcont']?>
			<br>
			<?php echo $this->data['daysentence']['encont']?>
		</div>
	</div>
	<div class="l frontPageBox">
		<div class="slideImgs">
			<a href="<?php echo $this->data['indexslide']['link'] ?>">
				<img src="<?php echo URL.'data/img/indexslide/'.$this->data['indexslide']['img'] ?>">
			</a>
		</div><!-- 
		<ul class="l slideTitles">
			<li><a href="#">标题文字</a></li>
			<li><a href="#">标题文字</a></li>
			<li><a href="#">标题文字</a></li>
			<li><a href="#">标题文字</a></li>
			<li><a href="#">标题文字</a></li>
		</ul>
		<div class="c"></div> -->
	</div>
	<div class="r loginBox">
		<?php if($this->data['memberMsg']){?>
			<div class="memberMsgGo">
				<br>
				<a href="<?php echo URL.'note'?>">打开笔记本</a>
			</div>
		<?php }else{?>
		<form id="memberLoginForm" onsubmit="return memberLogin.su();">
			<ul>
				<li>
					<input type="text" name="uname" placeholder="用户名">
					<div>请输入用户名</div>
				</li>
				<li>
					<input type="password" name="pass" placeholder="密码">
					<div>请输入登录密码</div>
				</li>
				<li class="btnBox">
					<input class="btnLogin" type="submit" value="登录">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo URL.'register'?>">注册</a>
				</li>
			</ul>
		</form>
		<?php }?>
	</div>
	<div class="c"></div>
	<?php if(0){?>
	<div>
		最近记录
	</div>
	<div>
		用户动态
	</div>
	<?php }?>
	<ul class="articleListBox">
		<?php foreach($this->data['columnList'] as $row){?>
		<li>
			<div class="className"><?php echo $row['chname']?></div>
			<div class="imgTop">
				<?php 
					foreach($this->data['contLists'] as $row2){if($row['id'] == $row2['articleclass_id']){
						echo '<a href="'.URL.'article/x/'.$row2['id'].'"><img src="'.URL.'data/img/article/'.$row2['img'].'"></a>';
						break;
					}}
				?>
			</div>
			<ul class="titles">
				<?php $i=0;foreach($this->data['contLists'] as $row2){if($row['id'] == $row2['articleclass_id']){?>
				<li>
					<div class="l">
						<a href="<?php echo URL.'article/x/'.$row2['id'] ?>">
							<?php echo lib_oth::substr($row2['chtitle'], 0, 17) ?>
							<br>
							<?php echo lib_oth::substr($row2['entitle'], 0, 32) ?>
						</a>
					</div>
					<div class="r dataMsgs">
						<?php echo $row2['count_click']?>
					</div>
					<div class="c"></div>
				</li>
				<?php if($i++ > 3)break;}}?>
			</ul>
		</li>
		<?php }?>
		<div class="c"></div>
	</ul>

</div>
<?php include FILE.'view/_footer.php';?>