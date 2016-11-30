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

use Cake\View\Helper;
use Backend\View\Helper\Traits\PrepareHelpers;
use Core\View\Helper\FormHelper as CoreFormHelper;

/**
 * Class FormHelper
 *
 * @package Backend\View\Helper
 */
class FormHelper extends CoreFormHelper
{

    use PrepareHelpers;

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
     * Constructor hook method.
     *
     * @param array $config
     */
    public function initialize(array $config)
    {
        $this->_configWrite('prepareBtnClass', function (FormHelper $form, $options, $button) {
            return $this->_prepareBtn($form, $options, $button);
        });

        $this->_configWrite('widgets', [
            'checkbox' => 'Backend\View\Widget\CheckboxWidget'
        ]);

        $this->_configWrite('templates', 'Backend.templates/form');
        
        parent::initialize($config);
    }

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
