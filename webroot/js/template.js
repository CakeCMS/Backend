/**
 * CakeCMS Backend
 *
 * This file is part of the of the simple cms based on CakePHP 3.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package    Backend
 * @license    MIT
 * @copyright  MIT License http://www.opensource.org/licenses/mit-license.php
 * @link       https://github.com/CakeCMS/Backend
 */

if (typeof jQuery != 'undefined') jQuery(function ($) {
    $('html.no-js').removeClass('no-js').addClass('js-ready');

    $('.button-collapse').sideNav();

    $('.hasTooltip').tooltip({
        delay : 10
    });

    $('.jsCheckAll').checkAll();
    $('select').material_select();

    $('.flash-message .jsFlashClose').click(function () {
        $(this).closest('.flash-message').animate({
            height       : 0,
            opacity      : 0,
            MarginBottom : 0
        }, 'slow', function () {
            $(this).remove();
        });
        return false;
    });
});
