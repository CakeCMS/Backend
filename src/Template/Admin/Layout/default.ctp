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

echo $this->partial('init');
?>
<head>
    <?php
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('css_bottom');
    ?>
</head>
<body>
<header id="header" class="gl-header">
    <div class="navbar-fixed">
        <nav class="navbar-color cyan">
            <div class="nav-wrapper">
                <?= $this->partial('header') ?>
            </div>
        </nav>
    </div>
</header>
<div class="main">
    <div class="wrapper">
        <aside id="left-sidebar-nav">
            <?= $this->partial('sidebar') ?>
        </aside>
        <section id="content">
            <div class="container">
                <?= $this->fetch('content') ?>
            </div>
        </section>
    </div>
</div>
<?= $this->fetch('script') ?>
<?= $this->fetch('script_bottom') ?>
</body>
</html>
