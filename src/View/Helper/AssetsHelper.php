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

use Core\View\Helper\AssetsHelper as CoreAssetsHelper;

/**
 * Class AssetsHelper
 *
 * @package Backend\View\Helper
 */
class AssetsHelper extends CoreAssetsHelper
{

    /**
     * Use helpers.
     *
     * @var array
     */
    public $helpers = [
        'Url'  => ['className' => 'Core.Url'],
        'Html' => ['className' => 'Backend.Html'],
    ];
}
