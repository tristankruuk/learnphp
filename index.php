<?php

// library

class Job {
    public function task(ConsoleLogger|NothingLogger $logger) {
        for ($i = 0; $i < 10; $i++) {
            // Mingisugune task tehakse (faili laadimine vmidaiganes)
            $logger->log("Task $i was done!");
        }
    }
}

class ConsoleLogger {
    public function log($message) {
        echo "$message\n";
    }
}

class NothingLogger {
    public function log($message) {

    }
}



// user code

class FileLogger {
    public function log($message) {
        $file = fopen('log.txt', 'a');
        fwrite($file, "$message\n");
        fclose($file);
    }
}

$job = new Job();
$logger = new NothingLogger();
$job->task($logger);



// Kasutajatel on palju soove ja nad tahavad oma lahendusi. Pole mõtet lasta neil koodi kirjutada ja kogu koodi mega pikaks lasta, selle asemel saab kasutada interface

?>