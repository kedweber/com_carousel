<?php

echo KService::get('mod://site/carousel.html')
    ->module($module)
    ->attribs($attribs)
    ->display();