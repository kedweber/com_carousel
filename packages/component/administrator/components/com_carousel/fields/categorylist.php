<?php

defined('JPATH_BASE') or die;

class JFormFieldCategorylist extends JFormField
{
    protected $type = 'Categorylist';

    protected function getInput()
    {
        $categories = KService::get('com://admin/carousel.model.categories')->getList();

        return JHtml::_('select.genericlist', $categories->getData(), $this->name, null, 'id', 'title', $this->value);
    }
}