<html>
  <body>
    <h1>Welcome</h1>
    <div id="output"></div>
    <script>
      var param = new URLSearchParams(window.location.search);
      document.getElementById('output').innerHTML = param.get("name");
    </script>
  </body>
</html>
