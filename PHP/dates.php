<?php
$raw = '1995-09-22';
$start = DateTime::createFromFormat('Y-m-d', $raw);

echo "Start Date: " . $start->format('d-m-Y') . "\n";

// cria uma cópia de $start e adiciona um mês e 6 dias
$end = clone $start;
$end->add(new DateInterval('P1M6D'));

$diff = $end->diff($start);
echo "Difference: " . $diff->format('%m month, %d days (total: %a days)') . "\n";
// Diferença: 1 mês, 6 dias (total: 37 dias)

if($start < $end) {
    echo "Start is before end!\n";
}

// mostra todas as quintas-feiras entre $start e $end
$periodInterval = DateInterval::createFromDateString('first thursday');
$periodIterator = new DatePeriod($start, $periodInterval, $end, DatePeriod::EXCLUDE_START_DATE);
foreach($periodIterator as $date) {
    //mostra cada data no período
    echo $date->format('Y-m-d') . " ";
}
?>