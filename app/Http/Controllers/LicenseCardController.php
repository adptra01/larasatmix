<?php

namespace App\Http\Controllers;

use App\Http\Requests\LicenseCardRequest;
use App\Models\LicenseCard;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class LicenseCardController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(LicenseCardRequest $request){
        LicenseCard::create([
           'slug' => Str::slug($request->nameOfOwner),
           'policeNumber' => $request->policeNumber,
           'nameOfOwner' => $request->nameOfOwner,
           'address' => $request->address,
           'brandAndType' => $request->brandAndType,
           'categoryAndModel' => $request->categoryAndModel,
           'manufactureYear' => $request->manufactureYear,
           'cylindrerCapacity' => $request->cylindrerCapacity,
           'bodyNumber' => $request->bodyNumber,
           'engineNumber' => $request->engineNumber,
           'color' => $request->color,
           'typeFuel' => $request->typeFuel,
           'licensePlateColor' => $request->licensePlateColor,
           'dateOfExpire' => $request->dateOfExpire,
           'payDate' => $request->payDate,
           'payment' => $request->payment,
           'status' => $request->status,
           'telp' => $request->telp,
           'description' => $request->description,
           'extraTime' => Carbon::parse($request->dateOfExpire)->addYears(1)->format('Y-m-d'),
        ]);

        return back()->with('success', 'Data berhasil disimpan. Harap periksa kembali pada data yang diinputkan untuk memastikan kebenaran data tersebut!');
    }

    public function edit($slug){
        return view('licenseCard.edit', [
            'key' => LicenseCard::whereSlug($slug)->first(),
        ]);
    }
    public function show($slug){
        return view('licenseCard.show', [
            'key' => LicenseCard::whereSlug($slug)->first(),
        ]);
    }

    public function update(LicenseCardRequest $request, $slug)
    {
        LicenseCard::whereSlug($slug)->update([
            'slug' => Str::slug($request->nameOfOwner),
            'policeNumber' => $request->policeNumber,
            'nameOfOwner' => $request->nameOfOwner,
            'address' => $request->address,
            'brandAndType' => $request->brandAndType,
            'categoryAndModel' => $request->categoryAndModel,
            'manufactureYear' => $request->manufactureYear,
            'cylindrerCapacity' => $request->cylindrerCapacity,
            'bodyNumber' => $request->bodyNumber,
            'engineNumber' => $request->engineNumber,
            'color' => $request->color,
            'typeFuel' => $request->typeFuel,
            'licensePlateColor' => $request->licensePlateColor,
            'dateOfExpire' => $request->dateOfExpire,
            'payDate' => $request->payDate,
            'payment' => $request->payment,
            'status' => $request->status,
            'telp' => $request->telp,
            'description' => $request->description,
            'extraTime' => $request->extraTime,
         ]);
 
         return redirect('/')->with('success', 'Data telah diedit. Harap periksa kembali pada data yang diinputkan untuk memastikan kebenaran data tersebut!');
    }

    public function destroy($slug){
        LicenseCard::whereSlug($slug)->delete();

        return back()->with('success', 'Data telah berhasil dihapus. Data tidak dapat dikembalikan karena telah di hapus secara permanen!');
    }

    public function report()
    {
        return view('licenseCard.report', [
            'data' => LicenseCard::latest()->get(),
            // 'today' => Carbon::now()->format('Y-m-d')
        ]);
    }
}
