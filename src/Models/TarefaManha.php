<?php

declare(strict_types=1);

require_once 'Tarefa.php';

class TarefaManha extends Tarefa
{
    public function executar(): void
    {
        echo "Executando tarefa da manhã: "
            . $this->getNome()
            . PHP_EOL;
    }
}