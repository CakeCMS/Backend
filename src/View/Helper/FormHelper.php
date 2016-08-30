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

namespace Backend\View\Helper;

use Core\View\Helper\FormHelper as CoreFormHelper;

/**
 * Class FormHelper
 *
 * @package Backend\View\Helper
 */
class FormHelper extends CoreFormHelper
{

    /**
    * List of helpers used by this helper.
    *
    * @var array
    */
    public $helpers = [
        'Url'  => ['className' => 'Core.Url'],
        'Html' => ['className' => 'Backend.Html'],
    ];

    /**
     * Form switcher.
     *
     * @param string $fieldName
     * @param array $options
     * @return string
     */
    public function switcher($fieldName, array $options = [])
    {
        $input = parent::checkbox($fieldName, $options);

        $options += [
            'before' => __d('backend', 'Off'),
            'after'  => __d('backend', 'On')
        ];

        $title = (isset($options['title'])) ? $options['title'] : $fieldName;

        if (!empty($title)) {
            $title = $this->Html->div('switch-title', $title);
        }

        $content = $this->formatTemplate(__FUNCTION__, [
            'input'  => $input,
            'lever'  => '<span class="lever"></span>',
            'before' => $options['before'],
            'after'  => $options['after'],
            'title'  => $title,
        ]);

        return $content;
    }
}
