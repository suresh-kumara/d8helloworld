<?php
/**
 * @file
 * Contains \Drupal\hello\Controller\HelloController.
 */
namespace Drupal\hello\Controller;
use Drupal\Core\Controller\ControllerBase;

/**
 * Controller routines for hello module routes.
 */
class HelloController extends ControllerBase {
/**
   * Return the 'Hello World' page.
   *
   * @return string
   *   A render array containing our 'Hello World' page content.
   */
  public function helloWorld() {
    $output = array();
    $output['hello'] = array(
      '#markup' => 'Hello World!',
    );
    return
    $output;
  }
}
