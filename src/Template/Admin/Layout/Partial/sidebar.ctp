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
 */

use Core\Nav;
?>
<div class="gl-sidebar">
    <div class="nav-details">
        <?php
        echo $this->Nav->render('sidebar', Nav::items('sidebar'), [
            'menuAttr' => [
                'class' => 'side-nav fixed collapsible collapsible-accordion',
                'id'    => 'nav-mobile'
            ],
            'childMenuAttr' => [
                'class'   => 'nav-child',
                'element' => 'Backend.Nav/Sidebar/menu_child'
            ],
            'itemElement' => 'Backend.Nav/Sidebar/item'
        ]);
        ?>
    </div>
</div>
