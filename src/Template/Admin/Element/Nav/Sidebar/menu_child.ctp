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
 * @var       array $options
 * @var       array $content
 */

unset($options['childMenuAttr']['element']);

echo $this->Html->div(
    'collapsible-body',
    $this->Html->tag('ul', implode(PHP_EOL, $content), $options['childMenuAttr'])
);
