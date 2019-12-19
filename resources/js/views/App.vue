<template>
    <div app >

        <b-navbar id="" style="background-color: #F5F5F5; z-index: 1; border-bottom:0.5px solid gainsboro; box-shadow: 0 4px 3px -2px gray;" toggleable="lg" type="dark" variant="#F5F5F5">
            <b-navbar-brand href="/"><img src="/images/tax.png"></b-navbar-brand>
            <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
            <b-collapse id="nav-collapse" is-nav style="border: 2px black;">
            <b-navbar-nav>
                <!-- <b-nav-item class="nav-link" to="/personal">Personal</b-nav-item> -->
            </b-navbar-nav>
            </b-collapse>
        </b-navbar>
    <b-container fluid v-if="['Report'].indexOf($route.name)">      
        <b-row>
            <b-col class="sidebar col-xl-2 col-md-2 col-xs-1">
                <div class="sidenav" id="mySidenav" data-toggle="collapse" >
                    <ul style="list-style-type:none; padding:0px;  margin-top:60px;">
                        <li><a id="spanof" style="display:block" class="closebtn linkon" href="javascript:void(0)" v-on:click="closeNav()"><i class="fa fa-arrow-left"></i></a></li>
                        <li><a  id="spanon" class="opnbtn linkon" href="javascript:void(0)" v-on:click="openNav()" style="display:none; font-size:25px; cursor:pointer"><i class="fa fa-arrow-right"></i></a></li>
                        <li><a href="#" class="linkon" id="navof"><i style="font-size:18px; color:white; margin-right:20px;" class="fa fa-globe"></i>
                      <span class="navTxt">Tax Year:2019</span></a>
                      <a href="#" id="navon" class="navon1 linkof" style=" display:none;text-align:center; font-size:15px;" ><span>2019</span></a></li>
                        <li><a href="#"  id="navof1" class="linkon"><i style="font-size:18px; color:white; margin-right:20px;" class="fa fa-envelope-open"></i>Taxable/Refund</a>
                       <a href="#" id="navon1" class="navon1 linkof" style=" display:none;text-align:center; font-size:15px;" ><span>tax</span></a></li>
                        <li><a href="#" class="linkon"><i style="font-size:18px; color:white; margin-right:20px;" class="fa fa-globe "></i>Services</a></li>
                        <li><a href="#" class="linkon"><i style="font-size:18px; color:white; margin-right:20px;" class="fa fa-address-book "></i>Clients</a></li>
                        <li><a href="#" class="linkon"><i style="font-size:18px; color:white; margin-right:20px;" class="fa fa-handshake "></i>Contact</a></li>
                    </ul>
                </div>        <!--    <calc-comp></calc-comp>-->
            </b-col>
            <b-col class="col-10" id="main">
                    <router-view></router-view>
            </b-col>
        </b-row>

    </b-container>
        <b-container fluid v-else>
            <b-row>
                <b-col>
                    <router-view></router-view>
                </b-col>
            </b-row>
        </b-container>
    </div>
</template>
<script type="text/javascript">
    import Calculation from "../components/Calculation";
    import ProgressBar from '../components/ProgressBar';

    export default {

        components: {Calculation, ProgressBar},

        methods: {

        openNav() {
                document.getElementById("mySidenav").style.width = "210px";
                document.getElementById("mySidenav").style.display = "block";
                document.getElementById("navof").style.display = "block";
                document.getElementById("navon").style.display = "none";
      
                document.getElementById("navof1").style.display = "block";
                document.getElementById("navon1").style.display = "none";

                document.getElementById("main").style.marginLeft = "200px";
                 document.getElementById("spanon").style.display = "none";
                 document.getElementById("spanof").style.display = "block";
                document.getElementById("main1").style.marginLeft = "200px";
           },

            closeNav() {
                document.getElementById("mySidenav").style.width = "4%";
            
                document.getElementById("spanon").style.display = "block";
                document.getElementById("navon").style.display = "block";
                document.getElementById("navof").style.display = "none";
                document.getElementById("navon1").style.display = "block";
                document.getElementById("navof1").style.display = "none";
                
                document.getElementById("main").style.marginLeft = "7%";
                document.getElementById("main1").style.marginLeft = "5%";
 },

            openRightNav() {
                document.getElementById("mySidenavright").style.width = "200px";
                document.getElementById("main").style.marginLeft = "200px";
                document.getElementById("main1").style.marginLeft = "200px";

            },

            closeRightNav() {
                document.getElementById("mySidenavright").style.width = "0px";
                document.getElementById("main").style.marginLeft = "0px";
                document.getElementById("main1").style.marginLeft = "0px";

            },
            scrollFunction() {
                      console.log('we are here');
                if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
                    document.getElementById("mySidenav").style.padding = "30px";
                    document.getElementById("logo").style.fontSize = "25px";
                } else {
                    document.getElementById("navbar").style.padding = "80px 10px";
                    document.getElementById("logo").style.fontSize = "35px";
                }

            }
        }

    };
</script>
<style scoped>
    img {
        height: 40px;
    }

    .navbar-dark .navbar-nav .nav-link{
        color: #1b1e21;
        box-shadow: 0 4px 2px -2px gray;
        }
    .sidenav{
        width: 210px;
        position:fixed;
        left: 0;
        top: 0;
        height: 100%;
        display: flex;
        flex-direction: column;
        background-color: #343a40;
        color: white;
        overflow-x: hidden;
        transition: 0s;
        border-right:0.5px solid gainsboro;
       /* display: block;*/
        /*z-index: -1;*/
    } 
.sidenav li{
    left:0px;
    margin-left:-25px;
}    

    .sidenav .linkon {
        padding: 8px 8px 8px 40px;
        text-decoration: none;
        font-size: 20px;
        color: #818181;
        display: block;
        transition: 0s;
        white-space: nowrap;

    }
    .sidenav .linkof {
        text-align:center;
        padding: 8px 8px 8px 30px;
        text-decoration: none;
        font-size: 15px;
        color: #818181;
        display: block;
        transition: 0s;
        white-space: nowrap;

    }

    .sidenav a:hover {
        color: #f1f1f1;
    }

    .sidenav .closebtn {
        position: relative;
        right: -100px;
        font-size: 25px;
        margin-left: 50px;

    }

 .sidenav .opnbtn
  {
        position:relative;
        top: -50px;
        right:5px;
        font-size: 25px;
        margin-right: 70px;

    }
    .sidenav1{
        height: 100%;
        width: 0;
        position: fixed;
        top: 0;
        left: 0;
        background-color: white;
        overflow-x: hidden;
        transition: 0s;
        border-right:0.5px solid gainsboro;
    }

    .sidenav1 a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0s;
    }

    .sidenav1 a:hover {
        color: #f1f1f1;
    }

    .sidenav1 .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 25px;
        margin-left: 50px;

    }

    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }

        .sidenav1 a {
            font-size: 18px;
        }
    }

</style>

