<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo e(asset('/css/info.css')); ?>">
  

  <title>Sobre o evento</title>
</head>

<body>
<header>
        <a class="logo" href="<?php echo e(route('home')); ?>">EvEnter</a>
                <?php if(Route::has('admin.login')): ?>
                <div class="top-right links">
                <div class="botoes">
                  <div class="dropdown" style="background-color:  rgb(0, 0, 0);">
                   <a class="btn btn-secondary dropdown-toggle" href="#"
                    style="background-color: rgb(0, 0, 0); border: none; color: #ff9a04" role="button"
                    id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Minha Conta
                      </a>
            
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

        <div class="col-auto my-1">
          <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Ciadade</label>
          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
            <option selected>Cidade</option>
            <option value="1">exemplo1</option>
            <option value="2">exemplo2</option>
            <option value="3">exemplo3</option>
          </select>
        </div>
        <div class="col-auto my-1">
          <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Data</label>
          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
            <option selected>Data</option>
            <option value="1">exemplo1</option>
            <option value="2">exemplo2</option>
            <option value="3">exemplo3</option>
          </select>
        </div>
      </ul>
    </div>
    <div class="dropdown">

      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </div>

  </nav>


  <section id="corpo">
    <h2 style="text-align: center">Campeonato de League of Legends</h2>
    <div id="content">
      <h6>Oragnizador</h6>
      <p>Ricardo</p>
      <h6>Descrição</h6>
      <article>
        Todos os jogadors devem levar seus computadores para que possam jogar. Contendo uma premiação de 500 reais para
        o vencedor
      </article>
      <br>
      <h6>Local</h6>
      <p>Parque dos eventos</p>
    </div>
    <a href="#" class="btn btn-outline-danger" role="button" aria-pressed="true" id="sair">Entrar Evento</a>
  </section>

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

</html><?php /**PATH C:\Users\Erick\projeto2\resources\views/eventinformation.blade.php ENDPATH**/ ?>