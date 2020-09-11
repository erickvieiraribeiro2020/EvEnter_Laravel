<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Cadastro</title>
  </head>
  <body style="background-image: url({{ asset('/img/img.jpg')}}); background-size: cover; background-repeat: no-repeat font-size: 1rem;
    font-weight: 400; line-height: 1.5; color: #ffffff; text-align: left;">

    <div class="pos-f-t">
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <h5 class="text-white h4">Collapsed content</h5>
          <span class="text-muted">Toggleable via the navbar brand.</span>
        </div>
      </div>
      <nav style="background-color: #000000!important" class="navbar navbar-dark bg-dark">
        <a style="color: white; font-weight: 500; font-size: 16px;" class="logo" href="{{ route('home') }}" >EvEnter</a>
        </>
        </nav>
    </div>
    
     <div style="margin-top: 90px; text-align: center" >
        <h1 style="margin-bottom: .5rem; color: #ffffff; font-weight: 500; line-height: 1.2;">Cadastre-se</h1></div>   
    
     <div class="card" style="width: 40rem; background-color: #000000c7; border: 30px #00000000 solid; margin: auto; padding: 1px;  border-radius: 5%; margin-bottom: 60px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
                <div class="card-body">
                <form  method="POST" action="{{ route('admin.register') }}">
                        @csrf

                                <div class="form-group row">
                                    <div class="col">
                                            <label for="name">Nome</label>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="" required="name" autofocus>
                                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Nome Inválido</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                  <div class="col">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required="email">

                                      @error('email')
                                       <span class="invalid-feedback" role="alert">
                                        <strong>O email já está sendo últilizado</strong>
                                            </span>
                                        @enderror
                                  </div>
                                </div>
                                    
                                
                                <div class="form-group row">
                                        <div class="col">
                                            <label for="inputpassword">Senha</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required="new-password">
                                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Senha inválida</strong>
                                    </span>
                                @enderror
                                        </div>
                                        
                                        <div class="col">
                                            <label for="passwordComfirm">Confirme a senha</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="new-password">
                                        </div>
                                </div>
                                    
                                <div class="form-group row;">
                                  <div class="col-sm-10; margin: auto">
                                        <button type="submit" class="btn btn-outline-success btn-lg btn-block">{{ __('Registrar') }}</button>
                                  </div>
                                </div>
                        </form>
                </div>
              </div>
    
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>