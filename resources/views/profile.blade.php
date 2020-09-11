
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
    <title>Meu Perfil</title>
    <link rel="stylesheet"  href="{{ asset('/css/profile.css')}}">
</head>

<body>
    <header>
        <a class="logo" href="{{ route('home') }}">EvEnter</a>
        <div class="botoes">
            <div class="dropdown" style="background-color:  rgb(0, 0, 0);">
                <a class="btn btn-secondary dropdown-toggle" href="#"
                    style="background-color: rgb(0, 0, 0); border: none; color: #ff9a04" role="button"
                    id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Minha Conta
                </a>



                @if (Route::has('admin.login'))
                <div class="top-right links">
                    @auth
                    </nav>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('profile') }}">Perfil</a>
                        <a class="dropdown-item" href="{{ route('registerevents') }}">Cadastrar Eventos</a>
                        <a class="dropdown-item" href="{{ route('myevents') }}">Meus Eventos</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('admin.logout')}}">Sair</a>
                      </div>
                    @else
                    <a class="cta" href="{{ route('admin.login') }}"><button>Entrar</button></a>

                        @if (Route::has('admin.register'))
                        <a class="cta" href="{{ route('admin.register') }}"><button>Cadastrar-se</button></a>
                        @endif
                    @endauth
                </div>
            @endif
                </div>
            </div>
        </div>

    </header>

   
    <!--Em alta: inicio
    <div class="trending">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="#" class="nome"></a>
                </div>
                <div class="col"></div>
                <div class="col"><a href="#" class="categ">
                        <h4 class="text"> </h4>
                    </a></div>
                <div class="col"><a href="#">
                        <h1 class="next">></h1>
                    </a>
                </div>
                
            </div>
        </div>
       Em alta: Fim-->
    <div class="align">
        <h2 style="color: orange">Meu Perfil</h2>
    </div>
 
    
    <hr>
   
    <div class="box">
            <form>
                <div class="form-group">
                    <a href="#" class="back">
                        </a> <h3 class="desc"></h3>
                            <label style="margin-top: 2%;color: lightgray" for="exampleFormControlInput1">Nome</label>
                            <p>{{auth()->user()->name}}</p>
                          
                <hr>
                <form >
                        <div class="form-group">
                                <a href="#" class="back">
                                    </a> <h3 class="desc"></h3>
                                        <label style="margin-top: 2%;color: lightgray" for="exampleFormControlInput1">Email</label>
                                        <p>{{auth()->user()->email}}</p>
                            </div> 
                <hr>  
                <form >
                        <div class="form-group">
                                <a href="#" class="back">
                                    </a> <h3 class="desc"></h3>
                                        <label style="margin-top: 2%;color: lightgray" for="exampleFormControlInput1">Senha</label>
                                        <p>********</p>
                         </div>
                                <hr>  
                                
                <form >
                        <div class="form-group">
                                <a href="#" class="back">
                                    </a> <h3 class="desc"></h3>
                                        <label style="margin-top: 2%;color: lightgray" for="exampleFormControlInput1">Celular</label>
                                        <p>{{auth()->user()->telephone}}</p>
                         </div> 
                        <hr>   
                         
        </div>
        <a class="cta" style="background-color: transparent" href="#" ><button>Editar Perfil</button></a>

        <br>
        <hr>
        <div class="rodape">
            <div>
                <h5 class="msg"><b>Fale Conosco!</b></h5>
                <p>EvEnter@email.com</p>
                <p>@Eve</p>
                <p>facebook.com/EvEnter</p>
            </div>

            <div>
                <h5 class="msg"><b>Dúvidas</b></h5>
                <p><a href="#">Central de Atendimento</a></p>
                <p><a href="#">Como Usar</a></p>
                <p><a href="#">Termos e Condições</a></p>
            </div>
        </div>
        
</body>

</html>
