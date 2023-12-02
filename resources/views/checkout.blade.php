<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Novedades y Bisuteria FCP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    

    
    <link rel="shortcut icon" href="img/diamante.png">
    <link href="img/favicon.ico" rel="icon">

   
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

 
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
</head>

<body>
    
    <div class="container-fluid">
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="/principio" class="text-decoration-none">
                    <h1 "><span class="text-primary font-weight-bold border px-3 mr-1">NyB</span></h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Buscar productos">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a>
                <a href="/cart" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge">0</span>
                </a>
            </div>
        </div>
    </div>
 
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Realiza Tu Pago</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Inicio</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Pago</p>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div class="mb-4">
                    <h4 class="font-weight-semi-bold mb-4">Dirección de envío</h4>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Nombre(s)</label>
                            <input class="form-control" type="text" placeholder="Joss">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Apellidos</label>
                            <input class="form-control" type="text" placeholder="Espinosa">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" placeholder="ejemplo@email.com">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Numero Telefonico</label>
                            <input class="form-control" type="text" placeholder="+14513513">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Nombre de calle</label>
                            <input class="form-control" type="text" placeholder=" calle 3">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Nombre de calle 2</label>
                            <input class="form-control" type="text" placeholder="calle 56">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Pais</label>
                            <input class="form-control" type="text" placeholder="México">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Ciudad</label>
                            <input class="form-control" type="text" placeholder="FCP">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Estado</label>
                            <input class="form-control" type="text" placeholder="Quintana Roo">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Codigo Postal</label>
                            <input class="form-control" type="text" placeholder="1234">
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="newaccount">
                                <label class="custom-control-label" for="newaccount">Confirmar Dirección</label>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="shipto">
                                <label class="custom-control-label" for="shipto"  data-toggle="collapse" data-target="#shipping-address">Enviar a otra dirección</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse mb-4" id="shipping-address">
                    <h4 class="font-weight-semi-bold mb-4">Dirección de envío</h4>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Nombre(s)</label>
                            <input class="form-control" type="text" placeholder="Joss">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Apellidos</label>
                            <input class="form-control" type="text" placeholder="Espinosa">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" placeholder="ejemplo@email.com">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Numero Telefonico</label>
                            <input class="form-control" type="text" placeholder="+14513513">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Nombre de calle</label>
                            <input class="form-control" type="text" placeholder=" calle 3">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Nombre de calle 2</label>
                            <input class="form-control" type="text" placeholder="calle 56">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Pais</label>
                            <input class="form-control" type="text" placeholder="México">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Ciudad</label>
                            <input class="form-control" type="text" placeholder="FCP">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Estado</label>
                            <input class="form-control" type="text" placeholder="Quintana Roo">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Codigo Postal</label>
                            <input class="form-control" type="text" placeholder="1234">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Total del pedido</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="font-weight-medium mb-3"> Nombre</h5> 
                        <div class="d-flex justify-content-between">
                            <p>Nombre</p>
                            <p>$150</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Nombre</p>
                            <p>$150</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Nombre</p>
                            <p>$150</p>
                        </div>
                        <hr class="mt-0">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium">$150</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Envio</h6>
                            <h6 class="font-weight-medium">$10</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold">$160</h5>
                        </div>
                    </div>
                </div>
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Tipo De Pago</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="paypal">
                                <label class="custom-control-label" for="paypal">Paypal</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="directcheck">
                                <label class="custom-control-label" for="directcheck">Efectivo</label>
                            </div>
                        </div>
                        <div class="">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                                <label class="custom-control-label" for="banktransfer">Transferencia Bancaria</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <button class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Realizar Pedido</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">NyB</span></h1>
                </a>
                <p>Pagina para fines academicos</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Alguna calle de Felipe carrillo puerto</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>ContactoNyB@cliente.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+529831120543</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Links Directos</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Tienda</a>
                            <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Carrito de compra</a>
                            <a class="text-dark mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Pago</a>
                            <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contactanos</a>
                        </div>
                    </div>

                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Enterate de las novedades</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 py-4" placeholder="Nombre" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 py-4" placeholder="Correo"
                                    required="required" />
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">Subscribete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="#">ByN FCP</a>. Todos los derechos reservados. Diseñado por
                    <a class="text-dark font-weight-semi-bold" href="">J.AH.M.Z TEAM</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>


    
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

   
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <script src="js/main.js"></script>
</body>

</html>