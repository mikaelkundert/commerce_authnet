<?php

namespace Drupal\commerce_authnet\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormInterface;
use Drupal\Core\Form\FormStateInterface;

class AuthnetConfigurationForm extends FormBase implements FormInterface {

  /**
   * @inheritdoc
   */
  public function getFormId() {
    return 'commerce_authnet_config';
  }

  /**
   * @inheritdoc
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
     // TODO: https://www.drupal.org/node/2790963
  }

  /**
   * @inheritdoc
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // TODO: https://www.drupal.org/node/2790963
  }

}
