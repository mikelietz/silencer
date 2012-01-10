<?php
class Silencer extends Plugin
{
	/**
	 **/
	public function action_plugin_activation( $file )
	{
		if(Plugins::id_from_file($file) == Plugins::id_from_file(__FILE__)) {
			// for now, do nothing. Someday global postinfo changes may go here.
		}
	}

	/**
	 * Update the setting prior to displaying the form.
	 **/
	public function action_form_publish( $form, $post, $context )
	{
		$form->settings->comments_enabled->value = false;
	}

}

?>
