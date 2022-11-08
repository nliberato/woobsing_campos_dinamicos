<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nueva Oferta (Campos Dinamicos)</title>
    <!-- Latest compiled and minified JavaScript -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js" integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    
</head>
<body>
    <div id="app">
        
        <h2>Nueva oferta laboral</h2>
        <formulario-oferta></formulario-oferta>
        <hr> 
        <br> 
        <br> 
        <h2>Campos Dinamicos</h2> 
        <section class="container" style="float: right">
            <div class="d-flex justify-content-center">
              <button id="button-add-field" class="btn btn-color-2"></i>Agregar campos personalizados a tu oferta &nbsp; <i class="fa-solid fa-square-plus"></i></button>
            </div>
        </section>
        <section class="container" id="camposDinamicosID" >
            <campos-dimamicos></campos-dimamicos>
        </section>
    </div>
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
   

</body> 

<script>
$("#add-field").css('display','block');
</script>
</html>

 