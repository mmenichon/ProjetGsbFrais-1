@extends('layouts.master')
@section('content')
    <table class="table table-bordered table-striped table-responsive">
        <thead>
            <tr>
                <th style="widht:60%">Période</th>
                <th style="widht:20%">Modifier</th>
                <th style="widht:20%">Supprimer</th>
            </tr>
        </thead>
        @foreach($mesFrais as $unFrais)
            <tr>
                <td>
                    {{$unFrais->anneemois}}
                </td>
                <td style="text-align: center;">
                    <a href="{{url('/modifierFrais')}}/{{$unFrais->id_frais}}"> <span class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="Modifier"></span></a>
                </td>

                <td style="text-align: center;">
                    <a href="{{url('/supprimerFrais')}}/{{$unFrais->id_frais}}"> <span class="glyphicon glyphicon-remove" data-toggle="tooltip" data-placement="top" title="Supprimer"></span></a>
                </td>
            </tr>
        @endforeach
    </table>
@stop
