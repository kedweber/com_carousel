<?php

class ComCarouselDatabaseRowItem extends KDatabaseRowDefault
{
    public function getCategoryTitle()
	{
		switch ($this->use_url) {
			case 0:
				$article = $this->getService('com://site/articles.model.articles')->id($this->articles_article_id)->getItem();

				$category = $article->category;
				break;
			case 1:
				$category = $this->getService('com://admin/makundi.model.categories')->id($this->makundi_category_id)->getItem();
				break;
			case 2:
				$category = $this->getService('com://admin/carousel.model.categories')->id($this->carousel_category_id)->getItem();
				break;
		}

        return $category->title;
    }

    public function getLink()
	{
		switch ($this->use_url) {
			case 0:
				$link = JRoute::_('index.php?option=com_articles&view=article&id=' . $this->articles_article_id);
				break;
			case 1:
				$link = JRoute::_('index.php?option=com_makundi&view=category&id=' . $this->makundi_category_id);
				break;
			case 2:
				$link = $this->getService('com://site/moyo.template.helper.parser')->link(array('url' => $this->url));
				break;
			default:
				$link = '';
				break;
		}

		return $link;
    }

    public function __get($key)
    {
        if($key == 'category_title')
        {
            return $this->getService('com://admin/carousel.model.category')->id($this->carousel_category_id)->getItem()->title;
        }
        else
        {
            return parent::__get($key);
        }
    }
}