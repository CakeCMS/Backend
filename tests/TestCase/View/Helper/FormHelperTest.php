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

namespace Backend\Test\View\Helper;

use Core\Plugin;
use Core\View\AppView;
use Core\TestSuite\TestCase;

/**
 * Class FormHelperTest
 *
 * @package Backend\Test\View\Helper
 * @property \Backend\View\Helper\FormHelper $Form
 */
class FormHelperTest extends TestCase
{

    protected $_plugin = 'Backend';

    public function setUp()
    {
        Plugin::load($this->_plugin, [
            'path' => ROOT . DS,
            'bootstrap' => true
        ]);

        $view = new AppView();
        $view->loadHelper('Form', [
            'className' => 'Backend.Form',
            'templates' => 'Backend.templates/form',
        ]);

        $this->Form = $view->Form;
    }

    public function testClassName()
    {
        $this->assertInstanceOf('Backend\View\Helper\FormHelper', $this->Form);
    }

    public function testInput()
    {
        $expected = [
            'div' => ['class' => 'input-field text'],
                'input' => ['type' => 'text', 'name' => 'test', 'id' => 'test'],
                'label' => ['for' => 'test'],
                    'Test',
                '/label',
            '/div'
        ];

        $this->assertHtml($expected, $this->Form->input('test'));
    }

    public function testSwitcher()
    {
        $actual = $this->Form->switcher('custom');
        $expected = '<div class="switch">' .
                '<div class="switch-title">custom</div>' .
                '<label>' .
                    'Off' .
                        '<input type="hidden" name="custom" value="0"/>' .
                        '<input type="checkbox" name="custom" value="1" class="filled-in">' .
                        '<span class="lever"></span>' .
                    'On' .
                '</label>' .
            '</div>';

        $this->assertSame($expected, $actual);
    }
}
