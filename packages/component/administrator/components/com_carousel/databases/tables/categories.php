<?php

class ComCarouselDatabaseTableCategories extends KDatabaseTableDefault
{
    protected function _initialize(KConfig $config)
    {
        $config->append(array(
            'behaviors' => array(
                'lockable',
                'com://admin/moyo.database.behavior.creatable',
                'modifiable',
                'identifiable',
                'orderable',
                'sluggable',
                'com://admin/translations.database.behavior.translatable',
            )
        ));

        parent::_initialize($config);
    }
}