<?php

class ComCarouselControllerToolbarMenubar extends ComDefaultControllerToolbarMenubar
{
    public function getCommands()
    {
        $name = $this->getController()->getIdentifier()->name;

		$this->addCommand('Categories', array(
			'href'   => JRoute::_('index.php?option=com_carousel&view=categories'),
			'active' => ($name == 'category')
		));

		$this->addCommand('Items', array(
			'href'   => JRoute::_('index.php?option=com_carousel&view=items'),
			'active' => ($name == 'item')
		));

        return parent::getCommands();
    }
}