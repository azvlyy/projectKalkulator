<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">

    <title>Program Kalkulator</title>
  </head>
  <body>
    
        <?php
        $btn1 = [7,8,9];
        $btnplus = ['+'];
        $btn2 = [4,5,6];
        $btnmin = ['-'];
        $btn3 = [1,2,3];
        $btnkali = ['x'];
        $btn0 = [0];
        $btnkoma = ['.'];
        $btnbagi = ['÷'];
        $btnc = ['C'];
        $btnsamadgn = ['='];
        $tombol='';

        if(isset($_POST['tombol']) && in_array($_POST['tombol'],$btn1)){
            $tombol=$_POST['tombol'];
        }
        if(isset($_POST['tombol']) && in_array($_POST['tombol'],$btn2)){
            $tombol=$_POST['tombol'];
        }
        if(isset($_POST['tombol']) && in_array($_POST['tombol'],$btn3)){
            $tombol=$_POST['tombol'];
        }
        if(isset($_POST['tombol']) && in_array($_POST['tombol'],$btn0)){
            $tombol=$_POST['tombol'];
        }
        if(isset($_POST['tombol']) && in_array($_POST['tombol'],$btnplus)){
            $tombol=$_POST['tombol'];
        }
        if(isset($_POST['tombol']) && in_array($_POST['tombol'],$btnmin)){
            $tombol=$_POST['tombol'];
        }
        if(isset($_POST['tombol']) && in_array($_POST['tombol'],$btnkali)){
            $tombol=$_POST['tombol'];
        }
        if(isset($_POST['tombol']) && in_array($_POST['tombol'],$btnkoma)){
            $tombol=$_POST['tombol'];
        }
        if(isset($_POST['tombol']) && in_array($_POST['tombol'],$btnbagi)){
            $tombol=$_POST['tombol'];
        }
        if(isset($_POST['tombol']) && in_array($_POST['tombol'],$btnsamadgn)){
            $tombol=$_POST['tombol'];
        }

        $hitungan='';
        if(isset($_POST['hitungan']) && preg_match('~^(?:[\d.]+[* /+-]?)+$~',$_POST['hitungan'],$out)){
            $hitungan=$out[0];    
        }
        $tampilan=$hitungan.$tombol;
        
        if($tombol =='C'){
            $tampilan ='';
        }elseif($tombol =='=' && preg_match('~^\d*\.?\d+(?:[*/+-]\d*\.?\d+)*$~',$hitungan)){
            $tampilan.=eval("return $hitungan;");
        }


        echo "<form method='POST'>";
            echo "<div class='card'>";
                echo "<div class='card-body'>";
                    echo "<input class='inpt' type='text' name='hitungan' value='$tampilan' placeholder='0'";
                    echo "<div class='card-number'>";
                    
                        foreach(array_chunk($btn1,4) as $chunk){
                            
                            foreach($chunk as $button){
                                echo "<button ",(sizeof($chunk)!=4?" ":"")," name='tombol' value='$button' class='butn-angka'>$button</button>";
                            }
                            
                        }
                        foreach(array_chunk($btnplus,1) as $chunk){
                            
                            foreach($chunk as $button){
                                echo "<button ",(sizeof($chunk)!=4?" ":"")," name='tombol' value='$button' class='butn-operator'>$button</button>";
                            }
                            
                        }

                        foreach(array_chunk($btn2,4) as $chunk){
                            
                            foreach($chunk as $button){
                                echo "<button ",(sizeof($chunk)!=4?" ":"")," name='tombol' value='$button' class='butn-angka'>$button</button>";
                            }
                            
                        }

                        foreach(array_chunk($btnmin,1) as $chunk){
                            
                            foreach($chunk as $button){
                                echo "<button ",(sizeof($chunk)!=4?" ":"")," name='tombol' value='$button' class='butn-operator'>$button</button>";
                            }
                            
                        }

                        foreach(array_chunk($btn3,4) as $chunk){
                            
                            foreach($chunk as $button){
                                echo "<button ",(sizeof($chunk)!=4?" ":"")," name='tombol' value='$button' class='butn-angka'>$button</button>";
                            }
                            
                        }

                        foreach(array_chunk($btnkali,1) as $chunk){
                            
                            foreach($chunk as $button){
                                echo "<button ",(sizeof($chunk)!=4?" ":"")," name='tombol' value='$button' class='butn-operator'>$button</button>";
                            }
                            
                        }

                        foreach(array_chunk($btn0,1) as $chunk){
                            
                            foreach($chunk as $button){
                                echo "<button ",(sizeof($chunk)!=4?" ":"")," name='tombol' value='$button' class='butn-angka'>$button</button>";
                            }
                            
                        }

                        foreach(array_chunk($btnkoma,1) as $chunk){
                            
                            foreach($chunk as $button){
                                echo "<button ",(sizeof($chunk)!=4?" ":"")," name='tombol' value='$button' class='butn-operator'>$button</button>";
                            }
                            
                        }

                        foreach(array_chunk($btnbagi,1) as $chunk){
                            
                            foreach($chunk as $button){
                                echo "<button ",(sizeof($chunk)!=4?" ":"")," name='tombol' value='$button' class='butn-operator'>$button</button>";
                            }
                            
                        }

                        foreach(array_chunk($btnsamadgn,1) as $chunk){
                            
                            foreach($chunk as $button){
                                echo "<button ",(sizeof($chunk)!=1?" ":"")," name='tombol' value='$button' class='butn-sama'>$button</button>";
                            }
                            
                        }

                        foreach($btnc as $clear){
                            echo "<button name='tombol' value='$clear' class='butn-clear'>$clear</button>";
                        }   
                    
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        echo "</form>";
        ?>

    <section class="home">
        <div class="home-content">
            <h1>Program Kalkulator</h1>
        </div>
    </section>

  </body>
</html>