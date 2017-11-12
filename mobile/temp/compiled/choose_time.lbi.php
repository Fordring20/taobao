<section class="f_block" id="choose_time" style="height:0px; overflow:hidden;">
<p class="f_title_time"><span>选择送货时间</span><a class="c_close" href="javascript:void(0)" onclick="close_choose_time()"></a></p>
<div class="f_content_time">
<div class="choose-inner">

<div class="gift-table" id="seltimebox">     
 <table  width="100%" bgcolor="#000000" style="border:#dddddd 1px solid; line-height:38px" >
 <tr bgcolor=#f5f5f5>
  <td style="padding-left:10px">时间段</td>
  <?php $_from = $this->_var['week_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'week');if (count($_from)):
    foreach ($_from AS $this->_var['week']):
?>
                  <td align=center><?php echo $this->_var['week']['name']; ?><br>
                    <?php echo $this->_var['week']['week']; ?></td>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </tr>
                <tr >
                  <td bgcolor="#f5f5f5" style="padding-left:10px">9:00--15:00</td>
                  <?php $_from = $this->_var['week_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'week');if (count($_from)):
    foreach ($_from AS $this->_var['week']):
?>
                  <td bgcolor=#ffffff align=center><?php if ($this->_var['week']['time1']): ?><a href="javascript:void(0);" name="<?php echo $this->_var['week']['name']; ?> <?php echo $this->_var['week']['week']; ?> 9:00--15:00" onclick="selTimeSh(this)" >可选</a><?php else: ?>&nbsp;<?php endif; ?></td>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </tr>
                <tr >
                  <td bgcolor="#f5f5f5" style="padding-left:10px">15:00--19:00</td>
                  <?php $_from = $this->_var['week_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'week');if (count($_from)):
    foreach ($_from AS $this->_var['week']):
?>
                  <td bgcolor=#ffffff align=center><?php if ($this->_var['week']['time2']): ?><a href="javascript:void(0);" name="<?php echo $this->_var['week']['name']; ?> <?php echo $this->_var['week']['week']; ?> 15:00--19:00" onclick="selTimeSh(this)" >可选</a><?php else: ?>&nbsp;<?php endif; ?></td>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </tr>
                <tr >
                  <td bgcolor="#f5f5f5" style="padding-left:10px">19:00--22:00</td>
                  <?php $_from = $this->_var['week_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'week');if (count($_from)):
    foreach ($_from AS $this->_var['week']):
?>
                  <td bgcolor=#ffffff align=center><?php if ($this->_var['week']['time3']): ?><a href="javascript:void(0);" name="<?php echo $this->_var['week']['name']; ?> <?php echo $this->_var['week']['week']; ?> 19:00--22:00" onclick="selTimeSh(this)" >可选</a><?php else: ?>&nbsp;<?php endif; ?></td>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </tr>
              </table>

</div>
        
</div>
</div>
</section>