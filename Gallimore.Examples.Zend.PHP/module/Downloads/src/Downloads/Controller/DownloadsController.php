<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/Downloads for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Downloads\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class DownloadsController extends AbstractActionController
{
    public function indexAction()
    {
        $downloadService = $this->getServiceLocator()->get('downloadsService');
        
        
        return array("fileList" => $downloadService->getFileList(),
            "filePath" => $downloadService->getFilePath(),
            "fileSize" => $downloadService->getFileSize());
        
        
        
        //return array("fileList"=>array("download1", "download2"),
        //    "filePath"=>"http://download.eclipse.org/tools/pdt",
        //    "fileSize"=>200000);
    }

    public function fooAction()
    {
        // This shows the :controller and :action parameters in default route
        // are working when you browse to /downloads/downloads/foo
        return array();
    }
}

?>
