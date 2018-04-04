<?php

namespace App\Http\Controllers;

session_start();

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Validator;
use App\Http\WbdHelpers\CuntryInfo;

class SuperAdminController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $sdmn_id = Session::get('admn_id');
        $country = CuntryInfo::country();
        if ($sdmn_id == NULL) :
            return Redirect::to('/sAdmin-Login');
        endif;

        $sadminhome = view('pages.super-admin.add-organization')->with('country', $country);
        return view('sadmin-master')->with('content', $sadminhome);
    }

    //super admin login page
    public function sadmin_login() {
        $sdmn_id = Session::get('admn_id');
        if ($sdmn_id != NULL):
            return Redirect::to('sAdmin-cPanel')->send();
        endif;
        return view('super-admin-login');
    }

    //super admin logout Action
    public function sadmin_logout() {
        Session::forget('admn_nm');
        Session::forget('admn_id');
        Session::put('error', 'Logout Successfull');
        return Redirect::to('/sAdmin-Login');
    }

    //super admin login Action
    public function login_action(Request $request) {
        $sadmneml = $request->sadmneml;
        $sadmnpsd = md5($request->sadmnpsd);

        $sadmninfo = DB::table('wbd_sadmn')
                ->where('wbdeml', $sadmneml)
                ->where('wbdpsd', $sadmnpsd)
                ->first();

        if ($sadmninfo):
            Session::put('admn_nm', $sadmninfo->wbdumn);
            Session::put('admn_id', $sadmninfo->wbdid);
            return Redirect::to('/sAdmin-cPanel')->with('title', 'Test');
        else:
            Session::put('error', 'Email or Password invalid.');
            return Redirect::to('/sAdmin-Login');
        endif;
    }

    //Add Organization
    public function add_company(Request $request) {

        $wbd_validator = Validator::make($request->all(), [
                    'md_nm' => 'required|max:50',
                    'adn_eml' => 'required|email|unique:wbd_usrs,usr_eml|max:100',
                    'adn_usr' => 'required|unique:wbd_usrs,usr_unm|max:20',
                    'adn_psd' => 'required|min:8|max:20',
                    'adn_adrs' => 'required|max:255',
                    'adn_cnt' => 'required',
                    'adn_dvn' => 'required',
                    'adn_cty' => 'required',
                    'act_as' => 'required|max:20',
                    'org_name' => 'required|max:50',
                    'org_code' => 'required|max:10|unique:wbd_org,org_cd',
                    'org_psd' => 'required|max:20|min:8',
                    'org_email' => 'required|email|max:100|unique:wbd_org,org_eml',
                    'org_adrs' => 'required|max:255',
                    'org_cnt' => 'required',
                    'org_dvn' => 'required',
                    'org_cty' => 'required',
                    'exp_dt' => 'required|max:20',
                    'org_jdt' => 'required|max:20',
                    'adn_rnk' => 'required',
                        ], [
                    'md_nm.required' => 'You can\'t leave this empty.',
                    'adn_eml.required' => 'You can\'t leave this empty.',
                    'adn_usr.required' => 'You can\'t leave this empty.',
                    'adn_psd.required' => 'You can\'t leave this empty.',
                    'adn_adrs.required' => 'You can\'t leave this empty.',
                    'adn_cnt.required' => 'You can\'t leave this without select.',
                    'adn_dvn.required' => 'You can\'t leave this without select.',
                    'adn_cty.required' => 'You can\'t leave this without select.',
                    'act_as.required' => 'You can\'t leave this empty.',
                    'org_name.required' => 'You can\'t leave this empty.',
                    'org_code.required' => 'You can\'t leave this empty.',
                    'org_psd.required' => 'You can\'t leave this empty.',
                    'org_email.required' => 'You can\'t leave this empty.',
                    'org_adrs.required' => 'You can\'t leave this empty.',
                    'org_cnt.required' => 'You can\'t leave this empty.',
                    'org_dvn.required' => 'You can\'t leave this empty.',
                    'org_cty.required' => 'You can\'t leave this empty.',
                    'exp_dt.required' => 'You can\'t leave this empty.',
                    'org_jdt.required' => 'You can\'t leave this empty.',
                    'adn_rnk.required' => 'You can\'t leave this empty.',
                    'md_nm.max' => 'M.D. name length maximum 50 characters.',
                    'adn_eml.max' => 'Email length maximum 100 characters.',
                    'adn_usr.max' => 'Username length maximum 20 characters.',
                    'adn_psd.max' => 'Password length maximum 20 characters.',
                    'adn_adrs.max' => 'Address length maximum 255 characters.',
                    'act_as.max' => 'Act as value length maximum 20 characters.',
                    'org_name.max' => 'Organization name value length maximum 100 characters.',
                    'org_code.max' => 'Organization code value length maximum 10 characters.',
                    'org_psd.max' => 'Organization password value length maximum 20 characters.',
                    'org_psd.max' => 'Organization email value length maximum 100 characters.',
                    'org_psd.max' => 'Organization address value length maximum 255 characters.',
                    'exp_dt.max' => 'Organization address value length maximum 20 characters.',
                    'org_jdt.max' => 'Organization address value length maximum 20 characters.',
                    'adn_psd.min' => 'Password length atleast 8 characters.',
                    'org_psd.min' => 'Password length atleast 8 characters.',
                    'adn_eml.email' => 'Please enter a valid Email.',
                    'org_email.email' => 'Please enter a valid Email.',
                    'adn_eml.unique' => 'This email already exists.',
                    'adn_usr.unique' => 'This username already exists.',
                    'org_code.unique' => 'This code already exists.',
                    'org_email.unique' => 'This email already exists.',
        ]);

        if ($wbd_validator->passes()) {
            //Admin information
            $adn_data = array();
            $adn_data['usr_nm'] = $request->md_nm;
            $adn_data['usr_eml'] = $request->adn_eml;
            $adn_data['usr_unm'] = $request->adn_usr;
            $adn_data['usr_psd'] = md5($request->adn_psd);
            $adn_data['usr_adrs'] = $request->adn_adrs;
            $adn_data['usr_cty'] = $request->adn_cty;
            $adn_data['usr_dvn'] = $request->adn_dvn;
            $adn_data['usr_cnt'] = $request->adn_cnt;
            $adn_data['usr_ocd'] = $request->org_code;
            $adn_data['usr_jdt'] = $request->org_jdt;
            $adn_data['usr_rnk'] = $request->adn_rnk;
            $adn_data['usr_pwr'] = $request->act_as;
            $adn_data['usr_sts'] = 0;

            //Organization information
            $org_data = array();
            $org_data['org_md'] = $request->org_name;
            $org_data['org_nm'] = $request->md_nm;
            $org_data['org_cd'] = $request->org_code;
            $org_data['org_psd'] = md5($request->org_psd);
            $org_data['org_eml'] = $request->org_email;
            $org_data['org_adrs'] = $request->org_adrs;
            $org_data['org_cty'] = $request->org_cty;
            $org_data['org_dvn'] = $request->org_dvn;
            $org_data['org_cnt'] = $request->org_cnt;
            $org_data['org_jdt'] = $request->org_jdt;
            $org_data['org_exdt'] = $request->exp_dt;
            
            DB::table('wbd_org')->insert($org_data);
            DB::table('wbd_usrs')->insert($adn_data);
            
            /*
             * 
             * Success message
             * 
             */
            return response()->json(['success' => '!!! Organization successfully added. !!!']);
        } else {
            return response()->json(['errors' => $wbd_validator->errors()]);
        }
    }

    public function division($cnt) {
        $dvn = CuntryInfo::division($cnt);
        foreach ($dvn as $dvn_key => $dvn_value) {
            echo '<option value="' . $dvn_key . '">' . $dvn_value . '</optin>';
        }
    }

    public function city($dvn) {
        $cty = CuntryInfo::city($dvn);
        foreach ($cty as $cty_key => $cty_value) {
            echo '<option value="' . $cty_key . '">' . $cty_value . '</optin>';
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
