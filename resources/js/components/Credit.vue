<template>
    <div class="container">
        <form @submit="formSubmit">
            <div v-show="creditT===1">
                <legend> Have you given any donations through banking channel to any approved charity institutions?</legend>
                <b-form-group>
                    <div class="row">
                        <b-form-radio class="col-4" v-model="credit.cr_9001_001" name="cr_9001_001" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="credit.cr_9001_001" name="cr_9001_001" value="1">Yes</b-form-radio>
                    </div>

                    <div v-show="credit.cr_9001_001=== '1'">
                        <label for="employerType">Amount</label>
                        <b-form-input v-model="credit.cr_9001_002" name="cr_9001_002"></b-form-input>

                        <label for="employerName">Name of Institute</label>
                        <b-form-input v-model="credit.cr_9001_003" name="cr_9001_003"></b-form-input>
                    </div>
                    <b-row>
                        <b-col align-self="start"></b-col>
                        <b-col align-self="end" class="text-right">
                            <b-button variant="success" @click.prevent="cr_next(2)">Next</b-button>
                        </b-col>
                    </b-row>

                </b-form-group>
            </div>

            <div v-show="creditT===2">
                <legend>Do you have a life insurance plan?</legend>
                <b-form-group>
                    <div class="row">
                        <b-form-radio class="col-4" v-model="credit.cr_9312_001" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="credit.cr_9312_001" name="" value="1">Yes</b-form-radio>
                    </div>

                    <div v-show="credit.cr_9312_001=== '1'">
                        <div v-for="(plan, index) in plans">
                            <b-row>
                                <b-col align-self="start">
                                    Plan # {{index + 1}}
                                </b-col>
                                <b-col align-self="end" class="text-right"><b-link class="btn btn-outline-danger" href="#" @click="deleteplan(index)">Delete</b-link></b-col>
                            </b-row>
                            <label for="">How long it is acquired</label>
                            <b-form-input v-model="plan.cr_9312_002" name="cr_9312_002[]"></b-form-input>

                            <label for="">Insurance Premium paid during the year</label>
                            <b-form-input v-model="plan.cr_9312_003" name="cr_9312_003[]"></b-form-input>

                            <label for="">Advance Tax Paid</label>
                            <b-form-input v-model="plan.cr_9312_004" name="cr_9312_004[]"></b-form-input>
                        </div>

                        <b-row>
                            <b-col align-self="start"><b-link class="btn btn-outline-info" href="#" @click.prevent="newplan()">+ add plan</b-link></b-col>
                            <b-col align-self="end" class="text-right"></b-col>
                        </b-row>

                    </div>
                    <b-row>
                        <b-col align-self="start"><b-button @click.prevent="cr_next(1)">Previous</b-button></b-col>
                        <b-col align-self="end" class="text-right"><b-button variant="success" @click.prevent="cr_next(3)">Next</b-button></b-col>
                    </b-row>


                </b-form-group>
            </div>
            <div v-show="creditT===3">
                <legend>Do you have any health insurance?</legend>
                <b-form-group>
                    <div class="row">
                        <b-form-radio class="col-4" v-model="credit.cr_93121_001" name="" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="credit.cr_93121_001" name="" value="1">Yes</b-form-radio>
                    </div>

                    <div v-show="credit.cr_93121_001=== '1'">
                        <label for="">Insurance Premium Paid</label>
                        <b-form-input v-model="credit.cr_93121_002" name=""></b-form-input>

                        <label for="">Advance Tax Paid</label>
                        <b-form-input v-model="credit.cr_93121_003" name=""></b-form-input>
                    </div>
                    <b-row>
                        <b-col align-self="start"><b-button @click.prevent="cr_next(2)">Previous</b-button></b-col>
                        <b-col align-self="end" class="text-right"><b-button variant="success" @click.prevent="cr_next(4)">Next</b-button></b-col>
                    </b-row>


                </b-form-group>
            </div>
            <div v-show="creditT===4">
                <legend>Do you have any contribution in approved pension fund?</legend>
                <b-form-group>
                    <div class="row">
                        <b-form-radio class="col-4" v-model="credit.cr_9313_001" name="cr_9313_001" value="0">No</b-form-radio>
                        <b-form-radio class="col-4" v-model="credit.cr_9313_001" name="cr_9313_001" value="1">Yes</b-form-radio>
                    </div>

                    <div v-show="credit.cr_9313_001=== '1'">
                        <label for="">Contribution Made</label>
                        <b-form-input v-model="credit.cr_9313_002" name="cr_9313_002"></b-form-input>

                        <label for="">Name of Institution</label>
                        <b-form-input v-model="credit.cr_9313_003" name="cr_9313_003"></b-form-input>
                    </div>
                    <b-row>
                        <b-col align-self="start"><b-button @click.prevent="cr_next(3)">Previous</b-button></b-col>
                        <b-col align-self="end" class="text-right"><b-button type="submit" variant="success">Next</b-button></b-col>
                    </b-row>

                </b-form-group>
            </div>
        </form>
        {{credit}}
        {{plans}}
    </div>
</template>

<script>
    export default {
        name: "Credit",
        data() {

            return {
                creditT: 1,
                plans: [],
                credit: {
                    // cr_9004_001: null,
                    // cr_9004_002: null,
                    // cr_9004_003: null,
                    cr_9312_001: null,
                    cr_93121_001:null,
                    cr_93121_002:null,
                    cr_93121_003:null,
                }
            }
        },
        methods: {
            newplan() {
                this.plans.push({ cr_9312_002: '',  cr_9312_003: '', cr_9312_004: ''})
            },
            deleteplan(index) {
                this.plans.splice(index, 1)
            },
            cr_next(addition) {
                this.creditT = addition;
            },
            formSubmit(e) {
                e.preventDefault();
                let self = this;
                console.log(this.plans);
                axios.post('/api/creditInfo', {
                    // cr_9004_001: this.credit.cr_9004_001,
                    // cr_9004_002: this.credit.cr_9004_002,
                    // cr_9004_003: this.credit.cr_9004_003,
                    cr_9312_001: this.credit.cr_9312_001,
                    cr_insurance: this.plans,
                    // cr_9312_004: this.plans.cr_9312_004,
                     cr_93121_001:this.credit.cr_93121_001,
                    cr_93121_002:this.credit.cr_93121_002,
                    cr_93121_003:this.credit.cr_93121_003,
                })
                    .then(function (response) {
                         alert('success');
                        self.$router.push('/wealth');
                    })
                    .catch(function (error) {
                        alert(error);
                    });
            }
        }
    }
</script>

<style scoped>
    .row{
        margin-top: 15px;
    }
</style>
