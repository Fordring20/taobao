<!DOCTYPE html >
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title><?php echo $this->_var['page_title']; ?></title>
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<link rel="stylesheet" type="text/css" href="themesmobile/ahxcgg_mobile/css/public.css"/>
<link rel="stylesheet" type="text/css" href="themesmobile/ahxcgg_mobile/css/login.css"/>  

<script type="text/javascript" src="themesmobile/ahxcgg_mobile/js/jquery.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,utils.js,user.js,transport.js')); ?>
</head>
<body class="body_bj">
  
	<header id="header" class='header'>
    <div class="h-left"><a href="<?php if ($this->_var['gotype'] == 'mdpwd'): ?>index.php<?php else: ?>javascript:history.back(-1)<?php endif; ?>" class="sb-back"></a></div>
	<div class="h-mid"><?php if ($this->_var['action'] == 'login'): ?>会员登录<?php endif; ?> <?php if ($this->_var['action'] == 'register'): ?>用户注册<?php endif; ?> <?php if ($this->_var['action'] == 'get_password'): ?>找回密码<?php endif; ?> <?php if ($this->_var['action'] == 'get_passwd_question'): ?>找回密码<?php endif; ?> <?php if ($this->_var['action'] == 'reset_password'): ?>找回密码<?php endif; ?> <?php if ($this->_var['action'] == 'qpassword_name'): ?>找回密码<?php endif; ?></div>
 </header>
  <?php if ($this->_var['action'] == 'login'): ?>
				<div class="denglu">
						<form action="user.php" method="post">
                          <div class="bgwhite">
                            <div class="Login">
                          
								<dl>
                                <dt>用户名</dt>
							    <dd><input type="text" name="username" placeholder="手机号" value="" /></dd>
								</dl>
                                <dl <?php if (! $this->_var['enabled_captcha']): ?>style="border:none;"<?php endif; ?>>
                                <dt>密码</dt>
								<dd>
                                <script>
								
                                function change_p_type(){
									if($("#p_password").attr("type") == "password"){
 										$("#p_type").addClass("on");
										document.getElementById("p_password").type="text";						

									}
									else{
										$("#p_type").removeClass("on");
										document.getElementById("p_password").type="password";
									}
								}
                                </script>
                                <input type="password" name="password" placeholder="密码" id="p_password"/> </dd>
                                <span onclick="change_p_type()" class="p_type" id="p_type"></span>
                                </dl>
								<?php if ($this->_var['enabled_captcha']): ?>
                                <dl>
                                <dt>验证码</dt>
							    <dd>
                                <div class="codeTxt">
									<input type="text" id="captcha" name="captcha" maxlength="8" placeholder="图片验证码" class="c-form-txt-normal" />
									</div>
									<div class="codePhoto">
											<img class="check-code-img" src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="<?php echo $this->_var['lang']['comment_captcha']; ?>" title="<?php echo $this->_var['lang']['captcha_tip']; ?>" onClick="this.src='captcha.php?is_login=1&'+Math.random()" height="36" />
									</div>

                               </dd>
								</dl>
									
								<?php endif; ?>
                           
                                </div>
                                </div>
                                   <div class="Login">
								<div class="field submit-btn" style="padding-left:0px; padding-right:0px;">
									<input type="submit" class="btn_big1" onclick="member_login()" value="登 录" />
									<input type="hidden" name="act" value="act_login" />
									<input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
								</div>
              <div class="ng-foot">
              <div class="ng-cookie-area" >
                <label class="bf1 login_ffri">
				<input type="checkbox" name="remember" value="1" checked="" class="f_checkbox"> &nbsp;自动登录
				</label>
              </div>
              <div class="ng-link-area" >
                <span style=" margin-right:5px; border-right:1px solid #eeeeee">
                  <a href="register.php" >免费注册</a>
                </span>
                 <span class="user_line"></span>
                   <span >
                  <a href="findPwd.php" >忘记密码？</a>
                </span>
              </div>
              <div class="third-area">
                <div class="third-area-a"><font color="#d8d8d8">————</font>&nbsp;第三方登录&nbsp;<font color="#d8d8d8">————</font></div>
                <a class="ta-qq" href="user.php?act=oath&type=qq"  title="QQ"></a>
    <!--        <a class="ta-weibo" href="user.php?act=oath&type=weibo" title="weibo"></a>  -->
		<!--            <a class="ta-weibo" href="user.php?act=oath&type=alipay" title="alipay"></a>  -->
                <?php if ($this->_var['iswei'] > 0): ?>
                <a class="ta-weixin" href="weixin_login.php" title="weixin"></a>
                <?php endif; ?>
              </div>
            </div>
			</div>
			</form>
			</div>
		<?php endif; ?>

</body>
</html>