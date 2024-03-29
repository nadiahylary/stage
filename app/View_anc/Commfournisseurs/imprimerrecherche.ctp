
<?php

App::import('Vendor', 'xtcpdf');
$pdf = new XTCPDF();
/////////////////////////
// set document information
//debug($lignes);die;
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Logistic Office');
$pdf->SetTitle('bon_livraison');

// set default header data
//$date1 = explode('-', $date);
//$new_date = $date1[2] . '/' . $date1[1] . '/' . $date1[0];
$ent='entete.jpg'; 
$m="";

if($date1!="" && $date2!=""){
$date1=date('d/m/Y', strtotime(str_replace('-', '/',$date1)));
$date2=date('d/m/Y', strtotime(str_replace('-', '/',$date2)));
$m=' du  '.$date1.' au  '.$date2;
}
$pdf->SetHeaderData('BLUE.png', '60', '          Liste Bon Commande    '.$m);
//$pdf->SetHeaderData('entete.jpg', 60);
$footer = 'Kinda';
//$footer1 = 'Fax: ' . $soc['Societe']['Fax'] . ' E-mail: ' . $soc['Societe']['Mail'] . ' ' . $soc['Societe']['Site'] . 'R.C: ' . $soc['Societe']['RC'] . '-Code T.V.A: ' . $soc['Societe']['Code_TVA'];

$aaa = "abc";
$pdf->xfootertext = $footer;
$pdf->xfootertext1 = '';
$pdf->xfootertext2 = '';

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
    require_once(dirname(__FILE__) . '/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------
// set font
//$pdf->SetFont('times', 'B', 16);

// add a page
$pdf->SetFont('dejavusans', '', 12);
$pdf->AddPage('P');

//$pdf->Write(0, 'Example of HTML tables', '', 0, 'L', true, 0, false, false, 0);

//$pdf->SetFont('times', 'A', 11);
        

        
        
// --------------------------------------------------------------------------
$zz='style="font-family:Arial, Helvetica, sans-serif;font-size:13px; border-top:2px solid black;border-left:2px solid black;border-right:2px solid black;"';
$tbl = '
   
 <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
   <tr bgcolor="#FFFFFF" align="center">
        <th width="34%" align="center" $zz height="30px" ><strong>Fournisseur</strong></th>
        <th width="33%" align="center" $zz ><strong>Date</strong></th>
        <th width="33%" align="center" $zz ><strong>Numero</strong></th>
   </tr>';
        $i=0;
       // debug($commfournisseurs);die;
        foreach ($commfournisseurs as $bc){
            
            $i++;
            if($i==15){
                $tbl .='</table>';
                $pdf->writeHTML($tbl, true, false, false, false, '');
                $pdf->AddPage('P');
                $i=0;
                $tbl='
                    <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
                   <tr bgcolor="#FFFFFF" align="center">
                        <th width="34%" align="center" $zz height="30px" ><strong>Fournisseur</strong></th>
                        <th width="33%" align="center" $zz ><strong>Date</strong></th>
                        <th width="33%" align="center" $zz ><strong>Numero</strong></th>
                   </tr>';
            }
            
          
               
        $tbl .= 
    '<tr bgcolor="#FFFFFF" align="center">    
        <td width="34%" nobr="nobr" align="center" height="30px" $zz>'.$bc['Fournisseur']['raison_social'].'</td>
        <td width="33%" nobr="nobr" align="center"  $zz>'.date("d/m/Y",strtotime(str_replace('-','/',$bc['Commfournisseur']['Date']))).'</td>
        <td width="33%" nobr="nobr" align="center"  $zz>'.$bc['Commfournisseur']['Numero'].'</td>
    </tr>' ;     
}

$tbl .= '
   
</table>';
    

$pdf->writeHTML($tbl, true, false, false, false, '');

//Close and output PDF document
ob_end_clean();
$pdf->Output('bon_commande.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>