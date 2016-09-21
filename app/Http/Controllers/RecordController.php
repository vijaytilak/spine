<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Response;
use App\Record;

class RecordController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        Record::create(array(
            'author' => Input::get('author'),
            'text' => Input::get('text')
        ));

        return Response::json(array('success' => true));
    }

    /**
     * Display the specified resource.
     *
     * @param $crmId
     * @return Response
     * @internal param int $id
     */
    public function show($crmId)
    {
        return Response::json(Record::where('record_crmid', $crmId)->get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        Record::destroy($id);

        return Response::json(array('success' => true));
    }
}
