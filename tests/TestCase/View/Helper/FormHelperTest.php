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
        parent::setUp();
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
}
