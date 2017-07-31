<?php

/**
 * @file
 * Contains mass_times.page.inc.
 *
 * Page callback for Mass times entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Mass times templates.
 *
 * Default template: mass_times.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_mass_times(array &$variables) {
  // Fetch MassTimes Entity Object.
  $mass_times = $variables['elements']['#mass_times'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
