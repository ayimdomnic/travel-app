<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Buses;
use App\Http\Requests\CreateBusesRequest;
use App\Http\Requests\UpdateBusesRequest;
use Illuminate\Http\Request;



class BusesController extends Controller {

	/**
	 * Display a listing of buses
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $buses = Buses::all();

		return view('admin.buses.index', compact('buses'));
	}

	/**
	 * Show the form for creating a new buses
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.buses.create');
	}

	/**
	 * Store a newly created buses in storage.
	 *
     * @param CreateBusesRequest|Request $request
	 */
	public function store(CreateBusesRequest $request)
	{
	    
		Buses::create($request->all());

		return redirect()->route('admin.buses.index');
	}

	/**
	 * Show the form for editing the specified buses.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$buses = Buses::find($id);
	    
	    
		return view('admin.buses.edit', compact('buses'));
	}

	/**
	 * Update the specified buses in storage.
     * @param UpdateBusesRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateBusesRequest $request)
	{
		$buses = Buses::findOrFail($id);

        

		$buses->update($request->all());

		return redirect()->route('admin.buses.index');
	}

	/**
	 * Remove the specified buses from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Buses::destroy($id);

		return redirect()->route('admin.buses.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            Buses::destroy($toDelete);
        } else {
            Buses::whereNotNull('id')->delete();
        }

        return redirect()->route('admin.buses.index');
    }

}
