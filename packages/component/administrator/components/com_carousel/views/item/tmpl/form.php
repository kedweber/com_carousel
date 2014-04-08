<? defined('KOOWA') or die; ?>

<?= @helper('behavior.mootools'); ?>
<?= @helper('behavior.modal'); ?>

<?= @helper('behavior.keepalive'); ?>
<?= @helper('behavior.validator'); ?>

<script src="media://lib_koowa/js/koowa.js" />

<script>
	var previous;

	jQuery.noConflict()(function($){
		$("input:radio[data-target]").each(function(index) {
			var target = $(this).attr("data-target");

			if($(this).is(":checked")) {
				previous = target;
				$("#" + target).closest('.control-group').toggleClass('hidden');
			} else {
				$("#" + target).val(" ");
				$("#" + target + "_hidden").val(" ");
			}

			$(this).on("change", function() {
				$("#" + previous).closest('.control-group').toggleClass("hidden");
				$("#" + previous + "_hidden").val(" ");
				$("#" + previous).val(' ');
				$("#" + target).closest('.control-group').toggleClass("hidden");
				previous = target;
			});
		});
	});
</script>

<form action="" class="form-horizontal -koowa-form" method="post">
    <div class="row-fluid">
        <div class="span8">
            <fieldset>
                <legend><?= @text('CONTENT'); ?></legend>
                <div class="control-group">
                    <label class="control-label"><?= @text('TITLE'); ?></label>
                    <div class="controls">
                        <input class="required" type="text" name="title" value="<?= $item->title ?>" placeholder="<?= @text('TITLE'); ?>" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><?= @text('SLUG'); ?></label>
                    <div class="controls">
                        <input type="text" name="slug" value="<?= $item->slug ?>" placeholder="<?= @text('Slug'); ?>" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><?= @text('CATEGORY'); ?>*</label>
                    <div class="controls">
                        <?= @helper('com://admin/carousel.template.helper.listbox.categories', array(
                            'selected' => $item->carousel_category_id,
                            'name' => 'carousel_category_id',
                            'attribs' => array(
                                'class' => 'required'
                            )
                        )); ?>
                    </div>
                </div>
			</fieldset>

			<fieldset>
				<legend><?= @text('LINK'); ?></legend>
				<div class="control-group">
					<div class="controls link">
						<label class="radio">
							<input type="radio" name="use_url" value="0" data-target="article" <?= ($item->use_url == 0) ? 'checked' : ''; ?>>
							<?= @text('USE_ARTICLE_LINK');?>
						</label>
                        <label class="radio">
                            <input type="radio" name="use_url" value="1" data-target="category" <?= ($item->use_url == 1) ? 'checked' : ''; ?>>
                            <?= @text('USE_CATEGORY_LINK');?>
                        </label>
						<label class="radio">
							<input type="radio" name="use_url" value="2" data-target="external" <?= ($item->use_url == 2) ? 'checked' : ''; ?>>
							<?= @text('USE_EXTERNAL_LINK');?>
						</label>
					</div>
				</div>

				<div class="control-group hidden">
					<label class="control-label"><?= @text('ARTICLE'); ?></label>
					<div class="controls">
						<div class="input-append">
							<?= @helper('com://admin/articles.template.helper.modal.article', array(
								'name'  => 'articles_article_id',
								'id'  => 'article',
								'title' => $item->article_title,
								'selected' => $item->articles_article_id,
								'attribs' => array('name' => 'article_title', 'class' => 'article'),
                                'link_selector' => 'modal'
							)); ?>
						</div>
					</div>
				</div>

                <div class="control-group hidden">
                    <label class="control-label"><?= @text('CATEGORY'); ?></label>
                    <div class="controls">
                        <div class="input-append">
                            <?= @helper('com://admin/makundi.template.helper.listbox.categories', array(
                                'attribs' => array(
                                    'id' => 'category'
                                ),
                                'text' => 'title',
                                'selected' => $item->makundi_category_id,
                                'name' => 'makundi_category_id'
                            )); ?>
                        </div>
                    </div>
                </div>

				<div class="control-group hidden">
					<label class="control-label"><?= @text('URL'); ?></label>
					<div class="controls">
						<input type="text" size="25" name="url" id="external" value="<?= $item->url; ?>" class="external" />
					</div>
				</div>

				<div class="control-group">
					<label class="control-label"><?= @text('CALL-TO-ACTION_BUTTON'); ?></label>
					<div class="controls">
						<input class="required" type="text" name="read_more_text" value="<?= $item->read_more_text ? $item->read_more_text  : @text('LEARN_MORE'); ?>"" />
					</div>
				</div>
			</fieldset>

            <fieldset>
                <legend><?= @text('FIELDS'); ?></legend>
                <?= @service('com://admin/cck.controller.element')->cck_fieldset_id($item->cck_fieldset_id)->row($item->id)->table('carousel_items')->getView()->assign('row', $item)->layout('list')->display(); ?>
            </fieldset>
        </div>
        <div class="span4">
            <fieldset>
                <legend><?= @text('DETAILS'); ?></legend>

                <div class="control-group">
                    <label class="control-label"><?= @text('Translated'); ?></label>
                    <div class="controls">
                        <?= @helper('select.booleanlist', array('name' => 'translated', 'selected' => $item->translated)); ?>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</form>