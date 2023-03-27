<?php
    //https://packagist.org/
    //phpmailer - envio de email
    //dompdf - gerador de pdf
    //thumbnails - miniaturas de imagens

    require "./bibliotecas/lib1/lib1.php"; //apenas para classes e interfaces
    require "./bibliotecas/lib2/lib2.php"; //apenas para classes e interfaces
    
    use A\Cliente as C1; //as = por nome
    use B\Cliente as C2;
    //-----------------------------------------------------------------------------------

    $c = new C1();
    print_r($c);
    echo $c->__get('nome');

    
    $x = new C2();
    print_r($x);
    echo $x->__get('nome');
?>