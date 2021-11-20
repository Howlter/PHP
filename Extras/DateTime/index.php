<?php
$date1 = new DateTime('15-02-2023 15:35:00');
//$date1->add(DateInterval::createFromDateString('1 year 2 days 5 minutes 15 seconds'));
//$date->setTimezone(new DateTimeZone('America/Sao_Paulo'));

echo $date1->format('d/m/Y H:i:s');

$date2 = new DateTime('15-03-2020 15:35:00');

if($date1 > $date2){
    echo "</br>"."(DATE 1 É MAIOR QUE DATE 2)";
} else{
    echo "(DATE 2 É MAIOR QUE DATE 1)";
}

$diff = $date1->diff($date2);
echo $diff->format('</br> %y anos, %m meses, %d dias, %h horas, %i minutos, %s segundos');