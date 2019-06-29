<template>
    <div>
   <!-- header -->
<menubar></menubar>
<!-- //header -->

<!-- inner banner -->
<div class="inner-banner" id="home">
	<div class="container">
	</div>
</div>
<!-- //inner banner -->

<!-- page details -->
<div class="breadcrumb-agile">
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<router-link to="/">Home</router-link>
		</li>
		<li class="breadcrumb-item active" aria-current="page">Services</li>
	</ol>
</div>
<!-- //page details -->

<!-- banner bottom -->
<section class="banner_bottom py-sm-4">
	<div class="container py-lg-3">
		<h3 class="heading ">Our Services</h3>
		<div class="row text-center">
			
			<div class="col-lg-4 col-md-6 how-icon1 mt-md-0 mt-4">
				<div class="shadow">
					<div class="grid1-bg1">
					</div>
					<span class="fa fa-money floater" aria-hidden="true"></span>
					<div class="how-grid">
						<h3 class="mt-3 ">Sales And Procurement  </h3>
						<p class="mt-3 color-black">
We have partnerships with reliable and credible solar manufacturing companies all over Europe,
Asia and the United States of America. We have access to quality products and supply for the markets. </p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 how-icon2 mt-lg-0 mt-4">
				<div class="shadow">
					<div class="grid1-bg2">
					</div>
					<span class="fa fa-sun-o floater" aria-hidden="true"></span>
					<div class="how-grid">
						<h3 class="mt-3">Solar System Technologies </h3>
						<p class="mt-3 color-black">We provide the latest technologies
								in the renewable energy industry, such as;
							   Robotic Street lightning system,
								Solar Powered Air Conditioner,
								Solar powered Refrigerator,
								 Sea Wave Technology.</p>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6 how-icon3 mt-4">
				<div class="shadow">
					<div class="grid1-bg">
					</div>
					<span class="fa fa-cog floater" aria-hidden="true"></span>
					<div class=" how-grid">
						<h3 class="mt-3">Solar System Installations </h3>
						<p class="mt-3 color-black">We provide installation services for our clients. This range from;
								Street Lights, 
							   Traffic Lights,
							   Billboards,
							   Water Heater,
							   Perimeter Fencing,
							   Borehole,
							   Air Conditioners,
							   CCTV Cameras, and more.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 how-icon4 mt-4">
				<div class="shadow">
					<div class="grid1-bg1">
					</div>
					<span class="fa fa-info floater" aria-hidden="true"></span>
					<div class="how-grid">
						<h3 class="mt-3">Consultancy </h3>
						<p class="mt-3 color-black">Our relationship with our clients starts off
							 with a site evaluation by 
								one of our solar consultants. We will work with you to determine
								 your energy requirement,
								 and as well will recommend a solution that both addresses your needs 
								 and fits with your budget. 
								 Our specialist team works with you all the way through the planning
								  and execution phases.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 how-icon5 mt-4">
				<div class="shadow">
					<div class="grid1-bg2">
					</div>
					<span class="fa fa-wrench floater" aria-hidden="true"></span>
					<div class="how-grid">
						<h3 class="mt-3">Maintenance And Troubleshooting </h3>
						<p class="mt-3 color-black">
								Very little maintenance is involved in Solar Systems, Our 
								clients request for onsite visits to upgrade or extend their Solar
								 capabilities and they always appreciate the individualized services 
								 we provide. We operate both locally and regions across
								  the country, giving us a wide reach across the globe.</p>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>
<!-- //banner bottom -->

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
          title: 'Services - Neigh Energy Ltd',
             meta: [{
               'name': 'description',
            'content': "Services rendered by Neigh Energy Ltd. A renewable energy project developer that specialises in solar energy deployment.",
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


        mounted() {
			document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
        }
    }
</script>
