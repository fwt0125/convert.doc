<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storedoc_listRequest;
use App\Http\Requests\Updatedoc_listRequest;
use App\Models\doc_list;

class DocListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\Storedoc_listRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storedoc_listRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\doc_list  $doc_list
     * @return \Illuminate\Http\Response
     */
    public function show(doc_list $doc_list)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\doc_list  $doc_list
     * @return \Illuminate\Http\Response
     */
    public function edit(doc_list $doc_list)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatedoc_listRequest  $request
     * @param  \App\Models\doc_list  $doc_list
     * @return \Illuminate\Http\Response
     */
    public function update(Updatedoc_listRequest $request, doc_list $doc_list)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\doc_list  $doc_list
     * @return \Illuminate\Http\Response
     */
    public function destroy(doc_list $doc_list)
    {
        //
    }
}
