
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <title>Cadastrar evento</title>
    <link rel="stylesheet" href="<?php echo e(asset('/css/cadastrar_evento.css')); ?>">
</head>

<body style="background-image: url(<?php echo e(asset('/img/img.jpg')); ?>); background-size: cover; background-repeat: no-repeat">
<header>
<nav class="navbar">
        <a style="color: white; font-weight: 500 background-color: rgb(0, 0, 0);
    font-size: 16px;" class="logo" href="<?php echo e(route('home')); ?>" >EvEnter</a>
        </>
        </nav>
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

    <h3 class="desc">Cadastrar Evento</h3>
    

    <div class="box">
        <form method="POST" action="<?php echo e(route('registerevent')); ?>"> 
        <?php echo csrf_field(); ?>
            <div class="form-group">
                
                <label for="exampleFormControlInput1">Nome</label>
                <input type="text" class="form-control" id="name"
                name='name' placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descrição</label>
                <textarea class="form-control" name='description' type="text" id="description" rows="3"
                    placeholder=""></textarea>
            <hr>
            <form>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault01">Cidade</label>
                        <input type="text" name='city' class="form-control" id="city"
                        value="" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault02">Estado</label>
                        <input type="text" name='state' class="form-control" id="state" 
                            value="" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationDefault03">Endereço</label>
                        <input type="text" name='adress' class="form-control" id="adress"
                            placeholder="" required>
                </div>
                <hr>
                <br>
                <div class="buttons">
                <input type ='submit' class=" btn btn-success text-center" value = "Cadastrar">
                    <div class="buttons">
                </div>
                </div>
                <br>

            </form>
        </form>
    </div>
    <hr>
</body>

</html><?php /**PATH C:\Users\Erick\projeto2\resources\views/registerevents.blade.php ENDPATH**/ ?>