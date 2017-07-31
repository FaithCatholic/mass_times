<?php

namespace Drupal\mass_times;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Mass times entity.
 *
 * @see \Drupal\mass_times\Entity\MassTimes.
 */
class MassTimesAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\mass_times\Entity\MassTimesInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished mass times entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published mass times entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit mass times entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete mass times entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add mass times entities');
  }

}
