@extends('layouts.app')

@section('layoutcontent')
    <div id="container" class="clearfix">
        <div id="sidebar">
            <ul class="sidebar-nav">
                <li class="sidebar-logo">
                    <a href="/"><img src="/images/layout/logo-wide.png" alt="Logo"></a>
                </li>
                <li> <a href="#">Tableau de bord</a></li>
                <li><a href="#">Ordinateurs</a></li>
                <li><a href="#">Portables</a></li>
                <li><a href="#">Écrans</a></li>
                <li><a href="#">Cables</a></li>
                <li><a href="#">Pièces d'ordinateurs</a></li>
                <li><a href="#">Autres</a></li>
            </ul>
        </div>
        <div id="content">
            @include('admin-content')
        </div>
    </div>
@endsection