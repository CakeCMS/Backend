<?php
/**
 * CakeCMS Backend
 *
 * This file is part of the of the simple cms based on CakePHP 3.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package     Backend
 * @license     MIT
 * @copyright   MIT License http://www.opensource.org/licenses/mit-license.php
 * @link        https://github.com/CakeCMS/Backend".
 * @author      Sergey Kalistratov <kalistratov.s.m@gmail.com>
 * @var         \Core\View\AppView $this
 * @var         string $message
 */
?>
<div class="flash-message success card red lighten-4">
    <div class="card-content red-text text-darken-2">
        <p><?= $message ?></p>
        <span class="jsFlashClose flash-message-close">&times;</span>
    </div>
</div>
