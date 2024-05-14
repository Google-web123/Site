<?php include 'mail.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <!-- Linking CSS file -->
 <link rel="stylesheet" href="style.css">
 <title>Document</title>
</head>

<body>
 <div class="container">


  <form method="post" class="form" enctype="multipart/form-data">
   <div class="heading">
    <h2>Contact Form
     <h2 />
   </div>

   <div class="formGroup">
    <input type="text" name="name" id="name" placeholder="Name" autocomplete="off" value="<?php echo !empty($postData['name']) ? $postData['name'] : ''; ?>" required="">
   </div>

   <div class="formGroup">
    <input type="email" name="email" id="email" placeholder="Email ID" autocomplete="off" value="<?php echo !empty($postData['email']) ? $postData['email'] : ''; ?>" required="">
   </div>

   <div class="formGroup">
    <input type="text" name="subject" placeholder="Subject" autocomplete="off" value="<?php echo !empty($postData['subject']) ? $postData['subject'] : ''; ?>" required="">
   </div>

   <div class="formGroup">
    <input type="text" name="message" placeholder="Your Message" autocomplete="off" <?php echo !empty($postData['message']) ? $postData['message'] : ''; ?> required="">
   </div>

   <div class="formGroup">
    <input type="file" name="attachment" class="form-control" multiple>
   </div>

   <!-- Display submission status -->
   <div class="status">
    <?php if (!empty($statusMsg)) { ?>
     <p class="statusMsg <?php echo !empty($msgClass) ? $msgClass : ''; ?>">
      <?php echo $statusMsg; ?></p>
    <?php } ?>
   </div>

   <div class="formGroup">
    <button class="btn2" name="submit" value="SUBMIT" type="submit">SUBMIT </button>
   </div>

   <form />
 </div>
<style> *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
/* adding background image */
body{
  font-family: Arial, Helvetica, sans-serif;
}
/* Center content vertically and horizontally */
.container{
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}
.form{
  width: 350px;
  height: 460px;
  background-color: white;
  box-shadow: 0 5px 30px black;
}
.heading h2{
  padding: 3px;
  margin: 30px 0px 10px 30px;
  border-style: none;
  background-color: transparent;
  color: black;
  font-size: 20px;
  font-weight: 600;
}
.formGroup{
  display: flex;
  justify-content: center;
}
.formGroup input{
  border: none;
  width: 80%;
  padding: 7px;
  margin-bottom: 15px;
  background-color: transparent;
  border-bottom: 2px solid rgb(68, 68, 68);
  color: black;
  font-weight: bold;
  font-size: 14px;
}

input:focus{
  outline: none;
  font-size: 17px;
  background-color: transparent;
}
.text{
  color: rgb(42, 41, 41);
  font-size: 13px;
}
.btn2{
  padding: 10px;
  outline: none;
  width: 150px;
  border-radius: 20px;
  border-style: none;
  background-color: rgb(28, 131, 28);
  color: whitesmoke;
  font-weight: 600;
  margin-top: 10px;
}
.btn2:hover {
 background-color: rgb(1, 63, 1);
}
.status {
 color: green;
 text-align: center;
 margin: 5px;
 font-weight: 600;
}</style>
</body>

</html>
