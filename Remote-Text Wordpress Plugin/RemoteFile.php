<?php

class RemoteFile
{
    
    protected $url;
    
    function __construct($fileURL)
    {
        
        $this->url = $fileURL;
        
    }
    
    public function getFileContent()
    {
        
        try{
            
            $rf = file_get_contents($this->url);
            
            return $rf;
            
        } catch (Exception $ex) {

            throw new Exception('Remotedatei kann nicht angezeigt werden:<br> ' . $ex->getMessage(), 404);
            
        }
        
    }
    
}

?>
