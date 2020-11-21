<?php

class Stopwatch  {
    private $startTime;
    private $endTime;

    function __construct()
    {

    }
    function get_startTime(){
        return round($this->startTime);
    }
    function get_endTime(){
        return round($this->endTime);
    }

    function start() {
        $this->startTime = microtime(true);
    }
    function stop(){
        $this->endTime = microtime(true);
    }
    function getElapsedTime() {
        return $this->endTime - $this->startTime;
    }


}

$stopwatch = new Stopwatch();

$stopwatch->start();
echo "StartTime: ".$stopwatch->get_startTime();
echo '<br>';
for ($i = 0; $i < 100000; $i++) {
    echo "&nbsp";
}
echo '<br>';
$stopwatch->stop();
echo "Endtime: ".$stopwatch->get_endTime();
echo '<br>';
echo $stopwatch->getElapsedTime();