<div class="form-group">

<label for="Nombre_del_Equipo" class="control-label">{{'Nombre Del Equipo'}}</label>
<input type="text" class="form-control" name="Nombre_del_Equipo" id="Nombre_del_Equipo"

value="{{ isset($ligas->Nombre_del_Equipo)?$ligas->Nombre_del_Equipo:'' }}"
>
</div>

<div class="form-group">
<label class="control-label" for="Liga_Origen">{{'Liga de Origen'}}</label>
<input type="text" class="form-control" name="Liga_Origen" id="Liga_Origen"
value="{{ isset($ligas->Liga_Origen)?$ligas->Liga_Origen:'' }}">
</div>

<div class="form-group">
<label class="control-label" for="Partido_Jugados">{{'Partidos Jugados'}}</label>
<input type="text" class="form-control" name="Partidos_Jugados" id="Partidos_Jugados"
value="{{ isset($ligas->Partidos_Jugados)?$ligas->Partidos_Jugados:'' }}">
</div>

<div class="form-group">
<label class="control-label" for="Nombre_del_Equipo">{{'Victorias'}}</label>
<input type="text" class="form-control" name="Victorias" id="Victorias"
value="{{ isset($ligas->Victorias)?$ligas->Victorias:'' }}">
</div>
<div class="form-group">
<label for="Victorias" class="control-label" >{{'Empates'}}</label>
<input type="text" class="form-control" name="Empates" id="Empates"
value="{{ isset($ligas->Empates)?$ligas->Empates:'' }}">
</div>
<div class="form-group">
<label for="Derrotas"  class="control-label" >{{'Derrotas'}}</label>
<input type="text" class="form-control" name="Derrotas" id="Derrotas"
value="{{ isset($ligas->Derrotas)?$ligas->Derrotas:'' }}">
</div>
<div class="form-group">
<label for="Puntaje" class="control-label" >{{'Puntaje'}}</label>
<input type="text"class="form-control" name="Puntaje" id="Puntaje"
value="{{ isset($ligas->Puntaje)?$ligas->Puntaje:'' }}">
</div>
<div class="form-group">
<label for="Jugadores_Amonestados" class="control-label" >{{'Jugadores Amonestados'}}</label>
<input type="text"class="form-control" name="Jugadores_Amonestados" id="Jugadores_Amonestados"
 value="{{ isset($ligas->Jugadores_Amonestados)?$ligas->Jugadores_Amonestados:'' }}">
 </div>
 <div class="form-group">
<label for="Jugadores_Expulsados" class="control-label" >{{'Jugadores Expulsados'}}</label>
<input type="text"class="form-control" name="Jugadores_Expulsados" id="Jugadores_Expulsados"
 value="{{ isset($ligas->Jugadores_Expulsados)?$ligas->Jugadores_Expulsados:'' }}">
 </div>

<input type="submit" class="btn btn-secondary" value="{{ $Modo=='crear' ? 'Agregar ': 'Modificar '}}">

<a class="btn btn-primary" href="{{ url ('ligas') }}">Regresar</a>