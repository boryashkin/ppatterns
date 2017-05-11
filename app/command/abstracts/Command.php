<?php

namespace Ppatterns\command\abstracts;

interface Command
{
    public function execute();
    public function undo();
}