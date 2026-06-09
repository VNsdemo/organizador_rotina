<?php

declare(strict_types=1);

require_once 'Tarefa.php';

class TarefaTrabalho extends Tarefa
{
    public function executar(): void
    {
        echo "💼 Executando tarefa do trabalho: "
            . $this->getNome()
            . PHP_EOL;
    }
}