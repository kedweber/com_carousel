<?php

class ModCarouselHtml extends ModDefaultHtml
{
    /**
     * @return ModDefaultHtml
     */
    public function display()
	{
        $model = $this->getService('com://admin/carousel.model.items')->carousel_category_id($this->module->params->category_id);

        $items = $model->enabled(1)->sort('created_on')->direction('desc')->getList();

		$this->assign('items', $items);
        $this->assign('total', $model->getTotal());

		return parent::display();
	}
}