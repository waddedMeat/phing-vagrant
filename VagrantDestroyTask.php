<?php

require_once 'VagrantBaseTask.php';

/**
 * A class that handles destroying the vagrant machine.
 */
class VagrantDestroyTask extends VagrantBaseTask {

  /**
   * Main entry point.
   */
  public function main() {
    $this->execute('destroy --force');
  }

}
