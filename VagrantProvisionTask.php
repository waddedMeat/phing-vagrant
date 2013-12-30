<?php

require_once 'VagrantBaseTask.php';

/**
 * A class that handles provisioning of the vagrant machine.
 */
class VagrantProvisionTask extends VagrantBaseTask {

  /**
   * Main entry point.
   */
  public function main() {
    $this->execute('provision');
  }

}
