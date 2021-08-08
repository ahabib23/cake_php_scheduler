<?php
$schedule = new \WatchOwl\CakeScheduler\Schedule\CakeSchedule();
$schedule
    ->run('bin/cake user')
    ->everyMinute()
    ->description('Test aa');

//$schedule->shell('User');
return $schedule;
