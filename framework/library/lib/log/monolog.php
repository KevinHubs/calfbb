<?php
namespace Framework\library\lib\log;

use Framework\library\Conf;
class Monolog
{
    public $class;
    public function __construct()
    {
        $this->class = new \Monolog\Logger(MODULE);
        $log_path = conf::get('LOG_PATH','log').date('Ymd').'.log';
        $this->class->pushHandler(new \Monolog\Handler\StreamHandler($log_path));
    }
    
    public function __call($name,$args )
    {
        $this->class->$name($args[1]);
    }
    
    public function addlog($level,$message)
    {
        $this->class->log($level,json_encode($message));
    }
}