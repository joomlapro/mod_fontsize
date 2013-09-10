<?php
/**
 * @package     Fontsize
 * @subpackage  mod_fontsize
 *
 * @author      Bruno Batista <bruno@atomtech.com.br>
 * @copyright   Copyright (C) 2013 AtomTech IT Services. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

// Load Stylesheet.
JHtml::stylesheet('mod_fontsize/template.css', false, true, false);

// Load JavaScript.
JHtml::script('mod_fontsize/store.min.js', false, true);
JHtml::script('mod_fontsize/rv-jquery-fontsize.min.js', false, true);
?>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$.rvFontsize({
			targetSection: '<?php echo $targetSection; ?>',
			store: <?php echo $store; ?>,
			controllers: {
				appendTo: '<?php echo $appendTo; ?>',
				showResetButton: <?php echo $showResetButton; ?>,
				template: '<li><a href="#" class="rvfs-decrease" data-toggle="tooltip" data-placement="bottom" title="<?php echo JText::_('MOD_FONTSIZE_FONT_DECREASE'); ?>"><i class="icon-font"></i>-</a></li>'
					+ '<li><a href="#" class="rvfs-reset" data-toggle="tooltip" data-placement="bottom" title="<?php echo JText::_('MOD_FONTSIZE_FONT_RESET'); ?>"><i class="icon-font"></i></a></li>'
					+ '<li><a href="#" class="rvfs-increase" data-toggle="tooltip" data-placement="bottom" title="<?php echo JText::_('MOD_FONTSIZE_FONT_INCREASE'); ?>"><i class="icon-font"></i>+</a></li>'
			}
		});
	});
</script>
<ul id="rvfs-controllers" class="fontsize-controllers list-unstyled<?php echo $moduleclass_sfx; ?>"></ul>