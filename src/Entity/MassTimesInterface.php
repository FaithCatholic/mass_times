<?php

namespace Drupal\mass_times\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Mass times entities.
 *
 * @ingroup mass_times
 */
interface MassTimesInterface extends  ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Mass times name.
   *
   * @return string
   *   Name of the Mass times.
   */
  public function getName();

  /**
   * Sets the Mass times name.
   *
   * @param string $name
   *   The Mass times name.
   *
   * @return \Drupal\mass_times\Entity\MassTimesInterface
   *   The called Mass times entity.
   */
  public function setName($name);

  /**
   * Gets the Mass times creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Mass times.
   */
  public function getCreatedTime();

  /**
   * Sets the Mass times creation timestamp.
   *
   * @param int $timestamp
   *   The Mass times creation timestamp.
   *
   * @return \Drupal\mass_times\Entity\MassTimesInterface
   *   The called Mass times entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Mass times published status indicator.
   *
   * Unpublished Mass times are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Mass times is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Mass times.
   *
   * @param bool $published
   *   TRUE to set this Mass times to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\mass_times\Entity\MassTimesInterface
   *   The called Mass times entity.
   */
  public function setPublished($published);

}
