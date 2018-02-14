<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form test</title>
</head>
<body style="background: #BEF9EA;">
Hello
  <?php if (isset($_GET['submitted'])) { ?>
    <h1>The server had accepted:</h1>
    <p>radio: <?php echo htmlspecialchars($_GET['radio']); ?></p>
    <p style="color:red;font-weight: bold;">text: <?php echo htmlspecialchars($_GET['text1']); ?></p>
    
    <p style="color:red;font-weight: bold;">text2: <?php echo htmlspecialchars($_GET['text2']); ?></p>


    <p>form: <?php echo htmlspecialchars($_GET['sad']); ?></p>
    <div style="height: 100px;width: 100px; background-color:<?php echo htmlspecialchars($_GET['sad']); ?>"></div>
    <p>Try again? <a href="/index.php">Yes!</a></p>
  <?php } ?>

  <?php if (!isset($_GET['submitted'])) { ?>
  
  <h1>Play with the HTML form</h1>
  <form action="/index.php">
    <input type="hidden" name="submitted" value="yes">
    <p>
      <input id="my-text" type="text" required maxlength="5" placeholder="Введите однострочный текст" name="text1"><br>
      <label for="my-radio-yes">radio Yes: </label>
      <input id="my-radio-yes" name="radio" type="radio" required value="Yes">
      <label for="my-radio-no">radio No: </label>
      <input id="my-radio-no" name="radio" type="radio" required value="No"></p>
      <textarea id="my-textarea" style="resize:none" placeholder="Введите многострочный текст" name="text2"></textarea><br>
      <label for="my-color">color: </label>       <input id="my-color" type="color" name="sad"><br><br>
    <br>
    <input type="submit" value="Submit">
    <input type="reset" value="Clear">
  </form>

  <?php } ?>

</body>
</html>