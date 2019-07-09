<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content='IE=edge'>
    <title><?= $title ?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- <link rel='stylesheet' type='text/css' media='screen' href='main.css'> -->
    <script src='main.js'></script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  	<a class="navbar-brand" href="?t=site&a=home">Home</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  	</button>

  	<div class="collapse navbar-collapse" id="navbar1">
    	<ul class="navbar-nav mr-auto">
      		<li class="nav-item active">
        		<a class="nav-link" href="?t=table&a=showtable">Table<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
        		<a class="nav-link" href="?t=site&a=about">About <span class="sr-only">(current)</span></a>
      		</li>

  	</div>
</nav>
    <div id="maincontent">
        <?php $this->body(); ?>
    </div>
</body>

</html>