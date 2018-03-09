<?php

namespace Patterns\Command;

/**
 * Description of Document
 *
 * @author robertconvery
 */

class Document
{
    public function open()
    {
        echo "Opened\n";
    }
    
    public function close()
    {
    }
    
    public function cut()
    {
    }
    
    public function copy()
    {
    }
    
    public function paste()
    {
        echo "pasted\n";
    }
}
