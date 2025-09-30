<?php
function getWeekDateRange($week, $year) {
    $dto = new DateTime();
    $dto->setISODate($year, $week);
    $start = $dto->format('Y-m-d');
    $dto->modify('+6 days');
    $end = $dto->format('Y-m-d');
    return array($start, $end);
}

list($start, $end) = getWeekDateRange(12, 2014);
echo "Week 12 of 2014 starts on $start and ends on $end";
?>
