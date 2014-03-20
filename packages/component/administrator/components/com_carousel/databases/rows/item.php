<?php

// Specialized functions for CTA Corporate.
class ComCarouselDatabaseRowItem extends ComCarouselDatabaseRowDefault {
    public function getCategoryTitle() {
        if($this->use_url == 1) {
            $article = $this->getService('com://admin/articles.model.articles')->id($this->articles_article_id)->getItem();
            if($article->isRelationable()) {
                $category = $article->getAncestors(array(
                    'filter' => array(
                        'type' => 'category'
                    )
                ))->top();
            }
        } else if($this->use_url == 2) {
            $category = $this->getService('com://admin/makundi.model.categories')->id($this->makundi_category_id)->getItem();
        } else if($this->use_url == 3) {
            $category = $this->getService('com://admin/carousel.model.categories')->id($this->carousel_category_id)->getItem();
        }

        return $category->title;
    }

    public function getLink() {
        // Return the link of the slide.
        if($this->use_url == 1) {
            return JRoute::_('index.php?option=com_articles&view=article&id=' . $this->articles_article_id);
        } else if($this->use_url == 2) {
            return JRoute::_('index.php?option=com_articles&view=article&category_id=' . $this->makundi_category_id);
        } else if($this->use_url == 3) {
            return $this->getService('com://site/moyo.template.helper.parser')->link(array('url' => $this->url));
        } else {
            return '#';
        }
    }
}