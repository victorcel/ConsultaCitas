<?php

namespace Citas\Http\Controllers;

use Citas\cita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('home');
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \Citas\cita $cita
     * @return \Illuminate\Http\Response
     */
    public function show(cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Citas\cita $cita
     * @return \Illuminate\Http\Response
     */
    public function edit(cita $cita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Citas\cita $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cita $cita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Citas\cita $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy(cita $cita)
    {
        //         and paci.num_id='.'\''.$request->numeroid.'\''.'
        // and paci.tipo_id='.'\''.$request->tipo.'\'');
    }

    public function consulta(Request $request)
    {
        $query = DB::select('select top 100 paci.NombreCompleto,asunto.nombre, cita.fecha_usuario_desea_cita,
            cita.hora, cita.meridiano,cita.estado,cita.asunto
            
            from citas  cita
            inner join sis_deta deta on deta.estudio=cita.autoid
            INNER JOIN SIS_PACI paci on paci.autoid=cita.autoid
            inner join sis_asunto asunto on asunto.id=cita.asunto
            
            WHERE cita.estado=\'P\'
            and paci.num_id=' . '\'' . $request->numeroid . '\'' . '
            and paci.tipo_id=' . '\'' . $request->tipo . '\'');
        return View('consulta', compact('query'));
    }
}
