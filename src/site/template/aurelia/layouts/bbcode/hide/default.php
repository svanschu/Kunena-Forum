<?php

/**
 * Kunena Component
 *
 * @package         Kunena.Template.Aurelia
 * @subpackage      Layout.BBCode
 *
 * @copyright       Copyright (C) 2008 - @currentyear@ Kunena Team. All rights reserved.
 * @license         https://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link            https://www.kunena.org
 **/

namespace Kunena\Forum\Site;

\defined('_JEXEC') or die();

use Joomla\CMS\Language\Text;

// [hide]Hidden from guests[/hide]

// Hide content from guests, on users highlight the contents as being hidden from guests.
?>

<?php if ($this->me->exists()) : ?>
    <strong><?php Text::_('COM_KUNENA_BBCODE_HIDE_IN_MESSAGE'); ?></strong>
    <div class="kmsgtext-hide"><?php echo $this->content; ?></div>
<?php else : ?>
    <strong><?php echo Text::_('COM_KUNENA_BBCODE_HIDDENTEXT'); ?></strong>
<?php endif; ?>
