
<div class="f_title_attr">
<img  id="ECS_GOODS_ATTR_THUMB" src="<?php echo $this->_var['goods']['goods_thumb']; ?>" style=" float:left;">
<div class="f_title_arr_r">
<span>价格：<i id="ECS_GOODS_AMOUNT_CHOOSE">0</i></span>
<span>库存：<i id="ECS_GOODS_NUMBER">0</i>件</span>
<span id="ECS_GOODS_ATTR"></span>
</div>
<a class="c_close_attr" href="javascript:void(0)" onclick="close_choose_attr();"></a>
<div style="height:0px; line-height:0px; clear:both;"></div>
</div>
<div class="f_content_attr">
<ul class="navContent" style="display:block;"> 
<?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');$this->_foreach['specification'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['specification']['total'] > 0):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
        $this->_foreach['specification']['iteration']++;
?>
<li>   
<div class="title"><?php echo $this->_var['spec']['name']; ?></div>
          <div class="item">
          <?php if ($this->_var['spec']['attr_type'] == 1): ?>
          <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
          <a <?php if ($this->_var['key'] == 0): ?>class="hover"<?php endif; ?>  href="javascript:;"  name="<?php echo $this->_var['value']['id']; ?>" onclick="changeAtt(this);" for="spec_value_<?php echo $this->_var['value']['id']; ?>" title="<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php echo $this->_var['value']['format_price']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?>"><input style="display:none" id="spec_value_<?php echo $this->_var['value']['id']; ?>" type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> />
          <?php echo $this->_var['value']['label']; ?>  <?php if ($this->_var['value']['price'] > 0): ?><font>+ <?php echo $this->_var['value']['format_price']; ?></font><?php elseif ($this->_var['value']['price'] < 0): ?><font>- <?php echo $this->_var['value']['format_price']; ?></font><?php endif; ?>
          
          </a>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <?php else: ?>
          <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
          <a <?php if ($this->_var['key'] == 0): ?>class="hover"<?php endif; ?> href="javascript:;" name="<?php echo $this->_var['value']['id']; ?>" onclick="changeAtt1(this)" for="spec_value_<?php echo $this->_var['value']['id']; ?>" title="<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php echo $this->_var['value']['format_price']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?>"><input type="checkbox" style=" display:none" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?>/>
		<?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?><font>+ <?php echo $this->_var['value']['format_price']; ?></font><?php elseif ($this->_var['value']['price'] < 0): ?><font>- <?php echo $this->_var['value']['format_price']; ?></font><?php endif; ?>
           </a>
           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
           <?php endif; ?>
          </div>                    
    </li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
<li style=" border-bottom:1px solid #eeeeee">
        <div class="title1">购买数量</div>
        <div class="item1">
         <script language="javascript" type="text/javascript">  function goods_cut(){var num_val=document.getElementById('number');  var new_num=num_val.value;  var Num = parseInt(new_num);  if(Num>1)Num=Num-1;  num_val.value=Num;}  function goods_add(){var num_val=document.getElementById('number');  var new_num=num_val.value;  var Num = parseInt(new_num);  Num=Num+1;  num_val.value=Num;} </script>
         <span class="ui-number">
          <button type="button" class="decrease" onclick="goods_cut();changePrice();"></button>
          <input type="number" class="num" id="number" onblur="changePrice();" name="number" value="1" min="1" style=" text-align:center"/>
          <button type="button" class="increase" onclick="goods_add();changePrice();"></button>
          </span>
         <?php if ($this->_var['tag'] == 1): ?><em>限购数量：<?php echo $this->_var['goods']['buymax']; ?></em><?php endif; ?>
      </div>
      
    </li>        
</ul>
</div>
<div class="f_foot">
<input type="submit"  border="0" class="add_gift_attr" value="提交" />
<div style=" height:30px"></div>
</div>

