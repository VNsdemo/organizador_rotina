<?php

declare(strict_types=1);

require_once __DIR__ . '/../Interfaces/executavel.php';

abstract class Tarefa implements Executavel
{
    private bool $concluida = false;

    public function __construct(
        private string $nome,
        private string $horario
    ) {}

    public function concluir(): void
    {
        $this->concluida = true;
    }

    public function estaConcluida(): bool
    {
        return $this->concluida;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getHorario(): string
    {
        return $this->horario;
    }
}