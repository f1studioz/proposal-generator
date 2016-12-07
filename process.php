<?php
require_once 'PHPWord.php';
require_once 'HTMLtoOpenXML.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$PHPWord = new PHPWord();


$Deliverable = $_POST["Deliverable"];
$DeliverableOpenXML = HTMLtoOpenXML::getInstance()->fromHTML($Deliverable);

$ScopeDesign = $_POST["ScopeDesign"];
$ScopeDesignOpenXML = HTMLtoOpenXML::getInstance()->fromHTML($ScopeDesign);

$ScopeImplementation = $_POST["ScopeImplementation"];
$ScopeImplementationOpenXML = HTMLtoOpenXML::getInstance()->fromHTML($ScopeImplementation);


$FunctionalityUser = $_POST["FunctionalityUser"];
$FunctionalityUserOpenXML = HTMLtoOpenXML::getInstance()->fromHTML($FunctionalityUser);

$FunctionalityInstitution = $_POST["FunctionalityInstitution"];
$FunctionalityInstitutionOpenXML = HTMLtoOpenXML::getInstance()->fromHTML($FunctionalityInstitution);

$Timelines = $_POST["Timelines"];
$TimelinesOpenXML = HTMLtoOpenXML::getInstance()->fromHTML($Timelines);

$PricingBreakup = $_POST["PricingBreakup"];
$PricingBreakupOpenXML = HTMLtoOpenXML::getInstance()->fromHTML($PricingBreakup);

//echo $ScopeImplementationOpenXML; exit;
//print_r($_POST);exit;
/*
echo "Scope";
echo $ScopeOpenXML;
echo "<br/><br/><br/>Functionality";
echo $FunctionalityOpenXML;
echo "<br/><br/><br/>Timelines";
echo $TimelinesOpenXML;
echo "<br/><br/><br/>PricingBreakup";
echo $PricingBreakupOpenXML;
*/

$document = $PHPWord->loadTemplate('Examples/Template.docx');
$document->setValue('CompanyName', $_POST["CompanyName"]);
$document->setValue('CompanyRegisteredName', $_POST["CompanyRegisteredName"]);
$document->setValue('CompanyPOC', $_POST["CompanyPOC"]);
$document->setValue('CompanyPOCDesignation', $_POST["CompanyPOCDesignation"]);
$document->setValue('pname', $_POST["ProjectName"]);
$document->setValue('Deliverable', $DeliverableOpenXML);
$document->setValue('scopedesign', $ScopeDesignOpenXML);
$document->setValue('scopeui', $ScopeImplementationOpenXML);
$document->setValue('f1', $FunctionalityUserOpenXML);
$document->setValue('f2', $FunctionalityInstitutionOpenXML);
$document->setValue('Timelines', $TimelinesOpenXML);
$document->setValue('PricingBreakup', $PricingBreakupOpenXML);
$document->setValue('TotalEffort', $_POST["TotalEffort"]);
$document->setValue('GracePeriod',$_POST["GracePeriod"]);
$document->setValue('AdditionalChargesHourlyRate', $_POST["AdditionalChargesHourlyRate"]);
$document->setValue('TotalCost', $_POST["TotalCost"]);
$document->setValue('InvoicePayableWithinXDays', $_POST["InvoicePayableWithinXDays"]);

$temp_file = tempnam(sys_get_temp_dir(), 'PHPWord');
ob_start();
$document->save($temp_file);
//echo readfile($temp_file);exit;
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header("Content-Disposition: attachment; filename='proposal.docx'");
header("Content-Transfer-Encoding: binary ");
readfile($temp_file); // or echo file_get_contents($temp_file);
unlink($temp_file);  // remove temp file
header("Refresh:0");

//print_r($_POST); echo "<pre>";
}
?>