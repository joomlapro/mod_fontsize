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

// Initialise variables.
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$targetSection   = htmlspecialchars($params->get('targetSection', 'body'));
$store           = $params->get('store', 1) ? 'true' : 'false';
$appendTo        = htmlspecialchars($params->get('appendTo', '#rvfs-controllers'));
$showResetButton = $params->get('showResetButton', 1);
$direction       = (string) $params->get('direction', 'bottom');

// Render the module.
require JModuleHelper::getLayoutPath('mod_fontsize', $params->get('layout', 'default'));
