<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\feedback;
use Illuminate\Http\Request;

class feedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $feedback = feedback::where('kolomnama', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('kolomkomentar', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $feedback = feedback::latest()->paginate($perPage);
        }

        return view('admin.feedback.index', [
            'title' => 'feedback'
        ], compact('feedback'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.feedback.create',[
            'title' => 'feedback'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        $validated = $request->validate([
            'kolomnama' => 'required|max:50',
        ]);
        feedback::create($requestData);

        return redirect('admin/feedback')->with('flash_message', 'feedback added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $feedback = feedback::findOrFail($id);

        return view('admin.feedback.show',[
            'title' => 'feedback'
        ], compact('feedback'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $feedback = feedback::findOrFail($id);

        return view('admin.feedback.edit',[
            'title' => 'feedback'
        ], compact('feedback'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        $validated = $request->validate([
            'kolomnama' => 'required|max:50',
        ]);
        $feedback = feedback::findOrFail($id);
        $feedback->update($requestData);

        return redirect('admin/feedback')->with('flash_message', 'feedback updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        feedback::destroy($id);

        return redirect('admin/feedback')->with('flash_message', 'feedback deleted!');
    }
}
