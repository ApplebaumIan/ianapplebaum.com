<?php
/* @copyright:ChronoEngine.com @license:GPLv2 */defined('_JEXEC') or die('Restricted access');
defined("GCORE_SITE") or die;
?>
<div class="ui segment tab functions-tab active" data-tab="function-<?php echo $n; ?>">

	<div class="ui top attached tabular menu small G2-tabs">
		<a class="item active" data-tab="function-<?php echo $n; ?>-general"><?php el('General'); ?></a>
		<a class="item" data-tab="function-<?php echo $n; ?>-permissions"><?php el('Permissions'); ?></a>
	</div>
	
	<div class="ui bottom attached tab segment active" data-tab="function-<?php echo $n; ?>-general">
		<input type="hidden" value="curl" name="Connection[functions][<?php echo $n; ?>][type]">
		
		<div class="two fields advanced_conf">
			<div class="field">
				<label><?php el('Name'); ?></label>
				<input type="text" value="" name="Connection[functions][<?php echo $n; ?>][name]">
			</div>
		</div>
		
		<div class="ui segment active" data-tab="function-<?php echo $n; ?>">
			
			<div class="field required">
				<label><?php el('URL to connect to'); ?></label>
				<input type="text" value="" name="Connection[functions][<?php echo $n; ?>][url]">
			</div>
			
			<div class="field">
				<label><?php el('Data provider'); ?></label>
				<input type="text" value="" name="Connection[functions][<?php echo $n; ?>][data_provider]">
				<small><?php el('The data set source.'); ?></small>
			</div>
			
			<div class="field">
				<label><?php el('Data override'); ?></label>
				<textarea placeholder="<?php el('Multiline list of array fields'); ?>" name="Connection[functions][<?php echo $n; ?>][data_override]" rows="5"></textarea>
				<small><?php el('Inject or update data into the source data set, key:value pairs multiline list.'); ?></small>
			</div>
			
			<div class="field">
				<div class="ui checkbox">
					<input type="hidden" name="Connection[functions][<?php echo $n; ?>][header]" data-ghost="1" value="">
					<input type="checkbox" class="hidden" name="Connection[functions][<?php echo $n; ?>][header]" value="1">
					<label><?php el('Include header in response'); ?></label>
				</div>
			</div>
			
		</div>
		
	</div>
	
	<div class="ui bottom attached tab segment" data-tab="function-<?php echo $n; ?>-permissions">
		<?php $this->view('views.config_permissions', ['type' => 'functions', 'n' => $n]); ?>
	</div>
	
</div>