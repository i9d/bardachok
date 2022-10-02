<?php

namespace Drupal\bdk_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "placeholder_block",
 *   admin_label = @Translation("Placeholder block"),
 *   category = @Translation("BDK blocks"),
 * )
 */
class PlaceholderBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => '',
    ];
  }

}
