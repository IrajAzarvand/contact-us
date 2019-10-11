<?php

namespace ContactUs\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ContactUs\Models\ContactUs;

class ContactUsController extends Controller
{
    public function getAllTableRecords()
    {
        return ContactUs::all();
    }

    public function index()
    {
        $ContactUs = $this->getAllTableRecords();
        return view('ContactUs::contact-us', compact('ContactUs'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request, ContactUs $ContactUs)
    {
        $ContactUs->create($request->all());
        return back();
    }

    public function show($ContactUs)
    {
        $ContactUs = ContactUs::find($ContactUs);
        return view('ContactUs::contact-usShow', compact('ContactUs'));
    }

    public function edit($ContactUs)
    {
        $ContactUs = ContactUs::find($ContactUs);
        return view('ContactUs::contact-usEdit', compact('ContactUs'));
    }

    public function update(Request $request,  $ContactUs)
    {
        $ContactUs = ContactUs::find($ContactUs);
        $ContactUs->update($request->all());
        return redirect('/contact-usAdmin');
    }

    public function destroy($ContactUs)
    {
        $ContactUs = ContactUs::find($ContactUs);
        $ContactUs->delete();
        return back();
    }

    public function admin()
    {
        $ContactUs = $this->getAllTableRecords();
        return view('ContactUs::contact-usAdmin', compact('ContactUs'));
    }
}
