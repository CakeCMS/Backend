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
 * @var         \Community\Model\Entity\User $user
 */

use Core\Nav;

$user = $this->get('authorized');
?>
<?php if ($user !== null) : ?>
<li class="user-details cyan darken-2">
    <div class="row">
        <div class="col col s4 m4 l4">
<!--            <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">-->
        </div>
        <div class="col col s8 m8 l8">
            <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#"
               data-activates="profile-dropdown">
                <?= $user->login ?>
                <?= $this->Html->icon('caret-down') ?>
            </a>
            <?php
            echo $this->Nav->render('profile', Nav::items('profile'), [
                'menuAttr' => [
                    'class' => 'dropdown-content',
                    'id'    => 'profile-dropdown'
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
</li>
<?php endif;
