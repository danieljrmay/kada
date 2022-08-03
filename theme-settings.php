<?php

/**
 * @file
 * Theme settings.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function kada_form_system_theme_settings_alter(&$form, &$form_state) {
  $form['hide_header_menu_for_anonymous'] = array(
    '#type' => 'checkbox',
    '#title' => t('Hide header menu for anonymous'),
    '#default_value' => theme_get_setting('hide_header_menu_for_anonymous', 'kada'),
  );
}
