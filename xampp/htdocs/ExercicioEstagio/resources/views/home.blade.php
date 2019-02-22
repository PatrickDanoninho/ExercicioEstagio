@extends('layout.app')

@section('ConteudoDeCadaPagina')

<style>
    .hero-image 
    {       
        background-image: url("Fallout76.jpg");
        background-color: #cccccc;
        height: 420px;
        width: 768px;
        background-position: relative;
        background-repeat: no-repeat;
        background-size: cover;    
        position: relative;        
    }

    #fade-in
    {
        animation:fadeIn 2s;
    }

    @keyframes fadeIn
    {
        from
        {
            opacity:0;
        }
        to
        {
            opacity:1;
        }
    }
</style>



<div class="hero-image">
    
</div>

@endsection

@section('sidebar')
    @parent
    
@endsection


