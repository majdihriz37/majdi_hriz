<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Majdi Hriz</title>
</head>

<body>
    <?php 
    $frameworks=array('CakePhp', 'Symfony', 'ZendFramework', 'CodeIgniter', 'Laravel');
    $frameworksArray=null;$count=0;$booksArray=null;
    foreach ($frameworks as $frameworks){
        $frameworksArray .= $count>0?' , ' . $frameworks:$frameworks;
        $count+=1;
    }
    $books=array('The Vanishing Half'=>'Brit Bennett','American Dirt'=>' Jeanine Cummins');
    foreach($books as $key => $value) {
        $booksArray.= "<a><a id='fett'>" . $key . "</a>  : " . $value.'</a><br>';
    }
    ?>
    
    <?='<h2>das ist eine <strong>HTML-Boilerplate</strong></h2>'?>
    <?='<h1>Aufgabe 22 :<br> '.$frameworksArray.'</h1>'?>
    <?='<h1>Aufgabe 25 :<br> '.$booksArray.'</h1>'?>
</body>
</html>