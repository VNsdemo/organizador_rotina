<?php

declare(strict_types=1);

require_once 'src/Interfaces/executavel.php';

require_once 'src/Models/TarefaTarde.php';
require_once 'src/Models/TarefaNoite.php';

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
$rotina->adicionarTarefa($almoco);
$rotina->adicionarTarefa($estudar);
$rotina->adicionarTarefa($jantar);
$rotina->adicionarTarefa($dormir);
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

$almoco = new TarefaTarde(
    "Almoçar",
    "12:00"
);

$estudar = new TarefaTarde(
    "Estudar PHP",
    "14:00"
);

$jantar = new TarefaNoite(
    "Jantar",
    "19:00"
);

$dormir = new TarefaNoite(
    "Dormir",
    "22:30"
);
$acordar->executar();
$almoco->executar();
$jantar->executar();