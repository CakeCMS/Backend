<?php
/**
 * CakeCMS BackendTheme
 *
 * This file is part of the of the simple cms based on CakePHP 3.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package   BackendTheme
 * @license   MIT
 * @copyright MIT License http://www.opensource.org/licenses/mit-license.php
 * @link      https://github.com/CakeCMS/BackendTheme".
 * @author    Sergey Kalistratov <kalistratov.s.m@gmail.com>
 * @var       \Core\View\AppView $this
 */
?>
<html>
<head>
    <?php
    echo $this->fetch('meta');
    echo $this->fetch('css');
    ?>
</head>
<body>
<?= $this->fetch('content') ?>
</body>
</html>
