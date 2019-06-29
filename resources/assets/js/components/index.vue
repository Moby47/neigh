<template>
    <div>
        <!-- header -->
<menubar></menubar>
<!-- //header -->

<!-- banner -->
<div class="banner_w3lspvt" id="home">
	<div class="container">
		<div class="row banner-tops-style">
			<div class="col-lg-8 style-banner slideRight">
				<h3 class="text-wh text-capitalize">Renewable energy.
                  <br>Our specialty</h3>

				<p class="text-li mt-4">NEIGH Energy Ltd, offering renewable energy solutions to reduce the world’s 
                    dependence on fossil fuels and create a greener and cleaner environment.</p>
				<router-link to="/about" class="btn button-style mt-sm-5 mt-4">About Us</router-link>
				<a href="tel:+2348073513959" class="btn call mt-sm-5 mt-4"> <span class="fa fa-phone" aria-hidden="true">

                </span> Call: +234 80 7351 3959</a>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->

<!-- banner bottom -->
<section class="banner_bottom ">
	<div class="container py-lg-3">
			<h3 class="heading">Our Services</h3>
		<div class="row text-center">
			
			<div class="col-md-4 how-icon1 mt-md-0 mt-4 ">
				<div class="shadow">
					<div class="grid1-bg1">
					</div>
					<span class="fa fa-sun-o floater" aria-hidden="true"></span>
					<div class="how-grid">
						<h3 class="mt-3">Solar Installations  </h3>
						<p class="mt-3 color-black">
                          We provide renewable energy solutions to generate energy off-grid for a wide range 
                                of uses such as homes, offices, airports and so on.</p>
					</div>
				</div>
            </div>
            <div class="col-md-4 how-icon1 mt-md-0 mt-4">
				<div class="shadow">
					<div class="grid1-bg1">
					</div>
					<span class="fa fa-wrench floater" aria-hidden="true"></span>
					<div class="how-grid">
						<h3 class="mt-3">Maintenance</h3>
						<p class="mt-3 color-black">Insufficient care 
                            for solar panels can reduce the amount of energy that these panels generate for your home.
                            We got you covered in all forms of maintenance.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 how-icon2 mt-md-0 mt-4">
				<div class="shadow">
					<div class="grid1-bg2">
					</div>
					<span class="fa fa-user-md floater" aria-hidden="true"></span>
					<div class="how-grid">
						<h3 class="mt-3">Consultancy</h3>
						<p class="mt-3 color-black">We help solar
                             companies or individuals develop business strategies, improve operations, locate clients and generate sales.</p>
					</div>
				</div>
			</div>
		</div>
		<div class='text-center floater'>
                <router-link to="/services" class=" btn button-style mt-sm-5 mt-4 color-black yellow-hover">
                    More</router-link>
				</div>
	</div>
</section>
<!-- //banner bottom -->
	


<!-- Team section -->
<section class="team " id="team">
    <div class="container ">	
		<h3 class="heading ">Our Team </h3>
		<div class="section_header">
			<div class="row text-center">
				
					<div class="card" style="width: 20rem;">
		<img class="card-img-top img-thumbnail teamsize" src="/images/Team4.jpeg"  alt="Prince Adesegun Adefemi Adeshida">
							<div class="card-body">
							  <h4 class="card-title">Prince Adesegun Adefemi Adeshida</h4>
							  <p class="card-text">chairman, Board of Directors</p>
							</div>
						  </div>

							<div class="card" style="width: 20rem;">
								<img class="card-img-top img-thumbnail teamsize" src="/images/Team6.jpeg"  alt="Clement Anifowose MFR">
								<div class="card-body">
									<h4 class="card-title">Mrs. Patricia Aruofor</h4>
									<p class="card-text">Member, Board of Directors</p>
								</div>
								</div>

					<div class="card" style="width: 20rem;">
							<img class="card-img-top img-thumbnail teamsize" src="/images/Team5.jpeg"  alt="Clement Anifowose MFR">
							<div class="card-body">
							  <h4 class="card-title">Clement Anifowose MFR</h4>
							  <p class="card-text">MD/CEO</p>
							</div>
						  </div>
					
						  <div class="card" style="width: 20rem;">
							<img class="card-img-top img-thumbnail teamsize" src="/images/team2.jpeg"  alt="Abdulqadir Mohammed Bello Esq">
							<div class="card-body">
							  <h4 class="card-title">Abdulqadir Mohammed Bello Esq</h4>
							  <p class="card-text">Head of Corperate affairs</p>
							</div>
						  </div>

						  <div class="card" style="width: 20rem;">
								<img class="card-img-top img-thumbnail teamsize" src="/images/Team1.jpeg"  alt="Miss Tonia Erazua">
								<div class="card-body">
								  <h4 class="card-title">Miss Tonia Erazua</h4>
								  <p class="card-text">Head of Human Resources and Customer relations</p>
								</div>
							  </div>


							  <div class="card" style="width: 20rem;">
									<img class="card-img-top img-thumbnail teamsize" src="/images/Team3.jpeg"  alt="Kamara Umar">
									<div class="card-body">
									  <h4 class="card-title">Kamara Umar</h4>
									  <p class="card-text">Head of Operations and Engineering</p>
									</div>
								  </div>


								  

			</div>
		</div>
	
    </div>
</section>
<!-- //Team section -->

<!-- text -->
<companyNote></companyNote>
<!-- //text -->

		
<!-- brands -->
<partners></partners>
<!-- brands -->

<!-- footer -->
<foot></foot>
<!-- //footer -->
    </div>
</template>

<script>
    export default {
//meta
metaInfo: {
          title: 'Neigh Energy Ltd',
             meta: [{
               'name': 'description',
            'content': "We are a renewable energy project developer that specialises in solar energy deployment.",
          }],
          noscript: [
          { innerHTML: 'JavaScript is required.' }
        ]
        },
        //meta
        data(){
            return {

            }
        },

        methods: {

        },

        mounted() {
			document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
        }
    }
</script>
