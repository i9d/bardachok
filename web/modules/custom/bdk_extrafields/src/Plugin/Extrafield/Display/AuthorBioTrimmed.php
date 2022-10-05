<?php

namespace Drupal\bdk_extrafields\Plugin\ExtraField\Display;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\extra_field\Plugin\ExtraFieldDisplayBase;

/**
 * DealerBadges Extra field Display.
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
    $fields = [];
    $field_name = 'title';
//    foreach ($field_names as $field_name) {
//      if (
//        $entity->hasField($field_name) &&
//        !$entity->get($field_name)->isEmpty() &&
//        $entity->get($field_name)->getValue()[0]['value']
//      ) {
//        $fields[$field_name]['title'] = $entity->get($field_name)->getFieldDefinition()->getLabel();
//        $fields[$field_name]['content'] = $entity->get($field_name)->getFieldDefinition()->getDescription();
//      }
//    }

    return [
      '#theme' => 'field',
      '#fields' => $fields,
    ];
  }

}
