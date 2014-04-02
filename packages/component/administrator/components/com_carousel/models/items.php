<?php

class ComCarouselModelItems extends ComDefaultModelDefault
{
    /**
     * @param KConfig $config
     */
    public function __construct(KConfig $config)
    {
        parent::__construct($config);

        $this->_state
            ->insert('carousel_category_id', 'int')
            ->insert('enabled', 'int')
        ;
    }

    protected function _buildQueryJoins(KDatabaseQuery $query) {
        parent::_buildQueryJoins($query);

        // Optionally join the articles if the article link is used.
		$query->select('articles.title AS article_title');
        $query->join('left outer', '#__articles_articles AS articles', 'tbl.articles_article_id = articles.articles_article_id');
    }

    /**
     * @param KDatabaseQuery $query
     */
    protected function _buildQueryWhere(KDatabaseQuery $query)
    {
        $state = $this->_state;

        parent::_buildQueryWhere($query);

        if(is_numeric($state->enabled)) {
            $query->where('tbl.enabled', '=', $state->enabled);
        }

        if($state->carousel_category_id) {
            $query->where('tbl.carousel_category_id', '=', $state->carousel_category_id);
        }
    }
}