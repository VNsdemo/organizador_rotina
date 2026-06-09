<?php

declare(strict_types=1);

require_once 'src/Interfaces/executavel.php';

require_once 'src/Models/Tarefa.php';
require_once 'src/Models/TarefaManha.php';
require_once 'src/Models/TarefaTrabalho.php';
require_once 'src/Models/Rotina.php';
require_once 'src/Models/Usuario.php';

$rotina = new Rotina("Rotina de Trabalho");

$acordar = new TarefaManha(
    "Acordar",
    "06:00"
);

$cafe = new TarefaManha(
    "Tomar Café",
    "06:15"
);

$banho = new TarefaManha(
    "Tomar Banho",
    "06:30"
);

$servico = new TarefaTrabalho(
    "Ir para o Serviço",
    "07:00"
);

$rotina->adicionarTarefa($acordar);
$rotina->adicionarTarefa($cafe);
$rotina->adicionarTarefa($banho);
$rotina->adicionarTarefa($servico);

$usuario = new Usuario("João");

$usuario->adicionarRotina($rotina);

$usuario->visualizarRotinas();

$rotina->listarTarefas();

echo PHP_EOL;
echo "Polimorfismo:" . PHP_EOL;

$acordar->executar();
$servico->executar();