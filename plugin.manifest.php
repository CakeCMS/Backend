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
 */

use JBZoo\Utils\Str;
use Core\View\AppView;
use Core\View\Helper\HtmlHelper;

return [
    'meta' => [
        'name'        => 'Backend',
        'author'      => 'Cheren',
        'version'     => '0.0.1',
        'copyright'   => 'CakePHP CMS',
        'license'     => 'MIT',
        'email'       => 'kalistratov.s.m@gmail.com',
        'url'         => 'http://cool-code.ru',
        'description' => 'Backend theme for CakePHP CMS',
        'type'        => 'theme',
        'backend'     => true,
    ],
    'View.initialize' => function (AppView $view) {
        $helpers = $view->helpers();

        $helpers->unload('Form');
        $helpers->unload('Html');
        $helpers->unload('Assets');

        $view->loadHelper('Backend.Assets');
        $view->loadHelper('Html', [
            'className' => 'Backend.Html',
            'prepareBtnClass' => function (HtmlHelper $html, $options, $button) {
                $options = $html->addClass($options, 'waves-effect waves-light btn');
                if (!empty($button)) {
                    $options = $html->addClass($options, Str::trim((string) $button));
                }

                return $options;
            }
        ]);
        $view->loadHelper('Form', [
            'className' => 'Backend.Form',
            'templates' => 'Backend.templates/form',
        ]);
    }
];
