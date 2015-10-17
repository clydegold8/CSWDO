<?php
/*
 * Print File PDF form
 * @param : type
 * @return : File
 * @clydegold8
 *
 * */



// Include the main TCPDF library (search for installation path).
require_once('../../tcpdf/tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('clydegold8 & turquato');
$pdf->SetTitle('Printable Forms');


// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// remove default header/footer
$pdf->setPrintHeader(false);
// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}
// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 14, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

/*get images data from directory*/
$image_file = K_PATH_IMAGES.'official_seal.jpg';
$pdf->Image($image_file, 17, 20, 30, '', 'JPG', 'http://www.tcpdf.org', '', true, 150, '', false, false, 0, false, false, false);

$sDEFAULT_NAME = 'Renefredo G. Camba, CPA';

$sFormtype = $_POST['request-type'];
$sName = $_POST['payee'];
$sParticulars = (isset($_POST['particulars'])? $_POST['particulars']:"");
$sExplaination = $_POST['explanation'];
$sCharges = (($_POST['WCharges']== " ")? $_POST['RCharges']: $_POST['WCharges']);
$s1stSignatory = (($_POST['signatory1'] == " ")? $_POST['signatory3']:$_POST['signatory1']);
$s2ndSignatory = (($_POST['signatory2'] == " ")? $sDEFAULT_NAME:$_POST['signatory2']);
$iAmount = $_POST['amount'];

/*Check if what form is requested*/
    switch($sFormtype) {
        case 'disbursement':
            $sRequestedForm = "DISBURSEMENT VOUCHER";
            break;
        case 'purchase':
            $sRequestedForm = "PURCHASE REQUEST";
            break;
        default:
            $sRequestedForm = "OBLIGATION REQUEST";
    }




// Set some content to print

    if(($sFormtype == "disbursement") || ($sFormtype == "purchase")){
        $html = <<<EOD
        <table cellspacing="0" cellpadding="5" border="1">
            <tr>

                <td align="center" colspan="3">
                    <h4> Republic of the Philippines <br>
                    Provincial Government of Surigao del Sur<br>
                    City of Bislig<br>
                    </h4>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center" style="height:50px;line-height:40px;font-size:25px;"><span class="form-type">$sRequestedForm</span></td>
                 <td style="font-size:15px;">No:</td>
            </tr>
            <tr>
                <td style="width:100px;font-size:12px;">Mode Of Payment</td>
                <td colspan="4" style="width:530px;">
                    <input type="checkbox" name="payment" value="payment">
                    <span>Check</span>
                    <input type="checkbox" name="payment" value="payment">
                    <span>Cash</span>
                    <input type="checkbox" name="payment" value="payment">
                    <span>Others</span>
                </td>
            </tr>
            <tr>
                <td style="width:100px;">Payee</td>
                <td align="center" colspan="3" style="width:300px;line-height:50px;">$sName</td>
                <td style="width:100px;font-size:10px;">TIN/Employee No.</td>
                <td style="width:130px;font-size:10px;height:30px;">Obligation Request No.</td>
            </tr>
            <tr>
               <td>Address</td>
               <td align="center" colspan="2" style="width:295px;line-height:50px;">BISLIG CITY</td>
               <td style="width:105px;font-size:10px;height:30px;">Office/Unit/Project</td>
               <td style="width:130px;font-size:10px;height:30px;">Code</td>
            </tr>
            <tr>
               <td colspan="4" align="center" style="font-weight:bold;">Explanation</td>
               <td align="center" style="width:130px;">Amount</td>
            </tr>
            <tr>
                <td colspan="4" rowspan="3" >$sExplaination</td>
                <td colspan="2" rowspan="3" style="width:130px;">$iAmount</td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>

            <tr>
                <td align="center" style="width:40px;">A</td>
                <td colspan="2" style="width:270px;">Certified</td>
                <td align="center" style="width:40px;">B</td>
                <td colspan="3" style="width:280px;">Certified</td>
            </tr>
            <tr>
                <td  colspan="2" style="width:310px;">
                 <input type="checkbox" name="allotment" value="allotment">
                   <span align="right" style="font-size:10px;">
                        Allotment obligated for the purpose as indicated above.
                    </span><br>
                 <input type="checkbox" name="documents" value="documents">
                    <span style="font-size:10px;">
                        Supporting documents complete.
                    </span>
                <br>
                </td>
                <td colspan="2" style="width:320px;">
                 <input type="checkbox" name="allotment" value="allotment">
                   <span style="font-size:10px;">
                        Funds available.
                    </span>
                </td>
            </tr>
             <tr>
                <td align="center" style="width:70px;font-size:10px;">Signature</td>
                <td style="width:240px;"></td>
                <td align="center" style="width:70px;font-size:10px;">Signature</td>
                <td style="width:250px;"></td>
            </tr>
            <tr>
                <td align="center" style="width:70px;font-size:10px;">Printed Name</td>
                <td align="center" style="width:190px;font-weight:bold;font-size:15px;">Raquel L. Bautista</td>
                <td align="left" style="width:50px;font-size:10px;">Date</td>
                <td align="center" style="width:70px;font-size:10px;">Printed Name</td>
                <td align="center" style="width:200px;font-weight:bold;font-size:15px">Rebecca M. Aleta</td>
                <td align="left" style="width:50px;font-size:10px;">Date</td>
            </tr>
            <tr>
                <td rowspan="2" align="center" style="line-height:50px;width:70px;font-size:10px;">Position</td>
                <td colspan="2" align="center" style="font-size:12px;"><b>CITY ACCOUNTANT</b></td>
                <td rowspan="2" align="center" style="line-height:50px;width:70px;font-size:10px;">Position</td>
                <td colspan="2" align="center" style="font-size:12px;"><b>ICO - CITY TREASURER</b></td>
            </tr>
            <tr>
                <td colspan="2" align="center" style="font-size:10px;">Head, Accounting Head/Authorized Representative</td>
                <td colspan="2" align="center" style="font-size:10px;">Treasurer/Authorized Representative</td>
            </tr>
            <tr>
                <td align="center" style="width:40px;">C</td>
                <td colspan="2" style="width:270px;">Approved Payment</td>
                <td align="center" style="width:40px;">D</td>
                <td colspan="3" style="width:280px;">Approved Payment</td>
            </tr>
             <tr>
                <td align="center" style="width:70px;font-size:10px;">Signature</td>
                <td style="width:240px;"></td>
                <td align="center" style="width:70px;font-size:10px;">Check no.</td>
                <td style="width:200px;"></td>
                <td align="left" style="width:50px;font-size:10px;">Date</td>
            </tr>
            <tr>
                <td align="center" style="width:70px;font-size:10px;">Printed Name</td>
                <td align="center" style="width:190px;font-weight:bold;font-size:15px;">Librado C. Navarro</td>
                <td align="left" style="width:50px;font-size:10px;">Date</td>
                <td align="center" style="width:70px;font-size:10px;">Printed Name</td>
                <td align="center" style="width:200px;font-weight:bold;font-size:15px">$sName</td>
                <td align="left" style="width:50px;font-size:10px;">Date</td>
            </tr>
            <tr>
                <td rowspan="2" align="center" style="line-height:50px;width:70px;font-size:10px;">Position</td>
                <td colspan="2" align="center" style="font-size:12px;"><b>CITY MAYOR</b></td>
                <td rowspan="2" align="left" style="width:150px;font-size:10px;">OR/Other Documents</td>
                <td rowspan="2" align="left" style="width:90px;font-size:10px;">JEV</td>
                <td rowspan="2" align="left" style="width:80px;font-size:10px;">Date</td>

            </tr>
            <tr>
                <td colspan="2" align="center" style="font-size:10px;">Agency Head/Authorized Representative</td>

            </tr>
        </table>
EOD;
    }else{
        $html = <<<EOD
            <table cellspacing="0" cellpadding="5" border="1">
                <tr>

                    <td align="center" colspan="3">
                        <h4> Republic of the Philippines <br>
                        Provincial Government of Surigao del Sur<br>
                        City of Bislig<br>
                        </h4>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center" style="height:50px;line-height:40px;font-size:25px;"><span class="form-type">$sRequestedForm</span></td>
                     <td style="font-size:15px;">No:</td>
                </tr>
                <tr>
                    <td style="width:100px;">Payee</td>
                    <td colspan="4" style="width:530px;">$sName</td>
                </tr>
                <tr>
                   <td>Office</td>
                   <td colspan="4" style="width:530px;">CSWDO</td>
                </tr>
                <tr>
                   <td>Address</td>
                   <td colspan="4" style="width:530px;">BISLIG CITY</td>
                </tr>
                <tr>
                   <td align="center" style="font-size:12px;width:120px;">Responsibility Center</td>
                   <td align="center" style="font-weight:bold;width:250px;">Explanation</td>
                   <td style="width:50px;font-size:12px;">F.P.P</td>
                   <td align="center" style="width:90px;font-size:12px;">Account Code</td>
                   <td align="center" style="width:120px;">Amount</td>
                </tr>
                <tr>
                    <td rowspan="6"></td>
                    <td rowspan="6">$sExplaination</td>
                    <td rowspan="6"></td>
                    <td rowspan="6"></td>
                    <td rowspan="6">$iAmount</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                 <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td align="center" colspan="4">$sCharges
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total</td>
                    <td>$iAmount</td>
                </tr>
                <tr>
                    <td align="center" style="width:40px;">A</td>
                    <td>Certified</td>
                    <td align="center" style="width:40px;">B</td>
                    <td colspan="3" style="width:300px;">Certified</td>
                </tr>
                <tr>
                    <td align="right" colspan="2" style="width:310px;">
                    <br>
                     <input type="checkbox" name="allotment" value="allotment">
                       <span style="font-size:10px;">
                            Charges to appropriation/allotment, necessary, lawful and under my direct supervision.
                        </span><br><br>
                     <input type="checkbox" name="documents" value="documents">
                        <span style="font-size:10px;">
                            Supporting documents valid, proper and legal.
                        </span>
                    <br>
                    </td>
                    <td colspan="2" style="width:320px;">
                        <br>
                     <input type="checkbox" name="allotment" value="allotment">
                       <span style="font-size:10px;">
                            Existence of available appropriation.
                        </span><br>
                    </td>
                </tr>
                 <tr>
                    <td align="center" style="width:70px;font-size:10px;">Signature</td>
                    <td style="width:240px;"></td>
                    <td align="center" style="width:70px;font-size:10px;">Signature</td>
                    <td style="width:250px;"></td>
                </tr>
                <tr>
                    <td align="center" style="width:70px;font-size:10px;">Printed Name</td>
                    <td align="center" style="width:240px;font-weight:bold;font-size:15px;">$s1stSignatory</td>
                    <td align="center" style="width:70px;font-size:10px;">Printed Name</td>
                    <td align="center" style="width:250px;font-weight:bold;font-size:15px">$s2ndSignatory</td>
                </tr>
                <tr>
                    <td rowspan="2" align="center" style="line-height:50px;width:70px;font-size:10px;">Position</td>
                    <td align="center" style="font-size:12px;"><b>CITY ACCOUNTANT</b></td>
                    <td rowspan="2" align="center" style="line-height:50px;width:70px;font-size:10px;">Position</td>
                    <td align="center" style="font-size:12px;"><b>CITY BUDGET OFFICER</b></td>
                </tr>
                <tr>
                    <td align="center" style="font-size:10px;">Head, Accounting Head/Authorized Representative</td>
                    <td align="center" style="font-size:10px;">Head, Budget Unit/Authorized Representative</td>
                </tr>
                <tr>
                    <td align="center" style="width:70px;font-size:10px;">Date</td>
                    <td style="width:240px;"></td>
                    <td align="center" style="width:70px;font-size:10px;">Date</td>
                    <td style="width:250px;"></td>
                </tr>


            </table>
EOD;
    }


// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
$pdf->Output('Printable-Form.pdf', 'I');

