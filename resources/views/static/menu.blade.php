@extends('layouts.main')

@section('header-title')
Меню
@endsection

@section('content')
    <div style="text-align: center;">
        <h1>Меню</h1>
    </div>

    <div style="text-align: center;">
        @foreach ($category as $c)
            <a href="{{ route('menu', ['category_id' => $c->id]) }}" style="
                background-color: #2c3e50;
                color: white;
                font-size: 16px;
                padding: 12px 20px;
                border: none;
                border-radius: 8px;
                cursor: pointer;
                margin: 5px;
            ">
                {{ $c->name }}
            </a>
        @endforeach

        <div>
            <form action="{{ route('menu') }}" method="GET" style="margin: 20px 0; text-align: center;">
                <input 
                    type="text" 
                    name="search" 
                    placeholder="Поиск блюд..." 
                    value="{{ request('search') }}"
                    style="
                        padding: 10px 15px;
                        width: 250px;
                        border-radius: 8px;
                        border: 1px solid #ccc;">

                    <button type="submit" style="
                        padding: 10px 15px;
                        border: none;
                        background-color: #2c3e50;
                        color: white;
                        border-radius: 8px;
                        cursor: pointer;
                        margin-left: 5px;">
                        Найти
                    </button>

            </form>
        </div>
        <div style="
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin-top: 20px;
        ">
            @foreach ($dishes as $d)
                <div style="
                    width: calc(33.333% - 20px);
                    max-width: 300px;
                    border-radius: 12px;
                    overflow: hidden;
                    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
                ">
                    <img src="{{ $d->image_path }}" alt="Блюдо" style="width: 100%;">

                    <div style="padding: 15px;">
                        <h3>{{ $d->name }}</h3>
                        <p style="font-size: 14px; color: #555;">{{ $d->description }}</p>
                        <p style="font-size: 13px; color: #777;">
                            Вес: {{ $d->weight }} г • {{ $d->calories }} ккал
                        </p>
                        <p style="font-size: 13px; color: #777;">
                            Состав: {{ $d->ingredients }}
                        </p>

                        <div style="margin: 10px 0;">
                            <span style="
                                background-color: #27ae60;
                                color: white;
                                padding: 3px 8px;
                                border-radius: 6px;
                                font-size: 12px;
                            ">
                                @if ($d->is_vegetarian && $d->is_vegan)
                                    Вегетарианское | Веганское
                                @elseif ($d->is_vegan)
                                    Веганское
                                @elseif ($d->is_vegetarian)
                                    Вегетарианское
                                @else
                                    -
                                @endif
                            </span>
                        </div>

                        <div style="
                            display: flex;
                            justify-content: space-between;
                            align-items: center;
                        ">
                            <strong>{{ $d->price }}$</strong>

                            <button style="
                                background-color: #2c3e50;
                                color: white;
                                padding: 8px 14px;
                                border: none;
                                border-radius: 8px;
                                cursor: pointer;
                            ">
                                Заказать
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection