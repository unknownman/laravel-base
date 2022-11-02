<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\CreateOtpRequest;
use App\Http\Requests\Auth\StoreOtpRequest;
use App\Http\Requests\Auth\UpdateOtpRequest;
use App\Models\Otp;
use App\Services\OtpService;

class OtpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("auth.otp.index");
    }

    /**
     * Show the form for creating a new resource.
     * @param  \App\Http\Requests\CreateOtpRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function create(CreateOtpRequest $request)
    {
        /* @TODO normalize mobile */

        /* @TODO check if registered */

        OtpService::generateOtp($request->mobile_number);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOtpRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOtpRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Otp  $otp
     * @return \Illuminate\Http\Response
     */
    public function show(Otp $otp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Otp  $otp
     * @return \Illuminate\Http\Response
     */
    public function edit(Otp $otp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOtpRequest  $request
     * @param  \App\Models\Otp  $otp
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOtpRequest $request, Otp $otp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Otp  $otp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Otp $otp)
    {
        //
    }
}
