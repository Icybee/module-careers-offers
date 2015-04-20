<?php

use ICanBoogie\I18n\FormattedString;

if ($this->is_provided)
{
	?>
	<p><?= new FormattedString('This job has already been provided.') ?></p>
	<p><a href="<?= $page->site->resolve_view_url($module->flat_id . '/list') ?>"><?= new FormattedString('All records') ?></a></p>
	<?php

	return;
}

$form_id = $core->site->metas["$module->flat_id.form_id"];

if (!$form_id)
{
	throw new \ICanBoogie\Exception\Config($module);
}

$form = $core->models['forms'][$form_id];

$form->before .= $this->excerpt . '<p class="goto-view"><a href="' . $this->url . '">' . new FormattedString('Job details: !title', array('!title' => $this->title)) . '</a></p>';

$page->node = $form;

echo $form;
