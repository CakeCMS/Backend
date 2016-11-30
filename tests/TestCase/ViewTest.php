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

namespace Backend\Test\TestCase;

use Test\App\View\AppView;
use Core\TestSuite\TestCase;

/**
 * Class ViewTest
 *
 * @package Backend\Test\TestCase
 */
class ViewTest extends TestCase
{

    /**
     * Core plugin.
     *
     * @var string
     */
    protected $_corePlugin = 'Backend';

    public function testLoadHelpers()
    {
        /** @var AppView $view */
        $view = new AppView();
        $this->assertInstanceOf('Backend\View\Helper\HtmlHelper', $view->Html);
        $this->assertInstanceOf('Backend\View\Helper\FormHelper', $view->Form);
        $this->assertInstanceOf('Backend\View\Helper\AssetsHelper', $view->Assets);
    }
}
