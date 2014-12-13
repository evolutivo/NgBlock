<?php /* Smarty version 2.6.18, created on 2014-12-11 15:53:45
         compiled from ListViewButtons.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getTranslatedString', 'ListViewButtons.tpl', 27, false),array('modifier', 'vtiger_imageurl', 'ListViewButtons.tpl', 37, false),)), $this); ?>
<?php $_from = $this->_tpl_vars['BUTTONS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['button_check'] => $this->_tpl_vars['button_label']):
?>
	<?php if ($this->_tpl_vars['button_check'] == 'del'): ?>
		<input class="crmbutton small delete" type="button" value="<?php echo $this->_tpl_vars['button_label']; ?>
" onclick="return massDelete('<?php echo $this->_tpl_vars['MODULE']; ?>
')"/>
	<?php elseif ($this->_tpl_vars['button_check'] == 'mass_edit'): ?>
		<input class="crmbutton small edit" type="button" value="<?php echo $this->_tpl_vars['button_label']; ?>
" onclick="return mass_edit(this, 'massedit', '<?php echo $this->_tpl_vars['MODULE']; ?>
', '<?php echo $this->_tpl_vars['CATEGORY']; ?>
')"/>
	<?php elseif ($this->_tpl_vars['button_check'] == 's_mail'): ?>
		<input class="crmbutton small edit" type="button" value="<?php echo $this->_tpl_vars['button_label']; ?>
" onclick="return eMail('<?php echo $this->_tpl_vars['MODULE']; ?>
',this);"/>
	<?php elseif ($this->_tpl_vars['button_check'] == 's_cmail'): ?>
		<input class="crmbutton small edit" type="submit" value="<?php echo $this->_tpl_vars['button_label']; ?>
" onclick="return massMail('<?php echo $this->_tpl_vars['MODULE']; ?>
')"/>
	<?php elseif ($this->_tpl_vars['button_check'] == 'mailer_exp'): ?>
		<input class="crmbutton small edit" type="submit" value="<?php echo $this->_tpl_vars['button_label']; ?>
" onclick="return mailer_export()"/>
		<?php elseif ($this->_tpl_vars['button_check'] == 'c_owner' && $this->_tpl_vars['MODULE'] == 'Calendar'): ?>
		<input class="crmbutton small edit" type="button" value="<?php echo $this->_tpl_vars['button_label']; ?>
" onclick="return change(this,'changeowner')"/>
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>

<?php if ($this->_tpl_vars['CUSTOM_LINKS'] && $this->_tpl_vars['CUSTOM_LINKS']['LISTVIEWBASIC']): ?>
	<?php $_from = $this->_tpl_vars['CUSTOM_LINKS']['LISTVIEWBASIC']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['CUSTOMLINK']):
?>
		<?php $this->assign('customlink_href', $this->_tpl_vars['CUSTOMLINK']->linkurl); ?>
		<?php $this->assign('customlink_label', $this->_tpl_vars['CUSTOMLINK']->linklabel); ?>
		<?php if ($this->_tpl_vars['customlink_label'] == ''): ?>
			<?php $this->assign('customlink_label', $this->_tpl_vars['customlink_href']); ?>
		<?php else: ?>
						<?php $this->assign('customlink_label', getTranslatedString($this->_tpl_vars['customlink_label'], $this->_tpl_vars['CUSTOMLINK']->module())); ?>
		<?php endif; ?>
		<input class="crmbutton small edit" type="button" value="<?php echo $this->_tpl_vars['customlink_label']; ?>
" onclick="<?php echo $this->_tpl_vars['customlink_href']; ?>
" />
	<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['CUSTOM_LINKS'] && ! empty ( $this->_tpl_vars['CUSTOM_LINKS']['LISTVIEW'] )): ?>
	&nbsp;
	<a href="javascript:;" onmouseover="fnvshobj(this,'vtlib_customLinksLay');" onclick="fnvshobj(this,'vtlib_customLinksLay');">
		<b><?php echo $this->_tpl_vars['APP']['LBL_MORE']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_ACTIONS']; ?>
 <img src="<?php echo vtiger_imageurl('arrow_down.gif', $this->_tpl_vars['THEME']); ?>
" border="0"></b>
	</a>
	<div style="display: none; left: 193px; top: 106px;width:155px; position:absolute;" id="vtlib_customLinksLay"
		onmouseout="fninvsh('vtlib_customLinksLay')" onmouseover="fnvshNrm('vtlib_customLinksLay')">
		<table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" width="100%">
		<tr>
			<td style="border-bottom: 1px solid rgb(204, 204, 204); padding: 5px;"><b><?php echo $this->_tpl_vars['APP']['LBL_MORE']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_ACTIONS']; ?>
 &#187;</b></td>
		</tr>
		<tr>
			<td>
				<?php $_from = $this->_tpl_vars['CUSTOM_LINKS']['LISTVIEW']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['CUSTOMLINK']):
?>
					<?php $this->assign('customlink_href', $this->_tpl_vars['CUSTOMLINK']->linkurl); ?>
					<?php $this->assign('customlink_label', $this->_tpl_vars['CUSTOMLINK']->linklabel); ?>
					<?php if ($this->_tpl_vars['customlink_label'] == ''): ?>
						<?php $this->assign('customlink_label', $this->_tpl_vars['customlink_href']); ?>
					<?php else: ?>
												<?php $this->assign('customlink_label', getTranslatedString($this->_tpl_vars['customlink_label'], $this->_tpl_vars['CUSTOMLINK']->module())); ?>
					<?php endif; ?>
					<a href="<?php echo $this->_tpl_vars['customlink_href']; ?>
" class="drop_down"><?php echo $this->_tpl_vars['customlink_label']; ?>
</a>
				<?php endforeach; endif; unset($_from); ?>
			</td>
		</tr>
		</table>
	</div>
<?php endif; ?>