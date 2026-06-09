<?php

declare(strict_types=1);

class Rotina
{
    private array $tarefas = [];

    public function __construct(
        private string $nome
    ) {}

    public function adicionarTarefa(Tarefa $tarefa): void
    {
        $this->tarefas[] = $tarefa;
    }

    public function listarTarefas(): void
    {
        echo PHP_EOL;
        echo "=== {$this->nome} ===";
        echo PHP_EOL;

        foreach ($this->tarefas as $tarefa) {

            $status = $tarefa->estaConcluida()
                ? "✓"
                : "✗";

            echo "[{$status}] "
                . $tarefa->getHorario()
                . " - "
                . $tarefa->getNome()
                . PHP_EOL;
        }
    }

    public function getNome(): string
    {
        return $this->nome;
    }
}