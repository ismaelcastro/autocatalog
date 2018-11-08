<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Routing\Controller as BaseController;
use Kris\LaravelFormBuilder\FormBuilder;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use App\Forms\CarForm;
use App\Car;


class CarController extends BaseController
{
    use FormBuilderTrait;
    public function index(){
    	$cars = Car::all();

    	return view('admin.index', compact('cars'));

    }

    public function create(FormBuilder $formBuilder){

        $form = $formBuilder->create(CarForm::class, 
        [
            'method' => 'POST',
            
        ]);
       
        return view('admin.create', compact('form'));    
    }

    public function store(Request $request){
        $input = Request::all();
        Car::create($input);

        return redirect('index');
    }

    public function show(){

    }

    public function edit($id, FormBuilder $formBuilder){
        $car = Car::findOrFail($id);       

        $form = $formBuilder->create(CarForm::class,
        [
            'model' => $car,
            'method' =>'PUT',
            'url'   => '/car/update/'.$id
        ]);

        return view('admin.edit', compact('form'));

    }

    public function update(Request $request, $id){
        $dataForm = $request::all();
        $car = Car::find($id);

        if(!$car){
            $msg = "Não foi possível atualizar, Registro não encontrado!";
            return back()->with('msg', $msg);
        }
        $car->fill($dataForm);
        $car->save();
        

    }

    public function destroy(){

    }
        
}
