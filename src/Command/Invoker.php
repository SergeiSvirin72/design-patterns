<?php

namespace Command;

class Invoker
{
    protected CommandInterface $command;

    public function __construct(CommandInterface $command)
    {
        $this->setCommand($command);
    }

    public function setCommand(CommandInterface $command)
    {
        $this->command = $command;
    }

    public function executeCommand()
    {
        if ($this->command->execute()) {
            print "Command success.\n";
        } else {
            print "Command fail.\n";
        }
    }
}
