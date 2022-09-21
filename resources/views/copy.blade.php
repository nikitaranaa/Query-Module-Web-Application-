@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
       

        <style>
    body {
                font-family: 'Nunito', sans-serif;
            }

    
}

        </style>

        <div class="text-center pb-2 m-2">
        <h2> Department of Industrial Policy and Promotion </h2>
        </div>

         <hr size="4" noshade>
         <div class="text-center pb-2 m-2">
        <h4> Foreign Collaboration Query Module</h4>
        </div>

        <hr size="4" noshade>

        <div class="text-center pb-2 m-2">
        <h4> QUERY MODULE </h4>
        </div>




</head>        
        <body>
                  
        <!--form starts here-->
        <form>
        
                <div class="row">
                        <div class="left">    
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label  class="control-label"> Report On</label>
                                    <select id="report_on" name="report_on" class="form-select" autocomplete="off">
                                        <option value="" selected="selected">- Select -</option>
                                        <option value="Country">Country</option>
                                        <option value="Schedule Industry">Schedule Industry</option>
                                        <option value="State">State</option>
                                      
                                    </select>
                                </div>
                            </div>
                        </div>   

                            <div class="col-md-4">
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

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="period_from" class="control-label">Period From </label>
                                    <input type="text" class="form-control input-sm" name="period_from" id="period_from" maxlength="101" autocomplete="off">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="period_to" class="control-label"> Period To</label>
                                    <input type="text" class="form-control input-sm" name="period_to" id="period_to" maxlength="101" autocomplete="off">
                                </div>
                            </div>

                           
                                <div class="form-group">
                                    <label  class="control-label" style="text-align:left"> Approval Agency </label>
                                    <select id="approval_agency" name="approval_agency" class="form-select" autocomplete="off">
                                        <option value="" selected="selected">- Select -</option>
                                        <option value="ALL">ALL</option>
                                        <option value=" SIA">SIA</option>
                                        <option value="FIPB">FIPB</option>
                                        <option value="SIA+FIPB ">SIA+FIPB </option>
                                        <option value="RBI">RBI</option>
                                        <option value="CCEA">CCEA</option>
                                    </select>
                                </div>
                           
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label  class="control-label"> Collaboration Type</label>
                                    <select id="collaboration_type" name="collaboration_type" class="form-select" autocomplete="off">
                                        <option value="" selected="selected">- Select -</option>
                                        <option value="Financial">Financial</option>
                                        <option value=" Technical">Technical</option>
                                        <option value="Both">Both</option>
                                    </select>
                                </div>
                            </div>

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
                            <div>


                            <div class="col-md-2">
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

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label  class="control-label"> Country </label>
                                    <select id="country" name="country" class="form-select" autocomplete="off">
                                        <option value="" selected="selected">- Select -</option>
                                        <option value="ALL">ALL</option>
                                        <option value=" SIA">SIA</option>
                                        <option value="FIPB">FIPB</option>
                                        <option value="SIA+FIPB ">SIA+FIPB </option>
                                        <option value="RBI">RBI</option>
                                        <option value="CCEA">CCEA</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">    
                                <div class="form-group">
                                    <label  class="control-label"> Region Code</label>
                                    <select id="region_code" name="region_code" class="form-select" autocomplete="off">
                                        <option value="" selected="Not Selected">- Select -</option>
                                        <option value="European Union">European Union</option>
                                        <option value=" Gulf Countries">Gulf Countries</option>
                                        <option value="Asian Countries">Asian Countries</option>
                                        <option value="OECD Countries">OECD Countries</option>
                                        <option value=" Commonwealth Countries">Commonwealth Countries</option>
                                        <option value="Developed Countries">Developed Countries</option>
                                         <option value="African Countries">African Countries</option>
                                        <option value="EU 15">EU 15</option>
                                        <option value="West Asia">West Asia</option>
                                    </select>
                                </div>
                            </div>   

                            <div class="col-md-2">   
                                <div class="form-group">
                                    <label  class="control-label">Schedule Industry </label>
                                    <select id="schedule_industry" name="schedule_industry" class="form-select" autocomplete="off">
                                        <option value="" selected="selected">- Select -</option> 
                                        <option value=" METALLURGICAL INDUSTRIES">METALLURGICAL INDUSTRIES</option>
                                        <option value="FUELS">FUELS</option>
                                        <option value="BOILERS AND STEAM GENERATING PLANTS ">BOILERS AND STEAM GENERATING PLANTS  </option>
                                        <option value="PRIME MOVERS OTHER THAN ELECTRICAL">PRIME MOVERS OTHER THAN ELECTRICAL</option>
                                        <option value="ELECTRICAL EQUIPMENT">ELECTRICAL EQUIPMENT</option>
                                        <option value="TELECOMMUNICATIONS">TELECOMMUNICATIONS</option>
                                        <option value="TRANSPORTATION INDUSTRY ">TRANSPORTATION INDUSTRY  </option>
                                        <option value="INDUSTRIAL MACHINERY">INDUSTRIAL MACHINERY</option>
                                        <option value=" MACHINE TOOLS">MACHINE TOOLS</option>
                                        <option value="AGRICULTURAL MACHINERY">AGRICULTURAL MACHINERY</option>
                                        <option value="EARTH-MOVING MACHINERY ">EARTH-MOVING MACHINERY </option>
                                        <option value="MISCELLANEOUS MECHANICAL & ENGINEERING">MISCELLANEOUS MECHANICAL & ENGINEERING</option>
                                        <option value=" COMMERCIAL,OFFICE & HOUSEHOLD EQUIPMENT">COMMERCIAL,OFFICE & HOUSEHOLD EQUIPMENT</option>
                                        <option value="MEDICAL & SURGICAL APPLIANCES">MEDICAL & SURGICAL APPLIANCES</option>
                                        <option value="INDUSTRIAL INSTRUMENTS ">INDUSTRIAL INSTRUMENTS </option>
                                        <option value="SCIENTIFIC INSTRUMENTS">SCIENTIFIC INSTRUMENTS</option>
                                        <option value=" MATHEMATICAL SURVEYING AND DRAWING "> MATHEMATICAL SURVEYING AND DRAWING </option>
                                        <option value="FERILIZERS">FERILIZERS</option>
                                        <option value="CHEMICALS(OTHER THAN FERTILIZERS) ">CHEMICALS(OTHER THAN FERTILIZERS) </option>
                                        <option value="PHOTOGRAPHIC RAW FILM AND PAPER">PHOTOGRAPHIC RAW FILM AND PAPER</option>
                                        <option value="DYE-STUFFS">DYE-STUFFS</option>
                                        <option value="DRUGS AND PHARMACEUTICALS">DRUGS AND PHARMACEUTICALS</option>
                                        <option value="TEXTILES(INCLUDE DYED, PRINTED)">TEXTILES(INCLUDE DYED, PRINTED)</option>
                                        <option value=" PAPER AND PULP INCLUDING PAPER PRODUCT">PAPER AND PULP INCLUDING PAPER PRODUCT</option>
                                        <option value="SUGAR">SUGAR</option>
                                        <option value=" FERMENTATION INDUSTRIES">  FERMENTATION INDUSTRIES</option>
                                        <option value="FOOD PROCESSING INDUSTRIES">FOOD PROCESSING INDUSTRIES</option>
                                        <option value="VEGETABLE OILS AND VANASPATHI">VEGETABLE OILS AND VANASPATHI</option>
                                        <option value="SOAPS, COSMETICS AND TOILET PREPARATIONS">SOAPS, COSMETICS AND TOILET PREPARATIONS</option>
                                        <option value="RUBBER GOODS ">RUBBER GOODS</option>
                                        <option value="LEATHER, LEATHER GOODS AND PICKERS">LEATHER, LEATHER GOODS AND PICKERS</option>
                                        <option value="GLUE AND GELATIN"> GLUE AND GELATIN</option>
                                        <option value="GLASS">GLASS</option>
                                        <option value="CERAMICS">CERAMICS</option>
                                        <option value="CEMENT AND GYPSUM PRODUCTS">CEMENT AND GYPSUM PRODUCTS</option>
                                        <option value=" TIMBER PRODUCTS ">TIMBER PRODUCTS </option>
                                        <option value="DEFENCE INDUSTRIES">DEFENCE INDUSTRIES</option>
                                        <option value="CONSULTANCY SERVICES ">CONSULTANCY SERVICES </option>
                                        <option value="SERVICE SECTOR">SERVICE SECTOR</option>
                                        <option value="HOTEL & TOURISM">HOTEL & TOURISM</option>
                                        <option value="TRADING">TRADING</option>
                                        <option value="MISCELLANEOUS INDUSTRIES">MISCELLANEOUS INDUSTRIES</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">   
                                <div class="form-group">
                                    <label  class="control-label"> Sub Scheduled Industry Code</label>
                                    <select id="sub_schedule_industry_code" name="sub_schedule_industry_code" class="form-select" autocomplete="off">
                                        <option value="" selected="Not Selected">- Select -</option>
                                        <option value="European Union">European Union</option>
                                        <option value=" Gulf Countries">Gulf Countries</option>
                                        <option value="Asian Countries">Asian Countries</option>
                                        <option value="OECD Countries">OECD Countries</option>
                                        <option value=" Commonwealth Countries">Commonwealth Countries</option>
                                        <option value="Developed Countries">Developed Countries</option>
                                         <option value="African Countries">African Countries</option>
                                        <option value="EU 15">EU 15</option>
                                        <option value="West Asia">West Asia</option>
                                    </select>
                                </div>
                            </div>




@endsection

