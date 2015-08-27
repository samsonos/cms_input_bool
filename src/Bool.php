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

    /**
     * Function to render class
     *
     * @param Application $renderer Renderer object
     * @param string $saveHandler Save controller name
     * @return string HTML string
     */
    public function view($renderer, $saveHandler = 'save')
    {
        return $renderer->view($this->defaultView)
            ->set('cssClass', $this->cssClass)
            ->set('value', $this->value())
            //TODO fixed it later
            ->set('action', url_build(preg_replace('/(_\d+)/', '', $renderer->id()), $saveHandler))
            ->set('entity', $this->entity)
            ->set('param', $this->param)
            ->set('objectId', $this->dbObject->id)
            ->output();
    }
}
