<template>
        <div>
       
                <div class="wrap">
                        <div class="page">
                            <h2  style='margin-top:200px;'>Page Not Found. <router-link to='/'>Go Home</router-link></h2  style='margin-top:50%;'>
                        </div>
                       
                    </div>
        </div>
    </template>
    
    <style scpoed>

            @import '/css/404.css';
                
            </style>

    <script>
        export default {
    //meta
 metaInfo: {
          title: 'Page Not Found - Neigh Energy Ltd',
             meta: [{
               'name': 'description',
            'content': "Neigh Energy Ltd, a renewable energy project developer that specialises in solar energy deployment.",
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
    