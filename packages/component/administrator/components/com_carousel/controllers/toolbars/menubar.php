<?php
/**
 * ComCarousel
 *
 * @author      Jasper van Rijbroek <jasper@moyoweb.nl>
 * @category    Nooku
 * @package     Moyo Components
 * @subpackage  Carousel
 */

defined('KOOWA') or die('Protected Resource');

class ComCarouselControllerToolbarMenubar extends ComDefaultControllerToolbarMenubar
{
	public function getCommands()
	{
		$name = $this->getController()->getIdentifier()->name;

		$this->addCommand('Slides' , array(
			'href'   => JRoute::_('index.php?option=com_carousel&view=items'),
			'active' => ($name == 'item')
		));

        $this->addCommand('Categories' , array(
            'href'   => JRoute::_('index.php?option=com_carousel&view=categories'),
            'active' => ($name == 'category')
        ));

		return parent::getCommands();
	}
}