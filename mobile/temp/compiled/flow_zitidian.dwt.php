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
<link rel="stylesheet" href="themesmobile/ahxcgg_mobile/css/public.css">
<link rel="stylesheet" href="themesmobile/ahxcgg_mobile/css/flow.css">
<link rel="stylesheet" href="themesmobile/ahxcgg_mobile/css/style_jm.css">
<script type="text/javascript" src="themesmobile/ahxcgg_mobile/js/jquery.js"></script>
<script type="text/javascript" src="themesmobile/ahxcgg_mobile/js/ecsmart.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,utils.js,shopping_flow.js')); ?>

<style type="text/css">
  p {
    overflow: hidden; /*自动隐藏文字*/
    text-overflow: ellipsis;/*文字隐藏后添加省略号*/
    white-space: nowrap;/*强制不换行*/
  }

  .selAddr {
    text-align: center;
    font-size: 20px;
    color: #fff;
    width: 100%;
    height: 48px;
    background-color: #FF0000;
    border: none;
    outline: none;
  }
  .selAddr:link    {background-color: #FF0000;}
  .selAddr:visited {background-color: #FF0000;}
  .selAddr:hover   {background-color: #FF0000;}
  .selAddr:active  {background-color: #FC2525;}
</style>

</head>
<body style="background:#e5e5e5;">

<div class="tab_nav">
  <div class="header" style="position:relative; border-bottom:1px solid #CCC;">
    <div class="h-left"> <a class="sb-back" href="flow.php?step=checkout" title="返回"></a> </div>
    <div class="h-mid">选择提货点</div>
    <div style="font-size:12px; color:#000; line-height:40px; position:absolute; top:6px; right:10px; display: none;">网点申报</div>
  </div>
</div>

<div style="width: 100%; height: 40px; border-bottom: 1px solid #ccc; background-color: #fff;">
  <div style="width: 33%; text-align: center; float: left;">
    <select id="sheng" style="line-height: 38px; background-color: #fff; color: #999; outline: none;" onchange="selectSheng()">
      <option value="0">请选择</option>
      <?php $_from = $this->_var['sheng']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'sh');$this->_foreach['gsheng'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['gsheng']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['sh']):
        $this->_foreach['gsheng']['iteration']++;
?>
      <option value="<?php echo $this->_var['sh']['region_id']; ?>" <?php if ($this->_var['selsheng'] == $this->_var['sh']['region_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_var['sh']['region_name']; ?></option>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </select>
  </div>
  <div style="width: 33%; text-align: center; float: left;">
    <select id="shi" style="line-height: 38px; background-color: #fff; color: #999; outline: none;" onchange="selectShi()">
      <option value="0">请选择</option>
      <?php $_from = $this->_var['shi']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'sh');$this->_foreach['gsheng'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['gsheng']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['sh']):
        $this->_foreach['gsheng']['iteration']++;
?>
      <option value="<?php echo $this->_var['sh']['region_id']; ?>" <?php if ($this->_var['selshi'] == $this->_var['sh']['region_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_var['sh']['region_name']; ?></option>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </select>
  </div>
  <div style="width: 33%; text-align: center; float: left;">
    <select id="qu" style="line-height: 38px; background-color: #fff; color: #999; outline: none;" onchange="selectQu()">
      <option value="0">请选择</option>
      <?php $_from = $this->_var['qu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'sh');$this->_foreach['gsheng'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['gsheng']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['sh']):
        $this->_foreach['gsheng']['iteration']++;
?>
      <option value="<?php echo $this->_var['sh']['region_id']; ?>" <?php if ($this->_var['selqu'] == $this->_var['sh']['region_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_var['sh']['region_name']; ?></option>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </select>
  </div>
</div>

<div style="height: 40px; border-bottom: 1px solid #ccc; background-color: #fff; padding-left: 15px; padding-right: 15px; text-align: center;">
  <input type="text" id="keyword" name="keyword" placeholder="请输入名称" style="background-color: #F2F2F2; width: 80%; height: 32px; margin-top: 4px; border-radius: 5px; padding-left: 10px; ">
  <img src="themesmobile/ahxcgg_mobile/images/soso.png" style="background-color: #F2F2F2; margin-top: 4px; border-radius: 5px;" onclick="onSoPoint()">
</div>

<?php $_from = $this->_var['ppoint']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'p');$this->_foreach['point'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['point']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['p']):
        $this->_foreach['point']['iteration']++;
?>
<div style="padding: 0 15px; margin: 0 auto; height: 185px;">
  <div style="width: 10%; height: 170px; text-align: left; margin-top: 10px; float: left;" onclick="onSelPoint(<?php echo $this->_var['p']['id']; ?>, <?php echo $this->_var['pcount']; ?>)">
    <img id="selpoint_<?php echo $this->_var['p']['id']; ?>" src="themesmobile/ahxcgg_mobile/images/radio_unsel.png" data-selpoint=0 style="margin-top: 70px;">
  </div>
  <div style="width: 90%; height: 170px; background-color: #F2F2F2; border-radius: 5px; padding-top: 5px; margin-top: 10px; float: left;">
    <div style="width: 30%; height: 120px; padding: 5px; float: left;">
      <img src="<?php echo $this->_var['p']['img_url']; ?>" style="width: 100%; height: 100%;">
    </div>
    <div style="float: left; width: 60%; padding-top: 5px; padding-left: 10px;">
      <p style="font-size: 18px; font-weight: bold;"><?php echo $this->_var['p']['shop_name']; ?></p>
      <p><img src="themesmobile/ahxcgg_mobile/images/placepot.png" style="width: 14px; height: 14px;"><span style="font-size: 14px; margin-left: 10px;"><?php echo $this->_var['p']['address']; ?></span></p>
      <p><img src="themesmobile/ahxcgg_mobile/images/jingli.png" style="width: 14px; height: 14px;"><span style="font-size: 14px; margin-left: 10px;"><?php echo $this->_var['p']['contact']; ?></span></p>
      <p><img src="themesmobile/ahxcgg_mobile/images/zan.png" style="width: 14px; height: 14px;"><span style="font-size: 14px; margin-left: 10px;">0</span></p>
      <p style="margin-top: -2px;"><img src="themesmobile/ahxcgg_mobile/images/yyshijian.png" style="width: 18px; height: 18px;"><span style="font-size: 12px; margin-left: 6px;"><?php if (empty ( $this->_var['p']['thshijian'] )): ?>全天<?php else: ?><?php echo $this->_var['p']['thshijian']; ?><?php endif; ?></span></p>
    </div>
    <div style="width: 100%; height: 40px; background-color: #CCC; margin-top: 130px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;">
      <div style="width: 50%; height: 40px; border-right: 1px solid #fff; float: left;">
        <p style="line-height: 40px; text-align: center;"><a href="tel:<?php echo $this->_var['p']['phone']; ?>"><img src="themesmobile/ahxcgg_mobile/images/phonemobile.png"><?php echo $this->_var['p']['phone']; ?></a></p>
      </div>
      <div style="width: 49%; height: 40px; float: left;">
        <p style="line-height: 40px; text-align: center;"><a href="flow.php?step=zitidianditu&id=<?php echo $this->_var['p']['id']; ?>"><img src="themesmobile/ahxcgg_mobile/images/lookditu.png">查看地图</a></p>
      </div>
    </div>
  </div>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

<div style="width: 100%; height: 60px;">
</div>

<div style="width: 100%; height: 48px; position: fixed !important; bottom: 0 !important; left: 0 !important;">
  <button class="selAddr" onclick="onSelAddr()">使用该提货点</button>
</div>

<script type="text/javascript">
  var selid = 0;
  function onSelPoint(id, count)
  {
    <?php $_from = $this->_var['ppoint']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'p');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['p']):
?>
      if (<?php echo $this->_var['p']['id']; ?> != id)
      {
        $("#selpoint_"+<?php echo $this->_var['p']['id']; ?>).attr("src", "themesmobile/ahxcgg_mobile/images/radio_unsel.png");
        $("#selpoint_"+<?php echo $this->_var['p']['id']; ?>).attr("data-selpoint", "0");
      }
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

    var sel = $("#selpoint_"+id).attr("data-selpoint");
    if (sel == 0)
    {
      $("#selpoint_"+id).attr("src", "themesmobile/ahxcgg_mobile/images/radio_sel.png");
      $("#selpoint_"+id).attr("data-selpoint", "1");
      selid = id;
    }
    else
    {
      $("#selpoint_"+id).attr("src", "themesmobile/ahxcgg_mobile/images/radio_unsel.png");
      $("#selpoint_"+id).attr("data-selpoint", "0");
      selid = 0;
    }
    
  }

  function selectSheng()
  {
    var sheng = $("#sheng").val();
    if (sheng <= 0)
    {
      return;
    }

    window.location.href = "flow.php?step=zitidian&province="+sheng;
  }

  function selectShi()
  {
    var sheng = $("#sheng").val();
    var shi = $("#shi").val();
    if (sheng <= 0 || shi <= 0)
    {
      return;
    }

    window.location.href = "flow.php?step=zitidian&province="+sheng+"&city="+shi;
  }

  function selectQu()
  {
    var sheng = $("#sheng").val();
    var shi = $("#shi").val();
    var qu = $("#qu").val();
    if (sheng <= 0 || shi <= 0 || qu <= 0)
    {
      return;
    }
    window.location.href = "flow.php?step=zitidian&province="+sheng+"&city="+shi+"&district="+qu;
  }

  function onSelAddr()
  {
    if (selid <= 0)
    {
      alert("请选择提货点！");
      return;
    }
    window.location.href = "flow.php?step=checkout&point="+selid;
  }

  function onSoPoint()
  {
    var sheng = $("#sheng").val();
    var shi = $("#shi").val();
    var qu = $("#qu").val();
    var keyword = $("#keyword").val();
    if (keyword == "" || keyword == undefined || keyword == null)
    {
      return;
    }
    var url = "flow.php?step=zitidian";
    if (sheng > 0)
    {
      url += "&province="+sheng;
    }
    if (shi > 0)
    {
      url += "&city="+shi;
    }
    if (qu > 0)
    {
      url += "&district="+qu;
    }
    url += "&keyword="+keyword;
    window.location.href = url;
  }

</script>

</body>
</html>
