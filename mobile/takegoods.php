<?php

/**
 * ECSHOP 提货券
 * ============================================================================
 * * 版权所有 2005-2015 折翼天使资源社区食品配送服务中心，并保留所有权利。
 * 网站地址: http://www.ahxcjy.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: derek $
 * $Id: takegoods.php 17217 2011-01-19 06:29:08Z derek $
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init_th.php');

$tg_id       = $_SESSION['takegoods_id_ahxcgg'];
$user_id  =  $_SESSION['user_id'];

if (empty($tg_id) || empty($user_id))
{
	//header("Location:user.php?act=tg_login");
}

/*------------------------------------------------------ */
//-- act 操作项的初始化
/*------------------------------------------------------ */
if (empty($_REQUEST['act']))
{
    $_REQUEST['act'] = 'list';
}

/*------------------------------------------------------ */
//-- PROCESSOR
/*------------------------------------------------------ */


/*------------------------------------------------------ */
//-- 退出提货券登录
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'logout')
{
	$_SESSION['takegoods_id_ahxcgg']=0;
	$_SESSION['takegoods_sn_ahxcgg']='';
	header("Location:user.php?act=tg_login");
}

/*------------------------------------------------------ */
//-- 提货券商品列表
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    /* 初始化分页信息 */
    $page         = isset($_REQUEST['page'])   && intval($_REQUEST['page'])  > 0 ? intval($_REQUEST['page'])  : 1;
    $size         = isset($_CFG['page_size'])  && intval($_CFG['page_size']) > 0 ? intval($_CFG['page_size']) : 10;
		

    assign_template();
    $smarty->assign('keywords',    '提货商品列表');
    $smarty->assign('description',   '提货商品列表'); 
    $smarty->assign('page_title',      '提货商品列表');    // 页面标题
    $smarty->assign('ur_here',          '<a href=".">首页</a> &gt; 提货');  // 当前位置
    $smarty->assign('categories',       get_categories_tree());        // 分类树
    $smarty->assign('helps',            get_shop_help());              // 网店帮助
    $smarty->assign('top_goods',        get_top10());                  // 销售排行
    $smarty->assign('promotion_info',   get_promotion_info());         // 促销活动信息


    $sql = "select tg.*, tt.type_money_count,tt.type_money from ".$ecs->table('takegoods')."AS tg left join ".$ecs->table('takegoods_type')."AS tt on tg.type_id = tt.type_id where tg.tg_id='$tg_id' ";
    $rowtg = $db->getRow($sql);
    $rowtg['num_used'] = ($rowtg['used_time'] == 0) ? 0 : count(explode('@',$rowtg['used_time']));
    $rowtg['num_surplus'] = $rowtg['type_money_count'] - $rowtg['num_used'];
	
    $smarty->assign('rowtg',    $rowtg);

    $sql = "select goods_ids from ". $ecs->table('takegoods_goods') ." where tg_id = '$tg_id' ";
	$goods_ids = $db->getOne($sql);
	if (empty($goods_ids))
	{
		$sql = "select goods_ids from ". $ecs->table('takegoods_type_goods') ." where tg_type_id = '$rowtg[type_id]' ";
		$goods_ids = $db->getOne($sql);
	}

	$sql = "select goods_id, goods_name, goods_thumb,shop_price from ". $ecs->table('goods') ." where goods_id ". db_create_in($goods_ids);
	$res = $db->query($sql);
	while ($row=$db->fetchRow($res))
	{
		$row['shop_price'] = price_format($row['shop_price']);
		$row['goods_shortname'] = $GLOBALS['_CFG']['goods_name_length'] > 0 ? sub_str($row['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $row['goods_name'];
		$row['goods_thumb'] = get_image_path($row['goods_id'], $row['goods_thumb'], true);
		$row['goods_url'] =build_uri('goods', array('gid'=>$row['goods_id']), $row['goods_name']);
		$goods_list[] = $row;
	}
	$smarty->assign('goods_list',    $goods_list);


	 $smarty->assign('country_list',       get_regions());
     $smarty->assign('shop_country',       $_CFG['shop_country']);
     $smarty->assign('shop_province_list', get_regions(1, $_CFG['shop_country']));
     $consignee_list[] = array('country' => $_CFG['shop_country']);
     $smarty->assign('name_of_region',   array($_CFG['name_of_region_1'], $_CFG['name_of_region_2'], $_CFG['name_of_region_3'], $_CFG['name_of_region_4']));
     $smarty->assign('consignee_list', $consignee_list);
     $province_list = array();
     foreach ($consignee_list as $region_id => $consignee)
     {
            $consignee['country']  = isset($consignee['country'])  ? intval($consignee['country'])  : 0;
            $consignee['province'] = isset($consignee['province']) ? intval($consignee['province']) : 0;
            $province_list[$region_id] = get_regions(1, $consignee['country']);

     }
     $smarty->assign('province_list', $province_list);

    $smarty->display('takegoods.dwt');
}

/*------------------------------------------------------ */
//-- 提货
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'take')
{
    $goods_id = isset($_POST['goods_id'])  ? intval($_POST['goods_id']) : 0;
	$takegoods_sn_ahxcgg = $_SESSION['takegoods_sn_ahxcgg'];
	$takegoods_id_ahxcgg = isset($_POST['takegoods_id_ahxcgg'])  ? intval($_POST['takegoods_id_ahxcgg']) : 0;
    if (empty($takegoods_id_ahxcgg))
	{
		show_message('错误操作', '返回上一页', 'takegoods.php', 'error');
	}
	else
	{ 
		$sql = "select goods_ids from ". $ecs->table('takegoods_goods') ." where tg_id='$takegoods_id_ahxcgg' ";
		$goods_ids = $db->getOne($sql);
		if (empty($goods_ids))
		{
			$sql = "select tgtg.goods_ids from ". $ecs->table('takegoods') ." AS tg left join ". $ecs->table('takegoods_type_goods') .
				" AS tgtg on tgtg.tg_type_id=tg.type_id ".
				" where tg.tg_id='$takegoods_id_ahxcgg' ";
			$goods_ids = $db->getOne($sql);
		}
		//echo $goods_ids."???".$goods_id;exit;
		if (strstr(",".$goods_ids.",",  ",".$goods_id.",")===FALSE)
		{
			show_message('非法操作，请不要乱来', '返回上一页', 'takegoods.php', 'error');
		}
		$sql = "select tg.used_time, tt.type_money_count from ". $ecs->table('takegoods') ."AS tg left join ".$ecs->table('takegoods_type')."AS tt on tg.type_id = tt.type_id where tg.tg_id='$takegoods_id_ahxcgg' ";
		$take_have = $db->getRow($sql);
		if (!empty($take_have['used_time']) && count(explode('@',$take_have['used_time'])) >= $take_have['type_money_count'])
		{
			show_message('对不起，该提货卡提货次数已用完！', '返回上一页', 'takegoods.php', 'error');
		}
	}
    $add_time = gmtime();
    $goods_name = $db->getOne("select goods_name from ". $ecs->table('goods') . " where goods_id= '$goods_id' ");
	$country = $_POST['country'] ? intval($_POST['country']) : 0;
	$province = $_POST['province'] ? intval($_POST['province']) : 0;
	$city = $_POST['city'] ? intval($_POST['city']) : 0;
	$district = $_POST['district'] ? intval($_POST['district']) : 0;
	$address = $_POST['address'] ? trim($_POST['address']) : '';
	$consignee = $_POST['consignee'] ? trim($_POST['consignee']) : '';
	$mobile = $_POST['mobile'] ? trim($_POST['mobile']) : '';
	$email = $_POST['email'] ? trim($_POST['email']) : '';
	$sql = "insert into ". $ecs->table('takegoods_order') . "(tg_id, tg_sn, user_id, goods_id, goods_name, country, province, city, district, address, consignee,mobile,email,add_time  )".
		" value('$takegoods_id_ahxcgg', '$takegoods_sn_ahxcgg', '$user_id', '$goods_id', '$goods_name', '$country', '$province','$city','$district', '$address', '$consignee' , '$mobile', '$email', '$add_time')";
	$db->query($sql);
	$tg_order_id = $db->insert_id();

	$add_time_sql = "select tg_order_id, used_time from ".$ecs->table('takegoods')." where tg_id='$takegoods_id_ahxcgg'";
	$add_time_db = $db->getRow($add_time_sql);
	if ($add_time_db['used_time'] != 0)
	{
		$tg_order_id = $add_time_db['tg_order_id']."@".$tg_order_id;
		$add_time = $add_time_db['used_time']."@".$add_time;
	}

	$sql = "update ". $ecs->table('takegoods') ." set tg_order_id='$tg_order_id', used_time='$add_time'  where  tg_id='$takegoods_id_ahxcgg' ";
	$db->query($sql);

	if ($_CFG['takegoods_send_email'] =='1' || $_CFG['takegoods_send_sms'] == '1' )
	{
		$take_user_name = $db->getOne("select user_name from ". $ecs->table('users') ." where user_id='$user_id' ");		
		$content1 = '会员 '. $take_user_name .' 于 '.local_date('Y-m-d H:i:s')." 提货成功！请尽快安排发货。";
		$content2 = '恭喜您于 '.local_date('Y-m-d H:i:s')." 提货成功！商家会尽快安排给您发货。";	
		if ($_CFG['takegoods_send_email'] == '1')
		{	
			$admin_email = $db->getOne("select email from ". $ecs->table('admin_user') ." where user_id=1 ");
			send_mail($_CFG['shop_name'], $admin_email, '卡号：'. $takegoods_sn_ahxcgg .' 提货成功', $content1, 0);
			send_mail($_CFG['shop_name'], $email, '卡号：'. $takegoods_sn_ahxcgg .' 提货成功', $content2, 0);
		}
		if ($_CFG['takegoods_send_sms'] == '1' )
		{
			
            include_once('send.php');
			sendSMS($_CFG['sms_shop_mobile'],$content1);
			sendSMS($mobile,$content2);
		}
	}    
	
    
	 $country_name = $db->getOne("select region_name from ". $ecs->table('region') ." where region_id='$country' "); 
	 $province_name = $db->getOne("select region_name from ". $ecs->table('region') ." where region_id='$province' "); 
	 $city_name = $db->getOne("select region_name from ". $ecs->table('region') ." where region_id='$city' "); 
	 $district_name = $db->getOne("select region_name from ". $ecs->table('region') ." where region_id='$district' "); 


	show_message('提货成功，货品将配送到'. $country_name .' '.$province_name.' '. $city_name. ' '.$district_name.' '.$address.'，请注意查收', '去购物', '.');

}

/*------------------------------------------------------ */
//--  兑换
/*------------------------------------------------------ */

elseif ($_REQUEST['act'] == 'buy')
{
    
}

/*------------------------------------------------------ */
//-- PRIVATE FUNCTION
/*------------------------------------------------------ */


/**
 * 获得积分兑换商品的详细信息
 *
 * @access  public
 * @param   integer     $goods_id
 * @return  void
 */
function get_exchange_goods_info($goods_id)
{
    $time = gmtime();
    $sql = 'SELECT g.*, c.measure_unit, b.brand_id, b.brand_name AS goods_brand, eg.exchange_integral, eg.is_exchange ' .
            'FROM ' . $GLOBALS['ecs']->table('goods') . ' AS g ' .
            'LEFT JOIN ' . $GLOBALS['ecs']->table('exchange_goods') . ' AS eg ON g.goods_id = eg.goods_id ' .
            'LEFT JOIN ' . $GLOBALS['ecs']->table('category') . ' AS c ON g.cat_id = c.cat_id ' .
            'LEFT JOIN ' . $GLOBALS['ecs']->table('brand') . ' AS b ON g.brand_id = b.brand_id ' .
            "WHERE g.goods_id = '$goods_id' AND g.is_delete = 0 " .
            'GROUP BY g.goods_id';

    $row = $GLOBALS['db']->getRow($sql);

    if ($row !== false)
    {
        /* 处理商品水印图片 */
        $watermark_img = '';

        if ($row['is_new'] != 0)
        {
            $watermark_img = "watermark_new";
        }
        elseif ($row['is_best'] != 0)
        {
            $watermark_img = "watermark_best";
        }
        elseif ($row['is_hot'] != 0)
        {
            $watermark_img = 'watermark_hot';
        }

        if ($watermark_img != '')
        {
            $row['watermark_img'] =  $watermark_img;
        }

        /* 修正重量显示 */
        $row['goods_weight']  = (intval($row['goods_weight']) > 0) ?
            $row['goods_weight'] . $GLOBALS['_LANG']['kilogram'] :
            ($row['goods_weight'] * 1000) . $GLOBALS['_LANG']['gram'];

        /* 修正上架时间显示 */
        $row['add_time']      = local_date($GLOBALS['_CFG']['date_format'], $row['add_time']);

        /* 修正商品图片 */
        $row['goods_img']   = get_image_path($goods_id, $row['goods_img']);
        $row['goods_thumb'] = get_image_path($goods_id, $row['goods_thumb'], true);

        return $row;
    }
    else
    {
        return false;
    }
}

function insert_cart_infoth()
{
	$sql_where = $_SESSION['user_id']>0 ? "c.user_id='". $_SESSION['user_id'] ."' " : "c.session_id = '" . SESS_ID . "' AND c.user_id=0 ";
    $sql = 'SELECT c.*,g.goods_name,g.goods_thumb,g.goods_id,c.goods_number,c.goods_price' .
           ' FROM ' . $GLOBALS['ecs']->table('cartth') ." AS c ".
					 " LEFT JOIN ".$GLOBALS['ecs']->table('goods')." AS g ON g.goods_id=c.goods_id ".
           " WHERE $sql_where AND rec_type = '" . CART_GENERAL_GOODS . "'";
    $row = $GLOBALS['db']->GetAll($sql);
		$arr = array();
		foreach($row AS $k=>$v)
		{
				$arr[$k]['goods_thumb']  =get_pc_url().'/'.get_image_path($v['goods_id'], $v['goods_thumb'], true);
        $arr[$k]['short_name']   = $GLOBALS['_CFG']['goods_name_length'] > 0 ?
                                               sub_str($v['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $v['goods_name'];
				$arr[$k]['url']          = build_uri('goods', array('gid' => $v['goods_id']), $v['goods_name']);
				$arr[$k]['goods_number'] = $v['goods_number'];
				$arr[$k]['goods_name']   = $v['goods_name'];
				$arr[$k]['goods_price']  = price_format($v['goods_price']);
				$arr[$k]['rec_id']       = $v['rec_id'];
		}		
    $sql = 'SELECT SUM(goods_number) AS number, SUM(goods_price * goods_number) AS amount' .
           ' FROM ' . $GLOBALS['ecs']->table('cartth') ." AS c ".
           " WHERE $sql_where AND rec_type = '" . CART_GENERAL_GOODS . "'";
    $row = $GLOBALS['db']->GetRow($sql);

    if ($row)
    {
        $numberth = intval($row['number']);
        $amountth = floatval($row['amountb']);
    }
    else
    {
        $numberth = 0;
        $amountth = 0;
    }

    $strth = sprintf($GLOBALS['_LANG']['cart_infoth'], $numberth, price_format($amountth, false));

    return $strth;
}
?>
