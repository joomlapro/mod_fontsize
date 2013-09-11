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

// Get the document object.
$doc = JFactory::getDocument();

// Build the script.
$script = array();
$script[] = 'jQuery(document).ready(function($) {';
$script[] = '  $.rvFontsize({';
$script[] = '    targetSection: \'' . $targetSection . '\',';
$script[] = '    store: ' . $store . ',';
$script[] = '    controllers: {';
$script[] = '      appendTo: \'' . $appendTo . '\',';
$script[] = '      showResetButton: ' . $showResetButton . ',';
$script[] = '      template: \'<li><a href="#" class="rvfs-decrease" data-toggle="tooltip" data-placement="bottom" title="' . JText::_('MOD_FONTSIZE_FONT_DECREASE') . '"><i class="icon-font"></i>-</a></li>\'';
$script[] = '        + \'<li><a href="#" class="rvfs-reset" data-toggle="tooltip" data-placement="bottom" title="' . JText::_('MOD_FONTSIZE_FONT_RESET') . '"><i class="icon-font"></i></a></li>\'';
$script[] = '        + \'<li><a href="#" class="rvfs-increase" data-toggle="tooltip" data-placement="bottom" title="' . JText::_('MOD_FONTSIZE_FONT_INCREASE') . '"><i class="icon-font"></i>+</a></li>\'';
$script[] = '    }';
$script[] = '  });';
$script[] = '});';

// Add the script to the document head.
$doc->addScriptDeclaration(implode("\n", $script));
?>
<ul id="rvfs-controllers" class="fontsize-controllers list-unstyled<?php echo $moduleclass_sfx; ?>"></ul>