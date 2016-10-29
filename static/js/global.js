//全站载入
var loading = {
	f1:function(){
		//在每个页尾添加的预制HTML
		var htm = '';
		//浮动小提示框
		htm += '<div id="is_1"><div>{js}</div></div>';//1
		htm += '<div id=""></div>';//2
		$('#theAddHTMLs').html(htm);
	}
}
//对预制HTML的操作
var theAddHTMLs = {
	dsp:function(sw, co, coSw){
		$('#theAddHTMLs ' + '#is_' + sw).fadeIn();
		switch(sw){//挑选一个显示
			case 1:
				$('#theAddHTMLs ' + '#is_1 div').html(co);
				if(coSw == 1 || coSw == '1_1')$('#theAddHTMLs ' + '#is_1 div').css('color','#0084B4');//正确颜色
				if(coSw == 2)$('#theAddHTMLs ' + '#is_1 div').css('color','#F14000');//错误颜色
				if(coSw == '1_1'){
					var t = 999999999;
				}else{
					var t = 3000;
				}
				setTimeout(function(){//定时隐藏
					$('#theAddHTMLs ' + '#is_1').fadeOut();
				},t);
				break;
			case 2:
				//$('#theAddHTMLs ' + '#is_2').html(co);
				break;
		}
	}
}
//用户注册
var memberRegister = {
	su:function(){
		var uname 	= $("#memberRegisterForm [name='uname']");
		var pass 	= $("#memberRegisterForm [name='pass']");
		var repass 	= $("#memberRegisterForm [name='repass']");
		var code 	= $("#memberRegisterForm [name='code']");
		if($.trim(uname.val()).length == 0){
			theAddHTMLs.dsp(1,'请输入用户名',2);
			uname.focus();
		}else if(!/^(?!_)\w+$/i.test(uname.val())){
			theAddHTMLs.dsp(1,'用户名格式错误',2);
			uname.focus();
		}else if(!/^.{1,12}$/i.test(uname.val())){
			theAddHTMLs.dsp(1,'用户名太长',2);
			uname.focus();
		}else if($.trim(pass.val()) == ''){
			theAddHTMLs.dsp(1,'请输入密码',2);
			pass.focus();
		}else if(!/^.{6,18}$/i.test(pass.val())){
			theAddHTMLs.dsp(1,'密码太长或太短',2);
			pass.focus();
		}else if(pass.val() != repass.val()){
			theAddHTMLs.dsp(1,'两次输入的密码不一致',2);
			repass.focus();
		}else if($.trim(code.val()) == ''){
			theAddHTMLs.dsp(1,'请输入验证码',2);
			code.focus();
		}else{
			$.ajax({  
				url : CONF.URL + 'register/suAjax',
				data:{  
				       uname 	: uname.val(),
				       pass 	: pass.val(),
				       repass	: repass.val(),
				       code		: code.val()

				},  
				type:'post',  
				cache:false,  
				dataType:'json',  
				success:function(data) {  
					if(data.err == 7){
						theAddHTMLs.dsp(1,'该用户名已被注册，请换一个',2);
						uname.focus();
					}else if(data.err == 6){
						theAddHTMLs.dsp(1,'验证码错误',2);
						code.focus();
					}else if(data.err == "ok"){  
						theAddHTMLs.dsp(1,'注册成功！3秒后跳转','1_1');
						setTimeout(function(){//定时跳转
							location.href = CONF.URL;// + 'login/loginSuCookie?n=p=fun=';
						},3000);						
					}else{  
						document.write(data);//调试
					}  
				},  
				error : function() {  
					alert('错误：请求超时');
				}  
			});
		}
		return false;
	}
}
//登录
var memberLogin = {
	su:function(){
		var uname 	= $("#memberLoginForm [name='uname']");
		var pass 	= $("#memberLoginForm [name='pass']");
		if($.trim(uname.val()) == ''){
			theAddHTMLs.dsp(1,'请输入用户名',2);
			uname.focus();
		}else if($.trim(pass.val()) == ''){
			theAddHTMLs.dsp(1,'请输入密码',2);
			pass.focus();
		}else{
			theAddHTMLs.dsp(1,'正在登录···','1_1');
			$.ajax({  
				url : CONF.URL + 'login/suAjax',
				data:{  
				       uname 	: uname.val(),
				       pass 	: pass.val()

				},  
				type:'post',  
				cache:false,  
				dataType:'json',  
				success:function(data) {  
					if(data.err == 1){
						theAddHTMLs.dsp(1,'用户名或密码错误',2);
						uname.focus();
					}else if(data.err == "ok"){  
						theAddHTMLs.dsp(1,'登录成功！','1_1');
						setTimeout(function(){//定时跳转
							location.href = CONF.URL;// + 'login/loginSuCookie?n=p=fun=';
						},1000);						
					}else{  
						document.write(data);//调试
					}  
				},  
				error : function() {  
					alert('错误：请求超时');
				}  
			});
		}
		return false;
	}
}
//添加句子
var addASentence = {
	dsp:function(v){
		if (v) {
			$("#addASentence").hide();
			$("#addSentenceForm").show();
			$("#addSentenceForm [name='en']").focus();
		}else{
			$("#addASentence").show();
			$("#addSentenceForm").hide();
		};
	},
	su:function(){
		var ch = $("#addSentenceForm [name='ch']");
		var en = $("#addSentenceForm [name='en']");
		if(en.val().length < 5){
			theAddHTMLs.dsp(1,'英文句子太短',2);
			en.focus();
		}else if(en.val().length > 140){
			theAddHTMLs.dsp(1,'英文句子太长，请减少',2);
			en.focus();
		}else if(ch.val().length > 140){
			theAddHTMLs.dsp(1,'译文太长，请减少',2);
			ch.focus();
		}else{
			$.ajax({  
				url : CONF.URL + 'note/addSentenceAjax',
				data:{  
				       ch : ch.val(),  
				       en : en.val()
				},  
				type:'post',  
				cache:false,  
				dataType:'json',  
				success:function(data) { 
					//document.write(data); 
					if(data.err == "ok"){  
						theAddHTMLs.dsp(1,'添加成功',1);
						addASentence.dsp(0);
						//刷新到第一条
						var htm = '';
						htm += '<li>';
						htm += '<div class="l serial">';
						htm +=  '+';
						htm += '</div>';
						htm += '<div class="l mainTxt">';
						htm += '<div class="enCont">' + en.val() + '</div>';
						htm += '<div class="chCont">' + ch.val() + '</div>';
						htm += '</div>';
						htm += '<div class="r">';
						htm += '<a href="#" class="btnImLearn"><!--我已经掌握了--></a>';
						htm += '</div>';
						htm += '<div class="r">';
						htm += '<a href="#" class="btnTest"><!--测验--></a>';
						htm += '</div>';
						htm += '<div class="c"></div>';
						htm += '</li>';
						$("#sentenceList").prepend(htm);
						//
						ch.val('');
						en.val('');
					}else{  
						document.write(data);//调试
					}  
				},  
				error : function() {  
					alert('错误：请求超时');
				}  
			});
		}
		return false;
	}
}
//加载句子列表
var showMoreSentence_page = 0;
var showMoreSentence = {
	run:function(cla){
		var cla = cla;
		showMoreSentence_page ++;//页面递增
		$.ajax({  
			url : CONF.URL + 'note/showMoreSentence',
			data:{  
			       page : showMoreSentence_page,
			       cla : cla
			},  
			type:'get',  
			cache:false,  
			dataType:'json',  
			success:function(data) {  
				var htm = '';
				if(cla == 'unlearn'){
					var x0001 = 1;
					var x0002 = '我已经掌握了';
				}else{
					var x0001 = 0;
					var x0002 = '我又忘记了';
				}
				for(rank = 1; rank < data.length; rank ++){
					htm += '';
					htm += '<li>';
					htm += '<div class="l serial">';
					htm +=  (showMoreSentence_page )  * 10 + rank;
					htm += '</div>';
					htm += '<div class="l mainTxt">';
					htm += '<div class="enCont">' + data[rank]['encont'] + '</div>';
					htm += '<div class="chCont">' + data[rank]['chcont'] + '</div>';
					htm += '</div>';
					htm += '<div class="r" id="x160829829_' + data[rank]['id'] + '">';
					htm += '<a onclick="noteSentenceLearnOrUnlearn.run(' + data[rank]['id'] + ',' + x0001 + ');" href="javascript:return false;" class="btnImLearn">' + x0002 + '</a>';
					htm += '</div>';
					htm += '<div class="r">';
					htm += '<a href="#" class="btnTest"><!--测验--></a>';
					htm += '</div>';
					htm += '<div class="c"></div>';
					htm += '</li>';
				}
				if(data.length < 10){
					$("#btnListToload").html('<span class="ended">到底了</span>');
				}else{
					$("#sentenceList").append(htm);
				}				
			},  
			error : function() {  
				alert('错误：请求超时');
			}  
		});
	}
}

//载入要测试的句子
var testSentenceBoxGetData_page = -1;
var testSentenceBoxGetData_pattern = 1;//默认为模式1
var testSentenceBoxGetData = {
	g:function(patternCut){//(模式切换)
		$("#sentenceEn").html('loading...');
		$("#inputTranslate").val('');//清空上次输入的内容
		$("#inputTranslate").focus();//光标进入
		testSentenceBoxGetData_page++;
		if(patternCut == true){
			testSentenceBoxGetData_pattern ++;//切换模式
			testSentenceBoxGetData_page --;//不翻页
		}
		$.ajax({  
			url : CONF.URL + 'note/getTestSentence',
			data:{  
			       page : testSentenceBoxGetData_page
			},  
			type:'get',  
			cache:false,  
			dataType:'json',  
			success:function(data) {  
				//意外提示
				var tsHtm;
				if(data.length == 0){
					tsHtm = '本轮已测试完毕！<a href="' + CONF.URL + 'note/test">再测一遍</a>';
					if(testSentenceBoxGetData_page == 0)tsHtm = '还没有可测验的句子';
				}
				$("#sentenceEn").html('（提示：' + tsHtm + '）');
				//
				$("#testSentenceBoxsentenceId").val(data[0]['id']);//句子ID
				if(testSentenceBoxGetData_pattern%2 === 0){//切换
					$("#sentenceEn").html(data[0]['chcont']);//中
					$("#test_souse_sentence").val(data[0]['encont']);//英
					$("#functions_testState").html('请翻译成英文');
					$("#btnPatternCut").html('切换为英译汉');
				}else{
					$("#sentenceEn").html(data[0]['encont']);//英
					$("#test_souse_sentence").val(data[0]['chcont']);//中
					$("#functions_testState").html('请翻译成中文');
					$("#btnPatternCut").html('切换为汉译英');
				}
			},  
			error : function() {  
				alert('错误：句子载入失败');
			}  
		});
	}
}
//轮流测试句子测试框功能
var testSentenceBox = {
	state : function(){
		var sentenceId = $("#testSentenceBoxsentenceId").val();
		var souse_sentence = $("#test_souse_sentence");//检测依据(句)
		var ipt = $("#inputTranslate");
		var state = $("#functions_testState");
		var btnVariety = $("#testBtnVariety");
		var rtxt = '';
		var rvariety='';
		if($.trim(ipt.val()) == ''){
			rtxt = '等待输入';
		}else{
			if(souse_sentence.val() == $.trim(ipt.val())){
				rtxt = "完全正确！";
				rvariety = '&nbsp;&nbsp;&nbsp;<a onclick="noteSentenceLearnOrUnlearn.run(' + sentenceId + ',1);" href="javascript:return false;" id="x618618618">我已经掌握了</a>';
			}else{
				//rtxt = "准确率：" + 20 + "%";
				rtxt = "尚不正确";
			}
		}
		state.html(rtxt);
		btnVariety.html(rvariety);
	}
}
//标记单个句子
var noteSentenceLearnOrUnlearn = {
	run:function(id,learn){
		var id 		= id;
		var learn 	= learn;
		$.ajax({  
			url : CONF.URL + 'note/setSentenceLearnOrUnlearn',
			data:{  
			       id : id,
			       learn : learn
			},  
			type:'get',  
			cache:false,  
			dataType:'json',  
			success:function(data) {  
				if(data.err == 'ok'){
					if(learn == 1)theAddHTMLs.dsp(1,'已添加到掌握',1);
					if(learn == 0)theAddHTMLs.dsp(1,'已添加到未掌握',1);
					//额外操作
					//alert(id);
					if(learn == 1){
						$("#x618618618").css('display','null');//隐藏句子轮流测试的“我已经掌握了”按钮
						$("#x160829829_" + id).html('好厉害！');//把未掌握列表的“我已经掌握了”按钮替换
					}
					if(learn == 0){
						$("#x160829829_" + id).html('加油哦！');//把未掌握列表的“我又忘记了”按钮替换
					}
				}
			},  
			error : function() {  
				alert('错误：操作超时');
			}  
		});
	}
}








$(function(){
	loading.f1();
});





































