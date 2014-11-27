<?php

class cotizarControler extends \BaseController {



	public function __construct()
	{
		$this->beforeFilter('auth');
	}	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		
		$paises = Country::all();
		

		
		
		
		return View::make('private/cotizar', array('select' => $paises));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function postGuardar()
	{
			$file = Input::file("photo");

		    $dataUpload = array(
		       
		       "photo"        =>    $file//campo foto para validar
		     );

		     $file->move("imagenes",$file->getClientOriginalName());

		      return Redirect::to('cotizar');
	}

	public function postMakepdf()
	{
			$vigencia_comprar_desde = Input::get('from2');
			$vigencia_comprar_hasta = Input::get('to2');
			$dias = Input::get('dias');
			$noches = Input::get('noches');
			$trans = Input::get('trans');
			$empresa = Input::get('empresa');
			$escalas = Input::get('escalas');
			$directo = Input::get('directo');
			$primera = Input::get('primera');
			$economica = Input::get('economica');
			$obsaer = Input::get('obs-aer');
			$dni = Input::get('dni');
			$pasaporte = Input::get('pasaporte');
			$visa = Input::get('visa');
			$vacunas = Input::get('vacunas');
			$obsdoc = Input::get('obsdoc');



			$titulo = Input::get('titulo');
			$precio = Input::get('precio');


			$html = '<html><body>';
		    $html.= '<img class="" src="../public/assets/img/travel-logo-pdf.png">';
		    $html.= '<p>'.$titulo.'</p>';
		    $html.= '<p>'.$dias.' d&iacute;as /'.$noches.' noches </p>';
		    $html.= '<P>AEREOS</P>';
		    $html.= '<div style="border-top: 1px solid #000000;">';
		    $html.= '<p> * '.$empresa.'';
		    if($directo==1){$html.= ' / vuelo directo';}
		    if($escalas==1){$html.= ' / vuelo con escalas';}
		    if($primera==1){$html.= ' / primera clase';}
		    if($economica==1){$html.= ' / clase econ&oacute;mica';}
		    $html.= '<p> * '.$obsaer.'</p>';
		    $html.= '</p>';

		    $html.= '<P>DOCUMENTACION</P>';
		    $html.= '<div style="border-top: 1px solid #000000;">';
		    $html.= '<p> * ';
		    if($dni==1){$html.= ' / dni';}
		    if($pasaporte==1){$html.= ' / pasaporte';}
		    if($visa==1){$html.= ' / visa';}
		    if($vacunas==1){$html.= ' / vacunas';}
		    $html.= '<p> * '.$obsdoc.'</p>';
		    $html.= '</p>';

		    if($trans==1){
		    $html.= '<p> + translados aeropuerto/hotel/aeropuerto</p>';
		    }
		    $html.= '</div>'; 
		    $html.= '<p> Vigencia: del '.$vigencia_comprar_desde.' hasta '.$vigencia_comprar_hasta.'</p>';
		    $html.= '<p>Precio AR$ '.$precio.' final</p>';
		    $html.= '<div style="margin-top:500px;">';
		    $html.= '<p> * Sujeto a disponibilidad y cambio de tarifa sin precio aviso.</p>';
		    $html.= '<p> * El precio incluye percepci&oacute;n seg&uacute;n resoluci&oacute;n 3550 de AFIP.</p>';
		    $html.= '<p> Consultar pagos con tarjetas y cuotas sin inter&eacute;s</p>';
		    $html.= '</div>';
		    $html.= '</body></html>';
		    return PDF::load($html, 'A4', 'portrait')->show();
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
