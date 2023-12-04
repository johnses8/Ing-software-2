<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-white shadow-sm">
    <div class="container">
        <a href="/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('inicio','','img/Recurso 2.png',1)">
            <img src="img/Recurso 1.png" alt="" width="100" height="75" id="inicio">
        </a>
        <a class="navbar-brand text-success logo h1 align-self-center" href="/">
            &nbsp;
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-toggle="collapse"
            data-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between"
            id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">Sobre nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tienda">Tienda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contacto&nbsp;</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="badge badge-pill badge-dark">
                                <i class="fa fa-shopping-cart" style="color: white;"></i>
                                <!-- Coloca aquí la lógica para mostrar la cantidad en el carrito -->
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right cart-dropdown" aria-labelledby="navbarDropdown"
                            style="width: 450px; padding: 0px; border-color: #9DA0A2">
                            <ul class="list-group" style="margin: 20px;">
                                <!-- Incluye aquí el contenido del carrito -->
                                @include('partials.cart-drop')
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
</nav>