<template>
    <div class="container">
        <form @submit="formsubmit">
            <div v-show="propertyT===1">
                <legend>Do you have any property in Pakistan registered in your name during</legend><h4> July 01. 2018 - June
                30, 2019?</h4>
                <b-form-group>
                    <div class="row">
                        <b-form-radio class="col-4" v-model="property.pr_2000_001" name="fileReturn" value="0">NO</b-form-radio>
                        <b-form-radio class="col-4" v-model="property.pr_2000_001" name="fileReturn" value="1">Yes</b-form-radio>
                    </div>
                    <b-row>
                        <b-col align-self="start"></b-col>
                        <b-col align-self="end" class="text-right">
                            <b-button v-show="property.pr_2000_001 === '1'" variant="success" @click.prevent="prop_next(2)">Next</b-button>
                            <b-button type="submit" variant="success" v-show="property.pr_2000_001 === '0'">Next</b-button>
                        </b-col>
                    </b-row>
                </b-form-group>
            </div>

            <div v-show="propertyT===2">
                <legend></legend>
                <b-form-group>

                    <div v-for="(proper, index) in properties">
                        <b-row>
                            <b-col align-self="start">Property #{{index + 1}}</b-col>
                            <b-col align-self="end" class="text-right">
                                <b-link class="btn btn-outline-danger" href="#" @click="deleteProperty(index)">Delete</b-link>
                            </b-col>
                        </b-row>
                        <label for="">Type</label>
                        <b-form-select v-model="proper.pr_2000_002" :options="property.opt_pr_2000_002" name=""></b-form-select>

                        <label for="">Area(Marla)</label>
                        <b-form-input v-model="proper.pr_2000_003" name="pr_2000_003"></b-form-input>

                        <label for="">Address</label>
                        <b-form-input v-model="proper.pr_2000_004" name="pr_2000_004"></b-form-input>

                        <label for="">City</label>
                        <b-form-input v-model="proper.pr_2000_005" name="pr_2000_005"></b-form-input>

                        <label for="">DOP</label>
                        <b-form-input type="date" v-model="proper.pr_2000_101" @change="dateComparision(proper.pr_2000_101)"
                                      name="pr_2000_101"></b-form-input>

                        <label for="">Purchased Price</label>
                        <b-form-input v-model="proper.pr_2000_102" name="pr_2000_102"></b-form-input>
                    <br>
                        <div v-show="dateComparision(proper.pr_2000_101)">
                            <label for=""><strong>If purchased this year</strong></label>
                            <br>
                            <label for="">Purchase / Transfer of Immovable Property u/s 236K</label>
                            <b-form-input v-model="proper.pr_64151101" name="pr_64151101"></b-form-input>


                            <label for="">Advance tax on registering or attesting transfer of immovable proper u/s 236W </label>
                            <b-form-input v-model="proper.pr_64151951" name="pr_64151951"></b-form-input>
                        </div>

                    </div>

                    <div v-show="property.pr_2000_001 === '1' && propertyT === 2 ">
                        <b-row>
                            <b-col align-self="start"><b-link class="btn btn-outline-info" href="#" @click.prevent="newProperty()">+Add Property Here</b-link></b-col>
                            <b-col align-self="end" class="text-right"></b-col>
                        </b-row>
                    </div>

                    <b-row>
                        <b-col align-self="start">
                            <b-button @click.prevent="prop_next(1)">Previous</b-button>
                        </b-col>
                        <b-col align-self="end" class="text-right">
                            <b-button variant="success" @click.prevent="prop_next(3)">Next</b-button>
                        </b-col>
                    </b-row>


                </b-form-group>
            </div>

            <div v-show="propertyT===3">
                <legend>CO-OWNED?</legend>
                <b-form-group>
                    <div v-for="(proper, index) in properties">
                    <div class="row">
                        <b-form-radio class="col-4" v-model="property.pr_2000_201" name="pr_2000_201" value="0">NO</b-form-radio>
                        <b-form-radio class="col-4" v-model="property.pr_2000_201" name="pr_2000_201" value="1">Yes</b-form-radio>
                    </div>

                    <div v-show="property.pr_2000_201 === '1'">
                        <label for="">if Yes, % ownership</label>
                        <b-form-input v-model="proper.pr_2000_202" name="pr_2000_202"></b-form-input>
                    </div>
                    </div>
                    <b-row>
                        <b-col align-self="start">
                            <b-button @click.prevent="prop_next(2)">Previous</b-button>
                        </b-col>
                        <b-col align-self="end" class="text-right">
                            <b-button variant="success" @click.prevent="prop_next(4)">Next</b-button>
                        </b-col>
                    </b-row>
                </b-form-group>
            </div>

            <div v-show="propertyT===4">
                <legend>RENTED OR SELF OCCUPIED?</legend>
                <b-form-group>
                    <div v-for="(proper, index) in properties">
                    <div class="row">
                        <b-form-radio class="col-4" v-model="property.pr_2000_301" name="pr_2000_301" value="0">RENTED</b-form-radio>
                        <b-form-radio class="col-4" v-model="property.pr_2000_301" name="pr_2000_301" value="1">SELF-OCCUPIED</b-form-radio>
                    </div>

                    <div v-if="property.pr_2000_301=== '0'">
                        <label for="">RENT INCOME</label>
                        <b-form-input v-model="proper.pr_2001" name="pr_2001"></b-form-input>

                        <label for="">DEPOSIT RECEIVED</label>
                        <b-form-input v-model="proper.pr_2002_001" name="pr_2002_001"></b-form-input>

                        <label for="">Date of Deposit Receipt</label>
                        <b-form-input type="date" v-model="proper.pr_date" name="pr_date"></b-form-input>

                        <label for="">TAX DEDUCTED</label>
                        <b-form-input v-model="proper.pr_2000_202" name="pr_2000_202"></b-form-input>

                        <label for="">Allowable Deduction</label>

                        <label for="">1/5th of Rent of Building for Repairs</label>
                        <b-form-input v-model="proper.pr_2031" name="pr_2031"></b-form-input>

                        <label for="">Insurance Premium</label>
                        <b-form-input v-model="proper.pr_2032" name="pr_2032"></b-form-input>

                        <label for="">Local Rate / Tax / Charge / Cess</label>
                        <b-form-input v-model="proper.pr_2033" name="pr_2033"></b-form-input>

                        <label for="">Other Deductions against Rent</label>
                        <b-form-input v-model="proper.pr_2098" name="pr_2098"></b-form-input>
                    </div>
                    </div>
                    <b-row>
                        <b-col align-self="start">
                            <b-button @click.prevent="prop_next(3)">Previous</b-button>
                        </b-col>
                        <b-col align-self="end" class="text-right">
<!--                            <b-button variant="success" v-if="dateComparision()" @click.prevent="prop_next(5)">Next</b-button>-->
<!--                            <b-button variant="success" v-else type="submit">Next</b-button>-->

                            <b-button variant="success" @click.prevent="prop_next(5)">Next</b-button>
<!--                            <b-button variant="success" >Next</b-button>-->

                        </b-col>
                    </b-row>
                </b-form-group>
            </div>

            <div v-show="propertyT === 5">
                <legend>Sold this property during the year?</legend>
                <b-form-group>
                    <div v-for="(proper, index) in properties">
                    <div class="row">
                        <b-form-radio class="col-4" v-model="property.pr_2000_401" name="pr_2000_401" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="property.pr_2000_401" name="pr_2000_401" value="1">Yes</b-form-radio>
                    </div>

                    <div v-show="property.pr_2000_401 === '1'">
                        <label for="">DOS</label>
                        <b-form-input type="date" v-model="proper.pr_2000_402" name="pr_2000_402"></b-form-input>

                        <label for="">Sale Price</label>
                        <b-form-input v-model="proper.pr_2000_403" name="pr_2000_403"></b-form-input>

                        <label for="">Sale / Transfer of Immovable proper u/s 236C (FROM SELLER)</label>
                        <b-form-input v-model="proper.pr_64150301" name="pr_64150301"></b-form-input>

                        <label for="">Tax Deducted u/s 236C where property purchased & sold within Tax Year</label>
                        <b-form-input v-model="proper.pr_64150302" name="pr_64150302"></b-form-input>

                        <label for="">Tax Deducted u/s 236C where property purchased prior to current Tax Year</label>
                        <b-form-input v-model="proper.pr_64150303" name="pr_64150303"></b-form-input>
                    </div>
                    </div>
                    <b-row>
                        <b-col align-self="start">
                            <b-button @click.prevent="prop_next(4)">Previous</b-button>
                        </b-col>
                        <b-col align-self="end" class="text-right">
                            <b-button variant="success" @click.prevent="prop_next(6)">Next</b-button>
                        </b-col>
                    </b-row>
                </b-form-group>
            </div>

            <div v-show="propertyT=== 6">
                <legend>Interest paid against loan for construction?</legend>
                <b-form-group>
                    <div v-for="(proper, index) in properties">
                    <div class="row">
                        <b-form-radio class="col-4" v-model="property.pr_2000_501" name="pr_2000_501" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="property.pr_2000_501" name="pr_2000_501" value="1">Yes</b-form-radio>
                    </div>

                    <div v-show="property.pr_2000_501 === '1'">
                        <label for="">Interest amount</label>
                        <b-form-input v-model="proper.pr_2000_202" name="pr_2000_202"></b-form-input>
                    </div>
                    </div>


                    <b-row>
                        <b-col align-self="start">
                            <b-button @click.prevent="prop_next(5)">Previous</b-button>
                        </b-col>
                        <b-col align-self="end" class="text-right">
                            <b-button variant="success" type="submit">Next</b-button>
                        </b-col>
                    </b-row>
                </b-form-group>
            </div>
<!--            {{propertyT}}-->
<!--        {{property}}-->
        {{properties}}
        </form>
    </div>
</template>

<script>
    export default {
        name: "Property",
        data() {
            return {
                propertyT: 1,
                properties: [],

                property: {
                    pr_2000_001: null,
                    pr_2000_201: null,
                    pr_2000_202: null,
                    pr_2000_301: null,
                    pr_2001: null,
                    pr_2031: null,
                    pr_2032: null,
                    pr_2033: null,
                    pr_2098: null,
                    pr_2002_001: null,
                    pr_2000_401: null,
                    pr_2000_402: null,
                    pr_2000_403: null,
                    pr_64150301: null,
                    pr_64150302: null,
                    pr_64150303: null,
                    pr_2000_501: null,
                    pr_2000_502: null,
                    pr_date: null,
                    opt_pr_2000_002: [
                        {value: 'agricultural', text: 'Agricultural'},
                        {value: 'commercial', text: 'Commercial'},
                        {value: 'industrial', text: 'Industrial'  },
                        {value: 'residential', text: 'Residential'  },
                    ],
                }
            }
        },
        computed: {},
        methods: {
            prop_next(addition) {
                this.propertyT = addition;
            },
            newProperty() {
                this.properties.push({pr_2000_002: '', pr_2000_003: '', pr_2000_004: '', pr_2000_005: '',
                    pr_2000_101: '', pr_2000_102: '', pr_64151101: '', pr_64151951: '',
                   pr_2000_202:'', pr_2001:'', pr_2002_001:'', pr_date:'', pr_2031:'', pr_2032:'', pr_2033:'', pr_2098:'',
                    pr_2000_402:'', pr_2000_403:'', pr_64150301:'', pr_64150302:'', pr_64150303:'' })
            },
            deleteProperty(index) {
                this.properties.splice(index, 1)
            },
            dateComparision(pr_2000_101) {
                let startDate = new Date('2018-01-7');
                let endDate = new Date('2019-06-30');

                let today = new Date(pr_2000_101);
                return (startDate < today && today < endDate);
            },
            formsubmit(e) {
                e.preventDefault();
                let self = this;
                axios.post('/api/propertyInfo', {
                    pr_2000_001: this.property.pr_2000_001,
                    pr_property: this.properties,
                    pr_2000_201: this.property.pr_2000_201,
                    pr_2000_202: this.property.pr_2000_202,
                    pr_2000_301: this.property.pr_2000_301,
                    pr_2001:     this.property.pr_2001,
                    pr_2031:     this.property.pr_2031,
                    pr_2032:     this.property.pr_2032,
                    pr_2033:     this.property.pr_2033,
                    pr_2098:     this.property.pr_2098,
                    pr_2002_001: this.property.pr_2002_001,
                    pr_2000_401: this.property.pr_2000_401,
                    pr_2000_402: this.property.pr_2000_402,
                    pr_2000_403: this.property.pr_2000_403,
                    pr_64150301: this.property.pr_64150301,
                    pr_64150302: this.property.pr_64150302,
                    pr_64150303: this.property.pr_64150303,
                    pr_2000_501: this.property.pr_2000_501,
                    pr_2000_502: this.property.pr_2000_502,
                    pr_date: this.property.pr_date,
                }).then(function (response) {
                     self.$router.push('/deduction');
                    alert('success');
                }).catch(function (error) {
                    alert(error)
                })
            }
        }
    }
</script>

<style scoped>
    .row {
        margin-top: 20px;
    }
</style>
