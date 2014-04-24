<?php
require "./RTFParser.inc";
class ERTFParser extends RTFParser{
        function ERTFParser($file){
                parent::RTFParser();
                $this->carg1 = $file;
                $this->arg1 = $file;
                $this->ReadFile();
                $this->display = $this->parseBody();
        }
}
$_SERVER['argv'][1] = "test_2.rtf";
$file = $_SERVER['argv'][1];
$obj = new ERTFParser($file);
echo $obj->display;
?>
