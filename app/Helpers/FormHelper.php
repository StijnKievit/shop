<?php
/**
 * Created by PhpStorm.
 * User: stijn
 * Date: 8-1-2018
 * Time: 22:32
 */

namespace App\Helpers;

class FormHelper
{
    protected static $viewPath = 'helpers/formhelper/';

    public static function open($method = 'POST', $action = ''){

        return view(self::$viewPath . 'open', [
            'method' => $method,
            'action' => $action
        ]);
    }

    public static function close(){
        return view(self::$viewPath . 'close');
    }


    public static function TextField($name, $label, $options = array()){
        return view(self::$viewPath . 'text', [
            'name' => $name,
            'label' => $label,
            'options'   =>  $options
        ]);
    }

    public static function TextArea($name, $label, $options = array()){
        return view(self::$viewPath . 'textarea', [
            'name' => $name,
            'label' => $label,
            'options'   =>  $options
        ]);
    }

    public static function Number($name, $label, $options = array()){
        return view(self::$viewPath . 'number', [
            'name' => $name,
            'label' => $label,
            'options'   =>  $options
        ]);
    }

    public static function Password($name, $label, $options = array()){
        return view(self::$viewPath . 'password', [
            'name' => $name,
            'label' => $label,
            'options'   =>  $options
        ]);
    }

    public static function Radio($name, $label, $options = array()){
        return view(self::$viewPath . 'radio', [
            'name' => $name,
            'label' => $label,
            'options'   =>  $options
        ]);
    }

    public static function Checkbox($name, $label, $options = array()){
        return view(self::$viewPath . 'checkbox', [
            'name' => $name,
            'label' => $label,
            'options'   =>  $options
        ]);
    }

    public static function Select($name, $label, $selectOptions = array(), $options = array()){
        return view(self::$viewPath . 'select', [
            'name' => $name,
            'label' => $label,
            'selectOptions' => $selectOptions,
            'options'   =>  $options,
            'field_id'  =>  rand(1,1000)
        ]);
    }

    public static function Buttons($buttons = array()){
        return view(self::$viewPath . 'buttons', [
            'buttons' => $buttons,
        ]);
    }

    public static function Button($type, $value, $label, $options = array()){
        return view(self::$viewPath . 'button', [
            'type' => $type,
            'value' => $value,
            'label' => $label,
            'options'   =>  $options
        ]);
    }

    public static function Currency($name, $label, $options = array()){
        return view(self::$viewPath . 'currency', [
            'name' => $name,
            'label' => $label,
            'options'   =>  $options
        ]);
    }
}
