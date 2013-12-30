<?php

require_once 'VagrantBaseTask.php';

/**
 * A class that handles booting of the vagrant machine.
 */
class VagrantUpTask extends VagrantBaseTask {

  /**
   * The name of the provider.
   * @var string
   */
  private $provider = FALSE;

  /**
   * Main entry point.
   */
  public function main() {
    $provider = $this->getProvider();
    if (empty($provider)) {
      $this->execute('up');
    }
    else {
      $this->execute('up --provider=' . $provider);
    }
  }

  /**
   * Getters and setters.
   */

  public function setProvider($value) {
    $this->provider = $value;
  }

  public function getProvider() {
    return $this->provider;
  }

}
