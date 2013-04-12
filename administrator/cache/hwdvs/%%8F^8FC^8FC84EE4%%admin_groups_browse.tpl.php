<?php /* Smarty version 2.6.26, created on 2013-04-09 21:52:56
         compiled from admin_groups_browse.tpl */ ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="editcell">
  <table class="adminlist">
    <thead>
      <tr>
        <th width="5" class="title"></th>
        <th width="5"><input type="checkbox" name="toggle" value="" onClick="checkAll(<?php echo $this->_tpl_vars['totalgroups']; ?>
);" /></th>
        <th align="left" class="title"><?php echo @_HWDVIDS_TITLE; ?>
</th>
        <th align="left" class="title"><?php echo @_HWDVIDS_DESC; ?>
</th>
        <th align="left" class="title"><?php echo @_HWDVIDS_ACCESS; ?>
</th>
        <th align="left" class="title"><?php echo @_HWDVIDS_DATECREATED; ?>
</th>
        <th align="left" class="title"><?php echo @_HWDVIDS_GRPMEMS; ?>
</th>
        <th align="left" class="title"><?php echo @_HWDVIDS_GRPVIDS; ?>
</th>
        <th width="50" align="center" class="title"><?php echo @_HWDVIDS_FEATURED; ?>
</th>
        <th width="50" align="center" class="title"><?php echo @_HWDVIDS_PUB; ?>
</th>
      </tr>
    </thead>
    <tbody>
      <?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['outer'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['outer']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['data']):
        $this->_foreach['outer']['iteration']++;
?>
      <tr class = "row<?php echo $this->_tpl_vars['data']->k; ?>
">
        <td width = "20" align = "right"><?php echo $this->_tpl_vars['k']+1; ?>
</td>
        <td><?php echo $this->_tpl_vars['data']->checked; ?>
</td>
        <td><?php echo $this->_tpl_vars['data']->title; ?>
</td>
        <td><?php echo $this->_tpl_vars['data']->description; ?>
</td>
        <td><?php echo $this->_tpl_vars['data']->access; ?>
</td>
        <td><?php echo $this->_tpl_vars['data']->date; ?>
</td>
        <td><?php echo $this->_tpl_vars['data']->total_members; ?>
</td>
        <td><?php echo $this->_tpl_vars['data']->total_videos; ?>
</td>
        <td><a href="javascript: void(0);" onclick="return listItemTask('cb<?php echo $this->_tpl_vars['data']->i; ?>
','<?php echo $this->_tpl_vars['data']->featured_task; ?>
')"><img src="<?php echo $this->_tpl_vars['data']->featured_img; ?>
" width="12" height="12" border="0" alt="" /></a></td>
        <td><a href="javascript: void(0);" onclick="return listItemTask('cb<?php echo $this->_tpl_vars['data']->i; ?>
','<?php echo $this->_tpl_vars['data']->published_task; ?>
')"><img src="<?php echo $this->_tpl_vars['data']->published_img; ?>
" width="12" height="12" border="0" alt="" /></a></td>
      </tr>
      <?php endforeach; endif; unset($_from); ?>
    </tbody>
    <tfoot>
      <tr><td colspan="10" align="center"><?php echo $this->_tpl_vars['writePagesLinks']; ?>
<br /><?php echo $this->_tpl_vars['writePagesCounter']; ?>
</td></tr>
    </tfoot>
  </table>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>