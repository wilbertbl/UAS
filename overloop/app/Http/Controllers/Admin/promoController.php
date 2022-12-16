<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\promo;
use Illuminate\Http\Request;

class promoController extends Controller
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
            $promo = promo::where('nama', 'LIKE', "%$keyword%")
                ->orWhere('tanggal_mulai_berlaku', 'LIKE', "%$keyword%")
                ->orWhere('tanggal_kadaluarsa', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $promo = promo::latest()->paginate($perPage);
        }

        return view('admin.promo.index', ['title' => 'Promo'], compact('promo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.promo.create', ['title' => 'Promo']);
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
            'name' => 'required|max:40',
        ]);

        promo::create($requestData);

        return redirect('admin/promo')->with('flash_message', 'promo added!');
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
        $promo = promo::findOrFail($id);

        return view('admin.promo.show', ['title' => 'Promo'],compact('promo'));
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
        $promo = promo::findOrFail($id);

        return view('admin.promo.edit',['title' => 'Promo'], compact('promo'));
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
            'name' => 'required|max:40',
        ]);

        $promo = promo::findOrFail($id);
        $promo->update($requestData);

        return redirect('admin/promo')->with('flash_message', 'promo updated!');
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
        promo::destroy($id);

        return redirect('admin/promo')->with('flash_message', 'promo deleted!');
    }
}
