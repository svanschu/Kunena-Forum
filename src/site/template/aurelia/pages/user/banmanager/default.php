<?php

/**
 * Kunena Component
 * @package       Kunena.Template.Aurelia
 * @subpackage    Pages.User
 *
 * @copyright     Copyright (C) 2008 - @currentyear@ Kunena Team. All rights reserved.
 * @license       https://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link          https://www.kunena.org
 **/

defined('_JEXEC') or die();

$content = $this->execute('User/Ban/Manager');

$this->addBreadcrumb($content->headerText, 'index.php?option=com_kunena&view=user&layout=banmanager');

echo $content;
