<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        #Cards{
    display: flex;
    justify-content: space-evenly;
    }
    #tablas{
    display: flex;
    justify-content: space-evenly;
    }
    
    </style> 
    <title>home</title>
</head>

<body>
    <div class="container-fluid">

        <div class="row col-sm-12">

            <div class=" col-sm-2 bg-primary border border-dark">

                <div class="row col-sm-12 ">
                    <div>
                        <div class=" px-1 py-3">
                            <img src="images/img.png" width="30" height="30">
                            <span>CodingLab</span>
                        </div>
                        
                        <ul class="list-group py-4">
                            
                            <?php
                            include_once("./db/ClassPoo.php");
                            $lista = new Lista();
                            $lista ->EnlistarArray(); 
                            ?>
                            </ul>
                            <br>
                            <h4><a class="py-3 link-dark">Logout</a></h4>
                        
                    </div>
                </div>

            </div>
            <!-- LIST -->
            <div class="row col-sm-10 h-25 d-inline-block">

                <div class="col-sm-3 px-5 h-25 d-inline-block">
                    <h3>Dashboard</h3>
                </div>
                <div class="col-sm-6  py-3 h-25 d-inline-block">
                    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Buscar...">
                    <datalist id="datalistOptions">
                        <option value="Product">
                        <option value="Returned">
                        <option value="Delivered">
                        <option value="Returned">
                    </datalist>
                </div>
                <!-- DROPDOWN -->
                <div class="col-sm-2 position-absolute top-0 end-0 h-25 d-inline-block py-2">
                    <a class="btn btn-light border border-info rounded-3 dropdown-toggle" role="button"
                        id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="images/anuel.jpeg" width="30" height="30" class="rounded-3"> Prem Shahi
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a>Editar perfil</a></li>
                        <li><a>Productos</a></li>
                        <li><a>cerrar sesión ⇱</li>
                    </ul>
                </div>

                <div class="row col-sm-12" id="Cards">
                    <div class="card col-sm-3" style="width: 15rem;">
                        <div class="card-body">
                            <p class="card-text">Total Order</p>
                            <h5 class="card-title">40,876</h5>
                            <a>Up from yesterday</a>
                        </div>
                    </div>
                    <div class="card col-sm-3" style="width: 15rem;">
                        <div class="card-body">
                            <p class="card-text">Total Sales</p>
                            <h5 class="card-title">38,876</h5>
                            <a>Up from yesterday</a>
                        </div>
                    </div>

                    <div class="card col-sm-3 p-2" style="width: 15rem;">
                        <div class="card-body">
                            <p class="card-text">Total Profit</p>
                            <h5 class="card-title">12,876</h5>
                            <a>Up from yesterday</a>
                        </div>
                    </div>
                    <div class="card col-sm-3" style="width: 15rem;">
                        <div class="card-body">
                            <p class="card-text">Total return</p>
                            <h5 class="card-title">11,086</h5>
                            <a>Down from yesterday</a>
                        </div>
                    </div>
                </div>

                <div class="row col-sm-12 p-4" id="tablas">
                    <div class="col-sm-7">
                        <table class="table table table-borderless">
                            <h2>Recent Sales</h2>
                            <thead>
                                <tr>
                                    <th scope="col">Date</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Sales</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>02 Jan 2021</td>
                                    <td>Alex Doe</td>
                                    <td>Delivered</td>
                                    <td>$204.98</td>
                                </tr>
                                <tr>
                                    <td>02 Jan 2021</td>
                                    <td>David Mart</td>
                                    <td>Pending</td>
                                    <td>$24.55</td>
                                </tr>
                                <tr>
                                    <td>02 Jan 2021</td>
                                    <td>Roe Parter</td>
                                    <td>Returned</td>
                                    <td>$25.88</td>
                                </tr>
                                <tr>
                                    <td>02 Jan 2021</td>
                                    <td>Diana Penty</td>
                                    <td>Delivered</td>
                                    <td>$170.66</td>
                                </tr>
                                <tr>
                                    <td>02 Jan 2021</td>
                                    <td>Martin Paw</td>
                                    <td>Pending</td>
                                    <td>$56.56</td>
                                </tr>
                                <tr>
                                    <td>02 Jan 2021</td>
                                    <td>Doe Alex</td>
                                    <td>Returned</td>
                                    <td>$44.95</td>
                                </tr>
                                <tr>
                                    <td>02 Jan 2021</td>
                                    <td>Aiana Lexa</td>
                                    <td>Delivered</td>
                                    <td>$67.33</td>
                                </tr>
                                <tr>
                                    <td>02 Jan 2021</td>
                                    <td>Rexel Mags</td>
                                    <td>Pending</td>
                                    <td>$23.53</td>
                                </tr>
                                <tr>
                                    <td>02 Jan 2021</td>
                                    <td>Tiana Loths</td>
                                    <td>Delivered</td>
                                    <td>$46.52</td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-primary">See All</button>
                    </div>


                    <div class="col-sm-4">
                        <table class="table table table-borderless">
                            <h2>Top Selling Product</h2>
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="images/gafas.webp" width="30" height="30"></td>
                                    <td>Vuitton Sunglasses</td>
                                    <td>$1142</td>
                                </tr>
                                <tr>
                                    <td><img src="images/jeans.webp" width="30" height="30"></td>
                                    <td>hourglass jeans</td>
                                    <td>$1567</td>
                                </tr>
                                <tr>
                                    <td><img src="images/tenis.png" width="30" height="30"></td>
                                    <td>Nike sport shoe</td>
                                    <td>$1234</td>
                                </tr>
                                <tr>
                                    <td><img src="images/silk.webp" width="30" height="30"></td>
                                    <td>hermes silk scarves</td>
                                    <td>$2312</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>