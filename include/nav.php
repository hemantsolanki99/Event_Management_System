<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Event Management</title>
    
    <link rel="stylesheet" href="css/main.css" type="text/css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand font-weight-bold" href="./">EMSystem</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                    <a class="nav-link" href=""> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <a class="dropdown-item" href="cost.php">Cost Estimation</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="venue.php">Venue Booking</a>
                        <a class="dropdown-item" href="bookings.php">Booked Events</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="payments.php">Payments</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Events</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="events.php?S37KoHcn5WJIR6OXKFNo1Q=G2SUY">Birthday Party</a>
                        <a class="dropdown-item" href="events.php?S37KoHcn5WJIR6OXKFNo1Q=G3SUY">College Events</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="events.php?S37KoHcn5WJIR6OXKFNo1Q=E8DBo">Special Events</a>
                        <a class="dropdown-item" href="events.php?S37KoHcn5WJIR6OXKFNo1Q=E8DBp">Days Celebration</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="events.php?S37KoHcn5WJIR6OXKFNo1Q=jTRyGS07">Marriage Function</a>
                        <a class="dropdown-item" href="events.php?S37KoHcn5WJIR6OXKFNo1Q=jTRyGS08">Family Function</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="" tabindex="-1" aria-disabled="true">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>

            </ul>            
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-transparent text-white font-weight-bold" data-toggle="modal" data-target="#registerModal"> <i class="fa fa-sign-up text-primary"></i> Register </button>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-transparent text-white font-weight-bold" data-toggle="modal" data-target="#loginModal"> <i class="fa fa-sign-in text-primary"></i> Login </button>

            <!-- Modal -->
            <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="loginModalLabel">Login</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                <div class="input-group m-1 p-1">
                                    <span class="input-group-addon mx-1 px-1"><i class="fa fa-user"> </i> </span>
                                    <input type="text" class="form-control" placeholder="Username" id="uname" name="uname" required="">
                                </div>
                                <div class="input-group m-1 p-1">
                                    <span class="input-group-addon mx-1 px-1"><i class="fa fa-lock"></i></span>
                                    <input type="password" class="form-control" id="upass" name="upass" placeholder="Password" required="">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" id="login" name="login" class="btn btn-primary">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="loginModalLabel">Register</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                <div class="input-group m-1 p-1">
                                    <span class="input-group-addon mx-1 px-1"><i class="fa fa-user"> </i> </span>
                                    <input type="text" class="form-control" placeholder="Enter Name" id="uname" name="uname" required="">
                                </div>
                                <div class="input-group m-1 p-1">
                                    <span class="input-group-addon mx-1 px-1"><i class="fa fa-user"> </i> </span>
                                    <input type="text" class="form-control" placeholder="Address" id="uname" name="uname" required="">
                                </div>
                                <div class="input-group m-1 p-1">
                                    <span class="input-group-addon mx-1 px-1"><i class="fa fa-user"> </i> </span>
                                    <select name="Gender" id="Gender" class="form-control">
                                        <option name="Gender" value="" selected disabled>Gender</option>
                                        <option name="Gender" value="Male">Male</option>
                                        <option name="Gender" value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="input-group m-1 p-1">
                                    <span class="input-group-addon mx-1 px-1"><i class="fa fa-user"> </i> </span>
                                    <input type="text" class="form-control" placeholder="Username" id="uname" name="uname" required="">
                                </div>
                                <div class="input-group m-1 p-1">
                                    <span class="input-group-addon mx-1 px-1"><i class="fa fa-lock"></i></span>
                                    <input type="password" class="form-control" id="upass" name="upass" placeholder="Password" required="">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" id="register" name="register" class="btn btn-primary">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                
        </div>
    </nav>