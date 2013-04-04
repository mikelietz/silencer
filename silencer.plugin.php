<?php
class Silencer extends Plugin
{
	/**
	 * Update the setting prior to displaying the form.
	 **/
	public function action_form_publish( $form, $post, $context )
	{
		$form->settings->comments_enabled->value = false;
	}
}

?>
