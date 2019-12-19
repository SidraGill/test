<template>

    <div class="row">
        <div class="col-xs-12 col-12 block">
            <div class="wrapper-progressBar">
                <ul class="progressBar">
                    <li class="active">
                        <a href="#"> Step title 1 <br/>

                            <small>Step Description 1</small>

                        </a>

                    </li>
                    <li class="">
                        <a href="#"> Step title 2 <br/>

                            <small>Step Description 2</small>

                        </a>
                    </li>
                    <li>

                        <a href="#"> Step title 3 <br/>

                            <small>Step Description 3</small>

                        </a>
                    </li>
                    <li>

                        <a href="#"> Step title 3 <br/>

                            <small>Step Description 3</small>

                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>







<!--    <div class="container mt-5 mb-5">-->
<!--        <div id="stepwizard">-->
<!--     <div class="wrapper-progressBar"></div>-->
<!--            <ul>-->
<!--                <li>-->
<!--                                    </li>-->
<!--                <li>-->
<!--                    <a href="#step2"> Step title 2 <br/>-->

<!--                        <small>Step Description 2</small>-->

<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#step3"> Step title 3 <br/>-->

<!--                        <small>Step Description 3</small>-->

<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#step4"> Step title 4 <br/>-->

<!--                        <small>Step Description 4</small>-->

<!--                    </a>-->
<!--                </li>-->
<!--            </ul>-->

<!--            <div>-->
<!--                  <div id="step1"></div>-->
<!--                  <div id="step2"></div>-->
<!--                  <div id="step3"></div>-->
<!--                  <div id="step4"></div>-->
<!--            </div>-->
<!--        </div>-->

<!--    </div>-->


</template>


<script type="text/javascript">

    // $('#stepwizard');

</script>


<style scoped>

    .wrapper-progressBar {
        width: 100%
    }

    .progressBar {
    }

    .progressBar li {
        list-style-type: none;
        float: left;
        width: 25%;
        position: relative;
        text-align: center;
    }

    .progressBar li:before {
        content: " ";
        line-height: 30px;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        border: 1px solid #ddd;
        display: block;
        text-align: center;
        margin: 0 auto 10px;
        background-color: white
    }

    .progressBar li:after {
        content: "";
        position: absolute;
        width: 100%;
        height: 4px;
        background-color: #ddd;
        top: 15px;
        left: -50%;
        z-index: -1;
    }

    .progressBar li:first-child:after {
        content: none;
    }

    .progressBar li.active {
        color: dodgerblue;
    }

    .progressBar li.active:before {
        border-color: dodgerblue;
        background-color: dodgerblue
    }

    .progressBar .active:after {
        background-color: dodgerblue;
    }


</style>