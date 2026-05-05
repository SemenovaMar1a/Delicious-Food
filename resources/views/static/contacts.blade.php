@extends('layouts.main')

@section('header-title')
Контакты
@endsection

@section('content')
<div style="padding: 40px; text-align: center;">

  <h2>Контакты</h2>
  <p style="max-width: 600px; margin: 10px auto; color: #555;">
    Если у вас есть вопросы, предложения или вы хотите забронировать столик — свяжитесь с нами любым удобным способом.
  </p>

  <div style="margin-top: 30px; line-height: 1.8; font-size: 18px;">
    <p>📍 Адрес: Амстердам, центр города</p>
    <p>📞 Телефон: +31 123 456 789</p>
    <p>✉️ Email: cafe@example.com</p>
    <p>🕒 Время работы: 08:00 – 22:00</p>
  </div>

</div>
@endsection