
<?php //include '_header.php';?>	
<div class="gw">		
	<div class="entryTopBar">
		<img src="<?php echo URL.'static/img/logo1.png'?>">
	</div>
	<div class="l entryBox">
		<?php if($this->data['cha'] == 'r'){?>
		<form id="memberRegisterForm" onsubmit="return memberRegister.su();">
			<ul>
				<li>
					<input type="text" name="uname" placeholder="用户名">
					<div>支持字母、数字、下划线，最多12个字符</div>
				</li>
				<li>
					<input type="password" name="pass" placeholder="密码">
					<div>6-18个字符</div>
				</li>
				<li>
					<input type="password" name="repass" placeholder="确认密码">
					<div>再输入一遍密码</div>
				</li>
				<li>
					<input type="text" name="code" placeholder="验证码">
					<img style="margin-bottom:-5px" src="<?php echo URL.'register/captchaOutput'?>">
					<div>输入右侧图中字符</div>
				</li>
				<li class="btnBox">
					<input class="btnLogin" type="submit" value="注册">
				</li>
			</ul>
		</form>
		<?php }elseif($this->data['cha'] == 'l'){?>
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
				</li>
			</ul>
		</form>
		<?php }?>
	</div>
	<div class="l someMsgBox">
		<div class="topLinksBox">
			<a href="<?php echo URL?>">继续浏览&gt;&gt;</a>
		</div>
		<?php if($this->data['cha'] == 'r'){?>
		<div class="registerTh">
			<img src="<?php echo URL.'static/img/hb-1.png'?>">
			<br>
			<a href="<?php echo URL?>login">立即登录</a>
		</div>
		<?php }elseif($this->data['cha'] == 'l'){?>
		<div class="loginTh">
			<img src="<?php echo URL.'static/img/hb-2.png'?>">
			<br>
			<a href="<?php echo URL?>register">第一次使用，还没有账号？<br>立即注册</a>
		</div>
		<?php }?>
	</div>
	<div class="c"></div>
</div>
<?php include '_footer.php';?>