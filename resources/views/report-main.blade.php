@extends('layouts.app')
@section('content')

<style type="text/css">
        table {
            width: 100%;
            border: 1px black;
        }

            table td, table th {
                border: 1px solid black;
            }

            table .FirstColumn {
                background-color: white;
            }

            table thead tr {
                background-color: lightgreen;
            }

            table tbody.secondHeader tr {
                background-color: skyblue;
            }

            table tfoot{

                background-color: white;
            }
    </style>

<style>
        body {
                font-family: 'Nunito', sans-serif;
            }

        

        </style>

        <div class="bg-success p-2 text-white bg-opacity-10">
        <div class="text-center pb-2 m-2">
        <h2> Department of Industrial Policy and Promotion </h2>
        </div>
        </div>

         <hr size="1" noshade>
         
         <div class="text-center pb-2 m-2">
        <h4> Foreign Collaboration Query Module</h4>
        </div>
       
        
        <div class="text-center pb-2 m-2">
        <h4> Report </h4>
        </div>
        <hr size="1" noshade>

<div class="container">
    <div class="row">

        @if($fromTitle)
        <div class="col-md-4">
        <h4> {{$fromTitle}}</h4>
        </div>
        @endif

        @if($toTitle)
        <div class="col-md-4">
        <h4> {{$toTitle}}</h4>
        </div>
        @endif

        @if($AgencyTitle)
        <div class="col-md-4">
        <h4> {{$AgencyTitle}}</h4>
        </div>
        @endif


        @if($CountryTitle)
        <div class="col-md-4">
        <h4> {{$CountryTitle}}</h4>
        </div>
        @endif

        @if($ScheduleIndustryTitle)
        <div class="col-md-4">
        <h4> {{$ScheduleIndustryTitle}}</h4>
        </div>
        @endif

        @if($StateTitle)
        <div class="col-md-4">
        <h4> {{$StateTitle}}</h4>
        </div>
        @endif

</div>


<br>
<br>

      

@if($reportOn == 'Country' && $reportType == 'Summary' )

<table cellpadding="15" cellspacing="10">
        <colgroup>
            <col class="FirstColumn">
        </colgroup>
        <thead >
            <tr>
                <th colspan="1">S.No</th>
                <th colspan="1">Name of the Country</th>
                <th colspan="3">No of Approvals</th>
                <th colspan="1">Amount of Foreign Direct Investment Approved</th>
                <th colspan="1"> Percentage with FDI Approved</th>

            </tr>
        </thead>
        <tbody class="secondHeader">
            <tr>
            <th colspan="1" ></th>
            <th colspan="1"></th>
            <th colspan="1">Total</th>
            <th colspan="1">Technical</th>
            <th colspan="1">Financial</th>
            <th colspan="1">(In Rs)</th>
            <th colspan="1"></th>
                
             
            </tr>
        </tbody>
        <tbody>
        
        <tr></tr>
        <tr> 

        </tbody>
        <tfoot>
    <tr>
            <th colspan="1" ></th>
            <th colspan="1"> Grand Total</th>
            <th colspan="1"></th>
            <th colspan="1"></th>
            <th colspan="1"></th>
            <th colspan="1"> :</th>
            <th colspan="1"></th>
    </tr>
  </tfoot>
    </table>
@elseif($reportOn == 'Schedule Industry' && $reportType == 'Summary' )


<br>
<br>
<table cellpadding="15" cellspacing="10">
        <colgroup>
            <col class="FirstColumn">
        </colgroup>
        <thead >
            <tr>
                <th colspan="1">S.No</th>
                <th colspan="1">Name of the Schedule Industry</th>
                <th colspan="3">No of Approvals</th>
                <th colspan="1">Amount of Foreign Direct Investment Approved</th>
                <th colspan="1"> Percentage with FDI Approved</th>

            </tr>
        </thead>
        <tbody class="secondHeader">
            <tr>
            <th colspan="1" ></th>
            <th colspan="1"></th>
            <th colspan="1">Total</th>
            <th colspan="1">Technical</th>
            <th colspan="1">Financial</th>
            <th colspan="1">(In Rs)</th>
            <th colspan="1"></th>
                
             
            </tr>
        </tbody>
        <tbody>
        
        <tr></tr>
        <tr> 
        </tbody>
        <tfoot>
    <tr>
            <th colspan="1" ></th>
            <th colspan="1"> Grand Total</th>
            <th colspan="1"></th>
            <th colspan="1"></th>
            <th colspan="1"></th>
            <th colspan="1"> :</th>
            <th colspan="1"></th>
    </tr>
  </tfoot>
    </table>

    @elseif($reportOn == 'State' && $reportType == 'Summary' )
    <table cellpadding="15" cellspacing="10">
        <colgroup>
            <col class="FirstColumn">
        </colgroup>
        <thead >
            <tr>
                <th colspan="1">S.No</th>
                <th colspan="1">Name of the State </th>
                <th colspan="3">No of Approvals</th>
                <th colspan="1">Amount of Foreign Direct Investment Approved</th>
                <th colspan="1"> Percentage with FDI Approved</th>

            </tr>
        </thead>
        <tbody class="secondHeader">
            <tr>
            <th colspan="1" ></th>
            <th colspan="1"></th>
            <th colspan="1">Total</th>
            <th colspan="1">Technical</th>
            <th colspan="1">Financial</th>
            <th colspan="1">(In Rs)</th>
            <th colspan="1"></th>
                
             
            </tr>
        </tbody>
        <tbody>
        
        <tr></tr>
       
        </tbody>
        <tfoot>
        <tr>
            <th colspan="1" ></th>
            <th colspan="1"> Grand Total</th>
            <th colspan="1"></th>
            <th colspan="1"></th>
            <th colspan="1"></th>
            <th colspan="1"> :</th>
            <th colspan="1"></th>
        </tr>
        </tfoot>

    </table>
    @elseif($reportOn == 'Country' && $reportType == 'Detailed' )

    <table cellpadding="15" cellspacing="10">
        <colgroup>
            <col class="FirstColumn">
        </colgroup>
        <thead >
            <tr>
                <th colspan="1">S.No</th>
                <th colspan="1">Registeration No and Date</th>
                <th colspan="3">Indian Company Name and Address</th>
                <th colspan="1">Foreign Collaborator Name and Address</th>
                <th colspan="1"> Foreign Equity (in Rs) </th>
                <th colspan="1"> Percentage of Foreign Equity  </th>


            </tr>
        </thead>
        <tbody>
        
        <tr></tr>
        <tr> 

   
         
        </tbody>
    </table>

    @elseif($reportOn == 'Country' && $reportType == 'Detailed' )
    <table cellpadding="15" cellspacing="10">
        <colgroup>
            <col class="FirstColumn">
        </colgroup>
        <thead >
            <tr>
                <th colspan="1">S.No</th>
                <th colspan="1">Registeration No and Date</th>
                <th colspan="3">Indian Company Name and Address</th>
                <th colspan="1">Foreign Collaborator Name and Address</th>
                <th colspan="1"> Foreign Equity (in Rs) </th>
                <th colspan="1"> Percentage of Foreign Equity  </th>


            </tr>
        </thead>
        <tbody>
        
        <tr></tr>
        <tr> 

   
         
        </tbody>
    </table>

    @elseif($reportOn == 'Schedule Industry' && $reportType == 'Detailed' )  
    
    <table cellpadding="15" cellspacing="10">
        <colgroup>
            <col class="FirstColumn">
        </colgroup>
        <thead >
            <tr>
                <th colspan="1">S.No</th>
                <th colspan="1">Registeration No and Date</th>
                <th colspan="3">Indian Company Name and Address</th>
                <th colspan="1">Foreign Collaborator Name and Address</th>
                <th colspan="1"> Foreign Equity (in Rs) </th>
                <th colspan="1"> Percentage of Foreign Equity  </th>


            </tr>
        </thead>
        <tbody>
        
        <tr></tr>
        <tr> 

   
         
        </tbody>
    </table>

    @elseif($reportOn == 'State' && $reportType == 'Detailed' )  
    <table cellpadding="15" cellspacing="10">
        <colgroup>
            <col class="FirstColumn">
        </colgroup>
        <thead >
            <tr>
                <th colspan="1">S.No</th>
                <th colspan="1">Registeration No and Date</th>
                <th colspan="3">Indian Company Name and Address</th>
                <th colspan="1">Foreign Collaborator Name and Address</th>
                <th colspan="1"> Foreign Equity (in Rs) </th>
                <th colspan="1"> Percentage of Foreign Equity  </th>


            </tr>
        </thead>
        <tbody>
        
        <tr></tr>
        <tr> 

   
         
        </tbody>

    </table>

    @elseif($reportOn == 'Country' && $reportType == 'Year Wise' && Outputreport_Order == 'Country' )  

    <table cellpadding="15" cellspacing="10">
        <colgroup>
            <col class="FirstColumn">
        </colgroup>
        <thead >
            <tr>
                <th colspan="1">S.No</th>
                <th colspan="1">Country</th>
                <th colspan="1">Total</th>
                
            </tr>
        </thead>
        <tbody>
        
        <tr></tr>
        <tr> 

   
         
        </tbody>
    </table>

    @elseif($reportOn == 'Schedule Industry' && $reportType == 'Year Wise'  && Outputreport_Order == 'Schedule Industry'  )  

<table cellpadding="15" cellspacing="10">
    <colgroup>
        <col class="FirstColumn">
    </colgroup>
    <thead >
        <tr>
            <th colspan="1">S.No</th>
            <th colspan="1">Schedule Industry</th>
            <th colspan="3">Total</th>

        </tr>
    </thead>
    <tbody>
    
    <tr></tr>
    <tr> 


     
    </tbody>
</table>

@elseif($reportOn == 'State' && $reportType == 'Year Wise'  && Outputreport_Order == 'State' )  

<table cellpadding="15" cellspacing="10">
    <colgroup>
        <col class="FirstColumn">
    </colgroup>
    <thead >
        <tr>
            <th colspan="1">S.No</th>
            <th colspan="1">State</th>
            <th colspan="3">Total</th>
        </tr>
    </thead>
    <tbody>
    
    <tr></tr>
    <tr> 


     
    </tbody>
</table>



@endif
<!--year wise-->








      


@endsection
