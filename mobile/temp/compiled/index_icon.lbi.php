

<link rel="stylesheet" href="jsnew/tab/css/xcap.css" type="text/css">
<div class="xcwrap" style="display:none;">
    
    <div>
        <div>
        <div>
          <div class="entry-list clearfix">
	<nav>
		<ul>
			<?php $_from = $this->_var['menu_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['list']):
        $this->_foreach['name']['iteration']++;
?>
            <?php if (($this->_foreach['name']['iteration'] - 1) <= 3): ?>
			<li>
				<a href="<?php echo $this->_var['list']['menu_url']; ?>">
					<img alt="<?php echo $this->_var['list']['menu_name']; ?>" src="<?php echo $this->_var['list']['menu_img']; ?>"  />
					<span><?php echo $this->_var['list']['menu_name']; ?></span>
				</a>
			</li><?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</ul>
	</nav>
</div>
          </div>
        <div class="swiper-slide" style="display:none;">
          <div class="entry-list clearfix">
	<nav>
		<ul>
			<?php $_from = $this->_var['menu_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['list']):
        $this->_foreach['name']['iteration']++;
?>
            <?php if (($this->_foreach['name']['iteration'] - 1) > 9 & $this->_foreach['name']['iteration'] < 21): ?>
			<li>
				<a href="<?php echo $this->_var['list']['menu_url']; ?>">
					<img alt="<?php echo $this->_var['list']['menu_name']; ?>" src="<?php echo $this->_var['list']['menu_img']; ?>"  />
					<span><?php echo $this->_var['list']['menu_name']; ?></span>
				</a>
			</li><?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</ul>
	</nav>
</div>
          </div>
        
      </div>
   </div>
</div>
 
<script src="jsnew/tab/js/idangerous.swiper.min.js"></script> 
<script>
var tabsSwiper = new Swiper('.swiper-container',{
	speed:500,
	onSlideChangeStart: function(){
		$(".tabs .active").removeClass('active');
		$(".tabs a").eq(tabsSwiper.activeIndex).addClass('active');
	}
});

$(".tabs a").on('touchstart mousedown',function(e){
	e.preventDefault()
	$(".tabs .active").removeClass('active');
	$(this).addClass('active');
	tabsSwiper.swipeTo($(this).index());
});

$(".tabs a").click(function(e){
	e.preventDefault();
});
</script>


</div>