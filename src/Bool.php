<?php
namespace samsoncms\input\bool;

use samsoncms\input\Field;
use samsonphp\event\Event;

/**
 * Bool SamsonCMS input field
 */
class Bool extends Field
{
    /** Database object field name */
    protected $param = 'Value';

    /** Special CSS classname for nested field objects to bind JS and CSS */
    protected $cssClass = '__bool';
}
