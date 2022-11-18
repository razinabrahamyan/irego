<?php

namespace App\Http\Controllers\Questions;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $questions = Question::paginate(10);

        // get the default inner page
        return view('pages.question.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.question.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required|min:2',
        ]);

        $question = Question::create([
            'text' => $request->text,
            'author' => auth()->user()->id,
        ]);
        if ($question){
            $request->session()->flash('success', 'Successfully created!');
        }else{
            $request->session()->flash('error', 'Something went wrong please try again!');
        }
        return redirect()->route('questions.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Question $question
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Question $question)
    {
        return view('pages.question.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        $request->validate([
            'text' => 'required|min:2',
        ]);

        $data = [
            'text' => $request->text,
        ];

        $question->update($data);

        if ($question){
            $request->session()->flash('success', 'Successfully Updated!');
        }else{
            $request->session()->flash('error', 'Something went wrong please try again!');
        }
        return redirect()->route('questions.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param Request $request
     * @param Question $question
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request, Question $question)
    {
        if ($question->delete()){
            $request->session()->flash('success', 'Successfully Deleted!');
        }else{
            $request->session()->flash('error', 'Something went wrong please try again!');
        }

        return redirect()->route('questions.index');
    }

}
