<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container flex">

    <!-- TradingView Widget BEGIN -->
  <div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <script type="text/javascript"
      src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
      {
        "interval": "1m",
        "width": "720",
        "isTransparent": false,
        "height": "435",
        "symbol": "KRAKEN:ALGOUSD",
        "showIntervalTabs": true,
        "locale": "fr",
        "colorTheme": "light"
      }
    </script>
  </div>
  <div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <script type="text/javascript"
      src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
      {
        "interval": "1m",
        "width": "720",
        "isTransparent": false,
        "height": "435",
        "symbol": "KRAKEN:FILUSD",
        "showIntervalTabs": true,
        "locale": "fr",
        "colorTheme": "light"
      }
    </script>
  </div>
</div>
  <!-- TradingView Widget END -->
  <footer>
    <div class="tradingview-widget-copyright"><a href="https://fr.tradingview.com/symbols/ALGOUSD/technicals/"
    rel="noopener" target="_blank"><span class="blue-text"> Analyse technique pour ALGOUSD</span></a> par
    TradingView</div>
  </footer>
</body>

</html>