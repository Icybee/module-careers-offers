<?php

if ($bind->is_provided)
{
	?>
	<p><?php echo t('This job has already been provided.') ?></p>
	<p><a href="<?php echo $page->site->resolve_view_url($module->flat_id . '/list') ?>"><?php echo t('All records') ?></a></p>
	<?php

	return;
}

$form_id = $core->site->metas["$module->flat_id.form_id"];

if (!$form_id)
{
	throw new Exception\Config($module);
}

$form = $core->models['forms'][$form_id];

$form->before .= $bind->excerpt . '<p class="goto-view"><a href="' . $bind->url . '">' . t('Job details: !title', array('!title' => $bind->title)) . '</a></p>';

$page->node = $form;
$page->title .= ' : ' . $bind->title;
$page->label = $bind->title;

echo $form;