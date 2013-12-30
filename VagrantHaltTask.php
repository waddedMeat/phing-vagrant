<?php

require_once 'VagrantBaseTask.php';

/**
 * A class that handles halting of the vagrant machine.
 */
class VagrantHaltTask extends VagrantBaseTask {

  /**
   * Main entry point.
   */
  public function main() {
    $this->execute('halt');
  }

}
