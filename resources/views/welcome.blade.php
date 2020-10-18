@extends('layout.app')

@section('content')

    <div class="ui stackable grid">
        <div class="row">
            <div class="column">
                <div class="ui segment">
                    <div class="ui two column very relaxed stackable grid">
                        <div class="column">
                            <fieldset class="ui segment" style="text-align: center;">
                                <legend><h3>Антикварные книги</h3></legend>
                                <br>
                                <a href="#" class="ui bottom attached label">Перейти в раздел</a>
                            </fieldset>
                        </div>
                        <div class="column">
                            <fieldset class="ui segment" style="text-align: center;">
                                <legend><h3>Букинистические книги</h3></legend>
                                <br>
                                <a href="#" class="ui bottom attached label">Перейти в раздел</a>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="ui twelve wide centered aligned column">
            </div>
        </div>
    </div>

@endsection
