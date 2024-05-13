<!doctype html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        <link rel="stylesheet" href="{{asset('assets/estilos.css')}}">
    </head>

    <body>
        <section class="vh-100" style="background-color: #d9d9d964;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                  <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
          
                      <h5 class="mb-5">REGISTRARSE COMO</h5>
          
                      <!-- Checkbox -->
                      <a data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" style="background-color: #123939;"
                      href="{{route ('registroEmpresa.index')}}" type="submit">Empresa</a>
          
                      <hr class="my-4">
          
                      <a data-mdb-button-init data-mdb-ripple-init class="btn btn-lg btn-block btn-secondary" style="background-color: #27998C;"
                      href="{{route ('registroTrabajador.index')}}" type="submit"><i class="fab fa-google me-2"></i> Trabajador</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </body>
</html>