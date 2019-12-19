<template>
    <div class="container">
        <form @submit="formsubmit">
            <div v-show="otherIT === 1">
                <legend>Did you recive any of the following during this year?</legend>
                <b-form-group>
                    <label for="">Yield on Behbood Certificates / Pensioner's Benefit Account / Shuhada Family Benefit Account</label>
                    <div class="row">
                        <b-form-radio class="col-4" v-model="other.oth_5003041" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="other.oth_5003041" name="" value="1">Yes</b-form-radio>
                    </div>
                    <div v-show="other.oth_5003041==='1'">
                        <div class="row">
                            <div class="col">
                                <label for="">INCOME EARNED</label>
                                <b-form-input v-model="other.oth_5003041_1" name=""></b-form-input>
                            </div>
                        </div>
                    </div>

                    <br>
                    <label for="">Prize on Prize Bond u/s 156</label>
                    <div class="row">
                        <b-form-radio class="col-4" v-model="other.oth_5028_001" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="other.oth_5028_001" name="" value="1">Yes</b-form-radio>
                    </div>
                    <div v-show="other.oth_5028_001==='1'">
                        <div class="row">
                            <div class="col">
                                <label for="">INCOME EARNED</label>
                                <b-form-input v-model="other.oth_5028_001_1" name=""></b-form-input>
                            </div>
                            <div class="col">
                                <label for="">TAX DEDUCTED</label>
                                <b-form-input v-model="other.oth_5028_001_2" name=""></b-form-input>
                            </div>
                            <div class="col">
                                <label for="">NAME OF INSTITUTE</label>
                                <b-form-input v-model="other.oth_5028_001_3" name=""></b-form-input>
                            </div>
                        </div>
                    </div>

                    <br>
                    <label for="">Winnings from Crossword Puzzle u/s 156</label>
                    <div class="row">
                        <b-form-radio class="col-4" v-model="other.oth_5028_002" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="other.oth_5028_002" name="" value="1">Yes</b-form-radio>
                    </div>
                    <div v-show="other.oth_5028_002==='1'">
                        <div class="row">
                            <div class="col">
                                <label for="">INCOME EARNED</label>
                                <b-form-input v-model="other.oth_5028_002_1" name=""></b-form-input>
                            </div>
                            <div class="col">
                                <label for="">TAX DEDUCTED</label>
                                <b-form-input v-model="other.oth_5028_002_2" name=""></b-form-input>
                            </div>
                            <div class="col">
                                <label for="">NAME OF INSTITUTE</label>
                                <b-form-input v-model="other.oth_5028_002_3" name=""></b-form-input>
                            </div>
                        </div>
                    </div>

                    <br>
                    <label for="">Winnings from Raffle u/s 156</label>
                    <div class="row">
                        <b-form-radio class="col-4" v-model="other.oth_5028_003" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="other.oth_5028_003" name="" value="1">Yes</b-form-radio>
                    </div>
                    <div v-show="other.oth_5028_003==='1'">
                        <div class="row">
                            <div class="col">
                                <label for="">INCOME EARNED</label>
                                <b-form-input v-model="other.oth_5028_003_1" name=""></b-form-input>
                            </div>
                            <div class="col">
                                <label for="">TAX DEDUCTED</label>
                                <b-form-input v-model="other.oth_5028_003_2" name=""></b-form-input>
                            </div>
                            <div class="col">
                                <label for="">NAME OF INSTITUTE</label>
                                <b-form-input v-model="other.oth_5028_003_3" name=""></b-form-input>
                            </div>
                        </div>
                    </div>

                    <br>
                    <label for="">Winnings from Lottery u/s 156</label>
                    <div class="row">
                        <b-form-radio class="col-4" v-model="other.oth_5028_004" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="other.oth_5028_004" name="" value="1">Yes</b-form-radio>
                    </div>
                    <div v-show="other.oth_5028_004==='1'">
                        <div class="row">
                            <div class="col">
                                <label for="">INCOME EARNED</label>
                                <b-form-input v-model="other.oth_5028_004_1" name=""></b-form-input>
                            </div>
                            <div class="col">
                                <label for="">TAX DEDUCTED</label>
                                <b-form-input v-model="other.oth_5028_004_2" name=""></b-form-input>
                            </div>
                            <div class="col">
                                <label for="">NAME OF INSTITUTE</label>
                                <b-form-input v-model="other.oth_5028_004_3" name=""></b-form-input>
                            </div>
                        </div>
                    </div>

                    <br>
                    <label for="">Winnings from Quiz u/s 156</label>
                    <div class="row">
                        <b-form-radio class="col-4" v-model="other.oth_5028_005" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="other.oth_5028_005" name="" value="1">Yes</b-form-radio>
                    </div>
                    <div v-show="other.oth_5028_005==='1'">
                        <div class="row">
                            <div class="col">
                                <label for="">INCOME EARNED</label>
                                <b-form-input v-model="other.oth_5028_005_1" name=""></b-form-input>
                            </div>
                            <div class="col">
                                <label for="">TAX DEDUCTED</label>
                                <b-form-input v-model="other.oth_5028_005_2" name=""></b-form-input>
                            </div>
                            <div class="col">
                                <label for="">NAME OF INSTITUTE</label>
                                <b-form-input v-model="other.oth_5028_005_3" name=""></b-form-input>
                            </div>
                        </div>
                    </div>

                    <br>
                    <label for="">ANY OTHER INCOME/RECEIPT</label>
                    <div class="row">
                        <b-form-radio class="col-4" v-model="other.oth_5028_006" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="other.oth_5028_006" name="" value="1">Yes</b-form-radio>
                    </div>
                    <div v-show="other.oth_5028_006==='1'">
                        <div class="row">
                            <div class="col">
                                <label for="">INCOME EARNED</label>
                                <b-form-input v-model="other.oth_5028_006_1" name=""></b-form-input>
                            </div>
                            <div class="col">
                                <label for="">TAX DEDUCTED</label>
                                <b-form-input v-model="other.oth_5028_006_2" name=""></b-form-input>
                            </div>
                            <div class="col">
                                <label for="">NAME OF INSTITUTE</label>
                                <b-form-input v-model="other.oth_5028_006_3" name=""></b-form-input>
                            </div>
                        </div>
                    </div>
                    <b-row>
                        <b-col align-self="start"></b-col>
                        <b-col align-self="end" class="text-right"><b-button variant="success" @click.prevent="ot_next(2)">Next</b-button></b-col>
                    </b-row>

                </b-form-group>
            </div>
            <div v-show="otherIT===2">
                <legend>Do you have any foreign Income?</legend>
                <b-form-group>
                    <div class="row">
                        <b-form-radio class="col-4" v-model="other.oth_6000_001" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="other.oth_6000_001" name="" value="1">Yes</b-form-radio>
                    </div>

                    <div v-show="other.oth_6000_001==='1'">
                        <div class="row">
                            <label for="">Amount</label>
                            <b-form-input v-model="other.oth_6000_002" name=""></b-form-input>

                            <label for="">Exempt amount</label>
                            <b-form-input v-model="other.oth_6000_003" name=""></b-form-input>

                            <label for="">Tax paid</label>
                            <b-form-input v-model="other.oth_6000_004" name=""></b-form-input>
                        </div>
                    </div>
                    <b-row>
                        <b-col align-self="start"><b-button @click.prevent="ot_next(1)">Previous</b-button></b-col>
                        <b-col align-self="end" class="text-right"><b-button variant="success" @click.prevent="ot_next(3)">Next</b-button></b-col>
                    </b-row>


                </b-form-group>
            </div>
            <div v-show="otherIT===3">
                <legend>Do you have Agriculture Income?</legend>
                <b-form-group>
                    <div class="row">
                        <b-form-radio class="col-4" v-model="other.oth_6100_001" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="other.oth_6100_001" name="" value="1">Yes</b-form-radio>
                    </div>

                    <div v-show="other.oth_6100_001==='1'">
                        <div class="row">
                            <label for="">Amount</label>
                            <b-form-input v-model="other.oth_6100_002" name=""></b-form-input>

                            <label for="">Exempt amount</label>
                            <b-form-input v-model="other.oth_6100_003" name=""></b-form-input>

                            <label for="">Tax paid</label>
                            <b-form-input v-model="other.oth_6100_004" name=""></b-form-input>
                        </div>
                    </div>
                    <b-row>
                        <b-col align-self="start"><b-button @click.prevent="ot_next(2)">Previous</b-button></b-col>
                        <b-col align-self="end" class="text-right"><b-button variant="success" @click.prevent="ot_next(4)">Next</b-button></b-col>
                    </b-row>


                </b-form-group>
            </div>
            <div v-show="otherIT===4">
                <legend>DID YOU RECEIVE pension/anuity INCOME DURING THE YEAR?</legend>
                <b-form-group>
                    <div class="row">
                        <b-form-radio class="col-4" v-model="other.oth_5007_001" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="other.oth_5007_001" name="" value="1">Yes</b-form-radio>
                    </div>
                    <div v-show="other.oth_5007_001==='1'">
                        <div class="row">
                            <label for="">Amount</label>
                            <b-form-input v-model="other.oth_5007_002" name=""></b-form-input>
                        </div>
                    </div>
                    <b-row>
                        <b-col align-self="start"><b-button @click.prevent="ot_next(3)">Previous</b-button></b-col>
                        <b-col align-self="end" class="text-right"><b-button variant="success" @click.prevent="ot_next(5)">Next</b-button></b-col>
                    </b-row>



                </b-form-group>
            </div>
            <div v-show="otherIT===5">
                <legend>DID YOU RECEIVE any inheritance/gift DURING THE YEAR?</legend>
                <b-form-group>
                    <div class="row">
                        <b-form-radio class="col-4" v-model="other.oth_5028_100" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="other.oth_5028_100" name="" value="1">Yes</b-form-radio>
                    </div>

                    <div v-show="other.oth_5028_100==='1'">
                        <div class="row">
                            <label for="">Type</label>
                            <b-form-select v-model="other.oth_5028_101" :options="other.opt_oth_5028_101"></b-form-select>

                            <div v-show="other.oth_5028_101==='kind'">
                                <label for="">Description</label>
                                <b-form-input v-model="other.oth_5028_102" name=""></b-form-input>
                            </div>

                            <div v-show="other.oth_5028_101==='cash'">
                                <label for="">Amount</label>
                                <b-form-input v-model="other.oth_5028_103" name=""></b-form-input>

                                <label for="">Banking Channel</label>
                                <div class="row">
                                    <b-form-radio class="col-4" v-model="other.oth_5028_104" name="" value="0">No</b-form-radio>
                                    <b-form-radio class="col-4" v-model="other.oth_5028_104" name="" value="1">Yes</b-form-radio>
                                </div>
                            </div>
                        </div>
                    </div>
                    <b-row>
                        <b-col align-self="start"><b-button @click.prevent="ot_next(4)">Previous</b-button></b-col>
                        <b-col align-self="end" class="text-right"><b-button type="submit" varient="success">Next</b-button></b-col>
                    </b-row>


                </b-form-group>
            </div>
        </form>
        <pre>
            {{other}}
        </pre>
    </div>
</template>

<script>
    export default {
        name: "Other_Income",
        data() {
            return {
                otherIT: 1,
                other: {
                    oth_5003041: null,
                    oth_5028_001: null,
                    oth_5028_001_1: null,
                    oth_5028_001_2: null,
                    oth_5028_001_3: null,
                    oth_5028_002: null,
                    oth_5028_002_1: null,
                    oth_5028_002_2: null,
                    oth_5028_002_3: null,
                    oth_5028_003: null,
                    oth_5028_003_1: null,
                    oth_5028_003_2: null,
                    oth_5028_003_3: null,
                    oth_5028_004: null,
                    oth_5028_004_1: null,
                    oth_5028_004_2: null,
                    oth_5028_004_3: null,
                    oth_5028_005: null,
                    oth_5028_005_1: null,
                    oth_5028_005_2: null,
                    oth_5028_005_3: null,
                    oth_5028_006: null,
                    oth_5028_006_1: null,
                    oth_5028_006_2: null,
                    oth_5028_006_3: null,
                    oth_6000_001: null,
                    oth_6000_002: null,
                    oth_6000_003: null,
                    oth_6000_004: null,
                    oth_6100_001: null,
                    oth_6100_002: null,
                    oth_6100_003: null,
                    oth_6100_004: null,
                    oth_5007_001: null,
                    oth_5007_002: null,
                    oth_5028_100: null,
                    oth_5028_101: null,
                    oth_5028_102: null,
                    oth_5028_103: null,
                    oth_5028_104: null,

                    opt_oth_5028_101: [
                        {value: 'cash', text: 'Cash'},
                        {value: 'kind', text: 'Kind'},
                    ]
                }
            }
        },
        methods: {
            ot_next(addition) {
                this.otherIT = addition;
            },
            formsubmit(e) {
                let self = this;
                e.preventDefault();
                axios.post('/api/otherInfo', {
                    oth_5003041: this.other.oth_5003041,
                    oth_5028_001: this.other.oth_5028_001,
                    oth_5028_001_1: this.other.oth_5028_001_1,
                    oth_5028_001_2: this.other.oth_5028_001_2,
                    oth_5028_001_3: this.other.oth_5028_001_3,
                    oth_5028_002: this.other.oth_5028_002,
                    oth_5028_002_1: this.other.oth_5028_002_1,
                    oth_5028_002_2: this.other.oth_5028_002_2,
                    oth_5028_002_3: this.other.oth_5028_002_3,
                    oth_5028_003: this.other.oth_5028_003,
                    oth_5028_003_1: this.other.oth_5028_003_1,
                    oth_5028_003_2: this.other.oth_5028_003_2,
                    oth_5028_003_3: this.other.oth_5028_003_3,
                    oth_5028_004: this.other.oth_5028_004,
                    oth_5028_004_1: this.other.oth_5028_004_1,
                    oth_5028_004_2: this.other.oth_5028_004_2,
                    oth_5028_004_3: this.other.oth_5028_004_3,
                    oth_5028_005: this.other.oth_5028_005,
                    oth_5028_005_1: this.other.oth_5028_005_1,
                    oth_5028_005_2: this.other.oth_5028_005_2,
                    oth_5028_005_3: this.other.oth_5028_005_3,
                    oth_5028_006: this.other.oth_5028_006,
                    oth_5028_006_1: this.other.oth_5028_006_1,
                    oth_5028_006_2: this.other.oth_5028_006_2,
                    oth_5028_006_3: this.other.oth_5028_006_3,
                    oth_6000_001: this.other.oth_6000_001,
                    oth_6000_002: this.other.oth_6000_002,
                    oth_6000_003: this.other.oth_6000_003,
                    oth_6000_004: this.other.oth_6000_004,
                    oth_6100_001: this.other.oth_6100_001,
                    oth_6100_002: this.other.oth_6100_002,
                    oth_6100_003: this.other.oth_6100_003,
                    oth_6100_004: this.other.oth_6100_004,
                    oth_5007_001: this.other.oth_5007_001,
                    oth_5007_002: this.other.oth_5007_002,
                    oth_5028_100: this.other.oth_5028_100,
                    oth_5028_101: this.other.oth_5028_101,
                    oth_5028_102: this.other.oth_5028_102,
                    oth_5028_103: this.other.oth_5028_103,
                    oth_5028_104: this.other.oth_5028_104,
                }).then(function (response) {
                    alert('success');
                    self.$router.push('/Adjustable');
                }).catch(function (error) {
                    alert(error);
                })
            }
        }
    }
</script>

<style scoped>

</style>
