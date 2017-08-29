<?php

// class CustomException extends Exception
// {
//     // public function getMessage() {}
//     // public function getCode() {}
//     // public function getFile() {}
//     // public function getLine() {}
//     // public function getTrace() {}
//     // public function getTraceAsString() {}
//     // public function getPreviuos() {}
// }

// try {
//     $user = null;
//     if (!$user) {
//         throw new CustomException("Here is custom message", 1);
//     }
//     echo 'Hello user';
// } catch (CustomException $e) {
//     echo $e->getMessage();
//     echo '<br>';
//     echo 'Error occured in ' . $e->getFile() . ":" . $e->getLine();
// } catch (Exception $e) {
//     echo 'Default Exception';
// }

class XmlException extends Exception
{

}

class FileException extends Exception
{

}

class ConfException extends Exception
{
    public $errorMsg = '';
}

try {
    $file = 'mrss.xml';
    if (!file_exists($file)) {
        throw new FileException("Could not find file");
    }
    $xml = simplexml_load_file($file, null, LIBXML_NOERROR);
    if (!is_object($xml)) {
        throw new XmlException(libxml_get_last_error());
    }
    if (!count($matches = $xml->xpath('/rss'))) {
        throw new ConfException("Root element 'rss' does not found");
    }
} catch (FileException $e) {
    // File does not exists or hasn't readable permission
} catch (XmlException $e) {
    // Damaged XML file
} catch (ConfException $e) {
    // Incorrect format of XML file
} catch (Exception $e) {
    // It should not be called ever, but let's left it for some cases
}

