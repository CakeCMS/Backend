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
use Core\View\Helper\HtmlHelper as CoreHtmlHelper;

/**
 * Class HtmlHelper
 *
 * @package Backend\View\Helper
 */
class HtmlHelper extends CoreHtmlHelper
{

    use PrepareHelpers;

    /**
     * Constructor hook method.
     *
     * @param array $config
     */
    public function initialize(array $config)
    {
        $this->_configWrite('prepareBtnClass', function (Helper $form, $options, $button) {
            return $this->_prepareBtn($form, $options, $button);
        });
        
        $this->_configWrite('prepareTooltip', function (Helper $html, $options, $tooltip) {
            return $this->_prepareTooltip($html, $options, $tooltip);
        });

        parent::initialize($config);
    }
}
