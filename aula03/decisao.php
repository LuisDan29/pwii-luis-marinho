<?php
$x = 5;
$y = 9;
$media = ($x + $y) / 2;
//media >= 6,0 = 'aprovado'
//media < 6,0 && >= 4,0
//media = 'recuperação'
//media < 4,0 = 'reprovado'

if ($media >= 6.0) {
    echo 'Aluno aprovado';
} else if ($media >= 4.0) {
    echo 'Aluno em recuperação';
} else {
    echo 'Aluno reprovado';
}
?>