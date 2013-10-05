<?php
namespace Downloads;

class DownloadsService {
    function getFileList() {
        return array("download1.zip", "download2.zip");
    }
    
    function getFilePath() {
        return "http://download.eclipse.org/tools/pdt";
    }
    
    function getFileSize() {
        return 5000000;
    }
}

?>