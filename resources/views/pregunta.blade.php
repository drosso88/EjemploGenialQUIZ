@extends('layouts.ejemplolayout')

<div class="container">
    <div class="row">
        <div class="col-3">


        </div>
        <div class="col-6">

            <button class="btn btn-block btn-warning disabled"> {{$pregunta[0]->enunciado}}</button>
            </br>
            <button class="btn btn-block btn-info"> {{$pregunta[0]->r1}}</button>
            </br>
            <button class="btn btn-block btn-info"> {{$pregunta[0]-r2}}</button>
            </br>
            <button class="btn btn-block btn-info"> {{$pregunta[0]->r3}}</button>
            </br>
            <button class="btn btn-block btn-info"> {{$pregunta[0]->r4}}</button>

        </div>
        <div class="col-3">


        </div>
    </div>
</div>