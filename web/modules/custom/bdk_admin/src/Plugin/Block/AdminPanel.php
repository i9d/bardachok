<?php

namespace Drupal\bdk_admin\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Admin Panel block.
 *
 * @Block(
 *   id = "admin_panel",
 *   admin_label = @Translation("Admin Panel"),
 *   category = @Translation("BDK blocks"),
 * )
 */
class AdminPanel extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build(): array {
    $fields = [];
    $user = \Drupal::currentUser();;
    if ($user) {
      $fields['uid'] = $user->id();
    }
    return [
      '#theme' => 'bdk_admin_panel',
      '#fields' => $fields,
      '#attached' => [
        'library' => [
          'bdk_admin/custom_styles',
        ],
      ],
    ];
  }

}
