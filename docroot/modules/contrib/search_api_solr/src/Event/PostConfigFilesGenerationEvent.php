<?php

namespace Drupal\search_api_solr\Event;

final class PostConfigFilesGenerationEvent extends AbstractServerAwareEvent {

  /**
   * The files.
   *
   * @var array
   */
  protected $files;

  /**
   * Constructs a new class instance.
   *
   * @param array $files
   *   Reference to file array.
   * @param string $lucene_match_version
   * @param string $server_id
   */
  public function __construct(array &$files, string $lucene_match_version, string $server_id) {
    parent::__construct($lucene_match_version, $server_id);
    $this->files = &$files;
  }

  /**
   * Retrieves the files array.
   *
   * @return array
   *   The files array.
   */
  public function getConfigFiles(): array {
    return $this->files;
  }

  /**
   * Set the files array.
   *
   * @param array $files
   */
  public function setConfigFiles(array $files) {
    $this->files = $files;
  }

}
