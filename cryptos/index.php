<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cryptos</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container flex">
<?php
$i      = 0;
$tokens = ['ALGOUSD', 'BTCUSD', 'COMPUSD', 'XDGUSD', 'DOTUSD', 'FILUSD', 'GNOUSD', 'KSMUSD', 'ZECUSD'];
foreach ($tokens as $tk) {
  ++$i;
  $tk = 'KRAKEN:'.$tk;
}
  ?>


 
  <footer>
    <div class="tradingview-widget-copyright"><a href="https://fr.tradingview.com/symbols/ALGOUSD/technicals/"
    rel="noopener" target="_blank"><span class="blue-text"> Analyse technique pour tokens</span></a> par
    TradingView</div>
  </footer>
</body>

</html>