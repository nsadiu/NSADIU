<?php


namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('members', compact('members'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'student_id' => 'required',
            'department' => 'required',
            'batch' => 'required',
            'location' => 'required',
            'email' => 'required|email'
        ]);

        Member::create($validated);

        return redirect()->route('members.index')
            ->with('success', 'Successfully joined NSA-DIU!');
    }
}