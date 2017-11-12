
  
<?php if ($this->_var['comments']['item_list']): ?>
<div class="comment_list" id="commentList">
<?php $_from = $this->_var['comments']['item_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'value');$this->_foreach['comments'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['comments']['total'] > 0):
    foreach ($_from AS $this->_var['value']):
        $this->_foreach['comments']['iteration']++;
?>
        <div class="content_head">
            
            <div class="comment_star">
            <dl>
            <dt>
           <span> <?php if ($this->_var['value']['hide_username'] == 1): ?>匿名<?php else: ?><?php echo $this->_var['value']['user_name']; ?><?php endif; ?></span><em><img src="themesmobile/ahxcgg_mobile/images/stars<?php echo $this->_var['value']['comment_rank']; ?>.png" alt="<?php echo $this->_var['value']['comment_rank']; ?>" /></em> <div class="comment_time"><?php echo $this->_var['value']['add_time_str']; ?></div>
            </dt>
            <dd>
            <?php echo $this->_var['value']['content']; ?>
            </dd>
            </dl>
            </div>
    
<?php if ($this->_var['value']['shaidan_id']): ?>
    <div class="shaidan">       
<dl>
<dt><span>心&nbsp;&nbsp;得：</span><em>晒单</em></dt>
<dd><?php echo $this->_var['value']['message']; ?></dd>
</dl>
 </div>
 <?php if ($this->_var['value']['shaidan_imgs']): ?>
<div class="sd_img">
        <dl id="gallery">
<?php $_from = $this->_var['value']['shaidan_imgs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'img');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['img']):
?> 
       <dd><a href="./../<?php echo $this->_var['img']['image']; ?>">
               <img src="./../<?php echo $this->_var['img']['thumb']; ?>" width="100px" heigth="100px" style=" border:1px solid #eeeeee">
       </a></dd>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </dl>
       </div>
<?php endif; ?>
<?php endif; ?>

    
 <?php $_from = $this->_var['value']['comment_reps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
 <div class="hufu">
 <dl>
 <dt>客服回复：</dt>
 <dd><?php echo $this->_var['val']['content']; ?></dd>
 </dl>
 </div> 
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
       
        </div>
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php if ($this->_var['comments']['page_count'] != 1): ?> 
<div class="comment_page"> 
<?php if ($this->_var['comments']['page'] != 1): ?>
<a href="javascript:<?php echo $this->_var['comments']['page_prev']; ?>" class="prev"><?php echo $this->_var['lang']['page_prev']; ?></a> 
<?php endif; ?>
<a href="javascript:;" class="prev" ><?php echo $this->_var['comments']['page']; ?>/<?php echo $this->_var['comments']['page_count']; ?></a> 
<?php if ($this->_var['comments']['page'] != $this->_var['comments']['page_count']): ?>
<a href="javascript:<?php echo $this->_var['comments']['page_next']; ?>" class="next" ><?php echo $this->_var['lang']['page_next']; ?></a>
<?php endif; ?>
</div>
<?php endif; ?>
<?php else: ?>

<div class="comment_list" >
<div class="score"><?php echo $this->_var['lang']['no_comments']; ?></div>
</div>
</div>
<?php endif; ?>


