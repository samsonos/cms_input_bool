<?php

namespace samsoncms\input\bool;

/**
 * SamsonCMS bool input module
 */
class Application extends \samsoncms\input\Application
{
    /** @var int Field type number */
    public static $type = 11;

    /** @var string SamsonCMS field class */
    protected $fieldClass = '\samsoncms\input\bool\Bool';
}
