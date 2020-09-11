<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Login</title>
</head>


<body style="background-image: url(<?php echo e(asset('/img/img.jpg')); ?>); background-size: cover; color: white; background-repeat: no-repeat">

    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <h5 class="text-white h4">Collapsed content</h5>
                <span class="text-muted">Toggleable via the navbar brand.</span>
            </div>
        </div>
        <nav style="background-color: #000000!important" class="navbar navbar-dark bg-dark">
        <a style="color: white;
    font-weight: 500; font-size: 16px;" class="logo" href="<?php echo e(route('home')); ?>" >EvEnter</a>
        </>
        </nav>
    </div>
    <div style="margin-top: 90px; text-align: center">
        <h1 style="margin-bottom: .5rem; color: #ffffff; font-weight: 500; line-height: 1.2;">Login</h1>
    </div>

    <div class="card" style="width: 40rem; background-color: #000000c7; border: 30px #00000000 solid; margin: auto; padding: 1px;  border-radius: 5%; margin-bottom: 60px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
       
        <div class="card-body">
            <form method="post" action="<?php echo e(route('admin.login.do')); ?>">
            <?php echo csrf_field(); ?>
                <div class="form-group row">
                    <div class="col">
                     <label for="email">Usuário</label>
                      <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required="email" autofocus>

                       <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                              <span class="invalid-feedback" role="alert">
                               <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <label for="password">Senha</label>
                        <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required="current-password">

                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                             <span class="invalid-feedback" role="alert">
                               <strong><?php echo e($message); ?></strong>
                                 </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="form-group row;">
                    <div class="col-sm-10; margin: auto">
                        <button type="submit" class="btn btn-outline-success btn-lg btn-block">Entrar
                        </button>
                    </div>
                </div>
                <p style="text-align: center">----------------- Novo por aqui? -----------------</p>
                <div class="form-group row;">
                    <div class="col-sm-10; margin: auto" >
                
                        <a href="<?php echo e(route('admin.register')); ?>" class="btn btn-outline-success btn-lg btn-block" >Registre-se
                        </a>
                    
                    </div>
                </div>
            </form>
        </div>
    </div>



    <!-- Optional Java -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </>
        <src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
            </>
            <src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous">
                </>
</body>

</html><?php /**PATH C:\Users\Erick\projeto2\resources\views/admin/formlogin.blade.php ENDPATH**/ ?>