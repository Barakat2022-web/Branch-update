<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Gradients dashboard cards - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://netdna.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Shipments</h6>
                    <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span>{{ App\Models\shipment::count()}}</span></h2>
                    <p class="m-b-0">Number of Shipment<br><span class="f-right"></span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Companies</h6>
                    <h2 class="text-right"><i class="fa fa-rocket f-left"></i><span>{{ App\Models\Company::count() }}</span></h2>
                    <p class="m-b-0">Number of Company<span class="f-right"></span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Employee</h6>
                    <h2 class="text-right"><i class="fa fa-refresh f-left"></i><span>{{ App\Models\Employee::count() }}</span></h2>
                    <p class="m-b-0">Number of Employee<span class="f-right"></span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Clients</h6>
                    <h2 class="text-right"><i class="fa fa-credit-card f-left"></i><span>{{ App\Models\User::count() }}</span></h2>
                    <p class="m-b-0">Number of Clients<br><span class="f-right"> </span></p>
                </div>
            </div>
        </div>
	</div>
</div>

<style type="text/css">
.overlay.active {
    display: none !important;
    opacity: 0 !important;
}
.order-card {
    color: #fff;
}

.bg-c-blue {
    background: linear-gradient(45deg,#4099ff,#73b4ff);
}

.bg-c-green {
    background: linear-gradient(45deg,#2ed8b6,#59e0c5);
}

.bg-c-yellow {
    background: linear-gradient(45deg,#FFB64D,#ffcb80);
}

.bg-c-pink {
    background: linear-gradient(45deg,#FF5370,#ff869a);
}


.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    border: none;
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.card .card-block {
    padding: 25px;
}

.order-card i {
    font-size: 26px;
}

.f-left {
    float: left;
}

.f-right {
    float: right;
}
</style>

<script type="text/javascript">

</script>
</body>
</html>