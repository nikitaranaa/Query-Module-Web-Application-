@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>




        <style>
        body {
                font-family: 'Nunito', sans-serif;
            }

        

        </style>
        <div class="bg-info p-2 text-white bg-opacity-10">
        <div class="text-center pb-2 m-2">
        <h2> Department of Industrial Policy and Promotion </h2>
        </div>
        </div>

         <hr size="1" noshade>
         
         <div class="text-center pb-2 m-2">
        <h4> Foreign Collaboration Query Module</h4>
        </div>
       

        <hr size="4" noshade>
        
        <div class="text-center pb-2 m-2">
        <h4> QUERY MODULE </h4>
        </div>
      


                  
        <!--form starts here-->
        <form action="{{ route('get-data') }}" method="post" enctype="multipart/form-data" id="fcs">
            @csrf
                   <div class="container">
                      
                
                        <div class="row">
                            <div class="col-md-3">
                            <div class="form-group">   
                                
                                    <label  class="form-label"> Report On</label>
                                    <select id="report_on" name="report_on" class="form-select" autocomplete="off">
                                        <option value="" selected="selected">- Select -</option>
                                        <option value="Country">Country</option>
                                        <option value="Schedule Industry">Schedule Industry</option>
                                        <option value="State">State</option>
                                      
                                    </select>
                                </div>    
                            </div>
                            <div class="col-md-2">
                            <div class="form-group">   
                                
                                    <label  class="control-label"> Report Type</label>
                                    <select id="report_type" name="report_type" class="form-select" autocomplete="off">
                                        <option value="" selected="selected">- Select -</option>
                                        <option value="Summary">Summary</option>
                                        <option value=" Detailed">Detailed</option>
                                        <option value="Year Wise">Year Wise</option>
                                      
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
 
                            <div class="col-md-2">
                            <div class="form-group">
                               
                                    <label for="period_from" class="control-label">Period From </label>
                
                                    <input type="text" class="form-control input-sm @error('period_from') is-invalid @enderror" name="period_from" id="flatpickr" autocomplete="off">
                                    @error('period_from')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                            </div>
                            </div>

                            <div class="col-md-2">
                            <div class="form-group">
                                    <label for="period_to" class="control-label"> Period To</label>
                                    <input type="text" class="form-control input-sm" name="period_to" id="flatpickr2" maxlength="101" autocomplete="off">
                                    @error('period_from')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                            </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-3"> 
                            <div class="form-group">
                                    <label  class="control-label" style="text-align:left"> Approval Agency </label>
                                    <select id="approval_agency" name="approval_agency" class="form-select" autocomplete="off">
                                        <option value="" selected="selected">- Select -</option>
                                        @foreach($ApprovalAgency  as $agency)
                                        <option value="{{ $agency->AGCODE }}">{{ $agency->AGNAME}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            </div>  
                            <div class="col-md-2">
                            <div class="form-group">
                                <label  class="control-label"> Collaboration Type</label>
                                <select id="collaboration_type" name="collaboration_type" class="form-select" autocomplete="off">
                                
                                <option value="" selected="selected">- Select -</option>
                                <option value="F">Financial</option>
                                <option value=" T">Technical</option>
                                <option value="B">Both</option>
                                </select>
                            </div>
                            </div>
                            
                            <div class="col-md-3"></div>

                            <div class="col-md-2">
                            <div class="form-group">
                                    <label  class="control-label"> Amount in Rs </label>
                                    <select id=" Amount_in_Rs" name="Amount_in_Rs" class="form-select" autocomplete="off">
                                    <option value="" selected="selected">- Select -</option>
                                    <option value="Lakhs">Lakhs</option>
                                    <option value=" Million">Million</option>
                                    <option value="Crore">Crore</option>
                                    <option value="Billion ">Billion </option>
                                    </select>
                            </div>
                            </div>

                            <div class="col-md-2">
                            <div class="form-group">
                                    <label  class="control-label"> Amount in US$</label>
                                    <select id="amount_in_US$" name="amount_in_US$" class="form-select" autocomplete="off">
                                    <option value="" selected="selected">- Select -</option>
                                    <option value="Lakhs">Lakhs</option>
                                    <option value=" Million">Million</option>
                                    <option value="Crore">Crore</option>
                                    <option value="Billion ">Billion </option>
                                    </select>
                            </div>
                            </div>

                        </div>
<br>
                        <div class="row">  
                        <div class="col-md-3">
                            <div class="form-group">
                                    <label  class="control-label"> Report In</label>
                                    <select id="report_in" name="report_in" class="form-select" autocomplete="off">
                                    <option value="" selected="selected">- Select -</option>
                                    <option value="Ruppees">Ruppees</option>
                                    <option value=" US$">US$</option>
                                    <option value="Both">Both</option>
                                    </select>
                            </div>
                            </div>
                

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label  class="control-label"> Country </label>
                                    <select id="country" name="country" class="form-select" autocomplete="off">
                                    <option value="" selected="selected">- Select -</option>
                                    @foreach($Countries as $country)
                                        <option value="{{ $country->CONTCODE }}">{{ $country->CONTNAME}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3"></div>

                            <div class="col-md-4">    
                            <div class="form-group">
                                <label  class="control-label"> Region Code</label>
                                <select id="region_code" name="region_code" class="form-select" autocomplete="off">
                                <option value = "NS">Not Selected</option>
                                <option value = "EU">European Union</option>
                                <option value = "GU">Gulf Countries</option>
                                <option value = "AS">Asean Countries</option>
                                <option value = "OE">OECD Countries</option>
                                <option value = "CW">Commonwealth Countries</option>
                                <option value = "DV">Developed Countries</option>
                                <option value = "AF">African Countries</option>
                                <option value = "15">EU 15</option>
                                <option value = "WA">West Asia</option>
                                </select>
                            </div>
                            </div>   

                        </div>
                        </br>
                        </br>

                        <div class="row">
                            <div class="col-md-5">   
                            <div class="form-group">
                                <label  class="control-label">Schedule Industry </label>
                                <select id="schedule_industry" name="schedule_industry" class="form-select" autocomplete="off" onchange="getsub(this);">
                                <option value = " selected= selected" >- Select -</option> 
                                @foreach($ScheduleIndustry as $schedule_industry_post2000)
                                        <option value="{{ $schedule_industry_post2000->SCHCODE }}">{{ $schedule_industry_post2000->SCHEDULE_DESCRIPTION}}</option>
                                        @endforeach
                                </select>
                            </div>
                            </div>
                            <div class="col-md-3"></div>

                            <div class="col-md-4">   
                            <div class="form-group">
                                <label  class="control-label"> Sub Scheduled Industry Code</label>
                                <select id="sub_schedule_industry" name="sub_schedule_industry" class="form-select" autocomplete="off">
                                <option value="" selected="Not Selected">- Select -</option>
                                </select>
                            </div>
                            </div>
                        </div>      

                        

                    <div class="row">
                        <div class="col-md-3">   
                                <div class="form-group">
                                    <label  class="control-label">States </label>
                                    <select id="states" name="states" class="form-select" autocomplete="off" onchange="getdistrict(this);">
                                    <option value="" selected="Not Selected">- Select -</option>
                                    @foreach($stateList as $stdt)
                                        <option value="{{ $stdt->STDT_CODE }}">{{ $stdt->STDT_NAME}}</option>
                                        @endforeach
                                       
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">   
                                <div class="form-group">
                                    <label  class="control-label"> District</label>
                                    <select id="district" name="district" class="form-select" autocomplete="off"  >
                                
                                    </select>
                                </div>
                            </div>
                    </div>
                    <br>
                    <div class="row">
                            <div class="col-md-3">
                            <div class="form-group">
                                    <label  class="control-label">Increase in Equity</label>
                                    <select id="increase_in_equity " name="increase_in_equity" class="form-select" autocomplete="off">
                                    <option value="" selected="Not Selected">- Select -</option>
                                    <option value="N">No</option>
                                    <option value="Y">Yes</option>
                                    </select>
                            </div>
                            </div>

                            <div class="col-md-2">
                            <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="decreasng_order" checked>
                                    <label class="form-check-label" for="decreasng_order">Decreasing Order</label>
                            </div>
                            </div>
                           

                            <div class="col-md-3"></div>

                            <div class="col-md-2">
                            <div class="form-group">
                                    <label  class="control-label">Inclusion of Routes</label>
                                    <select id="inclusion_of_routes " name="inclusion_of_routes" class="form-select" autocomplete="off">
                                    <option value="" selected="Not Selected">- Select -</option>
                                    <option value="Including ADR/GDR">Including ADR/GDR</option>
                                    </select>
                            </div>
                            </div>

                            <div class="col-md-2">
                            <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="manufacturing_breakup" checked>
                                    <label class="form-check-label" for="manufacturing_breakup">Manufacturing Breakup </label>
                            </div>
                            </div>
                            
                    </div>
                    <div class="row">
                            <div class="col-md-2">
                            <label for="equityfromfilter" class="control-label">Comparision Operator</label>
                            <select id="equityfromfilter" name="equityfromfilter" class="form-select" autocomplete="off">
                                        <option value=">">></option>
                                        <option value=">=">>=</option>
                                    </select>  
                                </div>
                            <div class="col-md-3">
                            <label for="equity_amount" class="control-label">Amount of Equity From </label>
                            <input type="number" class="form-control input-sm" name="equity_amount" id="equity_amount" pattern="[0-9]" maxlength="101" autocomplete="off">
                            </div>


                            <div class="col-md-3"></div>

                            <div class="col-md-2">
                            <label for="equitytofilter" class="control-label">Comparision Operator</label>
                            <select id="equitytofilter" name="equitytofilter" class="form-select" autocomplete="off">
                                        <option value="<"><</option>
                                        <option value="<="><=</option>
                                    </select>  
                                </div>
                            <div class="col-md-2">
                            <label for="equity_amount_to" class="control-label">Amount of Equity To </label>
                            <input type="number" class="form-control input-sm" name="equity_amount_to" id="equity_amount_to" pattern="[0-9]"  maxlength="101" autocomplete="off">
                            </div>
                    </div>
                    <br>
                    <div class="row">
                            <div class="col-md-2">
                            <label for="%equityfromfilter" class="control-label">Comparision Operator</label>
                            <select id="%equityfromfilter" name="%equityfromfilter" class="form-select" autocomplete="off">
                                        <option value=">">></option>
                                        <option value=">=">>=</option>
                                    </select>  
                                </div>
                            <div class="col-md-3">
                            <label for="%equity_from" class="control-label"> % of Equity From </label>
                            <input type="text" class="form-control input-sm" name="%equity_from" id="%equity_from" maxlength="101" autocomplete="off">
                            </div>


                            <div class="col-md-3"></div>

                            <div class="col-md-2">
                            <label for="%equitytofilter" class="control-label">Comparision Operator</label>
                            <select id="%equitytofilter" name="%equitytofilter" class="form-select" autocomplete="off">
                                        <option value="<"><</option>
                                        <option value="<="><=</option>
                                    </select>  
                                </div>
                            <div class="col-md-2">
                            <label for="%equity_to" class="control-label">% of Equity To </label>
                            <input type="text" class="form-control input-sm" name="%equity_to" id="%equity_to" maxlength="101" autocomplete="off">
                            </div>
                    </div>
                    <br>
                    <div class="row">
                            <div class="col-md-4">
                            <div class="form-group">
                                    <label  class="control-label">Select Parameters</label>
                                    <select id="select_parameters " name="select_parameters" class="form-select" autocomplete="off" onchange="getval(this);">
                                    <option value="">- Select -</option>
                                    <option value="COMPANY">Indian Company Name</option>
                                    <option value="COLLOB">Collaborator Name</option>
                                    <option value="ITEMNAME">Item of Manufacture</option>
                                    </select>
                            </div>
                            </div>
                           

                            <div class="col-md-4">
                            <div class="form-group">
                                    <label for="enter_value" class="control-label">Enter Value </label>
                                    <select class="js-example-basic-single" id="comapny" name="comapny" style="width: 75%">
                                 </select>
                            </div>
                            </div>

                            <div class="col-md-3"></div>

                   <div>
                   <div class="row">
                   <div class="col-md-8"></div>
                            <div class="col-md-1">
                            <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="only_export_obligation" id="only_export_obligation" checked>
                                    <label class="form-check-label" for="only_export_obligation">Only Export Obligation </label>
                            </div>
                            </div>

                    </div>
                    <hr size="4" noshade>
              

                            <div class="text-center pb-2 m-2">
                            <h4> FOR  DETAILED  REPORT </h4>
                            </div>

                    <div class="row">
                            <div class="col-md-2">
                                    <label class="" for=""> For Newsletter </label>
                            </div>
                            <div class="col-md-1">
                            <label class="" for="">: </label>
                            </div>

                            <div class="col-md-2">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="for_newsletter">
                            </div>
                            </div>

                            <div class="col-md-3"></div>

                            <div class="col-md-4">
                            
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-md-2">
                                    <label class="" for=""> Top Investing </label>
                            </div>
                             
                            <div class="col-md-1">
                            <label class="" for="">: </label>
                            </div>
                            
                            <div class="col-md-1">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="top_investing">
                            </div>
                            </div>

                            <div class="col-md-1">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="export_obligation">
                            <label class="" for=""> Export Obligation </label>
                            </div>
                            </div>

                        


                            <div class="col-md-3"></div>

                            <div class="col-md-4">
                            <div class="form-group">
                               
                                    <label for="total_num" class="control-label">Enter Total Number in Output </label>
                                    <input type="text" class="form-control input-sm" name="total_num" id="total_num" maxlength="101" autocomplete="off">
                            </div>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-md-4">
                            <label class="output_report_order" for="output_report_order"> Output Report Order</label>
                            </div>

                            <div class="col-md-1">
                            <label class="" for="">: </label>
                            </div>

                            <div class="col-md-3"></div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <select id="output_report_order" name="output_report_order" class="form-select" autocomplete="off">
                                    <option value="" selected="selected">-Country -</option>
                                    <option value="Schedule Industry">Schedule Industry</option>
                                    <option value="State">State</option>
                                    </select>
                                </div>
                            </div>
                    </div>  


                            
                   
                    <hr size="4" noshade>
              

                            <div class="text-center pb-2 m-2">
                            <h4> FOR YEAR WISE REPORTS </h4>
                            </div>


                    <div class="row">
                            <div class="col-md-4">
                            <label class="select_year_type" for="select_year_type"> Select Year Type</label>
                            </div>

                            <div class="col-md-1">
                            <label class="" for="">: </label>
                            </div>

                            <div class="col-md-3"></div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <select id="year_format" name="year_format" class="form-select" autocomplete="off">
                                    <option value="" selected="selected">- Calender Year Wise-</option>
                                    <option value="" selected="selected">- Financial Year Wise-</option>
                                    </select>
                                </div>
                            </div>
                    </div>  

                    <div class="row">
                            <div class="col-md-4">
                            <label class="row_format_output" for="row_format_output"> Row Format Output</label>
                            </div>
                             
                            <div class="col-md-1">
                            <label class="" for="">: </label>
                            </div>

                            <div class="col-md-3"></div>

                            <div class="col-md-1">
                            <div class="form-check">   
                            <input class="form-check-input" type="checkbox" value="" id="row_format_output">
                            </div>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-md-2">
                            <label class="club_uptil_2002" for="club_uptil_2002"> Club Uptil Year</label>
                            </div>
                            <div class="col-md-2">
                            <select id="select_parameters " name="club_uptil_year" class="form-select" autocomplete="off" onchange="getval(this);">
                                    <option value="">- Select -</option>
                                    <option value="1991">1991</option>
                                    <option value="1992">1992</option>
                                    <option value="1993">1993</option>
                                    <option value="1994">1994</option>
                                    <option value="1995">1995</option>
                                    <option value="1996">1996</option>
                                    <option value="1997">1997</option>
                                    <option value="1998">1998</option>
                                    <option value="1999">1999</option>
                                    <option value="2000">2000</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002<option>
                                    <option value="2003">2003 </option>
                                    <option value="2004">2004</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006 </option>
                                    <option value="2007">2007 </option>
                                    <option value="2008">2008 </option>
                                    <option value="2009">2009 </option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011 </option>
                                    <option value="2012">2012 </option>
                                    <option value="2013">2013 </option>
                                    <option value="2014">2014 </option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016 </option>
                                    <option value="2017">2017 </option>
                                    <option value="2018">2018 </option>
                                   
                                    </select>
                    </div>

                            <div class="col-md-1">
                            <label class="" for="">: </label>
                            </div>

                            <div class="col-md-3"></div>

                            <div class="col-md-1">
                            <div class="form-check">   

                            <input class="form-check-input" type="checkbox" value="" id="club_uptil_year">
                            <label class="" for=""> </label>
                            </div>
                            </div>

                            <div class="col-md-1">
                            <div class="form-check">   

                            <input class="form-check-input" type="checkbox" value="" id="total_number">
                            <label class="" for=""> Total Number</label>

                            <input class="form-check-input" type="checkbox" value="" id="financial_number">
                            <label class="" for=""> Financial Number </label>

                            </div>
                            </div>
                    </div>
                    <br>

                    <div class="row">
                            <div class="col-md-4">
                            <label class="output_report_includes2" for="output_report_includes2"> Output Report Order</label>

                            </div>
                             
                            <div class="col-md-1">
                            <label class="" for="">: </label>
                            </div>

                            <div class="col-md-3"></div>

                            <div class="col-md-1">
                            <div class="form-check">   

                            <input class="form-check-input" type="checkbox" value="" id="club_uptil_2002">
                            <label class="" for=""> Technical Number</label>
                               
                            <input class="form-check-input" type="checkbox" value="" id="total_number">
                            <label class="" for=""> FDI in Rs</label>
                            </div>
                            </div>

                            <div class="col-md-2">
                            <div class="form-check">   
                            <input class="form-check-input" type="checkbox" value="" id="financial_number">
                            <label class="" for=""> FDI in US$</label>
                            </div>
                            </div>
                    </div>
<br>
                    <div class="row">
                            <div class="col-md-4">
                            <label class="output_report_order" for="output_report_order"> Output Report Order</label>
                            </div>

                            <div class="col-md-1">
                            <label class="" for="">: </label>
                            </div>

                            <div class="col-md-3"></div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <select id="output_report_order" name="output_report_order" class="form-select" autocomplete="off">
                                    <option value="" selected="selected">-Select -</option>
                                    <option value="Country">Country</option>
                                    <option value="Schedule Industry">Schedule Industry</option>
                                    <option value="State">State</option>
                                    </select>
                                </div>
                            </div>
                    </div>  

                    <hr size="4" noshade>
                    <div class="row">

                            <div class="col-md-12">
                            <div class="form-check">   
                            <input class="form-check-input" type="checkbox" value="" id="financial_number">
                            <label class="" for=""> Please Check for Subquery Activation</label>
                            </div>
                            </div>

                    </div>  
                  <br>
                  <br>

                    <div class="row">

                            <div class="col-md-5">
                               <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                             <div class="col-md-3"></div>

                    </div>  
                    
              
                             





                 </div>
                 <hr size="4" noshade>
        </form>      
    


<script>

var example = flatpickr('#flatpickr');

flatpickr('#flatpickr',{
        dateFormat: 'Y-m-d',
        allowInput: false,
        clickOpens: true,
        defaultDate: null,  
        enabl: [],
        //formatDate: null,  
        inline: false,
});

flatpickr('#flatpickr',{


onChange: null,  
onClose: null,  
onOpen: null,  
onReady: null,  

});

var example = flatpickr('#flatpickr2');

flatpickr('#flatpickr2',{
        dateFormat: 'Y-m-d',
        allowInput: false,
        clickOpens: true,
        defaultDate: null,  
        enabl: [],
        //formatDate: null,  
        inline: false,
});

flatpickr('#flatpickr2',{


onChange: null,  
onClose: null,  
onOpen: null,  
onReady: null,  

});

var example = flatpickr('#flatpickr3');

flatpickr('#flatpickr3',{
        dateFormat: 'Y-m-d',
        allowInput: false,
        clickOpens: true,
        defaultDate: null,  
        enabl: [],
        //formatDate: null,  
        inline: false,
});

flatpickr('#flatpickr3',{


onChange: null,  
onClose: null,  
onOpen: null,  
onReady: null,  

});




$(document).ready(function() {

        $.noConflict();
    $('#comapny').select2();
    allowClear: true

    

});



function getval(sel)
{
    //alert(sel.value);
    var id = sel.value;
    var Target = $('#comapny');
        var URL = "{{route('get-Get-Company-name')}}";
        $.ajax({
        url: URL,
        type: 'GET',
        data: {id:id},
                success:function(rtndata) {
                        Target.html(rtndata)
                }
        })
}

function getsub(sel)
{
    //alert(sel.sub);
    var id = sel.value;
    var Target = $('#sub_schedule_industry');
        var URL = "{{route('get-sub-scheduled-industry')}}";
        $.ajax({
        url: URL,
        type: 'GET',
        data: {id:id},
                success:function(rtndata) {
                        Target.html(rtndata)
                }
        })
}

function getdistrict(sel)
{
    //alert(sel.sub);
    var id = sel.value;
    var Target = $('#district');
        var URL = "{{route('Get_district')}}";
        $.ajax({
        url: URL,
        type: 'GET',
        data: {id:id},
                success:function(rtndata) {
                        Target.html(rtndata)
                }
        })
}

</script>



@endsection

