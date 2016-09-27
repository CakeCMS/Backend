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
?>
<div class="gl-logo">
    <?php
    echo $this->Html->link(null, '#', [
        'data-activates' => 'nav-mobile',
        'class' => 'button-collapse top-nav full hide-on-large-only',
        'icon' => 'navicon'
    ]);
    ?>
    <h1 class="gl-logo-title">
        <?php
        echo $this->Html->link('Materialize', [
            'plugin' => 'Core',
            'controller' => 'Root',
            'action' => 'dashboard'
        ]);
        ?>
    </h1>
</div>
