<?php if (!defined('THINK_PATH')) exit();?>
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <div class="table-responsive cl">
             <table  class="table table-bordered table-hover">
                 <tr　>
                     <th class='css'>姓名</th>
                     <th class='css'>电话</th>
                     <th class='css'>登入时间</th>
                     <th class='css'>IP地址</th>
                     <th class='css'>操作</th>
                 </tr>
                 <?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                     <td class='css'><?php echo ($v["aname"]); ?></td>
                     <td class='css'><?php echo ($v["tel"]); ?></td>
                     <td class='css'><?php echo (date("y-m-d H:i",$v["ltime"])); ?></td>
                     <td class='css'><?php echo ($v["lip"]); ?></td>
                     <td class='css'>
                         <a  class='glyphicon glyphicon-trash del' data-aid=<?php echo ($v["aid"]); ?>></a>    　
                         <a  class='glyphicon glyphicon-pencil edit' data-aid=<?php echo ($v["aid"]); ?> data-aname=<?php echo ($v["aname"]); ?> data-pwd=<?php echo ($v["pwd"]); ?> data-tel=<?php echo ($v["tel"]); ?>></a>
                     </td>
                 </tr><?php endforeach; endif; else: echo "" ;endif; ?>
             </table>
            
         </div>
        <ul id="page"  class="pagination">
                
        </ul>
    <div class="col-lg-3"></div>
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="/Application/Admin/Public/Js/jqPaginator.js"></script>
    <script>
        $('#page').jqPaginator({
    totalPages: 20,
    visiblePages: 5,
    currentPage: 1,
    onPageChange: function(num) {
        
    }
});
    </script>