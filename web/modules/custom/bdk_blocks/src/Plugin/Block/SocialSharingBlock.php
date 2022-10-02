<?php

namespace Drupal\bdk_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "social_sharing_block",
 *   admin_label = @Translation("Social sharing block"),
 *   category = @Translation("BDK blocks"),
 * )
 */
class SocialSharingBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $url = \Drupal::request()->getUri();
    if ($node = \Drupal::routeMatch()->getParameter('node')) {
      $title = $node->getTitle();
      return [
        '#markup' => '<div class="social-sharing-block">
<p>Поделиться материалом</p>
<div class="social">
<a class="tg item" target="_blank" href="https://t.me/share/url?url=' . $url . '&text=' . $title . '&utm_source=share"></a>
<a class="ok item" target="_blank" href="https://connect.ok.ru/offer?url=' . $url . '&title=' . $title . '&utm_source=share"></a>
<a class="vk item" target="_blank" href="https://vk.com/share.php?url=' . $url . '&title=' . $title . '&utm_source=share"></a>
</div>
</div>',
      ];

    }
    return [
      '#markup' => '',
    ];
  }

}
