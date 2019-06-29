<template>
        <div class="">
          <facebook :url="url" scale="1"></facebook>
         <twitter :url="url" title="Reach out to Neigh Energy Ltd" scale="1"></twitter>
          <linkedin :url="url" scale="1"></linkedin>
          <telegram :url="url" scale="1"></telegram>
          <whats-app :url="url" title="Reach out to Neigh Energy Ltd" scale="1"></whats-app>
          <pinterest :url="url" scale="1"></pinterest>
          <reddit :url="url" scale="1" title="Reach out to Neigh Energy Ltd"></reddit>
          <email :url="url" subject="Reach out to Neigh Energy Ltd" scale="1"></email>
        </div>
      </template>


      <script>
         //share icons
  import {
  Facebook,
  Twitter,
  Linkedin,
  Pinterest,
  Reddit,
  Telegram,
  WhatsApp,
  Email,
} from "vue-socialmedia-share";
//share icons
        export default {
          //share icons
    components: {
    Facebook,
    Twitter,
    Linkedin,
    Pinterest,
    Reddit,
    Telegram,
    WhatsApp,
    Email,
  },
  //share icons
          data: () => ({
           url:'',
          }),

          mounted(){
            //url issues
         this.url = window.location;
          },
        }
      
      </script>