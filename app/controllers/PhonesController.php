<?php

class PhonesController extends BaseController
{

	public function __construct()
    {
        $this->beforeFilter('auth');  //bloqueo de acceso
    }

    //lsta de asistentes, como parametro envío el tipo de asistente $tipo
    public function getIndex()
    {
    	$facturas= FacturaCompra::orderBy('created_at', 'desc')
        ->paginate(15);

        $cant_add=$facturas->count();

        if (Request::ajax()) {
            return Response::json(View::make('includes.tablas.tabla-facturas-compra')->with(
                array(
                    'facturas' => $facturas,
                    'cant_add' => $cant_add
            ))->render());
        }

        return View::make('gastos.facturas')->with(
            array(
                'facturas' => $facturas,
                'cant_add' => $cant_add
        ));
    }

    //lsta de asistentes, como parametro envío el tipo de asistente $tipo
    public function getNew()
    {
        $medidas = Medida::all();
        $categorias= CategoriaProducto::orderBy("nombre", "asc")->get();
        $impuestos= Impuesto::all();
        return View::make('egresos.nueva-factura')->with(
            array(
                'categorias' => $categorias,
                'medidas' => $medidas,
                'impuestos' => $impuestos,
        ));;
    }
}