@extends('layout.main')

@section('content')
<div>
    <hr>
    <div>
        <a href="{{ route('worker.create') }}">Добавить работника</a>
    </div>
    <hr>
    <div>
        <form action="{{ route('worker.index') }}" method="GET">
            <input type="text" name="name" placeholder="name" value="{{ request()->get('name') }}">
            <input type="text" name="surname" placeholder="surname" value="{{ request()->get('surname') }}">
            <input type="text" name="email" placeholder="email" value="{{ request()->get('email') }}">
            <input type="number" name="from" placeholder="from" value="{{ request()->get('from') }}">
            <input type="number" name="to" placeholder="to" value="{{ request()->get('to') }}">
            <input type="text" name="description" placeholder="description" value="{{ request()->get('description') }}">
            <input type="checkbox" name="is_married" id="isMarried" {{ request()->get('is_married') ? 'checked' : '' }}>
            <label for="isMarried">is_married</label>
            <input type="submit" value="Отправить">
            <a href="{{ route('worker.index') }}">Сбросить</a>
        </form>
    </div>
    <hr>
    @foreach($workers as $worker)
        <div>
            <div>Name:{{ $worker->name }}</div>
            <div>Surname:{{ $worker->surname }}</div>
            <div>Email:{{ $worker->email }}</div>
            <div>Age:{{ $worker->age }}</div>
            <div>Desc:{{ $worker->description }}</div>
            <div>Is married:{{ $worker->is_married }}</div>
            <div>
                <a href="{{ route('worker.show', $worker->id) }}">Посмотреть</a>
                <br>
                <a href="{{ route('worker.edit', $worker->id) }}">Редактировать</a>
            </div>
            <div>
                <form action="{{ route('worker.delete', $worker->id) }}" method="POST">
                    @csrf
                    @method('Delete')
                    <input type="submit" value="Удалить">
                </form>
            </div>
        </div>
        <hr>
    @endforeach
    <div>
        {{ $workers->withQueryString()->links() }}
    </div>
</div>

@endsection
