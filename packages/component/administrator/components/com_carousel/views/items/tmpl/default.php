<? defined('KOOWA') or die; ?>

<?= @helper('behavior.mootools'); ?>
<script src="media://lib_koowa/js/koowa.js" />

<div class="row-fluid">
    <form action="" method="get" class="-koowa-grid" data-toolbar=".toolbar-list">
        <table class="table table-striped">
            <thead>
            <tr>
                <th style="text-align: center;" width="1">
                    <?= @helper('grid.checkall')?>
                </th>
                <th>
                    <?= @helper('grid.sort', array('column' => 'title', 'title' => @text('TITLE'))); ?>
                </th>
				<th>
					<?= @helper('grid.sort', array('column' => 'enabled', 'title' => @text('PUBLISHED'))); ?>
				</th>
				<? if($items->isTranslatable()) : ?>
					<th>
						<?= @text('Translations') ?>
					</th>
				<? endif; ?>
				<th>
					<?= @text('Owner'); ?>
				</th>
				<th>
					<?= @helper('grid.sort', array('column' => 'created_on', 'title' => @text('Date'))); ?>
				</th>
				<th>
					<?= @helper('grid.sort', array('column' => 'order', 'title' => @text('ORDER'))); ?>
				</th>
				<th>
					<?= @helper('grid.sort', array('column' => 'id', 'title' => @text('ID'))); ?>
				</th>
            </tr>
            </thead>

            <tfoot>
            <tr>
                <td colspan="8">
                    <?= @helper('paginator.pagination', array('total' => $total)) ?>
                </td>
            </tr>
            </tfoot>

            <tbody>
            <? foreach ($items as $item) : ?>
            <tr>
                <td style="text-align: center;">
                    <?= @helper('grid.checkbox', array('row' => $item))?>
                </td>
                <td>
                    <a href="<?= @route('view=item&id='.$item->id); ?>">
                        <?= $item->title; ?>
                    </a>
                </td>
				<td>
					<?= @helper('grid.enable', array('row' => $item)); ?>
				</td>
				<? if($item->isTranslatable()) : ?>
					<td>
						<?= @helper('com://admin/translations.template.helper.language.translations', array(
							'row' => $item->id,
							'table' => $item->getTable()->getName()
						)); ?>
					</td>
				<? endif; ?>
				<td>
					<?= $item->created_by_name; ?>
				</td>
				<td>
					<?= @helper('date.humanize', array('date' => $item->created_on)) ?>
				</td>
				<td>
					<?= @helper('grid.order', array('row' => $item, 'total' => $total)); ?>
				</td>
				<td>
					<?= $item->id; ?>
				</td>
            </tr>
                <? endforeach; ?>

            <? if (!count($items)) : ?>
            <tr>
                <td colspan="8" align="center">
                    <?= @text('CAROUSEL_NO_ITEMS') ?>
                </td>
            </tr>
                <? endif; ?>
            </tbody>
        </table>
    </form>
</div>