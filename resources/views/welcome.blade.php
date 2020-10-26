@extends('layout.app')

@section('content')

    <div class="ui stackable grid">
        <div class="row">
            <div class="column">
                <fieldset class="ui piled segment">
                    <legend class="ui horizontal divider">
                        <h3>Книги</h3>
                    </legend>
                    <div class="ui stackable grid">
                        @include('components.welcome_page.books_section')
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <fieldset class="ui piled segment">
                    <legend class="ui horizontal divider">
                        <h3>Журналы</h3>
                    </legend>
                    <div class="ui stackable grid">
                        @include('components.welcome_page.journals_section')
                    </div>
                </fieldset>
            </div>
        </div>
    </div>

@endsection
