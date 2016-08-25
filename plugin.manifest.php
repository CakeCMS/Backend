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

use JBZoo\Utils\Arr;
use Core\View\AppView;

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
        $helpers = $view->helpers()->loaded();

        if (Arr::in('Form', $helpers)) {
            $view->helpers()->unload('Form');
            $view->loadHelper('Form', [
                'className' => 'Backend.Form',
                'templates' => 'Backend.templates/form',
            ]);
        }
    }
];
