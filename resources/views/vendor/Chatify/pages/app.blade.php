@include('Chatify::layouts.headLinks')

<div class="messenger">
    {{-- ----------------------Users/Groups lists side---------------------- --}}
    <div class="messenger-listView">
        {{-- Header and search bar --}}
        <div class="m-header">
            <nav>
                <a href="#"><i class="fas fa-inbox"></i> <span class="messenger-headTitle">Mensajes</span> </a>
                {{-- header buttons --}}
                <nav class="m-header-right">
                    <a href="{{ url('home')}}"><i class="fas fa-home"></i></a>
                    <a href="#"><i class="fas fa-cog settings-btn"></i></a>
                    <a href="#" class="listView-x"><i class="fas fa-times"></i></a> 
                    
                </nav>
            </nav>
            {{-- Search input --}}
            <input type="text" class="messenger-search" placeholder="Buscar..." />
            {{-- Tabs --}}
            <div class="messenger-listView-tabs">
                <a href="#" @if($route == 'user') class="active-tab" @endif data-view="usuario">
                    <span class="far fa-user"></span>Personas</a>
                {{-- <a href="#" @if($route == 'group') class="active-tab" @endif data-view="groups">
                    <span class="fas fa-users"></span>Grupos</a> --}}
            </div>
        </div>
        {{-- tabs and lists --}}
        <div class="m-body">
           {{-- Lists [Users/Group] --}}
           {{-- ---------------- [ User Tab ] ---------------- --}}
           <div class="@if($route == 'user') show @endif messenger-tab app-scroll" data-view="usuario">

               {{-- Favorites --}}
               <p class="messenger-title">Favoritos</p>
                <div class="messenger-favorites app-scroll-thin"></div>

               {{-- Saved Messages --}}
               {!! view('Chatify::layouts.listItem', ['get' => 'saved','id' => $id])->render() !!}

               {{-- Contact --}}
               <div class="listOfContacts" style="width: 100%;height: calc(100% - 200px);"></div>
               
           </div>

           {{-- ---------------- [ Group Tab ] ---------------- --}}
           {{-- <div class="@if($route == 'group') show @endif messenger-tab app-scroll" data-view="groups">
                
                <p style="text-align: center;color:grey;">Pronto estara disponible</p>
             </div> --}}

             {{-- ---------------- [ Search Tab ] ---------------- --}}
           <div class="messenger-tab app-scroll" data-view="search">
                {{-- items --}}
                <p class="messenger-title">Buscar</p>
                <div class="search-records">
                    <p class="message-hint"><span>Escribe para buscar..</span></p>
                </div>
             </div>
        </div>
    </div>
    <?php  
    $usuario = DB::table('usuario')->get();
    ?>

    {{-- ----------------------Messaging side---------------------- --}}
    <div class="messenger-messagingView">
        {{-- header title [conversation name] amd buttons --}}
        <div class="m-header m-header-messaging">
            <nav>
                {{-- header back button, avatar and user name --}}
                <div style="display: inline-flex;">
                    <a href="#" class="show-listView"><i class="fas fa-arrow-left"></i></a>
                    <div class=" av-s header-avatar" style="margin: 0px 10px; margin-top: -5px; margin-bottom: -5px;">           
                    </div>
                
                    <a href="#" class="user-name"> Montechelo chat</a>
                    <a class="s" style="text-decoration: none;margin-left: 4px;
                    color: #fff;" >  </a>
                </div>
                {{-- header buttons --}}
                <nav class="m-header-right">
                    <a href="#" class="add-to-favorite"><i class="fas fa-star"></i></a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                  <i class="fa fa-reply" aria-hidden="true"></i>
                  
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                    <a href="{{ url('home')}}"><i class="fas fa-home"></i></a>
                    <a href="#" class="show-infoSide"><i class="fas fa-info-circle"></i></a>
                </nav>
            </nav>
        </div>
        {{-- Internet connection --}}
        <div class="internet-connection">
            <span class="ic-connected">Conectado</span>
            <span class="ic-connecting">Conectando...</span>
            <span class="ic-noInternet">Sin accesso a internet </span>
        </div>
        {{-- Messaging area --}}
        <div class="m-body app-scroll">
            <div class="messages">
               
                <p class="message-hint" style="margin-top: calc(30% - 126.2px);"><span>Seleccione un chat para comenzar a enviar mensajes   </span></p>
            </div>
            {{-- Typing indicator --}}
            <div class="typing-indicator">
                <div class="message-card typing">
                    <p>
                        <span class="typing-dots">
                            <span class="dot dot-1"></span>
                            <span class="dot dot-2"></span>
                            <span class="dot dot-3"></span>
                        </span>
                        
                    </p>
                </div>
            </div>
            {{-- Send Message Form --}}
            @include('Chatify::layouts.sendForm')
        </div>
    </div>
    {{-- ---------------------- Info side ---------------------- --}}
    <div class="messenger-infoView app-scroll">
        {{-- nav actions --}}
        <nav>
            <a href="#"><i class="fas fa-times"></i></a>
        </nav>
        {!! view('Chatify::layouts.info')->render() !!}
    </div>
</div>

@include('Chatify::layouts.modals')
@include('Chatify::layouts.footerLinks')
@include('admin.modales.modalCampos')