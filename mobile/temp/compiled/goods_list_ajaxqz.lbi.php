<?php if ($this->_var['article']['article_id']): ?>

<li style="background-color: #ffffff; border-bottom: 1px solid #F0F0F0; height: 121px;">
    <div style="width: 100%; height: 121px;">
        <div style="<?php if ($this->_var['article']['img_url']): ?>width: 60%;<?php else: ?>width: 95%;<?php endif; ?> padding: 10px; float: left;">
            <div onclick="onselShijiInfo(<?php echo $this->_var['article']['article_id']; ?>)">
	            <p style="font-size: 16px; font-weight: bold; color: #333333; line-height: 16px; margin-bottom: 5px; width: 100%; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?php echo $this->_var['article']['title']; ?></p>
	            <p class="p2"><?php echo $this->_var['article']['description']; ?></p>
            </div>
            <p style="font-size: 14px;">
                <span id="axcount_<?php echo $this->_var['article']['article_id']; ?>" style="color: #FF0000;"><?php echo $this->_var['axcount']; ?></span>&nbsp;份爱心&nbsp;&nbsp;&nbsp;&nbsp;
                
                <span id="axspansel_<?php echo $this->_var['article']['article_id']; ?>" style="color: #FF0000;<?php if ($this->_var['iszhichi'] == 0): ?>display: none;<?php endif; ?>"><img src="themesmobile/ahxcgg_mobile/images/ax_sel.png" width="18px" height="18px">已支持</span>

                <span id="axspanunsel_<?php echo $this->_var['article']['article_id']; ?>" style="color: #FF0000;<?php if ($this->_var['iszhichi'] == 1): ?>display: none;<?php endif; ?>" onclick="onXianax(<?php echo $this->_var['article']['article_id']; ?>)"><img id="aximg_<?php echo $this->_var['article']['article_id']; ?>" src="themesmobile/ahxcgg_mobile/images/ax_unsel.png" width="18px" height="18px">献爱心</span>

            </p>
        </div>
        <?php if ($this->_var['article']['img_url']): ?>
        <div style="width: 32%; height: 120px; float: left;" onclick="onselShijiInfo(<?php echo $this->_var['article']['article_id']; ?>)">
            <img src="../<?php echo $this->_var['article']['img_url']; ?>" style="width: 100%; height: 80%; margin-top: 10%;">
        </div>
        <?php endif; ?>
    </div>
</li>

<?php endif; ?>
	
