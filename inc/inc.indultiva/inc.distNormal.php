<?php 
    session_cache_expire(65);
    session_start();
    if(empty($_SESSION)){
        header("Location: ./../index.php");
    }
    // echo $_POST['medidas']; 
    echo "<script> var erro = 2</script>";
    if(isset($_POST['verificar'])){
        $tabela = [
            [0.0000,0.0398,0.0793,0.1179,0.1554,0.1915,0.2257,0.2580,0.2881,0.3159,0.3413,0.3643,0.3849,0.4032,0.4192,0.4332,0.4452,0.4554,0.4641,0.4713,0.4772,0.4821,0.4861,0.4893,0.4918,0.4938,0.4953,0.4965,0.4974,0.4981,0.4987,0.4990,0.4993,0.4995,0.4997,0.4998,0.4998,0.4999,0.4999,0.5000],//tabela coluna 0 
            [0.0040,0.0438,0.0832,0.1217,0.1591,0.1950,0.2291,0.2611,0.2910,0.3186,0.3438,0.3665,0.3869,0.4049,0.4207,0.4345,0.4463,0.4564,0.4649,0.4719,0.4778,0.4826,0.4864,0.4896,0.4920,0.4940,0.4955,0.4966,0.4975,0.4982,0.4987,0.4991,0.4993,0.4995,0.4997,0.4998,0.4998,0.4999,0.4999,0.5000],//tabela coluna 1
            [0.0080,0.0478,0.0871,0.1255,0.1628,0.1985,0.2324,0.2642,0.2939,0.3212,0.3461,0.3686,0.3888,0.4066,0.4222,0.4357,0.4474,0.4573,0.4656,0.4726,0.4783,0.4830,0.4868,0.4898,0.4922,0.4941,0.4956,0.4967,0.4967,0.4982,0.4987,0.4991,0.4994,0.4995,0.4997,0.4998,0.4999,0.4999,0.4999,0.5000],//tabela coluna 2 
            [0.0120,0.0517,0.0910,0.1293,0.1664,0.2019,0.2357,0.2673,0.2967,0.3238,0.3485,0.3708,0.3907,0.4082,0.4236,0.4370,0.4484,0.4582,0.4664,0.4732,0.4788,0.4834,0.4871,0.4901,0.4925,0.4943,0.4957,0.4968,0.4977,0.4983,0.4988,0.4991,0.4994,0.4996,0.4997,0.4998,0.4999,0.4999,0.4999,0.5000],//tabela coluna 3 
            [0.0160,0.0557,0.0948,0.1331,0.1700,0.2054,0.2389,0.2703,0.2995,0.3264,0.3508,0.3729,0.3925,0.4099,0.4251,0.4382,0.4495,0.4591,0.4671,0.4738,0.4793,0.4838,0.4875,0.4904,0.4927,0.4945,0.4959,0.4969,0.4977,0.4984,0.4988,0.4992,0.4994,0.4996,0.4997,0.4998,0.4999,0.4999,0.4999,0.5000],//tabela coluna 4 
            [0.0199,0.0596,0.0987,0.1368,0.1736,0.2088,0.2422,0.2734,0.3023,0.3289,0.3531,0.3749,0.3944,0.4115,0.4265,0.4394,0.4505,0.4599,0.4678,0.4744,0.4798,0.4842,0.4878,0.4906,0.4929,0.4946,0.4960,0.4970,0.4978,0.4984,0.4989,0.4992,0.4994,0.4996,0.4997,0.4998,0.4999,0.4999,0.4999,0.5000],//tabela coluna 5 
            [0.0239,0.0636,0.1026,0.1406,0.1772,0.2123,0.2454,0.2764,0.3051,0.3315,0.3554,0.3770,0.3962,0.4131,0.4279,0.4406,0.4515,0.4608,0.4686,0.4750,0.4803,0.4846,0.4881,0.4909,0.4931,0.4948,0.4961,0.4971,0.4979,0.4985,0.4989,0.4992,0.4994,0.4996,0.4997,0.4998,0.4999,0.4999,0.4999,0.5000],//tabela coluna 6 
            [0.0279,0.0675,0.1064,0.1443,0.1808,0.2157,0.2486,0.2794,0.3078,0.3340,0.3577,0.3790,0.3980,0.4147,0.4292,0.4418,0.4525,0.4616,0.4693,0.4756,0.4808,0.4850,0.4884,0.4911,0.4932,0.4949,0.4962,0.4972,0.4979,0.4985,0.4989,0.4992,0.4995,0.4996,0.4997,0.4998,0.4999,0.4999,0.4999,0.5000],//tabela coluna 7 
            [0.0319,0.0714,0.1103,0.1480,0.1844,0.2190,0.2517,0.2823,0.3106,0.3365,0.3599,0.3810,0.3997,0.4162,0.4306,0.4429,0.4535,0.4625,0.4699,0.4761,0.4812,0.4854,0.4887,0.4913,0.4934,0.4951,0.4963,0.4973,0.4980,0.4986,0.4990,0.4993,0.4995,0.4996,0.4997,0.4998,0.4999,0.4999,0.4999,0.5000],//tabela coluna 8 
            [0.0359,0.0753,0.1141,0.1517,0.1879,0.2224,0.2549,0.2852,0.3133,0.3389,0.3621,0.3830,0.4015,0.4177,0.4319,0.4441,0.4545,0.4633,0.4706,0.4767,0.4817,0.4857,0.4890,0.4916,0.4936,0.4952,0.4964,0.4974,0.4981,0.4986,0.4990,0.4993,0.4995,0.4997,0.4998,0.4998,0.4999,0.4999,0.4999,0.5000],//tabela coluna 9 
        ];
        $media = $_POST['media'];
        $dp = $_POST['dp'];
        $med = $_POST['medidas'];
        if($med == 'maior'){
            $a = $_POST['a'];
            $z = number_format(($a - $media)/$dp, 2, '.', ',');
            if($a > $media){
                $split = str_split($z);
                if($z < 0){
                    $hor = $split[1].'.'.$split[3];
                    if(isset($split[4])){
                        $ver = $split[4];
                    }else{
                        $ver = 0;
                    }
                }else{
                    $hor = $split[0].'.'.$split[2];
                    if(isset($split[3])){
                        $ver = $split[3];
                    }else{
                        $ver = 0;
                    }
                }
                // echo $hor;
                $hor = $hor*10;
                for($i = 0; $i < sizeof($tabela); $i++){
                    if($i == $ver){
                        for($j = 0; $j < sizeof($tabela[$i]); $j++){
                            if($j == $hor){
                                // echo $tabela[$i][$j];
                                $prob = (0.5 - $tabela[$i][$j])*100;
                                //echo $prob."%";
                            }
                        }
                    }
                }
            }else if($a < $media){
                $split = str_split($z);
                if($z < 0){
                    $hor = $split[1].'.'.$split[3];
                    if(isset($split[4])){
                        $ver = $split[4];
                    }else{
                        $ver = 0;
                    }
                }else{
                    $hor = $split[0].'.'.$split[2];
                    if(isset($split[3])){
                        $ver = $split[3];
                    }else{
                        $ver = 0;
                    }
                }
                // echo $hor;
                $hor = $hor*10;
                for($i = 0; $i < sizeof($tabela); $i++){
                    if($i == $ver){
                        for($j = 0; $j < sizeof($tabela[$i]); $j++){
                            if($j == $hor){
                                // echo $tabela[$i][$j];
                                $prob = (0.5 + $tabela[$i][$j])*100;
                                //echo $prob."%";
                            }
                        }
                    }
                }
            }
        }
        if($med == 'entre'){
            $b = $_POST['b'];
            $c = $_POST['c'];
            
            $z = number_format(($b - $media)/$dp, 2, '.', ',');
            $split = str_split($z);
            if($z < 0){
                $horB = $split[1].'.'.$split[3];
                if(isset($split[4])){
                    $verB = $split[4];
                }else{
                    $verB = 0;
                }
            }else{
                $horB = $split[0].'.'.$split[2];
                if(isset($split[3])){
                    $verB = $split[3];
                }else{
                    $verB = 0;
                }
            }
            // echo $horB;
            $horB = $horB*10;
            for($i = 0; $i < sizeof($tabela); $i++){
                if($i == $verB){
                    for($j = 0; $j < sizeof($tabela[$i]); $j++){
                        if($j == $horB){
                            // echo $tabela[$i][$j];
                            $probB = ($tabela[$i][$j]);
                            //echo $prob."%";
                        }
                    }
                }
            }

            $y = number_format(($c - $media)/$dp, 2, '.', ',');
            $split = str_split($y);
            if($y < 0){
                $horC = $split[1].'.'.$split[3];
                if(isset($split[4])){
                    $verC = $split[4];
                }else{
                    $verC = 0;
                }
            }else{
                $horC = $split[0].'.'.$split[2];
                if(isset($split[3])){
                    $verC = $split[3];
                }else{
                    $verC = 0;
                }
            }
            // echo $horC;
            $horC = $horC*10;
            for($i = 0; $i < sizeof($tabela); $i++){
                if($i == $verC){
                    for($j = 0; $j < sizeof($tabela[$i]); $j++){
                        if($j == $horC){
                            // echo $tabela[$i][$j];
                            $probC = ($tabela[$i][$j]);
                            //echo $prob."%";
                        }
                    }
                }
            }

            if($b > $media && $c > $media){
                $prob = ($probC - $probB)*100;
            }
            if($b < $media && $c > $media){
                $prob = ($probB + $probC)*100;
            }
            if($b < $media && $c < $media){
                $prob = ($probB - $probC)*100;
            }
            if($b == $media && $c > $media){
                $prob = $probC * 100;
            }
            if($b < $media && $c == $media){
                $prob = $probB*100;
            }

        }
        if($med == 'menor'){
            $a = $_POST['a'];
            $z = number_format(($a - $media)/$dp, 2, '.', ',');
            // echo $z."<br>";
            // echo number_format($z, 2, '.', ',')."<br>";
            if($a > $media){
                $split = str_split($z);
                if($z < 0){
                    $hor = $split[1].'.'.$split[3];
                    if(isset($split[4])){
                        $ver = $split[4];
                    }else{
                        $ver = 0;
                    }
                }else{
                    $hor = $split[0].'.'.$split[2];
                    if(isset($split[3])){
                        $ver = $split[3];
                    }else{
                        $ver = 0;
                    }
                }
                // echo $hor;
                $hor = $hor*10;
                for($i = 0; $i < sizeof($tabela); $i++){
                    if($i == $ver){
                        for($j = 0; $j < sizeof($tabela[$i]); $j++){
                            if($j == $hor){
                                // echo $tabela[$i][$j];
                                // echo 
                                $prob = (0.5 + $tabela[$i][$j])*100;
                                //echo $prob."%";
                            }
                        }
                    }
                }
            }else if($a < $media){
                $split = str_split($z);
                if($z < 0){
                    $hor = $split[1].'.'.$split[3];
                    if(isset($split[4])){
                        $ver = $split[4];
                    }else{
                        $ver = 0;
                    }
                }else{
                    $hor = $split[0].'.'.$split[2];
                    if(isset($split[3])){
                        $ver = $split[3];
                    }else{
                        $ver = 0;
                    }
                }
                
                // echo $hor;
                $hor = $hor*10;
                
                // echo $hor;
                for($i = 0; $i < sizeof($tabela); $i++){
                    if($i == $ver){
                        for($j = 0; $j < sizeof($tabela[$i]); $j++){
                            if($j == $hor){
                                // echo $tabela[$i][$j];
                                $prob = (0.5 - $tabela[$i][$j])*100;
                                //echo $prob."%";
                            }
                        }
                    }
                }
            }
        }
    }else{
        header("Location: ./../dist_normal.php");
    }
    
?>
<!DOCTYPE html>
<html lang="pt-br" style="overflow: auto !important">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="./../../css/index.css">
        <link rel="stylesheet" href="./../../css/descritiva.css">
        <link rel="stylesheet" href="./../../css/animate.css">
        <link rel="stylesheet" href="./../../photon/dist/css/photon.min.css">
        <link rel="stylesheet" href="./../../css/tabela.css">
        <link rel="stylesheet" href="./../../node_modules/chart.js/dist/Chart.css">
        
        <title>Programa de Estatistica</title>
    </head>
    <body>
        <?php
            include("./../inc.descritiva/navbarD.php");
        ?>
        <div class="container-geral" onclick="menuFecha()">
            <section class="area-result">
                <div class="table-result">
                    <h1 class="title-table">Resultado</h1>
                    <?php
                        echo '<div class="area-result-contas">';
                        echo '<div class="results">';
                        echo '<h3> '. $prob .'% </h3>';
                        echo '</div>';
                        echo '</div>';
                    ?>
                </div>
                
            </section>
            <footer class="footer">
                <h3>SoftXD - Daniel</h3>
            </footer>
        </div>
    </body>
    <script src="./../../js/jquery/jquery-3.4.1.slim.min.js"></script>
    <script src="./../../js/efeitos.js"></script>
    <script src="./../../js/nav.js"></script>
    <script src="./../inc.descritiva/menu.js"></script>
    <script src="./../../node_modules/chart.js/dist/Chart.js"></script>
    <script src="./../../js/js.js"></script>
</html>