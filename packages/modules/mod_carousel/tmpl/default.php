<div id="carousel" class="carousel slide" data-ride="carousel">
    <? $first = 1; ?>
    <div class="carousel-inner">
        <? foreach($items as $item) : ?>
            <div class="item <?= $first ? "active" : null; ?>">
                <? $first = false; ?>

                <?= @service('com://admin/cloudinary.controller.image')->path($item->image)->width(1170)->height(350)->gravity('north')->quality($width ? 20 : 60)->cache(0)->display(); ?>
				<div class="carousel-caption">
					<h1><?= $item->title; ?></h1>
					<?= $item->fulltext; ?>
					<? if($item->url) : ?>
						<a class="btn btn-call-to-action pull-bottom" href="<?= @route($item->url); ?>"><?= $item->read_more_text; ?></a>
					<? endif; ?>
				</div>
            </div>
        <? endforeach; ?>
    </div>

    <a class="left carousel-control" href="#carousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>