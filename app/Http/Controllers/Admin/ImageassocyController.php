<?php

namespace App\Http\Controllers\Admin;

use App\Models\Answerassocy;
use Illuminate\Http\Request;

use App\Http\Requests\AnswerassocyStoreRequest;
use App\Http\Requests\AnswerassocyUpdateRequest;

use App\Repositories\AnswerassocyRepository;
use App\Repositories\QuestionRepository;
use App\Repositories\AnswerRepository;

class AnswerassocyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $answerRepo;
    protected $questionRepo;
    protected $answerassocyRepo;

    public function __construct(AnswerRepository $answerRepo, QuestionRepository $questionRepo, AnswerassocyRepository $answerassocyRepo)
    {
        $this->answerRepo = $answerRepo;
        $this->questionRepo = $questionRepo;
        $this->answerassocyRepo = $answerassocyRepo;
    }

    public function index()
    {
        $answerassocies = $this->answerassocyRepo->getlatest();
        return view('answerassocies.index', compact('answerassocies'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $answers = $this->answerRepo->getlatest();
        $questions = $this->questionRepo->getlatest();
        return view('answerassocies.create',compact('answers','questions'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnswerassocyStoreRequest $request)
    {
        $answerassocy = $this->answerassocyRepo->makeStore($request->validated());
        return redirect()->route('answerassocies.index')->with('success', 'Réponse associée à cette question avec succès');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Answerassocy  $answerassocy
     * @return \Illuminate\Http\Response
     */
    public function show(Answerassocy $answerassocy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Answerassocy  $answerassocy
     * @return \Illuminate\Http\Response
     */
    public function edit(Answerassocy $answerassocy)
    {
        $answer = $this->answerRepo->find($answerassocy->answer->id);
        $question = $this->questionRepo->find($answerassocy->question->id);
        $answerassocy = $this->answerassocyRepo->find($answerassocy->id);
        
        $answers = $this->answerRepo->all();
        $questions = $this->questionRepo->all();

        return view('answerassocies.edit',compact('answer','answers','question','questions','answerassocy'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Answerassocy  $answerassocy
     * @return \Illuminate\Http\Response
     */
    public function update(AnswerassocyUpdateRequest $request, Answerassocy $answerassocy)
    {
        $this->answerassocyRepo->makeUpdate($answerassocy->id,$request->validated());
        return redirect()->route('answerassocies.index')->with('success', 'Réponse associée à cette question mise à jour avec succès');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Answerassocy  $answerassocy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answerassocy $answerassocy)
    {
        $answerassocy->delete();
        return redirect()->route('answerassocies.index')->with('success','Réponse associée à cette question supprimée avec succès');
    
    }
}
