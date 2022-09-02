<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Articles with Login System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" />
</head>
<body>

    <main class="content bg-light container py-2">
        <div class="row justify-content-center">
            <form action="insert.php" method="POST">
                <input type="hidden" name="author" id="author" value="1" />
                <div class="form-group row mb-2">
                    <label class="col-sm-2 col-form-label"><b>Title</b></label>
                    <div class="col-sm-10">
                        <input type="text" name="title" id="title" class="form-control" />
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-sm-2 col-form-label"><b>Seo Title</b></label>
                    <div class="col-sm-10">
                        <input type="text" name="seo" id="seo" class="form-control" />
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-sm-2 col-form-label"><b>Category</b></label>
                    <div class="col-sm-10">
                        <input type="text" name="category" id="category" class="form-control" />
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-sm-2 col-form-label"><b>Content</b></label>
                    <div class="col-sm-10">
                        <textarea name="content" id="content" class="w-100 p-2" cols="30" rows="15"></textarea>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <div class="col-sm-12 text-center my-3">
                        <button type="submit" class="btn btn-sm btn-outline-secondary px-4">Submit Posts</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
