<!DOCTYPE html>
<html>

<head>
    <title>Theatre Layout</title>
    <link rel="stylesheet" href="theatre.css">
</head>

<body>
    <script src="theatre.js" type="text/javascript"></script>
    <div class="topnav">
        <div class="container">
            <span class="text">
                <br>
                <div class="moviename"> 
<?php
// establish database connection
            $conn = mysqli_connect("localhost", "root", "", "cinebuzz1");

// execute query
            $result = mysqli_query($conn, "SELECT mname FROM temp_ticket");
// retrieve data
            $product = mysqli_fetch_assoc($result);
// display data
            echo "" . $product['mname'] . "";
?>
</div>
<div class="theatredetails">       
<?php
// establish database connection
            $conn = mysqli_connect("localhost", "root", "", "cinebuzz1");

// execute query
            $result = mysqli_query($conn, "SELECT tname,stime FROM temp_ticket");
// retrieve data
            $product = mysqli_fetch_assoc($result);
// display data
            echo "" . $product['tname'] . " , "  .$product['stime'];
            mysqli_close($conn);
            if(headers_sent()){
                header_remove();
            }          
?>
</span>       
</div>
</div>
</div>
    <hr class="new5">
    
    <form action="theatre.php" method="post" enctype="multipart/form-data">
        <div class="theatre-screen">
        <div class="price">price per seat : 240<br><br></div>
            <div class="arrangement">
            
            <br><br>
                <div class="row">A</div>
                <div><span class="tab"></span></div>
                <div><span class="tab"></span></div>
                <div><span class="tab"></span></div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-A1" class="checkbox" value="A1">
                    <label for="checkbox-A1" class="checkbox-label">1</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-A2" class="checkbox" value="A2">
                    <label for="checkbox-A2" class="checkbox-label">2</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-A3" class="checkbox" value="A3">
                    <label for="checkbox-A3" class="checkbox-label">3</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-A4" class="checkbox" value="A4">
                    <label for="checkbox-A4" class="checkbox-label">4</label>
                </div>
                <div><span class="tab"></span></div>
                <div><span class="tab"></span></div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-A5" class="checkbox" value="A5">
                    <label for="checkbox-A5" class="checkbox-label">5</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-A6" class="checkbox" value="A6">
                    <label for="checkbox-A6" class="checkbox-label">6</label>
                </div>
                
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-A7" class="checkbox" value="A7">
                    <label for="checkbox-A7" class="checkbox-label">7</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-A8" class="checkbox" value="A8">
                    <label for="checkbox-A8" class="checkbox-label">8</label>
                </div>
                
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-A9" class="checkbox" value="A9">
                    <label for="checkbox-A9" class="checkbox-label">9</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-A10" class="checkbox" value="A10">
                    <label for="checkbox-A10" class="checkbox-label">10</label>
                </div>
                <div><span class="tab"></span></div>
                <div><span class="tab"></span></div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-A11" class="checkbox" value="A11">
                    <label for="checkbox-A11" class="checkbox-label">11</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-A12" class="checkbox" value="A12">
                    <label for="checkbox-A12" class="checkbox-label">12</label>
                </div>
                
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-A13" class="checkbox" value="A13">
                    <label for="checkbox-A13" class="checkbox-label">13</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-A14" class="checkbox" value="A14">
                    <label for="checkbox-A14" class="checkbox-label">14</label>
                </div>
            </div>
            <div class="arrangement1">
                <div class="row">B</div>
                <div><span class="tab"></span></div>
                <div><span class="tab"></span></div>
                <div><span class="tab"></span></div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-B1" class="checkbox" value="B1">
                    <label for="checkbox-B1" class="checkbox-label">1</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-B2" class="checkbox" value="B2">
                    <label for="checkbox-B2" class="checkbox-label">2</label>
                </div>
                
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-B3" class="checkbox" value="B3">
                    <label for="checkbox-B3" class="checkbox-label">3</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-B4" class="checkbox" value="B4">
                    <label for="checkbox-B4" class="checkbox-label">4</label>
                </div>
                <div><span class="tab"></span></div>
                <div><span class="tab"></span></div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-B5" class="checkbox" value="B5">
                    <label for="checkbox-B5" class="checkbox-label">5</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-B6" class="checkbox" value="B6">
                    <label for="checkbox-B6" class="checkbox-label">6</label>
                </div>
                
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-B7" class="checkbox" value="B7">
                    <label for="checkbox-B7" class="checkbox-label">7</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-B8" class="checkbox" value="B8">
                    <label for="checkbox-B8" class="checkbox-label">8</label>
                </div>
                
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-B9" class="checkbox" value="B9">
                    <label for="checkbox-B9" class="checkbox-label">9</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-B10" class="checkbox" value="B10">
                    <label for="checkbox-B10" class="checkbox-label">10</label>
                </div>
                <div><span class="tab"></span></div>
                <div><span class="tab"></span></div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-B11" class="checkbox" value="B11">
                    <label for="checkbox-B11" class="checkbox-label">11</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-B12" class="checkbox" value="B12">
                    <label for="checkbox-B12" class="checkbox-label">12</label>
                </div>
                
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-B13" class="checkbox" value="B13">
                    <label for="checkbox-B13" class="checkbox-label">13</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-B14" class="checkbox" value="B14">
                    <label for="checkbox-B14" class="checkbox-label">14</label>
                </div>
            </div>
            <div class="arrangement1">
                <div class="row">C</div>
                <div><span class="tab"></span></div>
                <div><span class="tab"></span></div>
                <div><span class="tab"></span></div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-C1" class="checkbox" value="C1">
                    <label for="checkbox-C1" class="checkbox-label">1</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-C2" class="checkbox" value="C2">
                    <label for="checkbox-C2" class="checkbox-label">2</label>
                </div>
                
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-C3" class="checkbox" value="C3">
                    <label for="checkbox-C3" class="checkbox-label">3</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-C4" class="checkbox" value="C4">
                    <label for="checkbox-C4" class="checkbox-label">4</label>
                </div>
                <div><span class="tab"></span></div>
                <div><span class="tab"></span></div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-C5" class="checkbox" value="C5">
                    <label for="checkbox-C5" class="checkbox-label">5</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-C6" class="checkbox" value="C6">
                    <label for="checkbox-C6" class="checkbox-label">6</label>
                </div>
                
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-C7" class="checkbox" value="C7">
                    <label for="checkbox-C7" class="checkbox-label">7</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-C8" class="checkbox" value="C8">
                    <label for="checkbox-C8" class="checkbox-label">8</label>
                </div>
                
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-C9" class="checkbox" value="C9">
                    <label for="checkbox-C9" class="checkbox-label">9</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-C10" class="checkbox" value="C10">
                    <label for="checkbox-C10" class="checkbox-label">10</label>
                </div>
                <div><span class="tab"></span></div>
                <div><span class="tab"></span></div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-C11" class="checkbox" value="C11">
                    <label for="checkbox-C11" class="checkbox-label">11</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-C12" class="checkbox" value="C12">
                    <label for="checkbox-C12" class="checkbox-label">12</label>
                </div>
                
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-C13" class="checkbox" value="C13">
                    <label for="checkbox-C13" class="checkbox-label">13</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-C14" class="checkbox" value="C14">
                    <label for="checkbox-C14" class="checkbox-label">14</label>
                </div>
            </div>
            <div class="arrangement1">
                <div class="row">D</div>
                <div><span class="tab"></span></div>
                <div><span class="tab"></span></div>
                <div><span class="tab"></span></div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-D1" class="checkbox" value="D1">
                    <label for="checkbox-D1" class="checkbox-label">1</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-D2" class="checkbox" value="D2">
                    <label for="checkbox-D2" class="checkbox-label">2</label>
                </div>
                
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-D3" class="checkbox" value="D3">
                    <label for="checkbox-D3" class="checkbox-label">3</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-D4" class="checkbox" value="D4">
                    <label for="checkbox-D4" class="checkbox-label">4</label>
                </div>
                <div><span class="tab"></span></div>
                <div><span class="tab"></span></div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-D5" class="checkbox" value="D5">
                    <label for="checkbox-D5" class="checkbox-label">5</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-D6" class="checkbox" value="D6">
                    <label for="checkbox-D6" class="checkbox-label">6</label>
                </div>
                
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-D7" class="checkbox" value="D7">
                    <label for="checkbox-D7" class="checkbox-label">7</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-D8" class="checkbox" value="D8">
                    <label for="checkbox-D8" class="checkbox-label">8</label>
                </div>
                
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-D9" class="checkbox" value="D9">
                    <label for="checkbox-D9" class="checkbox-label">9</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-D10" class="checkbox" value="D10">
                    <label for="checkbox-D10" class="checkbox-label">10</label>
                </div>
                <div><span class="tab"></span></div>
                <div><span class="tab"></span></div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-D11" class="checkbox" value="D11">
                    <label for="checkbox-D11" class="checkbox-label">11</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-D12" class="checkbox" value="D12">
                    <label for="checkbox-D12" class="checkbox-label">12</label>
                </div>
                
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-D13" class="checkbox" value="D13">
                    <label for="checkbox-D13" class="checkbox-label">13</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-D14" class="checkbox" value="D14">
                    <label for="checkbox-D14" class="checkbox-label">14</label>
                </div>
            </div>
            <div class="arrangement1">
                <div class="row">E</div>
                <div><span class="tab"></span></div>
                <div><span class="tab"></span></div>
                <div><span class="tab"></span></div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-E1" class="checkbox" value="E1">
                    <label for="checkbox-E1" class="checkbox-label">1</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-E2" class="checkbox" value="E2">
                    <label for="checkbox-E2" class="checkbox-label">2</label>
                </div>
                
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-E3" class="checkbox" value="E3">
                    <label for="checkbox-E3" class="checkbox-label">3</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-E4" class="checkbox" value="E4">
                    <label for="checkbox-E4" class="checkbox-label">4</label>
                </div>
                <div><span class="tab"></span></div>
                <div><span class="tab"></span></div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-E5" class="checkbox" value="E5">
                    <label for="checkbox-E5" class="checkbox-label">5</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-E6" class="checkbox" value="E6">
                    <label for="checkbox-E6" class="checkbox-label">6</label>
                </div>
                
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-E7" class="checkbox" value="E7">
                    <label for="checkbox-E7" class="checkbox-label">7</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-E8" class="checkbox" value="E8">
                    <label for="checkbox-E8" class="checkbox-label">8</label>
                </div>
                
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-E9" class="checkbox" value="E9">
                    <label for="checkbox-E9" class="checkbox-label">9</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-E10" class="checkbox" value="E10">
                    <label for="checkbox-E10" class="checkbox-label">10</label>
                </div>
                <div><span class="tab"></span></div>
                <div><span class="tab"></span></div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-E11" class="checkbox" value="E11">
                    <label for="checkbox-E11" class="checkbox-label">11</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-E12" class="checkbox" value="E12">
                    <label for="checkbox-E12" class="checkbox-label">12</label>
                </div>
                
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-E13" class="checkbox" value="E13">
                    <label for="checkbox-E13" class="checkbox-label">13</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-E14" class="checkbox" value="E14">
                    <label for="checkbox-E14" class="checkbox-label">14</label>
                </div>
            </div>
            <div class="arrangement1">
                <div class="row">F</div>
                <div><span class="tab"></span></div>
                <div><span class="tab"></span></div>
                <div><span class="tab"></span></div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-F1" class="checkbox" value="F1">
                    <label for="checkbox-F1" class="checkbox-label">1</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-F2" class="checkbox" value="F2">
                    <label for="checkbox-F2" class="checkbox-label">2</label>
                </div>
                
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-F3" class="checkbox" value="F3">
                    <label for="checkbox-F3" class="checkbox-label">3</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-F4" class="checkbox" value="F4">
                    <label for="checkbox-F4" class="checkbox-label">4</label>
                </div>
                <div><span class="tab"></span></div>
                <div><span class="tab"></span></div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-F5" class="checkbox" value="F5">
                    <label for="checkbox-F5" class="checkbox-label">5</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-F6" class="checkbox" value="F6">
                    <label for="checkbox-F6" class="checkbox-label">6</label>
                </div>
                
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-F7" class="checkbox" value="F7">
                    <label for="checkbox-F7" class="checkbox-label">7</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-F8" class="checkbox" value="F8">
                    <label for="checkbox-F8" class="checkbox-label">8</label>
                </div>
                
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-F9" class="checkbox" value="F9">
                    <label for="checkbox-F9" class="checkbox-label">9</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-F10" class="checkbox" value="F10">
                    <label for="checkbox-F10" class="checkbox-label">10</label>
                </div>
                <div>
                    <span class="tab"> </span>
                </div>
                <div><span class="tab"></span></div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-F11" class="checkbox" value="F11">
                    <label for="checkbox-F11" class="checkbox-label">11</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-F12" class="checkbox" value="F12">
                    <label for="checkbox-F12" class="checkbox-label">12</label>
                </div>
                
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-F13" class="checkbox" value="F13">
                    <label for="checkbox-F13" class="checkbox-label">13</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-F14" class="checkbox" value="F14">
                    <label for="checkbox-F14" class="checkbox-label">14</label>
                </div>
            </div>
            <div class="arrangement1">
                <div class="row">G</div>
                <div><span class="tab"></span></div>
                <div><span class="tab"></span></div>
                <div><span class="tab"></span></div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-G1" class="checkbox" value="G1">
                    <label for="checkbox-G1" class="checkbox-label">1</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-G2" class="checkbox" value="G2">
                    <label for="checkbox-G2" class="checkbox-label">2</label>
                </div>
                
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-G3" class="checkbox" value="G3">
                    <label for="checkbox-G3" class="checkbox-label">3</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-G4" class="checkbox" value="G4">
                    <label for="checkbox-G4" class="checkbox-label">4</label>
                </div>
                <div><span class="tab"></span></div>
                <div><span class="tab"></span></div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-G5" class="checkbox" value="G5">
                    <label for="checkbox-G5" class="checkbox-label">5</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-G6" class="checkbox" value="G6">
                    <label for="checkbox-G6" class="checkbox-label">6</label>
                </div>
                
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-G7" class="checkbox" value="G7">
                    <label for="checkbox-G7" class="checkbox-label">7</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-G8" class="checkbox" value="G8">
                    <label for="checkbox-G8" class="checkbox-label">8</label>
                </div>
                
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-G9" class="checkbox" value="G9">
                    <label for="checkbox-G9" class="checkbox-label">9</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-G10" class="checkbox" value="G10">
                    <label for="checkbox-G10" class="checkbox-label">10</label>
                </div>
                <div><span class="tab"></span></div>
                <div><span class="tab"></span></div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-G11" class="checkbox" value="G11">
                    <label for="checkbox-G11" class="checkbox-label">11</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-G12" class="checkbox" value="G12">
                    <label for="checkbox-G12" class="checkbox-label">12</label>
                </div>
                
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-G13" class="checkbox" value="G13">
                    <label for="checkbox-G13" class="checkbox-label">13</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-G14" class="checkbox" value="G14">
                    <label for="checkbox-G14" class="checkbox-label">14</label>
                </div>
            </div>
            <div class="arrangement1">
                <div class="row">H</div>
                <div><span class="tab"></span></div>
                <div><span class="tab"></span></div>
                <div><span class="tab"></span></div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-H1" class="checkbox" value="H1">
                    <label for="checkbox-H1" class="checkbox-label">1</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-H2" class="checkbox" value="H2">
                    <label for="checkbox-H2" class="checkbox-label">2</label>
                </div>
                
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-H3" class="checkbox" value="H3">
                    <label for="checkbox-H3" class="checkbox-label">3</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-H4" class="checkbox" value="H4">
                    <label for="checkbox-H4" class="checkbox-label">4</label>
                </div>
                <div><span class="tab"></span></div>
                <div><span class="tab"></span></div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-H5" class="checkbox" value="H5">
                    <label for="checkbox-H5" class="checkbox-label">5</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-H6" class="checkbox" value="H6">
                    <label for="checkbox-H6" class="checkbox-label">6</label>
                </div>
                
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-H7" class="checkbox" value="H7">
                    <label for="checkbox-H7" class="checkbox-label">7</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-H8" class="checkbox" value="H8">
                    <label for="checkbox-H8" class="checkbox-label">8</label>
                </div>
                
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-H9" class="checkbox" value="H9">
                    <label for="checkbox-H9" class="checkbox-label">9</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-H10" class="checkbox" value="H10">
                    <label for="checkbox-H10" class="checkbox-label">10</label>
                </div>
                <div><span class="tab"></span></div>
                <div><span class="tab"></span></div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-H11" class="checkbox" value="H11">
                    <label for="checkbox-H11" class="checkbox-label">11</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-H12" class="checkbox" value="H12">
                    <label for="checkbox-H12" class="checkbox-label">12</label>
                </div>
                
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-H13" class="checkbox" value="H13">
                    <label for="checkbox-H13" class="checkbox-label">13</label>
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" name="seat[]" id="checkbox-H14" class="checkbox" value="H14">
                    <label for="checkbox-H14" class="checkbox-label">14</label>
                </div>
            </div>
        </div>
        <div class="image">
        <img src="ss.jpg" class="screen">
            <BR>
        <button type="submit" value="submit"  name="submit"  name="submit" class="confirm-btn">CONFIRM SEATS</button>
        </div>
    </form>
<?php ob_start(); ?>

<?php
ob_start();
// Start the PHP session and set the error reporting level
error_reporting(E_ALL ^ E_WARNING);
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Tell PHP to log errors
ini_set('log_errors', 'On');

// Tell PHP to not display errors
ini_set('display_errors', 'Off');

// Set error_reporting to E_ALL
ini_set('error_reporting', E_ALL );

// Connect to the database
$username = "root";
$password = "";
$dbname = "cinebuzz1";
$conn = mysqli_connect("localhost", $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
// Process the form data
@$checkbox1 = $_POST['seat'];
$chk = "";
foreach (@$checkbox1 as $chk1) {
    $chk .= $chk1 . ",";
}

$sql = "INSERT INTO `ticket` (`seats`) VALUES('$chk')";
$sql2 = "UPDATE temp_ticket SET seat ='$chk' WHERE mname IS NOT NULL";
$sql3="UPDATE temp_ticket
SET seat_no = (SELECT COUNT(DISTINCT SUBSTRING_INDEX(seat, ',', n)) 
                    FROM temp_ticket 
                    CROSS JOIN (SELECT 1 n UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9 UNION ALL SELECT 10 ) m
                    WHERE n <= + LENGTH(seat) - LENGTH(REPLACE(seat, ',', '')))
";
$sql4="UPDATE temp_ticket SET total_price = seat_no * 240";

$query2 = mysqli_query($conn, $sql2);
$query = mysqli_query($conn, $sql);
$query3=mysqli_query($conn,$sql3);
$query4=mysqli_query($conn,$sql4);


echo '<script>window.location.href = "/cinebuzz/login/session/movie details/ticket/ticket.php";</script>';
// Close the database connection
mysqli_close($conn);
exit;
}
?>


</body>

</html>