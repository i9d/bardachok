<?php

namespace Drupal\bdk_search_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Search Button' Block.
 *
 * @Block(
 *   id = "search_button_block",
 *   admin_label = @Translation("BDK Search Block"),
 *   category = @Translation("BDK blocks"),
 * )
 */
class SearchButtonBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $content['search_view'] = [
      '#type' => 'view',
      '#name' => 'search_content',
      '#display_id' => 'search_content_block',
    ];
    return [
      '#theme' => 'search_default_layout',
      '#content' => $content,
      '#attached' => [
        'library' => 'bdk_search_block/search_block'
      ],
    ];
  }

}
