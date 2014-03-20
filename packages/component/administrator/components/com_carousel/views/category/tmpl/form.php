<? defined('KOOWA') or die('Restricted Access'); ?>

<?= @helper('behavior.mootools'); ?>
<script src="media://lib_koowa/js/koowa.js" />

<form action="" class="form-horizontal -koowa-form" method="post">
    <div class="row-fluid">
        <div class="span8">
            <fieldset>
                <legend><?= @text('Content'); ?></legend>
                <div class="control-group">
                    <label class="control-label"><?= @text('Title'); ?></label>
                    <div class="controls">
                        <input class="required" type="text" name="title" value="<?= $item->title ?>" placeholder="<?= @text('Title'); ?>" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><?= @text('Slug'); ?></label>
                    <div class="controls">
                        <input type="text" name="slug" value="<?= $item->slug ?>" placeholder="<?= @text('Slug'); ?>" />
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</form>