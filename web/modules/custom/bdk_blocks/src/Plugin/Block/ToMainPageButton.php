<?php

namespace Drupal\bdk_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "to_main_page_button",
 *   admin_label = @Translation("To main page button"),
 *   category = @Translation("BDK blocks"),
 * )
 */
class ToMainPageButton extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => '<div id="toMainPageButton"><a href="/">На главную</a></div>',
    ];
  }

}
