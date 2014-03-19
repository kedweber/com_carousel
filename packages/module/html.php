<?php

class ModCarouselHtml extends ModDefaultHtml
{
    /**
     * @return ModDefaultHtml
     */
    public function display()
	{
        $model = $this->getService('com://admin/carousel.model.items');

        $items = $model->enabled(1)->getList();

		$this->assign('items', $items);
        $this->assign('total', $model->getTotal());

		return parent::display();
	}
}