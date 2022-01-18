<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .container-fluid-sm ul li:hover{
          background-color:  #00C1FE
         }
        
    </style>
</head>
<body>
 
    <div class="row align-items-start">
    <?php include 'side.php' ; ?>

      <div class="col" style="padding: 0;width: 100%;">
      <?php include 'nav.php' ; ?>
        <div class="col" style="background-color: #E5E5E5; height: 100%;">
            <nav class="navbar navbar-light px-3">
                <div class="container-fluid">
                  <a class="navbar-brand fw-bold">Payment Details</a>
                  <form class="d-flex">
                    <a class=" mt-1 " href="#"><img src="Vector.png" alt=""></a>
                  </form>
                </div>
            </nav>
            <div class="container border-top border-2 ps-5" id="row">
                <div class="row row-cols-7 py-3 text-muted" style="font-size: 90%;">
                  <div class="col">Name</div>
                  <div class="col">Payment Schedule</div>
                  <div class="col">Bill Number</div>
                  <div class="col">Bill Number</div>
                  <div class="col">Balance amount</div>
                  <div class="col">Date </div>
                  <div class="col"></div>
                </div>
                <div class="row row-cols-7 py-3 bg-white my-2 me-2">
                    <div class="col" >Karthi</div>
                    <div class="col">First</div>
                    <div class="col">00012223</div>
                    <div class="col">DHS 100,000</div>
                    <div class="col">DHS 500,000</div>
                    <div class="col">05-Jan, 2022</div>
                    <div class="col text-end">
                      <a href="#"><img class="pe-2" src="view.png" alt=""></a>
                    </div>
                </div>
                <div class="row row-cols-7 py-3 my-2 me-2">
                    <div class="col" >Karthi</div>
                    <div class="col">First</div>
                    <div class="col">00012223</div>
                    <div class="col">DHS 100,000</div>
                    <div class="col">DHS 500,000</div>
                    <div class="col">05-Jan, 2022</div>
                    <div class="col text-end">
                      <a href="#"><img class="pe-2" src="view.png" alt=""></a>
                    </div>
                </div>
                <div class="row row-cols-7 py-3 bg-white my-2 me-2">
                    <div class="col" >Karthi</div>
                    <div class="col">First</div>
                    <div class="col">00012223</div>
                    <div class="col">DHS 100,000</div>
                    <div class="col">DHS 500,000</div>
                    <div class="col">05-Jan, 2022</div>
                    <div class="col text-end">
                      <a href="#"><img class="pe-2" src="view.png" alt=""></a>
                    </div>
                </div>
                <div class="row row-cols-7 py-3  my-2 me-2">
                    <div class="col" >Karthi</div>
                    <div class="col">First</div>
                    <div class="col">00012223</div>
                    <div class="col">DHS 100,000</div>
                    <div class="col">DHS 500,000</div>
                    <div class="col">05-Jan, 2022</div>
                    <div class="col text-end">
                      <a href="#"><img class="pe-2" src="view.png" alt=""></a>
                    </div>
                </div>

        </div>
</div>
  


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>