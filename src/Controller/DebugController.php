<?php

/**
 * @file
 * Contains \Drupal\acq_sku\Controller\SKUController.
 */

namespace Drupal\debug\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class SKUController.
 *
 * @package Drupal\acq_sku\Controller
 */
class DebugController extends ControllerBase {

  /**
   * Debug Controller.
   *
   * @return array
   *   Build array.
   */
  public function debugPage() {
    ndebug(111);


    return [
      '#markup' => $this->t('Nothing to debug.'),
    ];
  }

}
