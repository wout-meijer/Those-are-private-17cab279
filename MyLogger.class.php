<?php


class MyLogger
{
    public function log($message, $type) {
        switch ($type) {
            case 'INFO':
                $this->info($message);
                break;
            case 'ERROR':
                $this->error($message);
                break;
            case 'warning':
                $this->warning($message);
                break;
            case 'debug':
                $this->debug($message);
                break;
            default:
                print($this->logWithTime() . $type . $this->formattedMessage($message));
        }
    }

    public function warning($message) {
        print($this->logWithTime() . 'WARNING' . $this->formattedMessage($message));
    }

    public function error($message) {
        print($this->logWithTime() . 'ERROR' . $this->formattedMessage($message));
    }

    public function info($message) {
        print($this->logWithTime() . 'INFO' . $this->formattedMessage($message));
    }

    public function debug($message) {
        print($this->logWithTime() . 'DEBUG' . $this->formattedMessage($message));
    }

    private function formattedMessage($message): string {
        return  ": "  . $message . "\n";
    }

    private function logWithTime(): string {
        $date = date("D M d, Y G:i");
        return "[$date]" ." ";
    }
}

$logger = new MyLogger();

$logger->log("Hello world!", "ERROR");

$logger->warning("Hello world!");
$logger->error("Hello world!");
$logger->info("Hello world!");
$logger->debug("Hello world!");