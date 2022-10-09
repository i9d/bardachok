<?php

namespace Drupal\bdk_extra_field\Plugin\ExtraField\Display;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\extra_field\Plugin\ExtraFieldDisplayBase;

/**
 * Author Bio trimmed Extra field Display.
 *
 * @ExtraFieldDisplay(
 *   id = "author_bio_trimmed",
 *   label = @Translation("Author Bio trimmed"),
 *   description = @Translation("Author Bio trimmed."),
 *   bundles = {
 *     "user.*",
 *   }
 * )
 */
class AuthorBioTrimmed extends ExtraFieldDisplayBase {

  /**
   * {@inheritdoc}
   */
  public function view(ContentEntityInterface $entity) {
    $field = [];
    $field_name = 'field_bio';
    if (
      $entity->hasField($field_name) &&
      !$entity->get($field_name)->isEmpty()
    ) {
      $field = $entity->get($field_name);
      $value = $field->value;
      $new_value = strstr($value, ',', true) ?: $value;
      $field = strstr($new_value, '', true) ?: $new_value;
    }

    return [
      '#theme' => 'bdk_author_bio_trimmed',
      '#field' => $field,
    ];
  }

}
