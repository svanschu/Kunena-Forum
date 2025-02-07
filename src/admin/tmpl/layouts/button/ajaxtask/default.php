<?php

/**
 * Kunena Component
 *
 * @package         Kunena.Administrator.Template
 * @subpackage      Layouts.Pagination
 *
 * @copyright       Copyright (C) 2008 - @currentyear@ Kunena Team. All rights reserved.
 * @license         https://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link            https://www.kunena.org
 **/

defined('_JEXEC') or die();

use Joomla\CMS\Router\Route;

$dataTarget = (isset($this->dataTarget)) ? " data-target=\"{$this->dataTarget}\"" : '';
$dataForm   = (isset($this->dataForm)) ? " data-form=\"{$this->dataForm}\"" : '';
$class      = (isset($this->class)) ? " {$this->class}" : 'btn-outline-success';
?>
<a href="<?php echo Route::_($this->uri); ?>" data-bs-toggle="ajaxmodal"<?php echo $dataTarget . $dataForm; ?>
   class="btn btn-small <?php echo $class; ?>">
    <i class="icon-apply" title="<?php echo $this->title; ?>"></i>
    <?php echo $this->title; ?>
</a>
