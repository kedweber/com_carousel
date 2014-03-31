<?php

class ComCarouselDatabaseTableItems extends KDatabaseTableDefault
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
				'com://admin/moyo.database.behavior.sluggable',
                'com://admin/cck.database.behavior.elementable',
                'com://admin/taxonomy.database.behavior.relationable',
                'com://admin/translations.database.behavior.translatable',
            )
        ));

        parent::_initialize($config);
    }
}