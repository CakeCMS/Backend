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

echo $this->partial('init');
?>
<head>
    <?= $this->Document->head() ?>
</head>
<body class="<?= $this->Document->getBodyClasses() ?> cyan">
<div class="main">

    <div class="row">
        <div class="col s3 offset-s4">
            <div class="card-panel">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
        </div>
    </div>
</div>
<?= $this->Document->assets('script') ?>
<?= $this->fetch('script_bottom') ?>
<?= $this->Js->getBuffer() ?>
</body>
</html>
