
<!DOCTYPE html>
<html lang="pt-br">

<head>
 <meta http-equiv="content-type" content="text/html; charset=UTF-8">
 <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 <meta name="author" content="nome_autor">  
 <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
 <meta property="og:locale" content="pt-BR">
 <meta name="language" content="portuguese">      
 <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">   
 <link type="text/css" rel="stylesheet" href="css/site.css"  media="screen,projection"/>
 <link type="text/css" rel="stylesheet" href="css/sites.min.css"  media="screen,projection"/>
 <script src="https://use.fontawesome.com/33857c03c4.js"></script>
</head>
<body>
 <header>
  <div class="navbar">
   
   <?php   
   include 'extras/nav.php'; ?>
   
 </header> 
 <main>
  <section class="section">
    <div class="container">
      <h5 class="card blue-text"> Bem vindo, <?php echo $userDetails->name; ?></h5>
  	</div>
  </section>
