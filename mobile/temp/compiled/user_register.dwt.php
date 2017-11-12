<!DOCTYPE html >
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title><?php echo $this->_var['page_title']; ?></title>
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<link rel="stylesheet" type="text/css" href="themesmobile/ahxcgg_mobile/css/public.css"/>
<link rel="stylesheet" type="text/css" href="themesmobile/ahxcgg_mobile/css/login.css"/>  


<script type="text/javascript" src="themesmobile/ahxcgg_mobile/js/jquery.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,utils.js,register.js,transport.js')); ?>
</head>
<body style="background:#f2f2f2">
	<header id="header" class='header'>
	<div class="h-left"><a href="javascript:history.back(-1)" class="back"></a></div>
    <div class="h-mid">用户注册</div>
     </header>
	<div id="tbh5v0">
			<?php if ($this->_var['shop_reg_closed'] == 1): ?>
			<div class="font12"><?php echo $this->_var['lang']['shop_register_closed']; ?></div>
			<?php else: ?>
			<script type="text/javascript">
		
		$().ready(function(){
			
			setCurrentForm($("#mobileForm"));
			
			//判断点击验证码
			var is_mob_log = true;
			
			$("#mobileForm").find(".check-code-img").click();
			
			//登录切换
			$("#logRegTab li").bind("click", function () {
				if (this.id == "mob_log") {
					
					if(is_mob_log){
						return;
					}
					
					is_mob_log = true;
					
					$("#mob_log").removeClass("currl");
					$("#acc_log").addClass("currr");
					$("#phonearea").removeClass("hide");
					$("#accountarea").addClass("hide");
					
					setCurrentForm($("#mobileForm"));
					
					$("#mobileForm").find(".check-code-img").click();
				} else {
					
					if(!is_mob_log){
						return;
					}
					
					is_mob_log = false;
					
					$("#acc_log").removeClass("currr");
					$("#mob_log").addClass("currl");
					$("#phonearea").addClass("hide");
					$("#accountarea").removeClass("hide");
					
					setCurrentForm($("#emailForm"));
					
					$("#emailForm").find(".check-code-img").click();
				}
				$(".btn_log").css("color","#FFFEFE");
				
		    });
		});
		</script>
			<div class="log_reg_box">
				<ul class="tab clearfix" id="logRegTab" style="display: none;">
					<li id="mob_log" class="curr">
						<span>
							<font>手机注册</font>
						</span>
					</li>
					<li id="acc_log" class="curr currr">
						<span>
							<font>邮箱注册</font>
						</span>
					</li>
				</ul>
				<div id="logRegTabCon">
					<div class="log_reg_item" id="phonearea">
						<form action="register.php" id="mobileForm" name="mobileForm" method="post">
							<input type="hidden" id="register_type" name="register_type" value="mobile" />
                              <div class="bgwhite">
                            <div class="Login">                          
								<dl>
                                <dt>手机号</dt>
							    <dd><input type="text" id="mobile_phone" name="mobile_phone" placeholder="请输入手机号" class="" onblur="checkMobilePhone(this);" />
                                <div class="tips">
										<span id="mobile_phone_notice"></span>
									</div>
                                    </dd>
								</dl>
                                <dl>
                                <dt>密码</dt>
								<dd>
                                <script>								
                                function change_p_type1(){
									if($(".password").attr("type") == "password"){
 										$(".p_type").addClass("on");
									
										//document.getElementById("password").type="text";	
										document.getElementsByClassName("password").item(0).type = "text";
									}
									else{
										$(".p_type").removeClass("on");
										
										//document.getElementById("password").type="password";
										document.getElementsByClassName("password").item(0).type = "password";
									}
								}
                                </script>
                                <input type="password" class="password" id="password" name="password" placeholder="请输入6至20位字符" class="" onblur="check_password(this.value);"/> 
                                <div class="tips">
										<span id="password_notice"></span>
									</div>
                                </dd>
                                <span onclick="change_p_type1()" id="p_type1" class="p_type"></span>
                                </dl>
                                
                                
                                	<?php $_from = $this->_var['extend_info_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?>
								<?php if ($this->_var['field']['id'] == 6): ?>
								<div class="">
									<div class="">
										<select name="sel_question" <?php if ($this->_var['field']['is_need']): ?> required<?php endif; ?> class="c-f-text"> <?php echo $this->html_options(array('options'=>$this->_var['passwd_questions'],'selected'=>$this->_var['profile']['passwd_question'])); ?>
										</select>
									</div>
								</div>
								<div class="field no">
									<div class="ptxt st">
										<input type="text " placeholder="密码问题答案" name="passwd_answer" value="<?php echo $this->_var['profile']['passwd_answer']; ?>" <?php if ($this->_var['field']['is_need']): ?> required<?php endif; ?> class="c-f-text" onblur="check_conform_password(this.value);" />
									</div>
									<?php if ($this->_var['field']['is_need']): ?>
									<div class="tips">
										<span id="<?php echo $this->_var['field']['id']; ?>_notice"> </span>
									</div>
									<?php endif; ?>
								</div>				
                                <?php elseif ($this->_var['field']['id'] == 5 || $this->_var['field']['reg_field_name'] == '验证手机'): ?>
								
							
								<?php else: ?>
                                	<dl>
                                <dt><?php echo $this->_var['field']['reg_field_name']; ?></dt>
							    <dd>
                                <input type="text" name="extend_field<?php echo $this->_var['field']['id']; ?>" value="<?php echo $this->_var['field']['content']; ?>" placeholder="<?php echo $this->_var['field']['reg_field_name']; ?>" id="extend_field_<?php echo $this->_var['field']['id']; ?>" class="" />
                                	<?php if ($this->_var['field']['is_need']): ?>
                                <div class="tips">
											<span id="<?php echo $this->_var['field']['id']; ?>_notice"> </span>
									</div>
                                    <?php endif; ?>
                                    </dd>
								</dl>

								<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
								
								<?php if ($this->_var['enabled_captcha']): ?>
                                       	<dl>
                                <dt>验证码</dt>
							    <dd>
                                <div class="codeTxt">
									<input type="text" id="captcha" name="captcha" placeholder="图片验证码" class="" />
									</div>
									<div class="codePhoto">
										<img id="captcha_img" class="check-code-img" src="captcha.php?is_mobile_reg=1&<?php echo $this->_var['rand']; ?>" alt="<?php echo $this->_var['lang']['comment_captcha']; ?>" title="<?php echo $this->_var['lang']['captcha_tip']; ?>" onClick="this.src='captcha.php?is_mobile_reg=1&'+Math.random()" height="25" />
									</div>

                               </dd>
								</dl>

								<?php endif; ?>
								
                                  	<dl style="border:none;" >
                                <dt>验证码</dt>
							    <dd>
                                <div class="codeTxt">
									<input type="text" id="mobile_code" maxlength="8"  name="mobile_code" placeholder="短信验证码" class="" />
									</div>
									  <div class="codePhoto">
									<input id="zphone" type="button" value="获取验证码 " class="zphone" >
                                  </div>

                               </dd>
								</dl>

                                </div>
                                </div>
                                
                                
					  <div class="Login">
                      	<div class="field submit-btn" style="padding-left:0px; padding-right:0px;">
									<input type="submit" id="btn_submit" name="Submit" class="btn_big1" value="注 册" />
									<input type="hidden" name="act" value="register" />
									<input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
                                    </div>
                                    </div>
						</form>
					</div>
					<div class="log_reg_item hide" id="accountarea">
						<form action="register.php" method="post" id="emailForm" name="emailForm" >
							<input type="hidden" id="register_type" name="register_type" value="email" />
                            
                      <div class="bgwhite">
                            <div class="Login">
                          
								<dl>
                                <dt>邮箱地址</dt>
							    <dd>
                                <input type="email" name="email" placeholder="请输入邮箱地址" value="" class="" id="email" onblur="checkEmail(this.value);" />
                               	<div class="tips">
										<span id="email_notice"></span>
									</div>
                                    </dd>
								</dl>
                                <dl>
                                <dt>密码</dt>
								<dd>
                                <script>								
                                function change_p_type(){
									if($(".password1").attr("type") == "password"){
 										$(".p_type1").addClass("on");
									
										//document.getElementById("password").type="text";	
										document.getElementsByClassName("password1").item(0).type = "text";
									}
									else{
										$(".p_type1").removeClass("on");
										
										//document.getElementById("password").type="password";
										document.getElementsByClassName("password1").item(0).type = "password";
									}
								}
                                </script>
                                <input type="password" name="password" id="password" onblur="check_password(this.value);" value="" placeholder="请输入6至20位字符" class="password1" />
                               <div class="tips">
										<span id="password_notice"> </span>
									</div>
                                </dd>
                                <span onclick="change_p_type()" class="p_type1" id="p_type"></span>
                                </dl>
                                
                                
                                	<?php $_from = $this->_var['extend_info_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?>
								<?php if ($this->_var['field']['id'] == 6): ?>
								<div class="">
									<div class="">
										<select name="sel_question" <?php if ($this->_var['field']['is_need']): ?> required<?php endif; ?> class="c-f-text"> <?php echo $this->html_options(array('options'=>$this->_var['passwd_questions'],'selected'=>$this->_var['profile']['passwd_question'])); ?>
										</select>
									</div>
								</div>
								<div class="field no">
									<div class="ptxt st">
										<input type="text " placeholder="密码问题答案" name="passwd_answer" value="<?php echo $this->_var['profile']['passwd_answer']; ?>" <?php if ($this->_var['field']['is_need']): ?> required<?php endif; ?> class="c-f-text" onblur="check_conform_password(this.value);" />
									</div>
									<?php if ($this->_var['field']['is_need']): ?>
									<div class="tips">
										<span id="<?php echo $this->_var['field']['id']; ?>_notice"> </span>
									</div>
									<?php endif; ?>
								</div>				
                                <?php elseif ($this->_var['field']['id'] == 5): ?>
								
							
								<?php else: ?>
                                	<dl>
                                <dt><?php echo $this->_var['field']['reg_field_name']; ?></dt>
							    <dd>
                                <input type="text" name="extend_field<?php echo $this->_var['field']['id']; ?>" value="<?php echo $this->_var['field']['content']; ?>" placeholder="<?php echo $this->_var['field']['reg_field_name']; ?>" id="extend_field_<?php echo $this->_var['field']['id']; ?>" class="" />
                                	<?php if ($this->_var['field']['is_need']): ?>
                                <div class="tips">
											<span id="<?php echo $this->_var['field']['id']; ?>_notice"> </span>
									</div>
                                    <?php endif; ?>
                                    </dd>
								</dl>

								<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
								
								<?php if ($this->_var['enabled_captcha']): ?>
                                       	<dl>
                                <dt>验证码</dt>
							    <dd>
                                <div class="codeTxt">
									<input type="text" id="captcha" name="captcha" maxlength="8" placeholder="图片验证码" class="" />
									</div>
									<div class="codePhoto">
										<img id="captcha_img" class="check-code-img" src="captcha.php?is_mobile_reg=1&<?php echo $this->_var['rand']; ?>" alt="<?php echo $this->_var['lang']['comment_captcha']; ?>" title="<?php echo $this->_var['lang']['captcha_tip']; ?>" onClick="this.src='captcha.php?is_mobile_reg=1&'+Math.random()" height="25" />
									</div>

                               </dd>
								</dl>

								<?php endif; ?>
								
                                  	<dl style="border:none;" >
                                <dt>验证码</dt>
							    <dd>
                                <div class="codeTxt">
                                <input type="text" id="email_code" name="email_code" placeholder="邮箱验证码" class="" />
								
									</div>
									<div class="codePhoto">
									<input id="zemail" type="button" value="获取验证码 " class="zphone" >
                                  </div>

                               </dd>
								</dl>

                                </div>
                                </div>                        
                                
                                
					  <div class="Login">
									<div class="field submit-btn" style="padding-left:0px; padding-right:0px;">
                                			<input type="checkbox" style="display: none" name="agreement" value="1" checked="checked" required />
									<input type="submit" id="btn_submit" name="Submit" class="btn_big1" value="注 册" />
									<input type="hidden" name="act" value="register" />
									<input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
                                    </div>
                                    </div>
                                    
                                    
                         

						</form>
					</div>
				</div>
			</div>
			<script type="text/javascript">
			var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
			<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
			var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
			$().ready(function(){
				
				$("#zemail").click(function(){
					$("#emailForm").find("#email").blur();
					$("#emailForm").find("#password").blur();
					//$("#emailForm").find("#confirm_password").blur();
					if ($("#emailForm").find("#captcha").size() > 0 && $("#emailForm").find("#captcha").val().length == 0) {
						$("#emailForm").find("#captcha_notice").html(msg_captcha_blank);
						$("#emailForm").find("#captcha_notice").css({color: '#900'});
						return;
					}
					sendEmailCode($("#emailForm").find("#email"), $("#emailForm").find("#email_code"), $(this));
				});
				
				$("#zphone").click(function(){
					$("#mobileForm").find("#mobile_phone").blur();
					$("#mobileForm").find("#password").blur();
					//$("#mobileForm").find("#confirm_password").blur();
					if ($("#mobileForm").find("#captcha").size() > 0 && $("#mobileForm").find("#captcha").val().length == 0) {
						$("#mobileForm").find("#captcha_notice").html(msg_captcha_blank);
						$("#mobileForm").find("#captcha_notice").css({color: '#900'});
						return;
					}
					sendMobileCode($("#mobileForm").find("#mobile_phone"), $("#mobileForm").find("#mobile_code"), $(this));
				});
				
				$("#emailForm").submit(function(){
					return reg_by_email();
				});
				
				$("#mobileForm").submit(function(){
					return reg_by_mobile();
				});
			});
			</script>
			<?php endif; ?>
			<?php echo $this->fetch('library/page_footer.lbi'); ?>
	</div>
	<script type="text/javascript">
	var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
	<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
	</script>
	</div>
	<script type="text/javascript">
	$(function(){ 
		$('input[type=text],input[type=password]').bind({ 
		focus:function(){ 
		 $(".global-nav").css("display",'none'); 
		}, 
		blur:function(){ 
		 $(".global-nav").css("display",'flex'); 
		} 
		}); 
	}) 
	</script>
</body>
</html>