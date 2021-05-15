<?php

namespace App\Http\Controllers;

use App\Models\Applicants;
use Illuminate\Http\Request;

class ApplicantsController extends Controller
{
    public function index()
    {
        $applicants = Applicants::all();

        return view('welcome', compact(
            'applicants'
        ));
    }

    public function changeHiring($id)
    {
        $applicant = Applicants::where('id', $id)->first();
        if ($applicant['is_hired'] == 0) {
            $newStatus = 1;
        } else {
            $newStatus = 0;
        }

        $applicant->update([
            'is_hired' => $newStatus,
        ]);

        return back();
    }

    public function remove($id)
    {
        Applicants::find($id)->delete();

        return back();
    }

    public function showEditForm($id) {
        $applicant = Applicants::where('id', $id)->first();

        return view('edit-applicant', compact(
           'applicant',
        ));
    }

    public function edit($id, Request $request) {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'experience' => 'required',
            'status' => 'required',
        ]);

        Applicants::where('id', $id)->update([
            'name' => $request['name'],
            'surname' => $request['surname'],
            'experience_years' => $request['experience'],
            'is_hired' => $request['status'],
        ]);

        return redirect('/');
    }
}
