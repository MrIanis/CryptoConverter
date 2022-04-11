<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>CrytpoConverter</title>
</head>

<body>
    <header><img class="logo" src="img/LogoHeader.jpeg" alt="cryptoconverter"></header>

    <!--Form converter-->


    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Convertir</h3>
                    </div>
                    <div class="card-body">
                        <form action="index.php" method="post">
                            <div class="form-group">
                                <label for="crypto">Crypto</label>
                                <select name="crypto" id="crypto" class="form-control">
                                    <option value="BTC">Bitcoin</option>
                                    <option value="ETH">Ethereum</option>
                                    <option value="XRP">Ripple</option>
                                    <option value="BCH">Bitcoin Cash</option>
                                    <option value="LTC">Litecoin</option>
                                    <option value="XLM">Stellar</option>
                                    <option value="ADA">Cardano</option>
                                    <option value="XMR">Monero</option>
                                    <option value="DASH">Dash</option>
                                    <option value="EOS">EOS</option>
                                    <option value="NEO">NEO</option>
                                    <option value="XEM">NEM</option>
                                    <option value="MIOTA">IOTA</option>
                                    <option value="TRX">TRON</option>
                                    <option value="ETC">Ethereum Classic</option>
                                    <option value="LSK">Lisk</option>
                                    <option value="XVG">Verge</option>
                                    <option value="OMG">OmiseGO</option>
                                    <option value="BTG">Bitcoin Gold</option>
                                    <option value="ZEC">Zcash</option>
                                    <option value="QTUM">Qtum</option>
                                    <option value="DOGE">Dogecoin</option>
                                    <option value="BCN">Bytecoin</option>
                                    <option value="ZRX">0x</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="devise">Devise</label>
                                <select name="devise" id="devise" class="form-control">
                                    <option value="EUR">Euro</option>
                                    <option value="USD">Dollar</option>
                                    <option value="GBP">Livre sterling</option>
                                    <option value="AUD">Dollar australien</option>
                                    <option value="CAD">Dollar canadien</option>
                                    <option value="CHF">Franc suisse</option>
                                    <option value="JPY">Yen</option>
                                    <option value="CNY">Yuan renminbi</option>
                                    <option value="NZD">Dollar néo-zélandais</option>
                                    <option value="SGD">Dollar de Singapour</option>
                                    <option value="SEK">Couronne suédoise</option>
                                    <option value="PLN">Zloty</option>
                                    <option value="NOK">Couronne norvégienne</option>
                                    <option value="KRW">Won</option>
                                    <option value="TRY">Lira turque</option>
                                    <option value="RUB">Rouble</option>
                                    <option value="INR">Roupie indienne</option>
                                    <option value="BRL">Real</option>
                                    <option value="ZAR">Rand</option>
                                    <option value="MYR">Ringgit</option>
                                    <option value="PHP">Peso philippin</option>
                                    <option value="IDR">Rupiah</option>
                                    <option value="THB">Baht</option>
                                    <option value="VND">Dong</option>
                                    <option value="MXN">Peso mexicain</option>
                                    <option value="CZK">Couronne tchèque</option>
                                    <option value="HUF">Forint</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="montant">Montant</label>
                                <input type="text" name="montant" id="montant" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Convertir</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Résultat</h3>
                    </div>
                    <div class="card-body">
                        <?php
                            if(isset($_POST['crypto']) && isset($_POST['devise']) && isset($_POST['montant'])){
                                $crypto = $_POST['crypto'];
                                $devise = $_POST['devise'];
                                $montant = $_POST['montant'];
                                $url = "https://min-api.cryptocompare.com/data/price?fsym=".$crypto."&tsyms=".$devise;
                                $json = file_get_contents($url);
                                $data = json_decode($json, true);
                                $resultat = $data[$devise] * $montant;
                                echo $montant." ".$crypto." = ".$resultat." ".$devise;
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>