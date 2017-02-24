<?php

namespace Drupal\migrate_process_xml\Plugin\migrate\process;

use Drupal\migrate\MigrateException;
use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\Row;

/**
 * Process XML data in a source field.
 *
 *
 * @MigrateProcessPlugin(
 *   id = "xml",
 *   handle_multiples = TRUE
 * )
 */
class Xml extends ProcessPluginBase {

  /**
   * {@inheritdoc}
   *
   * Processes XML data in the current value.
   */
  public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {
    $data = new \SimpleXMLElement($value);
    $selector = implode('->', explode('/', trim(isset($this->configuration['selector']) ? $this->configuration['selector'] : '', '/')));
    return $data->{$selector};
  }

}
