<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use Illuminate\Http\Request;
use App\Models\Person;
use Illuminate\Validation\Validator;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(Person::all());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonRequest $request)
    {
        $person = new Person;
        $person->name = $request->get('name');
        $person->age = $request->get('age');
        $person->save();

        return response('created');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PersonRequest $request, Person $person)
    {
        $person->update([
           'name' => $request->get('name'),
           'age' => $request->get('age')
        ]);

        return response('updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {

        dd($person);
        $person->delete();

        return response(' deleted');
    }
}
