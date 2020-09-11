<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <title>Pagina Inicial</title>
    <link rel="stylesheet" href="{{ asset('/css/styles.css')}}">
<header>
<a class="logo" href="{{ route('home') }}">EvEnter</a>
        <div class="botoes">
            


                @if (Route::has('admin.login'))
                   @auth
                   <div class="botoes">
                   <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#"
                    style="background-color: black; border: none; color: #ff9a04" role="button"
                    id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Minha Conta
                </a>
  

                    </nav>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('profile') }}">Perfil</a>
                        <a class="dropdown-item" href="{{route('registerevents')}}">Cadastrar Eventos</a>
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


    <div class="categoria">
        <div class="row" id="cats">
            <div class="col" id="col2"><a class="opc" href="#">Esporte</a></div>
            <div class="col" id="col2"><a class="opc" href="#">Arte e Cultura</a></div>
            <div class="col" id="col2"><a class="opc" href="#">Geek</a></div>
            <div class="col" id="col2"><a class="opc" href="#">Comida e Bebida</a></div>
            <div class="col" id="col2"><a class="opc" href="#">Moda</a></div>
            <div class="col" id="col2"><a class="opc" href="#">Festa</a></div>

        </div>
    </div>
    <hr style="margin-top: 0%;">
    <br>
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
    <div class="trending">
        <table class="table">
            <tbody>
                <tr>
                    <td class="name"><a href="{{ route('event')}}">Festa das cores</a></td>
                    <td class="desc"><a href="{{ route('event')}}">Festa</a></td>
                    <td class="end"><a class="next" href="{{ route('event')}}">></a></td>
                </tr>
            </tbody>
        </table>
    </div>

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
    </footer>
    </div>
</body>