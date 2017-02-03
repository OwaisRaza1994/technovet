<html>
  <head>
    <script src="dum.js"></script>
    <script src="jquery.js"></script>
    <script>
      $(function () {
        $('#submit').bind('click', function (event) {

          event.preventDefault();

          $.ajax({
            type: 'POST',
            url: 'post.php',
            data: $('form').serialize(),
            success: function () {
            alert('form was submitted');

            }
          });
        });
      });
      </script> 
  </head>
  <body>
    <form>
      <input name="fname" placeholder="FIRST NAME"><br>
      <input name="lname" placeholder="LAST NAME"><br>
      <input name="submit" id="submit" type="submit" value="Submit" >
      <input type="button" onclick="showUser()" value="button"></input>
    </form>
      <div id="txtHint"></div>
  
  </body>
</html>
