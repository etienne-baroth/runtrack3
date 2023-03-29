<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script
      src="https://code.jquery.com/jquery-3.6.4.min.js"
      integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
      crossorigin="anonymous"
    ></script>
  </head>
  <body>

      <div class="mix">
        <img src="arc1.png" alt="" id="arc1">
        <img src="arc2.png" alt="" id="arc2">
        <img src="arc3.png" alt="" id="arc3">
        <img src="arc4.png" alt="" id="arc4">
        <img src="arc5.png" alt="" id="arc5">
        <img src="arc6.png" alt="" id="arc6">
      </div>
    <button class="btn">Mélanger</button>

    <script>
      $(document).ready(function () {

        $('.btn').on('click', function() {
          const mix = $('mix').find(img)
          img.sort()
        })

      })
    </script>
  </body>
</html>
