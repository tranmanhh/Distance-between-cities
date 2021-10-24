<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Distance between cities</title>
        <link rel="stylesheet" href="styling.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid">
            <div class="container">
                <div id="header">
                    <h1>Distance between cities App</h1>
                    <p>Our app will help you calculate travelling distances.</p>
                </div>
                <form class="form-horizontal">
                    <div class="form-group row">
                        <label for="origin" class="col-2 control-label">From:</label>
                        <div class="col-10">
                            <input type="text" class="form-control" id="origin" placeholder="Origin">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="destination" class="col-2 control-label">To:</label>
                        <div class="col-10">
                            <input type="text" class="form-control" id="destination" placeholder="Destination">
                        </div>
                    </div>
                </form>
                <button type="button" class="btn btn-primary" id="submit">Submit</button>
            </div>
        </div>
        <div id="map">Hello</div>
        <div id="message"></div>
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="index.js"></script>
    </body>
</html>