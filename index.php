<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-layout{
            width:20rem; 
            margin:20px 0 24px 0;
            margin-left: auto;
            margin-right: auto;
            padding: 0;
            /* display: inline;
            float: none; */
        }

        .card-container{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container-fluid p-5 bg-dark text-light text-center">
        <h1>myBlog.com</h1>
        <p>There's no place like home. We're closer to home.</p>
    </div>
    <div class="container card-container">
        <div class="row">
            <div class="card card-layout">
                <img src="https://www.w3schools.com/bootstrap5/img_avatar3.png" alt="" width="auto">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some example text. Some example text.</p>
                    <a href="#" class="btn btn-secondary">Card link</a>
                    <a href="#" class="btn btn-secondary">Another link</a>
                </div>
            </div>
            <div class="card card-layout">
                <img src="https://www.w3schools.com/bootstrap5/img_avatar1.png" alt="" width="auto">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some example text. Some example text.</p>
                    <a href="#" class="btn btn-secondary">Card link</a>
                    <a href="#" class="btn btn-secondary">Another link</a>
                </div>
            </div>

            <div class="card card-layout">
                <img src="https://www.w3schools.com/bootstrap5/img_avatar5.png" alt="" width="auto">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some example text. Some example text.</p>
                    <a href="#" class="btn btn-secondary">Card link</a>
                    <a href="#" class="btn btn-secondary">Another link</a>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>