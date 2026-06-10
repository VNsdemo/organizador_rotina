<?php

declare(strict_types=1);

require_once 'Tarefa.php';

class TarefaTarde extends Tarefa
{
    public function executar(): void
    {
        echo "Tarde: "
            . $this->getNome()
            . PHP_EOL;
    }
}