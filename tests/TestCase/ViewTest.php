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

namespace Backend\Test\TestCase;

use Test\Cases\TestCase;
use Test\App\View\AppView;

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
        self::assertInstanceOf('Backend\View\Helper\HtmlHelper', $view->Html);
        self::assertInstanceOf('Backend\View\Helper\FormHelper', $view->Form);
        self::assertInstanceOf('Backend\View\Helper\AssetsHelper', $view->Assets);
    }
}
