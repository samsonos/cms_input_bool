<?php
namespace samsoncms\input\bool;

use samsoncms\input\Field;

/**
 * Bool SamsonCMS input field
 */
class InputBool extends Field
{
    /** Database object field name */
    protected $param = 'Value';

    /** Special CSS classname for nested field objects to bind JS and CSS */
    protected $cssClass = '__bool';
}
