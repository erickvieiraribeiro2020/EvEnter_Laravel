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
    <title>Meus Eventos</title>
    <link rel="stylesheet" href="<?php echo e(asset('/css/MeusEventos.css')); ?>">
</head>

<body>
<header>
        <a class="logo" href="<?php echo e(route('home')); ?>">EvEnter</a>
        <div class="botoes">
            <div class="dropdown" style="background-color:  rgb(0, 0, 0);">
                <a class="btn btn-secondary dropdown-toggle" href="#"
                    style="background-color: rgb(0, 0, 0); border: none; color: #ff9a04" role="button"
                    id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Minha Conta
                </a>



                <?php if(Route::has('admin.login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                    </nav>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo e(route('profile')); ?>">Perfil</a>
                        <a class="dropdown-item" href="<?php echo e(route('registerevents')); ?>">Cadastrar Eventos</a>
                        <a class="dropdown-item" href="<?php echo e(route('myevents')); ?>">Meus Eventos</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo e(route('admin.logout')); ?>">Sair</a>
                      </div>
                    <?php else: ?>
                    <a class="cta" href="<?php echo e(route('admin.login')); ?>"><button>Entrar</button></a>

                        <?php if(Route::has('admin.register')): ?>
                        <a class="cta" href="<?php echo e(route('admin.register')); ?>"><button>Cadastrar-se</button></a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
                </div>
            </div>
        </div>

    </header>

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
    <div>
        <h3>Meus Eventos</h3>
    </div>
    <hr>
        <div class="trending" style="margin-top: 3%;">
            <table class="table">
                <tbody>
                    <tr>
                        <td class="name"><a href="<?php echo e(route('eventinformation')); ?>">Festa das cores</a></td>
                        <td class="desc"><a href="#">Festa</a></td>
                        <td class="end"><a class="next" href="#">></a></td>
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
        </div>
</body>

</html><?php /**PATH C:\Users\Erick\projeto2\resources\views/meuseventos.blade.php ENDPATH**/ ?>