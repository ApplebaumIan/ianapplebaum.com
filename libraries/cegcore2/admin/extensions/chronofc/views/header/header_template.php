<?php
/* @copyright:ChronoEngine.com @license:GPLv2 */defined('_JEXEC') or die('Restricted access');
defined("GCORE_SITE") or die;
?>
<?php
	echo '<'.$view['tag'].' style="padding:0px 7px;">';
	
	echo $this->Parser->parse($view['text']);
	
	if(!empty($view['subtext'])){
		echo '<div class="sub header">'.$this->Parser->parse($view['subtext']).'</div>';
	}
	
	echo '</'.$view['tag'].'>';