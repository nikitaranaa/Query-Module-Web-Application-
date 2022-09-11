<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\stdt;
use App\Models\agency;
use App\Http\Requests\StorePostRequest;
use App\Models\fcmain;
use App\Models\schedule_industry_post2000;
use App\Models\country;
use App\Models\dollrate;
use DateTime;
use DB;



class FCS_Controller extends Controller
{
    public function __constrct(){
        $this->middleware('auth');
    }
      



    public function index(){
        $stateList = stdt::select('*')->where(DB::raw('SUBSTRING(`STDT_CODE`,3,2)'),'00')->get();

        $ApprovalAgency = agency::select('*')->get();

        $ScheduleIndustry = schedule_industry_post2000::select('*')->where(DB::raw('SUBSTRING(`SCHCODE`,3,2)'),'00')->get();
        
        $Countries = country::select('*')->get();  

        $comapnyname = fcmain::select('*')-> get();

       
        return view('homepage',compact('stateList','ApprovalAgency','ScheduleIndustry','Countries','comapnyname'));


    }
  



    public function Getdistrict(Request $request){

        $id = substr($request->query('id'),0,2);


        $district = stdt::select('*')->where(DB::raw('SUBSTRING(`STDT_CODE`,3,2)'),'!=','00')
        ->where(DB::raw('SUBSTRING(`STDT_CODE`,1,2)'),$id)->get();
        //dd($stdt);
        $Data = $options = '';
            $options = '<option value="">Select Option</option>';
            foreach($district as $data){
                $options =  $options.'<option value="'.$data->STDT_CODE.'">'.$data->STDT_NAME.'</option>';
            }
        return $options;




    }



    public function GetSubScheduledIndustry(Request $request) {

        $id = substr($request->query('id'),0,2);

        $subScheduleIndustry = schedule_industry_post2000::select('*')->where(DB::raw('SUBSTRING(`SCHCODE`,3,2)'),'!=','00')
        ->where(DB::raw('SUBSTRING(`SCHCODE`,1,2)'),$id)->get();
        //dd($subScheduleIndustry);
        $Data = $options = '';
            $options = '<option value="">Select Option</option>';
            foreach($subScheduleIndustry as $data){
                $options =  $options.'<option value="'.$data->SCHCODE.'">'.$data->SCHEDULE_DESCRIPTION.'</option>';
            }
        return $options;
    }


    public function GetCompanyname(Request $request) {
        //dd($request->query('id'));
        $id = $request->query('id');

        $Data = $options = '';
        if($id == 'COMPANY'){
        $Data = fcmain::select('COMPANY')->get();
        } 
        else if($id == 'COLLOB'){
            $Data = fcmain::select('COLLOB')->get();
        } 
        else if($id =='ITEMNAME'){
            $Data = fcmain::select('ITEMNAME')->get();
        } 
        
        if($id == 'COMPANY'){
            $options = '<option value="">Select Option</option>';
            foreach($Data as $data){
                $options =  $options.'<option value="'.$data->COMPANY.'">'.$data->COMPANY.'</option>';
            }
        }  elseif($id == 'COLLOB'){
            $options = '<option value="">Select Option</option>';
            foreach($Data as $data){
                $options =  $options.'<option value="'.$data->COLLOB.'">'.$data->COLLOB.'</option>';
            }
        }elseif($id =='ITEMNAME'){
            $options = '<option value="">Select Option</option>';
            foreach($Data as $data){
                $options =  $options.'<option value="'.$data->ITEMNAME.'">'.$data->ITEMNAME.'</option>';
            }
        } 



        return $options;
    }

  
  
    public function GetData(Request $request){
        //$validated = $request->validated();
        //dd($request);

        $reportOn = $request->report_on;
        $reportType = $request->report_type;
        $Outputreport_Order = $request->output_report_order;

        $reportTitle = $fromTitle = $toTitle = $AgencyTitle = $CountryTitle = $ScheduleIndustryTitle = $StateTitle  = $selectText = '';
 
        
        if($request->increase_in_equity == 'Y') {
            $selectText = "'*',SUM('NT_EQT_AMT,NT_NRI_AMT,NT_PREF_AM') AS meqt ";
        } elseif($request->increase_in_equity == 'N'){
            $selectText = "'*',SUM('EQUITY,PREF_SHARE,NRI') AS mreq ";
        }
        $query = fcmain::select(DB::raw());
 



        if($request->period_from) {
            $reportTitle = $reportTitle." From :- ".$request->period_from;
            $fromTitle = " From :- ".$request->period_from;

            $fromDate = $request->period_from;
            $query = $query->where('FCDATE','<=', $fromDate);
        } 

        if($request->period_to) {
            $reportTitle = $reportTitle." To: -".$request->period_to;
            $toTitle = " To :- ".$request->period_to;

            $ToDate = $request->period_to;
            $query = $query->where('FCDATE','>=', $ToDate);
        } 

        if($request->COLTYPE == 'F') {
            $query = $query->where('COLTYPE', 'F');
        } elseif($request->COLTYPE == 'T'){
            $query = $query->where('COLTYPE','T');
        }elseif($request->COLTYPE == 'B'){
            $query = $query->where('COLTYPE','B');
        }

        if($request->increase_in_equity == 'Y') {
            $query = $query->where('INEQ_FLAG', 'Y');
        }elseif($request->increase_in_equity == 'N'){
            $query = $query->where('INEQ_FLAG','N');
        }

        $reportTitle = $reportTitle.'';

        //$query = agency::select('*');
        if($request->approval_agency) {
            $reportTitle = $reportTitle." Approval Agency:- ".$request->approval_agency;
            $AgencyName = agency::select('*')->where('AGCODE',$request->approval_agency)->first();
            $AgencyTitle = " Approval Agency:- ".$AgencyName->AGNAME;

            $AgencyCode = $request->approval_agency;
            $query = $query->where('AGCODE', $AgencyCode);
        } 
 

        //$query = country::select('*');
        if($request->country) {
            $reportTitle = $reportTitle." Country:- ".$request->country;
            $CountryName = country::select('*')->where('CONTCODE',$request->country)->first();
            $CountryTitle = " Country:- ".$CountryName->CONTNAME;

            $CountryCode = $request->country;
            $query = $query->where('CONTCODE', $CountryCode);
        } 
  

        //$query = schedule_industry_post2000::select('*');
        if($request->schedule_industry) {
          $reportTitle = $reportTitle." Schedule Industry:- ".$request->schedule_industry;
           $ScheduleIndustryName = schedule_industry_post2000::select('*')->where('SCHCODE',$request->schedule_industry)->first();
           $ScheduleIndustryTitle = " Schedule Industry:-".$ScheduleIndustryName->SCHEDULE_DESCRIPTION;

           $ScheduleIndustryCode = $request->schedule_industry;
            $query = $query->where('SCHCODE', $ScheduleIndustryCode);
        } 
      
        //$query = stdt::select('*');
        if($request->states) {
            $reportTitle = $reportTitle." State:- ".$request->states;
            $StateName = stdt::select('*')->where('STDT_CODE',$request->states)->first();
            $StateTitle = "  State:-".$StateName->STDT_NAME;


            $StateCode = $request->states;
            $query = $query->where('STDT_CODE', $StateCode);
        } 
      



        $data = $query->get();
        //dd($data);

        return view('report-main',compact('data','reportTitle','fromTitle','toTitle','AgencyTitle','CountryTitle','ScheduleIndustryTitle','StateTitle','reportOn','reportType'));
        
    }



}
