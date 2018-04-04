<?php

namespace App\Http\Controllers;

session_start();

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Http\WbdHelpers\AuthCheck;
use DB;

class WbdbizController extends Controller {

//    public function authCheck(){
//        $usrId = Session::get('userId');
//        if($usrId == NULL){
//            return Redirect::to('/login')->send();
//        }else{
//            return Redirect::to('/')->send();
//        }
//    }
    /* ==================== Start Left Menu ==================== */
    public function index() {
        AuthCheck::logedOut();
        $wbdpjInfo = DB::table('wbd_pj')->get();
        $homepage = view('pages.homepage')->with('wbdpjInfo', $wbdpjInfo);
        return view('placeholder')->with('content', $homepage);
    }

//    public function dashboard() {
//        AuthCheck::logedOut();
//        AuthCheck::pjSessCheck();
//        $pjSer = Session::get('pjnm');
//        $wbd_pdt = DB::table('wbd_pdt')->get();
//        $wbd_unt = DB::table('wbd_unt')->get();
//        $pjName = DB::table('wbd_pj')->where('pjdtl', $pjSer)->first();
//        if($pjSer == 1) :
//            $homepage = view('pages.sganj-project-dashboard')
//                ->with('wbdPdt', $wbd_pdt)
//                ->with('wbdUnt', $wbd_unt)
//                ->with('pjName', $pjName->pjttl);
//        endif;
//        
//        return view('placeholder')->with('content', $homepage);
//    }
    //function for Profile
    public function profile() {
        AuthCheck::logedOut();
        $profile = view('pages.menu-left.user-profile');
        return view('placeholder')->with('content', $profile);
    }

    //function for buy product
    public function buy_pdt() {
        AuthCheck::logedOut();
        AuthCheck::pjSessCheck();
        $pjSer = Session::get('pjnm');
        $pjName = DB::table('wbd_pj')->where('pjdtl', $pjSer)->first();
        $wbd_pdt = DB::table('wbd_pdt')->get();
        $wbd_unt = DB::table('wbd_unt')->get();
        if ($pjSer == 1) :
            $homepage = view('pages.sganj-project-dashboard')
                    ->with('wbdPdt', $wbd_pdt)
                    ->with('wbdUnt', $wbd_unt)
                    ->with('pjName', $pjName->pjttl);
        endif;

        return view('placeholder')->with('content', $homepage);
    }

    //function for labor cost
    public function labor_cost() {
        AuthCheck::logedOut();
        AuthCheck::pjSessCheck();
        $pjSer = Session::get('pjnm');
        $pjName = DB::table('wbd_pj')->where('pjdtl', $pjSer)->first();
        if ($pjSer == 1) :
            $carrycst = view('pages.menu-left.labor-cost')->with('pjName', $pjName->pjttl);
        endif;
        return view('placeholder')->with('content', $carrycst);
    }

    //function for others cost
    public function others_cost() {
        AuthCheck::logedOut();
        AuthCheck::pjSessCheck();
        $pjSer = Session::get('pjnm');
        $pjName = DB::table('wbd_pj')->where('pjdtl', $pjSer)->first();
        $cstttl = DB::table('ors_cst_nm')->orderByRaw('orscstnm ASC')->get();
        if ($pjSer == 1) :
            $othrsycst = view('pages.menu-left.Others-cost')->with('pjName', $pjName->pjttl)->with('cstttl', $cstttl);
        endif;

        return view('placeholder')->with('content', $othrsycst);
    }

    // function for unloadin cost
    public function unloadingMachin() {
        AuthCheck::logedOut();
        AuthCheck::pjSessCheck();
        $pjSer = Session::get('pjnm');
        $pjName = DB::table('wbd_pj')->where('pjdtl', $pjSer)->first();
        $unloading = view('pages.menu-left.unloading-machin')->with('pjName', $pjName->pjttl);
        return view('placeholder')->with('content', $unloading);
    }

    // function for unloadin Boat
    public function unloadingBoat() {
        AuthCheck::logedOut();
        AuthCheck::pjSessCheck();
        $pjSer = Session::get('pjnm');
        $pjName = DB::table('wbd_pj')->where('pjdtl', $pjSer)->first();

        $boat = DB::table('bot')->get();

        $unloading = view('pages.menu-left.unloading-boat')->with('pjName', $pjName->pjttl)->with('boat', $boat);
        return view('placeholder')->with('content', $unloading);
    }

    /* ============================== Selling cost =================================== */

    public function sellProduct() {
        AuthCheck::logedOut();
        AuthCheck::pjSessCheck();
        $pjSer = Session::get('pjnm');
        $pjName = DB::table('wbd_pj')->where('pjdtl', $pjSer)->first();
        $wbd_pdt = DB::table('wbd_pdt')->get();
        $wbd_unt = DB::table('wbd_unt')->get();
        if ($pjSer == 1) :
            $homepage = view('pages.menu-left.product-sell')
                    ->with('wbdPdt', $wbd_pdt)
                    ->with('wbdUnt', $wbd_unt)
                    ->with('pjName', $pjName->pjttl);
        endif;

        return view('placeholder')->with('content', $homepage);
    }

    public function sellLaborCost() {
        AuthCheck::logedOut();
        AuthCheck::pjSessCheck();
        $pjSer = Session::get('pjnm');
        $pjName = DB::table('wbd_pj')->where('pjdtl', $pjSer)->first();
        if ($pjSer == 1) :
            $carrycst = view('pages.menu-left.sell-labor-cost')->with('pjName', $pjName->pjttl);
        endif;
        return view('placeholder')->with('content', $carrycst);
    }

    public function generatorCost() {
        AuthCheck::logedOut();
        AuthCheck::pjSessCheck();
        $pjSer = Session::get('pjnm');
        $pjName = DB::table('wbd_pj')->where('pjdtl', $pjSer)->first();
        if ($pjSer == 1) :
            $unloading = view('pages.menu-left.generator-cost')->with('pjName', $pjName->pjttl);
        endif;
        return view('placeholder')->with('content', $unloading);
    }

    public function gift() {
        AuthCheck::logedOut();
        AuthCheck::pjSessCheck();
        $pjSer = Session::get('pjnm');
        $pjName = DB::table('wbd_pj')->where('pjdtl', $pjSer)->first();

        $gftnm = DB::table('gft_to_nm')->get();
        if ($pjSer == 1) :
            $gift = view('pages.menu-left.gift')
                    ->with('pjName', $pjName->pjttl)
                    ->with('gftnm', $gftnm);
        endif;
        return view('placeholder')->with('content', $gift);
    }

    public function othersCostSell() {
        AuthCheck::logedOut();
        AuthCheck::pjSessCheck();
        $pjSer = Session::get('pjnm');
        $pjName = DB::table('wbd_pj')->where('pjdtl', $pjSer)->first();
        $cstttl = DB::table('ors_cst_nm')->orderByRaw('orscstnm ASC')->get();
        if ($pjSer == 1) :
            $othrsycst = view('pages.menu-left.others-cost-sell')->with('pjName', $pjName->pjttl)->with('cstttl', $cstttl);
        endif;

        return view('placeholder')->with('content', $othrsycst);
    }

    /* ============================== Selling cost End =================================== */

    // function for cash in/out bank
    public function cashInOut() {
        AuthCheck::logedOut();
        AuthCheck::pjSessCheck();
        $pjSer = Session::get('pjnm');
        $pjName = DB::table('wbd_pj')->where('pjdtl', $pjSer)->first();
        if ($pjSer == 1) :
            $cashin = view('pages.menu-left.cash-in-out')->with('pjName', $pjName->pjttl);
        endif;
        return view('placeholder')->with('content', $cashin);
    }
    
    public function bankReport(Request $request){
        AuthCheck::logedOut();
        AuthCheck::pjSessCheck();
        if ($request->datepicker) {
            $date = $request->datepicker;
        } else {
            $date = date('Y-m-d');
        }

        $bnkStt = DB::table('bnk')
                ->where('created_at', $date)
                ->get();

//        $ttlCsh = DB::table('bnk')
//                ->select(DB::raw('SUM(csh) as ttlcsh'))
//                ->where('created_at', $date)
//                ->first();
//        
//        $ttlOut = DB::table('bnk')
//                ->select(DB::raw('SUM(out) as ttlout'))
//                ->where('created_at', $date)
//                ->first();

        $bnkRprt = view('pages.menu-left.report-bank')
                ->with('bnkRpt', $bnkStt)
//                ->with('ttlCsh', $ttlCsh)
                ->with('date', $date);
        return view('placeholder')->with('content', $bnkRprt);
    }

    // function for donate
    public function donate() {
        $donate = view('pages.menu-left.donate');
        return view('placeholder')->with('content', $donate);
    }

    // function for report by project
    public function rprt_prjct() {
        $rprtpjct = view('pages.menu-left.report-by-project');
        return view('placeholder')->with('content', $rprtpjct);
    }

    // function for daily report
    public function reportProduct(Request $request) {
        AuthCheck::logedOut();
        AuthCheck::pjSessCheck();
        if ($request->datepicker) {
            $date = $request->datepicker;
        } else {
            $date = date('Y-m-d');
        }

        $dly_rpdrt_pdt = DB::table('buy_pdt')
                ->join('wbd_pdt', 'buy_pdt.pdtid', '=', 'wbd_pdt.id')
                ->join('wbd_unt', 'buy_pdt.untid', '=', 'wbd_unt.id')
                ->select('buy_pdt.*', 'wbd_pdt.pdt_nm', 'wbd_unt.unt_nm')
                ->where('buy_pdt.created_at', $date)
                ->get();

        $pdtTtl = DB::table('buy_pdt')
                ->select(DB::raw('SUM(ttlprc) as ttlprc'))
                ->where('created_at', $date)
                ->first();

        $dlyrprt = view('pages.menu-left.report-daily')
                ->with('dlyRprt', $dly_rpdrt_pdt)
                ->with('totalPrc', $pdtTtl)
                ->with('date', $date);
        return view('placeholder')->with('content', $dlyrprt);
    }

    // function for report by date
    public function boatReport(Request $request) {
        AuthCheck::logedOut();
        AuthCheck::pjSessCheck();
        if ($request->datepicker) {
            $date = $request->datepicker;
        } else {
            $date = date('Y-m-d');
        }

        $dly_rpdrt_bot = DB::table('cst_bot')
                ->join('bot', 'cst_bot.bot_id', '=', 'bot.id')
                ->select('cst_bot.*', 'bot.botnm')
                ->where('cst_bot.created_at', $date)
                ->get();

        $rprtdt = view('pages.menu-left.report-boat')
                ->with('boatRprt', $dly_rpdrt_bot)
                ->with('date', $date);
        ;
        return view('placeholder')->with('content', $rprtdt);
    }

    public function laborCostReport(Request $request) {
        AuthCheck::logedOut();
        AuthCheck::pjSessCheck();
        if ($request->datepicker) {
            $date = $request->datepicker;
        } else {
            $date = date('Y-m-d');
        }

        $dly_rpdrt_lbr = DB::table('lbr_cst')
                ->where('created_at', $date)
                ->get();

        $rprtlbr = view('pages.menu-left.report-labor')
                ->with('lbrRprt', $dly_rpdrt_lbr)
                ->with('date', $date);
        return view('placeholder')->with('content', $rprtlbr);
    }

    public function unloadingMachinReport(Request $request) {
        AuthCheck::logedOut();
        AuthCheck::pjSessCheck();
        if ($request->datepicker) {
            $date = $request->datepicker;
        } else {
            $date = date('Y-m-d');
        }

        $dly_rpdrt_uldmcn = DB::table('uld_mcn')
                ->where('created_at', $date)
                ->get();

        $rprtlbr = view('pages.menu-left.report-uldmachin')
                ->with('uldMcnRprt', $dly_rpdrt_uldmcn)
                ->with('date', $date);
        return view('placeholder')->with('content', $rprtlbr);
    }

    public function othersCostReport(Request $request) {
        AuthCheck::logedOut();
        AuthCheck::pjSessCheck();
        if ($request->datepicker) {
            $date = $request->datepicker;
            $cstId = $request->cstNm;
        } else {
            $date = date('Y-m-d');
            $cstId = null;
        }
        if ($cstId) {
            $where = array();
            $where['ors_cst.cstnmid'] = $cstId;
            $where['ors_cst.created_at'] = $date;

            $dly_rpdrt_orsCst = DB::table('ors_cst')
                    ->join('ors_cst_nm', 'ors_cst.cstnmid', '=', 'ors_cst_nm.id')
                    ->select('ors_cst.*', 'ors_cst_nm.orscstnm')
                    ->where($where)
                    ->get();
        } else {
            $dly_rpdrt_orsCst = DB::table('ors_cst')
                    ->join('ors_cst_nm', 'ors_cst.cstnmid', '=', 'ors_cst_nm.id')
                    ->select('ors_cst.*', 'ors_cst_nm.orscstnm')
                    ->where('ors_cst.created_at', $date)
                    ->get();
        }
        $cstNm = DB::table('ors_cst_nm')->orderBy('orscstnm')->get();

        $rprtlbr = view('pages.menu-left.report-others-cost')
                ->with('orsCst', $dly_rpdrt_orsCst)
                ->with('date', $date)
                ->with('cstNm', $cstNm);
        return view('placeholder')->with('content', $rprtlbr);
    }

    public function fixedAsset() {
        AuthCheck::logedOut();
        AuthCheck::pjSessCheck();
        $pjSer = Session::get('pjnm');
        $pjName = DB::table('wbd_pj')->where('pjdtl', $pjSer)->first();
        $astTtl = DB::table('fxd_ast_nm')->get();
        if ($pjSer == 1) :
            $unloading = view('pages.menu-left.fixed-asset')->with('pjName', $pjName->pjttl)->with('fxdTtl', $astTtl);
        endif;
        return view('placeholder')->with('content', $unloading);
    }

    public function fixedAssetReport() {
        AuthCheck::logedOut();
        AuthCheck::pjSessCheck();

        $fxdAst = DB::table('fxd_ast')
                ->join('fxd_ast_nm', 'fxd_ast.astid', '=', 'fxd_ast_nm.id')
                ->select('fxd_ast.*', 'fxd_ast_nm.fxdastnm')
                ->get();

        $fxeAstTtl = DB::table('fxd_ast')
                ->select(DB::raw('SUM(astprc) as ttlprc'))
                ->first();

        $rprtast = view('pages.menu-left.fixed-asset-report')
                ->with('fxdAst', $fxdAst)
                ->with('ttlPrc', $fxeAstTtl);
        return view('placeholder')->with('content', $rprtast);
    }

    /* =================================================== Selling Report ========================================== */

    public function productSellReport(Request $request) {
        AuthCheck::logedOut();
        AuthCheck::pjSessCheck();
        if ($request->datepicker) {
            $date = $request->datepicker;
        } else {
            $date = date('Y-m-d');
        }

        $dlySllRpdrtPdt = DB::table('sll_pdt')
                ->join('wbd_pdt', 'sll_pdt.pdtid', '=', 'wbd_pdt.id')
                ->join('wbd_unt', 'sll_pdt.untid', '=', 'wbd_unt.id')
                ->select('sll_pdt.*', 'wbd_pdt.pdt_nm', 'wbd_unt.unt_nm')
                ->where('sll_pdt.created_at', $date)
                ->get();

        $pdtSllTtl = DB::table('sll_pdt')
                ->select(DB::raw('SUM(ttlprc) as ttlprc'))
                ->where('created_at', $date)
                ->first();

        $dlySllrprt = view('pages.menu-left.report-product-sell')
                ->with('dlySllRprt', $dlySllRpdrtPdt)
                ->with('ttlSllPrc', $pdtSllTtl)
                ->with('date', $date);
        return view('placeholder')->with('content', $dlySllrprt);
    }

    /* =================================================== Selling Report End ========================================== */


    /* ==================== **End Left Menu** ==================== */

    /* ==================== Start Settings Menu ==================== */

    //function for login page
    public function login() {
        AuthCheck::logedIn();
        return view('pages.users.login');
    }

    public function checkInfo(Request $request) {
//        $usrNm = $request->usr_nm;
//        $usrPsd = md5($request->usr_psd);
        $where = array();
        $where['usr_unm'] = $request->usr_nm;
        $where['usr_psd'] = md5($request->usr_psd);
        $usr_info = DB::table('wbd_usrs')
                ->select('*')
                ->where($where)
//                ->where('usr_unm', $usrNm)
//                ->where('usr_psd', $usrPsd)
                ->first();
        if ($usr_info) {
            Session::put('userId', $usr_info->usr_id);
            Session::put('userOcd', $usr_info->usr_ocd);
            Session::put('usrInfo', $usr_info);
            if (Session::get('usrInfo')->usr_sts != 1):
                Session::put('errMsg', 'Your account not active. Please chech your email address for activate your account.');
                return Redirect::to('/login')->send();
            else:
                return Redirect::to('/')->send();
            endif;
        } else {
            Session::put('errMsg', 'Username or Password Incorrect.');
            return Redirect::to('/login')->send();
        }
    }
    
    public function screenLock(){
        return view('pages.lock-screen');
    }

    /* ==================== **End Settings Menu** ==================== */

    /* ==================== **For User logout** ==================== */

    public function usrLogout() {
        Session::forget('userId');
        Session::forget('userOcd');
        Session::forget('usrInfo');
        Session::forget('pjnm');
        Session::forget('spjInfo');
        return Redirect::to('/login');
    }

    /* ==================== **For User logout** ==================== */


    /* ==================== Start Top Navigation Bar ==================== */

    // function for add stuff
    public function add_product_name() {
        AuthCheck::logedOut();
        $addstf = view('pages.menu-top.add-product-name');
        return view('placeholder')->with('content', $addstf);
    }

    // function for add Project
    public function add_project() {
        AuthCheck::logedOut();
        $addpjct = view('pages.menu-top.project-add');
        return view('placeholder')->with('content', $addpjct);
    }

    // function for all stuff
    public function addBoat() {
        AuthCheck::logedOut();
        $allstf = view('pages.menu-top.add-boat');
        return view('placeholder')->with('content', $allstf);
    }

    // function for delete stuff
    public function addUnit() {
        AuthCheck::logedOut();
        $dltstf = view('pages.menu-top.add-unit');
        return view('placeholder')->with('content', $dltstf);
    }

    // function for block stuff
    public function addOthersCost() {
        AuthCheck::logedOut();
        $blkstf = view('pages.menu-top.add-others-cost');
        return view('placeholder')->with('content', $blkstf);
    }

    //functio for gift to
    public function giftTo() {
        AuthCheck::logedOut();
        $giftto = view('pages.menu-top.gift-to');
        return view('placeholder')->with('content', $giftto);
    }

    // function for Edit stuff
    public function addFixedAsset() {
        $blkstf = view('pages.menu-top.add-fixed-asset');
        return view('placeholder')->with('content', $blkstf);
    }

    // function for New contructor
    public function new_contructor() {
        $nwcntrctr = view('pages.menu-top.contractor-new');
        return view('placeholder')->with('content', $nwcntrctr);
    }

    // function for block contructor
    public function block_contructor() {
        $blkcntrctr = view('pages.menu-top.contractor-block');
        return view('placeholder')->with('content', $blkcntrctr);
    }

    // function for Edit contructor
    public function edit_contructor() {
        $edtcntrctr = view('pages.menu-top.contractor-edit');
        return view('placeholder')->with('content', $edtcntrctr);
    }

    // function for New product
    public function new_product() {
        $newpdt = view('pages.menu-top.product-new');
        return view('placeholder')->with('content', $newpdt);
    }

    // function for product grade
    public function product_grade() {
        $pdtgrd = view('pages.menu-top.product-grade');
        return view('placeholder')->with('content', $pdtgrd);
    }

    // function for product unit
    public function unit() {
        $unt = view('pages.menu-top.unit');
        return view('placeholder')->with('content', $unt);
    }

    /* ==================== **End Top Navigation Bar** ==================== */

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
