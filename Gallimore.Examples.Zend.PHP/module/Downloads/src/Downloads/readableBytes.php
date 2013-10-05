<?php
/**
 * Downloads
 * 
 * @author
 * @version 
 */
namespace Downloads;

use Zend\View\Helper\AbstractHelper;

/**
 * View Helper
 */
class readableBytes extends AbstractHelper
{

    public function __invoke($bytes)
    {
        return $bytes / (1024 * 1024).'Mb';
    }
}

?>