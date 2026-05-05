@extends('layouts.main')

@section('header-title')
Delicious Food
@endsection

@section('content')

<div style="padding: 40px; text-align: center;">

    <h2>О нашем кафе</h2>

    <img src="{{ asset('images/photo_cafe.jpg') }}" 
         style="width: 100%; max-width: 500px; display: block; margin: 20px auto; border-radius: 10px;">

    
    <p style="max-width: 700px; margin: 20px auto; text-align: justify; line-height: 1.6;">
        Уютное кафе, где аромат свежего кофе встречается с теплом общения.
        Свежая выпечка и приятная атмосфера каждый день.
        Мы создавали это место, чтобы каждый гость мог почувствовать комфорт и спокойствие,
        независимо от того, пришёл он на быстрый кофе или долгую встречу с друзьями.
    </p>

    <img src="{{ asset('images/photo_cafe2.jpg') }}" 
         style="width: 100%; max-width: 500px; display: block; margin: 20px auto; border-radius: 10px;">

</div>

@endsection
