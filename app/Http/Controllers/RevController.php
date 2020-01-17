<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\EstadoReserva;
use Illuminate\Http\Request;
use App\Reserva;

class RevController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reservas = Reserva::all();
      $estados = EstadoReserva::all();
      return view('reservas.verReservas', compact('reservas', 'estados'));
       // return view('reservas.verReservas');
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
      $this->validate($request,[
        'nombre' => 'required',           
        'correo' => 'required',
      ]);

      $ReservasNormales = DB::table('reservas')
      ->select('reservas.codigo_reserva')
      ->get();
      $ReservasNormal = DB::table('reservas')
      ->select('reservas.codigo_reserva')
      ->get();

      $codigoReserva = 500000;
      $diferente = False;

        while($diferente == False){
          if ($codigoReserva == 500000) {
            $diferente = True;
          }
          foreach ($ReservasNormales as $reserva) {
            while ($reserva->codigo_reserva == $codigoReserva) {
              $codigoC = 1;
              $codigo1 = mt_rand(0,9);
              $codigo2 = mt_rand(0,9);
              $codigo3 = mt_rand(0,9);
              $codigo4 = mt_rand(0,9);
              $codigo5 = mt_rand(0,9);
              $codigoReserva = $codigoC."".$codigo1."".$codigo2."".$codigo3."".$codigo4."".$codigo5;
              $diferente = True;
            }
          }
          foreach ($ReservasNormal as $reserva) {
            if($reserva->codigo_reserva == $codigoReserva) {
              $diferente = False;
            }
          }
        }

      $reserva = new Reserva;

      $reserva->nombre = $request->input('nombre');      
      $reserva->correo_comprador = $request->input('correo');
      $reserva->descripcion_comprador = $request->input('descripcion');
      $reserva->codigo_reserva = $codigoReserva;
      $reserva->estado_reserva_id = 1;

      $reserva->save();  

      return redirect('reservas')->with('success', 'La nueva Reserva se guardó exitosamente');

    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $reserva = Reserva::find($id);
      $estados = EstadoReserva::all();
      return view('reservas.verReserva', compact('reserva', 'estados'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $reserva = Reserva::find($id);


      $reserva->estado_reserva_id = $request->input('estados_id');

      $reserva->save();

      return redirect('reservas')->with('success', 'Estado de reserva actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
      $reserva = Reserva::find($id);

      $reserva->delete();

      return redirect('reservas')->with('success', 'Reserva Eliminada');
    }
}
