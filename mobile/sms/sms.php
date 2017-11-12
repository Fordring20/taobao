<?php
error_reporting(0); // 代码增加 By bbs.ahxcjy.com
//session_start();

header("Content-type:text/html; charset=UTF-8");

function random ($length = 6, $numeric = 0)
{
	PHP_VERSION < '4.2.0' && mt_srand((double)microtime() * 1000000);
	if($numeric)
	{
		$hash = sprintf('%0' . $length . 'd', mt_rand(0, pow(10, $length) - 1));
	}
	else
	{
		$hash = '';
		$chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789abcdefghjkmnpqrstuvwxyz';
		$max = strlen($chars) - 1;
		for($i = 0; $i < $length; $i ++)
		{
			$hash .= $chars[mt_rand(0, $max)];
		}
	}
	return $hash;
}

function read_file ($file_name)
{
	$content = '';
	$filename = date('Ymd') . '/' . $file_name . '.log';
	if(function_exists('file_get_contents'))
	{
		@$content = file_get_contents($filename);
	}
	else
	{
		if(@$fp = fopen($filename, 'r'))
		{
			@$content = fread($fp, filesize($filename));
			@fclose($fp);
		}
	}
	$content = explode("\r\n",$content);
	return end($content);
}

if($_GET['act'] == 'check')
{
	/* 代码修改_start BY www.ahxcjy.com */
	$mobile = isset($_POST['mobile']) ? trim($_POST['mobile']) : '';
	$mobile_code = isset($_POST['mobile_code']) ? trim($_POST['mobile_code']) : '';
	/* 代码修改_end BY www.ahxcjy.com */
	
	if(time() - $_SESSION['time'] > 30 * 60)
	{
		unset($_SESSION['mobile_code']);
		exit(json_encode(array(
			'msg' => '验证码超过30分钟。'
		)));
	}
	else
	{
		if($mobile != $_SESSION['mobile'] or $mobile_code != $_SESSION['mobile_code'])
		{
			exit(json_encode(array(
				'msg' => '手机验证码输入错误。'
			)));
		}
		else
		{
			exit(json_encode(array(
				'code' => '2'
			)));
		}
	}
 
}

if($_GET['act'] == 'send')
{
	
	/* 代码修改_start BY www.ahxcjy.com */
	$mobile = isset($_POST['mobile']) ? trim($_POST['mobile']) : '';
	$mobile_code = isset($_POST['mobile_code']) ? trim($_POST['mobile_code']) : '';
	/* 代码修改_end BY www.ahxcjy.com */
	
	//session_start();
	if(empty($mobile))
	{
		exit(json_encode(array(
			'msg' => '手机号码不能为空'
		)));
	}
	
	$preg = '/^1[0-9]{10}$/'; // 简单的方法
	if(! preg_match($preg, $mobile))
	{
		exit(json_encode(array(
			'msg' => '手机号码格式不正确'
		)));
	}
	
	$mobile_code = random(6, 1);
	
	$content = sprintf($GLOBALS['_CFG']['sms_register_tpl'],$mobile_code,$GLOBALS['_CFG']['sms_sign']);

	
	if($_SESSION['mobile'])
	{
		if(strtotime(read_file($mobile)) > (time() - 60))
		{
			exit(json_encode(array(
				'msg' => '获取验证码太过频繁，一分钟之内只能获取一次。'
			)));
		}
	}
	
	$num = sendSMS($mobile, $content);
	if($num == true)
	{
		$_SESSION['mobile'] = $mobile;
		$_SESSION['mobile_code'] = $mobile_code;
		$_SESSION['time'] = time();
		exit(json_encode(array(
			'code' => 2
		)));
	}
	else
	{
		exit(json_encode(array(
			'msg' => '手机验证码发送失败。'
		)));
	}
}

function sendSMS ($mobile, $content, $time = '', $mid = '')
{
	$content = iconv('utf-8', 'gbk', $content);
	$http = 'http://http.yunsms.cn/tx/'; // 短信接口
	$uid = $GLOBALS['_CFG']['ecsdxt_user_name']; // 用户账号
	$pwd = $GLOBALS['_CFG']['ecsdxt_pass_word']; // 密码
	// $uid = '191413';
	// $pwd = 'Jiakai123456';
	
	$data = array(
		'uid' => $uid, // 用户账号
		'pwd' => strtolower(md5($pwd)), // MD5位32密码,密码和用户名拼接字符
		'mobile' => $mobile, // 号码
		'content' => $content, // 内容
		'time' => $time, // 定时发送
		'mid' => $mid
	);
	$re = postSMS($http, $data); // POST方式提交
	                             
	// change_sms change_start
	
	$re_t = substr(trim($re), 3, 3);
	
	if(trim($re) == '100' || $re_t == '100')
	
	// change_sms change_end
	
	{
		return true;
	}
	else
	{
		return false;
	}
}

//get方法请求
function getCurl($url)
{//get https的内容
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);//不输出内容
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_TIMEOUT,30);
    $result= curl_exec($ch);
	curl_close($ch);
	return $result;
}

function _xml_to_array($xml)
{
	$reg = "/<(\w+)[^>]*>([\\x00-\\xFF]*)<\\/\\1>/";
	if(preg_match_all($reg, $xml, $matches)){
	 $count = count($matches[0]);
	 for($i = 0; $i < $count; $i++){
	 $subxml= $matches[2][$i];
	 $key = $matches[1][$i];
	     if(preg_match( $reg, $subxml )){
	         $arr[$key] = _xml_to_array($subxml);
	     }else{
	         $arr[$key] = $subxml;
	     }
	 }
	}
	return $arr;
}

/**
 * 发送验证码
 * @param null $mobile
 * @return array|mixed
 */
function sendMobileCode($mobile = null, $chcode, $content)
{
	$httphost = 'http://112.74.130.54:5588/sms.aspx?action=send&userid=2130&account=YLKJ-YDHY&password=123456';
    if(!$mobile) return false;
    $checkcodes = $chcode;//验证码
    $content =  "【爱心购】您的" . $content . "短信验证码是:" . $checkcodes . "，请在5分钟内使用。";
    $res = getCurl($httphost . '&mobile=' . $mobile . '&content=' . $content . '&sendTime=&extno=');
    $arr = _xml_to_array($res);
    if ($arr['returnsms'])
    {
        if ($arr['returnsms']['returnstatus'] == 'Success')
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    else
    {
        return false;
    }
}

function postSMS ($url, $data = '')
{
	$row = parse_url($url);
	$host = $row['host'];
	$port = $row['port'] ? $row['port'] : 80;
	$file = $row['path'];
	while(list($k, $v) = each($data))
	{
		$post .= rawurlencode($k) . "=" . rawurlencode($v) . "&"; // 转URL标准码
	}
	$post = substr($post, 0, - 1);
	$len = strlen($post);
	$fp = @fsockopen($host, $port, $errno, $errstr, 10);
	if(! $fp)
	{
		return "$errstr ($errno)\n";
	}
	else
	{
		$receive = '';
		$out = "POST $file HTTP/1.1\r\n";
		$out .= "Host: $host\r\n";
		$out .= "Content-type: application/x-www-form-urlencoded\r\n";
		$out .= "Connection: Close\r\n";
		$out .= "Content-Length: $len\r\n\r\n";
		$out .= $post;
		fwrite($fp, $out);
		while(! feof($fp))
		{
			$receive .= fgets($fp, 128);
		}
		fclose($fp);
		$receive = explode("\r\n\r\n", $receive);
		unset($receive[0]);
		return implode("", $receive);
	}
}

function checkSMS ($mobile, $mobile_code)
{
	$arr = array(
		'error' => 0,'msg' => ''
	);
	if(time() - $_SESSION['time'] > 30 * 60)
	{
		unset($_SESSION['mobile_code']);
		$arr['error'] = 1;
		$arr['msg'] = '验证码超过30分钟。';
	}
	else
	{
		if($mobile != $_SESSION['mobile'] or $mobile_code != $_SESSION['mobile_code'])
		{
			$arr['error'] = 1;
			$arr['msg'] = '手机验证码输入错误。';
		}
		else
		{
			$arr['error'] = 2;
		}
	}
	return $arr;
}
?>
