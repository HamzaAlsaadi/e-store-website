<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Problem;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


class ProblemController extends Controller
{
    public function show()
    {
        return view('web.problem');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Text_of_problem' => 'required',
            'file' => 'file|nullable|mimes:txt,pdf,doc,docx|max:2048'
        ]);
        $user_id = Auth::id();
        $problem = new Problem([
            'User_id' => $user_id,
            'Text_of_problem' => $request->input('Text_of_problem'),
        ]);
        if ($request->hasFile('file')) {
            $problem->file = $this->uploadFile($request->file('file'));
        }
        DB::transaction(function () use ($problem) {
            $problem->save();
        });
        return redirect()->back()->with('success', 'Problem submission successfully submitted.');
    }
    private function uploadFile($file)
    {
        $attachmentPath = $file->storeAs('public/attachments', Auth::id() . '.' . $file->getClientOriginalExtension());
        return $attachmentPath;
    }
}
