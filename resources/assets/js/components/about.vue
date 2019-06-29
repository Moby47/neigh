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
		<li class="breadcrumb-item active" aria-current="page">About Us</li>
	</ol>
</div>
<!-- //page details -->

<!-- about section content -->
<div class="about_section py-sm-5 py-2">
	<div class="container py-lg-3">
		<div class="row">
			<div class="col-lg-12 about_right ">
				<h3 class="heading mb-2">About Us</h3>
				<p class='color-black'>NEIGH Energy Ltd. is a renewable energy project developer that specialises in solar energy deployment.</p> 
				
				<p class="my-3 color-black">NEIGH Energy identifies, develops, and finances viable renewable energy projects.</p>

					 <p class="my-3 color-black">The company is able to offset the higher initial capital costs associated 
						 with renewable generation by taking advantage of government tariffs and incentives,
						  by strategically aligning itself with key investment banks and financial partners, and
						   by utilising sophisticated financing structure to raise the capital required to develop 
						   a project. Capital investment in the renewable energy sector will spur innovation and
						    technological advancement and drive down prices,
						  which will continue to make green energy projects more viable in the future.</p>

						  <p class="my-3 color-black">
							The company only uses proven technologies from trusted suppliers and manufacturers

							The company’s goal to bring green energy mainstream forces the company to operate at the forefront of the renewable energy sector. 
							
							The company is constantly evaluating potential markets and new technologies and is establishing new business relationships within the sector as the renewable energy market continues to expand.
							
							We oversee every phase of the development process including site selection, project development and design, project financing, construction, installation and ongoing maintenance.
							
							The company owns and operates the renewable energy that it develops.
						  </p>

							<p class="my-3 color-black">
									
									
									We serve as a premier consulting and project management company in the energy and electrical industry.
									
									The company is targeting renewable energy assets for acquisition
									
									The company is also utilising new and innovative renewable technologies, such as sea wave technology, to develop power plants.
									
									Neigh offers renewable energy solutions that reduce the world’s dependence on fossil fuels and create a greener and cleaner environment.
							</p>
				
				<h4 class=""><span>3+</span> Years of Experience</h4>
			</div> 
		 
		</div>
	</div>
</div>
<!-- //about section content -->



<!-- footer -->
<foot></foot>
<!-- //footer -->
    </div>
</template>

<script>
    export default {
 //meta
 metaInfo: {
          title: 'About Neigh Energy Ltd',
             meta: [{
               'name': 'description',
            'content': "About Neigh Energy Ltd. We are a renewable energy project developer that specialises in solar energy deployment.",
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
