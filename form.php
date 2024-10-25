<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: white;">
        <div style="width: 413px; height: 500px; padding: 2rem; background-color: aqua; border-radius: 10px;">
            <form method="post" action= "_formhandle.php" enctype="multipart/form-data" style="width: 356px;  margin-top:4rem">
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Email:</label>
                    <div class="col-sm-9">
                        <input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email address">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputName3" class="col-sm-3 col-form-label">Name:</label>
                    <div class="col-sm-9">
                        <input name="name" type="text" class="form-control" id="inputName3" placeholder="Name">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPh3" class="col-sm-3 col-form-label">Phone:</label>
                    <div class="col-sm-9">
                        <input name="phone" type="text" class="form-control" id="inputPh3" placeholder="Phone number">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputimage3" class="col-sm-3 col-form-label">Images:</label>
                    <div class="input-group">
                        <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="images[]" multiple accept="images/*">
                      </div>
                  </div>
                <div class="row">
                    <div class="col-sm-9 offset-mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>