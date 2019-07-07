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
		<li class="breadcrumb-item active" aria-current="page">Contact</li>
	</ol>
</div>
<!-- //page details -->

<!-- contact -->
<div class="contact py-sm-5 py-2" id="contact">
	<div class="container py-lg-3">
		<h3 class="heading mb-2">Contact Us</h3>
		<div class="row pt-lg-4">
			<div class="col-lg-5">
				<div class="w3-contact-left">
					<h4 class="about-left-agile mb-4">Contact Information </h4>
					<p class="mb-4 color-black">Your contentment is dependent on your access to uninterrupted power supply. 
						Reach out to us today.
					</p>
					<p class='color-black'><span class="fa fa-map-marker mr-2 floater"></span> 
					Head office: No. 3, 22 road, Gwarimpa, Abuja.</p>
						<hr>
					<p class='color-black'><span class="fa fa-map-marker mr-2 floater"></span>
						Commercial office: No. 25, Okanlawon street, Alagbado Lagos</p>
						<hr>
					<p><span class="fa fa-phone mr-2 floater"></span>  <a href='tel:+2348073513959' class='color-black'>
						+234 80 7351 3959 </a> </p>
						<hr>
					<p><span class="fa fa-envelope-open mr-2 floater">

					</span><a href="mailto:info@neighenergy.com.ng" class="ml-3 color-black">info@neighenergy.com.ng</a></p>
				</div>
			</div>
			<div class="col-lg-7 mt-lg-0 mt-5">
				<!-- register form grid -->
				<div class="register-top1">
					<form action="#" method="post" class="register-wthree">
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<input class="form-control" type="text" v-validate='"required|max:49"' placeholder="Enter Your First Name" v-model='Firstname' name="Firstname" required="">
									<transition  name="fadeLeft">
										<span class='custom-alert' v-show="errors.has('Firstname')">{{ errors.first('Firstname') }}</span>
									   </transition>
								</div>
								<div class="col-md-6 mt-md-0">
									<input class="form-control" type="text" v-validate='"required|max:49"' placeholder="Enter Your Last Name" v-model='Lastname' name="Lastname" required="">
									<transition  name="fadeLeft">
										<span class='custom-alert' v-show="errors.has('Lastname')">{{ errors.first('Lastname') }}</span>
									   </transition>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<input class="form-control" type="text" v-validate='"required|digits:11"' placeholder="Enter Mobile Number" v-model='mobile' name="mobile" required="">
									<transition  name="fadeLeft">
										<span class='custom-alert' v-show="errors.has('mobile')">{{ errors.first('mobile') }}</span>
									   </transition>
								</div>
								<div class="col-md-6 mt-md-0">
									<input class="form-control" type="email" v-validate='"required|email"' placeholder="Enter Email Id" v-model='email' name="email" required="">
									<transition  name="fadeLeft">
										<span class='custom-alert' v-show="errors.has('email')">{{ errors.first('email') }}</span>
									   </transition>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-12">
									<textarea placeholder="Enter your message here" v-validate='"required|max:254"' v-model='message' name="message" class="form-control"></textarea>
									<transition  name="fadeLeft">
										<span class='custom-alert' v-show="errors.has('message')">{{ errors.first('message') }}</span>
									   </transition>
								</div>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-md-12">
								<button type="submit"
								class="btn btn-aasana-w3 btn-block w-100 text-uppercase color-black" @click.prevent='contact()'>
								{{loading}}</button>
							</div>
						</div>
					</form>
				</div>
				<!--  //register form grid ends here -->
			</div>
		</div>
	</div>
</div>
<!-- //contact-->
<!-- map -->
<div class="w3l-map p-2">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.554285409854!2d7.421588814105449!3d9.104303790313399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e755b3ff0457b%3A0xdb879945e0912fb8!2s22+Rd%2C+Gwarinpa%2C+Abuja!5e0!3m2!1sen!2sng!4v1560541444152!5m2!1sen!2sng" 
	width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<!-- //map -->

	


<!-- footer -->
<foot></foot>
<!-- //footer -->

    </div>
</template>

<script>
    export default {

 //meta
 metaInfo: {
          title: 'Contact Neigh Energy Ltd',
             meta: [{
               'name': 'description',
            'content': "Contact Neigh Energy Ltd today. A renewable energy project developer that specialises in solar energy deployment.",
          }],
          noscript: [
          { innerHTML: 'JavaScript is required.' }
        ]
        },
        //meta
        data(){
            return {
				Firstname:'',
				Lastname:'',
				mobile:'',
				email:'',
				message:'',
				loading:'Send',
            }
        },

        methods: {

         contact(){
			 this.loading = 'Sending...';
			this.$validator.validateAll().then(() => {
           
		   if (!this.errors.any()) {
			   //good
			   var input = {'fname':this.Firstname, 'lname':this.Lastname, 'mobile':this.mobile, 'email':this.email, 'message':this.message};
			   //send to database with axios
				axios.post('/contact-us',input).then(res=>{
			if(res.data == 1){
				this.$toasted.show("Thank You! You Will Be Contacted Shortly.");
				this.loading = 'Send';

				this.Firstname = '';
				this.Lastname = '';
				this.mobile = '';
				this.email = '';
				this.message = '';
				
				setTimeout(func=>{
					this.errors.clear();
				},5)
				
			}else{
				this.$toasted.show("An Error Occured, Please Call Us");
				this.loading = 'Send';
			}
				
			})
			.catch(err=>{
				this.$toasted.show("An Error Occured, Please Try Again");
				this.loading = 'Send';
			})
				}else{
				//show errs
				this.loading = 'Send';
				}
				})//val end
				},

				},

        mounted() {
	document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
        }
    }
</script>
