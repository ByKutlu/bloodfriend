@extends('main_template')

@section('title')
    Hakkımızda
@endsection
@section('content')
    {{dd(session()->all())}}
    Dokuz Eylül Üniversitesi Bilgisayar Mühendisliği bölümü öğrecileri olan Emrah EMREM , Osman KUTLU ve Sercan OKTAY'ın geliştirmiş olduğu kan bulmayı hızlandıran bir sistemdir. Danışmanlığını Prof.Dr. Yalçın ÇEBİ yapmaktadır.
@endsection