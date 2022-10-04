<?php

namespace Drupal\bdk_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "scroll_to_up_block",
 *   admin_label = @Translation("Scroll to up block"),
 *   category = @Translation("BDK blocks"),
 * )
 */
class ScrollToUp extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#type' => 'inline_template',
      '#template' => '<button type="button" id="scrollToUpButton" class="tax-color"></button> ',
      '#attached' => [
        'library' => [
          'bdk_blocks/scroll_to_up',
        ],
      ],
    ];
  }

}
