<?php

namespace Drupal\mass_times\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Mass times entities.
 */
class MassTimesViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.

    return $data;
  }

}
