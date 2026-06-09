<?php

declare(strict_types=1);

class Usuario
{
    public function __construct(
        private string $nome,
        private array $rotinas = []
    ) {}

    public function adicionarRotina(Rotina $rotina): void
    {
        $this->rotinas[] = $rotina;
    }

    public function visualizarRotinas(): void
    {
        echo PHP_EOL;
        echo "Usuário: {$this->nome}" . PHP_EOL;

        foreach ($this->rotinas as $rotina) {
            echo "- " . $rotina->getNome() . PHP_EOL;
        }
    }
}