<?php
/**
 * CakeCMS Backend
 *
 * This file is part of the of the simple cms based on CakePHP 3.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package   Backend
 * @license   MIT
 * @copyright MIT License http://www.opensource.org/licenses/mit-license.php
 * @link      https://github.com/CakeCMS/Backend".
 * @author    Sergey Kalistratov <kalistratov.s.m@gmail.com>
 * @var       \Core\View\AppView $this
 */

use Core\Utility\Toolbar;

$toolbar = Toolbar::getInstance();

if ($toolbarHtml = $toolbar->render()) : ?>
    <div class="ck-toolbar grey lighten-4 jsToolbar">
        <div class="ck-toolbar-content">
            <?= $toolbarHtml ?>
        </div>
    </div>
<?php endif;
