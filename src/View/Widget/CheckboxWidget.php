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

namespace Backend\View\Widget;

use Cake\View\Form\ContextInterface;
use Cake\View\Widget\CheckboxWidget as CakeCheckboxWidget;

/**
 * Class CheckboxWidget
 *
 * @package Backend\View\Widget
 */
class CheckboxWidget extends CakeCheckboxWidget
{

    /**
     * Render a checkbox element.
     *
     * @param array $data The data to create a checkbox with.
     * @param \Cake\View\Form\ContextInterface $context The current form context.
     * @return string Generated HTML string.
     */
    public function render(array $data, ContextInterface $context)
    {
        $data += ['class' => ''];
        $data['class'] .= ' filled-in ';
        $data['class'] = trim($data['class']);

        return parent::render($data, $context);
    }
}
