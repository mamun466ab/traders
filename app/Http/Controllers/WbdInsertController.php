<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Validator;

class WbdInsertController extends Controller {

    public function index() {
        //
    }

    public function addProject(Request $request) {
        $wbd_validator = Validator::make($request->all(), [
                    'pjttl' => 'required|max:100',
                    'pjdtl' => 'required|max:255',
                    'pjimg' => 'required|image|mimes:jpeg,png,jpg,gif',
                        ], [
                    'pjttl.required' => 'You can\'t leave this empty.',
                    'pjdtl.required' => 'You can\'t leave this empty.',
                    'pjimg.required' => 'You can\'t leave this without select image.',
                    'pjimg.mimes' => 'Image must be jpeg or png or jpg or gif format.',
                    'pjttl.max' => 'Project title value length maximum 10 characters.',
                    'pjdtl.max' => 'Project detail value length maximum 255 characters.',
        ]);

        if ($wbd_validator->passes()) {
            $pjinfo = array();

            $pjinfo['pjttl'] = $request->pjttl;
            $pjinfo['pjdtl'] = $request->pjdtl;

            if ($request->hasFile('pjimg')) {
                if ($request->file('pjimg')->isValid()) {
                    $ext = $request->pjimg->extension();
                    $imgName = 'project-image' . time() . '.' . $ext;
                    $path = $request->pjimg->storeAs('images', $imgName);
                    $pjinfo['pjimg']= $imgName;
                }
            }
            
            DB::table('wbd_pj')->insert($pjinfo);
            
            return response()->json(['success' => '!!! Organization successfully added. !!!']);
        } else {
            return response()->json(['errors' => $wbd_validator->errors()]);
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
