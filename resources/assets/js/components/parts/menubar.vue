<template>
    <div>
	<header>
		<div class="container">
			<div class="header d-lg-flex justify-content-between align-items-center">
				<div class="header-agile">
					<h1>
						<router-link class="navbar-brand logo" to="/">
							<img src='/images/neigh-logo.jpeg' class='logo' alt='neigh energy ltd logo'/> 
							Neigh
						</router-link>
					</h1>
				</div>
				<div class="nav_w3ls">
					<nav>
						<label for="drop" class="toggle mt-lg-0 mt-2"><span class="fa fa-bars" aria-hidden="true"></span></label>
						<input type="checkbox" id="drop" />
							<ul class="menu">
								<li class="mr-lg-3 mr-2"><router-link to="/">Home</router-link></li>
								<li class="mr-lg-3 mr-2"><router-link to="/services">Services</router-link></li>
								<li class="mr-lg-3 mr-2"><router-link to="/projects">Projects</router-link></li>
								<li class="mr-lg-3 mr-2"><router-link to="/about">About</router-link></li>
								<li class="mr-lg-3 mr-2"><router-link to="/contact">Contact</router-link></li>
								<!--<li class="mr-lg-3 mr-2 p-0">
								 First Tier Drop Down 
								<label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
								<a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
								<input type="checkbox" id="drop-2"/>
								<ul class="inner-dropdown">
									<li><a href="#how">What We Do</a></li>
									<li><a href="#team">Team Members</a></li>
									<li><a href="#blog">Blog Posts</a></li>
									<li><a href="#stats">Stats</a></li>
								</ul>
								</li>-->
								
							</ul>
					</nav>
				</div>
				<!--<div class="buttons mt-lg-0 mt-2">
					<a href="contact.html">Contact Us </a>
				</div>-->
	
			</div>
		</div>
	</header>
</div>
</template>