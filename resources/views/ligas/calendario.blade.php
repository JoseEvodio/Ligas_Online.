@extends('layouts.app')

@section('content')

<div class="container">

<php?
$players = array();
$matchs = array();

foreach($players as $k){
	foreach($players as $j){
		if($k = $j){
			continue;
		}
		$z = array($k,$j);
		sort($z);
		if(!in_array($z,$matchs)){
			$matchs[] = $z;
		}
	}
}

print_r($matchs);
></php>
</div>
@endsection