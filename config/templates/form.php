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
 */

return [
    'formGroup'           => "{{input}}\n{{label}}",
    'inputContainer'      => '<div class="input-field {{type}}{{required}}">{{content}}</div>',
    'inputContainerError' => '<div class="input-field {{type}}{{required}} error">{{content}}{{error}}</div>',
    'nestingLabel'        => '{{hidden}}{{input}}<label{{attrs}}><span>{{text}}</span></label>',
    'switcher'            => '<div class="switch">{{title}}<label>{{before}}{{input}}{{lever}}{{after}}</label></div>'
];
