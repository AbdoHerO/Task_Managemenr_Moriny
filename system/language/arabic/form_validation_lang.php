<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2019, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2019, British Columbia Institute of Technology (https://bcit.ca/)
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['form_validation_required']		= ' {field} الحقل مطلوب.';
$lang['form_validation_isset']			= ' {field} يجب أن يكون للحقل قيمة.';
$lang['form_validation_valid_email']		= ' {field} يجب أن يحتوي الحقل على عنوان بريد إلكتروني صالح.';
$lang['form_validation_valid_emails']		= '{field} يجب أن يحتوي الحقل على جميع عناوين البريد الإلكتروني الصالحة.';
$lang['form_validation_valid_url']		= ' {field} يجب أن يحتوي الحقل على URL.';
$lang['form_validation_valid_ip']		= ' {field} يجب أن يحتوي الحقل على IP.';
$lang['form_validation_valid_base64']		= ' {field} يجب أن يحتوي الحقل على سلسلة Base64 صالحة.';
$lang['form_validation_min_length']		= ' {field} يجب أن يكون الحقل على الأقل {param} حرفا.';
$lang['form_validation_max_length']		= ' {field} لا يمكن أن يتجاوز طول الحقل {param} من الأحرف.';
$lang['form_validation_exact_length']		= ' {field} يجب أن يكون طول الحقل {param} من الأحرف بالضبط.';
$lang['form_validation_alpha']			= ' {field} قد يحتوي الحقل على أحرف أبجدية فقط.';
$lang['form_validation_alpha_numeric']		= ' {field} يمكن أن يحتوي الحقل على أحرف أبجدية رقمية فقط.';
$lang['form_validation_alpha_numeric_spaces']	= ' {field} قد يحتوي الحقل على أحرف أبجدية رقمية ومسافات فقط.';
$lang['form_validation_alpha_dash']		= ' {field} قد يحتوي الحقل فقط على أحرف أبجدية رقمية وشرطات سفلية وشرطات.';
$lang['form_validation_numeric']		= ' {field} يجب أن يحتوي الحقل على أرقام فقط.';
$lang['form_validation_is_numeric']		= ' {field}يجب أن يحتوي الحقل على أحرف رقمية فقط.';
$lang['form_validation_integer']		= ' {field} يجب أن يحتوي الحقل على عدد صحيح.';
$lang['form_validation_regex_match']		= ' {field} الحقل ليس بالتنسيق الصحيح.';
$lang['form_validation_matches']		= ' {field} لا يتطابق الحقل مع الحقل {param}.';
$lang['form_validation_differs']		= ' {field} يجب أن يختلف الحقل عن الحقل {param}.';
$lang['form_validation_is_unique'] 		= ' {field} يجب أن يحتوي الحقل على قيمة فريدة.';
$lang['form_validation_is_natural']		= ' {field} يجب أن يحتوي الحقل على أرقام فقط.';
$lang['form_validation_is_natural_no_zero']	= ' {field} يجب أن يحتوي الحقل على أرقام فقط ويجب أن يكون أكبر من صفر.';
$lang['form_validation_decimal']		= ' {field} يجب أن يحتوي الحقل على رقم عشري.';
$lang['form_validation_less_than']		= ' {field} يجب أن يحتوي الحقل على رقم أقل من {param}.';
$lang['form_validation_less_than_equal_to']	= ' {field} يجب أن يحتوي الحقل على رقم أصغر من أو يساوي {param}.';
$lang['form_validation_greater_than']		= ' {field} يجب أن يحتوي الحقل على رقم أكبر من {param}.';
$lang['form_validation_greater_than_equal_to']	= ' {field} يجب أن يحتوي الحقل على رقم أكبر من أو يساوي {param}.';
$lang['form_validation_error_message_not_set']	= 'تعذر الوصول إلى رسالة خطأ مطابقة لاسم مجالك {field}.';
$lang['form_validation_in_list']		= ' {field} يجب أن يكون الحقل واحدًا مما يلي: {param}.';
