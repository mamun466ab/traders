<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Http\WbdHelpers\AuthCheck;
use Validator;
use DB;

class WbdBizActionController extends Controller {

    public function project($pId) {
        AuthCheck::logedOut();
        if ($pId == 1) {
            Session::put('pjnm', $pId);
            return Redirect::to('/buy-product')->send();
        }
    }

    public function buyProduct(Request $request) {
        $product_validate = Validator::make($request->all(), [
                    'pdtnm' => 'required',
                    'pdtamnt' => 'required|numeric',
                    'pdtunt' => 'required',
                    'ttlprc' => 'required|numeric',
                    'datepicker' => 'required',
                    'pdtdtl' => 'max:255',
                        ], [
                    'pdtnm.required' => 'You can\'t leave this empty.',
                    'pdtamnt.required' => 'You can\'t leave this empty.',
                    'pdtamnt.numeric' => 'This content must be numeric.',
                    'pdtunt.required' => 'You can\'t leave this empty.',
                    'ttlprc.required' => 'You can\'t leave this empty.',
                    'ttlprc.numeric' => 'This content must be numeric.',
                    'datepicker.required' => 'You can\'t leave this empty.',
                    'pdtdtl.max' => 'Maximum 255 characters.',
        ]);

        if ($product_validate->passes()) {
            $buyInfo = array();

            $buyInfo['pdtid'] = $request->pdtnm;
            $buyInfo['mnt'] = $request->pdtamnt;
            $buyInfo['untid'] = $request->pdtunt;
            $buyInfo['ttlprc'] = $request->ttlprc;
            $buyInfo['dtl'] = $request->pdtdtl;
            $buyInfo['created_at'] = $request->datepicker;

            DB::table('buy_pdt')->insert($buyInfo);

            return response()->json(['success' => '!!! successful. !!!']);
        } else {
            return response()->json(['errors' => $product_validate->errors()]);
        }
    }

    public function laborCost(Request $request) {
        $product_validate = Validator::make($request->all(), [
                    'dmplbr' => 'required|numeric',
                    'uldlbr' => 'required|numeric',
                    'extlbr' => 'required|numeric',
                    'datepicker' => 'required',
                    'cstdtl' => 'max:255',
                        ], [
                    'dmplbr.required' => 'You can\'t leave this empty.',
                    'dmplbr.numeric' => 'This content must be numeric.',
                    'uldlbr.required' => 'You can\'t leave this empty.',
                    'uldlbr.numeric' => 'This content must be numeric.',
                    'extlbr.required' => 'You can\'t leave this empty.',
                    'extlbr.numeric' => 'This content must be numeric.',
                    'datepicker.required' => 'You can\'t leave this empty.',
                    'cstdtl.max' => 'Maximum 255 characters.',
        ]);

        if ($product_validate->passes()) {
            $lbrCst = array();

            $lbrCst['dmplbr'] = $request->dmplbr;
            $lbrCst['uldlbr'] = $request->uldlbr;
            $lbrCst['extlbr'] = $request->extlbr;
            $lbrCst['created_at'] = $request->datepicker;
            $lbrCst['cstdtl'] = $request->cstdtl;

            DB::table('lbr_cst')->insert($lbrCst);

            return response()->json(['success' => '!!! successful. !!!']);
        } else {
            return response()->json(['errors' => $product_validate->errors()]);
        }
    }

    public function others_cost(Request $request) {
        $orscst_validate = Validator::make($request->all(), [
                    'cstid' => 'required',
                    'cstamnt' => 'required|numeric',
                    'cstdtl' => 'max:255',
                    'cstdt' => 'required',
                        ], [
                    'cstid.required' => 'You can\'t leave this empty.',
                    'cstamnt.required' => 'You can\'t leave this empty.',
                    'cstamnt.numeric' => 'This content must be numeric.',
                    'cstdtl.max' => 'Maximum 255 characters.',
                    'cstdt.required' => 'You can\'t leave this empty.',
        ]);

        if ($orscst_validate->passes()) {
            $orsCstInfo = array();

            $orsCstInfo['cstnmid'] = $request->cstid;
            $orsCstInfo['cst_mnt'] = $request->cstamnt;
            $orsCstInfo['cst_dtl'] = $request->cstdtl;
            $orsCstInfo['created_at'] = $request->cstdt;

            DB::table('ors_cst')->insert($orsCstInfo);

            return response()->json(['success' => '!!! successful. !!!']);
        } else {
            return response()->json(['errors' => $orscst_validate->errors()]);
        }
    }

    public function unloadingMachin(Request $request) {
        $uldcst_validate = Validator::make($request->all(), [
                    'dslmnt' => 'required|numeric',
                    'dsl' => 'required|numeric',
                    'crg' => 'required|numeric',
                    'pts' => 'required|numeric',
                    'cstdtl' => 'max:255',
                    'cstdt' => 'required',
                        ], [
                    'dslmnt.required' => 'You can\'t leave this empty.',
                    'dsl.required' => 'You can\'t leave this empty.',
                    'crg.required' => 'You can\'t leave this empty.',
                    'pts.required' => 'You can\'t leave this empty.',
                    'cstdtl.required' => 'You can\'t leave this empty.',
                    'cstdt.required' => 'You can\'t leave this empty.',
                    'dslmnt.numeric' => 'This content must be numeric.',
                    'dsl.numeric' => 'This content must be numeric.',
                    'crg.numeric' => 'This content must be numeric.',
                    'pts.numeric' => 'This content must be numeric.',
                    'cstdtl.max' => 'Maximum 255 characters.',
        ]);
        
        if($uldcst_validate->passes()){
            $uldInfo = array();
            $uldInfo['dsl_mnt'] = $request->dslmnt;
            $uldInfo['dsl'] = $request->dsl;
            $uldInfo['crg'] = $request->crg;
            $uldInfo['pts'] = $request->pts;
            $uldInfo['cstdtl'] = $request->cstdtl;
            $uldInfo['created_at'] = $request->cstdt;
            
            DB::table('uld_mcn')->insert($uldInfo);
            
            return response()->json(['success' => '!!! successful. !!!']);
        }else{
            return response()->json(['errors' => $uldcst_validate->errors()]);
        }
    }
    
    public function unloadingBoat(Request $request){
        $uldbot_validate = Validator::make($request->all(), [
                    'bot' => 'required',
                    'dslmnt' => 'required|numeric',
                    'dslprc' => 'required|numeric',
                    'crg' => 'required|numeric',
                    'pts' => 'required|numeric',
                    'cstdtl' => 'max:255',
                    'cstdt' => 'required',
                        ], [
                    'bot.required' => 'You can\'t leave this empty.',
                    'dslmnt.required' => 'You can\'t leave this empty.',
                    'dslprc.required' => 'You can\'t leave this empty.',
                    'crg.required' => 'You can\'t leave this empty.',
                    'pts.required' => 'You can\'t leave this empty.',
                    'cstdt.required' => 'You can\'t leave this empty.',
                    'dslmnt.numeric' => 'This content must be numeric.',
                    'dslprc.numeric' => 'This content must be numeric.',
                    'crg.numeric' => 'This content must be numeric.',
                    'pts.numeric' => 'This content must be numeric.',
                    'cstdtl.max' => 'Maximum 255 characters.',
        ]);
        
        if($uldbot_validate->passes()){
            $uldBotInfo = array();
            $uldBotInfo['bot_id'] = $request->bot;
            $uldBotInfo['dsl_mnt'] = $request->dslmnt;
            $uldBotInfo['dsl_prc'] = $request->dslprc;
            $uldBotInfo['mntcrg'] = $request->crg;
            $uldBotInfo['pts'] = $request->pts;
            $uldBotInfo['cstdtl'] = $request->cstdtl;
            $uldBotInfo['created_at'] = $request->cstdt;
            
            DB::table('cst_bot')->insert($uldBotInfo);
            
            return response()->json(['success' => '!!! successful. !!!']);
        }else{
            return response()->json(['errors' => $uldbot_validate->errors()]);
        }
    }
    
    public function pdtTtl(Request $request){
        $pdt_validate = Validator::make($request->all(), [
            'pdtttl' => 'required|max:30|unique:wbd_pdt,pdt_nm'
        ], [
            'pdtttl.required' => 'You can\'t leave this empty.',
            'pdtttl.unique' => 'This product already exist.',
            'pdtttl.max' => 'Maximum 30 characters.'
        ]);
        
        if($pdt_validate->passes()){
            $pddttl = array();
            $pddttl['pdt_nm'] = $request->pdtttl;
            
            DB::table('wbd_pdt')->insert($pddttl);
            
            return response()->json(['success' => '!!! successful. !!!']);
        }else{
            return response()->json(['errors' => $pdt_validate->errors()]);
        }
    }
    
    public function addBoat(Request $request){
        $bot_validate = Validator::make($request->all(), [
            'bot' => 'required|max:30|unique:bot,botnm'
        ], [
            'bot.required' => 'You can\'t leave this empty.',
            'bot.unique' => 'This product already exist.',
            'bot.max' => 'Maximum 30 characters.'
        ]);
        
        if($bot_validate->passes()){
            $botttl = array();
            $botttl['botnm'] = $request->bot;
            
            DB::table('bot')->insert($botttl);
            
            return response()->json(['success' => '!!! successful. !!!']);
        }else{
            return response()->json(['errors' => $bot_validate->errors()]);
        }
    }
    
    public function addUnit(Request $request){
        $unt_validate = Validator::make($request->all(), [
            'unt' => 'required|max:30|unique:wbd_unt,unt_nm'
        ], [
            'unt.required' => 'You can\'t leave this empty.',
            'unt.unique' => 'This product already exist.',
            'unt.max' => 'Maximum 30 characters.'
        ]);
        
        if($unt_validate->passes()){
            $botttl = array();
            $botttl['unt_nm'] = $request->unt;
            
            DB::table('wbd_unt')->insert($botttl);
            
            return response()->json(['success' => '!!! successful. !!!']);
        }else{
            return response()->json(['errors' => $unt_validate->errors()]);
        }
    }
    
    public function addOrsCst(Request $request){
        $orscst_validate = Validator::make($request->all(), [
            'orscst' => 'required|max:30|unique:ors_cst_nm,orscstnm'
        ], [
            'orscst.required' => 'You can\'t leave this empty.',
            'orscst.unique' => 'This cost already exist.',
            'orscst.max' => 'Maximum 30 characters.'
        ]);
        
        if($orscst_validate->passes()){
            $botttl = array();
            $botttl['orscstnm'] = $request->orscst;
            
            DB::table('ors_cst_nm')->insert($botttl);
            
            return response()->json(['success' => '!!! successful. !!!']);
        }else{
            return response()->json(['errors' => $orscst_validate->errors()]);
        }
    }
    
    public function giftToNm(Request $request){
        $gftto_validate = Validator::make($request->all(), [
            'gfttonm' => 'required|max:30|unique:gft_to_nm,gftto'
        ], [
            'gfttonm.required' => 'You can\'t leave this empty.',
            'gfttonm.unique' => 'This cost already added.',
            'gfttonm.max' => 'Maximum 30 characters.'
        ]);
        
        if($gftto_validate->passes()){
            $gftttl = array();
            $gftttl['gftto'] = $request->gfttonm;
            
            DB::table('gft_to_nm')->insert($gftttl);
            return response()->json(['success' => '!!! successful. !!!']);
        }else{
            return response()->json(['errors' => $gftto_validate->errors()]);
        }
    }
    
    public function gift(Request $request){
        $gftto_validate = Validator::make($request->all(), [
            'gfttoid' => 'required',
            'gftmnt' => 'required|numeric',
            'gftdtl' => 'max:255',
            'gftdt' => 'required',
        ], [
            'gfttoid.required' => 'You can\'t leave this empty.',
            'gftmnt.required' => 'You can\'t leave this empty.',
            'gftdt.required' => 'You can\'t leave this empty.',
            'gftmnt.numeric' => 'This content must be numeric.',
            'gftdtl.max' => 'Maximum 255 characters.',
        ]);
        
        if($gftto_validate->passes()){
            $gftInfo = array();
            $gftInfo['gftid'] = $request->gfttoid;
            $gftInfo['mnt'] = $request->gftmnt;
            $gftInfo['dtl'] = $request->gftdtl;
            $gftInfo['created_at'] = $request->gftdt;
            
            DB::table('gft_to')->insert($gftInfo);
            return response()->json(['success' => '!!! successful. !!!']);
        }else{
            return response()->json(['errors' => $gftto_validate->errors()]);
        }
    }
    
    public function othersCostSell(Request $request){
        $orscst_validate = Validator::make($request->all(), [
                    'cstid' => 'required',
                    'cstamnt' => 'required|numeric',
                    'cstdtl' => 'max:255',
                    'cstdt' => 'required',
                        ], [
                    'cstid.required' => 'You can\'t leave this empty.',
                    'cstamnt.required' => 'You can\'t leave this empty.',
                    'cstamnt.numeric' => 'This content must be numeric.',
                    'cstdtl.max' => 'Maximum 255 characters.',
                    'cstdt.required' => 'You can\'t leave this empty.',
        ]);

        if ($orscst_validate->passes()) {
            $orsCstInfo = array();

            $orsCstInfo['cstnmid'] = $request->cstid;
            $orsCstInfo['cst_mnt'] = $request->cstamnt;
            $orsCstInfo['cst_dtl'] = $request->cstdtl;
            $orsCstInfo['created_at'] = $request->cstdt;

            DB::table('orscstsll')->insert($orsCstInfo);

            return response()->json(['success' => '!!! successful. !!!']);
        } else {
            return response()->json(['errors' => $orscst_validate->errors()]);
        }
    }


    /* =================================================== Selling cost ==========================================*/
    public function sellProduct(Request $request){
        $product_validate = Validator::make($request->all(), [
                    'pdtnm' => 'required',
                    'pdtamnt' => 'required|numeric',
                    'pdtunt' => 'required',
                    'ttlprc' => 'required|numeric',
                    'pdtdt' => 'required',
                    'pdtdtl' => 'max:255',
                        ], [
                    'pdtnm.required' => 'You can\'t leave this empty.',
                    'pdtamnt.required' => 'You can\'t leave this empty.',
                    'pdtamnt.numeric' => 'This content must be numeric.',
                    'pdtunt.required' => 'You can\'t leave this empty.',
                    'ttlprc.required' => 'You can\'t leave this empty.',
                    'ttlprc.numeric' => 'This content must be numeric.',
                    'pdtdt.required' => 'You can\'t leave this empty.',
                    'pdtdtl.max' => 'Maximum 255 characters.',
        ]);

        if ($product_validate->passes()) {
            $sellInfo = array();

            $sellInfo['pdtid'] = $request->pdtnm;
            $sellInfo['mnt'] = $request->pdtamnt;
            $sellInfo['untid'] = $request->pdtunt;
            $sellInfo['ttlprc'] = $request->ttlprc;
            $sellInfo['dtl'] = $request->pdtdtl;
            $sellInfo['created_at'] = $request->pdtdt;

            DB::table('sll_pdt')->insert($sellInfo);

            return response()->json(['success' => '!!! successful. !!!']);
        } else {
            return response()->json(['errors' => $product_validate->errors()]);
        }
    }
    
    public function sellLaborCost(Request $request){
        $product_validate = Validator::make($request->all(), [
                    'dmplbr' => 'required|numeric',
                    'uldlbr' => 'required|numeric',
                    'extlbr' => 'required|numeric',
                    'cstdt' => 'required',
                    'cstdtl' => 'max:255',
                        ], [
                    'dmplbr.required' => 'You can\'t leave this empty.',
                    'dmplbr.numeric' => 'This content must be numeric.',
                    'uldlbr.required' => 'You can\'t leave this empty.',
                    'uldlbr.numeric' => 'This content must be numeric.',
                    'extlbr.required' => 'You can\'t leave this empty.',
                    'extlbr.numeric' => 'This content must be numeric.',
                    'cstdt.required' => 'You can\'t leave this empty.',
                    'cstdtl.max' => 'Maximum 255 characters.',
        ]);

        if ($product_validate->passes()) {
            $lbrCst = array();

            $lbrCst['dmplbr'] = $request->dmplbr;
            $lbrCst['uldlbr'] = $request->uldlbr;
            $lbrCst['extlbr'] = $request->extlbr;
            $lbrCst['created_at'] = $request->cstdt;
            $lbrCst['cstdtl'] = $request->cstdtl;

            DB::table('sll_lbr_cst')->insert($lbrCst);

            return response()->json(['success' => '!!! successful. !!!']);
        } else {
            return response()->json(['errors' => $product_validate->errors()]);
        }
    }
    
    public function generatorCost(Request $request){
        $gntr_validate = Validator::make($request->all(), [
                    'dslmnt' => 'required|numeric',
                    'dsl' => 'required|numeric',
                    'crg' => 'required|numeric',
                    'pts' => 'required|numeric',
                    'cstdtl' => 'max:255',
                    'cstdt' => 'required',
                        ], [
                    'dslmnt.required' => 'You can\'t leave this empty.',
                    'dsl.required' => 'You can\'t leave this empty.',
                    'crg.required' => 'You can\'t leave this empty.',
                    'pts.required' => 'You can\'t leave this empty.',
                    'cstdtl.required' => 'You can\'t leave this empty.',
                    'cstdt.required' => 'You can\'t leave this empty.',
                    'dslmnt.numeric' => 'This content must be numeric.',
                    'dsl.numeric' => 'This content must be numeric.',
                    'crg.numeric' => 'This content must be numeric.',
                    'pts.numeric' => 'This content must be numeric.',
                    'cstdtl.max' => 'Maximum 255 characters.',
        ]);
        
        if($gntr_validate->passes()){
            $uldInfo = array();
            $uldInfo['dsl_mnt'] = $request->dslmnt;
            $uldInfo['dsl'] = $request->dsl;
            $uldInfo['crg'] = $request->crg;
            $uldInfo['pts'] = $request->pts;
            $uldInfo['cstdtl'] = $request->cstdtl;
            $uldInfo['created_at'] = $request->cstdt;
            
            DB::table('gnrtr_cst')->insert($uldInfo);
            
            return response()->json(['success' => '!!! successful. !!!']);
        }else{
            return response()->json(['errors' => $gntr_validate->errors()]);
        }
    }
    /* =================================================== Selling cost End ==========================================*/
    
    /* =================================================== Bank ==========================================*/
    public function bankInOut(Request $request){
        $bio_validate = Validator::make($request->all(), [
                    'cshinout' => 'required',
                    'cshamnt' => 'required|numeric',
                    'cshdtl' => 'max:255',
                    'datepicker' => 'required',
                        ], [
                    'cshinout.required' => 'You can\'t leave this empty.',
                    'cshamnt.required' => 'You can\'t leave this empty.',
                    'datepicker.required' => 'You can\'t leave this empty.',
                    'cshamnt.numeric' => 'This content must be numeric.',
                    'cshdtl.max' => 'Maximum 255 characters.',
        ]);
        
        if($bio_validate->passes()){
            $bnkInfo = array();
            $bnkInfo['inout'] = $request->cshinout;
            $bnkInfo['in'] = '';
            $bnkInfo['out'] = '';
            $bnkInfo['csh'] = '';
            $bnkInfo['dtl'] = $request->cshdtl;
            $bnkInfo['created_at'] = $request->datepicker;
            
            $csh = DB::table('bnk')
                    ->select('csh')
                    ->orderBy('id','desc')
                    ->first();
            
            if($request->cshinout == 'in'){
                $bnkInfo['in'] = $request->cshamnt;
                $bnkInfo['csh'] =($csh->csh + $request->cshamnt);
            }else{
                $bnkInfo['in'] = 0;
            }
            if($request->cshinout == 'out'){
                $bnkInfo['out'] = $request->cshamnt;
                $bnkInfo['csh'] =($csh->csh - $request->cshamnt);
            }else{
                $bnkInfo['out'] = 0;
            }
            
            DB::table('bnk')->insert($bnkInfo);
            
            return response()->json(['success' => '!!! successful. !!!']);
        }else{
            return response()->json(['errors' => $bio_validate->errors()]);
        }
    }
    /* =================================================== Bank End ==========================================*/
    
    public function addFixedSsset(Request $request){
        $orscst_validate = Validator::make($request->all(), [
            'fxdasst' => 'required|max:30|unique:ors_cst_nm,orscstnm'
        ], [
            'fxdasst.required' => 'You can\'t leave this empty.',
            'fxdasst.unique' => 'This Asset already exist.',
            'fxdasst.max' => 'Maximum 30 characters.'
        ]);
        
        if($orscst_validate->passes()){
            $botttl = array();
            $botttl['fxdastnm'] = $request->fxdasst;
            
            DB::table('fxd_ast_nm')->insert($botttl);
            
            return response()->json(['success' => '!!! successful. !!!']);
        }else{
            return response()->json(['errors' => $orscst_validate->errors()]);
        }
    }
    
    public function fixedAsset(Request $request){
        $astcst_validate = Validator::make($request->all(), [
            'asstid' => 'required',
            'astprc' => 'required|numeric',
            'astdtl' => 'max:255',
            'astdt' => 'required',
        ], [
            'asstid.required' => 'You can\'t leave this empty.',
            'astprc.required' => 'You can\'t leave this empty.',
            'astdt.required' => 'You can\'t leave this empty.',
            'astprc.numeric' => 'This content must be numeric.',
            'astdtl.max' => 'Maximum 255 characters.',
        ]);
        
        if($astcst_validate->passes()){
            $astInfo = array();
            $astInfo['astid'] = $request->asstid;
            $astInfo['astprc'] = $request->astprc;
            $astInfo['astdtl'] = $request->astdtl;
            $astInfo['created_at'] = $request->astdt;
            
            DB::table('fxd_ast')->insert($astInfo);
            
            return response()->json(['success' => '!!! successful. !!!']);
        }else{
            return response()->json(['errors' => $astcst_validate->errors()]);
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
