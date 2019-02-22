<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>ExercicioEstagio</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>

    <style>
        #allRights
        {            
            padding-top:40px;
            align: center;
            height: 100px;
            width: 700px;
            background-color: none;
            border-bottom:1px solid grey;
        }

        #footer
        {
            margin-top:30px;
            padding-top:40px;
            padding-left:33%;
            height:200px;
            background-color:black;
            position:bottom;
            bottom:0px;
            left:0px;
            right:0px;
            margin-bottom:0px;
        }

        body
        {
            margin-top:80px;               
            padding:0px;
            overflow-x:hidden;
            overflow-y:scroll;                      
        }      
               
        .row
        {
            max-width:1200px;
            margin-left:360px;
            padding:0px;            
        }

    </style>

    <body>
        @include("include.navBar")  
        
        <div clas="container">
            @if(Request::is('/'))
                @include('include.showCase')
            @endif

            <div class="row">
                
                    <div id="fade-in" class="col-md-8 col-lg-8">
                        @include('include.messages')
                        @yield('ConteudoDeCadaPagina')                
                    </div>
                    <div id="sidebar" class="col-md-4 col-lg-4">
                        @if(Request::is('/'))                                
                            @include('include.sidebar')           
                        @endif
                    </div>
            </div>   
                @if(Request::is('/'))       
                    <div id="fade-in" class="row" style="padding-top:100px; padding-bottom:20px; max-width:1200px; border-bottom: 1px solid lightgrey;">
                        <div class="col-md-4 col-lg-4">
                            <a href="/noticias"><img src="SQUARE-ENIX.jpg" alt="Square Enix" style="width:100%"></a>
                            <p class="lead"><strong>Square Enix will reveal big titles before the 2019 E3</strong></p>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <a href="/noticias"><img src="halo.jpg" alt="Halo" style="width:100%"></a>
                            <p class="lead"><strong>TV series of HALO to have one of the directors for "Black Mirror"</strong></p> 
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <a href="/noticias"><img src="witcher.jpg" alt="Witcher III" style="width:100%"></a>
                            <p class="lead"><strong>Witcher III is one of the most revered games of all times</strong></p>
                        </div>                    
                    </div>              
                @endif
            </div>
        </div>
        
        <footer id="footer" class="text-left">
            
                <div id="allRights">
                    <p><strong>Copyright 2019 &copy: GamingNews</strong></p>
                </div>
            
        </footer>

    </body>
</html>