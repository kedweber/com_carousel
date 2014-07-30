<?php

class ComCarouselDatabaseRowCategory extends KDatabaseRowDefault
{
    public function delete()
    {
        // Before the delete we reset all the items connected to this category.
        $items = $this->getService('com://admin/carousel.model.items')->carousel_category_id($this->id)->getList();

        foreach($items as $item)
        {
            $item->enabled = false;
            $item->cck_category_id = null;
            $item->save();
        }

        return parent::delete();
    }
}