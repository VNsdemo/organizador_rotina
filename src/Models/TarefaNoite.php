<?php

declare(strict_types=1);

require_once 'Tarefa.php';

class TarefaNoite extends Tarefa
{
    public function executar(): void
    {
        echo "Noite: "
            . $this->getNome()
            . PHP_EOL;
    }
}