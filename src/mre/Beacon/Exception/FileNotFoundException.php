<?php
namespace mre\Beacon\Exception;

class FileNotFoundException extends \Exception
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}