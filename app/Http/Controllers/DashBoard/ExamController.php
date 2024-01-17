<?php

namespace App\Http\Controllers\DashBoard;

use App\Http\Controllers\Controller;
use App\Http\Requests\DashBoard\StoreExamRequest;
use App\Http\Requests\DashBoard\UpdateExamRequest;
use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a list of exams and link to create new one
     */
    public function index()
    {
        $exams = Exam::all();
        return view('dashboard.exam.index', ['exams' => $exams]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.exam.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExamRequest $request)
    {
        Exam::create(['title' => $request->title, 'start_date' => $request->start_date, 'end_date' => $request->end_date]);
        return redirect(route('exam.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $exam = Exam::find($id);
        return view('dashboard.exam.edit', ['exam' => $exam]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExamRequest $request, string $id)
    {
        $exam = Exam::find($id);
        $old_title = $exam->title;
        $exam->update($request->all());
        return redirect(route('exam.index'))->with('message', "exam $old_title updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $exam = Exam::find($id);
        $exam->delete();
        return redirect(route('exam.index'))->with('message', "exam $exam->title  deleted successfully");
    }
}
