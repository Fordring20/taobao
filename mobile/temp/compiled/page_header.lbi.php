<?php 
$k = array (
  'name' => 'add_url_uid',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
<script language="javascript"> 
<!--
/*屏蔽所有的js错误*/
function killerrors() { 
return true; 
} 
window.onerror = killerrors; 
//-->

function checkSearchForm()
{
    if(document.getElementById('searchtype').value == 0){
        if(document.getElementById('keyword').value != '' && document.getElementById('keyword').value != '请输入关键词')
        {
            return true;
        }
        else
        {
             alert("请输入关键词！");
            return false;
        }
    }else{
        if(document.getElementById('keyword').value == '' || document.getElementById('keyword').value == '请输入关键词'){
               document.getElementById('keyword').value = '';
               return true; 
        }
    }
}
</script>
<a href="catalog.php" class="top_bt" style="display:none;"></a>
<a href="flow.php" class='user_btn' style="display:none;"></a>
<span href="javascript:void(0)" class="logo"><?php echo sub_str($this->_var['shop_name'],10); ?></span>
