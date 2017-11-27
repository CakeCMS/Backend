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
 * @var         array $item
 * @var         int $count
 * @var         int $level
 * @var         string $children
 * @var         array $options
 * @var         \Core\View\AppView $this
 */

use JBZoo\Utils\Arr;

$title = h($item['title']);

unset($options['itemElement']);

$linkAttr = [
    'title' => $title,
    'class' => 'item-link-' . $count
];

if ($children !== false) {
    $linkAttr = $this->Html->addClass($linkAttr, 'collapsible-header waves-effect waves-teal');
}

if (Arr::key('linkClass', $item)) {
    $linkAttr = $this->Html->addClass($linkAttr, $item['linkClass']);
}

$icon = $item['icon'];
if ($icon) {
    $title = $this->Html->icon($icon) . ' ' . $title;
}

$liContent = $this->Html->link($title, $item['url'], $linkAttr);

if ($children !== false) {
    $liContent .= $children;
}

echo $this->Html->tag('li', $liContent, $this->Nav->getLiAttr());
