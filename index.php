<?php require_once('machineACafe.php') ?>
<?php $machine = new MachineACafe('Senso') ?>
<?php $machineDeux = new MachineACafe('Dolce gusto') ?>
<?php
$machine->afficherEtat();
$machineDeux->afficherEtat();