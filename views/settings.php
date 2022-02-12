<div class="col-md-12">
	<p class="bold"><?php echo _l('supportlink_module_settings'); ?></p>
<?php render_yes_no_option('supportlink_menu_disabled', 'supportlink_menu_disabled', 'supportlink_menu_disabled_tooltip'); ?>
</div>



<hr />
<div class="col-md-4">
	<i class="fa fa-question-circle pull-left" data-toggle="tooltip" data-title="<?php echo _l('supportlink_link_tooltip'); ?>"></i>
	<?php echo render_input('settings[supportlink_link]', _l('link_to'), get_option('supportlink_link'), 'string', ['required'=>true]); ?>
</div>

  
</div>	