@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="todo__alert">
    @if(session('message'))
    <div class="todo__alert--success">
        {{session('message')}}
    </div>
    @endif
</div>

<div class="Todo__content">
    <from class="create-form" action="/todos" method="post">
        @csrf
    <div class="create-form__item">
        <input class="create-form__item-input" type="text" name="content">
    </div>
    <div class="create-form__button">
        <button class="create-form__button-submit" type="submit">作成</button>
    </div>
    </from>
    <div class="todo-table">
        <table class="todo-table__inner">
            <tr class="todo-table__row">
             <th class="todo-table__header">Todo</th>
            </tr>
            @foreach ($todos as $todo)
            <tr class="todo-table__row">
                <td class="todo-table__item">
                 <from class="update-form" adtion="/todos" method="post">
                    <div  class="update-form__item">
                        <p class="update-form__item-input">{{ $todo['content'] }}</p>
                    </div>
                    <div class="update-form__button">
                        <button class="update-form__button-submit" type="submit">更新</button>
                    </div>
                 </from>
                </td>
                <td class="todo-table__item">
                    <from class="delete-form" action="/todos" method="post">
                        <div class="delete-form__button">
                            <button class="delete-form__button-submit" type="submit">削除</button>
                        </div>
                    </from>
                </td>
            </tr>
           @endforeach 
        </table>
    </div>
</div>
@endsection