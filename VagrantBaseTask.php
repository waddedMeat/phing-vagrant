<?php

require_once 'phing/Task.php';

/**
 * The base class for the Vagrant task.
 */
class VagrantBaseTask extends Task {

  /**
   * The path to the Vagrantfile.
   * @var string
   */
  private $vagrantFile = "Vagrantfile";

  /**
   * The vagrant executable.
   * @var string
   */
  private $vagrantExecutable = "vagrant";

  /**
   * A string of environment variables.
   * @var string
   */
  private $environmentVariables = "";

  /**
   * Main entry point.
   */
  public function main() {}

  /**
   * Execute a command on the vagrant host.
   */
  public function execute($command) {
    $return = NULL;
    $this->log('Executing: ' . $command);
    $command = $this->getVagrantExecutable() . ' ' . $command;

    $environment = $this->getEnvironmentVariables();
    if (!empty($environment)) {
      $command = $environment . ' ' . $command;
    }

    $this->log('Executing: ' . $command);
    passthru($environment . ' ' . $command, $return);
    return $return;
  }

  /**
   * Getters and setters.
   */

  public function setVagrantFile($value) {
    $this->vagrantFile = $value;
  }

  public function getVagrantFile() {
    return $this->vagrantFile;
  }

  public function setVagrantExecutable($value) {
    $this->vagrantExecutable = $value;
  }

  public function getVagrantExecutable() {
    return $this->vagrantExecutable;
  }

  public function setEnvironmentVariables($value) {
    $this->environmentVariables = $value;
  }

  public function getEnvironmentVariables() {
    return $this->environmentVariables;
  }

}
