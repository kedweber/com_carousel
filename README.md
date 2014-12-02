# com_carousel

## Description

Carousel-module written in Koowa Framework. Should work in Joomla 2.5, 3.X and Nooku Server 12.X .

## Requirements

* Joomla 3.X . Untested in Joomla 2.5.
* Koowa 0.9 or 1.0 (as yet, Koowa 2 is not supported)
* PHP 5.3.10 or better
* Moyo Components
    * com_cck
    * com_moyo
    * com_makundi
    * com_cloudinary
    * com_translations

## Installation

### Composer

Installation is done through composer. In your `composer.json` file, you should add the following lines to the repositories
section:

```json
{
    "name": "cta-int/carousel",
    "type": "vcs",
    "url": "https://github.com/cta-int/cck.git"
}
```

The require section should contain the following line:

```json
    "moyo/carousel": "1.0.*",
```

Afterward, just run `composer install` from the root of your Joomla project.

### jsymlinker

Another option, currently only available for Moyo developers, is by using the jsymlink script from the [Moyo Git
Tools](https://github.com/derjoachim/moyo-git-tools).

## Usage

This component is aimed towards the content manager. Since installation is done automatically through composer, no
additional configuration should be done.

### Categories

Each carousel **must** have their own category. These are managed in the categories tab in `components >> carousel`. A
carousel merely has a title. A slug is automatically generated through `com_moyo`.

### Items

One can populate carousels by adding items to categories. Carousel items are part of our CCK. That is: carousel items are
saved as instantiations of a field set and are translatable.

A carousel item can link to a category, an article or an external link.
