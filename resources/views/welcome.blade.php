@extends('layout.app')

@section('content')

    <div class="ui stackable grid">
        <div class="row">
            <div class="column">
                <div class="ui horizontal divider">
                    Книги
                </div>
            </div>
        </div>
        @include('components.welcome_page.books_section')
        <div class="row">
            <div class="column">
                <div class="ui horizontal divider">
                    Журналы
                </div>
            </div>
        </div>
        @include('components.welcome_page.journals_section')

    </div>

@endsection
