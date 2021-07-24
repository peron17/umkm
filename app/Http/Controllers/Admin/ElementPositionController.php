<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Admin\BaseController;
use App\Models\ElementPosition;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ElementPositionController extends BaseController
{
    public function __construct()
    {
        $this->key = 'element-position';

        $this->pageTitle = 'Element Position';

        $this->model = ElementPosition::class;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()) {
            return DataTables::of($this->model::all())
                ->addIndexColumn()
                ->editColumn('description', function($model) {
                    return strlen($model->description) > 150 ? substr($model->description, 0, 100) . ' ...' : $model->description;
                })
                ->addColumn('action', function($model){
                    return view('action', [
                        'routeShow' => route($this->key.'.show', $model->id),
                        'routeEdit' => route($this->key.'.edit', $model->id),
                        'routeDelete' => route($this->key.'.destroy', $model->id),
                    ]);
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.element-position.index', [
            'menus' => $this->menuPageIndex(),
            'title' => $this->pageTitle,
            'columns' => $this->getTableColumns()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
