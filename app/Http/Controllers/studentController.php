<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\studentmodel;
use DB;
use Session;
use Illuminate\Pagination;

class studentController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $result = DB::table('student')->paginate(5);

        return view('studentlist')->with('data', $result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        // return View::make('student.create');
        return view('student');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data) {

        $post = $data->all();
        $v = \Validator::make($data->all(), [
                    'name' => 'required',
                    'email' => 'required',
                    'contact' => 'required',
        ]);
        if ($v->fails()) {
            return redirect()->back()->withErrors($v->errors());
        } else {
            $data_arr = array(
                'name' => $data->input('name'),
                'email' => $data->input('email'),
                'remember_token' => $data->input('_token'),
                'contact' => $data->input('contact'),
            );
            $q = DB::table('student')->insert($data_arr);
            if ($q > 0) {
                session::flash('message', 'Record added');
                return redirect('index');
            }
        }
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
        $data_row = DB::table('student')->where('id', $id)->first();
        return view('studentedit')->with('row', $data_row);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $data) {
        $post = $data->all();
        $v = \Validator::make($data->all(), [
                    'name' => 'required',
                    'email' => 'required',
                    'contact' => 'required',
        ]);
        if ($v->fails()) {
            return redirect()->back()->withErrors($v->errors());
        } else {
            $data_arr = array(
                'name' => $data->input('name'),
                'email' => $data->input('email'),
                'remember_token' => $data->input('_token'),
                'contact' => $data->input('contact'),
            );
            $q = DB::table('student')->where('id', $_POST['id'])->update($data_arr);
            if ($q > 0) {
                session::flash('message', 'Record Update');
                return redirect('index');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
        $q = DB::table('student')->where('id', $id)->delete();
        if ($q) {
            session::flash('message', 'Record Removed');
            return redirect('index');
        }
    }

}
