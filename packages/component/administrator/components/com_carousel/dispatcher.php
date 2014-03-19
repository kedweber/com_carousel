<?php

class ComCarouselDispatcher extends ComDefaultDispatcher
{
    /**
     * @param KConfig $config
     */
    protected function _initialize(KConfig $config)
    {
        $config->append(array(
        	'controller' => 'items',
        ));
        
        parent::_initialize($config);
    }
}