
<div id="tell_me_form" style="display:none;">
  <div class="tell_me_con">
<div style="background:#FFFDEE ;border:1px dotted #ff3300;line-height:20px; font-weight:normal; padding:10px; margin-top:10px;">
            <p style="font-size:16px;color:#F52648;"><?php echo sub_str($this->_var['goods']['goods_name'],20); ?></p>
           <p style="font-size:12px;color:#999;"> 当商品进行补货时，我们将以短信、邮件的形式通知您，最多发送一次，不会对您造成干扰。</p>
 </div>
 <ul>
 <li><span><font color=#ff3300>*</font>数量：</span><em><input type="text" value="1" id="book_number" /></em></li>
 <li><span><font color=#ff3300>*</font>手机号码：</span><em><input type="text" value="" id="phone_num" /></em></li>
 <li><span><font color=#ff3300>*</font>电子邮箱：</span><em><input type="text" value="" id="arrival_email" /></em></li>
 <li><input type="button" value="提交" onclick="tell_me1(<?php echo $this->_var['goods']['goods_id']; ?>)" class="tell_btn"/></li>
 </ul>
  </div>
</div>