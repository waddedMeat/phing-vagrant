<?php

require_once 'VagrantBaseTask.php';

/**
 * A class that handles ssh executions to the vagrant machine.
 */
class VagrantExecTask extends VagrantBaseTask {

  /**
   * The command to run on the vagrant host.
   * @var string
   */
  private $command = "";

  /**
   * The base directory to run commands.
   * @var string
   */
  private $baseDir = "~";

  /**
   * Main entry point.
   */
  public function main() {
    $command = $this->getCommand();
    if (empty($command)) {
      $this->log('Command was not set.');
      return;
    }
    $this->execute($command);
  }

  /**
   * @inheritdoc
   */
  public function execute($command) {
    $return = NULL;
    $command = 'cd ' . $this->getBaseDir() . ' && ' . $command;

    // Ensure the end user sees what is happening.
    $command = $this->getVagrantExecutable() . ' ssh-config | ssh -t -t -F /dev/stdin default "' . $command . '"';

    // Execute on the host.
    $environment = $this->getEnvironmentVariables();
    if (!empty($environment)) {
      $command = $environment . ' ' . $command;
    }

    $this->log('Executing: ' . $command);
    passthru($command, $return);
    return $return;
  }

  /**
   * Getters and setters.
   */

  public function setCommand($value) {
    $this->command = $value;
  }

  public function getCommand() {
    return $this->command;
  }

  public function setBaseDir($value) {
    $this->baseDir = $value;
  }

  public function getBaseDir() {
    return $this->baseDir;
  }

}
