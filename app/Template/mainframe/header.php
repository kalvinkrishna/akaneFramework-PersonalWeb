<section class='container'>
	
<nav class="navbar ">
  <div class="navbar-brand">
    <a class="navbar-item" href="http://bulma.io">
      <img src="http://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
    </a>

    <a class="navbar-item is-hidden-desktop" href="https://github.com/jgthms/bulma" target="_blank">
      <span class="icon" style="color: #333;">
        <i class="fa fa-github"></i>
      </span>
    </a>

    <a class="navbar-item is-hidden-desktop" href="https://twitter.com/jgthms" target="_blank">
      <span class="icon" style="color: #55acee;">
        <i class="fa fa-twitter"></i>
      </span>
    </a>

    <div class="navbar-burger burger" data-target="navMenubd-example">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navMenubd-example" class="navbar-menu">
  	<div class="navbar-start">
  		<a class='navbar-item'>
  			<span class="icon" style="color: #333;">
	        	<i class="fa fa-github"></i>
	      	</span>
  		</a>
  		<a class='navbar-item'>
  			<span class="icon" style="color: #55acee;">
	        	<i class="fa fa-twitter"></i>
	      	</span>
  		</a>
  	</div>
    <div class="navbar-end">
      	<?= $this->render('mainframe/nav'); ?>
    </div>
  </div>
</nav>

</section>