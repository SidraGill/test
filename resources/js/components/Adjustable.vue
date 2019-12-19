<template>
    <div>
        <form @submit="formsubmit">
            <div v-show="adjT===1">
                <legend>Have you Paid Income tax in any of the following:</legend>
                <b-form-group>
                    <label for="">Electricity Bill</label>
                    <div class="row">
                        <b-form-radio class="col-4" v-model="adjust.adj_64140101_001" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="adjust.adj_64140101_001" name="" value="1">Yes</b-form-radio>
                    </div>
                    <div v-show="adjust.adj_64140101_001==='1'">
                        <label for="">Company</label>
                        <b-form-input v-model="adjust.adj_64140101_002" name=""></b-form-input>

                        <label for="">Consumer Number</label>
                        <b-form-input v-model="adjust.adj_64140101_003" name=""></b-form-input>

                        <label for="">Connection Type</label>
                        <b-form-input v-model="adjust.adj_64140101_004" name=""></b-form-input>

                        <label for="">Tax Deducted</label>
                        <b-form-input v-model="adjust.adj_64140101_005" name=""></b-form-input>
                    </div>

                    <label for="">Telephone Bill</label>
                    <div class="row">
                        <b-form-radio class="col-4" v-model="adjust.adj_64150001_001" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="adjust.adj_64150001_001" name="" value="1">Yes</b-form-radio>
                    </div>
                    <div v-show="adjust.adj_64150001_001==='1'">
                        <label for="">Company</label>
                        <b-form-input v-model="adjust.adj_64150001_002" name=""></b-form-input>

                        <label for="">Consumer Number</label>
                        <b-form-input v-model="adjust.adj_64150001_003" name=""></b-form-input>

                        <label for="">Connection Type</label>
                        <b-form-input v-model="adjust.adj_64150001_004" name=""></b-form-input>

                        <label for="">Tax Deducted</label>
                        <b-form-input v-model="adjust.adj_64150001_005" name=""></b-form-input>
                    </div>

                    <label for="">Cell Phone Bill</label>
                    <div class="row">
                        <b-form-radio class="col-4" v-model="adjust.adj_64150002_001" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="adjust.adj_64150002_001" name="" value="1">Yes</b-form-radio>
                    </div>
                    <div v-show="adjust.adj_64150002_001==='1'">
                        <label for="">Company</label>
                        <b-form-input v-model="adjust.adj_64150002_002" name=""></b-form-input>

                        <label for="">Consumer Number</label>
                        <b-form-input v-model="adjust.adj_64150002_003" name=""></b-form-input>

                        <label for="">Connection Type</label>
                        <b-form-input v-model="adjust.adj_64150002_004" name=""></b-form-input>

                        <label for="">Tax Deducted</label>
                        <b-form-input v-model="adjust.adj_64150002_005" name=""></b-form-input>
                    </div>

                    <label for="">Prepaid Telephone Card</label>
                    <div class="row">
                        <b-form-radio class="col-4" v-model="adjust.adj_64150003_001" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="adjust.adj_64150003_001" name="" value="1">Yes</b-form-radio>
                    </div>
                    <div v-show="adjust.adj_64150003_001==='1'">
                        <label for="">Company</label>
                        <b-form-input v-model="adjust.adj_64150003_002" name=""></b-form-input>

                        <label for="">Consumer Number</label>
                        <b-form-input v-model="adjust.adj_64150003_003" name=""></b-form-input>

                        <label for="">Connection Type</label>
                        <b-form-input v-model="adjust.adj_64150003_004" name=""></b-form-input>

                        <label for="">Tax Deducted</label>
                        <b-form-input v-model="adjust.adj_64150003_005" name=""></b-form-input>
                    </div>

                    <label for="">Phone Unit</label>
                    <div class="row">
                        <b-form-radio class="col-4" v-model="adjust.adj_64150004_001" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="adjust.adj_64150004_001" name="" value="1">Yes</b-form-radio>
                    </div>
                    <div v-show="adjust.adj_64150004_001==='1'">
                        <label for="">Company</label>
                        <b-form-input v-model="adjust.adj_64150004_002" name=""></b-form-input>

                        <label for="">Consumer Number</label>
                        <b-form-input v-model="adjust.adj_64150004_003" name=""></b-form-input>

                        <label for="">Connection Type</label>
                        <b-form-input v-model="adjust.adj_64150004_004" name=""></b-form-input>

                        <label for="">Tax Deducted</label>
                        <b-form-input v-model="adjust.adj_64150004_005" name=""></b-form-input>
                    </div>

                    <label for="">Purchase By Auction u/s 236A</label>
                    <div class="row">
                        <b-form-radio class="col-4" v-model="adjust.adj_64150101" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="adjust.adj_64150101" name="" value="1">Yes</b-form-radio>
                    </div>
                    <div v-show="adjust.adj_64150005==='1'">
                        <label for="">Advance Adjustable Tax</label>
                        <b-form-input v-model="adjust.adj_64150101_1" name=""></b-form-input>
                    </div>

                    <label for="">Domestic Air Ticket Charges u/s 236B</label>
                    <div class="row">
                        <b-form-radio class="col-4" v-model="adjust.adj_64150201" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="adjust.adj_64150201" name="" value="1">Yes</b-form-radio>
                    </div>
                    <div v-show="adjust.adj_64150201==='1'">
                        <label for="">Advance Adjustable Tax</label>
                        <b-form-input v-model="adjust.adj_64150201_1" name=""></b-form-input>
                    </div>

                    <label for="">Purchase of International Air Ticket</label>
                    <div class="row">
                        <b-form-radio class="col-4" v-model="adjust.adj_64151201" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="adjust.adj_64151201" name="" value="1">Yes</b-form-radio>
                    </div>
                    <div v-show="adjust.adj_64151201==='1'">
                        <label for="">Advance Adjustable Tax</label>
                        <b-form-input v-model="adjust.adj_64151201_1" name=""></b-form-input>
                    </div>

                    <label for="">Function/Gathering Charges u/s 236D</label>
                    <div class="row">
                        <b-form-radio class="col-4" v-model="adjust.adj_64150401" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="adjust.adj_64150401" name="" value="1">Yes</b-form-radio>
                    </div>
                    <div v-show="adjust.adj_64150401==='1'">
                        <label for="">Advance Adjustable Tax</label>
                        <b-form-input v-model="adjust.adj_64150401_1" name=""></b-form-input>
                    </div>

                    <label for="">Educational Institute Fee u/s 236I</label>
                    <div class="row">
                        <b-form-radio class="col-4" v-model="adjust.adj_64150901" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="adjust.adj_64150901" name="" value="1">Yes</b-form-radio>
                    </div>
                    <div v-show="adjust.adj_64150901==='1'">
                        <label for="">Advance Adjustable Tax</label>
                        <b-form-input v-model="adjust.adj_64150901_1" name=""></b-form-input>
                    </div>
                </b-form-group>
                <b-row>
                    <b-col align-self="start"></b-col>
                    <b-col align-self="end" class="text-right"><b-button type="submit" varient="success" class="btn btn-success">Next</b-button></b-col>
                </b-row>

            </div>
        </form>
        {{adjust}}
    </div>
</template>

<script>
    export default {
        name: "Adjustable",
        data() {
            return {
                adjT: 1,
                adjust: {
                    adj_64150401: null,

                    adj_64140101_001: null,
                    adj_64140101_002: null,
                    adj_64140101_003: null,
                    adj_64140101_004: null,
                    adj_64140101_005: null,

                    adj_64150001_001: null,
                    adj_64150001_002: null,
                    adj_64150001_003: null,
                    adj_64150001_004: null,
                    adj_64150001_005: null,

                    adj_64150002_001: null,
                    adj_64150002_002: null,
                    adj_64150002_003: null,
                    adj_64150002_004: null,
                    adj_64150002_005: null,

                    adj_64150003_001: null,
                    adj_64150003_002: null,
                    adj_64150003_003: null,
                    adj_64150003_004: null,
                    adj_64150003_005: null,

                    adj_64150004_001: null,
                    adj_64150004_002: null,
                    adj_64150004_003: null,
                    adj_64150004_004: null,
                    adj_64150004_005: null,

                    adj_64150005_001: null,
                    adj_64150005_002: null,
                    adj_64150005_003: null,
                    adj_64150005_004: null,
                    adj_64150005_005: null,

                    adj_64150101: null,
                    adj_64150101_1: null,

                    adj_64150201: null,
                    adj_64150201_1: null,

                    adj_64151201: null,
                    adj_64151201_1: null,

                    adj_64150401: null,
                    adj_64150401_1: null,

                    adj_64150901: null,
                    adj_64150901_1: null,
                }
            }
        },
        methods: {
            formsubmit(e){
                let self = this;
                e.preventDefault();
                axios.post('/api/adjustInfo', {
                    adj_64140101_001: this.adjust.adj_64140101_001,
                    adj_64140101_002: this.adjust.adj_64140101_002,
                    adj_64140101_003: this.adjust.adj_64140101_003,
                    adj_64140101_004: this.adjust.adj_64140101_004,
                    adj_64140101_005: this.adjust.adj_64140101_005,

                    adj_64150001_001: this.adjust.adj_64150001_001,
                    adj_64150001_002: this.adjust.adj_64150001_002,
                    adj_64150001_003: this.adjust.adj_64150001_003,
                    adj_64150001_004: this.adjust.adj_64150001_004,
                    adj_64150001_005: this.adjust.adj_64150001_005,

                    adj_64150002_001: this.adjust.adj_64150002_001,
                    adj_64150002_002: this.adjust.adj_64150002_002,
                    adj_64150002_003: this.adjust.adj_64150002_003,
                    adj_64150002_004: this.adjust.adj_64150002_004,
                    adj_64150002_005: this.adjust.adj_64150002_005,

                    adj_64150003_001: this.adjust.adj_64150003_001,
                    adj_64150003_002: this.adjust.adj_64150003_002,
                    adj_64150003_003: this.adjust.adj_64150003_003,
                    adj_64150003_004: this.adjust.adj_64150003_004,
                    adj_64150003_005: this.adjust.adj_64150003_005,

                    adj_64150004_001: this.adjust.adj_64150004_001,
                    adj_64150004_002: this.adjust.adj_64150004_002,
                    adj_64150004_003: this.adjust.adj_64150004_003,
                    adj_64150004_004: this.adjust.adj_64150004_004,
                    adj_64150004_005: this.adjust.adj_64150004_005,

                    adj_64150005_001: this.adjust.adj_64150005_001,
                    adj_64150005_002: this.adjust.adj_64150005_002,
                    adj_64150005_003: this.adjust.adj_64150005_003,
                    adj_64150005_004: this.adjust.adj_64150005_004,
                    adj_64150005_005: this.adjust.adj_64150005_005,

                    adj_64150101: this.adjust.adj_64150101,
                    adj_64150101_1: this.adjust.adj_64150101_1,
                    adj_64150201: this.adjust.adj_64150201,
                    adj_64150201_1: this.adjust.adj_64150201_1,
                    adj_64151201: this.adjust.adj_64151201,
                    adj_64151201_1: this.adjust.adj_64151201_1,
                    adj_64150401: this.adjust.adj_64150401,
                    adj_64150401_1: this.adjust.adj_64150401_1,
                    adj_64150901: this.adjust.adj_64150901,
                    adj_64150901_1: this.adjust.adj_64150901_1,
                }).then(function (response){
                    alert('success');
                    self.$router.push('/Report');
                }).catch(function (error){
                    alert(error);
                })
            }
        }
    }
</script>

<style scoped>

</style>
