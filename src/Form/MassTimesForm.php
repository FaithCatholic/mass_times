<?php

namespace Drupal\mass_times\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for Mass times edit forms.
 *
 * @ingroup mass_times
 */
class MassTimesForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    /* @var $entity \Drupal\mass_times\Entity\MassTimes */
    $form = parent::buildForm($form, $form_state);

    $entity = $this->entity;

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $entity = &$this->entity;

    $status = parent::save($form, $form_state);

    switch ($status) {
      case SAVED_NEW:
        \Drupal::messenger()->addMessage(t('Created the mass time.'));
        break;

      default:
        \Drupal::messenger()->addMessage(t('Saved the mass time.'));
    }
    $form_state->setRedirect('entity.mass_times.canonical', ['mass_times' => $entity->id()]);
  }

}
