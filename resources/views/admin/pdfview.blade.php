{{-- <a href="{{ route('pdfview',['download'=>'pdf']) }}">Download PDF</a> --}}

{{-- <img src="{{ public_path('pdf_assets/decode.png') }}" alt="logo" height="auto"> --}}
{{-- <img src="{{ public_path() . '\pdf_assets\decode.png' }}"> --}}

<img src="D:\laravel_projects\covid_db\public\pdf_assets/decode.png">
<?php  echo public_path('pdf_assets/decode.png') ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<style>
    table
    * {
     font-family: "DejaVu Sans";
     font-size: 16px;
    }
    /* {
        width: auto;
        font: 17px Calibri;
    } */
    table, th, td 
    {
        border: solid 1px #DDD;
        border-collapse: collapse;
        padding: 2px 3px;
        text-align: center;
    }
    th,td{
        width: 100px;
        min-width: 100px;
    }
</style>

<table class="" >
    <tr>
        <th width="150">Sample ID</th>
        <td width="150"></td>
        <td width="150"></td>

        <th width="150">Specimen</th>
        <td width="150"></td>
        <td width="150"></td>
    </tr>
    <tr>
        <th width="150">Patient's Name</th>
        <td width="150">{{ $patient->patient_name }}</td>
        <td width="150"></td>

        <th width="150">Specimen Collection Site</th>
        <td width="150"></td>
        <td width="150"></td>
    </tr>
    <tr>
        <th width="150">Address</th>
        <td width="150"></td>
        <td width="150"></td>

        <th width="150">Specimen Collection Date</th>
        <td width="150"></td>
        <td width="150"></td>
    </tr>

    <tr>
        <th width="150">Age/Gender</th>
        <td width="150">{{ $patient->patient_age }}</td>
        <td width="150">{{ $patient->gender }}</td>

        <th width="150">Specimen Collection Time</th>
        <td width="150"></td>
        <td width="150"></td>
    </tr>

    <tr>
        <th width="150">Phone</th>
        <td width="150">{{ $patient->phone }}</td>
        <td width="150"></td>

        <th width="150">Reporting Date</th>
        <td width="150"></td>
        <td width="150"></td>
    </tr>

    <tr>
        <th width="150">Email</th>
        <td width="150"></td>
        <td width="150"></td>

        <th width="150">Reporting Time</th>
        <td width="150"></td>
        <td width="150"></td>
    </tr>

    <tr>
        <th width="150">Passport No.</th>
        <td width="150"></td>
        <td width="150"></td>

        <th width="150">Referring Physician</th>
        <td width="150"></td>
        <td width="150"></td>
    </tr>
    
</table>

<table>
    <tr>
        <th width="150">Investigation</th>
        <th width="150">Value (CT.)</th>
    </tr>
    <tr>
        <td width="150"><b>COVID-19 (SARS-Cov-2) RT-PCR</b></td>
        <td width="150"></td>
    </tr>
    <tr>
        <td width="150"><b>E-GENE</b></td>
        <td width="150">{{ $patient->e_gene}}</td>
    </tr>
    <tr>
        <td width="150"><b>N-GENE</b></td>
        <td width="150">{{ $patient->n_gene}}</td>
    </tr>
    <tr>
        <td width="150"><b>ORF-lab</b></td>
        <td width="150">{{ $patient->orf_lb}}</td>
    </tr>
    <tr>
        <?php 
            if($patient->result == 0){
                $res = 'NEGATIVE';
            }else{
                $res = 'POSITIVE';
            } 
        ?>
        <td width="150"><b>RESULT</b></td>
        <td width="150"><b>{{ $res }}</b></td>
    </tr>
</table>

<h4>Array Description</h4>
<p>This assay has been performed for qualitative detection of the ORF-1ab and N genes of SARS-CoV-2 RNA using CE IVD/USFDA kits.  Internal control targeting the RNase P gene has been used to monitor the sample collection, sample handling and RT- PCR process to avoid false-negative results. The LoD of the kit is 200 copies/µl.						
</p>
<p>Negative Result does not rule out the possibility of COVID-19 infection. Clinical symptoms and other laboratory findings should be considered before making final decision. 						
</p>
<p>PCR is a highly sensitive technique, common reasons for paradoxical results are contamination during specimen collection, selection of inappropriate specimen, improper specimen transport and storage and presence of PCR Inhibitors in the specimen.						
</p>

<div class="">
    <table>
        <tr>
            <td width="150"><b>Performed By</b></td>
            <td width="150">Niru Maharjan</td>
            <td width="150">NHPC No.: A-1949 MLT</td>
        </tr>
    </table>
</div>


