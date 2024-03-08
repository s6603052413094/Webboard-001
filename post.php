<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>verify_post</title>
</head>
<body>
<div class="containar-lg">
    <h1 style="text-align: center;" class="mt-3">Webboard-onii</h1>
    <?php include "nav.php" ?>
    <div class="row mt-4">
        <div class="col-lg-3 col-md-2 col-sm-1 "></div>
        <div class="col-lg-6 col-md-8 col-sm-10 ">
            <div class="card-header border-success mt-3">
            <div class="card-header bg-primary txt-white">เเสดงความคิดเห็น</div>
            <div class="card-body">
                <form action="post_save.php method="post">
                    <input type="hidden" name="post_id"
                    value="<?= $_GET['id'];?>">
                    <div class="row mb-3 justify-content-center">
                        <div class="col-lg-10">
                            <textarea name="comment" rows="8"
                            class="form-control"required></textarea>
                        </div>
                    </div>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-success btn-sm text-white">
                            <i class="bi bi-box-arrow-up-right"</i> ส่งข้อความ
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm ms-2">
                            <i class"bi bi-x-square></i> ยกเลิก</button>
                </div>
            </div>
        </form>
     </div>
    </div>
    </div>
    <div class="coi-lg-3 col-md-2 col-sm-1"></div>
</div> 
</div>