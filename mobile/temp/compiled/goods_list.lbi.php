<?php if ($this->_var['goods_list']): ?>
 <form action="javascript:void(0)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
<div id="J_ItemList" style="opacity: 1;" >
<div class="product single_item info"></div>
  <a href="javascript:;" class="get_more" >
  </a>
</div>
</form>
<script language="javascript" type="text/javascript">  
function goods_cut($val){  
var num_val=document.getElementById('number_'+$val);  
var new_num=num_val.value;  
var Num = parseInt(new_num);  
if(Num>1)Num=Num-1;  
num_val.value=Num;  
} 
function goods_add($val){ 
var num_val=document.getElementById('number_'+$val);  
var new_num=num_val.value;  
var Num = parseInt(new_num);  
Num=Num+1;  
num_val.value=Num;  
}
</script>
<?php else: ?>
<?php if ($this->_var['axqzflag'] == 1): ?>
<p class="goods_title">抱歉暂时没有相关事迹</p>
<?php else: ?>
<p class="goods_title">抱歉暂时没有相关商品</p>
<?php endif; ?>
<?php endif; ?>