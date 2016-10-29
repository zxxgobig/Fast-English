
<?php include '_header.php';?>	
<div class="gw">		
	<div id="addASentence">
		<input onFocus="addASentence.dsp(1);" class="addASentence" type="text" placeholder="添加一条句子">
	</div>	
	<div id="addSentenceForm" class="addSentenceForm">
		<form onsubmit="return addASentence.su();">
			<div class="l">
				<input name="en" type="text" placeholder="请输入英文句子"><br>
				<input name="ch" type="text" placeholder="请输入译文（选填）">
			</div>
			<div class="r">
				<input type="submit" value="添加">
			</div>	
			<div class="c"></div>
		</form>
	</div>	
	
	<div class="sentenceListItem">
		<div class="l">
			<a class="<?php if($this->route[1] == 'unlearn' || $this->route[1] == '')echo 'isSelected'; ?>" href="<?php echo URL?>note/unlearn">未掌握</a>
			<?php if(1){?>
			<a class="<?php if($this->route[1] == 'test')echo 'isSelected'; ?>" href="<?php echo URL?>note/test">轮流测验</a>
			<a class="<?php if($this->route[1] == 'learn')echo 'isSelected'; ?>" href="<?php echo URL?>note/learn">已掌握</a>
			<?php }?>
		</div>
		<div class="r">
			<?php if(0){?>
			<a class="<?php if($this->route[1] == 'collect')echo 'isSelected'; ?>" href="<?php echo URL?>note/collect">收藏夹</a>
			<?php }?>
		</div>
		<div class="c"></div>
	</div>	
	<?php if($this->data['route'][1] == 'unlearn' || $this->data['route'][1] == 'learn'){?>
		<ul class="sentenceList" id="sentenceList">
			<?php $i=0;foreach($this->data['noteList'] as $row){ $i++;?>
			<li>
				<div class="l serial">
					<?php echo $i?>
				</div>
				<div class="l mainTxt">
					<div class="enCont"><?php echo $row['encont']?></div>
					<div class="chCont"><?php echo $row['chcont']?></div>
				</div>
				<div class="r" id="x160829829_<?php echo $row['id']?>">
					<?php if($this->data['route'][1] == 'unlearn'){?>
						<a onclick="noteSentenceLearnOrUnlearn.run(<?php echo $row['id']?>,1);" href="javascript:return false;" class="btnImLearn">我已经掌握了</a>
					<?php }else{?>
						<a onclick="noteSentenceLearnOrUnlearn.run(<?php echo $row['id']?>,0);" href="javascript:return false;" class="btnImLearn">我又忘记了</a>
					<?php }?>
				</div>
				<div class="r">
					<a href="#" class="btnTest"><!--测验--></a>
				</div>
				<div class="c"></div>
			</li>	
			<?php }?>
		</ul>
		<?php if($i == 0)echo '<div class="sentenceList_noContent">（空空如也）</div>';?>
	<?php }elseif($this->data['route'][1] == 'test'){?>
		<div class="testSentenceBox">
			<input type="hidden"  id="testSentenceBoxsentenceId" value="">
			<div id="sentenceEn">loading...</div>
			<input type="hidden"  id="test_souse_sentence" value="">
			<div><input onkeyup="testSentenceBox.state();" class="inputTranslate" id="inputTranslate" type="text" value="" placeholder=""></div>
			<div class="functions">
				<div class="l">
					<span class="testState" id="functions_testState">-</span>
					<span id="testBtnVariety"></span>
					&nbsp;&nbsp;&nbsp;<a onclick="testSentenceBoxGetData.g(false);" href="javascript:return false;">下一句</a>
				</div>
				<div class="r">
					<a onclick="testSentenceBoxGetData.g(true);" href="javascript:return false;" id="btnPatternCut">-</a>
				</div>
				<div class="c"></div>
			</div>
		</div>
		<script type="text/javascript">
			$(function(){
				testSentenceBoxGetData.g();
			});
		</script>
	<?php }elseif($this->data['route'][1] == 'collect'){?>
3shoucang
	<?php }?>
	<?php if( ($this->data['route'][1] == 'unlearn' || $this->data['route'][1] == 'learn') && $i > 9){?>
	<div class="btnListToload" id="btnListToload">
		<span onclick="showMoreSentence.run('<?php echo $this->data['route'][1] ?>');">加载更多</span>
	</div>
	<?php }?>
</div>
<?php include '_footer.php';?>