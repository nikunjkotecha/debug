<?php

namespace Drupal\debug;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceModifierInterface;
use Drupal\Core\DependencyInjection\ServiceProviderBase;

/**
 * Class DebugServiceProvider.
 */
class DebugServiceProvider extends ServiceProviderBase implements ServiceModifierInterface {

  /**
   * {@inheritdoc}
   */
  public function alter(ContainerBuilder $container) {
    try {
      $twig_config = $container->getParameter('twig.config');
      $twig_config['debug'] = TRUE;
      $twig_config['auto_reload'] = TRUE;
      $twig_config['cache'] = FALSE;
      $container->setParameter('twig.config', $twig_config);

      // This is required for local to keep working smoothly.
      $container->setParameter('http.response.debug_cacheability_headers', FALSE);
    }
    catch (\Exception $e) {
      // Do nothing, system might still be installing.
    }
  }

}
