<template>
    <div>
            <footer class="py-2">
                    <div class="container py-md-3">
                        <div class="row footer-grids">
                            <div class="col-md-4">
                                <div class="footer-grid left">
                                  
                                </div>
                            </div>
                            <div class="col-md-4 middle">
                                <p class="btn call"> <span class="fa fa-phone"></span> 
                                    <a href='tel:+2348073513959'>Call: +234 80 7351 3959</a></p>
                            </div>
                            <div class="col-md-4 right">

                                    <a href="#home" >
                                            <v-btn 
                                            class="floater"
                                               fab 
                                               dark
                                               color="black"
                                               small
                                               relative
                                               bottom
                                               right
                                               fixed
                                                 >
                                               <v-icon color='#fff002'>arrow_upward</v-icon>
                                               </v-btn>
                                               </a>
                                <!-- to top 
                                <div class="top-icon">
                                    <a href="#home" class="move-top text-center">
                                        <span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>To Top</a>
                                </div>
                                 //to top -->
                            </div>
                        </div>
                        <div class="middle mt-2">
                            <p>© 2019. All Rights Reserved | <router-link to="/">Neigh Energy Ltd</router-link></p>
                            <!--<p>© 2019 Official. All Rights Reserved |
                                 Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a></p> -->
                            
                            <share></share>
                        </div>
                    </div>
            
                </footer>
    </div>
</template>