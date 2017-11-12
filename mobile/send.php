<?php
header("Content-Type:text/html;charset=utf-8");
/*--------------------------------
功能:HTTP接口 发送短信
修改日期:	2009-04-08
说明:		http://http.yunsms.cn/tx/?uid=用户账号&pwd=MD5位32密码&mobile=号码&content=内容
状态:
	100 发送成功
	101 验证失败
	102 短信不足
	103 操作失败
	104 非法字符
	105 内容过多
	106 号码过多
	107 频率过快
	108 号码内容空
	109 账号冻结
	110 禁止频繁单条发送
	111 系统暂定发送
	112	有错误号码
	113	定时时间不对
	114	账号被锁，10分钟后登录
	115	连接失败
	116 禁止接口发送
	117	绑定IP不正确
	120 系统升级
--------------------------------*/
//$uid = '9999';		//用户账号
//$pwd = '9999';		//密码
//$mobile	 = '13912341234,13312341234,13512341234,02122334444';	//号码
//$content = '你好，验证码：1019【云信】';		//内容
//即时发送
//$res = sendSMS($uid,$pwd,$mobile,$content);
//echo $res;

//定时发送
/*
$time = '2010-05-27 12:11';
$res = sendSMS($uid,$pwd,$mobile,$content,$time);
echo $res;
*/
function sendSMS($mobile,$content,$time='',$mid='')
{
	$content = iconv('utf-8','gbk',$content);
	$http = 'http://http.yunsms.cn/tx/';
	$uid = '191413'; // 用户账号
	$pwd = 'Jiakai123456'; // 密码
	$data = array
		(
		'uid'=>$uid,					//用户账号
		'pwd'=>strtolower(md5($pwd)),	//MD5位32密码
		'mobile'=>$mobile,				//号码
		'content'=>$content,			//内容 如果对方是utf-8编码，则需转码iconv('gbk','utf-8',$content); 如果是gbk则无需转码
		'time'=>$time,		//定时发送
		'mid'=>$mid						//子扩展号
		);
	$re= postSMS($http,$data);			//POST方式提交
	if( trim($re) == '100' )
	{
		return "发送成功!";
	}
	else
	{
		return "发送失败! 状态：".$re;
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

function postSMS($url,$data='')
{
	$port = $post = '';
	$row = parse_url($url);
	$host = $row['host'];
	$port = isset($row['port']) ? $row['port']:80;
	$file = $row['path'];
	while (list($k,$v) = each($data))
	{
		$post .= rawurlencode($k)."=".rawurlencode($v)."&";	//转URL标准码
	}
	$post = substr( $post , 0 , -1 );
	$len = strlen($post);
	$fp = @fsockopen( $host ,$port, $errno, $errstr, 10);
	if (!$fp) {
		return "$errstr ($errno)\n";
	} else {
		$receive = '';
		$out = "POST $file HTTP/1.1\r\n";
		$out .= "Host: $host\r\n";
		$out .= "Content-type: application/x-www-form-urlencoded\r\n";
		$out .= "Connection: Close\r\n";
		$out .= "Content-Length: $len\r\n\r\n";
		$out .= $post;
		fwrite($fp, $out);
		while (!feof($fp)) {
			$receive .= fgets($fp, 128);
		}
		fclose($fp);
		$receive = explode("\r\n\r\n",$receive);
		unset($receive[0]);
		return implode("",$receive);
	}
}
?>