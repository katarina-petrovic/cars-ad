<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Car Ads App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.0/flexslider.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.0/jquery.flexslider.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
        <script>
            $(document).ready(function() {
                $('#carousel').flexslider({
                    animation: "slide",
                    controlNav: false,
                    animationLoop: false,
                    slideshow: false,
                    itemWidth: 210,
                    itemMargin: 5,
                    asNavFor: '#slider'
                });
                
                $('#slider').flexslider({
                    animation: "slide",
                    controlNav: false,
                    animationLoop: false,
                    slideshow: false,
                    sync: "#carousel"
                });
            });
        </script>
   
    </head>
    <body class="antialiased">
    <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 mb-4 mb-lg-0">
                        <div class="car-listing">
                            <div class="flexslider  mb-4">
                                <div id="slider" class="flexslider">
                                    <ul class="slides">
                                    @foreach($car->data->standardImages as $key => $image)
                                        <li>
                                        <img src={{ $image->url }} />
                                        </li>
                                        @endforeach
                                        <!-- items mirrored twice, total of 12 -->
                                    </ul>
                                </div>
                                <div id="carousel" class="flexslider">
                                    <ul class="slides">
                                        @foreach($car->data->standardImages as $key => $image)
                                            <li>
                                                <img src={{ $image->url }} />
                                            </li>
                                        @endforeach

                                        <!-- items mirrored twice, total of 12 -->
                                    </ul>
                                </div>
                            </div>   
                            <div class="c-bg-dark rounded-top">
                                <ul class="nav nav-tabs border-0 flex-column flex-sm-row text-white" id="myTab" role="tablist">
                                    <li class="nav-item mb-0 rounded-left">
                                        <a class="nav-link redial-light border-0 py-3" data-toggle="tab" href="#description" role="tab" aria-expanded="true" aria-selected="false">Description</a>
                                    </li>
                                    <li class="nav-item mb-0">
                                        <a class="nav-link redial-light rounded-0 border-0 py-3" data-toggle="tab" href="#specifications" role="tab" aria-expanded="false" aria-selected="false">Specifications</a>
                                    </li>
                                    <li class="nav-item mb-0">
                                        <a class="nav-link redial-light rounded-0 border-0 py-3 active show" data-toggle="tab" href="#features" role="tab" aria-expanded="false" aria-selected="true">Features</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane fade" id="description" role="tabpanel" aria-expanded="true">
                                    <div class="border c-brd-light border-top-0">
                                        <div class="card-body pt-5">
                                            {{ $car->data->description->en_GB }}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="specifications" role="tabpanel" aria-expanded="false">
                                    <div class="border c-brd-light border-top-0">
                                        <div class="pt-4"></div>
                                        <div class="list-header p-3">
                                            <a href="#" class="d-block text-btn c-montserrat c-dark c-font-weight-500" data-toggle="collapse" data-target="#vehicle"><i class="fas fa-car-side pr-1"></i> Vehicle Data</a>
                                        </div>
                                        <div id="vehicle" class="collapse show widget-content">
                                            <table class="table table-striped mb-0">
                                            
                                                <tbody>
                                                    <tr>
                                                        <td>Make</td>
                                                        <td>{{$car->data->car->make}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Model</td>
                                                        <td>{{$car->data->car->model}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Model Name</td>
                                                        <td>{{$car->data->car->specification}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Series</td>
                                                        <td>{{$car->data->manufacturerCode}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Year of manufacture</td>
                                                        <td>{{$car->data->yearOfProduction}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Chassis number</td>
                                                        <td>{{$car->data->chassisNumber}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Condition category</td>
                                                        <td>{{$car->data->stateCategory}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mileage (read)</td>
                                                        <td>{{$car->data->mileageByUnit . " " .$car->data->mileageUnit}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>First registration</td>
                                                        <td>{{$car->data->firstRegistrationDate}}</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="list-header p-3">
                                            <a href="#" class="d-block text-btn c-montserrat c-dark c-font-weight-500" data-toggle="collapse" data-target="#technical"><i class="fas fa-info-circle pr-1"></i> Technical details</a>
                                        </div>
                                        <div id="technical" class="collapse show widget-content">
                                            <table class="table table-striped mb-0">
                                                <tbody>

                                                    <tr>
                                                        <td>Body style</td>
                                                        <td>{{$car->data->car->body}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Power (hp)</td>
                                                        <td>{{$car->data->horsepower}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cubic capacity</td>
                                                        <td>{{$car->data->cubicCapacity}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cylinders</td>
                                                        <td>{{$car->data->cylinder}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Doors</td>
                                                        <td>{{$car->data->doors}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Transmission</td>
                                                        <td>{{$car->data->gearbox}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gears</td>
                                                        <td>{{$car->data->gears}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fuel</td>
                                                        <td>{{$car->data->fuel}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade active show" id="features" role="tabpanel" aria-expanded="false">
                                    <div class="border c-brd-light border-top-0">
                                        <div class="card-body pt-4">
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <ul class="list-unstyled c-line-height-3 mb-0">
                                                        <li><i class="fa <?php echo checkIcon($car->data->centralLocking); ?> c-primary pr-2"></i> Central locking</li>
                                                        <li><i class="fa <?php echo checkIcon($car->data->foldingRoof); ?> c-primary pr-2"></i> Folding Roof</li>
                                                        <li><i class="fa <?php echo checkIcon($car->data->electricWindows); ?> c-primary pr-2"></i> Electric Windows</li>
                                                        <li><i class="fa <?php echo checkIcon($car->data->airbag); ?> c-primary pr-2"></i> Airbag</li>
                                                        <li><i class="fa <?php echo checkIcon($car->data->abs); ?> c-primary pr-2"></i> ABS</li>
                                                        <li><i class="fa <?php echo checkIcon($car->data->airconditioning); ?> c-primary pr-2"></i> Air Conditioning</li>
                                                        <li><i class="fa <?php echo checkIcon($car->data->powerSteering); ?> c-primary pr-2"></i> Power Steering </li>
                                                        <li><i class="fa <?php echo checkIcon($car->data->sunroof); ?> c-primary pr-2"></i> Sun Roof</li>
                                                        <li><i class="fa <?php echo checkIcon($car->data->heatedSeats); ?> c-primary pr-2"></i> Heated Seats</li>
                                                        <li><i class="fa <?php echo checkIcon($car->data->cruiseControl); ?> c-primary pr-2"></i> Cruise Control</li>
                                                        
                                                    </ul>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <ul class="list-unstyled c-line-height-3 mb-0">
                                                        <li><i class="fa <?php echo checkIcon($car->data->licensed); ?> c-primary pr-2"></i> Licenced</li>
                                                        <li><i class="fa <?php echo checkIcon($car->data->readyToRide); ?> c-primary pr-2"></i> Ready to ride</li>
                                                        <li><i class="fa <?php echo checkIcon($car->data->milleMiglia); ?> c-primary pr-2"></i> Mille Miglia</li>
                                                        <li><i class="fa <?php echo checkIcon($car->data->mainInspection); ?> c-primary pr-2"></i> Main mainInspection</li>
                                                        <li><i class="fa <?php echo checkIcon($car->data->oldtimerLicensePlate); ?> c-primary pr-2"></i> License Plate</li>
                                                        <li><i class="fa <?php echo checkIcon($car->data->fiva); ?> c-primary pr-2"></i> Fiva</li>
                                                        <li><i class="fa <?php echo checkIcon($car->data->fia); ?> c-primary pr-2"></i> Fia</li>
                                                        <li><i class="fa <?php echo checkIcon($car->data->accidentFree); ?> c-primary pr-2"></i> Accident Free</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card c-brd-light mb-4">
                            <div class="card-body">
                                <h4>{{ $car->data->car->make ." ". $car->data->car->specification}}</h4>
                                <ul class="list-unstyled c-line-height-2_5 mb-0">
                                    <li><small class="c-light">Price</small> <h4 class="d-inline-block c-primary mb-1">
                                        <?php echo $car->data->priceCurrency ? $car->data->priceCurrency : '$'; echo $car->data->priceOnRequest ? 'On request' :  $car->data->price;?>
                                        
                                    </h4></li>
                                    <li><i class="fa fa-map-marker pr-1"></i>{{$car->data->location->street .", ".$car->data->location->postalCode ." ".$car->data->location->city}}</li>
                                </ul>
                            </div>
                            <table class="table mb-0 c-line-height-1_5 c-brd-light">
                                <tbody>
                                    <tr>
                                        <td class="c-dark c-font-weight-600 b-r"> Make:</td>
                                        <td>{{$car->data->car->make}}</td>
                                    </tr>
                                    <tr>
                                        <td class="c-dark c-font-weight-600 b-r"> Model:</td>
                                        <td>{{$car->data->car->model}}</td>
                                    </tr>
                                    <tr>
                                        <td class="c-dark c-font-weight-600 b-r"> Model Name:</td>
                                        <td>{{$car->data->car->specification}}</td>
                                    </tr>
                                    <tr>
                                        <td class="c-dark c-font-weight-600 b-r"> Year:</td>
                                        <td>{{$car->data->yearOfProduction}}</td>
                                    </tr>
                                    <tr>
                                        <td class="c-dark c-font-weight-600 b-r"> Fuel:</td>
                                        <td>{{$car->data->fuel}}</td>
                                    </tr>
                                    <tr>
                                        <td class="c-dark c-font-weight-600 b-r"> Transmission:</td>
                                        <td>{{$car->data->gearbox}}</td>
                                    </tr>
                                    <tr>
                                        <td class="c-dark c-font-weight-600 b-r"> Color:</td>
                                        <td>{{$car->data->colorOutside}}</td>
                                    </tr>
                                    <tr>
                                        <td class="c-dark c-font-weight-600 b-r"> Driven:</td>
                                        <td>{{$car->data->mileageByUnit . " " .$car->data->mileageUnit}}   </td>
                                    </tr>
                                    <tr>
                                        <td class="c-dark c-font-weight-600 b-r"> Engine:</td>
                                        <td>{{$car->data->cubicCapacity}} cc</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card c-brd-light mb-4">
                            <div class="c-bg-ligth card-header">
                                <div class="card-body p-2">
                                    <h6 class="mb-0">Contact Seller</h6>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="my-3">{{$car->data->contact->firstName . " " . $car->data->contact->lastName}}</h5>
                                <p class="text-muted mb-3">{{$car->data->contact->companyName}}</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a class="btn btn-primary btn-xlg mr-1" href="tel:<?php echo $car->data->contact->phone; ?>">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </a>                                    
                                    <a class="btn btn-primary btn-xlg" href="mailto:<?php echo $car->data->contact->email; ?>" target="_blank">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </a>
                                </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
