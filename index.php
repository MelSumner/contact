<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tell Me About Yourself</title>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
  <link rel="stylesheet" href="assets/css/style.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
<body>
 <div class="container">
  <h1 class="page-header">Tell Me About Yourself!</h1>

  <form action="contact.php" method="post" id="demoForm">
    <div class="form-group">
      <label class="control-label">Full Name</label>
      <input class="form-control" type="text" name="name" maxlength="50" size="40" tabindex="1" value="<?php if (isset($scrubbed['name'])) echo $scrubbed['name']; ?>" />
    </div>

    <div class="form-group">
      <label class="control-label">Email</label>
      <input class="form-control" type="email" name="email" required="required" placeholder="Your email address" tabindex="2" value="<?php if (isset($scrubbed['email'])) echo $scrubbed['email']; ?>">
    </div>

    <div class="form-group">
      <label class="control-label">Question One:</label> <!--set up your own question to go here-->
      <textarea class="form-control" rows="5" name="q1" required="required" placeholder="Answer here, please" tabindex="3" value="<?php if (isset($scrubbed['q1'])) echo $scrubbed['q1']; ?>"></textarea>
    </div>

    <div class="form-group">
      <label class="control-label">Question Two:</label><!--set up your own question to go here-->
      <textarea class="form-control" rows="5" name="q2" required="required" placeholder="Answer here, please" tabindex="4" value="<?php if (isset($scrubbed['q2'])) echo $scrubbed['q2']; ?>"></textarea>
    </div>

    <div class="form-group">
      <label class="control-label">Question Three:</label><!--set up your own question to go here-->
      <textarea class="form-control" rows="5" name="q3" required="required" tabindex="5" placeholder="Answer here, please" value="<?php if (isset($scrubbed['q3'])) echo $scrubbed['q3']; ?>"></textarea>
    </div>

    <div class="form-group">
      <label>
        <input id="hcapt" name="month" value="" type="hidden" />
      </label>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-success">Submit Form</button>
      <button type="reset" class="btn btn-default">Clear Form</button>
    </div>

  </form>
</div>   

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
<script src="assets/js/validate.js"></script>
</body>
</html>
