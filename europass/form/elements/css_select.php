<?php
/**
 *
 * @package    pieform
 * @subpackage element
 * @author     Nigel McNie <nigel@catalyst.net.nz>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006-2008 Catalyst IT Ltd http://catalyst.net.nz
 *
 */

/**
 * Renders a dropdown list, including support for multiple choices.
 *
 * @todo Currently, putting a junk defaultvalue/value for a multiple select
 * does not trigger any kind of error, it should perhaps trigger a
 * Pieform::info
 *
 * @param Pieform  $form    The form to render the element for
 * @param array    $element The element to render
 * @return string           The HTML for the element
 */
function pieform_element_css_select(Pieform $form, $element) {/*{{{*/
    if (!empty($element['multiple'])) {
        $element['name'] .= '[]';
    }

    $optionsavailable = true;
    if (!isset($element['options']) || !is_array($element['options']) || count($element['options']) < 1) {
        $optionsavailable = false;
        Pieform::info('Select elements should have at least one option');
    }

    if (!empty($element['collapseifoneoption']) && isset($element['options']) && is_array($element['options']) && count($element['options']) == 1) {
        foreach ($element['options'] as $key => $value) {
            if (is_array($value)) {
                $value = $value['value'];
            }
            $result = $value . '<input type="hidden" name="' . $element['name'] . '" value="' . $key . '">';
        }
        return $result;
    }

    $result = '<select'
        . $form->element_attributes($element)
        . (!empty($element['multiple']) ? ' multiple="multiple"' : '')
        . (!empty($element['width']) ? ' style="width: ' . $element['width'] . 'px;' : 'style="')
        . (!empty($element['height']) ? ' height: ' . $element['height'] . 'px;"' : '"')
        . ">\n";
    if (!$optionsavailable) {
        $result .= "\t<option></option>\n</select>";
        return $result;
    }

    $values = $form->get_value($element); 
    $optionselected = false;
    foreach ($element['options'] as $key => $value) {
        // Select the element if it's in the values or if there are no values
        // and this is the first option
		$option = $value['value'];
        if (
            (!is_array($values) && $key == $values)
            ||
            (is_array($values) && 
                (in_array($key, $values)
                || (isset($values[0]) && $values[0] === null && !$optionselected)))) {
            $selected = ' selected="selected"';
            $optionselected = true;
        }
        else {
            $selected = '';
        }

        // Disable the option if necessary
        if (is_array($value) && !empty($value['disabled'])) {
            $disabled = ' disabled="disabled"';
        }
        else {
            $disabled = '';
        }

        // Add a label if necessary. None of the common browsers actually render
        // this properly at the moment, but that may change in future.
        if (is_array($value) && isset($value['label'])) {
            $label = ' label="' . Pieform::hsc($value['label']) . '"';
        }
        else {
            $label = '';
        }

        // Add a CSS style for option
        if (is_array($value) && isset($value['style'])) {
            $style = ' style="' . Pieform::hsc($value['style']) . '"';
        }
        else {
            $style = '';
        }

        // Get the value to display/put in the value attribute
        if (is_array($value)) {
            if (!isset($value['value'])) {
                Pieform::info('No value set for option "' . $key . '" of select element "' . $element['name'] . '"');
                $value = '';
            }
            else {
                $value = $value['value'];
            }
        }

        $result .= "\t<option value=\"" . Pieform::hsc($key) . "\"{$selected}{$label}{$disabled}{$style}>" . $option . "</option>\n";
    }

    if (!$optionselected && !is_array($values) && $values !== null) {
        Pieform::info('Invalid value for select "' . $element['name'] .'"');
    }

    $result .= '</select>';
    return $result;
}/*}}}*/

function pieform_element_css_select_set_attributes($element) {/*{{{*/
    if (!isset($element['collapseifoneoption'])) {
        $element['collapseifoneoption'] = true;
    }
    $element['rules']['validateoptions'] = true;
    return $element;
}/*}}}*/

function pieform_element_css_select_get_value(Pieform $form, $element) {/*{{{*/
    if (empty($element['multiple'])) {
        $global = ($form->get_property('method') == 'get') ? $_GET : $_POST;
        if (isset($element['value'])) {
            $values = (array) $element['value'];
        }
        else if ($form->is_submitted() && isset($global[$element['name']])) {
            $values = (array) $global[$element['name']];
        }
        else if (isset($element['defaultvalue'])) {
            $values = (array) $element['defaultvalue'];
        }
        else {
            $values = array(null);
        }

        if (count($values) != 1) {
            Pieform::info('The select element "' . $element['name'] . '" has '
                . 'more than one value, but has not been declared multiple');
        }
        return $values[0];
    }
    else {
        $global = ($form->get_property('method') == 'get') ? $_GET : $_POST;
        if (isset($element['value'])) {
            $values = (array) $element['value'];
        }
        else if ($form->is_submitted() && isset($global[$element['name']])) {
            $values = (array) $global[$element['name']];
        }
        else if (!$form->is_submitted() && isset($element['defaultvalue'])) {
            $values = (array) $element['defaultvalue'];
        }
        else {
            $values = array();
        }
    }

    return $values;
}/*}}}*/

?>
